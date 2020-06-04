
<!-- TÔI XIN MỌI NGƯỜI NẾU CÓ THỂ LÀM ƠN CHÚ THÍCH RIÊNG RA TỪNG PHẦN -->
<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <!-- import bootrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
        <script src="jquery/Text-Scrolling-Plugin-for-jQuery-Marquee/jquery.marquee.js"></script>
        <link href="./trangchu/style.css" rel="stylesheet">
        <script src="/blocks/nav/nav.html"></script>
        <script src="/blocks/footer/footer.html"></script>
        <script src="/blocks/loadingscreen/loadingscreen.html"></script>
        <script src="jquery/modalvideo/jquery-modal-video.min.js"></script>
        <link href="jquery/modalvideo/modal-video.min.css" rel="stylesheet" >

        <script>
            $(document).ready(function(){
                $('.news-ticker').marquee({
                    duration: 10000,
                    delayBeforeStart: 0,
                    direction: 'left',
                    duplicated: true
                });
                // $("#nav-holder").load("/blocks/nav/nav.html");  
                // $("footer").load("/blocks/footer/footer.html");  
            });
        </script>
        <script type="text/javascript">
            $(function(){ // this replaces document.ready
                $(window).on("load", function(){
                    $('#loader').fadeOut('slow', function() {
                    $(this).remove();
                    });
                });
                $(".video-play").modalVideo();
                
                $(this).data().video-id.on('change', function(){

                    var newval = '',
                        $this = $(this);

                    if (newval = $this.val().match(/(\?|&)v=([^&#]+)/)) {

                        $this.val(newval.pop());

                    } else if (newval = $this.val().match(/(\.be\/)+([^\/]+)/)) {

                        $this.val(newval.pop());

                    } else if (newval = $this.val().match(/(\embed\/)+([^\/]+)/)) {

                        $this.val(newval.pop().replace('?rel=0',''));

                    }

                });
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
        <div  id="slides" class="container carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
                <li data-target="#slides" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/slider-1.jpg">
                    <div class="slide-text">
                        <h3>OVERWATCH</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperiores!</p>
                        <!--14/4 Chỉnh sửa mục button-->
                        <div class="carousel_button">
                            <a id="video-id" class="btn btn-outline-light btn-lg video-play" data-video-id="GKXS_YA9s7E" type="button">
                                Trailer
                            </a>
                            <a href="gameDetail.php" class="btn btn-primary btn-lg">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="carousel-item ">
                    <img src="./image/pubg-mobile-update-01_qpqg.jpg">
                    <div class="slide-text">
                        <h3>PUBG</h3>
                        <p>DEAD GAME sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperiores!</p>
                        <div class="carousel_button">
                            <button type="button" class="btn btn-outline-light btn-lg">
                                Trailer
                            </button>
                            <a href="gameDetail.php" class="btn btn-primary btn-lg">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img  src="./image/486147.jpg">
                    <div class="slide-text">
                        <h3>MARIO</h3>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperiores!</p>
                        <div class="carousel_button">
                            <button type="button" class="btn btn-outline-light btn-lg">
                                Trailer
                            </button>
                            <a href="gameDetail.php" class="btn btn-primary btn-lg">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    
                    <img  src="./image/e3-2016-god-of-war-chien-than-trong-su-cach-tan-day-moi-me-gioi-thieu-game.jpg">
                    <div class="slide-text">
                        <h3>GODOFWAR3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde enim alias quasi aut cupiditate quas tempore! Eos iste doloribus quia, error illum architecto rerum a minima voluptas ratione sit asperiores!</p>
                        <div class="carousel_button">
                            <button type="button" class="btn btn-outline-light btn-lg">
                                Trailer
                            </button>
                            <a href="gameDetail.php" class="btn btn-primary btn-lg">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>
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
                <div class="col-8">
                    <h2 class="text-center">Game features</h2>
                    <div class="nhap_vai">
                        <div class="col-12">
                            <div class="row">
                                <h4 class="col-9 text-dark"><span class="text-dark">Nhập Vai</span></h4>
                                <a class="col-3" href="danh_muc.php?idTL={idTL}" style="padding-left: 120px;">More >></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/overwatch-2-leaked-pve-mode-new-hero.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>OVERWATCH</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/evuaii2woae3kk7_loky.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>CRYSIC REMASTERED</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/danh-gia-game-legends_of_runeterra-1024x536.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Hành động</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>LEGEND OF RUNETERRA</h5></a>
                                        <p>Legends of Runeterra là một trò chơi thẻ bài kỹ thuật số miễn phí.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/overwatch-2-leaked-pve-mode-new-hero.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>OVERWATCH</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/evuaii2woae3kk7_loky.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>CRYSIC REMASTERED</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/danh-gia-game-legends_of_runeterra-1024x536.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Hành động</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>LEGEND OF RUNETERRA</h5></a>
                                        <p>Legends of Runeterra là một trò chơi thẻ bài kỹ thuật số miễn phí.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/overwatch-2-leaked-pve-mode-new-hero.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>OVERWATCH</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/evuaii2woae3kk7_loky.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Nhập vai</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>CRYSIC REMASTERED</h5></a>
                                        <p>Overwatch là một trò chơi điện tử bắn súng góc nhìn thứ nhất đa người chơi kết hợp.</p>
                                        <div class="hinh_trang_tri">
                                            <img class="heart" width="10%" src="./image/hình/160px-Heart_corazón.svg.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="game_gan_day"> <!--14/4 Chỉnh sửa phần này: khiến hình zoom vô khi hơ vào và chỉnh boder ngoài -->
                                    <div class="thumbnail">
                                        <div class="inner">
                                            <a href="gameDetail.php"><img style="border-radius: 10px;" src="./image/hình/danh-gia-game-legends_of_runeterra-1024x536.jpg"></a>
                                        </div>
                                        <div class="phan_loai">Hành động</div>
                                    </div>
                                    <div class="content">
                                        <a href="gameDetail.php"><h5>LEGEND OF RUNETERRA</h5></a>
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
            <div class="col-4">
                <!-- <h2 class="text-center">GAME MỚI</h2> -->
                <div class="post1" style="border: 7px inset rgba(28,110,164,0.53);
                border-radius: 0px 0px 0px 0px;background-color: azure;">
                    <div class="row"></div>
                    <div>
                        <div class="item-game-wrapper">
                            <div class="card-header" style="align-items: left;color: #fff;background-color: #8c7ae6;">
                                <h5 class="text-center">GAME MỚI</h5>
                            </div>
                            <div class="card">
                               
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="gameDetail.php"><img style="width: 200px;height: 200px;" src="./image/hình/GTA.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <a href="gameDetail.php">
                                                <h4 class="card-title" style="margin: 5px;">Grand Theft Auto V - GTA V</h4>
                                            </a>
                                            
                                            <p class="card-text">457,000đ</p>
                                            <a href="gameDetail.php" class="btn btn-primary">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer w-100 text-muted">

                                    Quite astonishingly, Grand Theft Auto 5, which you need to play GTA Online, has sold more than 115m units. It is currently the fifth most popular game on Steam with, at the time of publication, 132,000 concurrent players.
                                </div>
                          </div>
                            <div class="card">
                               
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="gameDetail.php"><img style="width: 200px;height: 200px;" src="./image/hình/GTA.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <a href="gameDetail.php">
                                                <h4 class="card-title" style="margin: 5px;">Grand Theft Auto V - GTA V</h4>
                                            </a>
                                            
                                            <p class="card-text">457,000đ</p>
                                            <a href="game-detail/gameDetail.html" class="btn btn-primary">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer w-100 text-muted">

                                    Quite astonishingly, Grand Theft Auto 5, which you need to play GTA Online, has sold more than 115m units. It is currently the fifth most popular game on Steam with, at the time of publication, 132,000 concurrent players.
                                </div>
                          </div>
                            <div class="card">
                               
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="game-detail/gameDetail.html"><img style="width: 200px;height: 200px;" src="./image/hình/GTA.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <a href="game-detail/gameDetail.html">
                                                <h4 class="card-title" style="margin: 5px;">Grand Theft Auto V - GTA V</h4>
                                            </a>
                                            
                                            <p class="card-text">457,000đ</p>
                                            <a href="game-detail/gameDetail.html" class="btn btn-primary">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer w-100 text-muted">

                                    Quite astonishingly, Grand Theft Auto 5, which you need to play GTA Online, has sold more than 115m units. It is currently the fifth most popular game on Steam with, at the time of publication, 132,000 concurrent players.
                                </div>
                          </div>
                          <hr>
                        </div>
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