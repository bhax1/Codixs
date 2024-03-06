<?php
session_start();
if (isset($_POST['logout'])) {
    error_log('Logout request received');
    session_unset();
    session_destroy();
    error_log('Session destroyed');
    exit();
}
?>