<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GENESIS IT SOLUTIONS-Homepage</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  background-color:	#0047AB;
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
  background-color:#0047AB;
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
  font-size: 30px;
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
  background-color: #2a0653;
  
}
.btn-2 a:hover{
  color: #fff;
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


  
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="http://127.0.0.1:5500/index.html" class="active"><img src="Untitled_design-removebg.png" height="35px" width="inherit" style="margin-right: 5px;"><b style="color:  rgb(211, 136, 136);font-size: 20px;">GENESIS IT SOLUTIONS</a>
  <a href="http://127.0.0.1:5500/jobs.php">FIND JOBS</a>
  <a href="http://127.0.0.1:5500/location.html">LOCATION</a>
  <a href="http://127.0.0.1:5500/login.php">LOG-IN</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>