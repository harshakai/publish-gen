<?php
session_start();

// Check if the admin submitted the login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"]; // Get the username from the login form
    $password = $_POST["password"]; // Get the password from the login form

    // TODO: Validate the admin username and password against your admin database.
    // If the credentials are valid, set a session variable to indicate the admin is logged in.
    $isValidAdmin = true; // Replace this with your actual validation logic

    if ($isValidAdmin) {
        $_SESSION["admin_logged_in"] = true; // Set the session variable to indicate admin login status
        header("Location: admin/post_job.php"); // Redirect to the admin post_job.php page after successful login
        exit;
    } else {
        // Handle login failure (e.g., display an error message)
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Your admin login page HTML and CSS code goes here -->
</head>

<body>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-danger text-white mb-4" style="text-align:center">
            <div class="card-body">Admin Panel</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" style="text-align:center" href="./index.php">LoginHere</a>
            </div>
        </div>
    </div>

    </div>
    </form>
</body>

</html>