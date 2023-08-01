<?php

  session_start();
  
  $jobs = array(
    array("title" => "Job Title 1", "description" => "Job Description 1", "location" => "Location 1"),
    array("title" => "Job Title 2", "description" => "Job Description 2", "location" => "Location 2"),
  )

?>


<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['apply_job']) && isset($_POST['job_id']) && isset($_FILES['resume'])) {
      $jobID = $_POST['job_id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $resume = $_FILES['resume']['name']; // Note: This is just the filename; you'll need to handle file upload properly

      // ... (code to handle file upload and database insertion goes here) ...

      // For demonstration purposes, we'll just print the data
      echo "Job ID: $jobID<br>";
      echo "Name: $name<br>";
      echo "Email: $email<br>";
      echo "Resume: $resume<br>";
    }
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GENESIS IT SOLUTIONS-Jobs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <!-- Jquery CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">

  <!-- Slick CSS -->
  <link rel="stylesheet" href="./css/slick.css">
  <link rel="stylesheet" href="./css/slick-theme.css">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    body {
      margin: 0;
      font-family: 'Roboto Condensed', sans-serif;
    }

    a {
      text-decoration: none;
      color: black;
    }

    li {
      list-style: none;
    }

    .topnav {
      overflow: hidden;
      background-color: #0047AB;
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
      background-color: #0047AB;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    .header-1 {
      background-color: #0047AB;
      width: 100%;
      height: 20vh;

    }

    .header-1 h1 {
      padding-top: 2%;

    }

    .search {
      display: flex;
      flex-direction: row;
    }

    h4 {
      color: #fff;
    }

    h1 {
      color: #ffff;
    }

    .header-2 {
      display: flex;
      flex-direction: row;
      background-color: rgb(255, 213, 0);
    }

    .head-para {
      width: 50%;
      height: auto;
    }

    .head-img {
      width: 50%;
      height: auto;
    }

    .head-para h1 {
      color: black;
    }

    .responsive {
      width: 100%;
      height: auto;
    }

    input {
      height: 40px;
      width: fit-content;
      border-radius: 5px;
    }

    .btn-1 {
      height: 40px;
      width: fit-content;
      border-radius: 5px;
      background-color: rgb(43, 43, 235);
      color: #fff;
    }

    button {
      width: fit-content;
      height: 40px;
      border-radius: 5px;
      border-style: solid;
      background-color: rgb(43, 43, 235);

    }

    a {
      color: #fff;
    }

    .head-para {
      width: 40%;
      margin-left: 5%;
      margin-top: 20%;

    }

    .paragraph {
      font-size: 60px;
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

    .jobs{
      position: relative;
    }

    .jobs .container{
      width: 100%;
    }

    .jobs .prev{
      position: absolute;
      top: 45%;
      left: 100px;
      font-size: 30px;
      color: #0047AB;
      cursor: pointer;
    } 

    .jobs .next{
      position: absolute;
      top: 45%;
      right: 100px;
      font-size: 30px;
      color: #0047AB;
      cursor: pointer;
    } 

    .job .job-listing {
      border: 2px solid #0047AB;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      text-align: left;
    }

    .job .job-title {
      font-weight: bold;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .job .job-description {
      margin-bottom: 10px;
    }

    .job .contact-info {
      color: #666;
      margin-bottom: 10px;
    }

    .popup {
      display: none;
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #f9f9f9;
      padding: 16px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .popup-content {
      color: #333;
    }


    /* Centering and Responsive Width */
    @media screen and (max-width: 800px) {
      .job .job-listing {
        width: 100%;
      }
    }

    @media screen and (min-width: 801px) and (max-width: 1200px) {
      .job .job-listing {
        width: 90%;
        margin: 0 auto;
      }
    }

    @media screen and (min-width: 1201px) {
      .job .job-listing {
        width: 70%;
        margin: 0 auto;
      }
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination li {
      list-style: none;
      margin: 5px;
    }

    .pagination a {
      text-decoration: none;
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      color: #000;
    }

    .pagination a.active {
      background-color: #0047AB;
      color: #fff;
    }

    .pagination a:hover {
      background-color: #ddd;
    }

    .job-item {
      text-align: start;
      height: 300px;
      width: 20%;
      border-radius: 20px;
      border: 2px solid gray;
      /* border-style: solid;
      border-color: gray;
      border-width: 2px; */
      padding: 10px;
      margin: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .job-item h3 {
      font-size: 30px;
      margin: 2%
    }


    .btn-1 {
      height: 40px;
      background-color: blue;
      width: 100%;
    }

    .job-item p {
      font-size: 20px;
      margin: 2%
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }

      .head-para {
        width: 30%;
        margin-left: 5%;
        margin-top: 20%;

      }

      .paragraph {
        width: 30%;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

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

      .header-1 {
        width: 100%;
        height: auto;
      }

      .where {
        margin-bottom: -3%;
        margin-top: 2%;
      }
    }

    @media screen and (max-width: 800px) {
      .search {
        display: flex;
        flex-direction: column;
      }

      .header-2 {
        display: flex;
        flex-direction: column;
      }

      .header-1 {
        height: 60vh;
        width: 100%;
      }

      .head-para {
        width: 100%;
      }

      .head-img {
        width: 100%;
        justify-content: center;
      }

      .head-para {
        width: 80%;
        margin-left: 5%;
        margin-top: 20%;

      }

      .paragraph {
        width: 80%;
      }

    }


    @media screen and (max-width: 700px) {
      .header-1 {
        width: 100%;
        height: 60vh;

      }

      p.paragraph {

        font-size: 30px;
      }

    }

    @media screen and (max-width: 200px) {
      .header-1 {
        width: 100%;
        height: 60vh;

      }


    }

    @media screen and (max-width: 400px) {
      .header-1 {
        width: 100%;
        height: 60vh;

      }

      p.paragraph {

        font-size: 20px;
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

  <div class="header-2">
    <div class="head-para">
      <p class="paragraph">
        your new resume is just seconds away.
      </p>
      <p>Fill in your contact information so we can build a new professional resume that you can use to start applying
        for jobs today.</p>
      <button><a href="./build-resume.php">Get Started</a></button>
    </div>
    <div class="head-img">
      <img src="resume_yellowBG_1.svg" class="responsive" height="300" width="600">
    </div>
  </div>

  <!-- ... (your existing HTML content) ... -->



  <!-- ... (your existing HTML content) ... -->

  <div class="job">
    <div class="job-lists">
      <div class="container">
        <h1>Job Portal - Job Section</h1>
        <!-- <button id="refresh-btn" class="btn-1">Refresh Jobs</button> -->


        <!-- NEW JOBS section -->
        <h2 style="width:50%;height:auto;background-color:yellow;border-radius:20px;padding:2%;text-align:center;">NEW
          JOBS</h2>
        <?php
            // Fetch the job postings from the PHP session.
            $jobPostings = isset($_SESSION["jobPostings"]) ? $_SESSION["jobPostings"] : array();

            // Pagination logic
            $jobsPerPage = 5;
            $totalJobs = count($jobPostings);
            $totalPages = ceil($totalJobs / $jobsPerPage);
            $currentPage = isset($_GET['page']) ? max(1, $_GET['page']) : 1;
            $startIndex = ($currentPage - 1) * $jobsPerPage;
            $endIndex = min($startIndex + $jobsPerPage - 1, $totalJobs - 1);

            // Loop through the job postings and display each job with an "Apply Now" button
            for ($i = $startIndex; $i <= $endIndex; $i++) {
              $jobPosting = $jobPostings[$i];
              echo '<div class="job-listing">';
              echo '<div class="job-title">' . htmlspecialchars($jobPosting["title"]) . '</div>';
              echo '<div class="job-description">' . htmlspecialchars($jobPosting["description"]) . '</div>';
              echo '<div class="contact-info">Contact: ' . htmlspecialchars($jobPosting["location"]) . '</div>';

            

              // Add the application form here
              echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" enctype="multipart/form-data">';
              echo '<input type="hidden" name="job_id" value="' . $i . '">'; // Use the index of the job as the job_id
              echo '<input type="text" name="name" placeholder="Your Name" required>';
              echo '<input type="email" name="email" placeholder="Your Email" required>';
              echo '<input type="file" name="resume" accept=".pdf,.doc,.docx" required>';
              echo '<button type="submit" name="apply_job">Apply Now</button>'; // Add the Apply Now button
              echo '</form>';
            
              echo '</div>';
            }
          // ...
          // ... (your existing PHP code)

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              if (isset($_POST['apply_job']) && isset($_POST['job_id']) && isset($_FILES['resume'])) {
                $jobID = $_POST['job_id']; // Get the job ID from the form submission
                $name = $_POST['name'];
                $email = $_POST['email'];
                $resume = $_FILES['resume']['name']; // Note: This is just the filename; you'll need to handle file upload properly
              
                // ... (code to handle file upload and database insertion goes here) ...
              
                // For demonstration purposes, we'll just print the data
                echo "Job ID: $jobID<br>";
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Resume: $resume<br>";
              }
            }
            // ...
        ?>
 
        <?php
          // ... (your existing PHP code)

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require 'vendor/autoload.php'; // Adjust the path to autoload.php as per your project structure

            // ... (your existing PHP code)

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              if (isset($_POST['apply_job']) && isset($_POST['job_id']) && isset($_FILES['resume'])) {
                // Your existing code to process form data...
              
                // Send confirmation email
                try {
                  $mail = new PHPMailer(true);
                
                  // Server settings
                  $mail->isSMTP();
                  $mail->Host       = 'smtp.'; // Replace with your SMTP server address
                  $mail->SMTPAuth   = true;
                  $mail->Username   = 'your_smtp_Sridhar.Para@gmail.com'; // Replace with your SMTP username
                  $mail->Password   = 'your_smtp_Genesis89'; // Replace with your SMTP password
                  $mail->SMTPSecure = 'tls';
                  $mail->Port       = 587;
                
                  // Recipients
                  $mail->setFrom('fromSridhar.Para@gmail.com', 'Your Name'); // Replace with your email address and name
                  $mail->addAddress($_POST['email'], $_POST['name']); // Email and name of the applicant
                
                  // Content
                  $mail->isHTML(true);
                  $mail->Subject = 'Job Application Confirmation';
                  $mail->Body    = 'Thank you for applying for the job. We will be in contact soon.';
                
                  $mail->send();
                } catch (Exception $e) {
                  // Handle email sending error (optional)
                }
              
                // For demonstration purposes, we'll just print the data
                echo "Job ID: $jobID<br>";
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Resume: $resume<br>";
              }
            }
        ?>

        <!-- Pagination links -->
        <ul class="pagination">
          <?php
            for ($page = 1; $page <= $totalPages; $page++) {
              $activeClass = ($page === $currentPage) ? 'active' : '';
              echo '<li><a class="' . $activeClass . '" href="?page=' . $page . '">' . $page . '</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Display Saved Job Postings -->
  <div class="jobs">
    <?php
      // jobs.php (Display Saved Job Postings)
      include('./database.php'); // Include the database connection file
      $sql = "SELECT * FROM jobs";
      $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
      <i class="fa-solid fa-chevron-left prev"></i>
      <i class="fa-solid fa-chevron-right next"></i>

      <div class="job-postings">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="job-item">
              <?php  
                $data = $row['job_description'];
                $substring = substr($data, 0 ,20);
                $description = $substring."...";
              ?>
              <h3><?php echo $row['job_title']; ?></h3>
              <p><?php echo $description; ?></p>
              <p>Location: <?php echo $row['job_location']; ?></p>
              <p><?php echo $row['contact_email']; ?></p>
              <button id="popupButton">Apply</button>
              <div id="popup" class="popup">
                <span class="popup-content">Successfully applied</span>
              </div>
            </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>


  <!-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/jobs.php">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav> -->

  <div class="content">
    <!-- Your website content goes here -->
  </div>

  <div class="content">
    <!-- Your website content goes here -->
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

  

  <!-- Jquery Script Tag -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

  <!-- Slick JS -->
  <script src="./js/slick.min.js"></script>

  <script src="./js/slick.js"></script>

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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const refreshButton = document.getElementById("refresh-btn");
      refreshButton.addEventListener("click", function () {
        fetchJobs(); // Fetch updated job listings from the server
      });
    });

    function fetchJobs() {
      // Perform AJAX request to fetch the latest job listings from the server
      fetch("path/to/your/api/endpoint.php") // Replace with the actual path to your server-side script that retrieves job listings
        .then((response) => response.json())
        .then((data) => {
          // Update the job listings section with the new data
          const jobListings = document.querySelector(".job-listings");
          jobListings.innerHTML = ""; // Clear existing job listings

          // Loop through the new job data and create HTML elements for each job listing
          data.forEach((job) => {
            const jobListingElement = createJobListingElement(job);
            jobListings.appendChild(jobListingElement);
          });
        })
        .catch((error) => {
          console.error("Error fetching job data:", error);
        });
    }

    function createJobListingElement(job) {
      // Create HTML elements for each job listing
      const jobListing = document.createElement("div");
      jobListing.classList.add("job-listing");
      jobListing.innerHTML = `
    <div class="job-title">${job.title}</div>
    <div class="job-description">${job.description}</div>
    <div class="contact-info">Contact: ${job.location}</div>
    <form action="${window.location.href}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="job_id" value="${job.id}">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="file" name="resume" accept=".pdf,.doc,.docx" required>
      <button type="submit" name="apply_job" class="btn-1">Apply Now</button>
    </form>
  `;

      return jobListing;
    }
  </script>


  <script>
    document.getElementById('popupButton').addEventListener('click', function() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';
    setTimeout(function() {
      popup.style.display = 'none';
    }, 2000); // Hide the popup after 2 seconds (2000 milliseconds)
    });
  </script>

</body>

</html>