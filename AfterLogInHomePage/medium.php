<?php
// Database connection
$servername = "localhost";
$username = "root";
$dbname = "codixs";

$conn = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch a random question and choices from the 'easy' table excluding encountered questions
$encounteredQuestions = isset($_GET['encountered']) ? explode(',', $_GET['encountered']) : [];
$encounteredCondition = !empty($encounteredQuestions) ? "WHERE Questions NOT IN ('" . implode("','", $encounteredQuestions) . "')" : "";
$sql = "SELECT Questions, a, b, c, d FROM medium $encounteredCondition ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

// Check if there are questions available
if ($result->num_rows > 0) {
    // Output data of the random question
    $question = $result->fetch_assoc();
} else {
    echo "0 results";
}
$conn->close();

// Output question as JSON
echo json_encode($question);
?>
