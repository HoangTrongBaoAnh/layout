
<?php
function getListUser(){
    $data=DataProvider::ExecuteQuery("SELECT iduser,tendangnhap,matkhau,hinh,idgroup,email,sdt,ten FROM user");
   return $data;
}
function getListTheLoai(){
    $data=DataProvider::ExecuteQuery("SELECT idtheloai,tentheloai FROM theloai");
    return $data;
}
function getThongTinByID($id){
    $data=DataProvider::ExecuteQuery("SELECT tendangnhap,matkhau,email,ten,sdt,hinh FROM user WHERE iduser='$id'");
    return $data;
}
?>