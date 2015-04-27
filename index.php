<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!-- 	html5 + CSS 3 Template created by miss monorom  http://intensivstation.ch 2011 -->

<title>Willkommen beim Kneipentest</title>
</head>
<body>
<div id="container">
	<header>
		<h2>
			Header: Willkommen beim Kneipentest
		</h2>
	</header>
	<nav>
		<h2>
			nav: links
		</h2>
		<ul>
			<li><a href="index.php?navi=1" title="Normale Darstellung">Kneipen anzeigen</a></li>
			<li><a href="index.php?navi=2" title="jQuery-Darstellung">Kneipen anzeigen</a></li>
			<li><a href="index.php?navi=3" title="animierte jQuery-Darstellung">Kneipen anzeigen</a></li>
			<li><a href="index.php?navi=4">Kneipen hinzufügen</a></li>
		</ul>
	</nav>
	<aside>
		<h2>
			aside: Suche
		</h2>
		<?php
			echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
		?>
			<input type=text name=suchstring size=25>
			<br/>
			<input type="submit" value="Suchen">
			<input type="reset">
			<input type="hidden" name="sent" value="1">
			</form>
			<?php
			echo "<form method='post' action='index.php'>
				<table>
				<tr>
					<td>
						<input id='tags' type=text name=suchstring size=25>
					</td>
				</tr>
					<td>
						<input type='submit' value='Absenden'>
						<input type='hidden' name='sent' value='1'>
					</td>
				</tr>
				</table>";
			?>
	</aside>
	<section id="content">
		<article>
			<h2>
				Article: Inhalt
			</h2>
			<?php
			$navigation = isset($_GET['navi']) ? $_GET['navi'] : '0'; // Kurzform if-then-else-Verweisung
			//echo $navigation;
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
					include ("inc/smartphoneanzeigen.inc.php");
					break;
				} // Ende Switch-Case-Anweisung	
				
				// Überprüfung auf Ausführung des Suchformulars
				$sent = isset($_POST['sent']) ? $_POST['sent'] : '';
				$suche = isset($_POST['suchstring']) ? $_POST['suchstring'] : '';
				if ($sent and $suche) {
					echo "<h2>Kneipen suchen</h2>";
					include("inc/suchen.inc.php");
				}
			?>			
		</article>
	</section>
 	<footer>		
		<h2>
			Footer
		</h2>
	<p>Template changed by Lukas</a></p>
	</footer>
</div>
</body>
</html>