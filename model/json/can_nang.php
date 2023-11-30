<?php  

include_once "../pdo.php";

function get_all_cannang(){
    $sql="select * from kich_thuoc";
    return pdo_query($sql);
}
echo json_encode(get_all_cannang());

?>