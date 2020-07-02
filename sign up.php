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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'library.php'; // include the library file
require 'vendor/autoload.php';

if(isset($_POST['btnsignup'])){
    $data = getListUser();
    $tenhienco = $_POST['acc1'];
    $qr = DataProvider::ExecuteQuery("SELECT * FROM user WHERE tendangnhap='$tenhienco'");
    if(mysqli_num_rows($qr) == 0){
        $TenDN = $_POST['acc1'];
        $Pass = $_POST['pass1'];
        $Email = $_POST['email'];
        $sdt = $_POST['sdt1'];
        settype($sdt, "int");
        $idgroup = 0;
        settype($idgroup, "int");
        $ten = $_POST['acc1'];
        $hinh = 'frog.jpg';
        $xacnhan = 0;
        $maxacnhan=rand(1,5000);
        $qr = "INSERT INTO user(tendangnhap,matkhau,email,ten,sdt,idgroup,hinh,xacnhan,maxacnhan) VALUES('$TenDN','$Pass','$Email','$ten','$sdt','$idgroup','$hinh','$xacnhan','$maxacnhan');
        ";
        DataProvider::ExecuteQuery($qr);
        /*echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("một mail đã được gửi đến gmail của bạn vui lòng kiểm tra hòm thư để xác nhận","error");';
        echo '}, 1000);</script>';*/
        $noidung="
            <a href='http://localhost/layout/xacnhan1.php?code={$maxacnhan}'>bấm vào đây để xác nhận </a>
        ";
        $title="email xac nhan";
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->CharSet = "UTF-8";
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = SMTP_UNAME;                 // SMTP username
            $mail->Password = SMTP_PWORD;                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = SMTP_PORT;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom(SMTP_UNAME, "Tên người gửi");
            $mail->addAddress($Email, 'Tên người nhận');     // Add a recipient | name is option
            $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $title;
            $mail->Body = $noidung;
            $mail->AltBody = $noidung; //None HTML
            $result = $mail->send();
            if (!$result) {
                $error = "Có lỗi xảy ra trong quá trình gửi mail";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
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
    <title>Đăng ký</title>
    <script>
        $(function(){
            $("#sign_up").validate({
                rules: {
                    acc1: {required: true},
                    pass1: {required:true},
                    dc1: {email:true, required:true},
                    pass2: {equalTo: "[name='pass1']"},
                    sdt1: {number:true},
                    dieukhoan: {required: true}
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
            <input placeholder="Địa Chỉ email" type="text" name="email">
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