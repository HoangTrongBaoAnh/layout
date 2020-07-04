<?php
session_start();

?>
<?php
    include_once("./lib/DataProvider.php");
    include_once("./lib/bangame.php");
?>
<?php
if(isset($_GET['txtTen'])){
    $txtTen=$_REQUEST['txtTen'];
    trim($txtTen);
  $qr="SELECT DISTINCT g.idgame,g.tengame,g.giatien,h.tenhinh FROM game g,chitiettheloai ct,hinh h WHERE h.idloaihinh=1 AND g.idgame=h.idgame AND g.idgame=ct.idgame AND g.tengame LIKE '%$txtTen%'";
  $gameTimKiem=DataProvider::ExecuteQuery($qr);

}
if(isset($_GET['idTL'])){
    $idTL=$_GET['idTL'];
}

if(isset($_POST['btnTimKiemDanhMuc'])){
    $txtTen=$_REQUEST['txtTen'];
    trim($txtTen);
  $qr="SELECT DISTINCT g.idgame,g.tengame,g.giatien,h.tenhinh FROM game g,chitiettheloai ct,hinh h WHERE h.idloaihinh=1 AND g.idgame=h.idgame AND g.idgame=ct.idgame AND g.tengame LIKE '%$txtTen%'";
 if(isset($_POST['idtheloai'])){
     $idtheloai=$_POST['idtheloai'];
  $chuoitheloai=implode(',',$idtheloai);
$qr=$qr." AND ct.idtheloai IN (".$chuoitheloai.")";
}
if(isset($_POST['price-min']) && isset($_POST['price-max'])){
    $PriceMin=$_POST['price-min'];
    $PriceMax=$_POST['price-max'];
    $qr=$qr." AND $PriceMin <=g.giatien AND $PriceMax>=g.giatien";
}   
   $gameTimKiem=DataProvider::ExecuteQuery($qr);
}
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
    <?php
        
        // if(isset($_REQUEST['idTL'])){
        //     foreach($_REQUEST['idTL'] as $value){
        //         echo $value. "</br>";
        //     }
        // }

    ?>
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
                table td:nth-child(odd) {
                    text-align: center;
                }
                .checkbox-primary input[type="checkbox"]:checked + label::before {
                    background-color: #428bca;
                    border-color: #428bca; }
            </style>

            <div class="col-md-3 ml-4 border">
                <form action="" method="POST">
                    <table id="bang" class="table mt-2" style="margin:0 auto;width: 100%">
                        <tr >
                            <td colspan="2" class="text-center "><input class="form-control" type="text" placeholder="Tìm kiếm" name="txtTen"
                                    class="m-4"></td>

                        </tr>

                        <tr class="form-group">
                            <td class="d-flex align-items-center"><label class="ml-4 form-check-label ">Thể loại: </label></td>
                            <td>
                                <?php
                                    $tentheloai=laytheloai();
                                    while($row_tentheloai=mysqli_fetch_array($tentheloai)){

                                    
                                ?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="<?php echo $row_tentheloai['idtheloai'] ?>" type="checkbox" name="idtheloai[]" value="<?php echo $row_tentheloai['idtheloai'] ?>">
                                    <label class="custom-control-label" for="<?php echo $row_tentheloai['idtheloai'] ?>"><?php echo $row_tentheloai['tentheloai'] ?> </label>
                                </div>
                                <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label class="form-check-label">Giá tiền:</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="form-check-label">Min:</label></td>
                            <td> <input class="form-control" type="number" value="0" name="price-min"></td>
                        </tr>
                        <tr>
                            <td><label class="form-check-label">Max:</label></td>
                            <td> <input class="form-control" type="number" value="500000" name="price-max"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><input id="timkiem" name="btnTimKiemDanhMuc" type="submit" value="Tìm kiếm"
                                    class="btn btn-primary"></td>

                        </tr>
                    </table>

                </form>
            </div>



            <!------------------------- -->



            <!--list card ------------------->
            <div class="container col-md-8 ">
                <div class="row">
                    <?php
                        if(isset($_POST['btnTimKiemDanhMuc']) || isset($_GET['txtTen'])){
                            $laygame=$gameTimKiem;
                        }else{
                        if(isset($_GET['idTL'])){
                            $idTL=$_GET['idTL'];
                            $laygame=laygametheotheloai($idTL);
                        }
                        else{
                            $laygame=laygame();
                        }
                    }
                        if(mysqli_num_rows($laygame)==0){
                            echo "Không tìm thấy kết quả !!!";
                        }
                        while($row_laygame=mysqli_fetch_array($laygame)){
                            $gia=number_format($row_laygame['giatien']);

                    ?>
                    <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 item-frames">
                        <div class="item-game-wrapper">
                            <a href="#">
                                <div class="img">
                                    <a href="gameDetail.php?idgame=<?php echo $row_laygame['idgame']  ?>">
                                        <img height="150px" src="./image/hình/<?php echo $row_laygame['tenhinh'] ?>" alt=""
                                            class="check_img_errs">
                                    </a>
                                </div>
                            </a>
                            <div class="item-info pb-2">
                                <a href="gameDetail.php?idgame=<?php echo $row_laygame['idgame']  ?>">
                                    <div class="item-title"><?php echo $row_laygame['tengame'] ?></div>
                                </a>
                                <div class="item-price">
                                    <span class="cu-p"><?php echo $gia ?></span>
                                </div>
                                <a href="gameDetail.php?idgame=<?php echo $row_laygame['idgame']  ?>" class="btn btn-outline-primary btn-buy">Mua
                                    hàng</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>        
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
                $('body,html').animate({
                    scrollTop: 0
                }, 600);
            }
        });
    </script>
</body>

</html>