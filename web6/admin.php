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
        include("table.php");
    }