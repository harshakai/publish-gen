<?php 
    session_start();

    include_once('../../config.php');

    // if (($_SESSION['user_role']!='admin')) {
    //   header('location:logout.php');
    // } 
    // else{
    //     // for deleting user
    //     if(isset($_GET['id']))
    //     {
    //         $adminid=$_GET['id'];
    //         $msg=mysqli_query($con,"DELETE from users WHERE id='$adminid'");
    //         if($msg)
    //         {
    //         echo "<script>alert('Data deleted');</script>";
    //         }
    //     }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  <title>Manage Admins</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../css/admin.css">

  <style>
    a{
      text-decoration: none;
      color: #000;
    }
  </style>

</head>

<body class="sb-nav-fixed">
  <?php  include_once('../includes/navbar1.php');?>
  <div id="layoutSidenav">
    <?php include_once('../includes/sidebar1.html');?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Manage Admins</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Admins</li>
          </ol>

          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Admins Details /
              <a href="./create.php">Add New Admin</a>
            </div>
            <div class="card-body">
              <table class="table  table-striped">
                <thead>
                  <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                    $admins = mysqli_query($db,"SELECT * FROM `admins`");

                    if(!$admins){
                        die("Invalid Query !!!".mysqli_error($db));
                    }
                    else{   
                        $count = 1;
                        while($row = mysqli_fetch_assoc($admins)){
                            echo "
                                <tr>
                                    <th scope='row'>$count</th>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>Edit  <a href='./edit.php?id=$row[id]' class='edit'><i class='fas fa-edit'></i></a></td>
                                    <td>Delete  <a href='./delete.php?id=$row[id]' class='delete' onclick='return checkdelete()'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
                                </tr>     
                            ";
                            $count+=1;
                        }
                    }

                  ?> 

                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>@mdo</td>
                    <td>9497846846</td>
                    <td>Edit  <a href=""><i class="fas fa-edit"></i></a></td>
                    <td>Delete  <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>@fat</td>
                    <td>94964643464</td>
                    <td>Edit  <i class="fas fa-edit"></i></td>
                    <td>Delete  <i class="fa fa-trash" aria-hidden="true"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Sai</td>
                    <td>@twitter</td>
                    <td>97687864864</td>
                    <td>Edit  <i class="fas fa-edit"></i></td>
                    <td>Delete  <i class="fa fa-trash" aria-hidden="true"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
      <?php // include('../includes/footer.php');?>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../js/datatables-simple-demo.js"></script>  -->

  <!-- Custom Script -->
  <script src="../../js/scripts.js"></script>

  <script>
     function checkdelete(){
         return confirm('Are you sure you want to go back to home ?');
     }
  </script>


</body>

</html>
<?php //} ?>