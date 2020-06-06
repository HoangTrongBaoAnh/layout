<?php
session_start();

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Chi tiết</title>
</head>
<script>
    $(document).ready(function() {
       
        $('#video_game').html(function(i, html) {
            return html.replace(/(?:https:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?([^<]+)/g, '<center><iframe style="border: 1px solid red;" width="100%" height="500px" src="http://www.youtube.com/embed/$1?modestbranding=1&rel=0&wmode=transparent&theme=light&color=white" frameborder="0" allowfullscreen></iframe></center>')
 
        });

    });

    // hàm random chuỗi 5 ký tự
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }

    // hàm làm key
    function myFunction() {
        x=makeid();
        y=makeid();
        z=makeid();
        d=makeid();
        key=x+" - "+y+" - "+z+" - "+d;
        swal("Mua thành công","KEY: "+key, "success"); 
    }
    

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
                    <img src="./image/hình/GTA.jpg" alt="">
                </div>
                <p class="text-center"><span>GRAND THEFT AUTO 5</span></p>
                <p class="text-center">479.0000 VNĐ</p>
                <div class="btn btn-primary w-100 popup" onclick="myFunction()">MUA NGAY
                    <!-- <span class="popuptext" id="myPopup">Mua thành công</span> -->

                </div>
                <div class="border-top mt-4">
                    Thể loại:
                    <div class="badge badge-pill badge-primary">Hành động</div>
                    <div class="badge badge-pill badge-primary">Mô phỏng</div>
                    <div class="badge badge-pill badge-primary">Thế giới mở</div>
                    <div class="mt-1">Nhà phát hành: <span>Rockstar</span></div>
                    <div class="mt-1">Năm phát hành: <span>2013</span></div>
                </div>
                <div class="border-top mt-4">
                    <h5 class="text-center bg-dark text-light">CẤU HÌNH TỐI THIỂU</h5>
                    <div id="cauhinh2">
                        <p>OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64
                            Bit Service Pack 2*</p>
                        <p>(*NVIDIA video card recommended if running Vista OS)</p>
                        <p>Processor: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core
                            Processor (4 CPUs) @ 2.5GHz</p>
                        <p>Memory: 4 GB RAM</p>
                        <P>Graphics: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)</P>
                        <p>Hard Drive: 65 GB available space</p>
                        <p>Sound Card: 100% DirectX 10 compatible</p>
                    </div>

                </div>
                <div class="border-top mt-4">
                    <h5 class="text-center bg-dark text-light">CẤU HÌNH ĐỀ NGHỊ</h5>
                    <div id="cauhinh2">
                        <P>OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1</P>
                        <p>Processor: Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)</p>
                        <p>Memory: 8 GB RAM</p>
                        <p>Graphics: NVIDIA GTX 660 2GB / AMD HD 7870 2GB</p>
                        <p>Hard Drive: 65 GB available space</p>
                        <p>Sound Card: 100% DirectX 10 compatible</p>
                    </div>

                </div>

            </div>
            <div class="col-8 border">
                <div id="video_game">
                    
<div>https://www.youtube.com/watch?v=HqZXw5M6qQY</div>                        
                  
                </div>
                <p class="m-4 mt-4">
                    Grand Theft Auto V (còn được gọi là Grand Theft Auto Năm, GTA 5  hoặc GTA V) là trò chơi video được phát triển bởi Rockstar North thuộc hãng Rockstar Games. Là phiên bản thứ năm trong Dòng trò chơi Grand Theft Auto  và là phần kế tiếp của Grand Theft Auto IV . Bản gốc của trò chơi chính thức được phát hành vào ngày 17 Tháng 9 năm 2013 cho phiên bản Xbox 360 và PlayStation 3. Trò chơi cũng đã được phát hành cho phiên bản Xbox One và PlayStation 4  vào ngày 18 tháng 11 năm 2014, sau đó phát hành cho PC vào ngày 14 tháng 4 năm 2015.

Trò chơi nằm trong mạch truyện chính của series Grand Theft Auto, mạch truyện này được tính là từ khi bắt đầu nội dung của trò chơi Grand Theft Auto IV (2008), không liên hệ nội dung đến các phần trước Grand Theft Auto IV. Nằm trong tiểu bang hư cấu San Andreas, mô phỏng Nam California, câu chuyện nói về ba tên tội phạm và nỗ lực của họ trong việc thực hiện các cuộc tấn công trong thế giới ngầm bên cạnh là chống lại chính phủ và các thế lực khác. Trò chơi được thiết kế theo kiểu thế giới mở cho phép người chơi tự do đi khắp nơi, các vùng nông thôn, rừng núi, hoang mạc và thành phố hư cấu Los Santos, mô phỏng thành phố Los Angeles ngoài đời.  </br>

                </br>Trò chơi hỗ trợ chơi theo góc nhìn thứ nhất (FPS - First Person Shooter) và thứ ba (TPS - Third Person Shooter), di chuyển trong thế giới bằng cách điều hướng chân để đi bộ hoặc phương tiện giao thông. Người chơi điều khiển ba nhân vật chính xuyên suốt trò chơi và có thể chuyển đổi điều khiển qua lại giữa các nhân vật ở ngoài hoặc trong nhiệm vụ (một số phân đoạn trong nhiệm vụ buộc người chơi phải điều khiển một nhân vật nhất định hoặc phải chuyển đổi sang nhân vật khác). Câu chuyện chủ yếu xoay quanh những việc của tội phạm như trộm cướp, đánh nhau, liên hệ đến việc bắn súng và lái xe. Hệ thống cảnh sát trong trò chơi sẽ luôn cố gắng kiểm soát người chơi khi thực hiện những hành vi tội ác đến mức độ nào đó bằng cách bắt vào tù hoặc giết, số sao truy nã (tối đa là năm sao) càng cao thì mức độ nguy hiểm của cảnh sát đối với nhân vật càng tăng, tương tự như những phần Grand Theft Auto trước đó. Grand Theft Auto Online , chế độ chơi trực tiếp nhiều người chơi, cho phép lên đến 30 người chơi cùng khám phá thế giới, làm nhiệm vụ, tham gia các trò chơi như đánh nhau, đua xe,...</br>

            </br>Trò chơi được phát triển ngay sau khi phát hành Grand Theft Auto IV và được thực hiện giữa nhiều studio của Rockstar Games trên toàn thế giới. Nhóm phát triển đã dựa nhiều yếu tố trong cơ chế trò chơi từ các trò chơi trước đó của họ như Red Dead Redemption và Max Payne 3, và thiết kế trò chơi xung quanh ba nhân vật chính để đổi mới lối chơi so với những phiên bản trò chơi trước. Phần lớn công việc tạo trò chơi là công đoạn tạo ra thế giới mở, và các thành viên trong nhóm phát triển đã đến California để nghiên cứu thực địa nơi đây bằng cách chụp nhiều bức ảnh, quay video rồi gửi cho đội thiết kế.

Là trò chơi được mong chờ nhất trong năm 2013, Grand Theft Auto V đã phá vỡ kỷ lục bán hàng của ngành công nghiệp game và trở thành sản phẩm giải trí tăng doanh thu nhanh nhất trong lịch sử, kiếm được 800 triệu USD trong ngày đầu tiên và 1 tỷ USD trong ba ngày. Nó đã nhận được sự ủng hộ rộng rãi, cùng nhiều nhận xét tích cực, khen ngợi về cách thiết kế nhân vật, thế giới mở, đồ họa và lối chơi. Tuy nhiên, tương tự như các phần trò chơi trước, nó cũng vấp phải không ít tranh cãi, kiện tụng về nội dung bạo lực, phân biệt giới tính... Được đánh giá là một trong những trò chơi nổi tiếng nhất của thế hệ thứ 7 (tính từ giai đoạn cuối năm 2005 trở đi) và được công nhận là một trong những trò chơi hay nhất từng được thực hiện, nó đã giành được giải thưởng vào cuối năm là giải thưởng Game of the Year (Trò chơi của năm). Tính đến hiện tại, GTA 5 đã bán được trên 90 triệu bản trò chơi trên toàn thế giới và là một trong những trò chơi video bán chạy nhất mọi thời đại.

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
                                <div class="carousel-item active">
                                    <img src="./image/hình/ob_477681_cau-hinh-may-tinh-choi-gta-5.jpg"
                                        style="width: 100%">

                                    <div class="slide-text">

                                    </div>

                                </div>
                                <div class="carousel-item ">
                                    <img src="./image/hình/gta-5-full-cho-pc.jpg" style="width: 100%" ;>
                                    <div class="slide-text">

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="./image/hình/GameHubVn-Muon-Zombie-xuat-hien-trong-GTA-5-Day-la-nhung-ban-Mod-ban-phai-cai-4.jpg"
                                        style="width: 100%">
                                    <div class="slide-text">

                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="./image/hình/screenshot4f367a5e3-3012-404f-b81e-c39e0e6c59537b2e4880-2ac9-432a-8314-ff047803065d.webp"
                                        style="width: 100%">
                                    <div class="slide-text">

                                    </div>
                                </div>
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