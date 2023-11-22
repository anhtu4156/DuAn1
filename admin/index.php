<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../model/pdo.php";
include "../model/danhmuc_dv.php";
// include "model/pdo.php";


include "header.php";
include "leftbar.php";
include "topbar.php";


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // danh mục dịch vụ
        case "danhmuc_dv":
            $listdanhmuc_dv = loadall_danhmuc_dv();
            include "module/danhmuc_dv/list.php";
            break;
        case "them_danhmuc_dv":
            if (isset($_POST['them']) && $_POST['them']) {
                $ten_danhmuc_dv = $_POST['ten_danhmuc_dv'];
                $mota_danhmuc_dv = $_POST['mota_danhmuc_dv'];

                them_danhmuc_dv($ten_danhmuc_dv, $mota_danhmuc_dv, $trangthai_danhmuc_dv);
            }
            $listdanhmuc_dv = loadall_danhmuc_dv();
            include "module/danhmuc_dv/add.php";
            break;
        case "sua_danhmuc_dv":
            if (isset($_GET['iddm_dv']) && $_GET['iddm_dv'] != "") {
                $id = $_GET['iddm_dv'];
                if (isset($_POST['sua']) && $_POST['sua']) {
                    $ten_danhmuc_dv = $_POST['ten_danhmuc_dv'];
                    $mota_danhmuc_dv = $_POST['mota_danhmuc_dv'];
                    // format time
                    $get_date = $_POST['ngay_tao'];
                    $dateTimeObject = new DateTime($get_date);
                    $ngay_tao = $dateTimeObject->format('Y-m-d H:i:s');
                    update_danhmuc($id, $ten_danhmuc_dv, $mota_danhmuc_dv, $ngay_tao);
                }
                $loaddm = load_danhmuc_dv_theoid($_GET['iddm_dv']);
            }
            include "module/danhmuc_dv/update.php";
            break;
        case "xoa_danhmuc_dv":
            if (isset($_GET['iddm_dv']) && $_GET['iddm_dv'] != "") {
                $id = $_GET['iddm_dv'];
                delete_danhmuc($id);
            }
            $listdanhmuc_dv = loadall_danhmuc_dv();
            include "module/danhmuc_dv/list.php";
            break;
    }
} else {
    include "content.php";
}

include "footer.php";
