<html> 
<head>
    <title>Login</title></head> 
<body> 
<?php 
    if (isset ($_REQUEST["fehler"])) { 
        echo "Die Zugangsdaten waren ungültig.";
    } 
    if (isset ($_REQUEST["notloggedin"])) { 
        echo "Bitte loggen Sie sich ein, um Zugriff auf die Seite zu bekommen.";
    }
    if (isset ($_REQUEST["out"])) { 
        echo "Sie wurden ausgeloggt.";
    } 
?> 
<form action="inc/login.inc.php" method="post"> 
Name: <input type="text" name="name" size="20"><br> 
Kennwort: <input type="password" name="pwd" size="20"><br> 
<input type="submit" value="Login"> 
</form> 
</body> 
</html>