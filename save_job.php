<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jobTitle = $_POST["jobTitle"];
    $jobDescription = $_POST["jobDescription"];
    $contactEmail = $_POST["contactEmail"];

    // Simulate storing the job postings in a PHP array.
    $jobPostings = isset($_SESSION["jobPostings"]) ? $_SESSION["jobPostings"] : array();
    $newJobPosting = array(
        "jobTitle" => $jobTitle,
        "jobDescription" => $jobDescription,
        "contactEmail" => $contactEmail
    );
    $jobPostings[] = $newJobPosting;
    $_SESSION["jobPostings"] = $jobPostings;

    // Redirect to jobs.php after successful submission.
    header("Location: jobs.php");
    exit(); // Important: Make sure to exit the script after the redirect.
} else {
    echo "Invalid request.";
}
?>
