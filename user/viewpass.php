<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
  </style>
  <title>View pass</title>
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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/viewpass.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
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
      <a class="navbar-brand" href="homepage.php"><img src="css/image/logo.png" alt="calligraphy-fonts" border="0"
          style="max-width: 90px; padding-left: 7px;"></a>
    </nav>


    <div class="site-blocks-cover inner-page-cover"
      data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center" style="padding-top: 60px; margin-top:0;">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-black"style="text-shadow: 2px 2px 4px #000000;">
              View pass</h1>
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

            <img src="css/image/test.jpg" style=" box-shadow: 3px 3px 5px grey;">


          </div>
          

          </div>
        </div>
      </div>
    </div>  
    <!--searchbar  search pss view passssssss-->
    <div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="POST" action="">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" name="getname" type="search" placeholder="Search by your name">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success"  name="search_by_name" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
<?php
$connection=mysqli_connect("localhost","root","","buspassdata");
if (isset($_POST['search_by_name']))
{
$fullname=$_POST['getname'];
$query="SELECT *FROM adminpass WHERE fullname='$fullname' ";
$query_run=mysqli_query($connection,$query);
?>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">passnumber</th>
      <th scope="col">full name</th>
      <th scope="col">phone number</th>
      <th scope="col">email</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
<?php
      if(mysqli_num_rows($query_run)>0)
{
        while($row=mysqli_fetch_array($query_run))
  {
?>
    <tr>
      <td> <?php echo $row['passnumber'];?></td>
      <td> <?php echo $row['fullname'];?></td>
      <td> <?php echo $row['phonenumber'];?></td>
      <td> <?php echo $row['email'];?></td>
      <td><a href="downloadpass.php?id=<?php echo $row['id']?>" class="btn btn-danger">view</a></td>  
    </tr>

    <?php
    }
  }
  else
  {
    ?>
    <tr>
      <td colspan="6">no record found</td>
  </tr>
    <?php
  }
    ?>
    </tbody>
</table>
</div>
<?php
}
?>
    <img class="ml-1 bus" data-aos="fade-right" src="css/image/travel.png" style="max-width: 150px;">

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
        </div>
      </div>
      <div class="footer-copyright text-center py-3">
        <p>Copyright © 2022 All Rights Reserved by <a href="https://instagram.com/theinfinite.designer">Bus
            Pass </a><a href="#"><i class="fa fa-arrow-circle-up pl-1" style="color: black"></i></a></p>
      </div>
    </footer>
    <!-- Footer -->
  </div>
</body>
</html>
