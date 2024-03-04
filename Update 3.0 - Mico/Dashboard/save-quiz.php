<?php
    session_start();

    // Connect to your database (replace with your credentials)
    $conn = new mysqli('localhost', 'root', '', 'codixs');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_POST['savedquiz'] === 'true') {
        $_SESSION['quizid'] = $_POST['quizid'];
        // Get values from AJAX request and sanitize inputs
        $quizName = $conn->real_escape_string($_POST['quizName']);
        $difficulty = $conn->real_escape_string($_POST['difficulty']);
        $quizType = $conn->real_escape_string($_POST['quizType']);
        $totalquestions = $conn->real_escape_string($_POST['totalquestions']);

        $response = array();

        // Server-side validation
        if (empty($quizName) || empty($difficulty) || empty($quizType)) {
            $response['status'] = 'error';
            $response['message'] = 'All fields must be filled';
        } else {
            $checkQuery = $conn->prepare("SELECT * FROM quiz WHERE quizname = ? LIMIT 1");
            $checkQuery->bind_param('s', $quizName);
            $checkQuery->execute();
            $result = $checkQuery->get_result();

            if ($result->num_rows > 0) {
                $response['status'] = 'error';
                $response['message'] = 'Quiz name already exists';
            } else {
                $eid = uniqid();

                $insertQuery = $conn->prepare("INSERT INTO quiz (eid, diff, type, quizname, totalquestions) VALUES (?, ?, ?, ?, ?)");
                $insertQuery->bind_param('ssssi', $eid, $difficulty, $quizType, $quizName, $totalquestions);

                if ($insertQuery->execute()) {
                    $response['status'] = 'error';
                    $response['message'] = 'Data inserted successfully';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Error inserting data: ' . $conn->error;
                }

                $insertQuery->close();
            }
        }
        $conn->close();
        echo json_encode($response);
    }

    if ($_POST['savedquestions'] === 'true') {
        // Get values from AJAX request and sanitize inputs
        $eid = $conn->real_escape_string($_POST['eid']);
        $promptquestion = $conn->real_escape_string($_POST['promptquestion']);
        $question_opt0 = $conn->real_escape_string($_POST['question_opt0']);
        $question_opt1 = $conn->real_escape_string($_POST['question_opt1']);
        $question_opt2 = $conn->real_escape_string($_POST['question_opt2']);
        $question_opt3 = $conn->real_escape_string($_POST['question_opt3']);
        $answer = $conn->real_escape_string($_POST['answer']);

        $response = array();

        if (empty($promptquestion) || empty($question_opt0) || empty($question_opt2) || empty($question_opt3)) {
            $response['status'] = 'error';
            $response['message'] = 'All fields must be filled';
        } else {
                $qid = uniqid();

                $insertQuery = $conn->prepare("INSERT INTO questions (eid, qid, Questions, a, b, c, d, answers) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $insertQuery->bind_param('sssss', $eid, $qid, $promptquestion, $question_opt0, $question_opt1, $question_opt2, $question_opt3, $answer);

                if ($insertQuery->execute()) {
                    $response['status'] = 'error';
                    $response['message'] = 'Data inserted successfully';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Error inserting data: ' . $conn->error;
                }
                $insertQuery->close();
            
        }
        $conn->close();
        echo json_encode($response);
    }
?>