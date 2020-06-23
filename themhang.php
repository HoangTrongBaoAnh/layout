
<?php
session_start();
include_once('lib/DataProvider.php');
include_once('lib/quantri.php');
$iduser = $_SESSION['iduser'];
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date("Y/m/d H:i:sa");
$key= $_POST['key'];
$idgame =  $_POST['idgame'];
$qr = "INSERT INTO `hoadon` (`idhoadon`, `code`, `idgame`, `iduser`, `ngay`) VALUES (NULL,'$key', '$idgame', '$iduser', '$date');";
DataProvider::ExecuteQuery($qr);
//header("location: ./gameDetail.php?idgame="+$idgame);
?>
