<?php 

session_start();
session_unset(); // Removed the arguments
header("Location: ../welcome page");
exit(); // Make sure to exit after redirection
?>
