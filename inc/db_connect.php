<?php
	include("db_var.php");
	
	// Datenbank wird verbunden!
	$db=mysql_connect($url,$user,$pass);
	mysql_set_charset('utf8');
	
	if ($db==false) {
		echo "Keine Verbindung moeglich!";
		exit;
	}
	//Database-Select
	mysql_select_db($dbName,$db) or exit ("Datenbank kann nicht ausgew‰hlt werden");
?>