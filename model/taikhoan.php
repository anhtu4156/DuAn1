<?php  
include_once "pdo.php";
function insert_taikhoan($user,$pass,$email){
    $sql="INSERT INTO tai_khoan (user,pass,email) VALUES ('$user','$pass','$email')";
    pdo_execute($sql);
}
function insert_taikhoan_admin($user,$pass,$email,$role){
    $sql="INSERT INTO taikhoan (user,pass,email,role) VALUES ('$user','$pass','$email','$role')";
    pdo_execute($sql);
}

function getuserinfo($user,$pass){
    $sql="select * from tai_khoan where ten_tk='".$user."' AND mat_khau='".$pass."'";
    $user=pdo_query_one($sql);
    return $user;
}
function getadmininfo($role){
    $sql="select * from tai_khoan where vai_tro='".$role."'";
    $user=pdo_query_one($sql);
    return $user;
}
function getadmininfo1($id,$role){
    $sql="select * from tai_khoan where  id='".$id."' AND vai_tro='".$role."'";
    $user=pdo_query_one($sql);
    return $user;
}
function getuserinfo1($id){
    $sql="select * from tai_khoan where id='".$id."'";
    $user=pdo_query_one($sql);
    return $user;
}

function update_info($id,$user,$pass,$email,$address,$tel){
    $sql="UPDATE tai_khoan set ten_tk='".$user."', mat_khau='".$pass."', email='".$email."', dia_chi='".$address."', so_dien_thoai='".$tel."' where id=".$id;
    pdo_execute($sql);
}

function checkemail($user,$email){
    $sql="select * from tai_khoan where ten_tk='".$user."' AND email='".$email."'";
    $user=pdo_query_one($sql);
    return $user;
}
function kh_get_all(){
    $sql="select * from tai_khoan where vai_tro=0";
    return pdo_query($sql);
}

function tk_get_all(){
    $sql="select * from tai_khoan where vai_tro=1 OR vai_tro=2";
    return pdo_query($sql);
}
function delete_kh($id){
    $sql="delete from tai_khoan where id=".$id;
    pdo_query($sql);
}
?>