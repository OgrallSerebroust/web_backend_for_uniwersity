<?
    include("include/settings.php");
?>
<!DOCTYPE html>
<html>

<head lang="ru">
    <title>
        Форма для Веб-сервера
    </title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="our_main_shadow"></div>
    <?php
        if(!empty($messages))
        {
            print('<div id="messages">');
            foreach ($messages as $message) print($message);
            print('</div>');
        }
        #if(!empty($_GET['completed_registration'])) echo '<div>Уважаемый пользователь! Поздравляем, все данные сохранены!</div>';
    ?>
    <div id="our_site">
        <form method="post" action="">
            <table width="50%" height="500">
                <tr>
                    <th>
                        Имя:
                    </th>
                    <td colspan="8">
                        <input class="our_text_inputs_in_table" name="name" size="40" maxlength="40" type="text">
                    </td>
                </tr>
                <tr>
                    <th>
                        E-mail:
                    </th>
                    <td colspan="8">
                        <input class="our_text_inputs_in_table" name="email" size="40" maxlength="40" type="text">
                    </td>
                </tr>
                <tr>
                    <th>
                        Дата рождения:
                    </th>
                    <td colspan="8">
                        <select class="selections_in_our_table" name="birthday">
                            <option selected>Год</option>
                            <?php
                                for($i = 1900; $i <= 2020; $i++) echo '<option>' . $i . '</option>';
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Пол:
                    </th>
                    <td colspan="2">
                        Мужской:
                    </td>
                    <td colspan="2">
                        <input name="sex" type="radio" value="Man">
                    </td>
                    <td colspan="2">
                        Женский:
                    </td>
                    <td colspan="2">
                        <input name="sex" type="radio" value="Woman">
                    </td>
                </tr>
                <tr>
                    <th>
                        Колличество конечностей:
                    </th>
                    <td>
                        2
                    </td>
                    <td>
                        <input name="foots" type="radio" value="2">
                    </td>
                    <td>
                        4
                    </td>
                    <td>
                        <input name="foots" type="radio" value="4">
                    </td>
                    <td>
                        6
                    </td>
                    <td>
                        <input name="foots" type="radio" value="6">
                    </td>
                    <td>
                        8
                    </td>
                    <td>
                        <input name="foots" type="radio" value="8">
                    </td>
                </tr>
                <tr>
                    <th>
                        Сверхспособности:
                    </th>
                    <td colspan="8">
                        <select class="selections_in_our_table" multiple size="3" name="perks[]">
                            <option value="Immortality" selected>Бессмертие
                            <option value="Passing">Прохождение сквозь стены
                            <option value="Levitation">Левитация
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Биография:
                    </th>
                    <td colspan="8">
                        <textarea id="biographi_are_in_table" name="biographi" placeholder="Главная информация о вас..."></textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                        С контрактом ознакомлен!
                    </th>
                    <td colspan="8">
                        <input name="checking_verify" type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <input id="button_of_confirming_in_our_table" name="confirm" type="submit" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
