<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

 
  <nav class="navbar">
  <div class="brand-title" > <a href ="index.html"><img  class = "logo" src= "Icon.png"alt="Neilon R Photography"></a></div>
			<a href="#" class="toggle-button">
			  <span class="bar"></span>
			  <span class="bar"></span>
			  <span class="bar"></span>
			</a>
	
			<div class="navbar-links">
			  <ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="Bookings.html">Bookings</a></li>
				<li><a href="Packages.html">Packages</a></li>
				<li><a href="Gallery.html" >Gallery</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="Contact.php"class="active">Contact</a></li>
			  </ul>
			</div>
		  </nav>
      <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Your Moment. Our Passion.</h3>
          <p class="text">
            Get in touch with me via email, socials or phone.
            Feedback is given under 24hrs.
          </p>

          <div class="info">
            <div class="information">
              <img src="location.png" class="icon" alt="" />
              <p>Grenada W.I.</p>
            </div>
            <div class="information">
              <img src="email.png" class="icon" alt="" />
              <a href="mailto:Nrphotography473@gmail.com">Nrphotography473@gmail.com</a>
            </div>
            <div class="information">
              <img src="phone.png" class="icon" alt="" />
              <a href="tel:473-406-6802">tel:473-406-6802</a>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/NRPHOTOGRAPHY473">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://wa.me/c/14734066802">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="https://www.instagram.com/neilonr.photography/">
                <i class="fab fa-instagram"></i>
              </a>
              
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="process.php" method="post">
            <h3 class="title">Contact us</h3>
            <?php
                if(isset($_GET['error']))
                {
                  $Msg = "Please fill in the blanks";
                  echo ' <div class="error">'.$Msg.'</div>';
                }
                if(isset($_GET['success']))
                {
                  $Msg = "Your message has been sent";
                  echo ' <div class="success">'.$Msg.'</div>';
                }
            ?>
           
            <div class="input-container">
              <input type="text" name="UName" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="Email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="text" name="Subject" class="input" />
              <label for="">Subject</label>
              <span>Subject</span>
            </div>
            <div class="input-container textarea">
              <textarea name="msg" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <button class="btn" name="btn-send">Send</button>
            
          </form>
        </div>
      </div>
    </div>
 <script src="main.js"></script>
    <script src="app.js"></script>
  </body>
</html>
