<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'codixs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $userId = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $score = $_POST['score'];
    $totalQuestions = $_SESSION['total'];
    $points = $_POST['points'];
    $playEid = $_SESSION['play-eid'];
    
    $select = $conn->prepare("SELECT * FROM quiz_results WHERE ID = ? AND eid = ?");
    $select->bind_param('is', $userId, $playEid);
    $select->execute();
    $result = $select->get_result();

    if ($result->num_rows > 0) {
        $update = $conn->prepare("UPDATE quiz_results SET score = ?, total_questions = ?, points = ? WHERE ID = ? AND eid = ?");
        $update->bind_param('iiiis', $score, $totalQuestions, $points, $userId, $playEid);
    
        if ($update->execute()) {
            echo "Results updated successfully";
        } else {
            echo "Error updating results";
        }
    
        $update->close();
    } else {
        $query = $conn->prepare("INSERT INTO quiz_results (ID, Name, eid, score, total_questions, points) VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param('issiii', $userId, $userName, $playEid, $score, $totalQuestions, $points);

        if ($query->execute()) {
            echo "Results saved successfully";
        } else {
            echo "Error saving results";
        }

        $query->close();
    }

    $select->close();
    $conn->close();
?>
