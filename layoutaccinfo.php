
<?php
session_start();
// nếu chưa đăng nhập thì ko dc vào trang này
// nếu đăng nhập rồi thì ko đc vào trang đăng nhập nữa
if (!isset($_SESSION['iduser'])) {
    header("location: index.php");
}
include_once("./lib/DataProvider.php");
include_once("./lib/quantri.php");
?>
<?php
$data=getThongTinByID($_SESSION['iduser']);
$data_row=mysqli_fetch_array($data);
if(isset($_POST['doimatkhau'])){
    $mkcu=$_POST['mkcu'];
    trim($mkcu);
    $mkmoi=$_POST['mkmoi'];
    trim($mkmoi);
    $mkmoi2=$_POST['mkmoi2'];
    trim($mkmoi2);
    if($mkcu!=null && $mkmoi!=null && $mkmoi2!=null && $mkmoi==$mkmoi2 && $mkcu==$data_row['matkhau']){
    $iduser = $data_row['iduser'];
        $qr = "UPDATE user
        SET matkhau = '$mkmoi'
        WHERE iduser='$iduser'";
        DataProvider::ExecuteQuery($qr); 
        header("location:layoutaccinfo.php");
    }
}


if(isset($_POST['doiemail'])){
    $emailcu=$_POST['emailcu'];
    trim($emailcu);
    $emailmoi=$_POST['emailmoi'];
    trim($emailmoi);
    $emailmoi2=$_POST['emailmoi2'];
    trim($emailmoi2);
    $iduser = $data_row['iduser'];
    if($emailmoi!=null && $emailcu!=null && $emailmoi2=$emailmoi && $emailcu==$data_row['email']){
        $qr = "UPDATE user
        SET email = '$emailmoi'
        WHERE iduser='$iduser'";
        DataProvider::ExecuteQuery($qr); 
        header("location:layoutaccinfo.php");
    }
}

?>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./layout-infoacc/styleinfoacc.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>    
    <stlye>

    </stlye>

    <script>

        $(function () {
            $(".tab a").click(function () {
                var elm = $(this);
                if (!elm.parent("li").hasClass("active")) {
                    elm.parent("li")
                        .siblings()
                        .removeClass("active");
                    elm.parent("li").addClass("active");
                    elm.parents(".tab")
                        .next()
                        .children(".tabcontent1 div")
                        .hide();
                    $(this.hash).fadeIn();
                }
                return false;
            });
        });
    </script>

</head>

<body style="background-color: #f1f2f6;">
    <?php
    include "./blocks/nav/nav.php";
    ?>
    <div class="col-12"
        style="background-image: linear-gradient(to right,#a29bfe, #9b59b6);; text-align: center; height: 140px; padding: 10px; color: white;">
        <h1>Hồ sơ của tôi</h1>
        <p style="font-size: 20px;">Bạn có thể thay đổi thông tin cá nhân tại đây</p>
    </div>
    <div class="container" style="margin-top: 100px;margin-bottom:200px">
        <div class="row">
            <div class="col-4 left1">
                <div style="background-color: #444343; color:white; text-align: center;">
                    <br>
                    <img src="./image/<?php echo $data_row['hinh']?>" style="width: 160px; height: 160px;" class="rounded-circle">
                    <br>
                    <br>
                    <div>
                        <?php
                            echo $data_row['ten'];
                        ?>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-8 tab-area">
                <ul class="tab clearfix1">
                    <li class="active"><a href="#tab1" class="active">Thông Tin Tài khoản</a></li>
                    <li><a href="#tab2">Sửa Thông tin</a></li>
                    <li><a href="#tab3">Lịch sử giao dịch</a></li>
                </ul>
                <div class="tabcontent1">
                    <div id="tab1">

                        <p style="background-color: white; padding : 5px;"><b>Tên đăng nhập:</b> <?php echo $data_row['tendangnhap'] ?>
                        </p>
                        <p style="background-color: white; padding : 5px;"><b>Email:</b><?php echo  $data_row['email'] ?></p>
                        <p style="background-color: white; padding : 5px;"><b>Tên:</b> <?php echo  $data_row['ten'] ?></p>
                        <p style="background-color: white; padding : 5px;"><b>Sdt:</b><?php echo  $data_row['sdt'] ?></p>
                    </div>
                    <div id="tab2">
                        <form id="thay_mk" action="" method="POST">
                            <input type="password" name="mkcu" placeholder="Mật Khẩu Hiện Tại">
                            <input type="password" name="mkmoi" placeholder="Mật Khẩu Mới">
                            <input type="password" name="mkmoi2" placeholder="Nhập Lại Mật Khẩu Mới">
                            <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
                        </form>
                        <form action="" method="POST">
                            <input type="text" name="emailcu" placeholder="Email Hiện Tại">
                            <input type="text" name="emailmoi" placeholder="Email Mới">
                            <input type="text" name="emailmoi2" placeholder="Nhập Lại Email Mới" >
                            <input type="submit" name="doiemail" value="Đổi Email">

                        </form>
                        <form action="" method="post">
                            <label > THAY ĐỔI ẢNH ĐẠI DIỆN</label><br>
                            <input type="file" name="" id="">
                        </form>
                    </div>
                    <div id="tab3"> 
                        <table id="tb" class="display" style="width: 100%;">
                            <thead>
                                <tr>
                                    <td colspan="4">
                                        <input  type="checkbox" name="abc" onchange="anhien(this.checked)" class="anhien"> Ẩn/Hiện
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên Game</td>
                                    <td> <label>MyKey</label></td>
                                    <td>Ngày</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $listbill = getListBill($_SESSION['iduser']);
                                while($rowlistbill = mysqli_fetch_array($listbill)){
                                ?>
                                <tr>
                                    <td><?php echo $rowlistbill['idhoadon'] ?></td>
                                    <td><?php echo $rowlistbill['tengame'] ?></td>
                                    <td > <label class="abc" style="display: none;"><?php echo $rowlistbill['code'] ?></label></td>
                                    <td><?php echo $rowlistbill['ngay'] ?></td>
                                </tr> 
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <?php
    include "./blocks/footer/footer.php";
    ?>
    <script>
       
        function anhien(checked){
            if(checked == true){
                $(".abc").fadeIn();
            }else{
                $(".abc").fadeOut();
            }
        }
    </script>
    <script>
        $(function(){
            $("#thay_mk").validate({
                rules: {
                    mkcu: {required: true},
                    mkmoi: {required:true},
                    mkmoi2: {equalTo: "[name='mkmoi']"},
                },
                messages:{
                    mkcu: {required: "Bạn chưa nhập"},
                    mkmoi: {required: "Ban chưa nhập"},
                }
            });
        });

        
    </script>
</body>

</html>