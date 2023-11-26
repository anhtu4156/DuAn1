<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../model/pdo.php";
include "../model/admin/danhmuc_dv.php";
include "../model/admin/dich_vu.php";
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

            // dịch vụ
        case "them_dv":
            if (isset($_POST['them']) && ($_POST['them'])) {
                $tendv = isset($_POST['ten_dv']) ? $_POST['ten_dv'] : '';
                $danhmuc = isset($_POST['danhmuc_dv']) ? $_POST['danhmuc_dv'] : '';
                $mota = isset($_POST['mo_ta']) ? $_POST['mo_ta'] : '';

                if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
                    $hinh = $_FILES['file']['name'];
                    $target_dir = "assets/images/upload/";
                    $target_file = $target_dir . basename($_FILES['file']['name']);

                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                        // Bạn có thể thêm mã xử lý khi upload ảnh thành công ở đây
                    } else {
                        // Bạn có thể thêm mã xử lý khi upload ảnh không thành công ở đây
                    }

                    
                } else {
                    // Xử lý trường hợp không có ảnh được chọn
                }
                them_dichvu($tendv, $danhmuc, $hinh, $mota);
                $thanhcong = "Thêm thành công";
            }


            $listdanhmuc_dv = loadall_danhmuc_dv();
            include "module/dich_vu/add.php";
            break;
        case "dich_vu":
            if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                $keyw=$_POST['keyw'];
                $iddm=$_POST['iddm'];
            }else{
                $keyw="";
                $iddm=0;
            }
            $listdanhmuc_dv= loadall_danhmuc_dv();
            $listdichvu = loadall_dv($keyw,$iddm);
            include "module/dich_vu/list.php";
            break;
        case "sua_dv":
            if(isset($_GET['id_dv'])&&($_GET['id_dv']) != ""){
                $iddv = $_GET['id_dv'];
                if (isset($_POST['sua_dv']) && $_POST['sua_dv']) {
                    
                    $tendv = $_POST['ten_dv'];
                    $danhmuc = $_POST['danhmuc_dv'];
                    $mota = $_POST['mo_ta'];
                    if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
                        $hinh = $_FILES['file']['name'];
                        $target_dir = "assets/images/upload/";
                        $target_file = $target_dir . basename($_FILES['file']['name']);
    
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                            // Bạn có thể thêm mã xử lý khi upload ảnh thành công ở đây
                        } else {
                            // Bạn có thể thêm mã xử lý khi upload ảnh không thành công ở đây
                        }
    
                        
                    } else {
                        // Xử lý trường hợp không có ảnh được chọn
                    }
                    update_dv($iddv, $hinh, $tendv, $danhmuc,$mota);
                    $thanhcong = "Sửa thành công";
                }
                $loaddv = loaddv_theoid($iddv);
            }
            $listdanhmuc_dv = loadall_danhmuc_dv();
            include "module/dich_vu/update.php";
            break;
        case "xoa_dv":
            if (isset($_GET['id_dv']) && $_GET['id_dv'] != "") {
                $iddv = $_GET['id_dv'];
                delete_dv($iddv);
            }
            $listdichvu = loadall_dv();
            include "module/dich_vu/list.php";
            break;
    }
} else {
    include "content.php";
}

include "footer.php";
