<?php
include_once "pdo.php";

function insert_hoadon($ngay_dat_lich,$khoang_gio,$id_tk,$id_dv,$id_nv){
    $sql="INSERT INTO hoa_don (ngay_dat_lich,id_khoang_gio,id_tk,id_dv,id_nv) 
    VALUES ('$ngay_dat_lich','$khoang_gio','$id_tk','$id_dv','$id_nv')";
    pdo_execute($sql);
}
function get_hd_dv_nv(){
    $sql="SELECT hoa_don.id,hoa_don.ngay_dat_lich,hoa_don.trang_thai,dich_vu.ten_dv,nhan_vien.ten_nv,nhan_vien.id as id_nv FROM dich_vu JOIN hoa_don ON dich_vu.id = hoa_don.id_dv
    JOIN nhan_vien ON nhan_vien.id= hoa_don.id_nv
    ORDER BY hoa_don.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function get_hd_cl(){
    $sql="SELECT ca_lam.ca_lam, hoa_don.id from hoa_don join ca_lam on hoa_don.id_khoang_gio=ca_lam.id
    order by hoa_don.id desc
    limit 1";
    return pdo_query_one($sql);
}
function update_trang_thai($id){
    $sql="UPDATE hoa_don SET trang_thai='1' where id=".$id;
    pdo_execute($sql);
}
function get_hd($id_tk){
    $sql="SELECT id as id_hd,id_nv,ngay_dat_lich FROM hoa_don where id_tk=".$id_tk;
    return pdo_query($sql);
}


//print_r(get_hd(1)) ;
?>