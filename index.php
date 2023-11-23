<?php
    // session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/dichvu.php";
    // include "model/binhluan.php";
    // include "model/taikhoan.php";

    include "view/component/header.php";
    // include "global.php";
    // $spnew = loadall_sanpham_home();
    $dsdv = loadall_dichvu();
    $ds_thu_cung=dongvat_get_all();
    $ds_can_nang=cannang_get_all();
    // $dstop10 = loadall_sanpham_top10();
    
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
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
            case "datlich":
                $dsdv = loadall_dichvu();

                include "view/pages/datlich/trang1.php";
                break;
            case "xacnhan":

                if(isset($_POST['datlich'])&&$_POST['datlich']){
                    $nguoi_hen=$_POST['nguoi-hen'];
                    $sdt=$_POST['sdt'];
                    $ngay=$_POST['ngay'];
                    $gio=$_POST['gio'];
                    $id_dv=$_POST['dv'];
                    $id_loai_dong_vat=$_POST['dong_vat'];
                    $id_cannang=$_POST['can_nang'];
                }

                include "view/pages/datlich/trang2.php";
                break;
            
                ///////////////////////////////////////////////////////////
            case "xong":
                include "view/pages/datlich/trang3.php";
                break;    
///////////////////////////////////////////////////////////
            case "":
                
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
    }else{
        include "view/component/home.php";
    }
   
    include "view/component/footer.php";
?>