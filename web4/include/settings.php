<?php
    header("Content-Type: text/html; charset=UTF-8");

    $database_url = "localhost";
	$database_login = "u16428";
	$database_password = "6878969";
	$database_name = "u16428";
	$connection = mysqli_connect($database_url, $database_login, $database_password, $database_name) or die();
    $messages = array();
    $errors = array();
    $values = array();

    if($_COOKIE['saved'] == "1")
    {
        setcookie('saved', '');
        $messages[] = 'Спасибо, результаты сохранены.';
    }
    if ($errors['name'])
    {
        setcookie('error_of_name', '');
        $messages[] = '<div class="error">Заполните имя.</div>';
    }

    $values['name'] = empty($_COOKIE['value_of_name']) ? '' : $_COOKIE['value_of_name'];
?>
