<?php

    session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GENESIS IT SOLUTIONS-Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  
   <!-- Custom CSS Link -->
   <link rel="stylesheet" href="./css/buildresume.css">
 
</head>

<body>

<?php
    // Include the database connection
    // require_once './includes/config.php';

    // Check if the form is submitted
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Sanitize and store form data
    //     $name = sanitize_input($_POST["name"]);
    //     $email = sanitize_input($_POST["email"]);
    //     $phone = sanitize_input($_POST["phone"]);
    //     $summary = sanitize_input($_POST["summary"]);
    //     $education = sanitize_input($_POST["education"]);
    //     $experience = sanitize_input($_POST["experience"]);
    //     $skills = sanitize_input($_POST["skills"]);
    //     $resume_references = sanitize_input($_POST["resume_references"]);

    //     $target = "./resumes/";
    //     $filename = $_FILES['resume_file']['name'];
    //     $filetype = strtolower(pathinfo($_FILES['resume_file']['name'],PATHINFO_EXTENSION));
    //     $target_file = $target.basename(md5('resumeid'.$_FILES['resume_file']['name']).".".$filetype);
    //     $file = md5('resumeid'.$_FILES['resume_file']['name']).".".$filetype;

    //     do{
    //         if(empty($name) || empty($email) || empty($phone) || empty($summary) || empty($education) || empty($experience) || empty($skills) || empty($resume_references) || empty($file)){
    //             echo "All Fields are Required!!!";
    //             break;
    //         }
    //         else{
    //             if($filetype == "pdf" || $filetype == "doc" || $filetype == "docx"){
    //                 if(move_uploaded_file($_FILES['resume_file']['tmp_name'],$target_file)){
    //                     $sql = mysqli_query($con,"INSERT INTO `resumes`(`name`, `email`, `phone`, `summary`, `education`, `experience`, `skills`, `resume_references`, `resumes`) 
    //                     VALUES ('$name','$email','$phone','$summary','$education','$experience','$skills','$resume_references','$file')");
    //                     if($sql){
    //                         echo "You have succesfully added a Member";
    //                         header('Location: index.php');
    //                         exit;
    //                     }else{
    //                         echo "Something went wrong !!!";
    //                     }
    //                 }else{
    //                     echo "File Not Moved!!!";
    //                 }
    //             }else{
    //                 echo "File Not Accepted !!!";
    //             }
    //         }
    //     }while(false);
    // }

?>




  <div class="topnav" id="myTopnav">
    <ul>
      <li><a href="./index.php" class="active"><img src="Untitled_design-removebg.png" height="35px" width="inherit"
            style="margin-right: 5px;"><b style="color: rgb(211, 136, 136);font-size: 20px;"><b>GENESIS IT
              SOLUTIONS</b></b></a>
      </li>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./jobs.php">Find Jobs</a></li>
      <li><a href="./location.php">Location</a></li>

      <?php if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='user')): ?>
      <li><a href="">Welcome
          <?php echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php elseif(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')): ?>
      <li><a href="">Welcome
          <?php echo $_SESSION['name']; ?>
        </a></li>
      <li><a href="./admin/dashboard.php">Admin Panel</a></li>
      <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>
      <?php else: ?>
      <li><a href="./admin/index.php">Admin Login</a></li>
      <li><a href="./login.php">User Login</a></li>
      <?php endif; ?>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </ul>
  </div>




  <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["resume_id"])) {
    // Fetch existing resume data from the database and assign it to variables
    // $existingResume = fetchResumeById($_POST["resume_id"]);
    // if ($existingResume) {
        // $name = $existingResume["name"];
        // $email = $existingResume["email"];
        // $phone = $existingResume["phone"];
        // $summary = $existingResume["summary"];
        // $education = $existingResume["education"];
        // $experience = $existingResume["experience"];
        // $skills = $existingResume["skills"];
        // $resume_references = $existingResume["resume_references"];
    // }
// }

// Function to fetch a resume record by ID from the database
// function fetchResumeById($resumeId) {
    // global $con;
// 
    // Prepare the SELECT statement
    // $stmt = $con->prepare("SELECT * FROM resumes WHERE id = ?");
    // $stmt->bind_param("i", $resumeId);
// 
    // Execute the statement
    // $stmt->execute();
    // $result = $stmt->get_result();
// 
    // Fetch the row if it exists
    // if ($result->num_rows > 0) {
        // return $result->fetch_assoc();
    // } else {
        // return null;
    // }
// }
?>



  <?php
// Initialize variables to store form data
// $name = $email = $phone = $summary = $education = $experience = $skills = $references = "";
// 
// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   Sanitize and store form data
//   $name = sanitize_input($_POST["name"]);
//   $email = sanitize_input($_POST["email"]);
//   $phone = sanitize_input($_POST["phone"]);
//   $summary = sanitize_input($_POST["summary"]);
//   $education = sanitize_input($_POST["education"]);
//   $experience = sanitize_input($_POST["experience"]);
//   $skills = sanitize_input($_POST["skills"]);
//   $resume_references = sanitize_input($_POST["resume_references"]);
// 
//   Check if the file upload field exists in $_FILES array
//   if (isset($_FILES["resume_file"])) {
    //   if ($_FILES["resume_file"]["error"] == UPLOAD_ERR_OK) {
        //   $target_dir = "uploads/"; // Change this to the directory where you want to save the resume files
        //   $target_file = $target_dir . basename($_FILES["resume_file"]["name"]);
        //   $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// 
        //   Allow only specific file types (e.g., .pdf, .txt)
        //   $allowedTypes = array("pdf", "txt");
        //   if (in_array($fileType, $allowedTypes)) {
            //   if (move_uploaded_file($_FILES["resume_file"]["tmp_name"], $target_file)) {
                //   File uploaded successfully, store the file path in the database or use it as needed
                //   For example, you can add a new field to your 'resumes' table to store the file path
                //   $resume_file_path = $target_file;
                //   Then use $resume_file_path in the INSERT or UPDATE queries.
            //   } else {
                //   echo "Failed to upload resume file.";
            //   }
        //   } else {
            //   echo "Unsupported file type. Please upload a .pdf or .txt file.";
        //   }
    //   } elseif ($_FILES["resume_file"]["error"] != UPLOAD_ERR_NO_FILE) {
        //   echo "Error uploading the file: " . $_FILES["resume_file"]["error"];
    //   }
//   }
// 
//   Insert the resume data into the database
//   if (insertResume($name, $email, $phone, $summary, $education, $experience, $skills, $resume_references)) {
    //   echo "Resume inserted successfully!";
//   } else {
    //   echo "Failed to insert resume.";
//   }
// }
// 
// 
// Function to sanitize user input
// function sanitize_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>
  <div class="resume-preview">
    <h1>Resume Preview</h1>
    <p><strong>Name:</strong>
      <?php //echo $name; ?>
    </p>
    <p><strong>Email:</strong>
      <?php// echo $email; ?>
    </p>
    <p><strong>Phone:</strong>
      <?php// echo $phone; ?>
    </p>
    <h2>Summary</h2>
    <p>
      <?php// echo $summary; ?>
    </p>
    <h2>Education</h2>
    <p>
      <?php// echo $education; ?>
    </p>
    <h2>Experience</h2>
    <p>
      <?php //echo $experience; ?>
    </p>
    <h2>Skills</h2>
    <p>
      <?php //echo $skills; ?>
    </p>
    <h2>References</h2>
    <p>
      <?php //echo $references; ?>
    </p>
  </div>

  <div class="topnav" id="myTopnav">
    <!-- Your top navigation links remain the same -->
  </div>
  <a href="/jobs.html">BACK</a>

  <div class="container">
    <h1>Resume Builder</h1>
    <form action="#" method="post" enctype="multipart/form-data">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="summary">Summary:</label>
      <textarea id="summary" name="summary" rows="4" required></textarea>

      <label for="education">Education:</label>
      <textarea id="education" name="education" rows="4" required></textarea>

      <label for="experience">Experience:</label>
      <textarea id="experience" name="experience" rows="4" required></textarea>

      <label for="skills">Skills:</label>
      <textarea id="skills" name="skills" rows="4" required></textarea>

      <label for="resume_references">References:</label>
      <textarea id="resume_references" name="resume_references" rows="4" required></textarea>

      <label for="resume_file">Resume File:</label>
      <input type="file" id="resume_file" name="resume_file" accept=".txt, .pdf">

      <button type="submit" class="btn">Submit</button>
      

    </form>
  </div>

  <!--------------------- Footer Section ------------->
  <footer class="footer"> 
    <div class="container">
      <div class="footer-content">
        <div class="image"><img src="./images/resilient_logo.png" alt="" width="250px" height="80px"></div>
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

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    document.getElementById("download_resume").addEventListener("click", function () {
      // Get the resume file path from the button's data attribute
      var fileURL = this.getAttribute("data-resume-file");
      var a = document.createElement("a");
      a.href = fileURL;
      a.download = "resume.txt"; // You can modify the downloaded file name here if needed
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
    });

  </script>

  </script>

</body>

</html>