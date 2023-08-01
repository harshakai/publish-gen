<?php

    // Check if the user is logged in
    session_start();
    // echo $_SESSION['id'];
    // echo $_SESSION['name'];
    // Database Connection
    require('./includes/config.php');

    if($con){
      // echo "Success";
    }
    else{
      echo "Failure";
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>about</title>
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
.responsive {
  width: 100%;
  height: 70vh;
  object-fit: cover;
  background-position: center;
}

.img{
  width: 100%;
  object-fit: contain;
}
.container{
  display: flex;
  flex-direction: row;
  margin-top: 3%;
}

.para{
width:50%;
font-size: 20px;
}

.footer {
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

/* Style the links on hover if desired */
.footer-nav a:hover {
  color: #ff6600;
}

.p{
  font-family: 'Roboto Condensed', sans-serif;
  text-align:justify;
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
.container{
  display: flex;
  flex-direction: column-reverse;
}
  .para{

width:100%;
font-size: 20px;
}

.img
 {
  display: none;
 }
}

@media screen and (max-width: 900px) {

  .img
 {
  display: none;
 }

}



</style>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="Untitled_design-removebg.png" height="35px" width="inherit"
          style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"><b>GENESIS IT
            SOLUTIONS</b></b></a>
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
              <p>Welcome to Genesis, your premier destination for finding your dream job! At Genesis, we understand that finding the perfect job can be a daunting task, but we're here to simplify the process for you. With our innovative platform and user-friendly interface, job hunting has never been easier.
We take pride in connecting talented individuals with top-tier employers across various industries. Our extensive database is constantly updated with the latest job listings, ensuring you have access to the most relevant opportunities available. Whether you're a recent graduate, a seasoned professional looking for a career change, or someone reentering the workforce, we have something for everyone.
At Genesis, we go beyond just matching resumes to job postings.
<BR><br>
Our CEO'S

<p style="font-weight: 700;font-size: 50px;">SRIDHAR</p>
<p  style="font-weight: 700;font-size: 50px;">VIJAY KUMAR</p>

</p></div>
<div class="img">

  <img src="Untitled_design-removebg.png" style="height: 70vh;object-fit: cover;background-position: center;" alt="office" class="responsive" width="600" height="400"></div>
</div>
</div>
    
    
    
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