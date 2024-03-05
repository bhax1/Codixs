<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'codixs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $score = $_POST['score'];
    $totalQuestions = $_SESSION['total'];
    $points = $_POST['points'];
    $playEid = $_SESSION['play-eid'];
    
    $query = "INSERT INTO quiz_results (eid, score, total_questions, points) VALUES ('$playEid', '$score', '$totalQuestions', '$points')";
    
    if ($conn->query($query) === TRUE) {
        echo "Results saved successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();
?>