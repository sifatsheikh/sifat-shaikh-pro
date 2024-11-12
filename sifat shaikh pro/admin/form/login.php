<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #FF7F50, #FF6347);
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container p {
            color: #FF6347;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 30px;
            border: 1px solid #FF6347;
        }
        .form-control:focus {
            border-color: #FF6347;
            box-shadow: 0 0 5px rgba(255, 99, 71, 0.5);
        }
        .btn-login {
            background-color: #FF6347;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            width: 100%;
            padding: 10px;
        }
        .btn-login:hover {
            background-color: #FF4500;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #FF6347;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <p>Login</p>
        <form action="login1.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Name" required>
            </div>
            <div class="mb-3">
                <label for="userpassword" class="form-label">Password</label>
                <input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="Enter Your Password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</div>

</body>
</html>
