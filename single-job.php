<?php

    include_once('./config.php');

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>


    <title>GENESIS IT SOLUTIONS-Homepage</title>


    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/single-job.css">

</head>

<body>

    <!----------------------------------- NAVBAR ----------------------------------->
    <div class="topnav" id="myTopnav">
        <ul>
            <li><a href="./index.html" class="active"><img src="./images/logo.png" height="50px" width="inherit"></a>
            </li>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./jobs.php">Find Jobs</a></li>
            <li><a href="./location.html">Location</a></li>
            <li><a href="./adminlogin.php">Admin Login</a></li>
            <li><a href="./userlogin.php">User Login</a></li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
        </ul>
    </div>

    <!------------------------- JOB DESCRIPTION -------------------->

    <?php

        $sql = mysqli_query($db,"SELECT * FROM `jobs` WHERE id='$id'");
        
        if($sql){
            // echo "Data Fetched";
        }

        $row = mysqli_fetch_assoc($sql);

        $title = $row['title'];
        $description = $row['description'];
        $location = $row['location'];
        $email = $row['email'];

    ?>

    <div class="job-description">
        <h1><?php echo $title; ?></h1>
        <div class="job-details">
            <?php echo $description; ?>
        </div>
        <div class="location">
            Location : <?php echo $location; ?>
        </div>
        <div class="email">
            Email : <?php echo $email; ?>
        </div>
        <div>
            <button>Apply</button>
        </div>
    </div>

    <!------------------------------- Footer Section ----------------------->
    <footer class="footer single-job-footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="image"><img src="./images/logo.png" alt=""></div>
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

</body>

</html>