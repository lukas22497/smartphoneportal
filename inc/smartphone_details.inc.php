<?php

	//Database-Values
	include("db_connect.inc.php");

	//SQl-Statement
	$sql = 'SELECT
			s.id, s.name, c.category, o.os, w.wlan
            FROM
            smartphone as s
            JOIN
            category as c
            on s.category_ID = c.ID
            JOIN
            os as o
            on s.os_ID = o.ID
            JOIN
            specs as sp
            on s.specs_ID = sp.ID
            JOIN
            wlan as w
            on sp.wlan_ID = w.ID
            WHERE s.name LIKE \'%'.$_GET['smartphone'].'%\'';

  /* Alternatives Statement (ohne JOINs)
    $sql = '
      SELECT s.id, s.name, c.category, o.os, w.wlan
      FROM smartphone AS s, category AS c, os AS o, specs AS sp, wlan AS w
      WHERE s.ID = c.ID
      AND s.ID = o.ID
      AND s.ID = sp.ID
      AND sp.ID = w.ID
      AND s.name LIKE \'%'.$_GET['smartphone'].'%\'
    ';
  */

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
