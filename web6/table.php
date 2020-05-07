<?php
    $database_url = "localhost";
    $database_login = "u16428";
    $database_password = "6878969";
    $database_name = "u16428";
    $connection = mysqli_connect($database_url, $database_login, $database_password, $database_name) or die();
    $query_with_all_information = mysqli_query($connection, "SELECT * FROM for_number_3");
    $array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information);?>

<html>
    <head>
        <title>
            Admin panel
        </title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="main_part_of_our_site">
            <table>
                <tbody>
                    <tr>
                        <th>
                            ID пользователя
                        </th>
                        <th>
                            Имя пользователя
                        </th>
                        <th>
                            Логин
                        </th>
                        <th>
                            Пароль
                        </th>
                        <th>
                            Почта
                        </th>
                        <th>
                            Дата рождения
                        </th>
                        <th>
                            Пол
                        </th>
                        <th>
                            Количество конечностей
                        </th>
                        <th>
                            Умения
                        </th>
                        <th>
                            Биография
                        </th>
                    </tr>
                    <?php
                        do
                        {
                            echo "<tr><td>".$array_with_query_with_all_information['id']."</td><td>".$array_with_query_with_all_information['name']."</td><td>".$array_with_query_with_all_information['login']."</td><td>".$array_with_query_with_all_information['password']."</td><td>".$array_with_query_with_all_information['email']."</td><td>".$array_with_query_with_all_information['birthday']."</td><td>".$array_with_query_with_all_information['sex']."</td><td>".$array_with_query_with_all_information['foots']."</td><td>".$array_with_query_with_all_information['perks']."</td><td>".$array_with_query_with_all_information['biographi']."</td></tr>";
                        }
                        while($array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information));?>
                </tbody>
            </table>
        </div>
    </body>
</html>