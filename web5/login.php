<?php
    include("include/settings.php");
?>

<!DOCTYPE html>
<html>

<head lang="ru">
    <title>
        Форма для Веб-сервера
    </title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="our_main_shadow"></div>
    <div id="our_site">
        <form action="" method="post">
            <input name="login" value="<?php print $_COOKIE["login"]?>">
            <input name="password" value="<?php print $_COOKIE["password"]?>">
            <input type="submit" value="Войти">
        </form>
    </div>
</body>

</html>

<?php
    setcookie("login", '');
    setcookie("password", '');

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $query_for_cheking_trulity = mysqli_query($connection, "SELECT * FROM for_number_3 WHERE login = ".$_POST['login']."");
        $row_with_query_for_cheking_trulity = mysqli_fetch_array($query_for_cheking_trulity);
        session_start();
        $_SESSION["login"] = $_POST["login"];
        $_SESSION["password"] = $_POST["password"];
    }
?>
