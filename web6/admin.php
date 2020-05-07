<?php
    if((empty($_SERVER["PHP_AUTH_USER"])) || (empty($_SERVER["PHP_AUTH_PW"])) || ($_SERVER["PHP_AUTH_USER"] != "admin") || (md5($_SERVER["PHP_AUTH_PW"]) != md5("123")))
    {
        header("WWW-Authenticate: Basic realm='My realm'");
        header("HTTP/1.1 401 Unauthorized");
        print("<h1>401 Требуется авторизация</h1>");
        exit();
    }
    else
    {
        print("Вы успешно авторизовались и видите защищённые паролем данные.");
        $database_url = "localhost";
        $database_login = "u16428";
        $database_password = "6878969";
        $database_name = "u16428";
        $connection = mysqli_connect($database_url, $database_login, $database_password, $database_name) or die();
        $query_with_all_information = mysqli_query($connection, "SELECT * FROM for_number_3");
        $array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information);
        do
        {
            echo $array_with_query_with_all_information["name"];
        }
        while($array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information));
    }