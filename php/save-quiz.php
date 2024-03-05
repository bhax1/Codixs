<?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'codixs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $quizName = $conn->real_escape_string($_POST['quizName']);
    $difficulty = $conn->real_escape_string($_POST['difficulty']);
    $visibility = 'Private';
    $ID = $_SESSION['ID'];

    $response = array();
    

    if (empty($quizName) || empty($difficulty)) {
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

            $query = mysqli_query($conn, "SELECT * FROM list WHERE Email='$ID'");
            $row = mysqli_fetch_array($query);
            $Name = $row['Name'];

            $insertQuery = $conn->prepare("INSERT INTO quiz (eid, diff, quizname, visibility, ID, Name) VALUES (?, ?, ?, ?, ?, ?)");
            $insertQuery->bind_param('ssssis', $eid, $difficulty, $quizName, $visibility, $ID, $Name);

            if ($insertQuery->execute()) {
                $response['status'] = 'success';
                $response['message'] = 'Quiz added successfully';
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