<?php

include "header.php";
include "leftbar.php";
include "topbar.php";


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        // danh mục dịch vụ
        case "danhmuc_dv":
            include "module/danhmuc/list.php";
            break;

    }
} else {
    include "content.php";
}

include "footer.php";
