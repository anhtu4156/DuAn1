<?php   
include_once "pdo.php";

function insert_datlich_tt($ngay_dat_lich,$khoang_gio,$nguoi_dat,$thu_cung,$khoang_can,$dich_vu,$nhan_vien,$sdt, $pttt){
    $sql="INSERT INTO ds_dat_lich_tam_thoi VALUES ngay_dat_lich=".$ngay_dat_lich.",khoang_gio=".$khoang_gio."
    ,nguoi_dat=".$nguoi_dat.",thu_cung=".$thu_cung.",khoang_can=".$khoang_can.",dich_vu=".$dich_vu.",nhan_vien=".$nhan_vien.",sdt=".$sdt.",pttt=".$pttt."";
    pdo_execute($sql);
    
}





?>