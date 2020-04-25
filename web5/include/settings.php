<?php
    header("Content-Type: text/html; charset=UTF-8");

    $database_url = "localhost";
	$database_login = "u16428";
	$database_password = "6878969";
	$database_name = "u16428";
	$connection = mysqli_connect($database_url, $database_login, $database_password, $database_name) or die();
    session_start();
?>
