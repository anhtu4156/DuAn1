<?php
// hiển thị 3 dịch vụ mới nhất
function loadall_dichvu_home(){
    $sql= "select * from dich_vu where 1 order by id desc limit 0,3 ";
    $listdichvu= pdo_query($sql);
    return $listdichvu;
} 
// hiển thị tất cả dịch vụ mới nhất
function loadall_dichvu(){
    $sql= "select * from dich_vu where 1 order by id desc ";
    $listdichvu= pdo_query($sql);
    return $listdichvu;
} 

function loadone_dichvu($id){
    $sql= "select * from dich_vu where id= $id";
    $result = pdo_query_one($sql);
    return $result;
}

?>