<?php
session_start();
ob_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] != '') {
} else {
    header("Location: login.php");
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../model/pdo.php";
include "../model/admin/danhmuc_dv.php";
include "../model/admin/dich_vu.php";
include "../model/admin/thongke.php";
include "../model/taikhoan.php";
include "../model/datlich.php";
include "../model/dich_vu.php";
include "../model/hoa_don.php";
include "../model/admin/login.php";
include "../model/binh_luan.php";


include "header.php";
include "leftbar.php";
include "topbar.php";


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    $id_nv = $_SESSION['admin_id'];
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
            //bình luận
       
        case "xoa_bl":
            if (isset($_GET['id_bl'])) {
                delete_bl($_GET['id_bl']);
            }
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $iddv = $_POST['iddv'];
            } else {
                $keyw = "";
                $iddv = 0;
            }
            $dv = laydv();
            $dsbl = load_bl_admin($keyw, $iddv);
            include "module/binhluan/list.php";
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
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $iddm = $_POST['iddm'];
            } else {
                $keyw = "";
                $iddm = 0;
            }
            $listdanhmuc_dv = loadall_danhmuc_dv();
            $listdichvu = loadall_dv($keyw, $iddm);
            include "module/dich_vu/list.php";
            break;
        case "sua_dv":
            if (isset($_GET['id_dv']) && ($_GET['id_dv']) != "") {
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
                    update_dv($iddv, $hinh, $tendv, $danhmuc, $mota);
                    $thanhcong = "Sửa thành công";
                }
                $loaddv = loaddv_theoid($iddv);
            }
            $listdanhmuc_dv = loadall_danhmuc_dv1();
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
            ///////////////////////////////
            //tài khoản kh
        case "taikhoan_kh":

            $tk_kh = get_tk_kh();
            include "module/taikhoan/list_kh.php";
            break;

        case "khoa_kh":
            if (isset($_GET['id_kh']) && $_GET['id_kh']) {
                $idkh = $_GET['id_kh'];
                khoa_kh($idkh);
            }
            $tk_kh = get_tk_kh();

            include "module/taikhoan/list_kh.php";
            break;
        case "mokhoa_kh":
            if (isset($_GET['id_kh']) && $_GET['id_kh']) {
                $idkh = $_GET['id_kh'];
                mo_kh($idkh);
            }
            $tk_kh = get_tk_kh();

            include "module/taikhoan/list_kh.php";
            break;
            // xóa kh
        case "xoa_kh":
            if (isset($_GET['id_kh']) && $_GET['id_kh']) {
                $idkh = $_GET['id_kh'];
                xoa_kh($idkh);
            }
            $tk_kh = get_tk_kh();

            include "module/taikhoan/list_kh.php";
            break;
            // xóa kh vv
        case "xoa_kh_vv":
            if (isset($_GET['id_kh']) && $_GET['id_kh']) {
                $idkh = $_GET['id_kh'];
                xoa_vv_kh($idkh);
            }
            $tk_kh = get_tk_kh();

            include "module/taikhoan/list_kh.php";
            break;
            //thùng rác
        case "thungrac_kh":


            $tk_kh = thungrac();


            include "module/taikhoan/thungrac.php";
            break;
            //khôi phục kh
        case "khoiphuc_kh":
            if (isset($_GET['id_kh']) && $_GET['id_kh']) {
                $idkh = $_GET['id_kh'];
                mo_kh($idkh);
            }
            $tk_kh = thungrac();

            include "module/taikhoan/thungrac.php";
            break;
            ///////////
            // tài khoản nv
        case "taikhoan_nv":
            $tk_nv = get_tk_nv();

            include "module/taikhoan/list_nv.php";
            break;
            //khóa nv
        case "khoa_nv":
            if (isset($_GET['id_nv']) && $_GET['id_nv']) {
                $idnv = $_GET['id_nv'];
                khoa_nv($idnv);
            }
            $tk_nv = get_tk_nv();

            include "module/taikhoan/list_nv.php";
            break;
            // mở khóa nv
        case "mokhoa_nv":
            if (isset($_GET['id_nv']) && $_GET['id_nv']) {
                $idnv = $_GET['id_nv'];
                mo_nv($idnv);
            }
            $tk_nv = get_tk_nv();

            include "module/taikhoan/list_nv.php";
            break;
            // xóa nv
        case "xoa_nv":
            if (isset($_GET['id_nv']) && $_GET['id_nv']) {
                $idnv = $_GET['id_nv'];
                xoa_nv($idnv);
            }
            $tk_nv = get_tk_nv();

            include "module/taikhoan/list_nv.php";
            break;
            // xóa nv vv
        case "xoa_nv_vv":
            if (isset($_GET['id_nv']) && $_GET['id_nv']) {
                $idnv = $_GET['id_nv'];
                xoa_vv_nv($idnv);
            }
            $tk_nv = get_tk_nv();

            include "module/taikhoan/list_nv.php";
            break;
            // thùng rác nv
        case "thungrac_nv":
            $tk_nv = thungrac_nv();

            include "module/taikhoan/thungrac_nv.php";
            break;
            //khôi phục nv
        case "khoiphuc_nv":
            if (isset($_GET['id_nv']) && $_GET['id_nv']) {
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
                $vt = $_POST['vt'];
                $repass = $_POST['repassword'];
                if ((strlen($user) >= 2) && ($pass === $repass) && ($pass != '') && $dv != '' && $ca != '') {
                    insert_taikhoan_nv($user, $pass, $email, $dv, $ca, $vt);
                    $thanhcong = "Đăng ký thành công, bạn đã có thể đăng nhập";
                }
            }
            $vaitro = get_vaitro();
            $ca = get_calam();
            $listdichvu = $listdichvu = loadall_dv();
            include "module/taikhoan/add_nv.php";
            break;
            /////////////////////////
            // đơn đặt
        case "order":
            $count = countOrder();
            $ds = loadOrder();
            include "module/dondat/order.php";
            break;
            // sửa đơn đặt

        case "sua_order":
            if (isset($_GET['id_order']) && $_GET['id_order']) {
                $id = $_GET['id_order'];
                $load = load_order_id($id);
                if (isset($_POST['sua_order']) && $_POST['sua_order']) {
                    $gia = $_POST['gia'];
                    $ngay = $_POST['ngay'];
                    $pt = $_POST['pt'];
                    $tt = $_POST['tt'];
                    update_order($id, $gia, $ngay, $pt, $tt);
                }
            }
            $load_pt = get_pttt();
            include "module/dondat/update_order.php";
            break;
            // xoá đơn đặt vào thùng rác
        case "xoa_order":
            if (isset($_GET['id_order']) && $_GET['id_order']) {
                $id = $_GET['id_order'];
                xoa_order($id);
            }
            $count = countOrder();
            $ds = loadOrder();
            include "module/dondat/order.php";
            break;
            // xoá đơn đặt vĩnh viễn
        case "xoa_ordervv":
            if (isset($_GET['id_order']) && $_GET['id_order'] && isset($_GET['id_hd']) && $_GET['id_hd']) {
                $id = $_GET['id_order'];
                $id_hd = $_GET['id_hd'];
                xoa_hd_theo_dl($id);
                xoa_vv_order($id);
            }
            $count = countOrder();
            $ds = loadOrder();
            include "module/dondat/order.php";
            break;
            // thùng rác order
        case "thungrac_order":
            $ds = thungrac_order();

            include "module/dondat/thungrac_order.php";
            break;

            // khôi phục order từ thùng rác
        case "khoiphuc_order":
            if (isset($_GET['id_order']) && $_GET['id_order']) {
                $id = $_GET['id_order'];
                khoiphuc_order($id);
            }
            $ds = thungrac_order();
            include "module/dondat/thungrac_order.php";
            break;
            //////////////////////////
            // hóa đơn
        case "hoadon":
            $counthd = countHd();
            $dshd = get_hd_admin();
            include "module/hoadon/hoadon.php";
            break;
            // thùng rác hóa đơn 
        case "thungrac_hd":
            $counthd = countHd_tr();
            $dshd = get_thungrac_hd();
            include "module/hoadon/thungrac_hd.php";
            break;
            // xóa hóa đơn vào thùng rác
        case "xoa_hd":
            if (isset($_GET['id_hd']) && $_GET['id_hd']) {
                $id = $_GET['id_hd'];
                xoa_hd($id);
            }
            $counthd = countHd();
            $dshd = get_hd_admin();
            include "module/hoadon/hoadon.php";
            break;
            // Khôi phục hóa đơn
        case "khoiphuc_hd":
            if (isset($_GET['id_hd']) && $_GET['id_hd']) {
                $id = $_GET['id_hd'];
                khoiphuc_hd($id);
            }
            $counthd = countHd_tr();
            $dshd = get_thungrac_hd();
            include "module/hoadon/thungrac_hd.php";
            break;
            // xóa vv hd
        case "xoa_hd_vv":
            if (isset($_GET['id_hd']) && $_GET['id_hd']) {
                $id = $_GET['id_hd'];
                xoa_vv_hd($id);
            }
            $counthd = countHd_tr();
            $dshd = get_thungrac_hd();
            include "module/hoadon/thungrac_hd.php";
            break;
            // sửa hóa đơn
        case "sua_hd":
            if (isset($_GET['id_hd']) && $_GET['id_hd']) {
                $id = $_GET['id_hd'];
                if (isset($_POST['sua_hd']) && $_POST['sua_hd']) {

                    $ngaydat = $_POST['ngay'];
                    $calam = $_POST['ca'];
                    $dv = $_POST['dv'];
                    $tt = $_POST['tt'];
                    update_hd($id, $ngaydat, $calam, $dv, $tt);
                    $thanhcong = "Cập nhật thành công";
                }

                $dshd = get_hd_admin_id($id);
            }
            $dv = laydv();
            $ca = ca();
            include "module/hoadon/update_hd.php";
            break;
            // thêm biến thể dịch vụ
        case "add_bien_the":
            if (isset($_POST['them'])) {
                if ($_POST['dich_vu'] != "" && $_POST['thu_cung'] != "" && $_POST['kich_thuoc'] != "") {
                    $id_dv = $_POST['dich_vu'];
                    $id_tc = $_POST['thu_cung'];
                    $id_kt = $_POST['kich_thuoc'];
                    $gia = $_POST['gia'];
                    $bt = load_bien_the();
                    foreach ($bt as $item) {
                        if ($id_dv == $item['id_dv'] && $id_tc = $item['id_loai_dong_vat'] && $id_kt = $item['id_kich_thuoc']) {
                            $fault = "Biến thể này dã tồn tại";
                            break;
                        } else {
                            insert_bien_the($id_dv, $id_tc, $id_kt, $gia);
                            $thanhcong = "Thêm thành công";
                            break;
                        }
                    }
                } else {
                    $fault = "Vui lòng nhập đủ thông tin";
                }
                //    include "module/bien_the/list.php";

            }
            include "module/bien_the/add.php";

            break;
        case "list_bt":

            $bt = load_bien_the();

            include "module/bien_the/list.php";
            break;
        case "xoa_bt": {
                if (isset($_GET['id_bt']) && $_GET['id_bt'] != "") {
                    $id_bt = $_GET['id_bt'];
                    delete_bt($id_bt);
                    //include "module/bien_the/list.php";
                    $thanhcong = "Xoá thành công";
                }
            }
        case "sua_bt":
            if (isset($_GET['id_bt']) && $_GET['id_bt'] != "") {
                $id = $_GET['id_bt'];
                if (isset($_POST['luu']) && $_POST['luu']) {
                    $id_dv = $_POST['id_dv'];
                    $id_tc = $_POST['id_tc'];
                    $id_kt = $_POST['id_kt'];
                    $gia = $_POST['gia'];
                    update_bt($id, $id_dv, $id_tc, $id_kt, $gia);
                    $thanhcong = "Update thành công";
                }
                $loadbt = load_one_bt($_GET['id_bt']);
            }
            include "module/bien_the/update.php";
            break;
            break;
            /////////////////////////////
            // đăng xuất
        case "logout":
            dangxuat_admin();
            header("Location: index.php");
            break;
            /////////////////////////////
            // xác nhận đơn của nhân viên
        case "xacnhan":
            $count = countOrder();
            $ds = loadOrder_nv($id_nv);
            include "module/nhanvien/dondat.php";
            break;
            // xác nhận đơn tiến hành của nhân viên
        case "xacnhan_don":
            $count = countOrder();
            $ds = load_don_choxacnhan($id_nv);
            include "module/nhanvien/xacnhan_don.php";
            break;

            //đồng ý đơn
        case "tiepnhan_don":
            if (isset($_GET['id_order']) && $_GET['id_order'] != '') {
                $id = $_GET['id_order'];
                xacnhan_don($id);
            }
            $count = countOrder();
            $ds = load_don_choxacnhan($id_nv);
            include "module/nhanvien/xacnhan_don.php";
            break;

            //hủy đơn
        case "huy_don":
            if (isset($_GET['id_order']) && $_GET['id_order'] != '') {
                $id = $_GET['id_order'];
                huy_don($id);
            }
            $count = countOrder();
            $ds = load_don_choxacnhan($id_nv);
            include "module/nhanvien/xacnhan_don.php";
            break;

            // ds đơn hủy
        case "ds_donhuy":
            if (isset($_GET['id_order']) && $_GET['id_order'] != '') {
                $id = $_GET['id_order'];
                // xacnhan_don($id);
            }
            $count = countOrder();
            $ds = ds_donhuy($id_nv);
            include "module/nhanvien/list_donhuy.php";
            break;

            //khôi phục đơn bị hủy
        case "khoiphuc_dondat":
            if (isset($_GET['id_don']) && $_GET['id_don'] != '') {
                $id = $_GET['id_don'];
                khoiphuc_don($id);
            }
            $count = countOrder();
            $ds = ds_donhuy($id_nv);
            include "module/nhanvien/list_donhuy.php";
            break;

            // xóa vv đơn đặt
        case "xoa_dondat_vv":
            if (isset($_GET['id_don']) && $_GET['id_don'] != '') {
                $id = $_GET['id_don'];
                xoa_vv_dondat($id);
            }
            break;
            $count = countOrder();
            $ds = ds_donhuy($id_nv);
            include "module/nhanvien/list_donhuy.php";
            // xác nhận hoàn thành dịch vụ thành công
        case "duyetdon":
            if (isset($_GET['id_order']) && $_GET['id_order'] != '') {
                $id = $_GET['id_order'];
                $thanhtoan = get_tttt($id);
                update_trang_thai($thanhtoan['id']);
                duyetdon($id);
            }
            $count = countOrder();
            $ds = loadOrder_nv($id_nv);
            include "module/nhanvien/dondat.php";
            break;
            case "binhluan":
                if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                    $keyw = $_POST['keyw'];
                    $iddv = $_POST['iddv'];
                } else {
                    $keyw = "";
                    $iddv = 0;
                }
                $dv = laydv();
                $dsbl = load_bl_admin($keyw,$iddv);
                include "module/binhluan/list.php";
                break;
        }
    } else {
        $thongke = thongke_order_month();
        include "content.php";
    }

include "footer.php";
