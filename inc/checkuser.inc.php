<?php 
//session_start (); 
if (!isset ($_SESSION["user_id"])) { 
    header ("Location: /smartphoneportal/index.php?navi=20"); 
}

?>