<?php
    include_once "./lib/DataProvider.php";
    $maxacnhan=$_GET['code'];
    $qr=DataProvider::ExecuteQuery("SELECT iduser FROM user WHERE maxacnhan='$maxacnhan' AND xacnhan=0");
    $num=mysqli_num_rows($qr);
    if($num>0){
        $qr=DataProvider::ExecuteQuery("UPDATE user SET xacnhan=1 WHERE maxacnhan=$maxacnhan");
        echo "cam ơn bạn đã xác nhận";
    }else{
        echo "xác nhận ko thành công";
    }
?>