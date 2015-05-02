<?php
	echo "Inhalt der Datei: smartphonesdetails.inc.php";
	//Database-Values 
	include("db_connecti.php");
	
	//SQl-Statement
	$sql = 'SELECT 
			s.id, s.name, c.category, o.os, w.wlan
            FROM
            smartphone as s
            JOIN
            category as c
            on s.ID = c.ID
            JOIN
            os as o
            on s.ID = o.ID
            JOIN
            specs as sp
            on s.ID = sp.ID
            JOIN
            wlan as w
            on sp.ID = w.ID            
            WHERE s.name LIKE \'%'.$_GET['smartphone'].'%\'';
            // Hier die richtige Variable verwenden. Vielleicht die Smartphone-ID benutzen oder den ausgewählten Namen.
            // in die Abfrage müssen noch die anderen Spezifikationen eingebaut werden.
	$erg = $db->query($sql) or die ("Fehlermeldung=".$db->error()); // $erg ist ein Mysql-Link, der auf ein Ergebnis in der MySQL-Datenbank zeigt.
    echo "<table>";
	echo "<thead>";
	echo "<tr><th>Name</th><th>Kategorie</th><th>Betriebssystem</th><th>WLAN</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	while (($row = $erg->fetch_assoc()) !== NULL) {
       // echo var_dump($row);
		$a=$row["name"];
		$b=$row["category"];
        $c=$row["os"];
        $d=$row["wlan"];
		echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>