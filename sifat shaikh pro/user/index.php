<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
  <?php include 'header.php'; ?>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Your Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Carousel Banner -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://images.unsplash.com/photo-1556656793-08538906a9f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
          class="d-block w-100" alt="Mobile Phone" style="height: 400px; object-fit: cover;" class="d-block w-100"
          alt="...">
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
          class="d-block w-100" alt="Laptop" style="height: 400px; object-fit: cover;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
          class="d-block w-100" alt="Monitor" style="height: 400px; object-fit: cover;" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Products Section -->
  <div class="container my-5">
    <h3 class="text-dark text-center mb-4">Home Products</h3>
    <div class="row">
      <?php
      include 'Config.php';
      $Record = mysqli_query($con, "SELECT * FROM tblproduct");
      while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];
        if ($check_page === 'Home') {
          echo "
                    <div class='col-md-3 col-lg-3 mb-4 '>
                        <form action='Insertcart.php' method='POST'>
                            <div class='card' style='width: 16rem;'>
                                <img src='../admin/product/$row[Pimage]' class='card-img-top'>
                                <div class='card-body text-center'>
                                    <h5 class='card-title text-dark fs-6 fw-bold'>$row[PName]</h5>
                                    <p class='card-text text-dark fs-6 fw-bold'>BDT: $row[PPrice]</p>
                                    <input type='hidden' name='PName' value='$row[PName]'>
                                    <input type='hidden' name='PPrice' value='$row[PPrice]'>
                                    <input type='number' name='PQuantity' min='1' max='20' placeholder='Quantity' class='form-control my-2'>
                                    <input type='submit' name='addcart' class='btn btn-danger text-white w-100' value='Add to Cart'>
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

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Your Brand. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>