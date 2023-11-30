<?php
include_once "../pdo.php";

if (isset($_GET['id_dv']) && isset($_GET['id_thu_cung']) && isset($_GET['id_can_nang'])) {
    $id_dv=$_GET['id_dv'];
    $id_thu_cung=$_GET['id_thu_cung'];
    $id_can_nang=$_GET['id_can_nang'];
    function get_price($id_dv, $id_thu_cung, $id_can_nang)
    {
        $sql = "select * from bien_the_dv where id_dv=" . $id_dv . " AND id_loai_dong_vat=" . $id_thu_cung . " AND id_kich_thuoc=" . $id_can_nang . "";
        return pdo_query($sql);
    }
    echo json_encode(get_price($id_dv, $id_thu_cung, $id_can_nang));
}
