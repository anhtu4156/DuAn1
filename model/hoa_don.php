<?php
include_once "pdo.php";

function insert_hoadon($ngay_dat_lich,$khoang_gio,$id_tk,$id_dv,$id_nv){
    $sql="INSERT INTO hoa_don (ngay_dat_lich,khoang_gio,id_tk,id_dv,id_nv) 
    VALUES ('$ngay_dat_lich','$khoang_gio','$id_tk','$id_dv','$id_nv')";
    pdo_execute($sql);
}
function get_hd_dv_nv(){
    $sql="SELECT hoa_don.id,hoa_don.ngay_dat_lich,hoa_don.trang_thai, hoa_don.khoang_gio,dich_vu.ten_dv,nhan_vien.ten_nv FROM dich_vu JOIN hoa_don ON dich_vu.id = hoa_don.id_dv
    JOIN nhan_vien ON nhan_vien.id= hoa_don.id_nv
    ORDER BY hoa_don.id desc
    LIMIT 1";
    return pdo_query_one($sql);
}
function update_trang_thai($id){
    $sql="UPDATE hoa_don SET trang_thai='1' where id=".$id;
    pdo_execute($sql);
}


//print_r(get_hd_dv_nv());
?>