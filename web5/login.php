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
        $php_ja_tiebia_obmanul = $_POST['login'];
        $obman_php_second = $_POST["password"];
        $query_for_cheking_trulity = mysqli_query($connection, "SELECT * FROM for_number_3 WHERE login = '".$php_ja_tiebia_obmanul."'");
        $row_with_query_for_cheking_trulity = mysqli_fetch_array($query_for_cheking_trulity);

        if($obman_php_second == $row_with_query_for_cheking_trulity["password"])
        {
            $_SESSION["login"] = $php_ja_tiebia_obmanul;
            $_SESSION["password"] = $obman_php_second;
            $_SESSION['uid'] = 3141592;
            session_start();
            header("Location: finding_data.php");
        }
        else
        {
            echo "Неправильный логин или пароль...";
        }
    }
?>
