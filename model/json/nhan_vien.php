<?php


include_once "../pdo.php";
if (isset($_GET['id_dv']) && isset($_GET['id_time'])) {
    $id_dv = $_GET['id_dv'];
    $id_time = $_GET['id_time'];
function get_all_nhan_vien($id_dv, $id_time){
    $sql = "SELECT * from nhan_vien where id_dv=".$id_dv." and ca_lam=".$id_time."";
    return pdo_query($sql);
}
echo json_encode(get_all_nhan_vien($id_dv,$id_time));
}

// echo "<pre>";
// print_r(get_all_nhan_vien($id_dv,$id_time));
// echo "</pre>";
?>
