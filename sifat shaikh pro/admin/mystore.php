<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>

    <!-- bootstrap cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <!-- bootstrap cdn -->

     <!-- font-awesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- font-awesome cdn -->
</head>

<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}

?>



<body>
    <!-- header part start -->
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a href="" class="navbar-brand"><h4>SAVAR STORE</h4></a>
    <span>
    <i class="fa-solid fa-user"></i>
    <?php echo $_SESSION['admin']; ?>
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-dark" >Logout |</a>
    <a href="" class="text-decoration-none text-dark">Userpanel</a>
    </span>
  </div>
</nav>
 <!-- header part End-->

       <!-- content  start-->

                <div>
                  <h2 class="text-center">Deshboard</h2>
                </div>

                <div class="col-md-6 bg-dark text-white text-center m-auto">
                      <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 " target="blank">Add Post</a>
                      <a href="" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
                </div>


                <!-- content  End-->
</body>
</html>