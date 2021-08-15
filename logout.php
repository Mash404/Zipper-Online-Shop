<?php
session_start();
//echo <"pre">;
//print_r($_SESSION['user_data']);


session_destroy();

header("location: index.php");