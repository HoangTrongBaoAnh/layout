<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./layout-login/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
    <style>
        .btn-primary{
            background-color: blueviolet;
            border: 1px solid white;
        }
        .btn-primary:hover{
            background-color: purple;
            border: 1px solid white;
        }
        .navbar li a:hover{
            border-bottom: 1px solid violet;
            color: black !important;
        }
        .navbar{
            background-color: blueviolet !important;
        }
        .btn{
            color: #fff;
        }
        .navbar li a{
            color: #fff !important;
        }
        .textcl{
            color: white !important;
        }
        .textcl:hover{
            color: white !important;
            text-decoration: none !important;
        }
        .tmp:hover{
            text-decoration: none !important;
        }
    </style>
   
</head>
<body>
    <?php
        include "./blocks/nav/nav.php";
    ?>
    <img width="100%" height="100%" src="985672.jpg">
    <form class="box" action="#" method="POST">
        <h1>login</h1>
        <input type="text" name="acc" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" value="Login">
        <a href="sign up.php" class="tmp">
            <input type="button" value="Sign up">
        </a>
        <br>
        <a href="#" target="_blank">Forgot Password?</a>
    </form>

</body>
</html>