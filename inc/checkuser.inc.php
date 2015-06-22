<?php
if (!isset ($_SESSION["user_id"])) {
header("Location:   /smartphoneportal/index.php?navi=20&notloggedin=1"); 
}
?>