<?php  




include_once "../pdo.php";
function get_all_thucung(){
    $sql="select * from thu_cung";
    return pdo_query($sql);
 }
 echo json_encode(get_all_thucung());
?>