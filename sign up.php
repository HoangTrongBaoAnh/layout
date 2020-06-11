<?php
session_start();
// nếu đăng nhập rồi thì ko đc vào trang đăng ký nữa

if (isset($_SESSION['iduser'])) {
    header("location:/layout/index.php");
}
?>
<html>
<head>
    <link rel="stylesheet" href="./layout-login/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script>
        $(function(){
            $("#sign_up").validate({
                rules: {
                    acc1: {required: true},
                    pass1: {required:true},
                    dc1: {email:true, required:true},
                    pass2: {equalTo: "[name='pass1']"},
                    sdt1: {number:true, range:[10,13]}
                },
                messages:{
                    acc1: {required: "Bạn chưa nhập"},
                    pass1: {required: "Ban chưa nhập"},

                }
            });

           
        });
    </script>
    <style>
        label.error{
            color: green;
        }
        .box div{
            display: inline;
            color: white;
        }
        .box{
            width: 400px !important;
        }
    </style>
</head>
<body>
    <?php
    include "./blocks/nav/nav.php";
    ?>
    <div>
        <!-- <img src="985672.jpg" width="100%" height="100%"> -->
        <form method="POST" action="#" class="box" style="margin-top:100px" id="sign_up">
            <h1>Sign Up</h1>
            <input placeholder="Tên Đăng Nhập" type="text" name="acc1">
            <input placeholder="Mật Khẩu" type="password" name="pass1">
            <input placeholder="Xác Nhận Mật Khẩu" type="password" name="pass2">
            <input placeholder="Địa Chỉ email" type="text" name="dc1">
            <input placeholder="Số Điện Thoại" type="tell" name="sdt1">
            <input placeholder="Số Điện Thoại" type="checkbox" checked name="sdt1">
            <div>
                Bạn đồng ý với <a href="dieukhoan.php">điều khoản</a> của chúng tôi
            </div>
            <input type="submit" value="Sign Up">
        </form>
    
    </div>
   
</body>
</html>