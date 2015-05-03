<?php

 include('db_connect.inc.php');

 $sql = 'SELECT *
	 FROM kneipen
	 WHERE Name LIKE \'%' . $_POST['suchstring'] . '%\'
	 OR Art LIKE \'%' . $_POST['suchstring'] . '%\'
	 OR Kommentar LIKE \'%' . $_POST['suchstring'] . '%\'
	 ';

 $erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error());

 echo "<table>";
 echo "<thead>";
 echo "<tr><th>Name</th><th>Art</th><th>Note</th><th>Kommentar</th></tr>";
 echo "</thead>";
 echo "<tbody>";

 while($row = mysqli_fetch_array($erg)) {
  echo 
   "<tr><td>"
   . $row['Name'] . 
   "</td><td>"
   . $row['Art'] .
   "</td><td>"
   . $row['Note']
   . "</td><td>"
   . $row['Kommentar']
   . "</td></tr>";
 }

 echo "</tbody>";
 echo "</table>";

?>