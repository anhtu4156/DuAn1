<?php
function loadall_danhmuc_dv(){
    $sql="select * from loai_dv order by id desc";
    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc;
}
function loadall_danhmuc_dv1(){
    $sql="select id,ten_loai_dv,ngay_tao,trang_thai,mo_ta as mt from loai_dv order by id desc";
    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc;
}
function them_danhmuc_dv($ten_danhmuc_dv,$mota_danhmuc_dv){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date("Y-m-d");
    $sql = "INSERT INTO `loai_dv` (`ten_loai_dv`, `ngay_tao`, `mo_ta`) VALUES ('$ten_danhmuc_dv','$date','$mota_danhmuc_dv');";
    pdo_execute($sql);   
    
}

function load_danhmuc_dv_theoid($id){
    $sql = "select * from loai_dv where id = " . $id;
    $result = pdo_query_one($sql); 
    return $result;
}

function update_danhmuc($id,$ten_danhmuc_dv, $mota_danhmuc_dv,$ngay_tao){
    $sql = "UPDATE `loai_dv` SET `ten_loai_dv`= '{$ten_danhmuc_dv}', `mo_ta`='{$mota_danhmuc_dv}', `ngay_tao` = '{$ngay_tao}' WHERE `id`= '$id'";
    pdo_execute($sql);
}

function delete_danhmuc($id){
    $sql = "DELETE FROM loai_dv WHERE id=" .$id;
    pdo_execute($sql);
}
?>