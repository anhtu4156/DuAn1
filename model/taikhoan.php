<?php
//dang ky
function insert_taikhoan($user,$pass,$email){
    $sql="INSERT INTO `tai_khoan` ( `ten_tai_khoan`, `mat_khau`, `email`) VALUES ( '$user', '$pass','$email') ";
    pdo_execute($sql);
}
//dang ky nhân viên
function insert_taikhoan_nv($user,$pass,$email,$dv,$ca,$vt){
    $sql="INSERT INTO `nhan_vien` ( `ten_nv`, `pass`, `email`,`id_dv`, `ca_lam`,`vai_tro`) VALUES ( '$user', '$pass','$email','$dv','$ca','$vt') ";
    pdo_execute($sql);
}
// đăng nhập khách hàng
function dangnhap($user, $pass) {
    $sql = "SELECT * FROM tai_khoan WHERE ten_tai_khoan='$user' and mat_khau='$pass'";
    
    $taikhoan = pdo_query_one($sql);
    
    if ($taikhoan != "") {
        if($taikhoan['trang_thai']==0){
            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $taikhoan['id'];
           
            return "Đăng nhập thành công";
        }else{
            return " Tài khoản của bạn đã bị khoá. Vui lòng liên hệ qua 0123456789 để được hỗ trợ";
        }
        // Lưu ID người dùng vào session sau khi đăng nhập thành công
       
    } else {
        return "Thông tin tài khoản sai";
    }
}


// đăng xuất
function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        
    }
}
// cập nhật
function get_user($user){
    $sql="SELECT * FROM `tai_khoan` WHERE `id` = $user";
    $data =  pdo_query_one($sql);
    return $data;
}

function capnhat_tk($id,$user,$email,$date,$address,$tel,$anh){
    $sql ="UPDATE `tai_khoan` SET `ten_tai_khoan` = '$user', `email` = '$email', `so_dien_thoai` = '$tel', `ngay_sinh` = '$date', `dia_chi` = '$address' ,`anh`='$anh' WHERE `tai_khoan`.`id` = '$id';";
    pdo_execute($sql);
}
function capnhat_tk_kh_anh($id,$user,$email,$date,$address,$tel){
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
    $sql = "SELECT nv.id, nv.ten_nv, nv.sdt,nv.email, nv.status, dv.ten_dv FROM nhan_vien  nv join `dich_vu` dv on nv.id_dv = dv.id where `status` != 3";
    $result = pdo_query($sql);
    return $result;
}
// lấy tài khoản khách hàng
function get_tk_kh(){
    $sql = "SELECT * FROM tai_khoan WHERE vai_tro = 0 and trang_thai != 3";
    $result = pdo_query($sql);
    return $result;
}

//Khóa tài khoản khách hàng

function khoa_kh($idkh){
    $sql = "UPDATE tai_khoan SET `trang_thai` = 1 WHERE id = '$idkh'";
    return pdo_execute($sql);
}   
// mở tk kh
function mo_kh($idkh){
    $sql = "UPDATE tai_khoan SET `trang_thai` = 0 WHERE id = '$idkh'";
    return pdo_execute($sql);
}
// xóa tk kh
function xoa_kh($idkh){
    $sql = "UPDATE tai_khoan SET `trang_thai` = 3 WHERE id = '$idkh'";
    return pdo_execute($sql);
}
// xóa vv kh
function xoa_vv_kh($id){
    $sql = "DELETE FROM `tai_khoan` WHERE id = $id";
    pdo_execute($sql);
}
// thùng rác
function thungrac(){
    $sql = "SELECT * FROM tai_khoan WHERE vai_tro = 0 and trang_thai = 3";
    $result = pdo_query($sql);
    return $result;
}
//Khóa tài khoản nhân viên

function khoa_nv($idnv){
    $sql = "UPDATE nhan_vien SET `status` = 1 WHERE id = '$idnv'";
    return pdo_execute($sql);
}   
// mở tk kh
function mo_nv($idnv){
    $sql = "UPDATE nhan_vien SET `status` = 0 WHERE id = '$idnv'";
    return pdo_execute($sql);
}
// xóa tk kh
function xoa_nv($idnv){
    $sql = "UPDATE nhan_vien SET `status` = 3 WHERE id = '$idnv'";
    return pdo_execute($sql);
}
// xóa vv nv
function xoa_vv_nv($id){
    $sql = "DELETE FROM `nhan_vien` WHERE id = $id";
    pdo_execute($sql);
}
// thùng rác
function thungrac_nv(){
    $sql = "SELECT * FROM nhan_vien  nv join `dich_vu` dv on nv.id_dv = dv.id where `status` = 3";
    $result = pdo_query($sql);
    return $result;
}

// lấy ca làm 

function get_calam(){
    $sql = "SELECT * FROM ca_lam";
    $result = pdo_query($sql);
    return $result;
}
function get_3_nv(){
    $sql = "SELECT * FROM nhan_vien limit 1,3";
    $result = pdo_query($sql);
    return $result;
}


function get_ten_tk($id){
    $sql="SELECT ten_tai_khoan from tai_khoan where id=".$id;
    return pdo_query_one($sql);
}
// lấy vai trò

function get_vaitro(){
    $sql = "SELECT id as id_vt, ten_vaitro FROM vai_tro";
    $data = pdo_query($sql);
    return $data;

}
function get_anh_nv($id){
    $sql = "SELECT anh FROM nhan_vien WHERE id=".$id;
    $data = pdo_query_one($sql);
    return $data;
}