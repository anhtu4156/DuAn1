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




?>