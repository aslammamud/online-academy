<?php

require '../connection.inc.php';
require '../functions.inc.php';


//remove featured company

if(isset($_POST['del_item_set'])){
    $id = $_POST['id'];
    $column = $_POST['column'];
    $table = $_POST['table'];
    
    $delete = "DELETE FROM ".$table." WHERE ".$column." = '$id'";
    $result =  mysqli_query($con, $delete);  
}



?>