<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GENESIS IT SOLUTIONS-Location</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: 'Roboto Condensed', sans-serif;
}
a{
  text-decoration: none;
  color: black;
}

li{
  list-style: none;
}

.topnav {
  overflow: hidden;
  background-color:#0047AB;
}

.topnav ul{
  display: flex;
  justify-content: flex-start;
  align-items: center;
}

.topnav ul li{
  font-size: 14px;
  margin: 5px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:	#0047AB;
  color: white;
}

.topnav .icon {
  display: none;
}

.footer{
  margin-top: 10%;
  background-color: #333;
  color: #fff;
  text-align: center;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px 0;
}
.footer-nav {
  margin-bottom: 10px;
}

.footer-nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
}

h2{
  text-align:center;
  
}

/* Style the links on hover if desired */
.footer-nav a:hover {
  color: #ff6600;
}
.logo {
  margin-bottom: 10px;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .mvdis{
    display: none;
  }
}
</style>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="aswika desing logo by genius.png" height="35px" width="inherit"
          style="margin-right: 5px;">
          </a>
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

<h2 style="margin: 2%;font-weight:500;font-size:40px">Directory of Genisis IT Solutions location</h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3418.4236831659914!2d-96.751469!3d33.157973!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c3df8fa9587cb%3A0xbaf25e7c9abf4299!2s9753%20Brackenfield%20Ln%2C%20Frisco%2C%20TX%2075035%2C%20USA!5e1!3m2!1sen!2sin!4v1690270325102!5m2!1sen!2sin" width="90%" height="450" style="border:0;margin-left: 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  




  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <nav class="footer-nav">
          <div class="logo">
          </div>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#contact">Contact</a>
        </nav>
        <p>&copy; 2023 <a href="http://pravishree.com">pravishree design co.</a></p>
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