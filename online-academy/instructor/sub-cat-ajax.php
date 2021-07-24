<?php
require '../connection.inc.php';


if(!empty($_GET['cmd'])){
    $catg_id = $_GET['cid'];
    
    $select_all_query = "SELECT * FROM `instructor_video_sub_cat` WHERE `ins_vdo_ct_id` = '$catg_id'";
    $all_sub_category = mysqli_query($con, $select_all_query);
    $count_all = mysqli_num_rows($all_sub_category);
    
    $sub_id = $_GET['cmd'];
    
    $select_query = "SELECT * FROM `instructor_video_sub_cat` WHERE `ins_vdo_sb_ct_id` =  '$sub_id'";
    $sub_category = mysqli_query($con, $select_query);
    $count = mysqli_num_rows($sub_category);
    $ins_mc_sub_category = mysqli_fetch_assoc($sub_category);
    
    if($count>0){
    echo '<label class="col-md-3 col-form-label" for="sub_category">সাব-ক্যাটেগরি</label>
            <div class="col-md-9">
            <select id="sub_category" name="sub_category" class="form-control select2">';

	echo '<option value="'. $ins_mc_sub_category['ins_vdo_sb_ct_id'].'" hidden selected>'.$ins_mc_sub_category['ins_vdo_sb_ct_title'].'</option>';
	
    foreach($all_sub_category as $mc_sub_category){
    	echo '<option value="'. $mc_sub_category['ins_vdo_sb_ct_id'].'">'.$mc_sub_category['ins_vdo_sb_ct_title'].'</option>';
    }

    echo '</select></div>';
    }
}else{
    $catg_id = $_GET['cid'];
    
    $select_query = "SELECT * FROM `instructor_video_sub_cat` WHERE `ins_vdo_ct_id` = '$catg_id'";
    $sub_category = mysqli_query($con, $select_query);
    $count = mysqli_num_rows($sub_category);
    
    if($count>0){
    echo '<label class="col-md-3 col-form-label" for="sub_category">সাব-ক্যাটেগরি</label>
            <div class="col-md-9">
            <select id="sub_category" name="sub_category" class="form-control select2">
            <option value="" hidden selected>সাব-ক্যাটেগরি সিলেক্ট করুন </option>';
    foreach($sub_category as $ins_mc_sub_category){
    	echo '<option value="'. $ins_mc_sub_category['ins_vdo_sb_ct_id'].'">'.$ins_mc_sub_category['ins_vdo_sb_ct_title'].'</option>';
    }
    echo '</select></div>';
    }
}

?>