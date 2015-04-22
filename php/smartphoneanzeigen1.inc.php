<?php
	echo "Inhalt der Datei: kneipenanzeigen1.inc.php";
	//Database-Values 
	include("db_connect.php");
	
	//SQl-Statement
	$sql = 'SELECT 
			name FROM smartphone';
	$erg = mysql_query ($sql,$db) or die ("Fehlermeldung=".mysql_error()); // $erg ist ein Mysql-Link, der auf ein Ergebnis in der MySQL-Datenbank zeigt.
	// Speichert die Anzahl der Tabellenzeilen für die Schleife
	$anz = mysql_num_rows($erg);
	echo "<table>";
	echo "<thead>";
	echo "<tr><th>Name</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	for ($i = 0; $i < $anz; $i++) {
		$a = mysql_result($erg, $i, "name"); // Hier die Spaltennamen der Db verwenden!
		echo "<tr><td>$a</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>