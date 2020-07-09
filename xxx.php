
<?php
session_start();
// nếu đăng nhập rồi thì ko đc vào trang đăng nhập nữa
if (isset($_SESSION['iduser'])) {
    header("location:/layout/index.php");
}
include_once "./lib/DataProvider.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
    if(isset($_REQUEST['p'])){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Xác nhận thành công","vui lòng kiểm tra hòm thư của bạn");';
        echo '}, 1000);</script>';
    }
?>
<?php
if(isset($_POST["btnLogin"])){
    $un=$_POST["acc"];
    $pass=$_POST["pass"];
    $user=DataProvider::ExecuteQuery("SELECT * FROM user WHERE tendangnhap='$un' AND matkhau='$pass' AND xacnhan=1 ");
    if(mysqli_num_rows($user)==1){
        $row=mysqli_fetch_array($user);
        $_SESSION['iduser']=$row['iduser'];
        $_SESSION['tendangnhap']=$row['tendangnhap'];
        $_SESSION['matkhau']=$row['matkhau'];
        $_SESSION['idgroup']=$row['idgroup'];
        $_SESSION['hinh']=$row['hinh'];
        $_SESSION['ten']=$row['ten'];
        $_SESSION['xacnhan']=$row['xacnhan'];
        header("location:index.php");
    }
    
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./layout-login/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    
    <title>Đăng nhập</title>
    <style>
        

        .navbar li a:hover {
            border-bottom: 1px solid violet;
            color: black !important;
        }

        .navbar {
            background-color: blueviolet !important;
        }

        .btn {
            color: #fff;
        }

        .navbar li a {
            color: #fff !important;
        }

        .textcl {
            color: white !important;
        }

        .textcl:hover {
            color: white !important;
            text-decoration: none !important;
        }

        .tmp:hover {
            text-decoration: none !important;
        }
    </style>

</head>

<body>
    <div class="text-center mt-4"><img src="./image/iconXamLo.png" style="width:150px" ></div>
    <!-- <img width="100%" height="100%" src="985672.jpg"> -->
    <form class="box" method="POST" style="margin-top:50px">
        <h1>login</h1>
        <input type="text" name="acc" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" value="Login" name="btnLogin">
        <a href="sign up.php" class="tmp">
            <input type="button" value="Sign up">
        </a>
        <br>
        <a href="quenmatkhau.php" target="_blank">Forgot Password?</a>
    </form>
    
</body>

</html>