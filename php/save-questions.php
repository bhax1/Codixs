<?php
    $conn = new mysqli('localhost', 'root', '', 'codixs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $promptquestion = $_POST['promptquestion'];
    $question_opt0 = $_POST['question_opt0'];
    $question_opt1 = $_POST['question_opt1'];
    $question_opt2 = $_POST['question_opt2'];
    $question_opt3 = $_POST['question_opt3'];
    $answer = $_POST['answer'];
    $eid = $_POST['eid'];

    $response = array();

    if (empty($promptquestion) || empty($question_opt0) || empty($question_opt2) || empty($question_opt3)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields must be filled';
    } else {
        $qid = uniqid();

        $insertQuery = $conn->prepare("INSERT INTO questions (eid, qid, Questions, a, b, c, d, answers) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insertQuery->bind_param('ssssssss', $eid, $qid, $promptquestion, $question_opt0, $question_opt1, $question_opt2, $question_opt3, $answer);

        if (!$insertQuery) {
            $response['status'] = 'error';
            $response['message'] = 'Error preparing query: ' . $conn->error;
        } elseif ($insertQuery->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'Data inserted successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error inserting data: ' . $insertQuery->error;
        }

        $insertQuery->close();
    }

    $conn->close();
    echo json_encode($response);
?>