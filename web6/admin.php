<?php
    if((empty($_SERVER["PHP_AUTH_USER"])) || (empty($_SERVER["PHP_AUTH_PW"])))
    {
        header("WWW-Authenticate: Basic realm='My realm'");
        header("HTTP/1.1 401 Unauthorized");
        print("<h1>401 Требуется авторизация</h1>");
        exit();
    }
    else
    {
        print("Вы успешно авторизовались и видите защищённые паролем данные.");
    }
    ?>