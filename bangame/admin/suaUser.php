<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("/xampp/htdocs/layout/lib/DataProvider.php");
include_once("/xampp/htdocs/layout/lib/quantri.php");
?>

<?php
$id = $_GET['id'];
settype($id, "int");
$data = getThongTinByID($id);
$data_row = mysqli_fetch_array($data);
?>

<?php
if (isset($_POST['btnSua'])) {

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $email = $_POST['Email'];
    $ten = $_POST['ten'];
    $sdt = $_POST['sdt'];
    $PhanQuyen = $_POST['PhanQuyen'];
    $Hinh = $_FILES['Hinh']['name'];
    settype($PhanQuyen, "int");

    // Nếu hình ko đổi thì sẽ lấy giá trị hình củ thông qua $data_row
    if (!isset($_FILES['Hinh'])) {
        $Hinh = $data_row['hinh'];
        $qr = "
         UPDATE user SET
         tendangnhap='$Username',
         matkhau='$Password',
         email='$email',
         ten='$ten',
         sdt='$sdt',
         idgroup='$PhanQuyen',
         hinh='$Hinh'
         WHERE iduser='$id';
         ";
        DataProvider::ExecuteQuery($qr);
        header("location:listUser.php");
    }
    if (isset($_FILES['Hinh'])) {
        if ($_FILES['Hinh']['error'] == 0) {
            if (move_uploaded_file($_FILES['Hinh']['tmp_name'], "image/" . $_FILES['Hinh']["name"])) {
                $qr = "
         UPDATE user SET
         tendangnhap='$Username',
         matkhau='$Password',
         email='$email',
         ten='$ten',
         sdt='$sdt',
         idgroup='$PhanQuyen',
         hinh='$Hinh'
         WHERE iduser='$id';

         ";
                DataProvider::ExecuteQuery($qr);
                header("location:listUser.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>admin page</title>
    <link rel="stylesheet" href="layout.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div id="hangtieude">TRANG QUẢN TRỊ
            <div style="width:400px;float:right">

                <?php echo "Chào anh " . $_SESSION['tendangnhap'] ?>

            </div>
        </div>
        <div id="hang2">
            <?php include "menu.php" ?>

        </div>
        <div style="margin-top:100px">
            <form action="" method="POST" enctype="multipart/form-data" id="formUpAvt" runat="server">
                <table style="width:100%">
                    <tr>
                        <th colspan="2">SỬA TÀI KHOẢN</th>
                    </tr>

                    <tr>
                        <td>Tên tài khoản</td>
                        <td><input type="text" name="Username" value="<?php echo $data_row['tendangnhap'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="password" name="Password" id="Password" value="<?php echo $data_row['matkhau'] ?>"></td>
                    </tr>
                    <!-- <tr>
                        <td>Nhập lại mật khẩu</td>
                        <td><input type="password" name="RePassword" id="RePassword" value=""></td>
                    </tr> -->
                    <tr>
                        <td>Họ và tên</td>
                        <td><input type="text" value="<?php echo $data_row['ten'] ?>" id="name" name="ten"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="Email" id="Email" value="<?php echo $data_row['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td>SĐT</td>
                        <td><input type="tel" name="sdt" id="sdt" value="<?php echo $data_row['sdt'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Hình</td>
                        <td>
                            <p>ảnh hiện tại</p>
                            <!-- nếu hình = null thì hình mặc định hiển thị là frog.jpg -->
                            <img src="/layout/image/<?php if ($data_row['hinh'] == '') {
                                                        $data_row['hinh'] = "frog.jpg";
                                                    }
                                                    // ko thì hiện thị hình đại diện luôn
                                                    echo $data_row['hinh'] ?>" alt="" id="img_avt" width="200"><br>

                            <!-- accept: chỉ chấp nhận loại file được quy định -->
                            <br><input type="file" name="Hinh" accept="image/*" id="imgInp">

                        </td>
                    </tr>
                    <tr>
                        <td>Phân quyền</td>
                        <td>
                            <label><input type="radio" name="PhanQuyen" id="PhanQuyen0" value="0" <?php if ($data_row['idgroup'] == 0) echo 'checked' ?>>user</label>
                            <br>
                            <label><input type="radio" name="PhanQuyen" id="PhanQuyen1" value="1" <?php if ($data_row['idgroup'] == 1) echo 'checked' ?>>admin</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="btnSua" value="Xác nhận"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    <script>
        // preview file(xem file trước khi upload)
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img_avt').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>

</body>

</html>