<?php
    include("include/settings.php");

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $messages = array();
        $errors = array();
        $values = array();

        if(isset($_COOKIE["saved"]))
        {
            setcookie("saved", '');
            $messages[] = "Уважаемый пользователь! Поздравляем, все данные сохранены!";
        }

        $errors['name'] = !empty($_COOKIE['error_of_name']);
        $errors['email'] = !empty($_COOKIE['error_of_email']);
        $errors['birthday'] = !empty($_COOKIE['error_of_birthday']);
        $errors['sex'] = !empty($_COOKIE['error_of_sex']);
        $errors['foots'] = !empty($_COOKIE['error_of_foots']);
        $errors['name'] = !empty($_COOKIE['error_of_name']);
        $errors['perks'] = !empty($_COOKIE['error_of_perks']);
        $errors['biographi'] = !empty($_COOKIE['error_of_biographi']);
        $errors['checking_verify'] = !empty($_COOKIE['error_of_checking_verify']);

        if($errors['name'])
        {
            setcookie('error_of_name', '');
            $messages[] = '<div class="error">Уважаемый пользователь, пожалуйста, заполните имя.</div>';
        }

        $values['name'] = empty($_COOKIE['value_of_name']) ? '' : $_COOKIE['value_of_name'];
        include('our_site.php');
    }
    else
    {
        if(($_POST["name"] != '') && ($_POST["email"] != '') && ($_POST["birthday"] != 'Год') && (isset($_POST["sex"])) && (isset($_POST["foots"])) && ($_POST["biographi"] != '') && (isset($_POST["checking_verify"])) && ($_POST["confirm"]) == "Confirm")
        {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $array_of_perks = array();

            foreach($_POST["perks"] as $j => $number_of_perk_in_the_flow) $array_of_perks[$j] = $number_of_perk_in_the_flow;

            $good_type_of_perks_for_database = implode(", ", $array_of_perks);
            mysqli_query($connection, "INSERT INTO for_number_3(name, email, birthday, sex, foots, perks, biographi) VALUES('$name', '$email', '".$_POST["birthday"]."', '".$_POST["sex"]."', '".$_POST["foots"]."', '$good_type_of_perks_for_database', '".$_POST["biographi"]."')");
            mysqli_close($connection);
            setcookie('saved', 'true');
            header('Location: finding_data.php');
        }
        else if($_POST["name"] == '') echo "Ошибка! Уважаемый пользователь, вы не ввели имя...";
        else if($_POST["email"] == '') echo "Ошибка! Уважаемый пользователь, вы не ввели почту...";
        else if($_POST["birthday"] == "Год") echo "Ошибка! Уважаемый пользователь, вы не выбрали год рождения...";
        else if($_POST["biographi"] == '') echo "Ошибка! Уважаемый пользователь, вы не рассказали ничего о себе...";
        else if(!isset($_POST["checking_verify"])) echo "Ошибка! Уважаемый пользователь, вы не подтвердили ознакомление с контрактом!";
        else echo "Ошибка! Уважаемый пользователь, вы не заполнили одно или несколько полей...";

        mysqli_close($connection);
    }
?>
