<?php
require 'connection.inc.php';
require 'functions.inc.php';

// এই কোড টূকু হেডারে বসাতে হবে যদি আমি চাই যেকেউ কার্ট  ব্যাবহার করতে পারবে। অন্যথায় লগিন এর সময় এটা চালু করতে হবে।

/* if(empty($_SESSION['CurrentCartSession'])){
	   $_SESSION['CurrentCartSession'] = generateRandomString();
	  } */


// Add products into the cart table

if (isset($_POST['ins_mc_id'])) {

  $ins_mc_id = $_POST['ins_mc_id'];

 
if(isset($_SESSION['CurrentCartSession']) AND $_SESSION['CurrentCartSession'] != null){
	  $cart_session = $_SESSION['CurrentCartSession'];
	  
	  $search_product_query =  "SELECT * FROM cart WHERE cart_session = '$cart_session' AND ins_mc_id = '$ins_mc_id'";
	  $result_s_p_q = mysqli_query($con,$search_product_query);
	  $rows_s_p_q  = mysqli_num_rows($result_s_p_q);
	  $rowdata_fetch = mysqli_fetch_assoc($result_s_p_q);

		if($rows_s_p_q > 0){
			
			/*echo '<script>
					  asAlertMsg({
					  type: "success",
					  title: "You have purchased this course before!",
					  message: "Please check your student portal. Thanks",
					  });
					</script>';*/
					
			notifier($msg='You have already purchased this course in your cart!',$alert=4,$time=3000);
			
		
		}else{
			
			$insert_product_query = "INSERT INTO cart (cart_session,ins_mc_id) VALUES ('$cart_session','$ins_mc_id')";
			mysqli_query($con, $insert_product_query);
			
			mysqli_close($con);
							
			/*echo '<script>asAlertMsg({
				  type: "success",
				  title: "This course added to your cart!",
				  message: "Thanks For Shopping.",
				});
				</script>';*/
			/*notifier($msg='Successfully added course to your cart!',$alert=2,$time=3000);*/
			echo '<script type="text/javascript">
        	$(document).ready(function(){
            $.notify({
                	icon: "pe-7s-check",
                	message: "Successfully added course to your cart!"
    
                },{
                    type: "success",
                    timer: "4000"
                });
        	});
            </script>';
		  }
	 }
}

// Get no.of items available in the cart
if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {

  if(isset($_SESSION['CurrentCartSession']) && $_SESSION['CurrentCartSession'] != null){
	  $cart_session = $_SESSION['CurrentCartSession'];
	  $cart_items_query = "SELECT * FROM cart WHERE cart_session = '$cart_session'";
	  $cart_items_result = mysqli_query($con,$cart_items_query);
	  $count_cart_items = mysqli_num_rows($cart_items_result);

		echo $count_cart_items;
		
	  mysqli_close($con);
  
	  }else{
		  echo "0";
	  }
}

// Get all the items available in the cart
/*if (isset($_GET['returnitems']) && isset($_GET['returnitems']) == 'returnitems') {

  if(isset($_SESSION['CurrentCartSession']) && $_SESSION['CurrentCartSession'] != null){
	  $cart_session = $_SESSION['CurrentCartSession'];
	  $cart_items_query = "SELECT * FROM cart WHERE cart_session = '$cart_session' LIMIT 3";
	  $cart_items_result = mysqli_query($con,$cart_items_query);
	  $count_cart_items = mysqli_num_rows($cart_items_result);

	echo ' <div class="top-cart-content">
	<div class="block-subtitle hidden">Recently added items</div>
	<ul id="cart-sidebar" class="mini-products-list">';
	 if($count_cart_items>0){
		 
				  
				  foreach($cart_items_result as $row){
					  echo '
						  <li class="item odd"><a title="Product title here" class="product-image"><img src="admin/images/product_image/'.$row['product_image'].'" alt="html Template" width="65"></a>
							   <div class="product-details">
							   <p class="product-name"><a>'.$row['product_name'].'</a> </p>
							   <strong>1</strong> x <span class="price">৳'.$row['product_price'].'</span> </div>
						  </li>';
				  }
				  
				  echo '</ul><div class="actions">
							<button class="btn-checkout" type="button" onClick="location.href=\'checkout\'"><i class="fa fa-check"></i><span>Checkout</span></button>
							<button class="view-cart" type="button" onClick="location.href=\'cart\'"><i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
						  </div>';
	 }else{
		 echo '</ul><div class="actions">
							<h5 style="color:red; text-align: center;">No item found in cart.</h5>
						  </div>';
	 }
	}
}*/

// Remove single items from cart
/*if (isset($_POST['remove'])) {
  $id = $_POST['remove'];
  $stmt = $con->prepare('DELETE FROM cart WHERE id=?');
  $stmt->bind_param('i',$id);
  $stmt->execute();

  $_SESSION['showAlert'] = 'block';
  $_SESSION['message'] = 'Item removed from the cart!';
  header('location:cart.php');
}*/

// Remove all items at once from cart
/*if (isset($_GET['clear'])) {
	if(isset($_SESSION['CurrentCartSession']) && $_SESSION['CurrentCartSession'] != null){
	  $cart_session = $_SESSION['CurrentCartSession'];
	  $stmt = $con->prepare("DELETE FROM cart WHERE cart_session = '$cart_session'");
	  $stmt->execute();
	  header('location:cart.php');
	  echo '<script>
				  asAlertMsg({
				  type: "success",
				  title: "Cart Cleared Succesfully!",
				  message: "Browse Shop Page for more items.",
				  });
				</script>';
	}
}*/

// Set total price of the product in the cart table
/*if (isset($_POST['product_quantity'])) {
	
  $qty = $_POST['product_quantity'];
  $ins_mc_id = $_POST['ins_mc_id'];
  $product_price = $_POST['product_price'];

  $tprice = $qty * $product_price;
  $item_update_query = "UPDATE cart SET qty='$qty', total_price='$tprice' WHERE id='$ins_mc_id'";
  $result_item_update = mysqli_query($con, $item_update_query);
}*/

?>