<?php

 include('config.inc.php');

 $db = mysqli_connect($url,$user,$pass,$dbName);
 mysql_set_charset('utf8');

 if (mysqli_connect_errno()) {
  echo "Verbindungsherstellung fehlgeschlagen: " . mysqli_connect_error();
 }

?>
