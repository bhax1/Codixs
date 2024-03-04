<?php
    $conn = new mysqli('localhost', 'root', '', 'codixs');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Get values from AJAX request and sanitize inputs
    $quizName = $conn->real_escape_string($_POST['quizName']);
    $difficulty = $conn->real_escape_string($_POST['difficulty']);
    $quizType = $conn->real_escape_string($_POST['quizType']);

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

            $insertQuery = $conn->prepare("INSERT INTO quiz (eid, diff, type, quizname) VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param('ssss', $eid, $difficulty, $quizType, $quizName);

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

?>