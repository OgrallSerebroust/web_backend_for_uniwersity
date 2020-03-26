<?php
    include("include/settings.php");
    if(($_POST["name"] != '') && ($_POST["email"] != '') && ($_POST["birthday"] != 'Год') && (isset($_POST["sex"])) && (isset($_POST["foots"])) && ($_POST["biographi"] != '') && (isset($_POST["checking_verify"])) && (isset($_POST["confirm"])))
    {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        echo $_POST["checking_verify"];
        echo $_POST["confirm"];
        echo $_POST["perks"];
        mysqli_query($connection, "INSERT INTO for_number_3(name, email, birthday, sex, foots, biographi) VALUES('$name', '$email', '".$_POST["birthday"]."', '".$_POST["sex"]."', '".$_POST["foots"]."', '".$_POST["biographi"]."')");
        mysqli_close($connection);
        echo "Good!";
    }
    else if($_POST["name"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не ввели имя...";
    }
    else if($_POST["email"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не ввели почту...";
    }
    else if($_POST["birthday"] == "Год")
    {
        echo "Ошибка! Уважаемый пользователь, вы не выбрали год рождения...";
    }
    else if($_POST["biographi"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не рассказали ничего о себе...";
    }
    else
    {
        echo "bad";
    }
?>
