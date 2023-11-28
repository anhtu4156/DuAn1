<?php
function thongke()
{
    $sql = "SELECT dm.id, dm.ten_loai_dv 'danhmuc', dv.ten_dv, COUNT(bt.id_dv) 'soluong',MIN(gia) 'gia_min',MAX(gia) 'gia_max', AVG(gia) 'gia_avg'  FROM dich_vu dv JOIN bien_the_dv bt ON dv.id = bt.id_dv JOIN loai_dv dm on dv.id_loai_dv= dm.id GROUP BY dm.id, dm.ten_loai_dv ORDER BY soluong DESC";
    $result = pdo_query($sql);
    return $result;
}
