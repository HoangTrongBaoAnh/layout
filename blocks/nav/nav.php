<?php
if (isset($_REQUEST['btnDangXuat'])) {
    unset($_SESSION['iduser']);
    unset($_SESSION['tendangnhap']);
    unset($_SESSION['matkhau']);
    unset($_SESSION['idgroup']);
    unset($_SESSION['hinh']);
    unset($_SESSION['ten']);
    header("location:./index.php");
}
?>
<?php
    include_once("./lib/DataProvider.php");
    include_once("./lib/quantri.php");
    include_once("./lib/bangame.php");
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script> -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* ----------Menu-main----------- */

        @import url(https://fonts.google.com/specimen/Gotu);


        .navbar {
            background-color: #8c7ae6 !important;
            
        }
        .navbar li {
            padding-top: 10px;
        }
        .navbar li a {
            color: #fff !important;
        }

        .navbar li a.active {
            border-bottom: 1px solid violet !important;
        }

        .navbar li a:hover {
            border-bottom: 1px solid violet;
            color: black !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-size: 16px;
            font-family: Gotu, sans-serif;
            
        }
    
        .search-box {
            background: #2f3640;
            height: 60px;
            border-radius: 60px;
            padding: 10px;

        }

        .search-btn {
            display: flex;
            color: #8c7ae6;
            float: right;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            background-color: #2f3640;
            text-decoration: none !important;


        }

        .search-box:hover>.search-btn {
            background: white;
        }

        .search-box:hover>.search-txt {
            width: 240px;
        }

        .search-txt {
            border: none;
            outline: none;
            background: none;
            float: left;
            color: white;
            padding: 0;
            font-size: 16px;
            line-height: 40px;
            width: 0px;
            transition: .5s all;

        }

        .hinh-dai-dien {
            height: 60px;
            background: #2f3640;
            width: 60px;

        }
        .dropdown-menu .dropdown-item{
            min-width: 250px !important;
        }
        .dropdown:hover>.dropdown-menu {
            display: block;
        }
        .bootstrap-select .dropdown-menu {
            outline: none !important;
        }
        .dropdown a {
            background-color:#fff transparent !important;
        }
        .btn-nav {
            background-color: blueviolet;
            border: 1px solid white;
        }

        .btn-nav:hover {
            background-color: purple;
            border: 1px solid white;
        }
        nav li .theloai{
            color: #007bff !important;
        }
        #livesearch{
        z-index:9999; 
        background:transparent;
        border: none;
        max-height:250px;
        overflow:auto; 
        width:50%;
        margin-left:1.2%;
        right: 300px;
        }
        /***********************************/
        .live-outer{
        width:100%; 
        height:60px;
        border-bottom:1px solid #ccc; 
        background:#fff;
        }
        .live-outer:hover{
        background:#F3F3F3;
        }
        .live-im{
        float:left;
        width:10%; 
        height:60px;
        }
        .live-im img{
        width:100%; 
        height:100%;
        }
        .live-product-det{
        float:left; 
        width:100%; 
        height:60px;
        }
        .live-product-name{
        width:inherit; 
        height:22px; 
        margin-top:4px;
        }
        .live-product-name p{
        margin:0px;
        color:#333;
        text-shadow: 1px 1px 1px #DDDDDD;
        font-size:17px;
        }
        .live-product-price{
        width:100%;
        height:25px;
        }
        .live-product-price-text{
        float:left; 
        width:50%;
        }
        .live-product-price-text p{
        margin:0px;
        font-size:16px;
        }
        .link-p-colr{
        color:#333;
        }
    </style>

    <script>
        $( document ).ready(function() {
            $('.dropdown-menu').find('form').click(function (e) {
                e.stopPropagation();
            });
            
        });
        function fx(str)
        {
        var s1=document.getElementById("search_text").value;
        var xmlhttp;
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
        
        document.getElementById("livesearch").style.display="block";
        
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
        document.getElementById("livesearch").style.display="block";
        
            }
        }
        xmlhttp.open("GET","blocks/nav/timkiem.php?n="+s1,true);
        xmlhttp.send(); 
        }
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-branch" href="./index.php">
                <img height="70" src="./image/iconXamLo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               
                
                <ul class="navbar-nav ml-auto">
                <form>
                 <div class="search-box" style="text-align:center">
                    <input class="search-txt" onKeyUp="fx(this.value)" type="text" name="search_text"  id="search_text"placeholder="Type to search">
                    <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
                </div>   
                <div class="dropdown-menu dropdown-menu-right search" id="livesearch"></div>
                </form>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="danh_muc.php" aria-haspopup="true" aria-expanded="false"> Danh mục </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <?php
                                    $theloai=laytheloai();
                                    while($row_theloai=mysqli_fetch_array($theloai)){
                                ?>
                                <a class="theloai dropdown-item text-primary" href="danh_muc.php?idtheloai=<?php echo $row_theloai['idtheloai'] ?>"><?php echo $row_theloai['tentheloai'] ?></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
                


                    <?php
                    if (!isset($_SESSION['iduser'])) {


                    ?>
                   
                        
                            <a class=" btn btn-nav text-light" href="xxx.php">
                                Login
                           
                        </button>
                        
                            <a class=" btn btn-nav text-light" href="sign up.php">
                                Đăng ký
                            </a>
                        
                   
                    <?php
                    } else {
                    ?>
                        <div>
                            <?php
                                $datathongtin = getThongTinByID($_SESSION['iduser']);
                                $datathongtin_row = mysqli_fetch_array($datathongtin);
                            ?>
                            <div class="btn-group" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <img  style="border-radius: 25px;" height="48" src="./image/<?php echo $datathongtin_row['hinh'] ?>">
                                <div class="dropdown-menu dropdown-menu-right">
                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="mr-2 ml-1" style="border-radius: 25px;" height="48" src="./image/<?php echo $datathongtin_row['hinh'] ?>"></td>
                                            <td><b style="font-size: 18px;"><?php echo $datathongtin_row['tendangnhap'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 14px;"><?php echo $datathongtin_row['email'] ?></td>
                                        </tr>
                                    </table>
                                        <form method="POST" >
                                            <a class="dropdown-item text-primary" href="layoutaccinfo.php"><i class="fas fa-home mr-1"></i>Trang cá nhân</a>
                                            <?php
                                                if($_SESSION['idgroup']==1){
                                            ?>
                                                <a class="dropdown-item text-primary" href="./admin/index.php"><i class="fas fa-users-cog mr-1"></i>Admin</a>
                                            <?php
                                                }
                                            ?>
                                            <button type="submit" name="btnDangXuat" id="btnDangXuat" class="dropdown-item text-primary" ><i class="fas fa-sign-out-alt"></i> Logout</button>
                                        </form>
                                </div>
                            </div>
                            
                        </div>
                        
                    <?php
                    }
                    ?>

                

            </div>

        </div>


        </div>
    </nav>
<script>
    $(function(){
        if($('.search-txt').val()==null){
        $('#search').attr('hidden',true);
    }
    })
    
</script>
</body>

</html>