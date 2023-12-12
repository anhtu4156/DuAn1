<?php
include_once "pdo.php";

function get_all_dv(){
    $sql="select * from dich_vu order by id desc limit 0,6";
    return pdo_query($sql);
}
function get_3_dv(){
    $sql="select * from dich_vu limit 1,3";
    return pdo_query($sql);
}
function load_one_dv($id){
    $sql="select * from dich_vu where id=".$id;
    return pdo_query_one($sql);
}
//  function get_all_thucung(){
//     $sql="select * from thu_cung";
//     return pdo_query($sql);
//  }
 function get_all_nhan_vien(){
    $sql="select * from nhan_vien";
    return pdo_query($sql);
 }

// function get_all_cannang(){
//     $sql="select * from kich_thuoc";
//     return pdo_query($sql);
// }
function get_pttt(){
    $sql="select * from phuong_thuc_tt";
    $data = pdo_query($sql);
    return $data;
 }
function load_dm_dv(){
    $sql="SELECT * from loai_dv";
    return pdo_query($sql);
}
function load_dm_theoid($id){
    $sql="SELECT * from loai_dv where id=".$id;
    return pdo_query_one($sql);
}
function load_ten_dv($id_dv){
    $sql="SELECT ten_dv,id FROM dich_vu where id=".$id_dv;
    return pdo_query_one($sql);
}
// print_r( load_ten_dv(1));

function load_dv_timkiem($kyw){
    $sql= "select * from dich_vu where ten_dv like '%".$kyw."%'";
    $dv=pdo_query($sql); 
    return $dv;
}
//print_r(load_dv_timkiem('ga'));
function load_dv_theodm($iddm){
    $sql= "select * from dich_vu where id_loai_dv=".$iddm;
    $listdv=pdo_query($sql);
    return $listdv;
 }

?>