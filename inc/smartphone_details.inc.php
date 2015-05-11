<?php

	//Database-Values
	include("db_connect.inc.php");

	//SQl-Statement
	$sql = 'SELECT
			s.id, s.name, c.category, o.os, w.wlan, p.frontback
            FROM
            smartphone as s
            JOIN
            os as o
            on s.os_ID = o.ID
            JOIN
            category as c
            on s.category_ID = c.ID
            JOIN
            specs as sp
            on s.specs_ID = sp.ID
            JOIN
            wlan as w
            on sp.wlan_ID = w.ID
            JOIN
            picture as p
            on s.picture_ID = p.ID
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


        $row = $erg->fetch_assoc();
       // echo var_dump($row);
		    $a=$row["name"];
		    $b=$row["category"];
            $c=$row["os"];
            $d=$row["wlan"];
            $p=$row["frontback"];

        echo "<h2>Detailansicht - $a</h2>";
        echo "<img src='img/smartphones/$p' />";
        echo "<h3>Name</h3>";
        echo $a."<br>";
        echo "<br />";
        echo "<h3>Kategorie</h3>";
        echo $b."<br>";
        echo "<br />";
        echo "<h3>Betriebssystem</h3>";
        echo $c."<br>";
        echo "<br />";
        echo "<h3>WLAN</h3>";
        echo $d."<br>";
        echo "<br />";
?>
