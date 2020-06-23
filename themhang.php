
<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once('lib/DataProvider.php');
include_once('lib/quantri.php');
$iduser = $_SESSION['iduser'];
$date = date("Y/m/d");
$key= $_POST['key'];
$idgame =  $_POST['idgame'];
$qr = "INSERT INTO `hoadon` (`idhoadon`, `code`, `idgame`, `iduser`, `ngay`) VALUES (NULL,'$key', '$idgame', '$iduser', '$date');";
DataProvider::ExecuteQuery($qr);
?>
