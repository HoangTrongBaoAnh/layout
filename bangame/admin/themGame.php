<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("/xampp/htdocs/layout/lib/DataProvider.php");
include_once("/xampp/htdocs/layout/lib/quantri.php");
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
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./ckfinder/ckfinder.js"></script>
</head>
<style>
    tr,
    td,
    table {
        border: 1px solid;
    }

    table {
        border-collapse: collapse;
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
            <!-- <a href="listGame.html">Quản lý game</a>
            <a href="listTheLoai.html">Quản lý thể loại</a>
            <a href="listUser.html">Quản lý tài khoản</a>
            <a href="doanhthu.html">Quản lý doanh thu</a> -->

        </div>
        <div style="margin-top:100px">


            <form action="" method="POST" enctype="multipart/form-data">


                <table style="width:100%">
                    <tr>
                        <th colspan="2" class="text-center">THÊM GAME</th>
                    </tr>
                    <tr>
                        <td>TenGame</td>
                        <td><input type="text" name="TenGame"></td>
                    </tr>
                    <tr>
                        <td>TheLoai</td>
                        <td>
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                            <input type="checkbox" name="TheLoai" id="TheLoai">Hành Động
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>urlHinh</td>
                        <td><img src="" alt=""><input type="file" name="urlHinh" id="Hinh"></td>
                    </tr>
                    <tr>
                        <td>Gia</td>
                        <td><input type="number" name="Gia" id="Gia"></td>
                    </tr>
                    <tr>
                        <td>Nam</td>
                        <td><input type="date" name="Nam"></td>
                    </tr>
                    <tr>
                        <td>urlVideo</td>
                        <td><input type="url" name="urlVideo" id="video"></td>
                    </tr>
                    <tr>
                        <td>NhaPhatHanh</td>
                        <td><input type="text" name="NhaPhatHanh"></td>
                    </tr>
                    <tr>
                        <td>minimum</td>
                        <td><textarea name="minimum" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>maximum</td>
                        <td><textarea name="maximum" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>NoiDung</td>
                        <td><textarea name="NoiDung" id="NoiDung" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" name="btnThem" value="Thêm" style="width:200px"></input></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>