
<?php
$Name = $_POST['name'];
$Password = $_POST['password'];

$Con = mysqli_connect('localhost','root','','sifat shaikh pro');

$result = mysqli_query($Con,"SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password' ");

session_start();

if(mysqli_num_rows($result)){


    $_SESSION['user'] = $Name;
    
    echo "
        <script>
        alert('successfully Login');
        window.location.href='../index.php';
        </script>
        ";
}
else{
    echo "
        <script>
        alert('incorrect email/username/password');
        window.location.href='login.php';
        </script>
        ";
}

?>