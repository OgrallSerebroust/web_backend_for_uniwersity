<?php
    include("include/settings.php");
    if(($_POST["name"] != '') && ($_POST["email"] != '') && ($_POST["birthday"] != 'Год') && (isset($_POST["sex"])) && (isset($_POST["foots"])) && ($_POST["biographi"] != '') && ($_POST["checking_verify"] == "on") && ($_POST["confirm"]) == "Good")
    {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $array_of_perks = array();
        foreach($_POST["perks"] as $j => $number_of_perk_in_the_flow) $array_of_perks[$j] = $number_of_perk_in_the_flow;
        $good_type_of_perks_for_database = implode(", ", $array_of_perks);
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
