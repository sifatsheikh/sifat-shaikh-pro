<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <?php 
    include 'header.php';
    ?>
</head>
<body>

      <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">
          
       

    
        <h3 class="text-dark my-4 ">
            Mobile
        </h3>



        <?php 
        include 'Config.php';
        $Record = mysqli_query($con, "select * from tblproduct");
        while ( $row=mysqli_fetch_array($Record)){
              $check_page = $row['PCategory'];
              if($check_page ==='Mobile'){
        echo "

            <div class='col-md-6 col-lg-3 m-auto mb-4'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top'>
  <div class='card-body text-center'>
    <h5 class='card-title text-dark fs-6 fw-bold'>$row[PName]</h5>
    <p class='card-text  text-dark fs-6 fw-bold'>BDT: $row[PPrice]</p>

    <input type='number' valu = min= '1' max= '20' placeholder= 'Quantity'> <br><br>
    <input type='submit' class = ' btn btn-danger text-white w-100' value= 'Add to Cart'>

  </div>
</div>
</div>
";
}
}
        
  ?>

</div>
      </div>
      </div>

</body>
</html>