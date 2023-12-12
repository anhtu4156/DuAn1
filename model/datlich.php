<?php   
include_once "pdo.php";
// session_start();
// ob_start();


function insert_datlich($ngay_dat_lich,$khoang_gio,$id_tai_khoan,$id_thu_cung,$id_khoang_can,$id_dich_vu,$id_nhan_vien, $id_pttt,$gia){
    $sql="INSERT INTO ds_dat_lich (ngay_dat_lich,id_khoang_gio,id_tai_khoan,id_thu_cung,id_khoang_can,id_dich_vu,id_nhan_vien,id_pttt,gia) 
    VALUES ('$ngay_dat_lich','$khoang_gio','$id_tai_khoan','$id_thu_cung','$id_khoang_can','$id_dich_vu','$id_nhan_vien','$id_pttt','$gia') ";
    pdo_execute($sql);
    
}


function get_dl_dv_tc(){
    $sql="SELECT ds_dat_lich.ngay_dat_lich as ngay,ds_dat_lich.trang_thai_dv,ds_dat_lich.id_dich_vu,ds_dat_lich.id_thu_cung, dich_vu.ten_dv, thu_cung.ten_loai
     FROM dich_vu JOIN ds_dat_lich ON ds_dat_lich.id_dich_vu=dich_vu.id
    JOIN thu_cung ON ds_dat_lich.id_thu_cung=thu_cung.id
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function get_dl_cl(){
    $sql="SELECT ca_lam.ca_lam
    FROM ca_lam JOIN ds_dat_lich ON ds_dat_lich.id_khoang_gio=ca_lam.id
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
//print_r(get_dl_dv_tc());
function get_dl_kt_nv(){
    $sql="SELECT ds_dat_lich.id as id_dl,ds_dat_lich.id_khoang_gio,kich_thuoc.can_nang ,ds_dat_lich.id_khoang_can, ds_dat_lich.id_nhan_vien, nhan_vien.ten_nv, nhan_vien.anh as anh_nv FROM kich_thuoc JOIN ds_dat_lich ON kich_thuoc.id = ds_dat_lich.id_khoang_can
    JOIN nhan_vien ON nhan_vien.id= ds_dat_lich.id_nhan_vien
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
//print_r(get_dl_kt_nv());

function get_dl_pttt_tk(){
    $sql="SELECT phuong_thuc_tt.pttt,ds_dat_lich.id_tai_khoan,tai_khoan.ten_tai_khoan,tai_khoan.email,ds_dat_lich.id_pttt,ds_dat_lich.gia FROM phuong_thuc_tt JOIN ds_dat_lich ON phuong_thuc_tt.id = ds_dat_lich.id_pttt
    JOIN tai_khoan ON ds_dat_lich.id_tai_khoan=tai_khoan.id
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}

function get_all_dl($id_tk){
    $sql="SELECT * from ds_dat_lich where id_tai_khoan=".$id_tk;
    return pdo_query($sql);
}
// echo "<pre>";
// print_r(get_all_dl($_SESSION['user_id']));
// echo "</pre>";



function update_dl($ngay_dat_lich,$khoang_gio,$id_thu_cung,$id_khoang_can,$id_dich_vu,$id_nhan_vien, $id_pttt,$gia,$id_dl){
    $sql="UPDATE ds_dat_lich set ngay_dat_lich='$ngay_dat_lich',id_khoang_gio='$khoang_gio',id_thu_cung='$id_thu_cung',id_khoang_can='$id_khoang_can',id_dich_vu='$id_dich_vu',id_nhan_vien='$id_nhan_vien',id_pttt='$id_pttt',gia='$gia'where id=".$id_dl;
    pdo_execute($sql);
}



function get_ca_lam($id){
    $sql="SELECT ca_lam.ca_lam from ca_lam where id=".$id;
    return pdo_query_one($sql);
}
function get_ten_nv($id){
    $sql="SELECT nhan_vien.ten_nv from nhan_vien where id=".$id;
    return pdo_query_one($sql);
}
//  echo '<pre>';
// // //var_dump(get());
// // print_r(get_1());
//  print_r(get_dl_dv_tc());
//  print_r(get_dl_kt_nv());
//  print_r(get_dl_pttt_tk());
// //print_r(get_datlich());
//  echo '</pre>';

function get_ls($id_tk){
    $sql="SELECT * FROM ds_dat_lich where id_tai_khoan=".$id_tk;
    return pdo_query($sql);
}
function count_nv($id_nv,$id_cl){
    $sql="SELECT count(id) from ds_dat_lich 
	where id_nhan_vien=".$id_nv." AND id_khoang_gio=".$id_cl." AND trang_thai_dv='0'
    GROUP BY id_nhan_vien";
    return pdo_query_one($sql);
}


// lấy ds order
function loadOrder() {
    $sql = "SELECT dl.id, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt where dl.status != 1";
    $data = pdo_query($sql);
    return $data;
}
// đếm ds order
function countOrder() {
    $sql = "SELECT COUNT(dl.id) sl FROM ds_dat_lich dl where dl.status !=1";
    $data = pdo_query($sql);
    return $data;
}
// lấy order theo id
function load_order_id($id) {
    $sql = "SELECT dl.id, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt WHERE dl.id = '$id'";
    $data = pdo_query_one($sql);
    return $data;
}
// update order
function update_order($id, $gia, $ngay, $pt, $tt){
    $sql = "UPDATE `ds_dat_lich` SET `ngay_dat_lich`='$ngay',`id_pttt`='$pt',`gia`='$gia',`trang_thai_dv`='$tt' WHERE id = '$id'";
    return pdo_execute($sql);
}
// xóa order vào thùng rác
function xoa_order($id){
    $sql = "UPDATE `ds_dat_lich` SET `status`='1' WHERE id = $id";
    pdo_execute($sql);
}
// xóa order vv
function xoa_vv_order($id){
    $sql = "DELETE FROM `ds_dat_lich` WHERE id = $id";
    pdo_execute($sql);
}

// khôi phục order từ thùng rác
function khoiphuc_order($id){
    $sql = "UPDATE `ds_dat_lich` SET `status`='0' WHERE id = $id";
    pdo_execute($sql);
}


// load ds order trong thùng rác
function thungrac_order() {
    $sql = "SELECT dl.id, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt where dl.status = 1";
    $data = pdo_query($sql);
    return $data;
}
// load order cần xác nhận để làm 
function load_don_choxacnhan($idnv){
    $sql = "SELECT dl.id, dl.id_nhan_vien, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl 
    JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan 
    JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt
    JOIN nhan_vien nv ON nv.id = dl.id_nhan_vien where dl.status = 0 and dl.id_nhan_vien ='$idnv' and dl.trang_thai_xac_nhan = 0";
    $data = pdo_query($sql);
    return $data;
}
// load order của nhân viên
function loadOrder_nv($idnv) {
    $sql = "SELECT dl.id, dl.id_nhan_vien, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl 
    JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan 
    JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt
    JOIN nhan_vien nv ON nv.id = dl.id_nhan_vien where dl.status = 0 and dl.id_nhan_vien ='$idnv' and dl.trang_thai_xac_nhan = 1";
    $data = pdo_query($sql);
    return $data;
}

// đồng ý tiếp nhận đơn đặt

function xacnhan_don($id_don){
    $sql = "UPDATE `ds_dat_lich` SET `trang_thai_xac_nhan`='1' WHERE id = $id_don";
    pdo_execute($sql);
}


// hủy tiếp nhận đơn đặt
function huy_don($id_don){
    $sql = "UPDATE `ds_dat_lich` SET `trang_thai_xac_nhan`='2' WHERE id = $id_don";
    pdo_execute($sql);
}

// danh sách đơn bị hủy

function ds_donhuy($idnv) {
    $sql = "SELECT dl.id, dl.id_nhan_vien, tk.ten_tai_khoan, tk.dia_chi, dl.gia, dl.ngay_dat_lich, pt.pttt, dl.trang_thai_dv FROM ds_dat_lich dl 
    JOIN tai_khoan tk ON tk.id = dl.id_tai_khoan 
    JOIN phuong_thuc_tt pt ON pt.id = dl.id_pttt
    JOIN nhan_vien nv ON nv.id = dl.id_nhan_vien where dl.status = 0 and dl.id_nhan_vien ='$idnv' and dl.trang_thai_xac_nhan = 2";
    $data = pdo_query($sql);
    return $data;
}

// khôi phục đơn bị hủy
function khoiphuc_don($id_don){
    $sql = "UPDATE `ds_dat_lich` SET `trang_thai_xac_nhan`='0' WHERE id = $id_don";
    pdo_execute($sql);
}

// xóa vv đơn đặt
function xoa_vv_dondat($id_don){
    $sql = "DELETE FROM `ds_dat_lich` where id = $id_don";
    pdo_execute($sql);
}

// xác nhận hoàn thành đơn hàng
function duyetdon($id){
    $sql = "UPDATE `ds_dat_lich` SET `trang_thai_dv` = 1 where id = $id";
    pdo_execute($sql);
}

?>