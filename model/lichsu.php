

<?php
include_once "pdo.php";
function get_id_bien_the($id_thu_cung, $id_khoang_can, $id_dich_vu)
{
    $sql = "SELECT id as id_bien_the ,gia FROM bien_the_dv where id_loai_dong_vat=" . $id_thu_cung . " and id_kich_thuoc=" . $id_khoang_can . " and id_dv=" . $id_dich_vu . "";
    return pdo_query_one($sql);
}
//print_r( get_id_bien_the(1,1,1));


function insert_ct_hoa_don($id_hd, $id_tk, $id_bien_the, $id_nv)
{
    $sql = "INSERT INTO ct_hoa_don (id_hd,id_tk,id_bien_the,id_nv) values ('$id_hd','$id_tk','$id_bien_the','$id_nv')";
    pdo_execute($sql);
}
function get_cthd_hd_cl($id_tk)
{
    $sql = "SELECT hoa_don.ngay_dat_lich, ca_lam.ca_lam from ct_hoa_don join hoa_don on ct_hoa_don.id_hd=hoa_don.id
                                                            join ca_lam on hoa_don.id_khoang_gio=ca_lam.id
                                                            where ct_hoa_don.id_tk=" . $id_tk;
    return pdo_query($sql);
}
// echo "<pre>";
// print_r(get_cthd_hd_cl(1));
// echo "</pre>";
function get_cthd_bt_dv($id_tk){
    $sql = "SELECT dich_vu.ten_dv from ct_hoa_don join bien_the_dv on ct_hoa_don.id_bien_the=bien_the_dv.id
    join dich_vu on bien_the_dv.id_dv=dich_vu.id
    where ct_hoa_don.id_tk=" . $id_tk;
return pdo_query($sql);
}
//print_r(get_cthd_bt_dv(1));
function get_cthd_nv($id_tk){
    $sql="SELECT nhan_vien.ten_nv from ct_hoa_don join nhan_vien on ct_hoa_don.id_nv=nhan_vien.id
    where ct_hoa_don.id_tk=".$id_tk;
    return pdo_query($sql);
}
function get_cthd($id_tk){
    $sql="SELECT * FROM ct_hoa_don where id_tk=".$id_tk;
    return pdo_query($sql);
}
//print_r(get_cthd_nv(1));
?>