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
    </style>

    <script>
        $( document ).ready(function() {
            $('.dropdown-menu').find('form').click(function (e) {
                e.stopPropagation();
            });
            
        });
        
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
                <form action="" method="post">
                <div class="search-box" style="text-align:center">
                    <input class="search-txt" type="text" name="" placeholder="Type to search">
                    <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
                </div>
                </form>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="danh_muc.php">Danh mục</a>
                    </li>
                </ul>
                


                    <?php
                    if (!isset($_SESSION['iduser'])) {


                    ?>
                   
                        
                            <a class=" btn btn-primary" href="xxx.php">
                                Login
                           
                        </button>
                        
                            <a class=" btn btn-primary" href="sign up.php">
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
                                <div class="dropdown-menu dropdown-menu-right ">
                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="mr-2 ml-1" style="border-radius: 25px;" height="48" src="./image/<?php echo $datathongtin_row['hinh'] ?>"></td>
                                            <td><b style="font-size: 18px;"><?php echo $datathongtin_row['tendangnhap'] ?></b></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 14px;"><?php echo $datathongtin_row['email'] ?></td>
                                        </tr>
                                    </table>
                                        <li class="divider"></li>
                                        <form method="POST">
                                            <a class="dropdown-item" href="layoutaccinfo.php"> <i class="fas fa-home mr-1"></i>Trang cá nhân</a>
                                            <?php
                                                if($_SESSION['idgroup']==1){
                                            ?>
                                                <a class="dropdown-item" href="./bangame/admin/index.php"><i class="fas fa-users-cog mr-1"></i>Admin</a>
                                            <?php
                                                }
                                            ?>
                                            <a class="dropdown-item" href="tmp.php"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
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

</body>

</html>