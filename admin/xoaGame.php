<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("/xampp/htdocs/layout/lib/DataProvider.php");
include_once("/xampp/htdocs/layout/lib/quantri.php");
?>
<?php
$idGame=$_GET['idGame'];
settype($idGame,"int");
$qr="DELETE FROM chitiettheloai WHERE idgame='$idGame'";
DataProvider::ExecuteQuery($qr);
$qr="DELETE FROM hinh WHERE idgame='$idGame'";
DataProvider::ExecuteQuery($qr);
$qr="DELETE FROM game WHERE idgame='$idGame'";
DataProvider::ExecuteQuery($qr);
header("location:listGame.php");


?>