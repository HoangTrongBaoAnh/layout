<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>admin page</title>
    <link rel="stylesheet" href="layout.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<style>
    tr,
    td,
    table {
        border: 1px solid;
    }

    table {
        border-collapse: collapse;
    }
</style>
<body>
    <div class="container">
        <div id="hangtieude">TRANG QUẢN TRỊ
            <div style="width:200px;float:right">

                Chào anh áaaa

            </div>
        </div>
        <div id="hang2">
            <?php require "menu.php" ?>
        </div>
        <div style="margin-top:100px">
            <form action="" method="POST"></form>
            <table style="width:100%">
            <tr><th colspan="5" class="text-center">THÔNG TIN HÓA ĐƠN</th></tr>
            <tr><td><input type="date"></td><td colspan="3" class="text-center"><input type="submit" value="Duyệt"></input></td><td><input type="date" class="float-right"></td></tr>
                <tr><td>idHoaDon</td><td>idGame</td><td>idUser</td><td>Gia</td><td>Ngay</td></tr>
                <tr><td>{idHoaDon}</td><td>{idGame}</td><td>{idUser}</td><td>{Gia}</td><td>{Ngay}</td></tr>
                <tr><td>{idHoaDon}</td><td>{idGame}</td><td>{idUser}</td><td>{Gia}</td><td>{Ngay}</td></tr>
                <tr><td>{idHoaDon}</td><td>{idGame}</td><td>{idUser}</td><td>{Gia}</td><td>{Ngay}</td></tr>
                <tr><td>{idHoaDon}</td><td>{idGame}</td><td>{idUser}</td><td>{Gia}</td><td>{Ngay}</td></tr>
            </table>
        </div>
    </div>


</body>

</html>