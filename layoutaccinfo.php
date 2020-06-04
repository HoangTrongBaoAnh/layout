<html>

<head>
    <link rel="stylesheet" href="styleinfoacc.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>    <stlye>

    </stlye>
    <script>

        $(function () {
            $(".tab a").click(function () {
                var elm = $(this);
                if (!elm.parent("li").hasClass("active")) {
                    elm.parent("li")
                        .siblings()
                        .removeClass("active");
                    elm.parent("li").addClass("active");
                    elm.parents(".tab")
                        .next()
                        .children(".tabcontent1 div")
                        .hide();
                    $(this.hash).fadeIn();
                }
                return false;
            });
        });
    </script>

</head>

<body style="background-color: #f1f2f6;">
    <nav id="nav-placeholder"></nav>
    <div class="col-12"
        style="background-image: linear-gradient(to right,#a29bfe, #9b59b6);; text-align: center; height: 140px; padding: 10px; color: white;">
        <h1>Hồ sơ của tôi</h1>
        <p style="font-size: 20px;">Bạn có thể thay đổi thông tin cá nhân tại đây</p>
    </div>
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-4 left1">
                <div style="background-color: #444343; color:white; text-align: center;">
                    <br>
                    <img src="../image/frog.jpg" style="width: 160px; height: 160px;" class="rounded-circle">
                    <br>
                    <br>
                    <div>
                        Nguyen Van A
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-8 tab-area">
                <ul class="tab clearfix1">
                    <li class="active"><a href="#tab1" class="active">Thông Tin Tài khoản</a></li>
                    <li><a href="#tab2">Sửa Thông tin</a></li>
                    <li><a href="#tab3">Lịch sử giao dịch</a></li>
                </ul>
                <div class="tabcontent1">
                    <div id="tab1">
                        <p style="background-color: white; padding : 5px;"><b>Tên đăng nhập:</b> deptraikoloithoat123
                        </p>
                        <p style="background-color: white; padding : 5px;"><b>Email:</b> 1ngay2em@yahoo.com</p>
                        <p style="background-color: white; padding : 5px;"><b>Tên:</b> Nguyen Van A</p>
                        <p style="background-color: white; padding : 5px;"><b>Sdt:</b> 09999999999</p>
                    </div>
                    <div id="tab2">
                        <form action="" method="POST">
                            <input type="password" name="mkcu" placeholder="Mật Khẩu Hiện Tại">
                            <input type="password" name="mkmoi" placeholder="Mật Khẩu Mới">
                            <input type="password" placeholder="Nhập Lại Mật Khẩu Mới">
                            <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
                        </form>
                        <form action="" method="POST">
                            <input type="text" name="emailcu" placeholder="Email Hiện Tại">
                            <input type="text" name="mkmoi" placeholder="Email Mới">
                            <input type="text" placeholder="Nhập Lại Email Mới">
                            <input type="submit" name="doimatkhau" value="Đổi Email">

                        </form>
                        <form action="" method="post">
                            <label > THAY ĐỔI ẢNH ĐẠI DIỆN</label><br>
                            <input type="file" name="" id="">
                        </form>
                    </div>
                    <div id="tab3"> 
                        <table id="tb" class="display" style="width: 100%;">
                            <thead>
                                <tr>
                                    <td colspan="4">
                                        <input  type="checkbox" name="abc" onchange="anhien(this.checked)" class="anhien"> Ẩn/Hiện
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên Game</td>
                                    <td> <label>MyKey</label></td>
                                    <td>Ngày</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>cyperpunker</td>
                                    <td > <label class="abc" style="display: none;"> jGzoc - Kmyll - gbKNW - 9cjPE </label></td>
                                    <td>2000-7-5</td>
                                </tr> 
                                <tr>
                                    <td>1</td>
                                    <td>cyperpunker</td>
                                    <td > <label class="abc" style="display: none;"> jGzoc - Kmyll - gbKNW - 9cjPE </label> </td>
                                    <td>2000-7-5</td>
                                </tr> 
                                <tr>
                                    <td>1</td>
                                    <td>cyperpunker</td>
                                    <td > <label class="abc" style="display: none;"> jGzoc - Kmyll - gbKNW - 9cjPE </label> </td>
                                    <td>2000-7-5</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>cyperpunker</td>
                                    <td > <label class="abc" style="display: none;"> jGzoc - Kmyll - gbKNW - 9cjPE </label> </td>
                                    <td>2000-7-5</td>
                                </tr>  
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <footer style="margin-top: 500px;"></footer>
    <script>
        $(document).ready(function() {
            $("#nav-placeholder").load("/blocks/nav/nav.html");
            $("footer").load("/blocks/footer/footer.html");
        });
        function anhien(checked){
            if(checked == true){
                $(".abc").fadeIn();
            }else{
                $(".abc").fadeOut();
            }
        }
    </script>
</body>

</html>