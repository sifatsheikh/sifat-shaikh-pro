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
      <!-- laptop part -->

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">




        <h3 class="text-dark my-4 ">
          Laptop
        </h3>



        <?php
        include 'Config.php';
        $Record = mysqli_query($con, "select * from tblproduct");
        while ($row = mysqli_fetch_array($Record)) {
          $check_page = $row['PCategory'];
          if ($check_page === 'Loptop') {
            echo "

            <div class='col-md-6 col-lg-3 m-auto mb-4'>
            <form action='Insertcart.php' method = 'POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top'>
  <div class='card-body text-center'>
    <h5 class='card-title text-dark fs-6 fw-bold'>$row[PName]</h5>
    <p class='card-text  text-dark fs-6 fw-bold'>BDT: $row[PPrice]</p>
    <input type = 'hidden' name ='PName' value = '$row[PName]' >
      <input type = 'hidden' name ='PPrice' value = '$row[PPrice]' >           
      <input type='number' name='PQuantity' valu = min= '1' max= '20' placeholder= 'Quantity'> <br><br>
      <input type='submit' name ='addcart' class = ' btn btn-danger text-white w-100' value= 'Add to Cart'>

       


  </div>
</div>
</form>
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