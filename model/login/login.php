<?php

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

function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        unset($_SESSION['role']);
    }
}