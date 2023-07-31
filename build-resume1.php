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

    .topnav ul {
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .topnav ul li {
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

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      resize: vertical;
    }

    .btn {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .container-1 {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .foot {
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

    .footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 10px 0;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
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

      .mvdis {
        display: none;
      }
    }
  </style>
</head>

<body>


  <?php
// Include the database connection
require_once 'includes/config.php';

// Function to insert a new resume record into the database
function insertResume($name, $email, $phone, $summary, $education, $experience, $skills, $resume_references) {
    global $con;

    // Prepare the INSERT statement
    $stmt = $con->prepare("INSERT INTO resumes (name, email, phone, summary, education, experience, skills, resume_references) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $summary, $education, $experience, $skills, $resume_references);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $summary = sanitize_input($_POST["summary"]);
    $education = sanitize_input($_POST["education"]);
    $experience = sanitize_input($_POST["experience"]);
    $skills = sanitize_input($_POST["skills"]);
    $resume_references = sanitize_input($_POST["resume_references"]);

    // Insert the resume data into the database
    if (insertResume($name, $email, $phone, $summary, $education, $experience, $skills, $resume_references)) {
        echo "Resume inserted successfully!";
    } else {
        echo "Failed to insert resume.";
    }
}


?>

  <?php

// Function to delete a resume record from the database
function deleteResume($resumeId) {
    global $con;

    // Prepare the DELETE statement
    $stmt = $con->prepare("DELETE FROM resumes WHERE id = ?");
    $stmt->bind_param("i", $resumeId);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Check if the resume ID is provided via GET parameter
if (isset($_GET['resume_id'])) {
    $resumeId = intval($_GET['resume_id']);

    // Delete the resume from the database
    if (deleteResume($resumeId)) {
        echo "Resume deleted successfully!";
    } else {
        echo "Failed to delete resume.";
    }
}
?>

  <?php

// Function to update a resume record in the database
function updateResume($resumeId, $name, $email, $phone, $summary, $education, $experience, $skills, $resume_references) {
    global $con;

    // Prepare the UPDATE statement
    $stmt = $con->prepare("UPDATE resumes SET name = ?, email = ?, phone = ?, summary = ?, education = ?, experience = ?, skills = ?, resume_references = ? WHERE id = ?");
    $stmt->bind_param("ssssssssi", $name, $email, $phone, $summary, $education, $experience, $skills, $resume_references, $resumeId);

    // Execute the statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    $resumeId = intval($_POST["resume_id"]);
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $summary = sanitize_input($_POST["summary"]);
    $education = sanitize_input($_POST["education"]);
    $experience = sanitize_input($_POST["experience"]);
    $skills = sanitize_input($_POST["skills"]);
    $resume_references = sanitize_input($_POST["resume_references"]);

    // Update the resume data in the database
    if (updateResume($resumeId, $name, $email, $phone, $summary, $education, $experience, $skills, $resume_references)) {
        echo "Resume updated successfully!";
    } else {
        echo "Failed to update resume.";
    }
}

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
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["resume_id"])) {
    // Fetch existing resume data from the database and assign it to variables
    $existingResume = fetchResumeById($_POST["resume_id"]);
    if ($existingResume) {
        $name = $existingResume["name"];
        $email = $existingResume["email"];
        $phone = $existingResume["phone"];
        $summary = $existingResume["summary"];
        $education = $existingResume["education"];
        $experience = $existingResume["experience"];
        $skills = $existingResume["skills"];
        $resume_references = $existingResume["resume_references"];
    }
}

// Function to fetch a resume record by ID from the database
function fetchResumeById($resumeId) {
    global $con;

    // Prepare the SELECT statement
    $stmt = $con->prepare("SELECT * FROM resumes WHERE id = ?");
    $stmt->bind_param("i", $resumeId);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the row if it exists
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>



  <?php
// Initialize variables to store form data
$name = $email = $phone = $summary = $education = $experience = $skills = $references = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and store form data
  $name = sanitize_input($_POST["name"]);
  $email = sanitize_input($_POST["email"]);
  $phone = sanitize_input($_POST["phone"]);
  $summary = sanitize_input($_POST["summary"]);
  $education = sanitize_input($_POST["education"]);
  $experience = sanitize_input($_POST["experience"]);
  $skills = sanitize_input($_POST["skills"]);
  $resume_references = sanitize_input($_POST["resume_references"]);

  // Check if the file upload field exists in $_FILES array
  if (isset($_FILES["resume_file"])) {
      if ($_FILES["resume_file"]["error"] == UPLOAD_ERR_OK) {
          $target_dir = "uploads/"; // Change this to the directory where you want to save the resume files
          $target_file = $target_dir . basename($_FILES["resume_file"]["name"]);
          $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

          // Allow only specific file types (e.g., .pdf, .txt)
          $allowedTypes = array("pdf", "txt");
          if (in_array($fileType, $allowedTypes)) {
              if (move_uploaded_file($_FILES["resume_file"]["tmp_name"], $target_file)) {
                  // File uploaded successfully, store the file path in the database or use it as needed
                  // For example, you can add a new field to your 'resumes' table to store the file path
                  // $resume_file_path = $target_file;
                  // Then use $resume_file_path in the INSERT or UPDATE queries.
              } else {
                  echo "Failed to upload resume file.";
              }
          } else {
              echo "Unsupported file type. Please upload a .pdf or .txt file.";
          }
      } elseif ($_FILES["resume_file"]["error"] != UPLOAD_ERR_NO_FILE) {
          echo "Error uploading the file: " . $_FILES["resume_file"]["error"];
      }
  }

  // Insert the resume data into the database
  if (insertResume($name, $email, $phone, $summary, $education, $experience, $skills, $resume_references)) {
      echo "Resume inserted successfully!";
  } else {
      echo "Failed to insert resume.";
  }
}


// Function to sanitize user input
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <div class="resume-preview">
    <h1>Resume Preview</h1>
    <p><strong>Name:</strong>
      <?php echo $name; ?>
    </p>
    <p><strong>Email:</strong>
      <?php echo $email; ?>
    </p>
    <p><strong>Phone:</strong>
      <?php echo $phone; ?>
    </p>
    <h2>Summary</h2>
    <p>
      <?php echo $summary; ?>
    </p>
    <h2>Education</h2>
    <p>
      <?php echo $education; ?>
    </p>
    <h2>Experience</h2>
    <p>
      <?php echo $experience; ?>
    </p>
    <h2>Skills</h2>
    <p>
      <?php echo $skills; ?>
    </p>
    <h2>References</h2>
    <p>
      <?php echo $references; ?>
    </p>
  </div>

  <div class="topnav" id="myTopnav">
    <!-- Your top navigation links remain the same -->
  </div>
  <a href="/jobs.html">BACK</a>

  <div class="container">
    <h1>Resume Builder</h1>
    <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

      <input type="hidden" name="resume_id" value="<?php echo isset($resumeId) ? $resumeId : ''; ?>">

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

      <input type="submit" value="<?php echo isset($_POST['resume_id']) ? 'Save Changes' : 'Create Resume'; ?>" class="btn">

      <label for="resume_file">Resume File:</label>
      <input type="file" id="resume_file" name="resume_file" accept=".txt, .pdf">

      <button type="submit" value="<?php echo isset($_POST['resume_id']) ? 'Save Changes' : 'Create Resume'; ?>"
        class="btn">Submit</button>
      <button type="button" id="download_resume" class="btn" data-resume-file="<?php echo $upload_directory . "
        resume.txt"; ?>">Download Resume</button>

    </form>
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