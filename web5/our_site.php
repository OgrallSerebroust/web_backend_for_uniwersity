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
    ?>

    <div id="our_site">
        <div>
            <div>
                <a href="login.php">
                    Вход
                </a>
            </div>
            <div>
                <a href="quit.php">
                    Выход
                </a>
            </div>
        </div>
        <form method="post" action="">
            <table width="50%" height="500">
                <tr>
                    <th>
                        Имя:
                    </th>
                    <td colspan="8">
                        <input class="our_text_inputs_in_table" name="name" size="40" maxlength="40" type="text" <?php if($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        E-mail:
                    </th>
                    <td colspan="8">
                        <input class="our_text_inputs_in_table" name="email" size="40" maxlength="40" type="text" <?php if($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        Дата рождения:
                    </th>
                    <td colspan="8">
                        <select class="selections_in_our_table" name="birthday" <?php if($errors['birthday']) {print 'class="error"';} ?>>
                            <option selected>Год</option>
                            <option selected><?php print $values['birthday']; ?></option>
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
                        <input name="sex" type="radio" value="Man" <?php if($values["sex"] == "Man"){print 'checked';}?>>
                    </td>
                    <td colspan="2">
                        Женский:
                    </td>
                    <td colspan="2">
                        <input name="sex" type="radio" value="Woman" <?php if($values["sex"] == "Woman"){print 'checked';}?>>
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
                        <input name="foots" type="radio" value="2" <?php if($values["foots"] == 2){print 'checked';}?>>
                    </td>
                    <td>
                        4
                    </td>
                    <td>
                        <input name="foots" type="radio" value="4" <?php if($values["foots"] == 4){print 'checked';}?>>
                    </td>
                    <td>
                        6
                    </td>
                    <td>
                        <input name="foots" type="radio" value="6" <?php if($values["foots"] == 6){print 'checked';}?>>
                    </td>
                    <td>
                        8
                    </td>
                    <td>
                        <input name="foots" type="radio" value="8" <?php if($values["foots"] == 8){print 'checked';}?>>
                    </td>
                </tr>
                <tr>
                    <th>
                        Сверхспособности:
                    </th>
                    <td colspan="8">
                        <select class="selections_in_our_table" multiple size="3" name="perks[]">
                            <option value="Immortality" selected <?php if(stripos($values['perks'], "Immortality") !== false){print 'selected';}?>>Бессмертие</option>
                            <option value="Passing" <?php if(stripos($values['perks'], "Passing") !== false){print 'selected';}?>>Прохождение сквозь стены</option>
                            <option value="Levitation" <?php if(stripos($values['perks'], "Levitation") !== false){print 'selected';}?>>Левитация</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Биография:
                    </th>
                    <td colspan="8">
                        <textarea id="biographi_are_in_table" name="biographi" placeholder="Главная информация о вас..." <?php if($errors['biographi']) {print 'class="error"';} ?>><?php print $values['biographi']; ?></textarea>
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
