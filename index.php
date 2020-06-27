<!-- TÔI XIN MỌI NGƯỜI NẾU CÓ THỂ LÀM ƠN CHÚ THÍCH RIÊNG RA TỪNG PHẦN -->
<?php
session_start();
include_once('lib/DataProvider.php');
include_once('lib/quantri.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <!-- import bootrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <script src="jquery/Text-Scrolling-Plugin-for-jQuery-Marquee/jquery.marquee.js"></script>
    <link href="./trangchu/style.css" rel="stylesheet">

    <script src="/blocks/loadingscreen/loadingscreen.html"></script>
    <script src="jquery/modalvideo/jquery-modal-video.min.js"></script>
    <link href="jquery/modalvideo/modal-video.min.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('.news-ticker').marquee({
                duration: 10000,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true
            });
           
        });
    </script>
    <script type="text/javascript">
        $(function() { // this replaces document.ready
            $(window).on("load", function() {
                $('#loader').fadeOut('slow', function() {
                    $(this).remove();
                });
            });
            $(".video-play").modalVideo();

        });
    </script>
</head>

<body>
    <section id="loader"></section>
    <header>

        <!--------------------------- NAVIGATIONBAR ------------------------------->
        <?php
        include "./blocks/nav/nav.php";
        ?>
        <!--------------------------------------------------- -->

        <!-----------------latest-news-section-------------------------------- -->
        <div class="latest-news-section">
            <div class="ln-title">Latest News</div>
            <div class="news-ticker">
                <div class="news-ticker-contant">
                    <div class="nt-item"><span class="new">new</span>cyberpunk2077</div>
                    <div class="nt-item"><span class="strategy">strategy</span>totalwar:three kingdoms</div>
                    <div class="nt-item"><span class="racing">racing</span>need for speed</div>
                </div>
            </div>
        </div>
        <!----------------------------------------------------------- -->
    </header>

    <!------------ CAROUSEL INDICATORS----------------------------- -->
    <?php
    $qr = getListGameMain();
    ?>
    <div id="slides" class="container-fluid carousel slide" style="padding: 0;" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <?php
            $count = 0;
            while ($row = mysqli_fetch_array($qr)) {
                $count++;

                $youtube = isset($row['trailer']) ? $row['trailer'] : '';
                parse_str(parse_url($youtube, PHP_URL_QUERY), $my_array_of_vars);
                $idyoutube = $my_array_of_vars['v'];

            ?>
                <div class="carousel-item  <?php if ($count === 1) {
                                                echo "active";
                                            } ?>">
                    <img src="./image/hình/<?php echo $row['tenhinh'] ?>">
                    <div class="slide-text">
                        <h3><?php echo $row['tengame'] ?></h3>
                        <p><?php echo $row['mota'] ?></p>
                        <!--14/4 Chỉnh sửa mục button-->
                        <div class="carousel_button">
                            <a id="video-id" class="btn btn-outline-light btn-lg video-play" data-video-id="<?php echo $idyoutube ?>" type="button">
                                Trailer
                            </a>
                            <a href="gameDetail.php?idgame=<?php echo $row['idgame']  ?>" class="btn btn-primary btn-lg">
                                MUA NGAY
                            </a>
                        </div>
                    </div>

                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-------------------------- -->
    <div class="container-fluid">
        <div class="jumbotrom">
            <div>

            </div>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row welcome text-center mt-4">
            <div class="col-12">
                <h2 class="font-Pangeolin">SHOP GAME BÁN HÀNG UY TÍN NHẤT VIỆT NAM</h2>
            </div>
            <hr>
            <div class="col-12">
            </div>
        </div>
    </div>
    <!-- Chỗ Vinh thêm vào mục free game-->
    <!--14/4 Chỉnh sửa 1 tí-->

    <!--  -->
    <div class="container-fluid padding mt-4 section">
        <div class="row padding">
            <div class="col-12">
                <h2 class="text-center">GAME FEATURE</h2>
                <?php
                $theloai=getListTheLoai();
                $mangtheloai=array();
                while($rowtl=mysqli_fetch_array($theloai)){
                    array_push($mangtheloai,$rowtl['idtheloai']);
                }
                $theloai1=array_rand($mangtheloai);
                do{
                    $theloai2=array_rand($mangtheloai);

                }while($theloai2==$theloai1);
                do{
                    $theloai3=array_rand($mangtheloai);

                }while($theloai3==$theloai1||$theloai3==$theloai2);
                $thongtin1=getThongTinTheLoaiByID($theloai1);
                $thongtin1_row=mysqli_fetch_array($thongtin1);
                $thongtin2=getThongTinTheLoaiByID($theloai2);
                $thongtin2_row=mysqli_fetch_array($thongtin2);
                $thongtin3=getThongTinTheLoaiByID($theloai3);
                $thongtin3_row=mysqli_fetch_array($thongtin3);
                $mangthongtin=array($thongtin1_row,$thongtin2_row,$thongtin3_row);
                foreach($mangthongtin as $value){
                   
                ?>
                <div class="nhap_vai">
                    <div class="col-12">
                        <div class="row">
                            <h4 class="col-9 text-dark"><span class="text-dark" style="font-size: 28px; font-weight:bold; margin-left: 55px"><?php echo $value['tentheloai'] ?></span></h4>
                            <a class="col-3" href="danh_muc.php?idTL=<?php echo $value['idtheloai'] ?>" style="font-size:20px;text-decoration:none;left:200px;">MORE</a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- <div class="arrow_prew">
                            <span><i class="fa fa-arrow-circle-left"></i></span>
                        </div> -->
                        <div class="multiple-items mx-auto">
                            <?php
                            
                            $datagamemoinhat=getListGameQuaIdTheLoai($value['idtheloai'],4);
                            while($datagamemoinhat_row=mysqli_fetch_array($datagamemoinhat)){
                                    $tenhinh2=getThumbnailGame($datagamemoinhat_row['idgame']);
                                    $tenhinh2_row=mysqli_fetch_array($tenhinh2);
                            ?>
                
                            <div class="card items">
                                <div class="image-container">
                                    <img class="card-img-top" src="./image/hình/<?php echo $tenhinh2_row['tenhinh'] ?>" alt="">
                                    <div class="overplay">
                                        <div class="card-text text-center mt-1"><h5 style="color:white"><?php echo number_format($datagamemoinhat_row['giatien'])  ?> VNĐ</h5></div>
                                        <a class="btn btn-outline-light m-2" href="gameDetail.php?idgame=<?php echo $datagamemoinhat_row['idgame']?>">xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <p class="col-12 text-center text-primary" style="font-weight:bold;font-size:20px;height:40px;margin-bottom:0px"><?php echo $datagamemoinhat_row['tengame'] ?></p>
                                        <div class="card-text text-center"><?php echo $datagamemoinhat_row['mota'] ?></div>
                                    </div>
                                </div>
                            </div>
                
                            <?php
                            }
                            ?>
                        </div>
                        <!-- <div class="arrow_next">
                            <span><i class="fa fa-arrow-circle-right"></i></span>
                        </div> -->
                    </div>
                </div>
                <?php
                }
                ?>
            
            

                <div class="nhap_vai">
                    <div class="col-12">
                        <div class="row">
                            <h4 class="col-9 text-dark"><span class="text-dark">Nhập Vai</span></h4>
                            <a class="col-3" href="danh_muc.php?idTL={idTL}" style="padding-left: 120px;">More >></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="game_gan_day">
                                <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                <div class="thumbnail">
                                    <div class="inner">
                                        <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/overwatch-2-leaked-pve-mode-new-hero.jpg"></a>
                                    </div>
                                    <div class="phan_loai">Nhập vai</div>
                                </div>
                                <div class="content">
                                    <a href="gameDetail.php">
                                        <h5>OVERWATCH</h5>
                                    </a>
                                    <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                    <div class="hinh_trang_tri">
                                        <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="game_gan_day">
                                <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                <div class="thumbnail">
                                    <div class="inner">
                                        <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/evuaii2woae3kk7_loky.jpg"></a>
                                    </div>
                                    <div class="phan_loai">Nhập vai</div>
                                </div>
                                <div class="content">
                                    <a href="gameDetail.php">
                                        <h5>CRYSIC REMASTERED</h5>
                                    </a>
                                    <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                    <div class="hinh_trang_tri">
                                        <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="game_gan_day">
                                <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                <div class="thumbnail">
                                    <div class="inner">
                                        <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/danh-gia-game-legends_of_runeterra-1024x536.jpg"></a>
                                    </div>
                                    <div class="phan_loai">Hành động</div>
                                </div>
                                <div class="content">
                                    <a href="gameDetail.php">
                                        <h5>LEGEND OF RUNETERRA</h5>
                                    </a>
                                    <p>Legends of Runeterra là một trò chơi thẻ bài kỹ thuật số miễn phí.</p>
                                    <div class="hinh_trang_tri">
                                        <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="jumbotron text-center">
                </div>

            </div>
                            
        </div>
    </div>
    
    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
         $(function () {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplayspeed: 2000,
                dots: false,
                arrows: true,
               
                
            });
        })

    </script>
    <div>
    <?php
    include "./blocks/footer/footer.php";
    ?>
    </div>
</body>
</html>

