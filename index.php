<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Smartphone-Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="dist/js/html5shiv.min.js"></script>
      <script src="dist/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="dist/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<?php
ob_start();
session_start (); 
?>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Smartphone-Portal</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
<!--		        <li><a href="index.php?navi=1">Smartphone anzeigen</a></li>
		        <li><a href="index.php?navi=2">Smartphone bewerten</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Smartphones<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Smartphones</li>
                    <li><a href="index.php?navi=1">Smartphone anzeigen</a></li>
                    <li><a href="index.php?navi=2">Smartphone bewerten</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                  </ul>
                </li>
<?php
            if (!isset ($_SESSION["user_id"])) { 
                echo "<li><a href='index.php?navi=40'>Registrieren</a>";
                echo "<li><a href='index.php?navi=20'>Login</a>";
                }
            if (isset ($_SESSION["user_id"])) { 
                echo "<li><a href='inc/logout.inc.php'>Ausloggen</a>";
                }
?>
                </li>
                <form class="navbar-form pull-right" method="post" action='index.php'> <!-- Hier klappt noch was nicht -->
                    <input class="form-control mac-style" name="search" value="" placeholder="Suchen" type="text">
                    <input type="hidden" name="sent" value="1">
                </form>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/header.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Willkommen im Smartphone-Portal</h1>
            <!--Kann in <p> eingefügt werden: <code>Text</code>-->
              <p>Wenn Sie Zugriff auf den internen Bereich haben möchten und eine Bewertung abgeben möchten, registrieren Sie sich doch einfach.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php?navi=20" role="button">Registrieren</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/header2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sie wollen eine Smartphone-Übersicht?</h1>
              <p>Eine Übersicht aller aktuellen Top-Smartphones finden Sie hier.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php?navi=1" role="button">Übersicht anzeigen</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/header3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Slider 3</h1>
              <p>Text zu Slider 3</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Buttontext</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Vorheriges</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Nächstes</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     <!-- START THE FEATURETTES -->

<!--      <hr class="featurette-divider">-->

      <div class="row featurette">
<?php
      $navigation = isset($_GET['navi']) ? $_GET['navi'] : '0';

			switch ($navigation) {
				case "1":
                    echo "<div class='col-md-7'>";
					echo "<h2 class='featurette-heading'>Smartphones <span class='text-muted'>anzeigen</span></h2>";
					include ("inc/smartphoneanzeigen1.inc.php");
                    echo "</div>";
					break;
				case "2":
                    echo "<div class='col-md-7'>";
					echo "<h2>Smartphone bewerten</h2>";
					include ("inc/smartphonebewerten.inc.php");
                    echo "</div>";
					break;
                case "Android":
                    echo "<hr class='featurette-divider'>";
                    echo "<h2>Filterergebnisse - $navigation</h2>";
                    include("inc/suchen.inc.php");
                    break;
                case "iOS":
                    echo "<hr class='featurette-divider'>";
                    echo "<h2>Filterergebnisse - $navigation</h2>";
                    include("inc/suchen.inc.php");
                    break;
                case "Windows Phone OS":
                    echo "<hr class='featurette-divider'>";
                    echo "<h2>Filterergebnisse - $navigation</h2>";
                    include("inc/suchen.inc.php");
                    break;
                case "10":
                        echo "<div class='col-md-7'>";
                        include ("inc/smartphone_details.inc.php");
                        break;
                case "20":
                        echo "<div class='col-md-12'>";
                        if (isset($REQUEST["notloggedin"])) {
                            include ("inc/login_form.inc.php?notloggedin=1");
                        }
                        if (isset($REQUEST["out"])) {
                            include ("inc/login_form.inc.php?out=1");
                        }                
                        else {
                            include ("inc/login_form.inc.php");
                        }
                        break;
                case "30":
                        echo "<div class='col-md-12'>";
                        include ("intern.php");
                        break;
                case "40":
                        echo "<div class='col-md-12'>";
                        if (isset($REQUEST["notloggedin"])) {
                            include ("inc/register_form.inc.php?success=1");
                        }
                        else {
                            include ("inc/register_form.inc.php");
                        }
                        break;                
			}
	
      $sent = isset($_POST['sent']) ? $_POST['sent'] : '';
      $suche = isset($_POST['search']) ? $_POST['search'] : '';

      if ($sent and $suche) {
        echo "<hr class='featurette-divider'>";
        echo "<h2>Suchergebnisse - $suche</h2>";
        include("inc/suchen.inc.php");
      }
ob_flush();
?>
<!--          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>-->
<!--
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
-->
      </div>
        <!-- Divider ist der Trennstrich! -->
              <hr class="featurette-divider">
 <!-- Three columns of text below the main section -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-rounded" src="img/logo_ios.png" alt="Generic placeholder image" height="140" width="auto">
          <h2>iOS</h2>
          <p>Apple</p>
          <p><a class="btn btn-default" href="index.php?navi=iOS&filter=iOS" role="button">Filter benutzen &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="img/logo_android.png" alt="Generic placeholder image" height="140" width="auto">
          <h2>Android</h2>
          <p>Google</p>
          <p><a class="btn btn-default" href="index.php?navi=Android&filter=Android" role="button">Filter benutzen &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="img/logo_wp.png" alt="Generic placeholder image" height="140" width="auto">
          <h2>Windows Phone</h2>
          <p>Microsoft</p>
          <p><a class="btn btn-default" href="index.php?navi=Windows Phone OS&filter=Windows Phone OS" role="button">Filter benutzen &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">
        
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Nach oben</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>