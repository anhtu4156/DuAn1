<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../model/pdo.php";
include "../model/admin/danhmuc_dv.php";
include "../model/admin/dich_vu.php";
include "../model/admin/thongke.php";
include "../model/taikhoan.php";
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
        // thống kê
        case "thongke":
            $thongke = thongke();
            include "module/thongke/list.php";
            break;
        //biểu đồ
        case "bieudo":
            $thongke = thongke();
            include "module/thongke/bieudo.php";
            break;
        // quản lý tài khoản
        case "taikhoan":
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        case "khoa_kh":
            if(isset($_GET['id_kh']) && $_GET['id_kh']){
                $idkh = $_GET['id_kh'];
                khoa_kh($idkh);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        case "mokhoa_kh":
            if(isset($_GET['id_kh']) && $_GET['id_kh']){
                $idkh = $_GET['id_kh'];
                mo_kh($idkh);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        // xóa kh
        case "xoa_kh":
            if(isset($_GET['id_kh']) && $_GET['id_kh']){
                $idkh = $_GET['id_kh'];
                xoa_kh($idkh);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        //thùng rác
        case "thungrac_kh":

            
            $tk_kh = thungrac();
            
            
            include "module/taikhoan/thungrac.php";
            break;
        //khôi phục kh
        case "khoiphuc_kh":
            if(isset($_GET['id_kh']) && $_GET['id_kh']){
                $idkh = $_GET['id_kh'];
                mo_kh($idkh);
            }
            $tk_kh = thungrac();
            
            include "module/taikhoan/thungrac.php";
            break;
    ///////////
        //khóa nv
        case "khoa_nv":
            if(isset($_GET['id_nv']) && $_GET['id_nv']){
                $idnv = $_GET['id_nv'];
                khoa_nv($idnv);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        // mở khóa nv
        case "mokhoa_nv":
            if(isset($_GET['id_nv']) && $_GET['id_nv']){
                $idnv = $_GET['id_nv'];
                mo_nv($idnv);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        // xóa nv
        case "xoa_nv":
            if(isset($_GET['id_nv']) && $_GET['id_nv']){
                $idnv = $_GET['id_nv'];
                xoa_nv($idnv);
            }
            $tk_nv = get_tk_nv();
            $tk_kh = get_tk_kh();
            
            $list_tk= get_all_user();
            include "module/taikhoan/list.php";
            break;
        // thùng rác nv
        case "thungrac_nv":
            $tk_nv = thungrac_nv();
            
            include "module/taikhoan/thungrac_nv.php";
            break;
         //khôi phục nv
         case "khoiphuc_nv":
            if(isset($_GET['id_nv']) && $_GET['id_nv']){
                $idnv = $_GET['id_nv'];
                mo_nv($idnv);
            }
            $tk_nv = thungrac_nv();
            
            include "module/taikhoan/thungrac_nv.php";
            break;
        // thêm khách hàng
        case "them_kh":
            if (isset($_POST['register']) && $_POST['register']) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $repass = $_POST['repassword'];
                if ((strlen($user) >= 2) && ($pass === $repass) && ($pass != '')) {
                    insert_taikhoan($user, $pass, $email);
                    $thanhcong = "Đăng ký thành công, bạn đã có thể đăng nhập";
                }
            }
            include "module/taikhoan/add_kh.php";
            break;
        // thêm nhân viên
        case "them_nv":
            if (isset($_POST['register']) && $_POST['register']) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $dv = $_POST['dv'];
                $ca = $_POST['ca'];
                $repass = $_POST['repassword'];
                if ((strlen($user) >= 2) && ($pass === $repass) && ($pass != '') && $dv != '' && $ca != '') {
                    insert_taikhoan_nv($user, $pass, $email,$dv, $ca);
                    $thanhcong = "Đăng ký thành công, bạn đã có thể đăng nhập";
                }
            }
            $ca = get_calam();
            $listdichvu = $listdichvu = loadall_dv();
            include "module/taikhoan/add_nv.php";
            break;

        // hóa đơn

        case "hoadon":
            
            include "module/hoadon/list.php";
            break;
    }
} else {
    include "content.php";
}

include "footer.php";
