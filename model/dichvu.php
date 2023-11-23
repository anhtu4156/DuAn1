<?php
include_once "pdo.php";
// function insert_dichvu($tendv,$mo_ta,$idloai){
//     $sql="INSERT INTO dich_vu (name) VALUES ('$tendm')";
//     pdo_execute($sql);
// }

// function delete_danhmuc($id){
//     $sql="delete from danhmuc where id=".$id;
//     pdo_query($sql);

// }
function loadAll_dichvu(){
    $sql="select * from dich_vu order by id desc";
    $dichvu=pdo_query($sql);
    return $dichvu;
}
function loadOne_dichvu($id){
    $sql="select * from dich_vu where id=".$id;
    $dv=pdo_query_one($sql);
    return $dv;
}
// function update_danhmuc($id,$tendm){
//     $sql="UPDATE danhmuc set name='".$tendm."' where id=".$id;
//     pdo_execute($sql);
// }

 

?>