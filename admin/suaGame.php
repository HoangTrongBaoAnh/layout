<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("./../lib/DataProvider.php");
include_once("./../lib/quantri.php");
?>
<?php $datahinh = getHinhByIDGame($_GET['idGame']);
$hinhbandau = array();
$idhinhbandau = array();
while ($datahinh_row = mysqli_fetch_array($datahinh)) {
    array_push($hinhbandau, $datahinh_row['tenhinh']);
    array_push($idhinhbandau, $datahinh_row['idhinh']);
}
?>
<?php
$idgame = $_GET['idGame'];
if (isset($_POST['btnSua'])) {
    $TenGame = $_POST['TenGame'];
    trim($TenGame);
    $Gia = $_POST['Gia'];
    settype($Gia, "int");
    $Nam = $_POST['Nam'];
    settype($Nam, "int");
    $NhaPhatHanh = $_POST['NhaPhatHanh'];
    trim($NhaPhatHanh);
    $os_mini = $_POST['os_mini'];
    trim($os_mini);
    $processor_mini = $_POST['processor_mini'];
    trim($processor_mini);
    $memory_mini = $_POST['memory_mini'];
    trim($memory_mini);
    $graphics_mini = $_POST['graphics_mini'];
    trim($graphics_mini);
    $harddrive_mini = $_POST['harddrive_mini'];
    trim($harddrive_mini);
    $os_recommend = $_POST['os_recommend'];
    trim($os_recommend);
    $processor_recommend = $_POST['processor_recommend'];
    trim($processor_recommend);
    $memory_recommend = $_POST['memory_recommend'];
    trim($memory_recommend);
    $graphics_recommend = $_POST['graphics_recommend'];
    trim($graphics_recommend);
    $harddrive_recommend = $_POST['harddrive_recommend'];
    trim($harddrive_recommend);
    $noidung = $_POST['NoiDung'];
    trim($noidung);
    $urlvideo = $_POST['urlVideo'];
    trim($urlvideo);
    $MoTa = $_POST['MoTa'];
    trim($MoTa);
    $manghinh = array();
    $hinh1 = $_FILES['hinh1']['name'];
    $hinh2 = $_FILES['hinh2']['name'];
    $hinh3 = $_FILES['hinh3']['name'];
    $hinh4 = $_FILES['hinh4']['name'];
    $hinh5 = $_FILES['hinh5']['name'];
    // array_push($manghinh, $_FILES['hinh2'], $_FILES['hinh3'], $_FILES['hinh4'], $_FILES['hinh5']);
    if (isset($_POST['theloai'])) {
        if ($TenGame != null && $Gia != null) {
            $qrgame = "
            UPDATE game SET
            tengame='$TenGame',
            giatien='$Gia',
            namphathanh='$Nam',
            nhaphathanh='$NhaPhatHanh',
            os_mini='$os_mini',
            processor_mini='$processor_mini',
            memory_mini='$memory_mini',
            graphics_mini='$graphics_mini',
            harddrive_mini='$harddrive_mini',
            os_recommend='$os_recommend',
            processor_recommend='$processor_recommend',
            memory_recommend='$memory_recommend',
            graphics_recommend='$graphics_recommend',
            harddrive_recommend='$harddrive_recommend',
            content='$noidung',
            mota='$MoTa',
            trailer='$urlvideo'
            WHERE idgame='$idgame'
            ";
            DataProvider::ExecuteQuery($qrgame);


            $theloai = $_POST['theloai'];
            $qrDeleteTheLoaiByIdGame = "DELETE FROM chitiettheloai WHERE idgame=$idgame";
            DataProvider::ExecuteQuery($qrDeleteTheLoaiByIdGame);
            foreach ($theloai as $item) {
                settype($item, "int");
                $qrTheLoai = "INSERT INTO chitiettheloai(idgame,idtheloai)VALUES('$idgame','$item')";
                DataProvider::ExecuteQuery($qrTheLoai);
            }


            if ($hinh1 != null && $_FILES['hinh1']['error'] == 0) {
                if (move_uploaded_file($_FILES['hinh1']['tmp_name'], './../image/hình/' . $hinh1)) {
                    $tmp = $idhinhbandau[0];
                    $qrUpdateHinh = "UPDATE hinh SET tenhinh='$hinh1' WHERE idhinh='$tmp'";
                    DataProvider::ExecuteQuery($qrUpdateHinh);
                }
            }
            if ($hinh2 != null && $_FILES['hinh2']['error'] == 0) {
                if (move_uploaded_file($_FILES['hinh2']['tmp_name'], './../image/hình/' . $hinh2)) {
                    $tmp = $idhinhbandau[1];
                    $qrUpdateHinh = "UPDATE hinh SET tenhinh='$hinh2' WHERE idhinh='$tmp'";
                    DataProvider::ExecuteQuery($qrUpdateHinh);
                }
            }
            if ($hinh3 != null && $_FILES['hinh3']['error'] == 0) {
                if (move_uploaded_file($_FILES['hinh3']['tmp_name'], './../image/hình/' . $hinh3)) {
                    $tmp = $idhinhbandau[2];
                    $qrUpdateHinh = "UPDATE hinh SET tenhinh='$hinh3' WHERE idhinh='$tmp'";
                    DataProvider::ExecuteQuery($qrUpdateHinh);
                }
            }
            if ($hinh4 != null && $_FILES['hinh4']['error'] == 0) {
                if (move_uploaded_file($_FILES['hinh4']['tmp_name'], './../image/hình/' . $hinh4)) {
                    $tmp = $idhinhbandau[3];
                    $qrUpdateHinh = "UPDATE hinh SET tenhinh='$hinh4' WHERE idhinh='$tmp'";
                    DataProvider::ExecuteQuery($qrUpdateHinh);
                }
            }
            if ($hinh5 != null && $_FILES['hinh5']['error'] == 0) {
                if (move_uploaded_file($_FILES['hinh5']['tmp_name'], './../image/hình/' . $hinh5)) {
                    $tmp = $idhinhbandau[4];
                    $qrUpdateHinh = "UPDATE hinh SET tenhinh='$hinh5' WHERE idhinh='$tmp'";
                    DataProvider::ExecuteQuery($qrUpdateHinh);
                }
            }


                header("location:listGame.php");
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


            <form action="" method="POST" enctype="multipart/form-data">
                <?php
                $datagame = getDetailGame($_GET['idGame']);
                $datagame_row = mysqli_fetch_array($datagame);
                ?>

                <table style="width:100%" class="table table-bordered">
                    <tr>
                        <th colspan="2" class="text-center">SỬA GAME</th>
                    </tr>
                    <tr>
                        <td>Tên Game</td>
                        <td><input type="text" name="TenGame" value="<?php echo $datagame_row['tengame'] ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td>
                            <?php
                            $dataTheLoai = getListTheLoai();
                            $dataTheLoaichecked = getListIDTheLoaiByIDGame($datagame_row['idgame']);
                            $mangchecked = array();
                            while ($dataTheLoaichecked_row = mysqli_fetch_array($dataTheLoaichecked)) {
                                array_push($mangchecked, $dataTheLoaichecked_row['idtheloai']);
                            }
                            while ($dataTheLoai_row = mysqli_fetch_array($dataTheLoai)) {

                            ?>
                                <label class="mr-4"><input type="checkbox" name="theloai[]" id="TheLoai" value="<?php echo $dataTheLoai_row['idtheloai'] ?>" <?php foreach ($mangchecked as $checked) {
                                                                                                                                                                    if ($dataTheLoai_row['idtheloai'] == $checked) echo "checked";
                                                                                                                                                                } ?>><?php echo $dataTheLoai_row['tentheloai'] ?></label>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>Hình</td>
                        <td>

                            <div>
                                <div>
                                    Hình Bìa <br>
                                    <img src="/layout/image/hình/<?php echo $hinhbandau[0] ?>" alt="" style="width:200px;height:100px" id="img_game1">
                                    <input type="file" name="hinh1" id="uploadCaptureInputFile1" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete1" type="button">delete</button>
                                    <img>
                                </div>
                                <div>
                                    Hình minh họa <br>
                                    <img src="/layout/image/hình/<?php echo $hinhbandau[1] ?>" alt="" style="width:200px;height:100px" id="img_game2">
                                    <input type="file" name="hinh2" id="uploadCaptureInputFile2" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete2" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="/layout/image/hình/<?php echo $hinhbandau[2] ?>" alt="" style="width:200px;height:100px" id="img_game3">
                                    <input type="file" name="hinh3" id="uploadCaptureInputFile3" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete3" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="/layout/image/hình/<?php echo $hinhbandau[3] ?>" alt="" style="width:200px;height:100px" id="img_game4">
                                    <input type="file" name="hinh4" id="uploadCaptureInputFile4" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete4" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="/layout/image/hình/<?php echo $hinhbandau[4] ?>" alt="" style="width:200px;height:100px" id="img_game5">
                                    <input type="file" name="hinh5" id="uploadCaptureInputFile5" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete5" type="button">delete</button>
                                    <img>
                                </div>


                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td><input type="number" name="Gia" id="Gia" value="<?php echo $datagame_row['giatien'] ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Năm</td>
                        <td><input type="text" name="Nam" value="<?php echo $datagame_row['namphathanh'] ?>"class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Trailer</td>
                        <td><input type="url" name="urlVideo" id="video" value="<?php echo $datagame_row['trailer'] ?>"class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nhà phát hành</td>
                        <td><input type="text" name="NhaPhatHanh" value="<?php echo $datagame_row['nhaphathanh'] ?>"class="form-control"></td>
                    </tr>
                    <!-- mini -->
                    <tr>
                        <td>os mini</td>
                        <td ><textarea class="form-control" name="os_mini" id="" ><?php echo $datagame_row['os_mini'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>processcor mini</td>
                        <td><textarea class="form-control" name="processor_mini" id="" ><?php echo $datagame_row['processor_mini'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>memory mini</td>
                        <td><textarea class="form-control" name="memory_mini" id="" ><?php echo $datagame_row['memory_mini'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>graphics mini</td>
                        <td><textarea class="form-control" name="graphics_mini" id="" ><?php echo $datagame_row['graphics_mini'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>harddrive mini</td>
                        <td><textarea class="form-control" name="harddrive_mini" id="" ><?php echo $datagame_row['harddrive_mini'] ?></textarea></td>
                    </tr>
                    <!-- recommend -->
                    <tr>
                        <td>os recommend</td>
                        <td><textarea class="form-control" name="os_recommend" id="" ><?php echo $datagame_row['os_recommend'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>processcor recommend</td>
                        <td><textarea class="form-control" name="processor_recommend" id="" ><?php echo $datagame_row['processor_recommend'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>memory recommend</td>
                        <td><textarea class="form-control" name="memory_recommend" id=""><?php echo $datagame_row['memory_recommend'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>graphics recommend</td>
                        <td><textarea class="form-control" name="graphics_recommend" id="" ><?php echo $datagame_row['graphics_recommend'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>harddrive recommend</td>
                        <td><textarea class="form-control" name="harddrive_recommend" id="" ><?php echo $datagame_row['harddrive_recommend'] ?></textarea></td>
                    </tr>




                    <tr>
                        <td>Nội dung</td>
                        <td><textarea class="form-control" name="NoiDung" id="NoiDung" ><?php echo $datagame_row['content'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea class="form-control" name="MoTa" id="MoTa"><?php echo $datagame_row['mota'] ?></textarea></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center "><input type="submit" class="btn btn-primary" name="btnSua" value="Sửa"></input></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>
        // preview file(xem file trước khi upload)
        function readURL(input, a) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img_game' + a).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#uploadCaptureInputFile1").change(function() {
            $('#delete1').show();
            readURL(this, 1);
        });
        $("#uploadCaptureInputFile2").change(function() {
            $('#delete2').show();
            readURL(this, 2);
        });
        $("#uploadCaptureInputFile3").change(function() {
            $('#delete3').show();
            readURL(this, 3);
        });
        $("#uploadCaptureInputFile4").change(function() {
            $('#delete4').show();
            readURL(this, 4);
        });
        $("#uploadCaptureInputFile5").change(function() {
            $('#delete5').show();
            readURL(this, 5);
        });

        // tạo mảng chuyển từ mảng trong php sang javascripts
        var hinhbandaujs = new Array();

        <?php
        foreach ($hinhbandau as $value) {
        ?>
            hinhbandaujs.push("<?php echo $value ?>");
        <?php
        }
        ?>

        function deleteImage(a) {

            $("#delete" + a).on('click', function() {
                $("#uploadCaptureInputFile" + a).val('');
                $('#img_game' + a).attr('src', '/layout/image/hình/' + hinhbandaujs[a - 1]);
                $(this).hide();
            })

        }
        deleteImage(1);
        deleteImage(2);
        deleteImage(3);
        deleteImage(4);
        deleteImage(5);
    </script>
</body>

</html>