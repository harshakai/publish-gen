<?php
    
    session_start();

    include_once('./config.php');

    // Code for login 
    if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {
        $email = $_POST['email'];
        $password = ($_POST['password']);

        $sql = mysqli_query($db,"SELECT * FROM `admins` WHERE email='$email' and password='$password'");

        $row = mysqli_fetch_assoc($sql);

        $count = mysqli_num_rows($sql);

        // echo $count;
        if($count>0)
        {
            // $_SESSION['id'] = $num['id'];
            // $_SESSION['name'] = $num['username'];
            // $_SESSION['user_role'] = $num['user_role'];

            // echo $_SESSION['id'];
            // echo $_SESSION['name'];
            // echo $_SESSION['user_role'];

            // echo "<script>alert('Success');</script>";
            header("Location: ./admin/dashboard.php");
            exit();
        }
        else
        {
            // echo "<script>alert('Invalid username or password');</script>";

            header("Location: ./adminlogin.php");
            exit();
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>GENESIS IT SOLUTIONS | Admin Login</title>

    <!-- Custom CSS Links -->
    <link rel="stylesheet" href="./css/adminlogin.css">

    <!-- Font Aweesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="card-header">
                                    <h2 style="text-align:center">Registration and Login System</h2>
                                    <hr />
                                    <h3 class="text-center font-weight-light my-4">Admin Login</h3>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="#">

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="text"
                                                placeholder="Username" required />
                                            <label for="inputEmail">Email</label>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password"
                                                placeholder="Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="../password-recovery.php">Forgot Password?</a>
                                            <button class="btn btn-primary" name="login" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./index.html">Back to Home Page</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <?php include('../includes/footer.php');?> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>