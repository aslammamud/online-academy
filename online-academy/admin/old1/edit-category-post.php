<?php
require_once '../connection.inc.php';  

$user_id = $_POST['c_id'];

$category_name = $_POST['c_name'];
// image uploaded code start
$category_image = ($_FILES['c_image']['name']);
$category_image_after_explode = explode(".", $category_image);
$category_image_after_explode_extention = end($category_image_after_explode);
$category_image_new_name = time() . "-" . rand(111, 999) . "." . $category_image_after_explode_extention;

$category_image_tmp_location = ($_FILES['c_image']['tmp_name']);
$category_image_new_location = "../img/category-img/" . $category_image_new_name;
move_uploaded_file($category_image_tmp_location, $category_image_new_location);
// image uploaded code End

$update_query = "UPDATE categories SET c_name= '$category_name', c_image='$category_image_new_name' WHERE c_id = '$user_id'";
$update_query_from_db = mysqli_query($con, $update_query);


$_SESSION['category_edited_status'] = "Category Edited Successfully!";
header('location: add-category.php');


?>