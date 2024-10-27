<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savar store</title>

    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- bootstrap cdn  -->

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Cart Header -->
    <div class="container mt-2 w-50  ">
        <div class="row">
            <div class="col-lg-12 text-center bg-dark  mb-5 pb-0 rounded">
                <h1 class="text-white">Cart</h1>
            </div>
        </div>
    </div>

    <!-- Cart Table -->
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <table class="table table-bordered text-center">
                    <thead class="bg-dark text-white fs-5">
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Initialize total
                        $ptotal = 0;
                        $_total = 0;
                        $i = 0;

                        // Check if session cart exists
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                // Cast productPrice and productQuantity to floats (or integers)
                                $productPrice = (float) $value['productPrice'];
                                $productQuantity = (int) $value['productQuantity'];

                                $ptotal = $productPrice * $productQuantity;
                                $_total += $ptotal;
                                $i = $key + 1;

                                echo "
        <form action='InsertCart.php' method='POST'>
            <tr>
                <td>$i</td>
                <td><input type='hidden' name='PName' value='{$value['productName']}'> {$value['productName']}</td>
                <td><input type='text' name='PPrice' value='{$value['productPrice']}'></td>
                <td><input type='text' name='PQuantity' value='{$value['productQuantity']}'></td>
                <td>" . number_format($ptotal, 2) . "</td>
                <td><button name='update' class='bg-success text-white rounded'>Update</button></td>
                <td><button name='remove' class='bg-danger text-white rounded'>Delete</button></td>
                <td><input type='hidden' name='item' value='{$value['productName']}'></td>
            </tr>
        </form>
        ";
                            }
                        }
                        ?>


                        
                       
                 </div>
                 
         </div>
         <!-- Total Section -->
         <div class="row justify-content-center">
                            <div class="col-lg-3 text-center">
                                <h1>TOTAL</h1>
                                <h1 class="bg-dark text-white"><?php echo number_format($_total, 2); ?></h1>
                     </div>


</body>

</html>