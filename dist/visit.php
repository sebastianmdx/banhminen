<?php

date_default_timezone_set('Europe/London'); 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visit | Banh Mi Nen</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>


<!-- navbar -->

    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div id="social-net" class="col-md-4 col-sm-4 col-xs-12">
                    <span><a class="facebook" href="https://www.facebook.com/Banh-Mi-N%C3%AAN-668313489864539/?fref=ts" target="_blank"></a></span>
                    <span><a class="twitter" href="https://twitter.com/VietnameseB" target="_blank"></a></span>
                    <span><a class="instagram" href="https://www.instagram.com/banhminen/" target="_blank"></a></span>
        </div>
              
        <div class="col-md-4 col-sm-4 col-xs-12">
        <a href="index.php">
            <img src="images/logo_large.png" id="logo-center" alt="Logo image">
        </a> 
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"> <!-- third column -->
        </div>
      </div>

    <hr class="hidden-xs">

    <div class="centered">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span id="main-nav" class="hidden-lg hidden-md hidden-sm">MAIN NAVIGATION</span>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
        <ul class="mynav">
        <li><a href="index.php">Home</a></li>
        <br class="visible-xs">
        <li><a href="about.php">About</a></li>
        <br class="visible-xs">
        <li><a href="menu.php">Menu</a></li>
        <br class="visible-xs">
        <li><a href="visit.php">Visit</a></li>
        <br class="visible-xs">
        <li><a href="contact.php">Contact</a></li>
        </ul>
        </div>
      
    </nav>
  </header>

    <!-- end of navbar -->

    <!-- main body -->

<hr>
<h2 class="text-center">Visit Us!</h2>

  <img class="map" src="images/map-large.png" alt="Picture of the Banhminen stall">
</div>

<div class="about-stretch">
 <p id="about-description">"Located in the heart of a UNESCO World Heritage site, a footstep away from the Cutty Sark, is London’s oldest covered market. In 300 years Greenwich Market has gone full circle: from food market to contemporary street food mecca.
<br>
The Greenwich Market Cookbook brings together recipes from many of the traders who work there, cooking food from all across the globe: whether it be ramen burgers or ravioli, banh mi or burritos."- <a href="http://www.kitchenpress.co.uk/portfolio-item/greenwich-market-cookbook/" target="blanc"> THE GREENWICH MARKET COOKBOOK</a></p>
</div>


<hr>
<br>
<h2 class="text-center">Banh Mi Nen</h2>
<br>
<hr>

  <!-- end of main body -->
    
<!-- footer -->

<footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="column-one" class="col-sm-4">
          <span>Hours:</span><br>
          Wed-Fri: 11:30am - 4:00pm<br>
          Sat-Sun: 11:30am - 5:00pm<br>
          <hr class="visible-xs">
        </section>
        <section id="column-two" class="col-sm-4">
          <span>Address:</span><br>
          <a href="https://www.google.co.uk/maps/place/Greenwich+Market/@51.4815406,-0.0112804,17z/data=!3m1!4b1!4m5!3m4!1s0x487602851d6fe651:0x507564deb46a447a!8m2!3d51.4815373!4d-0.0090864" target="_blank">Greenwich Market<br>
          London SE10 9HZ</a>
          <hr class="visible-xs">
        </section>
        <section id="column-three" class="col-sm-4">
          <p>"The best Vietnamese food I have tried!<br>
          <p>"Amazing food! Great service! Couldn't ask for more! I'll be back again!"</p>
        </section>
      </div><br><br>
    <div class="text-center">&copy; Copyright Banhminen <?php echo date('Y'); ?></div>
    <div class="text-center">Designed by <a href="http://seb-czarnecki.com/" target="_blank">Seb Czarnecki</a></div>
  </div>
</footer>
<!-- end of footer -->



  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
