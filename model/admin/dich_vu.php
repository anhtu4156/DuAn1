<?php

// function loadAll_dv(){
//     $sql="select * from dich_vu order by id desc";
//     $listdichvu= pdo_query($sql);
//     return  $listdichvu;
// }

function loadall_dv($keyw="",$iddm=0){
    $sql="SELECT * from dich_vu where trang_thai = 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and ten_dv like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and id_loai_dv ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

function them_dichvu($tendv, $danhmuc, $hinh,$mota){
    $sql = "INSERT INTO `dich_vu` (`ten_dv`, `anh_dv`, `mo_ta`, `id_loai_dv`, `trang_thai`) VALUES ('$tendv', '$hinh', '$mota', '$danhmuc', '1');";
    $result =pdo_execute($sql);
    return $result;
}

function loaddv_theoid($iddv){
    $sql = "select * from dich_vu where id = " . $iddv;
    $result = pdo_query_one($sql); 
    return $result;
}
function update_dv($iddv, $hinh, $tendv, $danhmuc,$mota){
    $sql = "UPDATE `dich_vu` SET `ten_dv` = '$tendv', `anh_dv` = '$hinh', `mo_ta` = '$mota', `id_loai_dv` = '$danhmuc' WHERE `dich_vu`.`id` = '$iddv';";
    pdo_execute($sql);
}

function delete_dv($iddv){
    $sql = "DELETE FROM dich_vu WHERE id=" .$iddv;
    pdo_execute($sql);
}