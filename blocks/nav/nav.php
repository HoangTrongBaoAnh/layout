<?php
if (isset($_REQUEST['btnDangXuat'])) {
    unset($_SESSION['iduser']);
    unset($_SESSION['tendangnhap']);
    unset($_SESSION['matkhau']);
    unset($_SESSION['idgroup']);
    unset($_SESSION['hinh']);
}
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
        .dropleft:hover .dropdown-menu {
            display: block;
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
                    <li class="nav-item">
                        <a class="nav-link" href="./bangame/admin/index.php">Admin</a>
                    </li>



                </ul>
                


                    <?php
                    if (!isset($_SESSION['iduser'])) {


                    ?>
                    <form class="form-inline my-2 my-lg-0" method="POST">
                        <button class="btn btn-success my-2 my-sm-0 ml-3" type="submit">
                            <a class="textcl text-light" href="xxx.php">
                                Login
                            </a>
                        </button>
                        <button class="btn btn-success my-2 my-sm-0 ml-3" type="submit">
                            <a class="textcl text-light" href="sign up.php">
                                Đăng ký
                            </a>
                        </button>
                    </form>
                    <?php
                    } else {
                    ?>
                        <div>
                            <div class="btn-group dropleft " data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <img  height="48" src="./image/frog.jpg">
                                <div class="dropdown-menu">
                                    <form method="POST">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <input class="dropdown-item" name="btnDangXuat" id="btnDangXuat" type="submit" value="logout">
                                    </form>
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