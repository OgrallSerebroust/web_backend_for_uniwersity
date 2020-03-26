<?php
    include("include/settings.php");
    if(($_POST["name"] != '') && ($_POST["email"] != '') && ($_POST["birthday"] != 'Год') && (isset($_POST["sex"])) && (isset($_POST["foots"])) && ($_POST["biographi"] != '') && (isset($_POST["checking_verify"])) && ($_POST["confirm"]) == "Confirm")
    {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $array_of_perks = array();

        foreach($_POST["perks"] as $j => $number_of_perk_in_the_flow) $array_of_perks[$j] = $number_of_perk_in_the_flow;

        $good_type_of_perks_for_database = implode(", ", $array_of_perks);
        mysqli_query($connection, "INSERT INTO for_number_3(name, email, birthday, sex, foots, perks, biographi) VALUES('$name', '$email', '".$_POST["birthday"]."', '".$_POST["sex"]."', '".$_POST["foots"]."', '$good_type_of_perks_for_database', '".$_POST["biographi"]."')");
        echo "Good";
    }
    else if($_POST["name"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не ввели имя...";
        mysqli_close($connection);
    }
    else if($_POST["email"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не ввели почту...";
        mysqli_close($connection);
    }
    else if($_POST["birthday"] == "Год")
    {
        echo "Ошибка! Уважаемый пользователь, вы не выбрали год рождения...";
        mysqli_close($connection);
    }
    else if($_POST["biographi"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не рассказали ничего о себе...";
        mysqli_close($connection);
    }
    else if(!isset($_POST["checking_verify"]))
    {
        echo "Ошибка! Уважаемый пользователь, вы не подтвердили ознакомление с контрактом...";
        mysqli_close($connection);
    }
    else
    {
        echo "Ошибка! Уважаемый пользователь, вы не заполнили одно или несколько полей...";
        mysqli_close($connection);
    }
?>
