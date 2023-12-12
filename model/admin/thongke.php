<?php
function thongke()
{
    $sql = "SELECT dm.id, dm.ten_loai_dv 'danhmuc', dv.ten_dv, COUNT(bt.id_dv) 'soluong',MIN(gia) 'gia_min',MAX(gia) 'gia_max', AVG(gia) 'gia_avg'  FROM dich_vu dv JOIN bien_the_dv bt ON dv.id = bt.id_dv JOIN loai_dv dm on dv.id_loai_dv= dm.id GROUP BY dm.id, dm.ten_loai_dv ORDER BY soluong DESC";
    $result = pdo_query($sql);
    return $result;
}

function thongke_order_month(){
    $sql = "SELECT MONTH(ngay_dat_lich) AS month, COUNT(*) AS tong
    FROM ds_dat_lich
    GROUP BY MONTH(ngay_dat_lich)
    ORDER BY month;";
    $result = pdo_query($sql);
    return $result;
}
function thongke_order_day(){
    $sql = "SELECT COUNT(*) AS tong FROM ds_dat_lich
    WHERE DATE(ngay_dat_lich) = CURRENT_DATE";
    $result = pdo_query($sql);
    return $result;
}
?>