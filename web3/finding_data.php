<?php
    include("include/settings.php");
    if((isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["birthday"])) && (isset($_POST["sex"])) && (isset($_POST["foots"])) && (isset($_POST["perks"])) && (isset($_POST["biographi"])) && (isset($_POST["checking_verify"])) && (isset($_POST["confirm"])))
    {
        echo "Good!";
        echo $_POST["name"];;
    }
    else
    {
        echo "bad";
    }
?>
