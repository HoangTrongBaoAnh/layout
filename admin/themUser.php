<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("./../lib/DataProvider.php");
include_once("./../lib/quantri.php");
?>

<?php
if (isset($_POST['btnThem'])) {
    $TenDN = $_POST['Username'];
    $Pass = $_POST['Password'];
    $Email = $_POST['Email'];
    $sdt = $_POST['sdt'];
    settype($sdt, "int");
    $idgroup = $_POST['PhanQuyen'];
    settype($idgroup, "int");
    $ten = $_POST['ten'];
    $hinh = 'frog.jpg';
    $qr = "INSERT INTO user(tendangnhap,matkhau,email,ten,sdt,idgroup,hinh) VALUES('$TenDN','$Pass','$Email','$ten','$sdt','$idgroup','$hinh');
    ";
    // echo $qr;
    // echo $TenDN;
    DataProvider::ExecuteQuery($qr);
    header("location:listUser.php");
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
<style>
   

   .width_input{
        width: 100%;
   }
</style>
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
        <div style="margin-top:100px" class="text-center">
            <form action="" method="POST">
                <table style="width:60%;margin:0 auto" class="table table-bordered">
                    <tr>
                        <th colspan="2">THÊM TÀI KHOẢN</th>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="Username" class="width_input" placeholder="nhập tên tài khoản"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="Password" id="Password" class="width_input" placeholder="nhập mật khẩu"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="Email" id="Email" class="width_input" placeholder="nhập địa chỉ email"></td>
                    </tr>
                    <tr>
                        <td>SĐT</td>
                        <td><input type="tel" name="sdt" id="sdt" class="width_input" placeholder="nhập số điện thoại"></td>
                    </tr>
                    <tr>
                        <td>
                            Tên
                        </td>
                        <td>
                            <input type="text" name="ten" id="ten" class="width_input" placeholder="nhập tên người dùng">
                        </td>
                    </tr>
                    <tr>
                        <td>Phân quyền</td>
                        <td>
                            <label><input type="radio" name="PhanQuyen" id="PhanQuyen_0" value="0" checked>user</label>
                            <br>
                            <label><input type="radio" name="PhanQuyen" id="PhanQuyen_1" value="1">admin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="btnThem" class="btn btn-primary" value="Thêm" id="btnThem"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
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