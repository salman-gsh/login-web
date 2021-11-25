<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Success!</title>
</head>

<body>

    <!-- Sichtbarer Teil der Webseite, noch leer -->
    Login:
    <div id="success">
    <br>
        <!-- Daten in Session hinterlegen -->
        <?php
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
    
// Pruefung ob Pflichtfelder richtig ausgefuellt wurden
// Auf Eingabe des Vornamens pruefen

if($_POST ['username']=='')
{
	echo 'Bitte geben Sie Ihren Benutzernamen ein. <br>';  
}
else
{
}

if($_POST ['username']=='salman')
{
    if($_POST ['password']=='schule')
    {
            echo 'Erfolgreich angemeldet. Hallo ';
            echo $_POST['username'];
            echo '<br>';
            $_SESSION['LoggedIn']=1;
    }
}
else
{
    echo '<br>Bitte die richtigen Zugangsdaten eingeben.';
}

echo '<br>';
echo 'Benutzername: ';
echo $_POST['username'];
echo '<br>';
echo 'Passwort: ';
echo $_POST['password'];
?>


    </div>
</body>

</html>