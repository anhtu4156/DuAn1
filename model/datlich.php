<?php   
include_once "pdo.php";

function insert_datlich($ngay_dat_lich,$khoang_gio,$id_tai_khoan,$id_thu_cung,$id_khoang_can,$id_dich_vu,$id_nhan_vien, $id_pttt,$gia){
    $sql="INSERT INTO ds_dat_lich (ngay_dat_lich,khoang_gio,id_tai_khoan,id_thu_cung,id_khoang_can,id_dich_vu,id_nhan_vien,id_pttt,gia) 
    VALUES ('$ngay_dat_lich','$khoang_gio','$id_tai_khoan','$id_thu_cung','$id_khoang_can','$id_dich_vu','$id_nhan_vien','$id_pttt','$gia') ";
    pdo_execute($sql);
    
}


function get_dl_dv_tc(){
    $sql="SELECT ds_dat_lich.ngay_dat_lich as ngay, ds_dat_lich.khoang_gio as gio,ds_dat_lich.id_dich_vu,ds_dat_lich.id_thu_cung, dich_vu.ten_dv, thu_cung.ten_loai
     FROM dich_vu JOIN ds_dat_lich ON ds_dat_lich.id_dich_vu=dich_vu.id
    JOIN thu_cung ON ds_dat_lich.id_thu_cung=thu_cung.id
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function get_dl_kt_nv(){
    $sql="SELECT ds_dat_lich.id as id_dl,kich_thuoc.can_nang ,ds_dat_lich.id_khoang_can, ds_dat_lich.id_nhan_vien, nhan_vien.ten_nv FROM kich_thuoc JOIN ds_dat_lich ON kich_thuoc.id = ds_dat_lich.id_khoang_can
    JOIN nhan_vien ON nhan_vien.id= ds_dat_lich.id_nhan_vien
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function get_dl_pttt_tk(){
    $sql="SELECT phuong_thuc_tt.pttt,tai_khoan.ten_tai_khoan,tai_khoan.email,ds_dat_lich.id_pttt,ds_dat_lich.gia FROM phuong_thuc_tt JOIN ds_dat_lich ON phuong_thuc_tt.id = ds_dat_lich.id_pttt
    JOIN tai_khoan ON ds_dat_lich.id_tai_khoan=tai_khoan.id
    ORDER BY ds_dat_lich.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function update_dl($ngay_dat_lich,$khoang_gio,$id_thu_cung,$id_khoang_can,$id_dich_vu,$id_nhan_vien, $id_pttt,$gia,$id_dl){
    $sql="UPDATE ds_dat_lich set ngay_dat_lich='$ngay_dat_lich',khoang_gio='$khoang_gio',id_thu_cung='$id_thu_cung',id_khoang_can='$id_khoang_can',id_dich_vu='$id_dich_vu',id_nhan_vien='$id_nhan_vien',id_pttt='$id_pttt',gia='$gia'where id=".$id_dl;
    pdo_execute($sql);
}

//  echo '<pre>';
// // //var_dump(get());
// // print_r(get_1());
//  print_r(get_dl_dv_tc());
//  print_r(get_dl_kt_nv());
//  print_r(get_dl_pttt_tk());
// //print_r(get_datlich());
//  echo '</pre>';






?>