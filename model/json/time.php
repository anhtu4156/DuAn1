<?php
include "../pdo.php";
function get_time(){
    $sql="SELECT * FROM ca_lam";
     return pdo_query($sql);
    
}
echo json_encode(get_time());


?>