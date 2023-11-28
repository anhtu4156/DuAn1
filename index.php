<?php

session_start();
ob_start();
// Các mã nguồn khác có thể ở đây



    include "model/pdo.php";
    include "model/taikhoan.php";
 include "model/datlich.php";
include "model/dich_vu.php";
include "model/hoa_don.php";
    // include "model/sanpham.php";
    // include "model/danhmuc.php";
    // include "model/binhluan.php";
    // include "model/taikhoan.php";


include "view/component/header.php";
// include "global.php";
// $spnew = loadall_sanpham_home();
// $dsdm = loadall_danhmuc();
// $dstop10 = loadall_sanpham_top10();
$phuong_thuc_tt = get_pttt();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "":

            break;
            ////////////////////////////////////////////////////////////////
            // about us
            ////////////////////////////////////////////////////////////////
        case "about":
            include "view/pages/about/about_us.php";
            break;
        case "our_staff":
            include "view/pages/our_staff/our_staff.php";
            break;
        case "ct_our_staff":
            include "view/pages/our_staff/ct_our_staff.php";
            break;
            ////////////////////////////////////////////////////////////////
            // sevice
            ////////////////////////////////////////////////////////////////
        case "service":
            include "view/pages/service/service.php";
            break;
        case "ct_service":
            include "view/pages/service/ct_service.php";
            break;
            ////////////////////////////////////////////////////////////////
            // gallery
            ////////////////////////////////////////////////////////////////
        case "gallery":
            include "view/pages/gallery/gallery.php";
            break;
            ////////////////////////////////////////////////////////////////
            // blogs
            ////////////////////////////////////////////////////////////////
        case "ct_blog":
            include "view/pages/blog/ct_blog.php";
            break;
        case "blog":
            include "view/pages/blog/blog.php";
            break;
            ////////////////////////////////////////////////////////////////
            // shop và sản phẩm
            ////////////////////////////////////////////////////////////////
        case "shop":
            include "view/pages/pet_shop/cua_hang.php";
            break;
        case "ct_sp":
            include "view/pages/pet_shop/ct_sp.php";
            break;
            ///////////////////////////////////////////////////////////////////
            // liên hệ
            ///////////////////////////////////////////////////////////////////
        case "lienhe":
            include "view/pages/about/contact.php";
            break;
            ///////////////////////////////////////////////////////////
        case "":

            break;
        case "":

            break;

            ///////////////////////////////////////////////////////////
        case "":

            break;
            ///////////////////////////////////////////////////////////
            // login
            ///////////////////////////////////////////////////////////
        case "login":
            if (isset($_POST["login"]) && $_POST["login"]) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $thongbao = dangnhap($user, $pass);
                if (isset($_SESSION['user'])) {
                    header("Location: index.php");
                }
            }

            include "view/pages/login/login.php";
            break;
        case "reg":
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
            include "view/pages/login/reg.php";
            break;
            //đăng xuất
        case "logout":
            dangxuat();
            if (!isset($_SESSION['user'])) {
                header("Location: index.php");
            }
            break;
            // cập nhật pro5
        case "profile":
            $userId = "";
            if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
                $userId = $_SESSION['user_id'];
                $info = get_user($userId);
            }
            if (isset($_POST['send']) && $_POST['send']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['adr'];
                $tel = $_POST['sdt'];
                $get_date = $_POST['date'];
                $dateTimeObject = new DateTime($get_date);
                $date = $dateTimeObject->format('Y-m-d H:i:s');
                capnhat_tk($userId, $user, $email, $date, $address, $tel);
                $thongbao = "Cập nhật thành công";
            }
            if (isset($thongbao) && $thongbao != "") {
                header("Location: index.php?act=profile");
            }
            include "view/pages/account/pro5.php";
            break;
            // đổi mk:
        case "pass":
            if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
                $userId = $_SESSION['user_id'];
                $info = get_user($userId);
            }
            if (is_array($info)) {
                extract($info);
            }
            if (isset($_POST['send']) && $_POST['send']) {
                $oldpass = $_POST['oldpass'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if ($oldpass != $mat_khau) {
                    $thongbao = "Mật khẩu không chính xác";
                }
                if (isset($thongbao) == false && $pass != "" && $repass === $pass) {
                    capnhat_mk($userId, $pass);
                    $thanhcong = "Cập nhật thành công";
                }
            }
            include "view/pages/account/pass.php";
            break;
            ////////////////////////////////////////////////////////////
        case "datlich":
            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                include "view/pages/datlich/trang1.php";
                //break;
            } else {
                 header("location:index.php?act=login");
                //include "view/pages/login/login.php";
                $thongbao = "Vui lòng đăng nhập";
                //break;
            }
            break;
        case "xacnhan":
            if (isset($_POST['datlich']) && $_POST['datlich']) {
                if (
                    isset($_POST['ngay']) && $_POST['ngay'] != "" && isset($_POST['gio']) && $_POST['gio'] != "" && isset($_POST['dv']) && $_POST['dv'] != "" &&
                    isset($_POST['dong_vat']) && $_POST['dong_vat'] != "" && isset($_POST['nv']) && $_POST['nv'] != "" && isset($_POST['pttt']) && $_POST['pttt'] != ""
                ) {
                    $ngay_dat_lich = $_POST['ngay'];
                    $khoang_gio = $_POST['gio'];
                    $id_dich_vu = $_POST['dv'];
                    $id_thu_cung = $_POST['dong_vat'];
                    $id_nhan_vien = $_POST['nv'];
                    $id_pttt = $_POST['pttt'];
                    $id_khoang_can = $_POST['can_nang'];
                    $id_tai_khoan = $_POST['id_user'];
                    $gia = $_POST['gia'];
                    insert_datlich($ngay_dat_lich, $khoang_gio, $id_tai_khoan, $id_thu_cung, $id_khoang_can, $id_dich_vu, $id_nhan_vien, $id_pttt, $gia);
                    // echo $nhan_vien;
                    // echo $khoang_can;
                    //echo $pttt;
                    include "view/pages/datlich/trang2.php";
                    break;
                } else {
                    $thongbao = "Vui lòng nhập đầy đủ thông tin";
                    include "view/pages/datlich/trang1.php";
                    break;
                }
                // include "view/pages/datlich/trang2.php";
                // break;
            }
        case "hoanthanh":
            if (isset($_POST['hoanthanh']) && $_POST['hoanthanh']) {
                if (
                    isset($_POST['ngay']) && $_POST['ngay'] != "" && isset($_POST['gio']) && $_POST['gio'] != "" && isset($_POST['dv']) && $_POST['dv'] != "" &&
                    isset($_POST['dong_vat']) && $_POST['dong_vat'] != "" && isset($_POST['nv']) && $_POST['nv'] != "" && isset($_POST['pttt']) && $_POST['pttt'] != ""
                ) {
                    $id_dl=$_POST['id_dl'];
                    $ngay_dat_lich = $_POST['ngay'];
                    $khoang_gio = $_POST['gio'];
                    $id_dich_vu = $_POST['dv'];
                    $id_thu_cung = $_POST['dong_vat'];
                    $id_nhan_vien = $_POST['nv'];
                    $id_pttt = $_POST['pttt'];
                    $id_khoang_can = $_POST['can_nang'];
                    $id_tai_khoan = $_POST['id_user'];
                    $gia = $_POST['gia'];
                    update_dl($ngay_dat_lich,$khoang_gio,$id_thu_cung,$id_khoang_can,$id_dich_vu,$id_nhan_vien, $id_pttt,$gia,$id_dl);
                    insert_hoadon($ngay_dat_lich,$khoang_gio,$id_tai_khoan,$id_dich_vu,$id_nhan_vien);
                    if ($id_pttt == 1) {
                        include "view/pages/datlich/trang3.php";
                        break;
                    }if($id_pttt==2){
                        include "view/pages/datlich/trang4.php";
                    }
                } else {
                    $thongbao = "Vui lòng nhập đầy đủ thông tin";
                    include "view/pages/datlich/trang1.php";
                    break;
                }
            }
            case "thanhtoan":
                if(isset($_POST['thanhtoan'])){
                    $hd_dv_nv=get_hd_dv_nv();
                    extract($hd_dv_nv);
                    update_trang_thai($id);
                    include "view/pages/datlich/trang4.php";
                }



                break;


            include "view/pages/datlich/trang2.php";
            break;

            //trang quản trị

        case "quantri":
            header("Location: admin/index.php");
            break;
///////////////////////////////////////////////////////////
//             case "cart":
//                 if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "" && isset($_GET['idsp']) && $_GET['idsp'] != "") {
//                     // Load thông tin sản phẩm
//                     $ttsp = loadone_sanpham($_GET['idsp']);
//                     extract($ttsp);
//                     $soluong = 1;
                
//                     // Tạo mảng sản phẩm mới
//                     $item = array(
//                         'id' => $id,
//                         'name' => $name,
//                         'price' => $price,
//                         'img' => $img,
//                         'soluong' => $soluong,
//                     );
                
//                     // Kiểm tra xem giỏ hàng đã tồn tại hay chưa
//                     if (isset($_SESSION['cart'])) {
//                         // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
//                         $product_exists = false;
//                         foreach ($_SESSION['cart'] as &$cart_item) {
//                             if ($cart_item['name'] === $name) {
//                                 $cart_item['soluong'] += $soluong;
//                                 $product_exists = true;
//                                 break;
//                             }
//                         }
                
//                         // Nếu sản phẩm chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
//                         if (!$product_exists) {
//                             $_SESSION['cart'][] = $item;
//                         }
//                     } else {
//                         $_SESSION['cart'] = array($item);
//                     }
//                 } else {
//                     $thongbao = "Vui lòng đăng nhập và chọn sản phẩm để thêm sản phẩm vào giỏ hàng!!";
//                 }
//                 include "view/cart/view.php";
//             break;
// ///////////////////////////////////////////////////////////
//             case "remove":
//                 if (isset($_GET['name']) && !empty($_GET['name'])) {
//                     $remove_product = $_GET['name'];
//                     if (isset($_SESSION['cart'])) {
//                         foreach ($_SESSION['cart'] as $key => $item) {
//                             if ($item['name'] === $remove_product) {
//                                 unset($_SESSION['cart'][$key]);
//                             }
//                         }
//                         // Đặt lại chỉ mục của mảng
//                         $_SESSION['cart'] = array_values($_SESSION['cart']);
//                     }
//                 }
//                 include "view/cart/view.php";
//             break;
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

    }
} else {
    include "view/component/home.php";
}

include "view/component/footer.php";
