<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
    $response = array('status' => 'error', 'message' => 'User not logged in');
    echo json_encode($response);
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'codixs');
if ($conn->connect_error) {
    $response = array('status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error);
    echo json_encode($response);
    exit();
}

$quizName = $_POST['quizName'];
$difficulty = $_POST['difficulty'];
$userId = $_SESSION['id'];
$userName = $_SESSION['name'];

$sql = "INSERT INTO `quiz` (`eid`, `ID`, `Name`, `diff`, `quizname`, `visibility`)
        VALUES ('$userId', $userId, '$userName', '$difficulty', '$quizName', 'Private')";

if ($conn->query($sql) === TRUE) {
    $response = array('status' => 'success', 'message' => 'Quiz saved successfully');
    echo json_encode($response);
} else {
    $response = array('status' => 'error', 'message' => 'Error: ' . $conn->error);
    echo json_encode($response);
}

$conn->close();
?>
