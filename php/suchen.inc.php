<?php
	echo "Inhalt der Datei: suchen.inc.php";
	//Database-Values
	include("db_connect.php");
	
	//SQl-Statement
	// HIER IST DAS RICHTIGE STATEMENT!!
	$sql = 'SELECT 
			k.name, k.plz, k.stadt, k.strasse,
			uk.art, uk.note, uk.kommentar 
			FROM kneipen as k
			INNER JOIN user_has_kneipe as uk
			ON k.ID = uk.kneipe_ID
			WHERE k.name LIKE \'%'.$_POST['suchstring'].'%\'
			OR uk.art LIKE \'%'.$_POST['suchstring'].'%\'
			OR uk.kommentar LIKE \'%'.$_POST['suchstring'].'%\'';
	$erg = mysql_query ($sql,$db) or die ("Fehlermeldung=".mysql_error());
	
	// Speichert die Anzahl der Tabellenzeilen für die Schleife
	$anz = mysql_num_rows($erg);
	echo "<table>";
	echo "<thead>";
	echo "<tr><th>Name</th><th>Postleitzahl</th><th>Stadt</th><th>Straße</th><th>Art</th><th>Note</th><th>Kommentar</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	for ($i = 0; $i < $anz; $i++) {
		$a = mysql_result($erg, $i, "name"); // Hier die Spaltennamen der Db verwenden!
		$b = mysql_result($erg, $i, "plz");
		$c = mysql_result($erg, $i, "stadt");
		$d = mysql_result($erg, $i, "strasse");
		$e = mysql_result($erg, $i, "art");
		$f = mysql_result($erg, $i, "note");
		$g = mysql_result($erg, $i, "kommentar");
		echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>