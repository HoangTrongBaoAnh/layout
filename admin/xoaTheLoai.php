<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("/xampp/htdocs/layout/lib/DataProvider.php");
include_once("/xampp/htdocs/layout/lib/quantri.php");
?>
<?php
$idTL=$_GET['id'];
settype($idTL,"int");
$qr="DELETE FROM theloai WHERE idtheloai='$idTL'";
DataProvider::ExecuteQuery($qr);
header("location:listTheLoai.php");
?>