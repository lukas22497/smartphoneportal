<?php
echo "<script type='text/javascript' src='js/jquery-1.5.js'>";
echo "</script>";
echo "<script type='text/javascript'>";
echo "$(document).ready(function(){";
echo "$('#toggle1').click(function(event){";
echo "$('#b1').slideToggle('slow');";
echo "});";
echo "$('#toggle2').click(function(event){";
echo "$('#description').slideToggle('slow');";
echo "});";
echo "});";
echo "</script>";

	//Database-Values
	include("db_connect.inc.php");

	//SQl-Statement
	$sql = 'SELECT
			s.id, s.name, c.category, o.os, w.wlan, p.frontback, sp.weight, sp.ppi, sp.screenresolution, sp.dim, s.preis, si.size, bt.rev, ch.chipname
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
            JOIN
            size as si
            on sp.size_ID = si.ID
            JOIN
            bluetooth as bt
            on sp.bluetooth_ID = bt.ID
            JOIN
            chip as ch
            on sp.chip_ID = ch.ID
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
            $w=$row["weight"];
            $ppi=$row["ppi"];
            $screen=$row["screenresolution"];
            $dim=$row["dim"];
            $preis=$row["preis"];
            $s=$row["size"];
            $bt=$row["rev"];
            $ch=$row["chipname"];

            

        
        echo "<h2>Detailansicht - $a</h2>";
//        echo "<button id='toggle1'>Toogle Bild</button>";
        echo "<h3>Beschreibung zu dem $a</h3>";
        echo "<button id='toggle2'>Beschreibung ein-/ausblenden</button>";
        echo "<p id='description'>Das $a überzeugt mit einer erhöhten Startgeschwindigkeit für<br>Betriebssystem und Anwendungen sowie verbesserter Energieeffizienz gegenüber<br>Vorgängermodellen. Durch seine 64-bit-Architektur,<br>LPDDR4 und fortschrittliche GPU steht es für Leistung,<br>Multitasking und Multimediafunktionen der neuen Generation.</p>";
        echo "<h3>Name</h3>";
        echo $a."<br>";
        echo "<h3>Kategorie</h3>";
        echo $b."<br>";
        echo "<h3>Betriebssystem</h3>";
        echo $c."<br>";
        echo "<h3>Chipsatz</h3>";
        echo $ch."<br>";
        echo "<h3>WLAN</h3>";
        echo $d."<br>";
        echo "<h3>Gewicht</h3>";
        echo $w."<br>";
        echo "<h3>Pixeldichte</h3>";
        echo $ppi."<br>";
        echo "<h3>Auflösung</h3>";
        echo $screen."<br>";
        echo "<h3>Abmessungen</h3>";
        echo $dim."<br>";
        echo "<h3>Bluetooth</h3>";
        echo $bt."<br>";
        echo "<h3>Größe</h3>";
        echo $s."<br>";
        echo "<h3>Preis</h3>";
        echo $preis." €<br>";
        echo "</div>";
        echo "<div class='col-md-5'>";
        echo "<img id='b1' class='featurette-image img-responsive center-block' src='img/$p' data-src='holder.js/500x500/auto' alt='Generic placeholder image'>";
        echo "</div>";
?>
