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
    array_push($manghinh, $_FILES['hinh2'], $_FILES['hinh3'], $_FILES['hinh4'], $_FILES['hinh5']);
    if (isset($_POST['theloai'])) {
        if (
            $hinh1 != null && $hinh2 != null && $hinh3 != null && $hinh4 != null && $hinh5 != null
            && $TenGame != null && $Gia != null && $_FILES['hinh1']['error'] == 0 && $_FILES['hinh1']['error'] == 0 && $_FILES['hinh2']['error'] == 0
            && $_FILES['hinh3']['error'] == 0  && $_FILES['hinh4']['error'] == 0  && $_FILES['hinh5']['error'] == 0
        ) {
            echo  $qrgame = "
            INSERT INTO game(tengame,
            giatien,
            namphathanh,
            nhaphathanh,
            os_mini,
            processor_mini,
            memory_mini,
            graphics_mini,
            harddrive_mini,
            os_recommend,
            processor_recommend,
            memory_recommend,
            graphics_recommend,
            harddrive_recommend,
            content,
            mota,
            trailer)
            VALUES('$TenGame','$Gia','$Nam','$NhaPhatHanh','$os_mini','$processor_mini','$memory_mini','$graphics_mini','$harddrive_mini',
                    '$os_recommend','$processor_recommend','$memory_recommend','$graphics_recommend','$harddrive_recommend',
                    '$noidung','$MoTa','$urlvideo')";
            DataProvider::ExecuteQuery($qrgame);



            if (move_uploaded_file($_FILES['hinh1']['tmp_name'], './../image/hình/' . $hinh1)) {
                $idmoinhat = DataProvider::ExecuteQuery("SELECT idgame FROM game ORDER BY idgame DESC LIMIT 0,1");
                $idmoinhat_row = mysqli_fetch_array($idmoinhat);
                $idgamevalue = $idmoinhat_row['idgame'];
                $qrhinhbia = "
        INSERT INTO hinh(tenhinh,idgame,idloaihinh)VALUES('$hinh1','$idgamevalue','1');
        ";
                DataProvider::ExecuteQuery($qrhinhbia);
            }

            foreach ($manghinh as $value) {
                $tenhinhvalue = $value['name'];

                if (move_uploaded_file($value['tmp_name'], './../image/hình/' . $tenhinhvalue)) {
                    $qrhinh = "
                INSERT INTO hinh(tenhinh,idgame,idloaihinh)VALUES('$tenhinhvalue','$idgamevalue','2');
                ";
                    DataProvider::ExecuteQuery($qrhinh);
                }
            }

            $theloai = $_POST['theloai'];
            foreach ($theloai as $item) {
                settype($item, "int");
                $qrTheLoai = "INSERT INTO chitiettheloai(idgame,idtheloai)VALUES('$idgamevalue','$item')";
                DataProvider::ExecuteQuery($qrTheLoai);
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


                <table style="width:100%;margin:0 auto" class="table table-bordered text-center">
                    <tr>
                        <th colspan="2" class="text-center">THÊM GAME</th>
                    </tr>
                    <tr>
                        <td>Tên Game</td>
                        <td><input type="text" name="TenGame" style="width:60%" placeholder="tên game"></td>
                    </tr>
                    <tr>
                        <td>Thể loại</td>
                        <td>
                            <?php
                            $dataTheLoai = getListTheLoai();
                            while ($dataTheLoai_row = mysqli_fetch_array($dataTheLoai)) {


                            ?>
                                <label class="mr-4"><input class="form-check-input" type="checkbox" name="theloai[]" id="TheLoai" value="<?php echo $dataTheLoai_row['idtheloai'] ?>"><?php echo $dataTheLoai_row['tentheloai'] ?></label>
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
                                    <img src="" alt="" style="width:200px;height:100px" id="img_game1">
                                    <input type="file" name="hinh1" id="uploadCaptureInputFile1" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete1" type="button">delete</button>
                                    <img>
                                </div>
                                <div>
                                    Hình minh họa <br>
                                    <img src="" alt="" style="width:200px;height:100px" id="img_game2">
                                    <input type="file" name="hinh2" id="uploadCaptureInputFile2" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete2" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="" alt="" style="width:200px;height:100px" id="img_game3">
                                    <input type="file" name="hinh3" id="uploadCaptureInputFile3" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete3" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="" alt="" style="width:200px;height:100px" id="img_game4">
                                    <input type="file" name="hinh4" id="uploadCaptureInputFile4" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete4" type="button">delete</button>
                                    <img>
                                </div>
                                <div>Hình minh họa <br>
                                    <img src="" alt="" style="width:200px;height:100px" id="img_game5">
                                    <input type="file" name="hinh5" id="uploadCaptureInputFile5" accept="image/*"><button style="display:none" class="btn btn-primary" id="delete5" type="button">delete</button>
                                    <img>
                                </div>


                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td><input type="number" name="Gia" id="Gia" value="2000000"></td>
                    </tr>
                    <tr>
                        <td>Năm</td>
                        <td><input type="text" name="Nam" placeholder="năm phát hành"></td>
                    </tr>
                    <tr>
                        <td>Trailer</td>
                        <td><input type="url" name="urlVideo" id="video" style="width:80%" placeholder="địa chỉ youtube"></td>
                    </tr>
                    <tr>
                        <td>Nhà phát hành</td>
                        <td><input type="text" name="NhaPhatHanh" style="width:80%" placeholder="tên nhà phát hành"></td>
                    </tr>
                    <!-- mini -->
                    <tr>
                        <td>os mini</td>
                        <td><textarea name="os_mini" id="" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>processcor mini</td>
                        <td><textarea name="processor_mini" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>memory mini</td>
                        <td><textarea name="memory_mini" id="" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>graphics mini</td>
                        <td><textarea name="graphics_mini" id="" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>harddrive mini</td>
                        <td><textarea name="harddrive_mini" id="" class="form-control"></textarea></td>
                    </tr>
                    <!-- recommend -->
                    <tr>
                        <td>os recommend</td>
                        <td><textarea name="os_recommend"  class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>processcor recommend</td>
                        <td><textarea name="processor_recommend"  class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>memory recommend</td>
                        <td><textarea name="memory_recommend"  class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>graphics recommend</td>
                        <td><textarea name="graphics_recommend" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>harddrive recommend</td>
                        <td><textarea name="harddrive_recommend" class="form-control"></textarea></td>
                    </tr>




                    <tr>
                        <td>Nội dung</td>
                        <td><textarea name="NoiDung" id="NoiDung" class="form-control" ></textarea></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea name="MoTa" id="MoTa" class="form-control"></textarea></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center"><input type="submit" name="btnThem" value="Thêm" class="btn btn-primary"></input></td>
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

        function deleteImage(a) {
            $("#delete" + a).on('click', function() {
                $("#uploadCaptureInputFile" + a).val('');
                $('#img_game' + a).attr('src', '');
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