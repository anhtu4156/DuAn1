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
    $sql="SELECT ds_dat_lich.ngay_dat_lich as ngay,ds_dat_lich.id_dich_vu,ds_dat_lich.id_thu_cung, dich_vu.ten_dv, thu_cung.ten_loai
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
function get_dl_kt_nv(){
    $sql="SELECT ds_dat_lich.id as id_dl,ds_dat_lich.id_khoang_gio,kich_thuoc.can_nang ,ds_dat_lich.id_khoang_can, ds_dat_lich.id_nhan_vien, nhan_vien.ten_nv FROM kich_thuoc JOIN ds_dat_lich ON kich_thuoc.id = ds_dat_lich.id_khoang_can
    JOIN nhan_vien ON nhan_vien.id= ds_dat_lich.id_nhan_vien
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
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


function get_ls($id_tk){
    $sql="SELECT * FROM ds_dat_lich where id_tai_khoan=".$id_tk;
    return pdo_query($sql);
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

function count_nv($id_nv,$id_cl){
    $sql="SELECT count(id) from ds_dat_lich 
	where id_nhan_vien=".$id_nv." AND id_khoang_gio=".$id_cl."
    GROUP BY id_nhan_vien";
    return pdo_query_one($sql);
}
 //print_r( count_nv(1,1));




?>