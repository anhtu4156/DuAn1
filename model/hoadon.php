<?php 
include "pdo.php";
function ct_hoa_don_get_all(){
    $sql="select * from ct_hoa_don";
    return pdo_query($sql);
}
function insert_ct_hoadon($id_dv,$id_hd,$id_tk,$id_bien_the,$trang_thai){
         $sql="INSERT INTO sanpham (name,price,img,mota,iddm) VALUES ('$id_dv','$id_hd','$id_tk','$id_bien_the','$trang_thai')";
         pdo_execute($sql);
}
function insert_ct_thongtin($ngaydat,$gio,$nguoihen,$sdt,$id_dv,$id_loai_dong_vat,$id_can_nang){
    $sql="INSERT INTO thong_tin (ngay_dat,gio,nguoi_hen,sdt,id_dv,id_loai_dong_vat,id_can_nang) VALUES ('$ngaydat','$gio','$nguoihen','$sdt','$id_dv','$id_loai_dong_vat','$id_can_nang')";
    pdo_execute($sql);
}











?>