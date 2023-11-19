<?php  
include_once "pdo.php";
function insert_binhluan($noidung,$id_tk,$ngay_bl){
    $sql="INSERT INTO binh_luan (noidung,id_tk,ngay_bl) VALUES ('$noidung','$id_tk','$ngay_bl')";
    pdo_execute($sql);
}

function loadAll_bl($id_tk){
    $sql="select * from binhluan where idpro='".$id_tk."'order by id desc ";
    return pdo_query($sql);
}
function loadall_bl_admin(){
    $sql="select * from binh_luan order by id desc ";
    return pdo_query($sql);
}

function delete_bl($id){
    $sql="delete from binh_luan where id=".$id;
    pdo_query($sql);
}



?>