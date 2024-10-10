<?php
session_start();  // Start the session

// Destroy all session data
session_destroy();

// Optionally, you can unset specific session variables
// unset($_SESSION['user_id']);
// unset($_SESSION['user_email']);

// Redirect the user to the login page or homepage
header("Location: index.php");
exit();
?>