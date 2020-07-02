<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("./../lib/DataProvider.php");
include_once("./../lib/quantri.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>admin page</title>
    <link rel="stylesheet" href="layout.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
    <!-- Datatable jquery -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- CHARTJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>

<body>
    <div class="container">
        <div id="hangtieude">TRANG QUẢN TRỊ
            <div style="width:400px;float:right">

             <?php echo "Chào anh ". $_SESSION['tendangnhap']?>

            </div>
        </div>
        <div id="hang2">
            <?php include "menu.php" ?>
            
        </div>
        <div style="margin-top:100px">

          
            <p class="text-center" style="font-size: 40px;font-weight: bold;">THÔNG TIN HÓA ĐƠN</p>
            <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Game</th>
                        <th>Mã Người Dùng</th>
                        <th>Key Code</th>
                        <th>Giá</th>
                        <th>Ngày Thanh Toán</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $doanhthu=getAllListBill();
                    while($row_doanhthu=mysqli_fetch_array($doanhthu)){
                    ?>
                    <tr>
                        <td><?php echo $row_doanhthu['idhoadon'] ?></td>
                        <td><?php echo $row_doanhthu['tengame'] ?></td>
                        <td><?php echo $row_doanhthu['iduser'] ?></td>
                        <th><?php echo $row_doanhthu['code'] ?></th>
                        <td><?php echo $row_doanhthu['giatien'] ?></td>
                        <td><?php echo $row_doanhthu['ngay'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div style="margin-top:100px">
                <p style="font-size: 40px;" class="text-center">BIỂU ĐỒ DOANH THU THEO THÁNG</p>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <?php
    $count=1;
    $mang=array();
    while($count<=12){
        $doanhthuthang=DoanhThuTheoThang($count);
        $row_doanhthuthang=$doanhthuthang->fetch_assoc();
        if (!empty($row_doanhthuthang)) {
            array_push($mang, $row_doanhthuthang['TotalSales']);
        }
        else{
            array_push($mang, 0);
        }
            $count++;
    }
    $array_with_data = $mang;
    $data = json_encode($array_with_data);
    ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
           // chartjs
            
            var data = <?php echo $data ?>;
            var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        // The type of chart we want to create
                        type: 'line',

                        // The data for our dataset
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', "August", "September", "October", "November", "December"],
                            datasets: [{
                                label: 'Doanh thu',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: data

                            }]
                        },

                        // Configuration options go here
                        options: {}
                    });
            
    </script>

</body>

</html>