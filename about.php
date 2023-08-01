<?php

    // Check if the user is logged in
    session_start();
    // echo $_SESSION['id'];
    // echo $_SESSION['name'];
    // Database Connection
    // require('./includes/config.php');

    // if($con){
    //   echo "Success";
    // }
    // else{
    //   echo "Failure";
    // }

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GENESIS IT SOLUTIONS-Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/about.css"/>

</head>

<body>

  <!-- <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="./images/logo.png" height="50px" width="inherit"
          style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"></b></b></a>
      </li>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./jobs.php">Find Jobs</a></li>
      <li><a href="./location.php">Location</a></li>

      <?php //if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='user')): ?>
      <li><a href="">Welcome
          <?php //echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php //elseif(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')): ?>
      <li><a href="">Welcome
          <?php //echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./admin/dashboard.php">Admin Panel</a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php //else: ?>
      <li><a href="./admin/index.php">Admin Login</a></li>
      <li><a href="./login.php">User Login</a></li>
      <?php // endif; ?>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </ul>
  </div> -->

  <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="./images/logo.png" height="50px" width="inherit"
          style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"></b></b></a>
      </li>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./jobs.php" >Find Jobs</a></li>
      <li><a href="./location.php" >Location</a></li>

      <?php if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='user')): ?>
        <li><a href="">Welcome <?php echo $_SESSION['name']; ?></a></li>
        <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php elseif(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')): ?>
        <li><a href="">Welcome <?php echo $_SESSION['name']; ?></a></li>
        <li><a href="./admin/dashboard.php">Admin Panel</a></li>
        <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php else: ?>
        <li><a href="./admin/index.php" >Admin Login</a></li>
        <li><a href="./login.php" >User Login</a></li>
      <?php endif; ?> 
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </ul>
  </div>
  
  <div class="container">
    <div class="para">
      <p>Welcome to Genesis, your premier destination for finding your dream job! At Genesis, we understand that finding
        the perfect job can be a daunting task, but we're here to simplify the process for you. With our innovative
        platform and user-friendly interface, job hunting has never been easier.
        We take pride in connecting talented individuals with top-tier employers across various industries. Our
        extensive database is constantly updated with the latest job listings, ensuring you have access to the most
        relevant opportunities available. Whether you're a recent graduate, a seasoned professional looking for a career
        change, or someone reentering the workforce, we have something for everyone.
        At Genesis, we go beyond just matching resumes to job postings.
        
        <p class="directors">
            <p class="director">Managing Director : SRIDHAR</p>   
            <p class="director">Our CEO : VIJAY KUMAR sir</p>
        </p>

         <!-- <p style="font-weight: 700;font-size: 50px;"></p>
        <p style="font-weight: 700;font-size: 50px;"></p>   -->
      </p>
    </div>

    <div class="img">
      <img src="./images/resilient_logo.png" style="align-self: center;" alt="office" class="responsive">
    </div>

  </div>
  

 <!-- Footer -->
  <footer class="footer"> 
    <div class="container">
      <div class="footer-content">
        <div class="image"><img src="./images/resilient_logo.png" alt=""></div>
        <div>
          <nav class="footer-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
          </nav>
        </div>
        <div class="company-name">
          <p>&copy; 2023 <a href="http://pravishree.com">pravishree design co. All rights reserved</a></p>
        </div>
      </div>
    </div>
  </footer>



  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>