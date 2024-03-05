<?php
// get-details.php

session_start(); // Start the session if not already started

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['eid']) && isset($_POST['diff'])) {
        // Assign the values to session variables
        $_SESSION['eid'] = $_POST['eid'];
        $_SESSION['diff'] = $_POST['diff'];

        // Send a response back to the client (you can customize the response as needed)
        $response = array('status' => 'success', 'message' => 'Session variables set successfully');
        echo json_encode($response);
    } else {
        // Send an error response if the required parameters are not provided
        $response = array('status' => 'error', 'message' => 'Missing parameters');
        echo json_encode($response);
    }
} else {
    // Send an error response for unsupported request methods
    $response = array('status' => 'error', 'message' => 'Unsupported request method');
    echo json_encode($response);
}

?>