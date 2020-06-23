<?php
session_start();
if (isset($_SESSION['iduser']) and $_SESSION['idgroup'] != 1) {
    header("location:/layout/index.php");
}
include_once("./../lib/DataProvider.php");
include_once("./../lib/quantri.php");
?>
<?php
$id = $_GET['id'];
settype($id, "int");
$qr="DELETE FROM user WHERE iduser='$id'";
DataProvider::ExecuteQuery($qr);
header("location:listUser.php");
?>
