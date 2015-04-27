<?php
	echo "Inhalt der Datei: smartphonesanzeigen1.inc.php";
	//Database-Values 
	include("db_connecti.php");
	
	//SQl-Statement
	$sql = 'SELECT 
			s.id, s.name, c.category, o.os
            FROM
            smartphone as s
            JOIN
            category as c
            on s.ID = c.ID
            JOIN
            os as o
            on s.ID = o.ID';
	$erg = $db->query($sql) or die ("Fehlermeldung=".$db->error()); // $erg ist ein Mysql-Link, der auf ein Ergebnis in der MySQL-Datenbank zeigt.
    echo "<table>";
	echo "<thead>";
	echo "<tr><th>Name</th><th>Kategorie</th><th>Betriebssystem</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	while (($row = $erg->fetch_assoc()) !== NULL) {
       // echo var_dump($row);
		$a=$row["name"];
		$b=$row["category"];
        $c=$row["os"];
		echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>