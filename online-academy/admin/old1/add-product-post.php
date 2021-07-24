<?php
require_once '../connection.inc.php';  

$main_category_name = $_POST['main_category'];
$sub_category_name = "";

// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$product_title = $_POST['product_title'];
$product_description = $_POST['product_description'];

// image uploaded code start
$product_image = ($_FILES['product_image_name']['name']);
$product_image_after_explode = explode(".", $product_image);
$product_image_after_explode_extention = end($product_image_after_explode);
$product_image_new_name = time() . "-" . rand(111, 999) . "." . $product_image_after_explode_extention;

$product_image_tmp_location = ($_FILES['product_image_name']['tmp_name']);
$product_image_new_location = "../img/product-img/" . $product_image_new_name;
move_uploaded_file($product_image_tmp_location, $product_image_new_location);
// image uploaded code End

$regular_price = $_POST['product_regular_price'];
$face_value = $_POST['product_face_value'];
$product_stock = $_POST['product_stock'];
$product_unit = $_POST['product_unit'];
$product_brand = $_POST['product_brand'];
$meta_title = $_POST['product_meta_title'];
$meta_description = $_POST['product_meta_description'];
$video_link = $_POST['product_video_link'];
$sale_price = $_POST['product_sale_price'];
$product_code = "QX" . time() . "N" . rand(111, 999) . "R";


$product_insert_query = "INSERT INTO products (product_category_id, product_title, product_description, product_meta_title, product_meta_description, product_image, product_video_link, product_regular_price, product_face_value, product_sale_price, product_stock, product_code, product_unit, product_brand, product_sub_category_id) VALUES ($main_category_name, '$product_title', '$product_description', '$meta_title', '$meta_description', '$product_image_new_name', '$video_link', '$regular_price', '$face_value', '$sale_price', '$product_stock', '$product_code', '$product_unit', '$product_brand', '')";
$product_from_db = mysqli_query($con, $product_insert_query);

$_SESSION['product_upload_status'] = "This Product successfully uploaded!";
header('location: add-product.php');




?>