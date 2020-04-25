<?php
    include("include/settings.php");

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $messages = array();
        $errors = array();
        $values = array();
        $errors = FALSE;

        if(isset($_COOKIE["saved"]))
        {
            setcookie("saved", '');
            $messages[] = "Уважаемый пользователь! Поздравляем, все данные сохранены!";

            if(isset($_COOKIE["password"]))
            {
                $messages[] = sprintf(" Вы можете <a href = 'login.php'>совершить вход</a> используя логин <strong>%s</strong> и пароль <strong>%s</strong>", strip_tags($_COOKIE["login"]), strip_tags($_COOKIE["password"]));
            }
        }

        $errors['name'] = !empty($_COOKIE['error_of_name']);
        $errors['email'] = !empty($_COOKIE['error_of_email']);
        $errors['birthday'] = !empty($_COOKIE['error_of_birthday']);
        $errors['sex'] = !empty($_COOKIE['error_of_sex']);
        $errors['foots'] = !empty($_COOKIE['error_of_foots']);
        $errors['perks'] = !empty($_COOKIE['error_of_perks']);
        $errors['biographi'] = !empty($_COOKIE['error_of_biographi']);
        $errors['checking_verify'] = !empty($_COOKIE['error_of_checking_verify']);

        if($errors['name'])
        {
            setcookie('error_of_name', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не ввели имя...</div>';
        }

        if($errors['email'])
        {
            setcookie('error_of_email', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не ввели почту...</div>';
        }

        if($errors['birthday'])
        {
            setcookie('error_of_birthday', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не выбрали год рождения...</div>';
        }

        if($errors['sex'])
        {
            setcookie('error_of_sex', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не выбрали пол...</div>';
        }

        if($errors['foots'])
        {
            setcookie('error_of_foots', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не выбрали количество конечностей...</div>';
        }

        if($errors['perks'])
        {
            setcookie('error_of_perks', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, хотя бы одна сверхспособность должна быть выбрана...</div>';
        }

        if($errors['biographi'])
        {
            setcookie('error_of_biographi', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не рассказали ничего о себе...</div>';
        }

        if($errors['checking_verify'])
        {
            setcookie('error_of_checking_verify', '');
            $messages[] = '<div class="error">Ошибка! Уважаемый пользователь, вы не подтвердили ознакомление с контрактом!</div>';
        }

        $values['name'] = empty($_COOKIE['value_of_name']) ? '' : strip_tags($_COOKIE['value_of_name']);
        $values['email'] = empty($_COOKIE['value_of_email']) ? '' : strip_tags($_COOKIE['value_of_email']);
        $values['birthday'] = empty($_COOKIE['value_of_birthday']) ? '' : $_COOKIE['value_of_birthday'];
        $values['sex'] = empty($_COOKIE['value_of_sex']) ? '' : $_COOKIE['value_of_sex'];
        $values['foots'] = empty($_COOKIE['value_of_foots']) ? '' : $_COOKIE['value_of_foots'];
        $values['perks'] = empty($_COOKIE['value_of_perks']) ? '' : $_COOKIE['value_of_perks'];
        $values['biographi'] = empty($_COOKIE['value_of_biographi']) ? '' : $_COOKIE['value_of_biographi'];
        $values['checking_verify'] = empty($_COOKIE['value_of_checking_verify']) ? '' : $_COOKIE['value_of_checking_verify'];



        if(empty($errors) && (isset($_SESSION["login"])))
        {
            $query_for_loading_users_information = mysqli_query($connection, "SELECT * FROM for_number_3 WHERE login = '".$_SESSION["login"]."'");
            $row_with_query_for_loading_users_information = mysqli_fetch_array($query_for_loading_users_information);
            $values["name"] = $row_with_query_for_loading_users_information["name"];
        }
        printf('Вход с логином %s, uid %d', $_SESSION['login'], $_SESSION['uid']);
        include('our_site.php');
    }
    else
    {
        $array_of_perks = array();

        foreach($_POST["perks"] as $j => $number_of_perk_in_the_flow) $array_of_perks[$j] = $number_of_perk_in_the_flow;

        $good_type_of_perks_for_database = implode(", ", $array_of_perks);

        if(empty($_POST['name']))
        {
            setcookie('error_of_name', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_name', $_POST["name"], time() + 30 * 24 * 60 * 60 * 12);

        if(empty($_POST['email']))
        {
            setcookie('error_of_email', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_email', $_POST["email"], time() + 30 * 24 * 60 * 60 * 12);

        if($_POST["birthday"] == 'Год')
        {
            setcookie('error_of_birthday', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_birthday', $_POST["birthday"], time() + 30 * 24 * 60 * 60 * 12);

        if(!isset($_POST["sex"]))
        {
            setcookie('error_of_sex', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_sex', $_POST["sex"], time() + 30 * 24 * 60 * 60 * 12);

        if(!isset($_POST["foots"]))
        {
            setcookie('error_of_foots', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_foots', $_POST["foots"], time() + 30 * 24 * 60 * 60 * 12);

        if($good_type_of_perks_for_database == '')
        {
            setcookie('error_of_perks', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_perks', $good_type_of_perks_for_database, time() + 30 * 24 * 60 * 60 * 12);

        if($_POST["biographi"] == '')
        {
            setcookie('error_of_biographi', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }
        else setcookie('value_of_biographi', $_POST["biographi"], time() + 30 * 24 * 60 * 60 * 12);

        if(!isset($_POST["checking_verify"]))
        {
            setcookie('error_of_checking_verify', 'True', time() + 24 * 60 * 60);
            $errors = TRUE;
        }

        if($errors)
        {
            header('Location: finding_data.php');
            exit();
        }
        else
        {
            setcookie('error_of_name', '');
            setcookie('error_of_email', '');
            setcookie('error_of_birthday', '');
            setcookie('error_of_sex', '');
            setcookie('error_of_foots', '');
            setcookie('error_of_perks', '');
            setcookie('error_of_biographi', '');
            setcookie('error_of_checking_verify', '');
        }

        $login = "user" . rand();
        $password = md5(md5("plotva") . md5(rand()));
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        mysqli_query($connection, "INSERT INTO for_number_3(name, login, password, email, birthday, sex, foots, perks, biographi) VALUES('$name', '$login', '$password', '$email', '".$_POST["birthday"]."', '".$_POST["sex"]."', '".$_POST["foots"]."', '$good_type_of_perks_for_database', '".$_POST["biographi"]."')");
        setcookie("login", $login);
        setcookie("password", $password);
        setcookie('saved', 'True');
        header('Location: finding_data.php');
    }
?>
