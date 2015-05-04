<?php

 include('db_connect.inc.php');

 $sql = 'SELECT
			s.id, s.name, c.category, o.os
            FROM
            smartphone as s
            JOIN
            category as c
            on s.ID = c.ID
            JOIN
            os as o
            on s.ID = o.ID
	       WHERE s.name LIKE \'%' . $_POST['suchstring'].'%\'
	       OR c.category LIKE \'%' . $_POST['suchstring'].'%\'
	       OR o.os LIKE \'%'.$_POST['suchstring'].'%\'';

 $erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));

 echo "<table>";
 echo "<thead>";
 echo "<tr><th>Name</th><th>Kategorie</th><th>OS</th></tr>";
 echo "</thead>";
 echo "<tbody>";

 while($row = mysqli_fetch_array($erg)) {
  echo
   "<tr><td>"
   .$row['name'] .
   "</td><td>"
   .$row['category'] .
   "</td><td>"
   .$row['os']
   ."</td></tr>";
 }

 echo "</tbody>";
 echo "</table>";

?>
