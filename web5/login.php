<?php
    include("include/settings.php");
    session_start();

    if(isset($_SESSION["login"]))
    {
        header('Location: finding_data.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
?>

<form action="" method="post">
  <input name="login" />
  <input name="pass" />
  <input type="submit" value="Войти" />
</form>

<?php
    }
    else
    {
        $_SESSION['login'] = $_COOKIE['login'];
        header('Location: finding_data.php');
    }
