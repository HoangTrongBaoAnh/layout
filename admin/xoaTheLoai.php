<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("./../lib/DataProvider.php");
include_once("./../lib/quantri.php");
?>
<?php
$idTL=$_GET['id'];
settype($idTL,"int");
$qr="DELETE FROM chitiettheloai WHERE idtheloai=$idTL";
DataProvider::ExecuteQuery($qr);
$qr="DELETE FROM theloai WHERE idtheloai='$idTL'";
DataProvider::ExecuteQuery($qr);
header("location:listTheLoai.php");
?>