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
    <div id="slides" class="container carousel slide" data-ride="carousel">
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
                                Mua Ngay
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
                <h3>Web game bán hàng uy tín</h3>
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
                <div class="nhap_vai">
                    <div class="col-12">
                        <div class="row">
                            <h4 class="col-9 text-dark"><span class="text-dark ml-4" style="font-size: 30px; font-weight:bold">NHẬP VAI</span></h4>
                            <a class="col-3" href="danh_muc.php?idTL={idTL}" style="font-size:25px;text-decoration:none;left:200px;">MORE</a>
                        </div>
                    </div>

                    <div class="col-12">
        <div class="arrow_prew">
            <span><i class="fa fa-arrow-circle-left"></i></span>
        </div>
        <div class="multiple-items mx-auto">
            <?php 
            $datagamemoinhat=laygame();
            while($datagamemoinhat_row=mysqli_fetch_array($datagamemoinhat)){

            ?>
            
            <div class="card items">
                <div class="image-container">
                    <img class="card-img-top" src="./image/hình/<?php echo $datagamemoinhat_row['tenhinh'] ?>" alt="">
                    <div class="overplay">
                        <a class="btn btn-outline-light m-2" href="gameDetail.php?idgame=<?php echo $datagamemoinhat_row['idgame']?>">xem chi tiết</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <p class="col-12 text-center text-primary" style="font-weight:bold;font-size:20px;height:60px;"><?php echo $datagamemoinhat_row['tengame'] ?></p>
                        <div class="card-text text-center"><h5><?php echo $datagamemoinhat_row['giatien'] ?> VNĐ</h5>
                    </div>
                    </div>
                    

                </div>
            </div>
            
                <?php
            }
                ?>
           

        </div>
        <div class="arrow_next">
            <span><i class="fa fa-arrow-circle-right"></i></span>
        </div>
        
    </div>

            

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
    </div>
    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iusto quo doloribus et nostrum natus, veritatis similique doloremque mollitia praesentium cum omnis quaerat blanditiis nam tempore, atque ipsa ut explicabo.
            </div>
        </div> -->
    <?php
    include "./blocks/footer/footer.php";
    ?>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
         $(function () {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplayspeed: 2000,
                dots: false,
                arrows: true,
                prevArrow: '.arrow_prew',
                nextArrow: '.arrow_next'
                
            });
        })

    </script>
    
</body>
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <video controls width="100%">
                    <source src="" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

</html>

