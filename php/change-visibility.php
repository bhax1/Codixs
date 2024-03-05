<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'codixs');
    if ($conn->connect_error) {
        $response = array('status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit();
    }

    $eid = $_SESSION['eid'];

    $sqlGetVisibility = "SELECT `visibility` FROM `quiz` WHERE `eid` = '$eid'";
    $result = $conn->query($sqlGetVisibility);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentVisibility = $row['visibility'];

        if ($currentVisibility === 'Private') {
            $newVisibility = 'Public';
        } else {
            $newVisibility = 'Private';
        }

        $sqlUpdateVisibility = "UPDATE `quiz` SET `visibility` = '$newVisibility' WHERE `eid` = '$eid'";
        if ($conn->query($sqlUpdateVisibility) === TRUE) {
            $response = array('status' => 'success', 'message' => 'Visibility changed successfully');
            echo json_encode($response);
        } else {
            $response = array('status' => 'error', 'message' => 'Error updating visibility: ' . $conn->error);
            echo json_encode($response);
        }
    } else {
        $response = array('status' => 'error', 'message' => 'Quiz not found');
        echo json_encode($response);
    }
    $conn->close();
?>