<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <!-- bootstrap cdn -->
</head>
<body >
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow bg-whitw p-3 font-monospace m-auto border mt-4">

         
    <form action="login1.php" method="POST">

    <div class="mb-3">
      <p class="text-center fw-bold fs-3 text-danger" >Login</p>
    </div>

    <div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" name="username" class="form-control"  placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" name="userpassword" class="form-control"  placeholder="Enter Your password ">
    </div>
              <button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
    </form>
         </div>
        </div>
      </div>
</body>
</html>