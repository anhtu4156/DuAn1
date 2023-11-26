<?php

//dang ky
function insert_taikhoan($user,$pass,$email){
    $sql="INSERT INTO `tai_khoan` ( `ten_tai_khoan`, `mat_khau`, `email`) VALUES ( '$user', '$pass','$email') ";
    pdo_execute($sql);
}