<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $jobID = $_POST["job_id"]; // You can store this in your database to identify the job
  $name = $_POST["name"];
  $email = $_POST["email"];
  
  // Process the uploaded resume
  $targetDir = "uploads/"; // Create a directory to store the uploaded resumes
  $resumeName = basename($_FILES["resume"]["name"]);
  $targetPath = $targetDir . $resumeName;
  $fileType = pathinfo($targetPath, PATHINFO_EXTENSION);

  // Allow only certain file formats (e.g., PDF, DOC, DOCX)
  $allowedFormats = array("pdf", "doc", "docx");
  if (in_array($fileType, $allowedFormats)) {
    move_uploaded_file($_FILES["resume"]["tmp_name"], $targetPath);
    
    // Save user and resume information to the database
    // ... (Write your code here to connect to the database and insert the data)
    
    // Redirect back to the job listing page or show a success message
    header("Location: jobs.php");
    exit;
  } else {
    // Invalid file format, show an error message
    $_SESSION["apply_error"] = "Invalid file format. Please upload a PDF, DOC, or DOCX file.";
    header("Location: job_details.php?job_id=" . $jobID);
    exit;
  }
}
?>
