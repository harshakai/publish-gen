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
  background-color: 	#0047AB;
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
  background-color: 	#0047AB;
  color: white;
}

.topnav .icon {
  display: none;
}

.header-1{
  background-color: 	#0047AB;
  width: 100%;
  height: 20vh;
  
}

.header-1 h1{
  padding-top: 2%;
  
}

.search{
  display: flex;
  flex-direction: row;
}
h4{
  color: #fff;
}
h1{
  color: #ffff;
}

.header-2{
  display: flex;
  flex-direction: row;
  background-color: rgb(255, 213, 0);
}
.head-para{
  width: 50%;
  height: auto;
}
.head-img{
  width: 50%;
  height: auto;
}
.head-para h1{
  color: black;
}
.responsive {
  width: 100%;
  height: auto;
}

    input{
      height: 40px;
      width: fit-content;
      border-radius: 5px;
    }
    .btn-1{
      height: 40px;
      width: fit-content;
      border-radius: 5px;
      background-color: rgb(43, 43, 235);
      color: #fff;
    }

    button{
      width: fit-content;
      height: 40px;
      border-radius: 5px;
      border-style: solid;
      background-color: rgb(43, 43, 235);
      
    }

    a{
      color: #fff;
    }
    .head-para{
      width: 40%;
      margin-left: 5%;
      margin-top: 20%;

    }
    .paragraph{
      font-size: 50px;
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

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .head-para{
      width: 30%;
      margin-left: 5%;
      margin-top: 20%;

    }
    .paragraph{
      width: 30%;
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
  .header-1{
    width: 100%;
    height: auto;
  }
  .where{
    margin-bottom: -3%;
    margin-top: 2%;
  }
}
  @media screen and (max-width: 800px){
  .search{
    display: flex;
    flex-direction: column;
  }  
  .header-2{
    display: flex;
    flex-direction: column;
  }
  .header-1{
    height: 60vh;
    width: 100%;
  }
  .head-para{
    width: 100%;
  }
  .head-img{
    width: 100%;
    justify-content: center;
  }
  .head-para{
      width: 80%;
      margin-left: 5%;
      margin-top: 20%;

    }
    .paragraph{
      width: 80%;
    }
  
  }


  @media screen and (max-width: 700px) {
    .header-1{
  width: 100%;
  height: 60vh;
  
}

  }

  @media screen and (max-width: 200px) {
    .header-1{
  width: 100%;
  height: 60vh;
  
}

  }

  @media screen and (max-width: 400px) {
    .header-1{
  width: 100%;
  height: 60vh;
  
}
  }
  

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="http://127.0.0.1:5500/index.html" class="active"><img src="Untitled_design-removebg.png" height="35px" width="inherit" style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"><b>GENESIS IT SOLUTIONS</b></b></a>
    <a href="http://127.0.0.1:5500/jobs.php" style="font-size: 14px;margin-top: 5px;">Find Jobs</a>
    <a href="http://127.0.0.1:5500/location.html" style="font-size: 14px;margin-top: 5px;">Location</a>
    <a href="admin/admin_login.php" style="font-size: 14px;margin-top: 5px;">Admin Login</a>
    <a href="login.php" style="font-size: 14px;margin-top: 5px;">User Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<div class="header-2">
<div class="head-para">
  <p class="paragraph">
    your new resume is just seconds away.
  </p>
  <p >Fill in your contact information so we can build a new professional resume that you can use to start applying for jobs today.</p>
  <button ><a href="http://127.0.0.1:5500/build-resume.php">Get Started</a></button>
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

      <!-- NEW JOBS section -->
      <h2>NEW JOBS</h2>
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

      for ($i = $startIndex; $i <= $endIndex; $i++) {
        $jobPosting = $jobPostings[$i];
        echo '<div class="job-listing">';
        echo '<div class="job-title">' . htmlspecialchars($jobPosting["title"]) . '</div>';
        echo '<div class="job-description">' . htmlspecialchars($jobPosting["description"]) . '</div>';
        echo '<div class="contact-info">Contact: ' . htmlspecialchars($jobPosting["contact"]) . '</div>';

        // Add the application form here
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" enctype="multipart/form-data">';
        echo '<input type="hidden" name="job_id" value="' . $jobPosting["jobID"] . '">';
        echo '<input type="text" name="name" placeholder="Your Name" required>';
        echo '<input type="email" name="email" placeholder="Your Email" required>';
        echo '<input type="file" name="resume" accept=".pdf,.doc,.docx" required>';
        echo '<button type="submit" name="apply_job" class="btn">Apply Now</button>';
        echo '</form>';

        echo '</div>';
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
    <?php
    // jobs.php (Display Saved Job Postings)
    include('database.php'); // Include the database connection file
    $sql = "SELECT * FROM jobs";
    $result = mysqli_query($con, $sql);
    ?>

    <div class="job-postings">
        <h2>Saved Job Postings</h2>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="job-item">
                <h3><?php echo $row['job_title']; ?></h3>
                <p><?php echo $row['job_description']; ?></p>
                <p>Location: <?php echo $row['job_location']; ?></p>
                <p><?php echo $row['contact_email']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    

              <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>

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
