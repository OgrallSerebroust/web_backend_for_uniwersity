<?php
    header("Content-Type: text/html; charset=UTF-8");

    $database_url = "localhost";
	$database_login = "u16428";
	$database_password = "TB5ENmFh";
	$database_name = "u16428";
	$connection = mysqli_connect($database_url, $database_login, $database_password) or die(mysql_error());
    if (!$link)
    {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
	$select_database = mysql_select_db($database_name, $connection) or die(mysql_error());
?>
