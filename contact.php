<?php

date_default_timezone_set('Europe/London'); 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | Banh Mi Nen</title>
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
        <br class="visible-xs">
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
  <div class="content text-center" id="contact">
    <div class="row">
    <div class="col-lg-12">
      <h1>Get in touch with us!</h1>
      <br><br>
    </div><!--col-lg-12-->
  </div><!--row-->
  </div>  

    

    <?php
  
    // Check for Header Injections
    function has_header_injection($str) {
      return preg_match( "/[\r\n]/", $str );
    }
    
    
    if (isset($_POST['contact_submit'])) {
      
      // Assign trimmed form data to variables
      // Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
      $name = trim($_POST['name']);
      $email  = trim($_POST['email']);
      $msg  = $_POST['message']; // no need to trim message
    
      // Check to see if $name or $email have header injections
      if (has_header_injection($name) || has_header_injection($email)) {
        
        die(); // If true, kill the script
        
      }
      
      if (!$name || !$email || !$msg) {
        echo '<h3 class="error">All fields required</h3><a href="contact.php" class="btn btn-primary btn-xl btn-center">Go back and try again</a>';
        exit;
      }
      
      // Add the recipient email to a variable
      $to = "banhminenlondon@gmail.com";
      
      // Create a subject
      $subject = "$name sent a message via your contact form";
      
      // Construct the message
      $message .= "Name: $name\r\n";
      $message .= "Email: $email\r\n\r\n";
      $message .= "Message:\r\n$msg";
      
    
      $message = wordwrap($message, 72); // Keep the message neat n' tidy
    
      // Set the mail headers into a variable
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
      $headers .= "From: " . $name . " <" . $email . ">\r\n";
      $headers .= "X-Priority: 1\r\n";
      $headers .= "X-MSMail-Priority: High\r\n\r\n";
    
      
      // Send the email!
      mail($to, $subject, $message, $headers);
    ?>
    
    <!-- Show success message after email has sent -->
    <h3>Thanks for contacting Banh Mi Nen</h3>
    <p>Please allow 24 hours for a response.</p>
    <p><a href="index.php" class="btn btn-primary">&laquo; Go to Home Page</a></p>
    
    <?php
      } else {
    ?>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <form method="post" action="" id="contactForm">
          <div class="row">
            <div class="col-md-6">
              <div for="name" class="control-group form-group">
                <input type="text" class="form-control" placeholder="Your Name" id="name" name="name">
              </div><!--name field-->

             <div for="email" class="control-group form-group"> 
              <input type="email" class="form-control" placeholder="Your Email" id="email" name="email">
             </div> <!--email-field-->  
            </div><!--col-md-6-->  
            
            <div class="col-md-6">

             <div for="message" class="control-group form-group">
              <textarea class="form-control" placeholder="Your Message" id="message" name="message"></textarea>
              </div><!--message field-->

            </div><!--col-md-6--> 

            <div class="clearfix"></div>
          <br><br>
          

          <input type="submit" class="btn btn-primary btn-xl btn-center" name="contact_submit" value="Send Message">
        
          </div><!--row-->
        </form>
      <?php
        }
      ?>
      </div><!--col-lg-12-->
    </div><!--row-->
  </div><!--container-->
</div><!-- contact -->
<br><br>

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
