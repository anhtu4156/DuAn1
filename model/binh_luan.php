<?php
include_once "pdo.php";
function insert_bl($ngay_bl,$id_tk,$noi_dung,$id_dv){
    $sql="INSERT INTO binh_luan(ngay_bl,id_tk,noi_dung,id_dv) VALUES ('$ngay_bl','$id_tk','$noi_dung','$id_dv')";
    pdo_execute($sql);
}
function load_all_bl($id_dv){
    $sql="SELECT * FROM binh_luan where id_dv=".$id_dv;
    return pdo_query($sql);
}
function load_all_bl_home(){
    $sql="SELECT * FROM binh_luan join tai_khoan on binh_luan.id_tk=tai_khoan.id limit 0,4";
    return pdo_query($sql);
}
// echo strtotime('2023-12-18');
// echo "<pre>";
// echo "</pre>";
// echo strtotime(date('Y-m-d'));
// echo "<pre>";
// echo strtotime('2023-12-16')-strtotime(date('Y-m-d'));


?>