<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title>Smartphone-Portal</title>
 </head>

<body>

 <div id="container">

  <header>
    <h2>Willkommen im Smartphone-Portal</h2>
    <img src="img/header.png"/>
  </header>

  <nav>
    <h1>Men&uuml;</h1>
    <ul>
     <li><a href="index.php?navi=1">Smartphones anzeigen</a></li>
     <li><a href="index.php?navi=2">Smartphones anzeigen</a></li>
     <li><a href="index.php?navi=3">Smartphones anzeigen</a></li>
     <li><a href="index.php?navi=4">Smartphones hinzuf&uuml;gen</a></li>
    </ul>
  </nav>

  <aside>
    <h2>Suche</h2>
    <?php
      echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
    ?>
      <input type="text" name="suchstring" size="24"><br />
      <input type="submit" value="Absenden">
      <input type="reset">
      <input type="hidden" name="sent" value="1">
     </form>
  </aside>

  <section id="content">
   <article>
    <h1>Inhalt</h1>

     <?php
      $navigation = isset($_GET['navi']) ? $_GET['navi'] : '0';

			switch ($navigation) {
				case "0":
					echo "<h2>Willkommen im Smartphoneportal!</h2>";
					break;
				case "1":
					echo "<h2>Smartphones anzeigen (normal)</h2>";
					include ("inc/smartphoneanzeigen1.inc.php");
					break;
				case "2":
					echo "<h2>Smartphones anzeigen (jQuery-Tablesorter)</h2>";
					include ("inc/smartphoneanzeigen2.inc.php");
					break;
				case "3":
					echo "<h2>Smartphones anzeigen (animiertes Tablesort)</h2>";
					include ("inc/smartphoneanzeigen3.inc.php");
					break;
				case "4":
					echo "<h2>Smartphone bewerten</h2>";
					include ("inc/smartphonebewerten.inc.php");
					break;
                //Detailansicht
                case "10":
                    include ("inc/smartphone_details.inc.php");
                    break;
				}

      $sent = isset($_POST['sent']) ? $_POST['sent'] : '';
      $suche = isset($_POST['suchstring']) ? $_POST['suchstring'] : '';

      if ($sent and $suche) {
       echo "<h2>Smartphone suchen</h2>";
       include("inc/suchen.inc.php");
      }

     ?>

   </article>
  </section>

  <footer>
   <h2>Wer braucht schon Smartphones?</h2>
  </footer>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>