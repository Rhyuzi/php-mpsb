<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or another location
// header("location:../index.php");
ob_start(); // Start output buffering
echo '<script>window.location.href = "../index.php";</script>';
exit();
ob_end_flush(); // Flush output buffer
?>