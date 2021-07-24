<?php

function reloader($link = '' ,$timer= 1000){ 
	global $actual_link;
	if($link == ''){$link = $actual_link;}
	return '<script>setTimeout(function(){window.location = "'.$link.'"},'.$timer.');</script>';
}

//call by: demon('link.php',0);
function demon($link='',$cmd = 0){

    if($cmd==1){
        
        if(isset($_SESSION['abc_lgn']) && $_SESSION['abc_lgn'] == false || !isset($_SESSION['abc_lgn'])){
        
            if(link=='') {
                echo  reloader('/',0);
                exit();
                die(); 
            }else{
                echo  reloader($link,0);
                exit();
                die(); 
            }
        
        }
    }else if($cmd==2){
        
        if(isset($_SESSION['abc_ins_lgn']) && $_SESSION['abc_ins_lgn'] == false || !isset($_SESSION['abc_ins_lgn'])){
        
            if(link=='') {
                echo  reloader('instructor/',0);
                exit();
                die(); 
            }else{
                echo  reloader($link,0);
                exit();
                die(); 
            }
        
        }
    }else{
        
        if(link=='') {
            echo  reloader('/',0);
        	exit();
        	die(); 
        }else{
            echo  reloader($link,0);
        	exit();
        	die(); 
        }
    }
    

}

	
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!='')
	return mysqli_real_escape_string($con,$str);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function randomURL($URLlength = 8) {
    $charray = array_merge(range('a','z'), range('0','9'));
    $max = count($charray) - 1;
    for ($i = 0; $i < $URLlength; $i++) {
        $randomChar = mt_rand(0, $max);
        $url .= $charray[$randomChar];
    }
    return $url;
}



//for website settings


function notifier($msg='Sucessful!',$alert=1,$time=4000){
    
    if($alert==1){
        $type = 'info';
        $icon = 'pe-7s-bell';
    }else if($alert==2){
        $type = 'success';
        $icon = 'pe-7s-check';
    }else if($alert==3){
        $type = 'warning';
        $icon = 'pe-7s-attention';
    }else if($alert==4){
        $type = 'danger';
        $icon = 'pe-7s-close-circle';
    }
        
    echo '<script type="text/javascript">
        	$(document).ready(function(){
            $.notify({
                	icon: "'.$icon.'",
                	message: "'.$msg.'"
    
                },{
                    type: "'.$type.'",
                    timer: "'.$time.'",
                	placement: {
                		from: "bottom",
                		align: "right"
                	}
                });
        	});
            </script>';
}


function itemRemover($id, $title, $column, $table){
    echo '<input type="hidden" class="item_delete_id" value="'.$id.'">
    <input type="hidden" class="item_delete_name" value="'.$title.'">
    <input type="hidden" class="item_column" value="'.$column.'">
    <input type="hidden" class="item_table" value="'.$table.'">
    <a href="javascript:void(0)" class="item_delete_button btn btn-sm btn-danger mt-2"><i style="color:#fff;" class="fa fa-trash" aria-hidden="true"></i></a>';
}

function imageChecker($image,$height=2160, $width=4096){
	
	$image_name = $_FILES[$image]["name"];
	$image_loc = $_FILES[$image]["tmp_name"];
	$image_size = $_FILES[$image]["size"];
	
	// Get Image Dimension		
	$fileinfo = @getimagesize($image_loc);
	$file_width = $fileinfo[0];
	$file_height = $fileinfo[1];

	$allowed_image_extension = array(
		"png",
		"jpg",
		"jpeg",
		"jpe",
		"jif",
		"jfif",
		"jfi",
		"webpp",
	);
			
	// Get image file extension		
	$file_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
	
	// Validate file input to check if is not empty
    if (! file_exists($image_loc)) {
        $response = array(
            "type" => "danger",
            "message" => "You must choose an image file to upload.",
			"valid" => false
        );
		return $response;
    }	
	// Validate file input to check if is with valid extension
	else if (! in_array($file_extension, $allowed_image_extension)) {
		$response = array(
			"type" => "danger",
			"message" => "Upload proper image files.<br> Allowed file types are [ png* &nbsp jpg* &nbsp  jpeg* &nbsp  jpe* &nbsp  jif* &nbsp  jfif* &nbsp  jfi* &nbsp  webpp* ]",
			"valid" => false
		);
		return $response;
	}
	// Validate image file size
	else if (($image_size > 2000000)) {
		$response = array(
			"type" => "danger",
			"message" => "Image size exceeds 2MB",
			"valid" => false
		);
		return $response;
	}    
	// Validate image file dimension
	else if ($file_width > $width || $file_height > $height) {
		$response = array(
			"type" => "danger",
			"message" => "Image dimension should be within ".$width."X".$height,
			"valid" => false
		);
		return $response;
	} else {
		$response = array(
			"type" => "success",
			"message" => "Image is valid",
			"valid" => true
		);
		return $response;
	}

}

//instructor

function getCategories(){
    global $con;
    
    $sql = "SELECT * FROM `instructor_video_categories` WHERE 1";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}

function getSingleCategory($id){
    global $con;
    
    $sql = "SELECT * FROM `instructor_video_categories` WHERE ins_catg_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        echo $data['ins_catg_title'];
    }
}

function getSubCategories(){
    global $con;
    
    $sql = "SELECT * FROM `instructor_video_sub_cat` WHERE 1";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}

function discountOfferRemaining(){

    //Convert to date
    //$datestr="2011-09-23 19:10:18";//Your date
    
    //$datestr= date("Y-m-d H:i:s");
    
    
    $datestr="2021-05-15 12:00:00"; //test purpose
    $date=strtotime($datestr);//Converted to a PHP date (a second count)
    
    //Calculate difference
    $diff=$date-time();//time returns current time in seconds
    $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
    $hours=round(($diff-$days*60*60*24)/(60*60));
    
    //Report
    echo abs($days)." days ". abs($hours). " hours ";

}


function getCourses(){
    global $con;
    
    $sql = "SELECT * FROM `instructor_made_courses` WHERE 1";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}

function getSingleCourse($url){
    global $con;
    
    $sql = "SELECT * FROM `instructor_made_courses` WHERE ins_mc_url = '$url'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $data;
  	
    }
}

function getAllCoursesByInstructor($id){
    global $con;
    
    $sql = "SELECT * FROM `instructor_made_courses` WHERE ins_mc_instrc_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}


function getAllSectionsByCourse($id){
    global $con;
    
    $sql = "SELECT * FROM `ins_mc_section` WHERE ins_mc_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}



function getCartItemsBySession($cart_session){
    global $con;
    
    $sql = "SELECT * FROM cart WHERE cart_session = '$cart_session'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
    }
}

function countCartItemsBySession($cart_session){
    global $con;
    
    $sql = "SELECT * FROM cart WHERE cart_session = '$cart_session'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count>0){
        return $count;
    }else{
        return $count;
    }
}


function getAllClassesBySection($id){
    global $con;
    
    $sql = "SELECT * FROM `ins_mc_sec_class` WHERE section_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}

function getInstructor($id){
    global $con;
    
    $sql = "SELECT * FROM `instructor` WHERE ins_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $data;
  	
    }
}

function getSingleReview($id){
    global $con;
    
    $sql = "SELECT * FROM `reviews` WHERE ins_mc_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $data;
  	
    }
}

function getCountReviews($id){
    global $con;
    
    $sql = "SELECT * FROM `reviews` WHERE ins_mc_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        echo $count;
    }else{
        echo '0';
    }
}

function getRatingStars($id){
    global $con;
    
    $sql = "SELECT * FROM `reviews` WHERE ins_mc_id = '$id'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    
    if($count>0){
        
        foreach($result as $review){
            $total_rating_points += $review['review_points'];
        }
        
        if(isset($total_rating_points)){
            $stars = ceil($total_rating_points/$count);
            $empty_stars = (5-$stars);
        }    
            
            for($i = 0; $i < $stars ; $i++){
                $starsset[] = '<span class="fa fa-star mr-1"></span>';
            }
            
            for($i = 0; $i < $empty_stars ; $i++){
                $starsset[] = '<span class="fa fa-star-o mr-1"></span>';
            }
                 
        
        if(isset($starsset)){
            foreach($starsset as $star){
                echo $star;
            }
        }
        
    }else{
        echo '<span class="fa fa-star-o p-1"></span>
        <span class="fa fa-star-o mr-1"></span>
        <span class="fa fa-star-o mr-1"></span>
        <span class="fa fa-star-o mr-1"></span>
        <span class="fa fa-star-o mr-1"></span>';
    }
}

function getReviews(){
    global $con;
    
    $sql = "SELECT * FROM `reviews` WHERE 1";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
/*    	foreach($result as $data){
    	}*/
    }
}

/*function getCountOrdersByInsID($ins_id){
    global $con;
    
    $total_count = 0;
    
    $sql_order_tkn = "SELECT `order_token` FROM `orders` WHERE 1";
    $result_order_tkn = mysqli_query($con,$sql_order_tkn);   
    $count_order_tkn = mysqli_num_rows($result_order_tkn);
    
    
    if($count_order_tkn>0){
            foreach($result_order_tkn as $session){
                    $sql_cart = "SELECT * FROM `reviews` WHERE ins_mc_id = '$id'";
                    $result_cart = mysqli_query($con,$sql_cart);   
                    $count_cart = mysqli_num_rows($result_cart); 
                    
            }
    }
    
    
    
    $sql = "SELECT * FROM `reviews` WHERE ins_mc_id = '$id'";
    $result = mysqli_query($con,$sql);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        echo $count;
    }else{
        echo '0';
    }
}*/


/*function getEnrolledCoursesByStudent($std_id){
    global $con;
    
    $sql_orders = "SELECT * FROM `instructor_made_courses` WHERE ins_mc_instrc_id = '$id'";
    $result = mysqli_query($con,$sql_orders);   
    $data = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    
    if($count>0){
        return $result;
  	
    }
}*/

function getEnrolledCoursesByStudent($std_id, $pay_status){
    global $con;
    
    $sql_orders = "SELECT * FROM `orders` WHERE `order_std_id` = '$std_id' AND `order_pay_status` = '$pay_status'";
    $result_orders = mysqli_query($con,$sql_orders);
    $count_orders = mysqli_num_rows($result_orders);

    if($count_orders>0){
    	foreach($result_orders as $order){
    	    $t_orders[] = $order['order_token'];
    	}

    	if(isset($t_orders) && !empty($t_orders)){
        	foreach($t_orders as $s_order){
        	    $sql_cart = "SELECT * FROM `cart` WHERE `cart_session` = '$s_order'";
        	    $result_cart = mysqli_query($con,$sql_cart);
        	    $count_cart = mysqli_num_rows($result_cart);
        	    
        	    if($count_cart>0){
        	        foreach($result_cart as $cart_item){
        	            $t_course_id[] = $cart_item['ins_mc_id'];
        	        }
        	    }
        	    
        	}
        	
        	if(isset($t_course_id) && !empty($t_course_id)){
	        	    foreach($t_course_id as $course_id){
	        	        $sql_course = "SELECT * FROM `instructor_made_courses` WHERE `ins_mc_id` = '$course_id'";
                	    $result_course = mysqli_query($con,$sql_course);
                	    $count_course = mysqli_num_rows($result_course);

                	    if($count_course>0){
                	        $total_courses[] = $result_course;
                	    }
	        	        
	        	    }
	        	    return $total_courses;
	        	    //TESTING PURPUSE
	        	    
/*                	if(isset($total_courses) && !empty($total_courses)){
        	        	 foreach($total_courses as $s_c){
        	    	        echo "<br>courses: ";
        	                foreach($s_c as $result2){
        	                    print_r($result2);
        	                }
        	        	}
        	
                	}*/
	        	}


    	}else{
    	    echo 'You Have Enrolled 0 Courses';
    	}
    }
}

function getEcCrsOrderDateByStudent($std_id, $pay_status){
    global $con;
    
    $sql_orders = "SELECT * FROM `orders` WHERE `order_std_id` = '$std_id' AND `order_pay_status` = '$pay_status'";
    $result_orders = mysqli_query($con,$sql_orders);
    $count_orders = mysqli_num_rows($result_orders);

    if($count_orders>0){
    	foreach($result_orders as $order){
    	    $t_orders[] = $order['order_token'];
    	}

    	if(isset($t_orders) && !empty($t_orders)){
        	foreach($t_orders as $s_order){
        	    $sql_cart = "SELECT * FROM `cart` WHERE `cart_session` = '$s_order'";
        	    $result_cart = mysqli_query($con,$sql_cart);
        	    $count_cart = mysqli_num_rows($result_cart);
        	    
        	    if($count_cart>0){
        	        foreach($result_cart as $cart_item){
        	            $t_course_id[] = $cart_item['ins_mc_id'];
        	        }
        	    }
        	    
        	}
        	
        	if(isset($t_course_id) && !empty($t_course_id)){
	        	    foreach($t_course_id as $course_id){
	        	        $sql_course = "SELECT * FROM `instructor_made_courses` WHERE `ins_mc_id` = '$course_id'";
                	    $result_course = mysqli_query($con,$sql_course);
                	    $count_course = mysqli_num_rows($result_course);

                	    if($count_course>0){
                	        $total_courses[] = $result_course;
                	    }
	        	        
	        	    }
	        	    return $total_courses;

	        	}


    	}else{
    	    echo 'You Have Enrolled 0 Courses';
    	}
    }
}

function getCoursesEnrollment(){
    $result = getCourses();
    
    $enrolled = 0;
    foreach($result as $data){
            $enrolled += (int)$data['ins_mc_enrolled'];
    	}
    	
    echo $enrolled; 
}

function getCoursesEnrollmentByInstructor($id){
    $result = getAllCoursesByInstructor($id);
    
    $enrolled = 0;
    foreach($result as $data){
            $enrolled += (int)$data['ins_mc_enrolled'];
    	}
    	
    echo $enrolled; 
}


function getPaidSingleCourseByStudent($std_id, $crs_id){
    global $con;
    
    $sql_orders = "SELECT * FROM `orders` WHERE `order_std_id` = '$std_id' AND `order_pay_status` = 1";
    $result_orders = mysqli_query($con,$sql_orders);
    $count_orders = mysqli_num_rows($result_orders);

    if($count_orders>0){
    	foreach($result_orders as $order){
    	    $t_orders[] = $order['order_token'];
    	}

    	if(isset($t_orders) && !empty($t_orders)){
        	foreach($t_orders as $s_order){
        	    $sql_cart = "SELECT * FROM `cart` WHERE `cart_session` = '$s_order'";
        	    $result_cart = mysqli_query($con,$sql_cart);
        	    $count_cart = mysqli_num_rows($result_cart);
        	    
        	    if($count_cart>0){
        	        foreach($result_cart as $cart_item){
        	            $t_course_id[] = $cart_item['ins_mc_id'];
        	        }
        	    }
        	    
        	}
        	
        	if(isset($t_course_id) && !empty($t_course_id)){
	        	    foreach($t_course_id as $course_id){
                        if($crs_id == $course_id){
                            return true;
                            break;
                        }
	        	    }

	        	}


    	}else{
    	   return false;
    	}
    }
}

function getActiveCouseByInstructor($ins_id, $flag){
global $con;

        $sql = "SELECT * FROM `instructor_made_courses` WHERE ins_mc_instrc_id = '$ins_id' AND ins_mc_visibility = '$flag'" ;
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        
        
        if($count>0){
        	echo $count;
        }else{
            echo 0;
        }

}

function getFreeCouseByInstructor($ins_id, $flag){
global $con;

        $sql = "SELECT * FROM `instructor_made_courses` WHERE ins_mc_instrc_id = '$ins_id' AND ins_mc_free = '$flag'" ;
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        
        
        if($count>0){
        	echo $count;
        }else{
            echo 0;
        }

}



//getCount('instructor','ins_id', 34);

function getCount($table ,$col, $val){
global $con;
    if($col == ''){
        $sql_qr = "SELECT * FROM"." ".$table;
        $sql_result = mysqli_query($con,$sql_qr);
        $count = mysqli_num_rows($sql_result);
        
        
        if($count>0){
        	echo $count;
        }else{
            echo 0;
        }
    }else{
        $sql = ("SELECT * FROM ".$table." WHERE ".$col. "=". $val) ;
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        
        
        if($count>0){
        	echo $count;
        }else{
            echo 0;
        }
    }
}


function getResult($table , $col, $val){
global $con;

$sql = ("SELECT * FROM ".$table." WHERE ".$col. "=". $val) ; 
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);


if($count>0){
	return $data;
}

}


?>