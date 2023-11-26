<?php


include_once "../pdo.php";
if (isset($_GET['id_dv'])) {
    $id_dv = $_GET['id_dv'];
    function get_all_nhan_vien($id_dv)
    {
        $sql = "select * from nhan_vien where id_dv=" . $id_dv . "";
        return pdo_query($sql);
    }
    echo json_encode(get_all_nhan_vien($id_dv));

}
