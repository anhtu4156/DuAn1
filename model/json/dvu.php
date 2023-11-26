<?php
include_once "../pdo.php";

function get_all_dv(){
    $sql="select * from dich_vu";
    return pdo_query($sql);
}
echo json_encode(get_all_dv());



?>