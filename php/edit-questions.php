<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'codixs');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

$eid = $_POST['eid'];
$qid = $_POST['qid'];
$promptquestion = $_POST['promptquestion'];
$question_opt0 = $_POST['question_opt0'];
$question_opt1 = $_POST['question_opt1'];
$question_opt2 = $_POST['question_opt2'];
$question_opt3 = $_POST['question_opt3'];
$answer = $_POST['answer'];

if (empty($promptquestion) || empty($question_opt0) || empty($question_opt1) || empty($question_opt2) || empty($question_opt3)) {
    $response['status'] = 'error';
    $response['message'] = 'All fields must be filled';
} else {
    $updateQuery = $conn->prepare("UPDATE questions SET Questions=?, a=?, b=?, c=?, d=?, answers=? WHERE eid=? AND qid=?");
    $updateQuery->bind_param('ssssssss', $promptquestion, $question_opt0, $question_opt1, $question_opt2, $question_opt3, $answer, $eid, $qid);

    if (!$updateQuery) {
        $response['status'] = 'error';
        $response['message'] = 'Error preparing query: ' . $conn->error;
    } elseif ($updateQuery->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Data updated successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error updating data: ' . $updateQuery->error;
    }

    $updateQuery->close();
}

$conn->close();
echo json_encode($response);
?>