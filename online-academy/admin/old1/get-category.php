<?php
require_once '../connection.inc.php';  

$get_category = $_GET['cid'];
$select_query = "SELECT sub_c_id, sub_c_name FROM sub_categories WHERE sub_c_parent = '$get_category'";
$sub_category = mysqli_query($con, $select_query);


echo '<label class="text-secondary h6" for="exampleInputEmail1">Select Sub Category : </label><select name="sub_category_name">';
foreach($sub_category as $row){
	echo '<option value="'. $row['sub_c_id'].'">'.$row['sub_c_name'].'</option>';
}
echo '</select>';



?>