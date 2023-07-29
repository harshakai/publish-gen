<?php
include("connect.php");
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
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

.topnav {
  overflow: hidden;
  background-color: #2a0653;
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
  background-color: #2a0653;
  color: white;
}

.topnav .icon {
  display: none;
}
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #2a0653;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #2f0053;
            color:#ffff;
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
.footer-nav {
  margin-bottom: 10px;
}

.container-1 {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
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
.footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px 0;
  margin-top: 9%;
}

  </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="http://127.0.0.1:5500/index.html" class="active">GENESIS IT SOLUTIONS</a>
    <a href="http://127.0.0.1:5500/jobs.html">FIND JOBS</a>
    <a href="http://127.0.0.1:5500/location.html">LOCATION</a>
    <a href="http://127.0.0.1:5500/login.html">LOG-IN</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  
  
  
  <div class="container">
    <form id="signup-form" action=""# method="POST" autocomplete="off">
      <h2>Sign Up</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="number" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required> Male
                </label>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="female" required> Female
                </label>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            
            <div class="form-group">
                <input type="submit" name="register" class="btn" value="Register">
            </div>
</form>
      <a href="http://127.0.0.1:5500/login.php">Already have an account</a>
      <br>
      <a href="http://127.0.0.1:5500/index.html">back</a>
    </form>
    <p id="message"></p>
  </div>
  
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



<footer class="footer">
  <div class="container-1">
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
    
    </body>
    </html>



<?php
    if(isset($_POST['register']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $num = $_POST['mobile'];
  $Gender = $_POST['gender'];
   $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  
    $query = "INSERT INTO register VALUES('$username','$email','$num','$Gender','$password','$confirm_password')";

    $data = mysqli_query($conn,$query);

    if($data){
           echo "Data Inserted Into Database";
    }
    
  else{
           echo "Failed";
  }
}

?>