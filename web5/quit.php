<?php
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['uid']);
    setcookie("quit", "True");
    header("Location: finding_data.php");
?>
