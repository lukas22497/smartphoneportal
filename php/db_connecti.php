<?php
	include("db_var.php");
	
	// Datenbank wird verbunden!
	$db=mysqli_connect($url,$user,$pass);
	//$db ist mit mysqli ein objekt und kann ausgew‰hlt werden!
	//Deshalb sieht der Charset anderst aus!
	$db->set_charset('utf8');
	
	if ($db==false) {
		echo "Keine Verbindung mˆglich!";
		exit;
	}
	//Database-Select
	$db->select_db($dbName)
	or exit ("Datenbank kann nicht ausgew‰hlt werden");
?>