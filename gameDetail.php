<?php
ob_start();
session_start();
include_once('lib/DataProvider.php');
include_once('lib/quantri.php');
$idgame = $_GET['idgame'];
$results = getDetailGame($idgame);
$row = $results->fetch_assoc();
$hinh = getThumbnailGame($idgame);
$row2 = $hinh->fetch_assoc();
$carousel = getCarouselGame($idgame);
$cost = $row['giatien'];
?>


<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
    <title>Chi tiết</title>
</head>
<script>
    $(document).ready(function() {
       
        $('#video_game').html(function(i, html) {
            return html.replace(/(?:https:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?([^<]+)/g, '<center><iframe style="border: 1px solid red;" width="100%" height="500px" src="http://www.youtube.com/embed/$1?modestbranding=1&rel=0&wmode=transparent&theme=light&color=white" frameborder="0" allowfullscreen></iframe></center>')
 
        });

    });

    $( document ).ready(function() {
        
    });

    // hàm random chuỗi 5 ký tự
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }
    x=makeid();
    y=makeid();
    z=makeid();
    d=makeid();
    key=x+" - "+y+" - "+z+" - "+d;
    document.cookie = "key = " + key;
    // hàm làm key
    <?php $tengame = $row['tengame']; ?>
    idgame = '<?php echo $idgame ?>';
    $(document).on('click', '#btnmua', function(e) {
            e.preventDefault();
            <?php 
            $flag = 'false';
            if(isset($_SESSION['iduser'])){
            ?>
            swal({
                title: "Are you sure?",
                text: "Purchase this product will cost: "+ <?php echo $cost ?> + " vnd",
                type: "warning",
                confirmButtonText: "Approve!",
                confirmButtonColor: "#44E753",
                cancelButtonText: "Reasssign!",
                showCancelButton: true,
                })
                .then(function (result) {
                    if (result.value) {
                        <?php $flag = 'true'; ?>
                        swal("Mua thành công","KEY: "+ key, "success")
                        .then(function(isConfirm){
                            if(isConfirm.value){
                                
                                $.ajax({

                                    url : 'themhang.php',
                                    type : 'POST',
                                    data : {
                                        key: key,
                                        idgame: idgame,
                                    },
                                    dataType:'json',
                                    success : function(data) {              
                                        // alert('Data: '+data);
                                        location.reload();
                                    },
                                    error : function(request,error)
                                    {
                                        // alert("Request: "+JSON.stringify(request));
                                        location.reload();
                                    }
                                });
                                
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal("Poof! Your imaginary file has been deleted!","Khong thanh cong",'error')
                    }
                });
            <?php
            }else{
            ?>
            swal("U need to login before purchase this product"," vui lòng đăng nhập để tiếp tục" ,"warning");
            <?php
            }
            ?>
    });


</script>



<style>
    .image img {
        width: 100%;
    }

    /* popup */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }


    .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* mũi tên popup */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }


    .popup .show {
        visibility: visible;
        animation: fadeIn 1s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body>
    <?php
    include "./blocks/nav/nav.php"
    ?>
    <div class="container-fluid mt-5">
        <div class="row mb-4">
            <div class="col-3 border p-0 mr-4 p-4">
                <div class="image">
                    <img src="./image/hình/<?php echo $row2['tenhinh'] ?>" alt="">
                </div>
                <p class="text-center"><span><?php echo $row['tengame'] ?></span></p>
                <p class="text-center"><?php echo $row['giatien'] ?> VNĐ</p>
                
                <form method="POST" name ="form" id ="form" onclick="event.preventDefault()">
                    <button type="button" name="btnmua" id="btnmua" class="w-100 popup btn-primary "  >MUA NGAY</button>
                </form>

                <div class="border-top mt-4">
                    Thể loại:
                    <?php
                    $theloai = getTatCaTheLoaiQuaID($idgame);
                    while($tentheloai = $theloai->fetch_assoc()){
                    ?>
                    <div class="badge badge-pill badge-primary"><?php echo $tentheloai['tentheloai'] ?></div>
                    <?php
                    }
                    ?>
                    <div class="mt-1">Nhà phát hành: <span><?php echo $row['nhaphathanh'] ?></span></div>
                    <div class="mt-1">Năm phát hành: <span><?php echo $row['namphathanh'] ?></span></div>
                </div>
                <div class="border-top mt-4">
                    <h5 class="text-center bg-dark text-light">CẤU HÌNH TỐI THIỂU</h5>
                    <div id="cauhinh2">
                        <p>OS: <?php echo $row['os_mini'] ?></p>
                        <p>Processor: <?php echo $row['processor_mini'] ?></p>
                        <p>Memory: <?php echo $row['memory_mini'] ?></p>
                        <P>Graphics: <?php echo $row['graphics_mini'] ?></P>
                        <p>Hard Drive: <?php echo $row['harddrive_mini'] ?></p>
                        <p>Sound Card: 100% DirectX 10 compatible</p>
                    </div>

                </div>
                <div class="border-top mt-4">
                    <h5 class="text-center bg-dark text-light">CẤU HÌNH ĐỀ NGHỊ</h5>
                    <div id="cauhinh2">
                        <p>OS: <?php echo $row['os_recommend'] ?></p>
                        <p>Processor: <?php echo $row['processor_recommend'] ?></p>
                        <p>Memory: <?php echo $row['memory_recommend'] ?></p>
                        <P>Graphics: <?php echo $row['graphics_recommend'] ?></P>
                        <p>Hard Drive: <?php echo $row['harddrive_recommend'] ?></p>
                        <p>Sound Card: 100% DirectX 10 compatible</p>
                    </div>

                </div>

            </div>
            <div class="col-8 border">
                <div id="video_game">
                    
                    <div><?php echo $row['trailer'] ?></div>                        
                  
                </div>
                <p class="m-4 mt-4">
                    <?php echo $row['content'] ?>
                </p>
                <div class="text-center" style="width: 800px; margin:0 auto;">
                    <div id="carousel">
                        <div id="slides" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#slides" data-slide-to="0" class="active"></li>
                                <li data-target="#slides" data-slide-to="1"></li>
                                <li data-target="#slides" data-slide-to="2"></li>
                                <li data-target="#slides" data-slide-to="3"></li>
                            </ul>

                            <div class="carousel-inner ">
                            <?php
                                $count = 0;
                                while($row3 = mysqli_fetch_array($carousel)){
                                $count++;
                            ?>
                                <div class="carousel-item <?php if($count===1){echo "active";} ?>">
                                    <img src="./image/hình/<?php echo $row3['tenhinh'] ?>"
                                        style="width: 100%">

                                    <div class="slide-text">

                                    </div>

                                </div>
                            <?php
                                }
                            ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <col>
        </div>
    </div>
    <?php
    include "./blocks/footer/footer.php";
    ?>
</body>

</html>