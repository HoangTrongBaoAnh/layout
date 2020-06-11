<?php
session_start();
// nếu đăng nhập rồi thì ko đc vào trang đăng ký nữa

if (isset($_SESSION['iduser'])) {
    header("location:/layout/index.php");
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
<?php
include_once ('lib/DataProvider.php');
include_once ('lib/quantri.php');
if(isset($_POST['btnsignup'])){
    $data = getListUser();
    $row = mysqli_fetch_array($data);
    $tenhienco = $row['tendangnhap'];
    if($tenhienco != $_POST['acc1']){
        $TenDN = $_POST['acc1'];
        $Pass = $_POST['pass1'];
        $Email = $_POST['dc1'];
        $sdt = $_POST['sdt1'];
        settype($sdt, "int");
        $idgroup = 0;
        settype($idgroup, "int");
        $ten = $_POST['acc1'];
        $hinh = 'frog.jpg';
        $qr = "INSERT INTO user(tendangnhap,matkhau,email,ten,sdt,idgroup,hinh) VALUES('$TenDN','$Pass','$Email','$ten','$sdt','$idgroup','$hinh');
        ";
        DataProvider::ExecuteQuery($qr); 
        header("location:xxx.php");
    }else{
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Username đã được sử dụng !","Vui lòng sử dụng tên khác để đặt !","error");';
        echo '}, 1000);</script>';
      
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="./layout-login/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $("#sign_up").validate({
                rules: {
                    acc1: {required: true},
                    pass1: {required:true},
                    dc1: {email:true, required:true},
                    pass2: {equalTo: "[name='pass1']"},
                    sdt1: {number:true}
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
            <input type="checkbox" checked name="dieukhoan">
            <div>
                Bạn đồng ý với <a href="dieukhoan.php">điều khoản</a> của chúng tôi
            </div>
            <input name="btnsignup" type="submit" value="Sign Up">
        </form>
    
    </div>
   
</body>
</html>