<?php
    include("include/settings.php");
    if((isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["birthday"])) && (isset($_POST["sex"])) && (isset($_POST["foots"])) && (isset($_POST["perks"])) && (isset($_POST["biographi"])) && (isset($_POST["checking_verify"])) && (isset($_POST["confirm"])))
    {
        try
        {
            $name = htmlspecialchars($_POST["name"]);
            $result = mysqli_query($connection, "INSERT INTO for_number_3(name) VALUES('".$name."')");
            $row = mysql_fetch_array($result);
            echo $row['name'];
            mysqli_close($connection);
        }
        catch(PDOException $e)
        {
            print('Error : ' . $e->getMessage());
            exit();
        }
        echo "Good!";
    }
    else
    {
        echo "bad";
    }
?>
