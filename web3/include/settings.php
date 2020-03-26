<?php
    header("Content-Type: text/html; charset=UTF-8");

    $database_url = "localhost";
	$database_login = "u16428";
	$database_password = "TB5ENmFh";
	$database_name = "u16428";
	$db = new PDO("mysql:host=localhost;dbname=u16428", $database_login, $database_password, array(PDO::ATTR_PERSISTENT => true));
?>
