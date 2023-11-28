<?php
include_once "pdo.php";

function get_all_dv(){
    $sql="select * from dich_vu";
    return pdo_query($sql);
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
    return pdo_query($sql);
 }



?>