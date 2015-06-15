<?php 
// Datenbankverbindung aufbauen 
session_start();
include('db_connect.inc.php');
$sql = "SELECT u.name, u.password
        FROM
        user as u
        WHERE u.name like '".$_POST["name"]."'
        AND u.password = '".md5($_POST["pwd"])."';"; 
$erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));

if (($row = $erg->fetch_assoc()) !== NULL) {// Benutzerdaten in ein Array auslesen. 
//$data = mysql_fetch_array ($erg); 

$_SESSION["user_id"] = $row["name"]; 
$_SESSION["user_password"] = $row["password"]; 

    
echo $_SESSION["user_id"];
echo $_SESSION["user_password"];
//include("smartphonebewerten.inc.php");
header ("Location: ../index.php?navi=30"); 
}
//else {
//    header ("Location: login_form.inc.php?fehler=1");
//}
?>