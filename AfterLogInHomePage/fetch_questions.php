<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'codixs');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch a random question from the database
$sql = "SELECT Question, a, b, c, d FROM easy ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

$questionData = array();

if ($result->num_rows > 0) {
    // Fetch the question data
    $row = $result->fetch_assoc();
    $questionData = array(
        'question' => $row['Question'],
        'choices' => array(
            'A' => $row['a'],
            'B' => $row['b'],
            'C' => $row['c'],
            'D' => $row['d']
        )
    );
} else {
    echo "No questions found";
}

// Close the database connection
$conn->close();

// Encode the question data to JSON format and echo it
echo json_encode($questionData);
?>
