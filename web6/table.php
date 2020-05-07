<?php
    $database_url = "localhost";
    $database_login = "u16428";
    $database_password = "6878969";
    $database_name = "u16428";
    $connection = mysqli_connect($database_url, $database_login, $database_password, $database_name) or die();
    $query_with_all_information = mysqli_query($connection, "SELECT * FROM for_number_3");
    $array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information);?>

<html>
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
                    Пароль
                </th>
            </tr>
            <?php
                do
                {
                    echo "<tr><td>".$array_with_query_with_all_information['id']."</td><td>".$array_with_query_with_all_information['name']."</td><td>".$array_with_query_with_all_information['password']."</td><td>".$array_with_query_with_all_information['login']."</td></tr>";
                }
                while($array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information));?>
        </tbody>
    </table>
</html>