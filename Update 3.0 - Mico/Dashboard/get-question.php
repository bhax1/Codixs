<?php
// get-question.php

session_start();

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'codixs');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Check if qid is set in the POST request
    if (isset($_POST['qid'])) {
        // Use prepared statement to prevent SQL injection
        $qid = $_POST['qid'];
        $stmt = $conn->prepare("SELECT * FROM questions WHERE eid=? AND qid=?");
        $stmt->bind_param("ss", $_SESSION['eid'], $qid);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch the result row
        $row = $result->fetch_assoc();

        // Prepare the response
        $response = [
            'status' => 'success',
            'data' => [
                'promptquestion' => $row['Questions'],
                'options' => [
                    ['text' => $row['a'], 'is_right' => ($row['answers'] === 'a')],
                    ['text' => $row['b'], 'is_right' => ($row['answers'] === 'b')],
                    ['text' => $row['c'], 'is_right' => ($row['answers'] === 'c')],
                    ['text' => $row['d'], 'is_right' => ($row['answers'] === 'd')],
                ]
            ]
        ];

        // Close the prepared statement
        $stmt->close();

        // Send the JSON response
        echo json_encode($response);
    } else {
        // Invalid request
        $response = ['status' => 'error', 'message' => 'Invalid request.'];
        echo json_encode($response);
    }
}

// Close the database connection
$conn->close();
?>