<?php
    include("include/settings.php");
    if(($_POST["name"] != '') && (isset($_POST["email"])) && (isset($_POST["birthday"])) && (isset($_POST["sex"])) && (isset($_POST["foots"])) && (isset($_POST["perks"])) && (isset($_POST["biographi"])) && (isset($_POST["checking_verify"])) && (isset($_POST["confirm"])))
    {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        echo $_POST["name"];
        echo $_POST["email"];
        echo $_POST["birthday"];
        echo $_POST["sex"];
        echo $_POST["foots"];
        mysqli_query($connection, "INSERT INTO for_number_3(name, email, birthday, sex, foots) VALUES('$name', '$email', '".$_POST["birthday"]."', '".$_POST["sex"]."', '".$_POST["foots"]."')");
        mysqli_close($connection);
        echo "Good!";
    }
    else if($_POST["name"] == '')
    {
        echo "Ошибка! Уважаемый пользователь, вы не ввели имя...";
    }
    else
    {
        echo "bad";
    }
?>
