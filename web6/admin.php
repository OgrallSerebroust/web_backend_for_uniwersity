<?php
    if((empty($_SERVER["PHP_AUTH_USER"])) || (empty($_SERVER["PHP_AUTH_PW"])) || ($_SERVER["PHP_AUTH_USER"] != "admin") || (md5($_SERVER["PHP_AUTH_PW"] != md5("123"))))
    {
        header("HTTP/1.1 401 Unauthorized");
        header("WWW-Authenticate: Basic realm='My realm'");
        print("<h1>401 Требуется авторизация</h1>");
        exit();
    }

    print("Вы успешно авторизовались и видите защищённые паролем данные.");