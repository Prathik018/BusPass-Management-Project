<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','buspassdata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userregister(username,email,password) values(?,?,?)");
		$stmt->bind_param("sss", $username, $email, $password,);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>registration completed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- <link rel="stylesheet" href="css/Bus.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="viewpass.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="navbar navbar-light navbar-expand-xl fixed-top"
      style=" width: 100%; background-color: rgba(0, 0, 0, 0);  padding-left: 6px;">
      <a class="navbar-brand" href="homepage.php"><img src="images/logo.png" alt="calligraphy-fonts" border="0"
          style="max-width: 90px; padding-left: 7px;"></a>
    </nav>


    <div class="site-blocks-cover inner-page-cover"
      data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center" style="padding-top: 60px; margin-top:0;">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-black"style="text-shadow: 2px 2px 4px #000000;">
              Registration Successful</h1>
            <div style="font-size: 17px;">
              <a href="homepage.php"
                style="color:black;  text-shadow: 2px 2px 4px black, 0 0 25px rgb(129, 121, 121), 0 0 2px rgb(196, 184, 184);">Home</a>
              <span class="mx-2 text-white"></span>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light con">
      <div class="container">
        <div class="row content">
          <div class="col-lg- mb-5" style="margin: 30px auto;">

            <img src="images/test.jpg" style=" box-shadow: 3px 3px 5px grey;">


          </div>
          

          </div>
        </div>
      </div>
    </div>  
    <!--login -->
  <div>
	<center><a href="userlogin.php">Click here to login</a></center>
  </div>
			
	
    <img class="ml-1 bus" data-aos="fade-right" src="images/travel.png" style="max-width: 150px;">

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left py-4">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-white mt-3 mb-4">BUS PASS</h5>
            <p>Bus Pass System is developed using HTML, CSS and Javascript as Front-end technologies.
              Bus pass registration is useful for passengers who are facing problems with the current manual work of bus
              pass registration.</p>

          </div>
        

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-white mt-3 mb-4">Navigations</h5>

            <ul class="list-unstyled">
              <li>
                <i class="fa fa-home"> </i><a href="homepage.php"> Home</a>
              </li>
              <li>
                <i class="fa fa-bus"> </i><a href="about.php"> About</a>
              </li>
              <li>
                <i class="fa fa-envelope"> </i><a href="contact.php"> Contact</a>
              </li>
              <li>
               
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->



      <div class="footer-copyright text-center py-3">
        <p>Copyright © 2022 All Rights Reserved by <a href="https://instagram.com/theinfinite.designer">Bus
            Pass </a><a href="#"><i class="fa fa-arrow-circle-up pl-1" style="color: black"></i></a></p>
      </div>
    </footer>
    <!-- Footer -->
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script src="js/contact.js"></script>

</body>

</html>