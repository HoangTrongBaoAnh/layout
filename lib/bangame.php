<?php
    function laytheloai(){
        $data=DataProvider::ExecuteQuery("SELECT idtheloai, tentheloai FROM theloai");
        return $data;
    }
    function laygame(){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game,hinh WHERE hinh.idgame=game.idgame AND hinh.idloaihinh=1");
        return $data;
    }
    function laygametheotheloai($idtheloai){
        $data=DataProvider::ExecuteQuery("SELECT game.idgame,tenhinh, tengame, giatien FROM game, hinh , chitiettheloai WHERE game.idgame=chitiettheloai.idgame AND game.idgame=hinh.idgame AND chitiettheloai.idtheloai=$idtheloai AND hinh.idloaihinh=1");
        return $data;
    }
    function lay4game(){
        $data=DataProvider::ExecuteQuery("SELECT * FROM game,hinh WHERE hinh.idgame=game.idgame AND hinh.idloaihinh=1 ORDER BY game.idgame DESC LIMIT 0,4");
        return $data;
    }
?>