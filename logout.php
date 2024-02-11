<?php
// Logout code
session_start(); // Ensure sessions are started

// Unset or destroy session variables related to login status
unset($_SESSION['user_id']); // Unset the user_id session variable (or any other relevant variables)

// Redirect to a logout success page or any desired location
header("Location: index.php"); // Redirect to a logout success page
exit;
?>
