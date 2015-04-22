<?php
	echo "Inhalt der Datei: kneipenanzeigen2.inc.php";
	//Database-Values
	include("db_connecti.php");
	
	//SQl-Statement
	$sql = 'SELECT 
			k.name, k.plz, k.stadt, k.strasse,
			uk.art, uk.note, uk.kommentar 
			FROM kneipen as k
			INNER JOIN user_has_kneipe as uk
			ON k.ID = uk.kneipe_ID';
	$erg = $db->query($sql) or die ("Fehlermeldung=".$db->error());
	
	echo "<table id='myTable' class='tablesorter'>";
	echo "<thead>";
	echo "<tr><th>Name</th><th>Postleitzahl</th><th>Stadt</th><th>Straße</th><th>Art</th><th>Note</th><th>Kommentar</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	
	while (($row = $erg->fetch_assoc()) !== NULL) {
		$a=$row["name"];
		$b=$row["plz"];
		$c=$row["stadt"];
		$d=$row["strasse"];
		$e=$row["art"];
		$f=$row["note"];
		$g=$row["kommentar"];
		echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td></tr>";
	}

	echo "</tbody>";
	echo "</table>";
?>