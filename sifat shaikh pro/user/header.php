<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savar store</title>

    <!-- bootstrap cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <!-- bootstrap cdn -->

     <!-- font-awesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- font-awesome cdn -->
</head>
<body>

 
<?php 
session_start();

$Count = 0;

if(isset($_SESSION['cart'])){
  $Count = count($_SESSION['cart']);
}
?>
        
    
<nav class="navbar bg-dark text-">
  <div class="container-fluid  font-monospace">
    <a href="index.php" class="navbar-brand text-warning pb-2 fs-10 fw-bold">SAVAR STORE</a>
    <div class="d-flex">
    <a href="index.php" class="text-light text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home</a>

    <a href="viewCart.php" class="text-light text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping "></i>Cart(<?php echo $Count ; ?>)</a>

    <span class="text-white">
    <i class="fa-duotone fa-solid fa-user text-light pe-2"></i>Hello,
    <?php 
  
    if(isset($_SESSION['user'])){

    echo $_SESSION['user'];
      echo "
    <a href= 'form/logout.php' class='text-light text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a>
    ";

  }

  else{
    echo "
    <a href='form/login.php' class='text-light text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i> Login</a>
    ";
  }

    ?>



    
    <!-- <i class="fa-duotone fa-solid fa-user text-light pe-2"></i> -->
    <a href="../admin/mystore.php" class="text-light text-decoration-none pe-2">Admin</a>
    </span>
  
</nav>
</div>

<div class="bg-success sticky-top pb-2  ">
  <ul class="list-unstyled d-flex m-auto">
    <li><a href="Laptop.php" class="text-decoration-none  text-white fs-6 px-3 fw-bold"> <i class="fa-solid fa-laptop"></i>LAPTOP</a></li>
    <li><a href="Mobile.php" class="text-decoration-none text-white fs-6 px-3 fw-bold"> <i class="fa-solid fa-mobile-screen-button"></i>MOBILE</a></li>
    <li><a href="Monitor.php" class="text-decoration-none text-white fs-6 px-3 fw-bold"> <i class="fa-solid fa-tv"></i>MONITOR</a></li>
  </ul>
</div>




</body>
</html>