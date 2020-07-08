<?php
session_start();
// nếu đăng nhập rồi thì ko đc vào trang đăng ký nữa

if (isset($_SESSION['iduser'])) {
    header("location:/layout/index.php");
}

?>

<head>
    <link rel="stylesheet" href="./layout-login/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
    <title>Quên Mật Khẩu</title>
    <style>
       .box h4{
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }
    </style>
    <?php
        include_once ('lib/DataProvider.php');
        include_once ('lib/quantri.php');
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        include 'library.php'; // include the library file
        require 'vendor/autoload.php';
        if(isset($_REQUEST['btnsignup'])){
            $email=$_REQUEST['email'];
            $qr=DataProvider::ExecuteQuery("SELECT * FROM user WHERE email='$email'");
            if(mysqli_num_rows($qr) == 1){
                $char="0123456789abcdefghijklmnopqrstuvwxyz";
                $mk=substr(str_shuffle($char), 0, 5);
                $qr1="UPDATE `user` SET `matkhau` = '$mk' WHERE `user`.`email` = '$email'";
                DataProvider::ExecuteQuery($qr1);
                $noidung="
                    Xin chào $Email
                    <br>
                    Chúc mừng anh/chị đã lấy lại tài khoản thành công vui lòng hãy thay đổi mật khẩu ngay khi đăng nhập vào
                    <br>
                    Username:
                    <br>
                    Password: {$mk}
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
                    $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
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
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Xác nhận thành công","vui lòng kiểm tra hòm thư để lấy lại tài khoản");';
                echo '}, 1000);</script>';
            }else{
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Xác nhận không thành công","vui lòng kiểm tra lại email ");';
                echo '}, 1000);</script>';
            }
        }
    ?>
</head>

<body>
    <?php
        include "./blocks/nav/nav.php";
    ?>
    <div>
        <!-- <img src="985672.jpg" width="100%" height="100%"> -->
        <form method="POST" action="#" class="box" style="margin-top:100px" id="sign_up">
            <h4>Nhập email mà bạn đã đăng ký</h4>
            <input type="text" name="email">
            <input name="btnsignup" type="submit" value="Gửi">
        </form>
    
    </div>

</body>