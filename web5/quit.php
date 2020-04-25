<?php
    include("include/settings.php");
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['uid']);
    session_destroy();
    setcookie("quit", "True");
    header("Location: finding_data.php");
?>
