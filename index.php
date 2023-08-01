<?php
    // Check if the user is logged in
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
  <meta name="keywords"
    content="GENESIS IT SOLUTIONS, outsourcing, staffing, consulting, workforce solutions, jobs, career opportunities">
  <link rel="canonical" href="https://example.com/homepage.html">
  <meta property="og:title" content="GENESIS IT SOLUTIONS - Homepage">
  <meta property="og:description"
    content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
  <meta property="og:image" content="https://example.com/og-image.jpg">
  <meta property="og:url" content="https://example.com/homepage.html">
  <title>GENESIS IT SOLUTIONS-Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>


  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <!-- Custom CSS Link -->
  <link rel="stylesheet" href="./css/index.css">


</head>

<body>

  <!-- <div class="topnav" id="myTopnav">
    <a href="./index.php" class="active"><img src="./images/Untitled_design-removebg.png" height="35px" width="inherit"
        style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"><b>GENESIS IT
          SOLUTIONS</b></b></a>
    <a href="./index.php" style="font-size: 14px;margin-top: 5px;">Home</a>
    <a href="./jobs.php" style="font-size: 14px;margin-top: 5px;">Find Jobs</a>
    <a href="./location.php" style="font-size: 14px;margin-top: 5px;">Location</a>
    <a href="./admin/admin_login.php" style="font-size: 14px;margin-top: 5px;">Admin Login</a>
    <a href="./login.php" style="font-size: 14px;margin-top: 5px;">User Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
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


 

  <a class="position-fixed top-50  text-dark bg-light fw-medium border rounded-pill shadow text-decoration-none"
    href="#customizer" data-bs-toggle="offcanvas"
    style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;"><i
      class="ai-settings text-primary fs-base me-1 ms-n1"></i>Connect with us</a>
  <div class="offcanvas offcanvas-end show" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    aria-modal="true" role="dialog">
    <div class="offcanvas-header border-bottom">
      <h4 class="offcanvas-title">CONTACT US</h4>
      <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    
    <!-- form starts from here -->
    <form action="https://formsubmit.co/Contactus@genesisitsolutionsusa.com" method="POST">
      <div class="of-form" style="width: 80%;margin-left: 5%;margin-top: 3%;">
        <div class="form-floating mb-3">
          <input type="text" name="first-name" class="form-control" id="floatingInput" placeholder="first-name">
          <label for="floatingInput">first name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="last-text" class="form-control" id="floatingPassword" placeholder="last-name">
          <label for="floatingPassword">Last name</label>
          <br>
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="number" name="number" class="form-control" id="floatingPassword" placeholder="ph.no number">
          <label for="floatingPassword">Mobile number</label>
          <br>
        </div>
        <div class="input-group mb-3">
          <input type="file" name="image" accept="image/jpeg , image/png" class="form-control" id="inputGroupFile02">
        </div>

        <button
          style="height: 40px;width: 120px;color: #ffff;background-color:#0047AB;border-radius: 30px;border-style: none;"
          type="submit">Submit</button>
      </div>
    </form>
    <!-- form ends -->
    <div class="offcanvas-header border-top d-none" id="customizer-btns">
      <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn"><i
          class="ai-undo fs-lg me-2 ms-n1"></i>Reset</button>
      <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal"><i
          class="ai-code-curly fs-lg me-2 ms-n1"></i>Show styles</button>
    </div>
  </div>



  <div class="container-img-para about-section">
    <div class="img">
      <img src="./images/pexels-canva-studio-3153203.jpg"
        style="height: 100vh;object-fit: cover;background-position: center;" alt="office" class="responsive" width="600"
        height="400">
    </div>
    <div class="para">
      <h2 style="text-align: center;">ABOUTsss GENESIS?</h2>

      <p>We provide outsourcing, staffing, consulting
        and workforce solutions within the areas of engineering, accounting and finance, health-care, human resources,
        IT, legal, life sciences,</span> manufacturing and logistics, office and administration and sales and marketing.
        We can’t wait to tell you all about it.</p>
      <button><a href="./about.php" style="color: white">Read More</a></button>
    </div>
  </div>


  <!-- Find Job Section -->
  <div class="img-2 find-jobs">
    <img src="./images/pexels-ivan-samkov-4458554.jpg" alt="office" class="responsive-2">

    <div class="content">
      <div class="heading">
        <h2 class="heading1">
          Career Search underway?
        </h2>
        <br>
        <h2 class="heading2">
          look no further!
        </h2>
      </div>

      <button class="btn-2"><a href="./jobs.php">Find Jobs</a></button>
    </div>
    <!-- <br> -->
    <!-- <p class="p1" >Is your career ready for a change? Genesis can help match you with your next job and ensure your job search goes smoothly.</p> -->

  </div>

  <!-- Footer Section -->
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