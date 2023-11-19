<?php

 include "header.php";
// include_once "../model/sanpham.php";
// include_once "../model/danhmuc.php";
// include_once "../model/taikhoan.php";
// include_once "../model/binhluan.php";
// $listSp= sanpham_get_all_admin();

// if(isset($_GET['act']) && $_GET['act']!=""){
//     $act=$_GET['act'];
//     switch($act){
//         case 'adddm':
//             if(isset($_POST['addnew'])&&($_POST['addnew'])){
//                if(isset($_POST['tendm'])&& ($_POST['tendm']!="")){
//                     $tendm=$_POST['tendm'];
//                     insert_danhmuc($tendm);
//                     $thongbao="Thêm thành công";
//                }
//             else{
//                 $thongbao="Vui lòng nhập thông tin";
//             }
//         }
//             include "danhmuc/add.php";
//             break;

            
//         case 'listdm':
//             $listdanhmuc=loadAll_danhmuc();
//             include "danhmuc/list.php";
//             break;




//         case 'deletedm':
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 delete_danhmuc($_GET['id']);
//             }

           
//             $listdanhmuc=loadAll_danhmuc();
//             include "danhmuc/list.php";
//             break;



//         case 'editdm':
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                $dm=loadOne_danhmuc($_GET['id']);
//             }
//             include "danhmuc/update.php";
//             break;




//         case 'updatedm':
//             if(isset($_POST['update'])&&($_POST['update'])){
//                 if(isset($_POST['tendm'])&&( $_POST['tendm']!="")){
//                     $tendm=$_POST['tendm'];
//                     $id=$_POST['id'];
//                     update_danhmuc($id,$tendm);
//                     $thongbao="Cập nhật thành công";
//                 }else{
//                     $thongbao="Vui lòng nhập thông tin";
//                 }
                
//             }

//             $listdanhmuc=loadAll_danhmuc();
//             include "danhmuc/list.php";
//             break;




//         case "addsp":
//             if(isset($_POST['addnew'])&&($_POST['addnew'])){
//                 if(isset($_POST['ten_sp'])&& ($_POST['ten_sp']!="")&& isset($_POST['don_gia'])&& ($_POST['don_gia']!="")&&isset($_POST['mo_ta'])&& ($_POST['mo_ta']!="")){
//                     $ten_sp=$_POST['ten_sp'];
//                     $don_gia=$_POST['don_gia'];
//                     $mo_ta=$_POST['mo_ta'];
//                     $id_dm=$_POST['id_dm'];

//                     $hinh_anh= $_FILES['hinh_anh']['name'];
//                     $tmp_name=$_FILES['hinh_anh']['tmp_name'];
//                     move_uploaded_file($tmp_name,'../images/'.$hinh_anh);

//                     insert_sanpham($ten_sp,$don_gia,$hinh_anh,$mo_ta,$id_dm);
//                     $thongbao="thêm thành công";
                    
//                 }else{
//                     $thongbao="Vui lòng nhập thông tin!!!";
//                 }
//             }
//             include "sanpham/add.php";
//             break;




//         case "deletesp":
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 delete_sp($_GET['id']);
//             }

           
//             $listsp=sanpham_get_all_admin();
//             include "sanpham/list.php";
//             break;

//         case "editsp":
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 $sp=loadOne_sanpham($_GET['id']);
//              }
//              $danhmuc=loadAll_danhmuc();
//              include "sanpham/update.php";
//              break;
            
//         case "updatesp":
//             if(isset($_POST['update'])&&($_POST['update'])){
//                 $id=$_POST['id'];
//                 $ten_sp=$_POST['ten_sp'];
//                 $don_gia=$_POST['don_gia'];
//                 $mo_ta=$_POST['mo_ta'];
//                 $id_dm=$_POST['id_dm'];

//                 $hinh_anh= $_FILES['hinh_anh']['name'];
//                 $tmp_name=$_FILES['hinh_anh']['tmp_name'];
//                 move_uploaded_file($tmp_name,'../images/'.$hinh_anh);


//                 update_sanpham($id,$ten_sp,$don_gia,$hinh_anh,$mo_ta,$id_dm);
//                 $thongbao="Cập nhật thành công";
//             }
            
//             include "sanpham/list.php";
//             break; 
//         case "listsp":
//             include "sanpham/list.php";
//             break;



//         case "dskh":
//             $dskh=kh_get_all();
//             $dstk=tk_get_all();
//             include "khachhang/list.php";
//             break;
//         case "xoakh":

//             if(isset($_GET['idkh'])&& $_GET['idkh']){
//                 $id=$_GET['idkh'];
//                 delete_kh($id);

//             }
//             $dskh=kh_get_all();
//            $dstk=tk_get_all();
//             include "khachhang/list.php";
//             break;


//             case "signin":
//                 if(isset($_POST['dangky']) && ($_POST['dangky'])){
//                     if($_POST['user']!=""&& $_POST['pass']!=""&&$_POST['email']!=""){
//                         $user=$_POST['user'];
//                         $email=$_POST['email'];
//                         $pass=$_POST['pass'];
//                         $role=$_POST['role'];
//                         insert_taikhoan_admin($user,$pass,$email,$role);
//                         $thongbao="Đăng ký thành công";
//                     }else{
//                         $thongbao="Vui lòng nhập thông tin!!";
//                     }
//                 }
//                 include "khachhang/add.php";
//                 break;

//             case 'edittk':
//                 if(isset($_GET['id'])&&($_GET['id']>0)){
//                    $tk=getuserinfo1($_GET['id']);
//                 }
//                 include "khachhang/update.php";
//                 break;
    
    
    
    
//             case 'updatetk':
//                 if(isset($_POST['update'])&& $_POST['update']){
//                     $id=$_POST['id'];
//                     $user=$_POST['user'];
//                     $email=$_POST['email'];
//                     $pass=$_POST['pass'];
//                     $address=$_POST['address'];
//                     $tel=$_POST['tel'];
//                     update_info($id,$user,$pass,$email,$address,$tel);
//                 }
//                 $dskh=kh_get_all();
//                 $dstk=tk_get_all();
//                 include "khachhang/list.php";
//                 break;

//         case "dsbl":
//             $dsbl=loadall_bl_admin();
//             include "binhluan/list.php";
//             break;

//         case "xoabl":

//             if(isset($_GET['idxoa'])&& $_GET['idxoa']){
//                 $id=$_GET['idxoa'];
//                 delete_bl($id);
//             }
//             $dsbl=loadall_bl_admin();

//             include "binhluan/list.php";
//             break;



//         case "thongke":
//             $dstk=loadall_sp_admin();

//             include "thongke/sp_theo_dm.php";
//             break;


//         case "bieudo":
//             $listthongke=loadall_sp_admin();
//             include "thongke/bieudo.php";
//             break;
//         case "thoat":
//             if(isset($_SESSION['iduser'])&& $_SESSION['iduser']){
//                 unset($_SESSION['iduser']);
//             }
//             header("location: ../user/index.php");
//             break;
//         default:
//             include "content.php";
//     }
// }
// else{
//     include "content.php";
// }

include "footer.php";




?>