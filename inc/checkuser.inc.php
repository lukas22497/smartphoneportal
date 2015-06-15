<?php 
//echo "checkuser-file";
if (!isset ($_SESSION["user_id"])) { 
    header ("Location: /smartphoneportal/index.php?navi=20&fehler=1"); 
}
?>