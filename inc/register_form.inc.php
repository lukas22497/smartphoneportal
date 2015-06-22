<html> 
<head>
<title>Registrierung</title></head> 
<body>
<?php
if (isset($_REQUEST["success"])) {
    echo "Registierung erfolgreich. Sie können Sich nun einloggen und auf interne Seiten zugreifen!";
    echo "<a href='index.php?navi=20'>Einloggen</a>";
    }
else {
    echo "<form action='inc/register.inc.php' method='post'>";
    echo "Name: <input type='text' name='username' size='20'><br>";
    echo "E-Mail: <input type='mail' name='mail' size='20'><br>";
    echo "Passwort: <input type='password' name='pwd' size='20'><br>"; 
    echo "<input type='submit' value='Registrieren'>";
    echo "</form>";
}
?>
</body> 
</html>