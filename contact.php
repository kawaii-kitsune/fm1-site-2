<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>Angel Hotel</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="css/portfolio.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
</head>
<?php
if(isset($_GET["mail"])&&($_GET["mail"]=='ok')){
    echo "<script>
            alert('Your mail was send successfully.');
            </script>
    ";
    
}

?>
<body>
  <div id="main">
    <div id="header">
      <div id="welcome">
	    <h1><span>ANGEL</span> HOTEL</h1>
	  </div><!--end welcome-->
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="booking.php">Booking</a></li>
          <li><a href="anounces.php">Anouncments</a></li>
          <li class="current"><a href="contact.php">Contact Us</a></li>
          <?php
				if(!isset($_SESSION["user"])){
				echo  '<li><a href="login.php">Log In </a></li>';
				} else {
				echo '<li><a href="logout.php">Log Out </a></li>';
				}
				?>
        </ul>
      </div>
    </div>
	
	<div id="site_content">	
      <div id="text_content">	
        <div class="content_item">  
		  <h2>Contact Us</h2>
          <p>Use this form to contact us!</p>
          <div class="form_settings">
		    <form method="POST" action="email.php">
            <p><span>Name</span><input class="contact" type="text" name="name"/></p>
            <p><span>Email</span><input class="contact" type="text" name="email"/></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="message"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
			</form>
          </div>
		</div>
      </div>
      <div class="static_image">
	    <img width="500" height="450" src="images/contact.jpg" alt="contact" />
	  </div> 	

    </div> 
  </div>
  
  <div id="footer">
    <div id="footer_container">
    
	  <br style="clear:both"/>
	  <br />
    Website by Angel
    </div>
  </div>
</body>
</html>
