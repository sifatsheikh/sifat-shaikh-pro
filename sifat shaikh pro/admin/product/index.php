<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product-page</title>

  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- bootstrap cdn -->
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border mt-4 ">





        <form action="insert.php" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-danger">Product Details</p>
          </div>

          <div class="mb-3">
            <label class="form-label">Product Name </label>
            <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
          </div>
          <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
          </div>
          <div class="mb-3">
            <label class="form-label">Add Product Image </label>
            <input type="file" name="Pimage" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Select Page Category</label>
            <select class="form-select" name="Pages">
              <option value="Home">Home</option>
              <option value="Loptop">Laptop</option>
              <option value="Monitor">Monitor</option>
              <option value="Mobile">Mobile</option>

            </select>
          </div>
          <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Uplode</button>
        </form>
      </div>
    </div>
  </div>


  <!-- fetch data -->

  <div class="container">
    <div class="row">
      <div class="col-md-10 m-auto">

        <table class="table table-hover border border my-5">

          <thead class="bg-dark text-white fs-5 font-monospace text-center">
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Update</th>
          </thead>


          <tbody class="text-center">

            <?php
            include 'Config.php';
            $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
            while ($row = mysqli_fetch_array($Record))
              echo "
       <tr>
  <td>$row[Id]</td>
  <td>$row[PName]</td>
  <td>$row[PPrice]</td>
  <td><img src='$row[Pimage]'  height='90px' width = '100px'</td>
  <td>$row[PCategory]</td>
  <td><a href=''class='btn btn-danger'>Delete</a></td>
  <td><a href= 'update.php? ID= $row[Id]' class= 'btn btn-success'>Update</a></td>
  
 </tr> 
       ";

            ?>
          </tbody>

        </table>

      </div>
    </div>
  </div>
</body>

</html>