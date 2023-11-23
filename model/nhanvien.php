<?php
// hiển thị tất cả nhân viên
function loadall_nhanvien_home(){
    $sql= "select * from nhan_vien where 1 order by id desc limit 0,3 ";
    $listnhanvien= pdo_query($sql);
    return $listnhanvien;
} 

?>