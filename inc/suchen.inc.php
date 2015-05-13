<?php

 include('db_connect.inc.php');
 $filter = isset($_GET['filter']) ? $_GET['filter'] : '0';

if ($filter != '0') {
    $sql = 'SELECT
			s.id, s.name, c.category, o.os
            FROM
            smartphone as s
            JOIN
            category as c
            on s.category_ID = c.ID
            JOIN
            os as o
            on s.os_ID = o.ID
	        WHERE s.name LIKE \'%' . $_GET['filter'].'%\'
	        OR c.category LIKE \'%' . $_GET['filter'].'%\'
	        OR o.os LIKE \'%'.$_GET['filter'].'%\'';
}
else {
  $sql = 'SELECT
			s.id, s.name, c.category, o.os
            FROM
            smartphone as s
            JOIN
            category as c
            on s.category_ID = c.ID
            JOIN
            os as o
            on s.os_ID = o.ID
	        WHERE s.name LIKE \'%' . $_POST['search'].'%\'
	        OR c.category LIKE \'%' . $_POST['search'].'%\'
	        OR o.os LIKE \'%'.$_POST['search'].'%\'';  
}

 $erg = mysqli_query($db,$sql) or die ("Fehlermeldung: " . mysqli_error($db));
 echo "<div class='col-md-5'>";
 echo "<table>";
 echo "<thead>";
 echo "<tr><th>Name</th><th>Kategorie</th><th>OS</th></tr>";
 echo "</thead>";
 echo "<tbody>";

 while (($row = $erg->fetch_assoc()) !== NULL) {
		$a=$row["name"];
		$b=$row["category"];
        $c=$row["os"];
		echo "<tr><td><a href='/smartphoneportal/index.php?navi=10&smartphone=$a' title='Detailansicht Smartphone'>$a</a></td><td>$b</td><td>$c</td></tr>";
 }

 echo "</tbody>";
 echo "</table>";
 echo "</div>";
?>
