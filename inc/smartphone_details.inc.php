<?php

	//Database-Values
	include("db_connect.inc.php");

	//SQl-Statement
	$sql = 'SELECT s.id, s.name, c.category, o.os, w.wlan FROM smartphone AS s, category AS c, os AS o, specs AS sp, wlan AS w WHERE s.ID = c.ID, s.ID = o.ID, s.ID = sp.ID, sp.ID = w.ID, s.name LIKE \'%'.$_GET['smartphone'].'%\'';

  $erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));

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
