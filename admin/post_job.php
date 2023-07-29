<!DOCTYPE html>
<html lang="en">
<head>
    <style>
/* Reset default margin and padding for all elements */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

/* Header styles */
header {
  background-color: #5E716A;
  color: #fff;
  padding: 10px;
  text-align: center;
}

/* Navigation styles */
nav {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
}

/* Job Posting Section styles */
.job-posting-section {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.job-posting-section h2 {
  margin-bottom: 15px;
  text-align: center;
}

.job-posting-section form {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

.job-posting-section label {
  font-weight: bold;
}

.job-posting-section input,
.job-posting-section textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.job-posting-section button {
  width: 100%;
  padding: 10px;
  background-color: #5E716A;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.job-posting-section button:hover {
  background-color: #4b5d58;
}

/* Footer styles */
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

/* Additional styles for the rest of the website can be added here */

/* For responsiveness, you may use media queries to adjust styles for different screen sizes */
/* Example media query for smaller screens */
@media screen and (max-width: 600px) {
  .job-posting-section {
    max-width: 100%;
    margin: 10px;
  }

  /* Add more responsive styles as needed */
}

        </style>
</head>
<body>
    <!-- Your existing code for the website's header, navigation, etc. -->

    <div class="job-posting-section">
        <h2>Post a Job</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="job_title">Job Title:</label>
            <input type="text" name="job_title" required>

            <label for="job_description">Job Description:</label>
            <textarea name="job_description" rows="4" required></textarea>

            <label for="job_location">Job Location:</label>
            <input type="text" name="job_location" required>

            <label for="contact_email">contact email</label>
            <input type="email" name="contact_email" required>

            <!-- Add more input fields as needed, such as salary, requirements, etc. -->

            <button type="submit">Submit Job</button>
        </form>
    </div>

    <?php
// process_post_job.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $job_title = $_POST["job_title"];
    $job_description = $_POST["job_description"];
    $job_location = $_POST["job_location"];
    $contact_email = $_POST["contact_email"];

    // Add more variables for other form fields as needed

    // Save the job posting data to the database
    include('database.php'); // Include the database connection file
    $sql = "INSERT INTO jobs (job_title, job_description, job_location, contact_email) VALUES ('$job_title', '$job_description', '$job_location','$contact_email')";
    mysqli_query($con, $sql);

    // Redirect the user to the "jobs.php" page after successful submission
    header("Location: jobs.php"); // Use "jobs.php" instead of "project-gen/vendor/jobs.php"
    exit;
}
?>


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

    <!-- Footer (your existing code) -->
    <footer>
        <!-- Your footer content here -->
    </footer>
</body>
</html>

    <!-- Your existing code for the rest of the website, footer, etc. -->
</body>
</html>

