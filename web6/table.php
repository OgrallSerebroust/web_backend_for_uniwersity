<?php
    include("settings.php");
    $query_with_all_information = mysqli_query($connection, "SELECT * FROM for_number_3");
    $array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST["delete"]))
        {
            $id_of_user_for_deleting = substr($_POST["delete"], 40);
            echo $id_of_user_for_deleting;
            mysqli_query($connection, "DELETE FROM for_number_3 WHERE id = '".$id_of_user_for_deleting."'");
            //header("Refresh:0");
        }
    }?>

<html>
    <head>
        <title>
            Admin panel
        </title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="main_part_of_our_site">
            <?php
            echo "<div class='special_messages'>Вы успешно авторизовались и видите защищённые паролем данные.</div>";?>
            <table>
                <form action="" method="post">
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
                        <th>
                            Удаление
                        </th>
                    </tr>
                    <?php
                    do
                    {
                        $string_for_button = 'Удалить пользователя ' . $array_with_query_with_all_information['id'];
                        echo "<tr><td>".$array_with_query_with_all_information['id']."</td><td>".$array_with_query_with_all_information['name']."</td><td>".$array_with_query_with_all_information['login']."</td><td>".$array_with_query_with_all_information['password']."</td><td>".$array_with_query_with_all_information['email']."</td><td>".$array_with_query_with_all_information['birthday']."</td><td>".$array_with_query_with_all_information['sex']."</td><td>".$array_with_query_with_all_information['foots']."</td><td>".$array_with_query_with_all_information['perks']."</td><td>".$array_with_query_with_all_information['biographi']."</td><td><input type='submit' name='delete' value='".$string_for_button."'></td></tr>";
                    }
                    while($array_with_query_with_all_information = mysqli_fetch_array($query_with_all_information));?>
                    </tbody>
                </form>
            </table>
        </div>
    </body>
</html>