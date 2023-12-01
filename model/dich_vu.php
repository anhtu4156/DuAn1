<?php
include_once "pdo.php";

function get_all_dv(){
    $sql="select * from dich_vu";
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


?>