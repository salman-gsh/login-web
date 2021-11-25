<?php
include('dbConfig.php');
session_start();

if(!isset($_SESSION['username']))
{
$_SESSION['username']='';
$_SESSION['password']='';
}

// SQL Tabelle erstellen
$sql = "INSERT INTO login (username, passwort)
    VALUES ('".$_SESSION['username']."','".$_SESSION['password']."')";
                
$result = mysqli_query($conn,$sql);


if ($conn->query($sql) === TRUE) {
    echo("<script>console.log('Tabelle wurde erstellt');</script>");
} else {
    echo("<script>console.log('$conn->error');</script>");
}

// Korrigieren
if(!isset($_SESSION['username']))
{
    $mysql_get_users = mysql_query("SELECT * FROM table_name where username='$username'");

    $get_rows = mysql_affected_rows($conn);

    if ($get_rows >= 1) {
        echo "user exists";
        die();
    } else {
        echo "user do not exists";
    }
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="contact-form">
            <div class="input-fields">
                <form id="cform" name="Login" action="success.php" method="post">
                    <div class="loginText">
                        <center>
                            <p> Bei Webseite anmelden</p>
                        </center>
                    </div><br>
                    <input name="username" type="text" class="input" placeholder="Benutzername">
                    <input name="password" type="password" class="input" placeholder="Passwort">
                    <br><br>
                    <div class="btn"><input name="absenden" id="schicken" type="submit" value="submit"></div>
                </form>

            </div>



        </div>

    </div>
</body>

</html>