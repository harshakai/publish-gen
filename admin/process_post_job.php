<?php
// process_post_job.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $job_title = $_POST["job_title"];
    $job_description = $_POST["job_description"];
    $job_location = $_POST["job_location"];

    // Add more variables for other form fields as needed

    // Save the job posting data to the database
    // (code to connect to the database and execute the query to save the job data)
    // Example: Assuming you have a database connection already defined in a separate file
    // include('database.php');
    // $sql = "INSERT INTO jobs (job_title, job_description, job_location) VALUES ('$job_title', '$job_description', '$job_location')";
    // mysqli_query($con, $sql);

    // Redirect the user to the "jobs.php" page after successful submission
    header("Location: jobs.php");
    exit;
}
?>
