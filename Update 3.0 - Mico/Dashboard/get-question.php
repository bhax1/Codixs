<?php
    $conn = new mysqli('localhost', 'root', '', 'codixs');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $response = array();

    if (isset($_POST['qid'])) {
        $qid = $conn->real_escape_string($_POST['qid']);

        $selectQuery = $conn->prepare("SELECT eid, Questions, a, b, c, d, answers FROM questions WHERE qid = ?");
        $selectQuery->bind_param('s', $qid);

        if (!$selectQuery) {
            $response['status'] = 'error';
            $response['message'] = 'Error preparing query: ' . $conn->error;
        } elseif ($selectQuery->execute()) {
            $selectQuery->bind_result($eid, $promptquestion, $question_opt0, $question_opt1, $question_opt2, $question_opt3, $answer);

            if ($selectQuery->fetch()) {
                $response['status'] = 'success';
                $response['data'] = array(
                    'eid' => $eid,
                    'promptquestion' => $promptquestion,
                    'options' => array(
                        array('text' => $question_opt0, 'is_right' => ($answer === 'a' ? '1' : '0')),
                        array('text' => $question_opt1, 'is_right' => ($answer === 'b' ? '1' : '0')),
                        array('text' => $question_opt2, 'is_right' => ($answer === 'c' ? '1' : '0')),
                        array('text' => $question_opt3, 'is_right' => ($answer === 'd' ? '1' : '0'))
                    )
                );
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Question not found';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error fetching data: ' . $selectQuery->error;
        }

        $selectQuery->close();
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Question ID not provided';
    }

    $conn->close();
    echo json_encode($response);
?>