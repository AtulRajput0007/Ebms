<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>E-Bus Pass Management System</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-10 fixed-top">
    <a href="index.php" class="navbar-brand">E-Bus Pass Management System</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-1 custom-nav" style="position: absolute; right: 100px;">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav><!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/md2.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-white font-weight-bold text-center">Welcome To Our E-Bus Pass Management System</h1>
      <h2 class="text-uppercase text-white font-weight-bold text-center">"Think success Think MMU"</h2><br>
    
      <a href="Requester/RequesterLogin.php" class="btn btn-info btn-lg" style="position: absolute; right: 800px; ">Login</a>
      <a href="#registration" class="btn btn-info btn-lg"style="position: absolute; right: 640px;">Sign Up</a>
      
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Our Aim</h3>
      <p>
      E- Bus Pass Management System aims to provide an effective solution for maintaining Bus pass information using a database.
      The system has 2 logins, one for user and other for admin. Online bus pass generation system is a web application for people to get bus passes through online.
       This system is intended to develop an application to perform functionalities like accessing the basic information for authentication and provide bus pass to a particular person without placing system him/her in a queue for a long time. Online bus pass generation system is helpful as it reduces the paper work, time consumption and makes the process of getting bus pass in simple and faster way.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom shadow-lg p-4" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-bus fa-6x text-success "></i></a>
        <h4 class="mt-4">Bus Timings</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-map fa-8x text-danger"></i></a>
        <h4 class="mt-4">Route Details</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-question fa-8x text-primary"></i></a>
        <h4 class="mt-4">Query</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  
  <div class="jumbotron bg-white" id="Customer">
  
    <div class="container">
      
      <u><h2 class="text-center text-dark ">Members Of Project And Mentor </h2></u>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-1">
            <div class="card-body text-center">
              <img src="images/me.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Atul Kumar</h4>
              <p class="card-text">Backend Devloper</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/roomate.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Aayush Maurya</h4>
              <p class="card-text">Frontend Devloper</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/ayush.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ayush Rajput</h4>
              <p class="card-text">Outlet Designer</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/person-icon.png" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Mani Goyal</h4>
              <p class="card-text">Mentor</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Maharishi Markandeshwar <br>
        (DEEMED TO BE UNIVERSITY) <br>
        Mullana, Ambala (Haryana) <br>
        Phone: +91-1731-274475, 76, 77, 78</strong> <br>
         
        <a href="#" target="_blank">www.mmumullana.org</a> <br>

        <strong>OTHER INSTITUTIONS UNDER MMT:

MMU, SADOPUR, AMBALA, HARYANA
MMU, SOLAN
MMIS, MULLANA
MMIS, AMBALA
MMIS, KARNAL
MMU, SADOPUR, AMBALA, HARYANA
MMU, SOLAN
MMIS, MULLANA
MMIS, AMBALA
MMIS, KARNAL
MMU, SADOPUR, AMBALA, HARYANA</strong> <br>
        
        
        Email:info@mmumullana.org <br>
        <a href="#" target="_blank">www.mmumullana.org</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div>
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-10" style="border-top: 20px solid #364147;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-2">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="https://www.facebook.com/MMDUMullana/" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/mmdumullana?lang=en" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCXrEO3Y0GXfjC3wjU1kpzIQ" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/MMDUmullana/" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
          
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by : Atul kumar, Aayush Maurya, Ayush Rajput
          </small>
          <small class="ml-2"><a href="Admin/login.php" class="btn btn-info btn-sm" style="position: absolute; right: -170px; ">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>> <!-- End Footer -->

  
</body>

</html>