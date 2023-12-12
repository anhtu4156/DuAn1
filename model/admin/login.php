<?php

// đăng nhập admin
function dangnhap_admin($email, $pass) {
    $sql = "SELECT * FROM nhan_vien WHERE `email` ='$email' and `pass`='$pass'";
    
    $taikhoan_admin = pdo_query_one($sql);

    if ($taikhoan_admin != "") {
        // Lưu ID người dùng vào session sau khi đăng nhập thành công
        $_SESSION['admin'] = $taikhoan_admin['ten_nv'];
        $_SESSION['admin_id'] = $taikhoan_admin['id'];
        $_SESSION['role'] = $taikhoan_admin['vai_tro'];
        return "Đăng nhập thành công";
    } else {
        return "Thông tin tài khoản sai";
    }
}

// đăng xuất
function dangxuat_admin() {
    if (isset($_SESSION['admin'])) {
        unset($_SESSION['admin']);
        unset($_SESSION['admin_id']);
        unset($_SESSION['role']);
    }
}

// lấy ra tài khoản admin

