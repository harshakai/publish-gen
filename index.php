
<?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['user_type'])) {
      if ($_SESSION['user_type'] === 'admin') {
        echo '<a href="admin/admin_login.php" style="font-size: 14px;margin-top: 5px;">Admin Panel</a>';
      } else {
        // Assuming you have a "user_name" session variable for the user's name
        if (isset($_SESSION['user_name'])) {
          echo '<div style="font-size: 14px; margin-top: 5px;">Logged in as: ' . $_SESSION['user_name'] . '</div>';
        }
        echo '<a href="logout.php" style="font-size: 14px;margin-top: 5px;">Logout</a>';
      }
    } else {
      echo '<a href="admin/admin_login.php" style="font-size: 14px;margin-top: 5px;">Admin Login</a>';
      echo '<a href="login.php" style="font-size: 14px;margin-top: 5px;">User Login</a>';
    }
  ?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
<meta name="keywords" content="GENESIS IT SOLUTIONS, outsourcing, staffing, consulting, workforce solutions, jobs, career opportunities">
<link rel="canonical" href="https://example.com/homepage.html">
<meta property="og:title" content="GENESIS IT SOLUTIONS - Homepage">
<meta property="og:description" content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
<meta property="og:image" content="https://example.com/og-image.jpg">
<meta property="og:url" content="https://example.com/homepage.html">
<title>GENESIS IT SOLUTIONS-Homepage</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
button{
  width: fit-content;
  height: 60px;
  background-color: transparent;
  border-radius: 5px;
  border-style: solid;
}
.topnav {
  overflow: hidden;
  background-color:#0047AB;
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
  height: auto;
}
.responsive-2 {
  width: 100%;
  height: auto;
  position: absolute;
}

.paragraph{
  
  top: 0;
}
.img{
  height: 100%;
  width: 50%;
}

.img-2{
  display: flex;
  flex-direction: column;
}

.para{
  height: auto;
  width: 50%;
  justify-content: center;
  text-align: center;
  margin-top: 10%;

  
}
h2{
  font-size: 50px;
  text-align: justify;
  width: 80%;
  margin-left: 10%;
}
p{
  font-size: 26px;
  text-align: justify;
  width: 90%;
  margin-left: 5%;
}
.container-img-para{
  display: flex;
  flex-direction: row;
  width:100%;
  height:100%;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}
.footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px 0;
  margin-top: 63%;
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
.logo {
  margin-bottom: 10px;
}
.btn-2{
  position: absolute;
  margin-top: 40%;
  width: 50%;
  margin-left: 20%;
  
}
.btn-2:hover{
  background-color:		#0047AB;
  
}
.btn-2 a:hover{
  color: #fff;
}
.mvdis{
  text-align: justify;
  width: 90%;
  height:40vh;
}



@media screen and (max-width:360px){
  h2{
    font-size: 8px;
    line-height: 40px;
  }
}

@media screen and (max-width:500px) {
  h2{
    font-size: 16px;
  }
  p{
    font-size: 16px;
  }
  .container-img-para{
    display: flex;
    flex-direction: column-reverse;
  }
  .img{
    width: 100%;
  }
  .para{
    width:100%
  }
  .img-2{
  display: flex;
  flex-direction: column;
}
.p-1{
  font-size: 16px;
  position: absolute;
}
.mvdis{
    display: none;
  }
  button{
    height: 40px;
  }
  
  
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
@media screen and (max-width: 850px){

.img-2 h2{
font-size: 20px;
text-align: justify;
}

.img-2 p{
font-size: 30px;
text-align: justify;
}

.img-2 button a{
margin-top: 60px;
}
}
@media screen and (max-width: 900px){
    h2{
    font-size: 30px;
  }
  p{
    font-size: 16px;
  }
  .container-img-para{
    display: flex;
    flex-direction: column-reverse;
  }
  .img{
    width: 100%;
  }
  .para{
    width:100%
  }
  .img-2{
  display: flex;
  flex-direction: column;
}
.mvdis{
    display: none;
  }

  }
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="http://127.0.0.1:5500/index.html" class="active">
    <img src="Untitled_design-removebg.png" height="35px" width="inherit" style="margin-right: 5px;">
    <b style="color: rgb(211, 136, 136);font-size: 20px;"><b>GENESIS IT SOLUTIONS</b></b>
  </a>
  <a href="http://127.0.0.1:5500/jobs.php" style="font-size: 14px;margin-top: 5px;">Find Jobs</a>
  <a href="http://127.0.0.1:5500/location.html" style="font-size: 14px;margin-top: 5px;">Location</a>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<a class="position-fixed top-50  text-dark bg-light fw-medium border rounded-pill shadow text-decoration-none" href="#customizer" data-bs-toggle="offcanvas" style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;"><i class="ai-settings text-primary fs-base me-1 ms-n1"></i>Connect with us</a>
    <div class="offcanvas offcanvas-end show" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" aria-modal="true" role="dialog">
      <div class="offcanvas-header border-bottom">
        <h4 class="offcanvas-title">CONTACT US</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
      </div>
      <!-- form starts from here -->
      <form action="https://formsubmit.co/kanimerakalaharshavardhan@Gmail.com" method="POST">
      <div class="of-form" style="width: 80%;margin-left: 5%;margin-top: 3%;">
      <div class="form-floating mb-3">
        <input type="text" name="first-name" class="form-control" id="floatingInput" placeholder="first-name">
        <label for="floatingInput">first name</label>
      </div>
      <div class="form-floating">
        <input type="text" name="last-text" class="form-control" id="floatingPassword" placeholder="last-name">
        <label for="floatingPassword">Last name</label>
        <br>
      </div><div class="form-floating mb-3">
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

      <button style="height: 40px;width: 120px;color: #ffff;background-color:		#0047AB;border-radius: 30px;border-style: none;" type="submit">Submit</button>
</div>
</form>
      <!-- form ends -->
      <div class="offcanvas-header border-top d-none" id="customizer-btns">
        <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn"><i class="ai-undo fs-lg me-2 ms-n1"></i>Reset</button>
        <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal"><i class="ai-code-curly fs-lg me-2 ms-n1"></i>Show styles</button>
      </div>
    </div>


<div class="container-img-para">
<div class="img">
<img src="pexels-canva-studio-3153203.jpg" style="height: 100vh;object-fit: cover;background-position: center;" alt="office" class="responsive" width="600" height="400"></div>
<div class="para">
<h2 style="text-align: center;">ABOUT GENESIS?</h2>

<p style="font-style: 15px;margin: auto;width: 80%; text-align:left;">We provide outsourcing, staffing, consulting and workforce solutions within the areas of engineering, accounting and finance, health-care, human resources, IT, legal, life sciences,</span> manufacturing and logistics, office and administration and sales and marketing. We can’t wait to tell you all about it.</p>
<button><a href="about.html">Read More</a></button>
</div>
</div>


<div class="img-2">
  
  
<img src="pexels-ivan-samkov-4458554.jpg" alt="office" class="responsive-2"  width="600" height="400">

  <h2 style="margin-top: 20%;width:80%;margin-left: 20%;position: absolute;">
    career search underway?
  </h2>
  <br>
  <h2 style="margin-top: 26%;width:80%;margin-left: 20%;position: absolute;">
    look no further!
  </h2>
  <br>
  <!-- <p class="p1" >Is your career ready for a change? Genesis can help match you with your next job and ensure your job search goes smoothly.</p> -->
  <button class="btn-2"><a href="http://127.0.0.1:5500/jobs.php">Find Jobs</a></button>
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
