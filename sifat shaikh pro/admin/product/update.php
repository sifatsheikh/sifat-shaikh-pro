<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>savar store</title>

    <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- bootstrap cdn -->

</head>
<body>
    



<?php 
 $Id = $_GET ['ID'];

 include 'Config.php';
 $Record = mysqli_query($con,"SELECT * FROM `tblproduct` WHERE ID = $Id ");
 $data = mysqli_fetch_array($Record);
 ?> 


<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto border mt-4">
      <form action="update.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
          <p class="form-title">Product Update</p>
        </div>

        <div class="mb-3">
          <label class="form-label">Product Name</label>
          <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
        </div>

        <div class="mb-3">
          <label class="form-label">Product Price</label>
          <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
        </div>

        <div class="mb-3">
          <label class="form-label">Add Product Image</label>
          <input type="file" name="Pimage" class="form-control"><br>
          <img src="<?php echo $data['Pimage']?>" alt="" style="height:200px;">
        </div>

        <div class="mb-3">
          <label class="form-label">Select Page Category</label>
          <select class="form-select" name="Pages">
            <option value="Home">Home</option>
            <option value="Laptop">Laptop</option>
            <option value="Monitor">Monitor</option>
            <option value="Mobile">Mobile</option>
          </select>
        </div>
            <input type="hidden" name="id" value="<?php echo $data['Id']?>">
        <button name="submit" class="submit-btn">Update</button>
      </form>
    </div>
  </div>
</div>


        <!-- php update code -->

        <?php 
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
            $img_des ="Uploadimage/" .$image_name;
        move_uploaded_file($image_loc,"Uploadimage/" .$image_name);

        $product_category = $_POST['Pages'];

        include 'config.php';
        mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`Pimage`='$img_des',`PCategory`='$product_category' WHERE Id = $id ");
        header("location:index.php");
        }
        ?>












</body>
</html>