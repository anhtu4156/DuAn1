<?php

//dang ky
function insert_taikhoan($user,$pass,$email){
    $sql="INSERT INTO `tai_khoan` ( `ten_tai_khoan`, `mat_khau`, `email`) VALUES ( '$user', '$pass','$email') ";
    pdo_execute($sql);
}
// đăng nhập
function dangnhap($user, $pass) {
    $sql = "SELECT * FROM tai_khoan WHERE ten_tai_khoan='$user' and mat_khau='$pass'";
    
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != "") {
        // Lưu ID người dùng vào session sau khi đăng nhập thành công
        $_SESSION['user'] = $user;
        $_SESSION['user_id'] = $taikhoan['id'];
        $_SESSION['role'] = $taikhoan['vai_tro'];
        return "Đăng nhập thành công";
    } else {
        return "Thông tin tài khoản sai";
    }
}
// đăng xuất
function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        unset($_SESSION['role']);
    }
}
// cập nhật
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

// lấy all tài khoản

function get_all_user() {
    $sql = "SELECT * FROM `tai_khoan` ";
    $result = pdo_query($sql);
    return $result;
}

// lấy all tài khoản nhân viên

function get_tk_nv(){
    $sql = "SELECT * FROM nhan_vien";
    $result = pdo_query($sql);
    return $result;
}