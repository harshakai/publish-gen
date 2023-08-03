<?php

//   session_start();

//   include_once('./config.php');

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>GENESIS IT SOLUTIONS-Jobs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <!-- Jquery CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/jobs.css">

</head>

<body>

    <!-- <div class="topnav" id="myTopnav">
        <ul>
            <li><a href="./index.php" class="active"><img src="./images/logo.png" height="50px" width="inherit"
                        style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"></b></b></a>
            </li>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./jobs.php">Find Jobs</a></li>
            <li><a href="./location.php">Location</a></li>

            <?php // if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='user')): ?>
            <li><a href="">Welcome
                <?php // echo $_SESSION['name']; ?>
                </a></li>
            <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
            <?php // elseif(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')): ?>
            <li><a href="">Welcome
                <?php // echo $_SESSION['name']; ?>
                </a></li>
            <li><a href="./admin/dashboard.php">Admin Panel</a></li>
            <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
            <?php // else: ?>
            <li><a href="./admin/index.php">Admin Login</a></li>
            <li><a href="./login.php">User Login</a></li>
            <?php // endif; ?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </ul>
    </div> -->

    <!--------------------------- NAVBAR ----------------------------->
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


    <!------------------------ RESUME SECTION ---------------------------->
    <div class="resume-section">
        <div class="content-section">
            <p class="paragraph">
                Your NEW RESUME is just seconds away.
            </p>
            <p class="caption">Fill in your contact information so we can build a new professional resume that you can
                use to start applying for jobs today.</p>
            <button><a href="#">Upload your Resume</a></button>
        </div>
        <div class="image-section">
            <img src="./images/resume.svg" class="responsive">
        </div>
    </div>


    <!-------------------------- JOBS SECTION ----------------------->
    <div class="jobs-section">
        <div class="job">
            <div class="job-lists">
                <div class="container">
                    <!-- NEW JOBS section -->
                    <div class="heading">
                        <h2>NEW JOBS</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Display Saved Job Postings -->
        <div class="jobs">
            <div class="container">
                <i class="fa-solid fa-chevron-left prev"></i>
                <i class="fa-solid fa-chevron-right next"></i>

                <div class="job-postings">

                    <?php

                        // $jobs = mysqli_query($db,"SELECT * FROM `jobs`");
                        // $count = mysqli_num_rows($jobs);

                        // if(!$jobs){
                        //     die("Query Failed.....".mysqli_error($db));
                        // }
                        // else{
                        //     // echo "Data fetched";
                        //     while($row = mysqli_fetch_assoc($jobs)){
                        //         $description = $row['description'];
                        //         $substring = substr($description,0,10);
                        //         $description = $substring."...";
                        //         echo "
                        //             <div class='job-item'>
                        //                 <h3>$row[title]</h3>
                        //                 <p>$description</p>
                        //                 <p>Location: $row[location]</p>
                        //                 <p>Email: $row[email]</p>
                        //                 <a href='./single-job.php?id=$row[id]' id='popup'>Read More</a>
                        //                 <div id='popup' class='popup'>
                        //                     <span class='popup-content'>Successfully applied</span>
                        //                 </div>
                        //             </div>
                        //         ";
                        //     }
                        // }

                    ?>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <a href="./single-job.php" id="popup">Read More</a>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>

                    <div class="job-item">
                        <h3>
                            Software Developer
                        </h3>
                        <p>
                            A Software Developer is a profession....
                        </p>
                        <p>Location:
                            Vizag
                        </p>
                        <p>
                            abc@gmail.com
                        </p>
                        <button id="popupButton">Read More</button>
                        <div id="popup" class="popup">
                            <span class="popup-content">Successfully applied</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------- Footer Section ----------------------->
    <footer class="footer jobs-footer">
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


    <!-- Jquery Script Tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Slick JS -->
    <script src="./js/slick.min.js"></script>

    <script src="./js/slick.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!----------- NAVBAR RESPONSIVE --------------->
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

    <!------------------------------- For Jobs Refreshing ------------------------>
    <!-- <script>
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
    </script> -->

    <!--  
    <script>
        document.getElementById('popupButton').addEventListener('click', function () {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
            setTimeout(function () {
                popup.style.display = 'none';
            }, 2000); // Hide the popup after 2 seconds (2000 milliseconds)
        });
    </script>
    -->

</body>

</html>