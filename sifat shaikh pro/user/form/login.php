<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savar Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(240, 240, 240); /* Light grey background */
            font-family: 'Arial', sans-serif; /* Changed font family */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            /* background-color: rgb(250, 250, 250); White background for the form */
            /* border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); */
        }

        .text-danger {
            color: rgb(255, 50, 50) !important; /* Custom red for text */
        }

        .form-control {
            border: 2px solid rgb(50, 150, 250); /* Light blue border for inputs */
        }

        button {
            background-color: rgb(60, 180, 75); /* Green background for buttons */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: rgb(50, 160, 65); /* Darker green on hover */
        }

        .btn-danger {
            background-color: rgb(255, 69, 0); /* Orange for the Register button */
        }

        .btn-danger:hover {
            background-color: rgb(220, 60, 0); /* Darker orange on hover */
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 m-auto mt-6 p-4 bg-white shadow rounded  border-info">
                <p class="text-danger text-center fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="name" placeholder="Enter username or email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter user password" class="form-control">
                    </div>

                    <div class="mb-3 text-center">
                        <button class="w-100">Login</button>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="button" class="w-100 btn-danger">
                            <a href="register.php" class="text-white">REGISTER</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
