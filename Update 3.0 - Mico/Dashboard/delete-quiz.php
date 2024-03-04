<?php

    $conn = new mysqli('localhost', 'root', '', 'codixs');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get values from AJAX request and sanitize inputs
    $eid = $conn->real_escape_string($_POST['eid']);

    $response = array();

    // Prepare and execute the DELETE query
    $deleteQuery = $conn->prepare("DELETE FROM quiz WHERE eid = ?");
    
    if (!$deleteQuery) {
        $response['status'] = 'error';
        $response['message'] = 'Error preparing query: ' . $conn->error;
    } else {
        // Bind the parameter
        $deleteQuery->bind_param('s', $eid);
        
        // Execute the query
        if ($deleteQuery->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'Data deleted successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error deleting data: ' . $deleteQuery->error;
        }

        $deleteQuery->close();
    }

    $conn->close();
    echo json_encode($response);
?>