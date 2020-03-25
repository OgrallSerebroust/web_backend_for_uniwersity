<?
    header("Content-Type: text/html; charset=utf-8");
?>

<html>

<head lang="ru">
    <title>
        Форма для Веб-сервера
    </title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="our_main_shadow"></div>
    <div id="our_site">
        <form method="post" action="finding_data.php">
            <!-------------------------------------------------->
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
                            <?
                            for ($i = 1900; $i <= 2020; $i++)
                                echo '<option>' . $i . '</option>';
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
                        <input name="sex" type="radio">
                    </td>
                    <td colspan="2">
                        Женский:
                    </td>
                    <td colspan="2">
                        <input name="sex" type="radio">
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
                        <input name="foots" type="radio">
                    </td>
                    <td>
                        4
                    </td>
                    <td>
                        <input name="foots" type="radio">
                    </td>
                    <td>
                        6
                    </td>
                    <td>
                        <input name="foots" type="radio">
                    </td>
                    <td>
                        8
                    </td>
                    <td>
                        <input name="foots" type="radio">
                    </td>
                </tr>
                <tr>
                    <th>
                        Сверхспособности:
                    </th>
                    <td colspan="8">
                        <select class="selections_in_our_table" name="perks[]">
                            <option value="1">Бессмертие
                            <option value="2">Прохождение сквозь стены
                            <option value="3">Левитация
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Биография:
                    </th>
                    <td colspan="8">
                        <textarea id="biographi_are_in_table" name="biographi" cols="40" rows="10">
                    </textarea>
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
                        <input id="button_of_confirming_in_our_table" name="confirm" type="submit" value="Отправить">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
