<?php
    function laytheloai(){
        $data=DataProvider::ExecuteQuery("SELECT tentheloai FROM theloai");
        return $data;
    }
    function laygame(){
        $data=DataProvider::ExecuteQuery("SELECT tenhinh, tengame, giatien FROM game,hinh WHERE hinh.idgame=game.idgame AND hinh.idloaihinh=1");
        return $data;
    }
?>