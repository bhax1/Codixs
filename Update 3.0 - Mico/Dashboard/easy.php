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

// Ensure session is started
session_start();

$encounteredQuestions = isset($_GET['encountered']) ? explode(',', $_GET['encountered']) : [];
$encounteredCondition = !empty($encounteredQuestions) ? "AND Questions NOT IN ('" . implode("','", $encounteredQuestions) . "')" : "";

// Use prepared statements to prevent SQL injection
$sql = "SELECT Questions, a, b, c, d, answers FROM questions WHERE eid = ? $encounteredCondition ORDER BY RAND() LIMIT 1";
$stmt = $conn->prepare($sql);

// Bind parameters if needed
$stmt->bind_param("s", $_SESSION['play-eid']);

$stmt->execute();

$result = $stmt->get_result();

// Check if there are questions available
if ($result->num_rows > 0) {
    // Output data of the random question
    $question = $result->fetch_assoc();
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();

// Output question as JSON
echo json_encode($question);
?>