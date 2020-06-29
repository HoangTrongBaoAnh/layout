<?php
    function laytheloai(){
        $data=DataProvider::ExecuteQuery("SELECT idtheloai, tentheloai FROM theloai");
        return $data;
    }


    // -----------------------------LẤY THỂ LOẠI ------------------------
    function laygame(){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game,hinh WHERE hinh.idgame=game.idgame AND hinh.idloaihinh=1");
        return $data;
    }
    function laygametheotheloai($idtheloai){
        $data=DataProvider::ExecuteQuery("SELECT game.idgame,tenhinh, tengame, giatien FROM game, hinh , chitiettheloai WHERE game.idgame=chitiettheloai.idgame AND game.idgame=hinh.idgame AND chitiettheloai.idtheloai=$idtheloai AND hinh.idloaihinh=1");
        return $data;
    }
    function lay4game(){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game,hinh WHERE hinh.idgame=game.idgame AND hinh.idloaihinh=1 ORDER BY game.LuotTai DESC LIMIT 1,4");
        return $data;
    }

    // ---------------TIMKIEM-----------------------
    function getGameCanSearch($ten){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game WHERE tengame LIKE '%'.$ten.'%'");
        return $data;
    }
    function getgamecoluottaicaonhat(){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game ORDER BY LuotTai DESC LiMIT 0,1");
        return $data;
    }
?>