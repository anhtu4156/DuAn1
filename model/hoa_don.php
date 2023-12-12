<?php
include_once "pdo.php";

function insert_hoadon($ngay_dat_lich,$khoang_gio,$id_tk,$id_dv,$id_nv, $id_dl){
    $sql="INSERT INTO hoa_don (ngay_dat_lich,id_khoang_gio,id_tk,id_dv,id_nv,id_dl) 
    VALUES ('$ngay_dat_lich','$khoang_gio','$id_tk','$id_dv','$id_nv','$id_dl')";
    pdo_execute($sql);
}
function get_hd_dv_nv(){
    $sql="SELECT hoa_don.id,hoa_don.ngay_dat_lich,hoa_don.trang_thai_tt,dich_vu.ten_dv,nhan_vien.ten_nv,nhan_vien.id as id_nv FROM dich_vu JOIN hoa_don ON dich_vu.id = hoa_don.id_dv
    JOIN nhan_vien ON nhan_vien.id= hoa_don.id_nv
    ORDER BY hoa_don.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function get_tttt($id_dl){
    $sql="SELECT * from hoa_don where id_dl=".$id_dl;
    return pdo_query_one($sql);
 }
 //print_r(get_tttt(51));
// $x=get_hd_dv_nv();
// extract($x);
// echo $id;
function get_hd_cl(){
    $sql="SELECT ca_lam.ca_lam, hoa_don.id from hoa_don join ca_lam on hoa_don.id_khoang_gio=ca_lam.id
    order by hoa_don.id desc
    limit 1";
    return pdo_query_one($sql);
}
function update_trang_thai($id){
    $sql="UPDATE hoa_don SET trang_thai_tt='1' where id=".$id;
    pdo_execute($sql);
}
function get_hd($id_tk){
    $sql="SELECT id as id_hd,id_nv,ngay_dat_lich,trang_thai_tt FROM hoa_don where id_tk=".$id_tk;
    return pdo_query($sql);
}

//admin
// lấy ds hóa đơn
function get_hd_admin(){
    $sql = "SELECT hd.id, hd.ngay_dat_lich, tk.ten_tai_khoan, tk.dia_chi, dv.ten_dv, hd.trang_thai_tt, cl.ca_lam FROM hoa_don hd JOIN tai_khoan tk ON tk.id = hd.id_tk 
    JOIN dich_vu dv ON dv.id = hd.id_dv
    JOIN ca_lam cl ON cl.id = hd.id_khoang_gio WHERE hd.status != 1 ORDER BY hd.id DESC";
    $data = pdo_query($sql);
    return $data;
}
// lấy ds hóa đơn theo id
function get_hd_admin_id($id){
    $sql = "SELECT hd.id, hd.ngay_dat_lich, hd.id_khoang_gio, hd.id_dv, tk.ten_tai_khoan, tk.dia_chi, dv.ten_dv, hd.trang_thai_tt, cl.ca_lam, dv.id as id_dv FROM hoa_don hd JOIN tai_khoan tk ON tk.id = hd.id_tk 
    JOIN dich_vu dv ON dv.id = hd.id_dv
    JOIN ca_lam cl ON cl.id = hd.id_khoang_gio WHERE hd.status != 1 and hd.id = $id";
    $data = pdo_query_one($sql);
    return $data;
}
//lấy ds thùng rác hóa đơn
function get_thungrac_hd(){
    $sql = "SELECT hd.id, hd.ngay_dat_lich, tk.ten_tai_khoan, tk.dia_chi, dv.ten_dv, hd.trang_thai_tt, cl.ca_lam FROM hoa_don hd JOIN tai_khoan tk ON tk.id = hd.id_tk 
    JOIN dich_vu dv ON dv.id = hd.id_dv
    JOIN ca_lam cl ON cl.id = hd.id_khoang_gio WHERE hd.status = 1";
    $data = pdo_query($sql);
    return $data;
}
// đếm ds hóa đơn
function countHd() {
    $sql = "SELECT COUNT(hd.id) sl FROM hoa_don hd where hd.status !=1";
    $data = pdo_query($sql);
    return $data;
}
// đếm ds thùng rác
function countHd_tr() {
    $sql = "SELECT COUNT(hd.id) sl FROM hoa_don hd where hd.status =1";
    $data = pdo_query($sql);
    return $data;
}
// xóa hóa đơn vào thùng rác
function xoa_hd($id) {
    $sql = "UPDATE `hoa_don` SET `status`='1' WHERE id = $id";
    pdo_execute($sql);
}
// khôi phục order từ thùng rác
function khoiphuc_hd($id){
    $sql = "UPDATE `hoa_don` SET `status`='0' WHERE id = $id";
    pdo_execute($sql);
}
// xóa hd vv
function xoa_vv_hd($id){
    $sql = "DELETE FROM `hoa_don` WHERE id = $id";
    pdo_execute($sql);
}
function xoa_hd_theo_dl($id){
    $sql = "DELETE FROM `hoa_don` WHERE id_dl = $id";
    pdo_execute($sql);
}
function get_hd_theo_dl($id){
    $sql="SELECT * FROM `hoa_don` where id_dl=".$id;
    return pdo_query_one($sql);
}
// print_r(get_hd_theo_dl(51)) ;
// echo get_hd_theo_dl(51)['id'];
// lấy ds dv 
function laydv(){
    $sql = "SELECT id as iddv, ten_dv FROM `dich_vu` ";
    $data = pdo_query($sql);
    return $data;
}
// lấy ds ca làm 
function ca(){
    $sql = "SELECT id as id_ca, ca_lam FROM `ca_lam` ";
    $data = pdo_query($sql);
    return $data;
}

// update hóa đơn

function update_hd($id, $ngaydat, $calam, $dv, $tt){
    $sql = "UPDATE `hoa_don` SET `ngay_dat_lich`='$ngaydat',`id_dv`='$dv',`trang_thai_tt`='$tt',`id_khoang_gio`='$calam' WHERE id = $id";
    pdo_execute($sql);
}

?>