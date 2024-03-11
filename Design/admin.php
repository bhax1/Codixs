<?php
// Check if there is a POST request from the form
if(isset($_POST['submit'])){
    $email = strtolower($_POST['email']);
    $password = strtolower($_POST['password']);
    
    // Check if email and password are correct
    if($email == "admin@gmail.com" && $password == "123456" ){
        echo "<script>
        alert('Welcome Master!');
        window.location.href = '/index-admin.html'; 
        </script>";
        exit();
    } else {
        // Perform actions for wrong email or password
        if(empty($email) || empty($password)){
            echo "<script>alert('Please input both email and password!');</script>";
        } else if ($email != "admin@gmail.com"){
            echo "<script>alert('Incorrect Email!');</script>";
        } else if ($password != "123456"){
            echo "<script>alert('Incorrect Password!');</script>";
        }
    }
}
?>