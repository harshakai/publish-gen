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

  <!-- Custom CSS Link -->
  <link rel="stylesheet" href="./css/jobs.css">

</head>

<body>

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

  <div class="header-2">
    <div class="head-para">
      <p class="paragraph">
        Your NEW RESUME is just seconds away.
      </p>
      <p class="caption">Fill in your contact information so we can build a new professional resume that you can use to start applying
        for jobs today.</p>
      <button><a href="./build-resume.php">Get Started</a></button>
    </div>
    <div class="head-img">
      <img src="./images/resume_yellowBG_1.svg" class="responsive">
    </div>
  </div>

  <!-- ... (your existing HTML content) ... -->



  <!-- ... (your existing HTML content) ... -->


  <!------- JOBS SECTION ------------>
  <div class="job">
    <div class="job-lists">
      <div class="container">
        <h1>Job Portal - Job Section</h1>
        <!-- <button id="refresh-btn" class="btn-1">Refresh Jobs</button> -->


        <!-- NEW JOBS section -->
        <div class="heading">
          <h2>NEW JOBS</h2>
        </div>
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
      include('./admin/database.php'); // Include the database connection file
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
 
  <!-- <footer class="footer">
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
        <p>&copy; 2023 <a href="http://pravishree.com">Pravishree Design Co.</a></p>
      </div>
    </div>
  </footer> -->

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