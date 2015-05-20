<?php 
include ("inc/checkuser.inc.php"); 
?> 
<html><head><title>Interne Seite</title></head> 
<body> 
BenutzerId: <?php echo $_SESSION["user_id"]; ?><br> 
Password: <?php echo $_SESSION["user_password"]; ?>
<hr> 
<a href="inc/logout.inc.php">Ausloggen</a> 
</body> 
</html>