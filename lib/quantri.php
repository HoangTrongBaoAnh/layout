
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
    $data=DataProvider::ExecuteQuery("SELECT iduser,tendangnhap,matkhau,email,ten,sdt,hinh,idgroup FROM user WHERE iduser='$id'");
    return $data;
}

// ----------------------Thể loại----------------------
function getThongTinTheLoaiByID($id){
$data=DataProvider::ExecuteQuery("SELECT tentheloai,tentheloai_khongdau FROM theloai WHERE idtheloai='$id'");
return $data;
}

function getListGame(){
    $data=DataProvider::ExecuteQuery("SELECT g.idgame,g.tengame,g.giatien,h.tenhinh FROM game g,hinh h WHERE g.idgame=h.idgame AND h.idloaihinh=1");
    return $data;
}

function getTatCaTheLoaiQuaID($id){
    $data=DataProvider::ExecuteQuery("SELECT tentheloai FROM chitiettheloai ct, theloai tl ,game g WHERE ct.idgame=g.idgame AND ct.idtheloai=tl.idtheloai AND g.idgame=$id");
    return $data;
}
function getListIDTheLoaiByIDGame($id){
    $data=DataProvider::ExecuteQuery("SELECT idtheloai FROM chitiettheloai WHERE idgame='$id'");
    return $data;
}

// ---------lay ds game--------------------
function getListGameMain(){
    $data=DataProvider::ExecuteQuery("SELECT * FROM game g,hinh h WHERE g.idgame=h.idgame AND h.idloaihinh=1 limit 0,4");
    return $data;
}

// ---------lay chi tiet game--------------------

function getDetailGame($idgame){
    $data=DataProvider::ExecuteQuery("SELECT * FROM game WHERE idgame=$idgame");
    return $data;
}
function getThumbnailGame($idgame){
    $data=DataProvider::ExecuteQuery("SELECT tenhinh FROM game,hinh WHERE game.idgame=$idgame AND game.idgame=hinh.idgame AND hinh.idloaihinh=1");
    return $data;
}
function getCarouselGame($idgame){
    $data=DataProvider::ExecuteQuery("SELECT tenhinh FROM game,hinh WHERE game.idgame=$idgame AND game.idgame=hinh.idgame AND hinh.idloaihinh=2");
    return $data;
}

// ---------lay hoa don--------------------
function getListBill($iduser,$idgame){
    $data=DataProvider::ExecuteQuery("SELECT * FROM game g,hoadon hd,user u WHERE g.idgame=hd.idgame AND u.iduser=hd.iduser and u.iduser = $iduser and g.idgame=$idgame");
    return $data;
}

// ---------Hàm chuyển chữ thành không dấu--------------------
function stripUnicode($str){
    if(!$str) return false;
     $unicode = array(
       'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
       'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
       'd'=>'đ',
       'D'=>'Đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',	  
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
       'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
       'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
       'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
       'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
     );
  foreach($unicode as $khongdau=>$codau) {
      $arr=explode("|",$codau);
      $str = str_replace($arr,$khongdau,$str);
  }
  return $str;
  }
  function changeTitle($str){
      $str=trim($str);
      if ($str=="") return "";
      $str =str_replace('"','',$str);
      $str =str_replace("'",'',$str);
      $str = stripUnicode($str);
      $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
      
      // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
      $str = str_replace(' ','-',$str);
      return $str;
  }

?>

