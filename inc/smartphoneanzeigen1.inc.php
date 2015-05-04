<?php

	//Database-Values
	include("db_connect.inc.php");

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
	$erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));
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
		echo "<tr><td><a href='/smartphoneportal/index.php?navi=10&smartphone=$a' title='Detailansicht Smartphone'>$a</a></td><td>$b</td><td>$c</td></tr>";
        // Adresse eintragen. Hier muss noch eine GET/POST-Abfrage eingebaut werden, um eine Variable zu erzeugen für die SQL-Abfrage.
	}
	echo "</tbody>";
	echo "</table>";
?>
