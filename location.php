<?php

  session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GENESIS IT SOLUTIONS-Location</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">


  <!-- Custom CSS Link -->
  <link rel="stylesheet" href="./css/location.css">

</head>

<body>

  <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="./images/logo.png" height="50px" width="inherit"
          style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"></b></b></a>
      </li>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./jobs.php">Find Jobs</a></li>
      <li><a href="./location.php">Location</a></li>

      <?php if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='user')): ?>
      <li><a href="">Welcome
          <?php echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php elseif(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')): ?>
      <li><a href="">Welcome
          <?php echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./admin/dashboard.php">Admin Panel</a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php else: ?>
      <li><a href="./admin/index.php">Admin Login</a></li>
      <li><a href="./login.php">User Login</a></li>
      <?php endif; ?>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </ul>
  </div>

  <h2 class="heading">Directory of Genisis IT Solutions location</h2>

  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3418.4236831659914!2d-96.751469!3d33.157973!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c3df8fa9587cb%3A0xbaf25e7c9abf4299!2s9753%20Brackenfield%20Ln%2C%20Frisco%2C%20TX%2075035%2C%20USA!5e1!3m2!1sen!2sin!4v1690270325102!5m2!1sen!2sin"
    width="90%" height="450" style="border:0;margin-left: 5%;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

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