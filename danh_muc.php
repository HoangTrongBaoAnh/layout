<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
    <!-- jqery.marquee.jss---->
    <script src="jquery/Text-Scrolling-Plugin-for-jQuery-Marquee/jquery.marquee.js"></script>

    <link rel="stylesheet" href="./layout-danhmuc/danhmuc-style.css">
    <script src="layout-danhmuc/danhmuc-javascripts.js"></script>

    <!-- paginationjs -->
    <script type="text/javascript" src="flaviusmatis-simplePagination.js-e32c66e/jquery.simplePagination.js"></script>

</head>

<body>
    <!----------------------- MAIN MENU--------------------->
    <?php
    include "./blocks/nav/nav.php"
    ?>
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
    <!-- MENU------------------------------- -->
    <div class="mt-4">
        <div class="row">
            <!-- menu flit-->
            <style>
                #bang tr {
                    border-bottom: 1px solid rgb(182, 179, 179);
                }
            </style>

            <div class="col-md-3 ml-2 border">
                <form action="" method="POST">
                    <table id="bang">
                        <tr >
                            <td colspan="2" class="text-center"><input type="text" placeholder="Tìm kiếm" name="txtTen"
                                    class="m-4"></td>

                        </tr>

                        <tr class="mt-4">
                            <td><label class="ml-4">Thể loại: </label></td>
                            <td>
                                <div class="ml-4">
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành động </label>
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành
                                        động</label><br>
                                </div>
                                <div class="ml-4">
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành động </label>
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành
                                        động</label><br>
                                </div>
                                <div class="ml-4">
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành động </label>
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành
                                        động</label><br>
                                </div>
                                <div class="ml-4">
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành động </label>
                                    <label class="mr-4"><input type="checkbox" name="idTL" id="idTL">Hành
                                        động</label><br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Giá tiền:</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label>min: </label></td>
                            <td> <input type="number" value="0"></td>
                        </tr>
                        <tr>
                            <td><label>max: </label></td>
                            <td> <input type="number" value="500000"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><input type="submit" value="Tìm kiếm"
                                    class="btn btn-primary"></td>

                        </tr>
                    </table>

                </form>
            </div>



            <!------------------------- -->



            <!--list card ------------------->
            <div class="container col-md-8 ">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php">
                                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/271590/header.jpg" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info">
                                <a href="/game-detail/gameDetail.html">
                                    <div class="item-title">Grand Theft Auto V - GTA V</div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p">457,000đ</span>
                                </div>
                                <a href="gameDetail.php" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
 
                </div>
                <div id="pagination-container" style="margin-top: 200px;"></div>
            </div>
            

        </div>
    </div>
    <!-- --------------------------------- -->
    <?php
    include "./blocks/footer/footer.php"
    ?>
    <script>
        // jQuery Plugin: http://flaviusmatis.github.io/simplePagination.js/

        var items = $(".row .item-frames");
        var numItems = items.length;
        var perPage = 12;

        items.slice(perPage).hide();

        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    </script>
</body>

</html>