<?php
	echo "Inhalt der Datei: smartphonesanzeigen1.inc.php";
	//Database-Values 
	include("db_connect.php");
	
	//SQl-Statement
	$sql = 'SELECT 
			s.id, s.name, c.name
            FROM
            smartphone as s
            JOIN
            category as c
            on s.ID = c.ID
            where
            s.ID = 1';
	$erg = mysql_query ($sql,$db) or die ("Fehlermeldung=".mysql_error()); // $erg ist ein Mysql-Link, der auf ein Ergebnis in der MySQL-Datenbank zeigt.
	// Speichert die Anzahl der Tabellenzeilen für die Schleife
	$anz = mysql_num_rows($erg);
	echo "<table>";
	echo "<thead>";
	echo "<tr><th>Name</th><th>Kategorie</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	for ($i = 0; $i < $anz; $i++) {
		$a = mysql_result($erg, $i, "s.name"); // Hier die Spaltennamen der Db verwenden!
        $b = mysql_result($erg, $i, "c.name");
		echo "<tr><td>$a</td>";
        echo "<td>$b</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>