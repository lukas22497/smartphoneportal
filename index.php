<!doctype html>
<html>

 <head>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />

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
    <?php
     echo "<form method=\"post\" action=\"index.php\">
      <table>
       <tr>
        <td>
         <input id=\"tags\" type=text name=suchstring size=24 class=\"ui-widget\">
        </td>
       </tr>
       <tr>
        <td>
         <input type=\"submit\" value=\"Absenden\">
         <input type=\"hidden\" name\"sent\" value=\"1\">
        </td>
       </tr>
      </table>"
    ?>
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
					echo "<h2>Smartphones hinzufügen</h2>";
					include ("inc/smartphonehinzufuegen.inc.php");
					break;
                //Detailansicht
                case "10":
                    echo "<h2>Detailansicht</h2>";
                    include ("inc/smartphone_details.inc.php");
                    break;
				}

      $sent = isset($_POST['sent']) ? $_POST['sent'] : '';
      $suche = isset($_POST['suchstring']) ? $_POST['suchstring'] : '';

      if ($sent and $suche) {
       echo "<h2>Smartphone suchen</h2>";
       include("suchen.inc.php");
      }

     ?>

   </article>
  </section>

  <footer>
   <h2>Wer braucht schon Smartphones?</h2>
  </footer>

 </div>
</body>
</html>
