<?php
session_start();
session_destroy();
header("Location: loginadmin.php"); // Redirect to login page after logout
exit();
?>
