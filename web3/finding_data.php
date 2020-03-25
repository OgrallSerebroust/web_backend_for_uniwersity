<?
    header("Content-Type: text/html; charset = UTF-8");
    $database_url = "localhost";
	$database_login = "u16428";
	$database_password = "Ogegal91";
	$database_name = "u16428";
	$connection = mysql_connect($database_url, $database_login, $database_password) or die(mysql_error());
	$select_database = mysql_select_db($database_name, $connection) or die(mysql_error());

    if((isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["birthday"])) && (isset($_POST["sex"])) && (isset($_POST["foots"])) && (isset($_POST["perks"])) && (isset($_POST["biographi"])) && (isset($_POST["checking_verify"])) && (isset($_POST["confirm"])))
    {
        echo "Good!";
    }
    else
    {
        echo "bad";
    }
?>
