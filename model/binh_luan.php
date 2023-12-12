<?php
include_once "pdo.php";
function insert_bl($ngay_bl,$id_tk,$noi_dung,$id_dv){
    $sql="INSERT INTO binh_luan(ngay_bl,id_tk,noi_dung,id_dv) VALUES ('$ngay_bl','$id_tk','$noi_dung','$id_dv')";
    pdo_execute($sql);
}
function load_all_bl($id_dv){
    $sql="SELECT * FROM binh_luan where id_dv=".$id_dv;
    return pdo_query($sql);
}
function load_all_bl_home(){
    $sql="SELECT * FROM binh_luan join tai_khoan on binh_luan.id_tk=tai_khoan.id limit 0,4";
    return pdo_query($sql);
}

// load bl admin
function load_bl_admin($keyw,$iddv){
    $sql = "SELECT bl.id,tk.dia_chi, bl.noi_dung, bl.ngay_bl, tk.ten_tai_khoan, dv.ten_dv FROM binh_luan bl join tai_khoan tk on bl.id_tk = tk.id join dich_vu dv on bl.id_dv = dv.id where `status` = 0";
    if($keyw!=""){
        $sql.=" and ten_tai_khoan like '%".$keyw."%'";
    }
    if($iddv>0){
        $sql.=" and id_dv ='".$iddv."'";
    }
    $sql.=" order by id desc";
    return pdo_query($sql);
}

function delete_bl($id){
    $sql="delete from binh_luan where id=".$id;
    pdo_query($sql);
}


?>