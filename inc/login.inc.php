<?php 
// Datenbankverbindung aufbauen 
include('db_connect.inc.php');
//$connectionid = mysql_connect ("localhost", "root", ""); 
/*if (!mysqli_select_db ("LoginSystem", $db)) 
{ die ("Keine Verbindung zur Datenbank"); } //if*/
$sql = "SELECT u.name, u.password
        FROM
        user as u
        WHERE u.name like '".$_REQUEST["name"]."'
        AND u.password = '".md5($_REQUEST["pwd"])."';"; 
$erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));

// Werte werden hier nicht übergeben, Abfrage korrigieren
if (($row = $erg->fetch_assoc()) !== NULL) {// Benutzerdaten in ein Array auslesen. 
$data = mysql_fetch_array ($erg); 

$_SESSION["user_id"] = $data["name"]; 
$_SESSION["user_password"] = $data["password"]; 
    
header ("Location: ../intern.php"); 
} //if
else {
    header ("Location: login_form.inc.php?fehler=1");
} //else
?>