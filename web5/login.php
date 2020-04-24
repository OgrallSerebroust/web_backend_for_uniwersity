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
  <input name="login">
  <input name="password">
  <input type="submit" value="Войти">
</form>

<?php
    }
    else
    {
        printf($_POST['login']);
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['uid'] = 3141592;
        header('Location: finding_data.php');
    }
