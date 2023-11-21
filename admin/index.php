<?php

include "header.php";


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "":

            break;

    }
} else {
    include "content.php";
}

include "footer.php";
