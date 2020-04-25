<?php
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['uid']);
    header("Location: finding_data.php");
?>
