<?php

session_start(); // Start The Session
session_unset(); // Unset The Data = $_SESSION = array();
session_destroy(); // Destroy The Session

header('location: index.php'); // Go To index.php
exit(); // Exit From Header If There Error


?>
