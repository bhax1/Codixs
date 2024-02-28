<?php
// Establish a connection to the database
$servername = "127.0.0.1";
$username = "root";
$password = " ";
$database = "codixs";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions and answers from the database
$sql = "SELECT Questions, a, b, c FROM easy";
$result = $conn->query($sql);

$questions = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}

// Close the connection
$conn->close();

// Return questions and answers as JSON
echo json_encode($questions);
?>