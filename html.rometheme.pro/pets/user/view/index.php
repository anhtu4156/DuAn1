<?php

include "header.php";
if(isset($_GET['act'])&&($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case "petshop":
            include "banner.php";
            include "pet_shop/pet_shop.php";

            break;
        case "dv":
            include "banner.php";
            include "dich_vu/dich_vu.php";
            break;

            case "dv_cn":
                include "banner.php";
                include "dich_vu/dich_vu_ca_nhan.php";
                break;
            case "dv_cn":
                include "banner.php";
                include "dich_vu/dich_vu_ca_nhan.php";
                break;
            case "ctsp":
                include "banner.php";
                include "pet_shop/ct_sp.php";
                break;
            case "shop":
                include "banner.php";
                include "pet_shop/cua_hang.php";
                break;
            case "shop_list":
                include "banner.php";
                include "pet_shop/ds_sp.php";
                break;
        default:
        include "banner.php";
        include "content.php";
        
    }
}else{
    include "banner.php";
    include "content.php";
}

include "footer.php";
 
?>