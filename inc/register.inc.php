<?php 
// Datenbankverbindung aufbauen 
include('db_connect.inc.php');
$sql = "INSERT INTO `smartphone_mueller_olej`.`user` (`ID`, `name`, `email`, `password`)
        VALUES (NULL, '".$_POST["username"]."', '".$_POST["mail"]."', '".md5($_POST["pwd"])."');";
$erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));
if (isset($erg)) {
    header("Location: ../index.php?navi=40&success=1"); 
}
else {
    echo "Registrierung fehlgeschlagen.";
}
?>