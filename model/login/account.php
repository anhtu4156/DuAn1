<?php

function get_user($user){
    $sql="SELECT * FROM `tai_khoan` WHERE `id` = $user";
    $data =  pdo_query_one($sql);
    return $data;
}

function capnhat_tk($id,$user,$email,$date,$address,$tel){
    $sql ="UPDATE `tai_khoan` SET `ten_tai_khoan` = '$user', `email` = '$email', `so_dien_thoai` = '$tel', `ngay_sinh` = '$date', `dia_chi` = '$address' WHERE `tai_khoan`.`id` = '$id';";
    pdo_execute($sql);
}

function capnhat_mk($id, $pass) {
    $sql ="UPDATE `tai_khoan` SET `mat_khau` = '$pass' WHERE `tai_khoan`.`id` = '$id';";
    pdo_execute($sql);
}