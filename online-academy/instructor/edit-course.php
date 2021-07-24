<?php
include ('../header.php');
demon('instructor/login.php',2);

if(isset($_GET['url'])){
    $ins_mc_url = $_GET['url'];
    $reload_path = "instructor/edit-course.php?url=".$ins_mc_url;
}else {
echo reloader('instructor/',0);   
die();    
}

if(isset($_GET['step'])){
    $step = $_GET['step'];
    if($step==1){
        $step_bangla = '১ম';
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_step` = 1 WHERE `ins_mc_url` = '$ins_mc_url'";
        $res_course_sql =  mysqli_query($con,$update_course_sql);
    }else if($step==2){
        $step_bangla = '২য়';
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_step` = 2 WHERE `ins_mc_url` = '$ins_mc_url'";
        $res_course_sql =  mysqli_query($con,$update_course_sql);
    }else if($step==3){
        $step_bangla = '৩য়';
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_step` = 3 WHERE `ins_mc_url` = '$ins_mc_url'";
        $res_course_sql =  mysqli_query($con,$update_course_sql);
    }else if($step==4){
        $step_bangla = '৪র্থ';
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_step` = 4 WHERE `ins_mc_url` = '$ins_mc_url'";
        $res_course_sql =  mysqli_query($con,$update_course_sql);
    }else if($step==5){
        $step_bangla = '৫ম';
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_step` = 5 WHERE `ins_mc_url` = '$ins_mc_url'";
        $res_course_sql =  mysqli_query($con,$update_course_sql);
    }else{
		echo reloader($reload_path,0);
        die();
        exit();
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'success'){
    notifier($msg='Successfully updated your course at '.date("Y-m-d h:m:s").'!',$alert=2,$time=3000);
    $response = array(
        "type" => "success",
        "message" => $step_bangla." ধাপ এর তথ্য সফলভাবে সংরক্ষিত হয়েছে পরের ধাপে যান",
		"valid" => false
    );
}

if(isset($_GET['type']) && $_GET['type'] == 'danger'){
    notifier($msg='Some error occurred! Please try again',$alert=4,$time=3000);
    $response = array(
        "type" => "danger",
        "message" => $step_bangla." ধাপে সংযোগ বিচ্ছিন্ন হয়েছে দয়া করে আবার চেষ্টা করুন",
		"valid" => false
    );
}

$instructor_id = $_SESSION['abc_ins_id'];

$course_query = "SELECT * FROM `instructor_made_courses` WHERE `ins_mc_url` = '$ins_mc_url'"; 
$course_query_res =  mysqli_query($con,$course_query);
$course = mysqli_fetch_assoc($course_query_res);
$cnt = mysqli_num_rows($course_query_res);

mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
    
/*if(isset($_POST['submit'])){
            $response = array(
                "type" => "error",
                "message" => "You must choose an image file to upload.",
    			"valid" => false
            );
    		return $response;
    
    $insert_query = "INSERT INTO `instructor_made_courses`(`ins_mc_instrc_id`, `ins_mc_title`, `ins_mc_category`, `ins_mc_meta_keys`, `ins_mc_meta_desc`, `ins_mc_image`, `ins_mc_free`, `ins_mc_orginal_fee`,
    `ins_mc_offer_fee`, `ins_mc_discount_type`, `ins_mc_discount`, `ins_mc_short_desc`, `ins_mc_long_desc`, `ins_mc_level`, `ins_mc_language`, `ins_mc_vd_provider`, `ins_mc_vid_link`, `ins_mc_url`, `ins_mc_outcomes`, `ins_mc_requirements`) 
    VALUES ('$instructor_id', '$title', '$category', '$meta_keywords', '$meta_description', '$thumbnail_image_new_name' ,'$is_free_course' ,'$original_price' ,'$offer_price' ,'$discount_type' ,'$discounted_price' ,'$short_description' ,'$long_description' ,'$level' ,'$language' ,'$course_overview_provider' ,'$ins_mc_vid_link', '$ins_mc_url' ,'$outcomes' ,'$requirements')";
    //$insert_to_db = mysqli_query($con, $insert_query);
    

        if (mysqli_query($con, $insert_query)) {
            
            inst_notifier($instructor_id,'Created a new course: '.$title,$type='success',$status=0,$priotity=0,$np2con);
            
            notifier($msg='Sucessfully Created a new course: '.$title.'!',$alert=2,$time=3000);
                
        } else {
          echo "Error: " . $insertuser . "<br>" . mysqli_error($con);
          notifier($msg='Course not created! Please try again',$alert=4,$time=3000);
        }
    
}*/


?>

<style>
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #007bff;
}

ul.nav.nav-pills.nav-justified.form-wizard-header {
    padding: 0px;
    margin: 0px;
}

#basicwizard ul li a{
    padding-left: 0px;
    padding-right: 0px;
}
                      
.alert-warning {
    background-color: #007bff47;
    color: #000;
}

.alert-success {
    background-color: #00cc33;
    color: #ffffff;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #000 !important;
    border-right: 3px solid #93c1f2;
    background: #fff;
}
span.form-steps {
    position: relative;
    padding: 0px 6px;
    margin-right: 6px;
    border: 1px solid #00267b63;
    border-radius: 50px;
    background: #b3d6fb;
    color: #0000008a;
}

/*a.nav-link.active span.form-steps {
    color: #fff;
    background: #00cc33;
}
*/
a.nav-link.active span.form-steps {
    color: #0000008a;
    background: #f8ff23ed;
}

label.radio-inline {
    margin-right: 10px;
    padding-bottom: 0px;
    position: relative;
    top: 5px;
    cursor: pointer;
}
label.radio-inline input {
    cursor: pointer;
}
</style>
<section id="add-course">
    <div class="container">
        <div class="row my-5">
            <!-- Instractor panel Left side-bar start -->
            <?php include ('left_sidebar.php'); ?>
            <!-- Instractor panel Left side-bar End -->

            <div class="col-md-8">

                <div id="msg-container" class="card pl-4 pt-4 pb-2 bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <p> <strong id="message" class="text-secondary h3"> নতুন কোর্স তৈরি করুন</strong></p>
                        </div>
                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/course-manage.php" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-shopping-basket tx-2x text-secondary"></i> কোর্সগুলো দেখুন
                            </a>
                        </div>
                    </div>
                </div>

                <div id="lukochuri" class="card-body bg-light" data-select2-id="17">
                    <div class="row">
<?php if(isset($response) && !empty($response)) { ?>
    <div class="col-12 col-sm-12 col-md-12 text-center alert alert-<?php echo $response["type"]; ?> fs26">
        <?php echo $response["message"]; ?>
    </div>
    <?php }else{?>
 <div class="col-md-12 text-center alert alert-warning fs26 mb-3">সবগুলো ধাপ এর তথ্য পূরণ করে কোর্স তৈরি সম্পন্ন করুন</div>
<?php }?>

                    </div>
                    

                    <div class="row  w-100" data-select2-id="16">
                        <div class="col-xl-12" data-select2-id="15">
                                <div id="basicwizard" data-select2-id="basicwizard">

                                    <ul class="nav nav-pills nav-justified form-wizard-header">
                                        <?php if($course['ins_mc_step']==0){?>
                                        <li class="nav-item">
                                            <a id="first" href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                <span class="form-steps">১</span><span class="d-none d-sm-inline">সাধারণ</span>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php if($course['ins_mc_step']>0){ ?>
                                        <li class="nav-item">
                                            <a id="first" href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                <span class="form-steps">১</span><span class="d-none d-sm-inline">সাধারণ</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-bell-alert mr-1"></i>
                                                <span class="form-steps">২</span><span class="d-none d-sm-inline">কোর্স বিষয়</span>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php if($course['ins_mc_step']>1){ ?>
                                        <li class="nav-item">
                                            <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-currency-cny mr-1"></i>
                                                <span class="form-steps">৩</span><span class="d-none d-sm-inline">প্রাইসিং</span>
                                            </a>
                                        </li>                                        
                                        <?php } ?>
                                        <?php if($course['ins_mc_step']>2){ ?>
                                        <li class="nav-item">
                                            <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-library-video mr-1"></i>
                                                <span class="form-steps">৪</span><span class="d-none d-sm-inline">মিডিয়া</span>
                                            </a>
                                        </li>                                        
                                        <?php } ?>
                                        <?php if($course['ins_mc_step']>3){ ?>
                                        <li class="nav-item">
                                            <a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-tag-multiple mr-1"></i>
                                                <span class="form-steps">৫</span><span class="d-none d-sm-inline">মার্কেটিং</span>
                                            </a>
                                        </li>
                                        <?php } ?>


<!--                                        <li class="nav-item">
                                            <a  id="last" href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                <span class="form-steps">৬</span><span class="d-none d-sm-inline">সর্বশেষ</span>
                                            </a>
                                        </li>-->
                                    </ul>
<?php
if(isset($_POST['submit_step_one_basic'])){
    $title  = get_safe_value($con,htmlspecialchars($_POST['title']));
    $category = get_safe_value($con,htmlspecialchars($_POST['category']));

    $level = get_safe_value($con,htmlspecialchars($_POST['level']));
    $language = get_safe_value($con,htmlspecialchars($_POST['language']));   
    $is_top_course = get_safe_value($con,htmlspecialchars($_POST['is_top_course']));

    if(isset($_POST['sub_category'])){
        $sub_category = get_safe_value($con,htmlspecialchars($_POST['sub_category']));
            
    $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_title` = '$title', `ins_mc_catg_id` = '$category', `ins_mc_sub_catg_id` = '$sub_category', `ins_mc_level` = '$level', `ins_mc_language` = '$language', `ins_mc_priority` = '$is_top_course' WHERE `ins_mc_url` = '$ins_mc_url'";

    }else{
            
    $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_title` = '$title', `ins_mc_catg_id` = '$category', `ins_mc_sub_catg_id` = NULL, `ins_mc_level` = '$level', `ins_mc_language` = '$language', `ins_mc_priority` = '$is_top_course' WHERE `ins_mc_url` = '$ins_mc_url'";

    }
    if (mysqli_query($con, $update_course_sql)) {

		echo reloader($reload_path.'&type=success'.'&step=1',0);   
        die();
        exit();

    }  else {
		echo reloader($reload_path.'&type=danger'.'&step=1',0);   
        die();
        exit();
    }
}
?>
                                    <div class="tab-content b-0 mb-0" data-select2-id="13">
                                        <div class="tab-pane active" id="basic" data-select2-id="basic">
                                        <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])."?url=".$ins_mc_url; ?>" method="POST">
                                        <div class="row justify-content-center pl-3">
                                            <div class="col-xl-12">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="course_title">কোর্সের নাম</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" value="<?php if(isset($title)){echo $title;}else{echo $course['ins_mc_title'];} ?>" id="course_title" name="title" placeholder="এখানে কোর্সের নাম লিখুন" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3" data-select2-id="10">
                                                        <label class="col-md-3 col-form-label" for="main_category">ক্যাটেগরি</label>
                                                        <div class="col-md-9">
                                                        <select id="main_category" name="category" class="form-control select2" onchange="get_sub_category('main_category','','sub_category')">
                                                                <?php 
                                                                    $ins_mc_all_categories_q = "SELECT * FROM `instructor_video_categories` WHERE 1";
                                                                    $res_ins_mc_all_categories = mysqli_query($con, $ins_mc_all_categories_q);
                                                                    $cnt_ins_mc_all_catg = mysqli_num_rows($res_ins_mc_all_categories);
                                                                    
                                                                if(isset($category)){
                                                                    $catg_id = $category;
                                                                    $ins_mc_categories_q = "SELECT * FROM `instructor_video_categories` WHERE `ins_catg_id` = '$catg_id'";
                                                                    $res_ins_mc_categories = mysqli_query($con, $ins_mc_categories_q);
                                                                    $cnt_ins_mc_catg = mysqli_num_rows($res_ins_mc_categories);
                                                                    $ins_mc_category = mysqli_fetch_assoc($res_ins_mc_categories);
                                                                    
                                                                    if($cnt_ins_mc_catg>0){
                                                                        echo '<option value="'.$ins_mc_category['ins_catg_id'].'" hidden selected>'.$ins_mc_category['ins_catg_title'].'</option>';
                                                                    ?>   
                                                                    <script>
                                                                        jQuery(document).ready(function($){
                                                                          get_sub_category('main_category','<?=$course['ins_mc_sub_catg_id'] ?>','sub_category');
                                                                          
                                                                          console.log(<?=$course['ins_mc_sub_catg_id'] ?>);
                                                                        });
                                                                    </script>
                                                                    
                                                                    <?php
                                                                    }
                                                                    
                                                                }else{
                                                                    
                                                                    if(!is_null($course['ins_mc_catg_id'])){
                                                                        $catg_id =  $course['ins_mc_catg_id'];
                                                                        $ins_mc_categories_q = "SELECT * FROM `instructor_video_categories` WHERE `ins_catg_id` = '$catg_id'";
                                                                        $res_ins_mc_categories = mysqli_query($con, $ins_mc_categories_q);
                                                                        $cnt_ins_mc_catg = mysqli_num_rows($res_ins_mc_categories);
                                                                        $ins_mc_category = mysqli_fetch_assoc($res_ins_mc_categories);
                                                                        
                                                                        if($cnt_ins_mc_catg>0){
                                                                            echo '<option value="'.$ins_mc_category['ins_catg_id'].'" hidden selected>'.$ins_mc_category['ins_catg_title'].'</option>';
                                                                    ?>   
                                                                    <script>
                                                                        jQuery(document).ready(function($){
                                                                          get_sub_category('main_category','<?=$course['ins_mc_sub_catg_id'] ?>','sub_category');
                                                                            
                                                                          console.log(<?=$course['ins_mc_sub_catg_id'] ?>);
                                                                        });
                                                                    </script>
                                                                    
                                                                    <?php
                                                                    }                                                                       

                                                                    }else{
                                                                ?>            
                                                                       <option value="" hidden selected>ক্যাটেগরি সিলেক্ট করুন </option>
                                                               <?php
                                                                        }
                                                                            
                                                                    } 
                                                                    
                                                                    if($cnt_ins_mc_all_catg>0){
                                                                        foreach($res_ins_mc_all_categories as $mc_category){
                                                                            echo '<option value="'.$mc_category['ins_catg_id'].'">'.$mc_category['ins_catg_title'].'</option>';
                                                                            }
                                                                    }
                                                                 
                                                                 ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row mb-3" id="sub_category"></div>
                                    
                                                    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>-->
                                                    <script type = "text/javascript" >
                                                        function get_sub_category(em1, em2, rtn) {
                                                            
                                                            var element = document.getElementById(em1).value;
                                                            document.getElementById(rtn).innerHTML = '<center><img height="10px" width="10px" src="loader.gif" alt="Uploading...."/></center>';
                                                            if (em1.length == 0) {
                                                                return;
                                                            }
                                                            if (window.XMLHttpRequest) {
                                                                xmlhttp = new XMLHttpRequest();
                                                            } else {
                                                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                            }
                                                            xmlhttp.onreadystatechange = function() {
                                                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                                    document.getElementById(rtn).innerHTML = xmlhttp.responseText;
                                                                }
                                                            }
                                                            xmlhttp.open("GET", "instructor/sub-cat-ajax.php?cid=" + element + "&cmd=" + em2, true);
                                                            xmlhttp.send();
                                                        }
                                                        
                                                    </script>
                                                
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="level">পারদর্শিতা লেভেল</label>
                                                    <div class="col-md-9">
                                                        <select name="level" class="form-control select2 ">
                                                            <?php
                                                                if(!empty($course['ins_mc_level'])){
                                                                    echo '<option value="'.$course['ins_mc_level'].'" hidden selected>'.$course['ins_mc_level'].'</option>';
                                                            ?>
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Advanced">Advanced</option>                                                           
                                                            <?php
                                                                }else{
                                                            ?>   
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Advanced">Advanced</option>                                                          
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="language_made_in">কোর্সের ভাষা</label>
                                                    <div class="col-md-9">
                                                        <select name="language" class="form-control select2">
                                                            <?php
                                                                if(!empty($course['ins_mc_language'])){
                                                                    echo '<option value="'.$course['ins_mc_language'].'" hidden selected>'.$course['ins_mc_language'].'</option>';
                                                            ?>
                                                            <option value="বাংলা">বাংলা</option>
                                                            <option value="ইংরেজি">ইংরেজি</option>                                                             
                                                            <?php
                                                                }else{
                                                            ?>   
                                                            <option value="বাংলা">বাংলা</option>
                                                            <option value="ইংরেজি">ইংরেজি</option>                                                            
                                                            <?php
                                                                }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
<!--                                                <div class="form-group row mb-3">
                                                    <div class="offset-md-3 col-md-9">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="is_top_course" id="is_top_course" value="1">
                                                            <label class="custom-control-label" for="is_top_course">এটি টপ কোর্স হলে এখানে টিক চিহ্ন দিন</label>
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="form-group row mb-3">
                                                      <label class="col-md-3 col-form-label" for="is_top_course">এটি কি টপ কোর্স ?</label>
                                                      <div class="col-md-9"> 
                                                        <label class="radio-inline" for="is_top_course_0">
                                                          <input type="radio" name="is_top_course" id="is_top_course_0" value="1" <?php if($course['ins_mc_priority'] == 1){echo 'checked="checked"';} ?>>
                                                          হ্যা
                                                        </label> 
                                                        <label class="radio-inline" for="is_top_course_1">
                                                          <input type="radio" name="is_top_course" id="is_top_course_1" value="0" <?php if($course['ins_mc_priority'] == 0){echo 'checked="checked"';} ?>>
                                                          না
                                                        </label>
                                                      </div>
                                                    </div>                                                
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-5">
                                                <div class="text-center">
                                                    <button type="submit" name="submit_step_one_basic" class="btn btn-block btn-primary text-center myfont fs26">তথ্য সেভ করুন</button>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        </form>
                                    </div> 

<?php
if(isset($_POST['submit_step_two_requirements'])){
    
    
    if(!empty($_POST['requirements'])){
    				
        foreach($_POST['requirements'] as $requirement_name){
        
            $reqs[] = $requirement_name;
        }

        $requirements = implode(', ',$reqs);
    
    }
    	
   if(!empty($_POST['outcomes'])){
							
		foreach($_POST['outcomes'] as $outcome_name){
		    
	    	$otcs[] = $outcome_name;
		}
	    
	    $outcomes = implode(', ',$otcs);

	}  
       
    $short_description = get_safe_value($con,htmlspecialchars($_POST['short_description']));
    $long_description = get_safe_value($con,htmlspecialchars($_POST['long_description'])); 

    $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_short_desc` = '$short_description',`ins_mc_long_desc` = '$long_description',`ins_mc_requirements` = '$requirements',`ins_mc_outcomes` = '$outcomes' WHERE `ins_mc_url` = '$ins_mc_url'";

    if (mysqli_query($con, $update_course_sql)) {

		echo reloader($reload_path.'&type=success'.'&step=2',0);   
        die();
        exit();

    }  else {
		echo reloader($reload_path.'&type=danger'.'&step=2',0);   
        die();
        exit();
    }
}
?>

                                    <div class="tab-pane" id="requirements">
                                       <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])."?url=".$ins_mc_url; ?>" method="POST">
                                        <div class="row justify-content-center pl-3">
                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="requirements">কোর্সটি কাদের জন্য</label>
                                                    <div class="col-md-9">
                                                        <div id="requirement_area">
                                                            <div class="d-flex mt-2">
                                                                <div class="flex-grow-1 px-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="requirements[]" id="requirements" value="" placeholder="Provide requirements">
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
                                                                </div>
                                                            </div>
                                                            <div id="blank_requirement_field" style="display: none;">

                                                            </div>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="outcomes">কোর্সটির উপকারিতা</label>
                                                    <div class="col-md-9">
                                                        <div id="outcomes_area">
                                                            <div class="d-flex mt-2">
                                                                <div class="flex-grow-1 px-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="outcomes[]" id="outcomes" value="" placeholder="Provide outcomes">
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-success btn-sm" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
                                                                </div>
                                                            </div>
                                                            <div id="blank_outcome_field" style="display: none;">

                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="short_description">কোর্সের ছোট বর্ণনা</label>
                                                    <div class="col-md-9">
                                                        <textarea name="short_description" id="short_description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="long_description">কোর্সের বড় বর্ণনা</label>
                                                    <div class="col-md-9">
                                                        <textarea name="long_description" id="long_description" class="form-control" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-5">
                                                <div class="text-center">
                                                    <button type="submit" name="submit_step_two_requirements" class="btn btn-block btn-primary text-center myfont fs26">তথ্য সেভ করুন</button>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        </form>
                                    </div>
<?php
if(isset($_POST['submit_step_three_pricing'])){
    $is_free_course = get_safe_value($con,htmlspecialchars($_POST['is_free_course']));
    $original_price = get_safe_value($con,htmlspecialchars($_POST['original_price']));
    $offer_price = get_safe_value($con,htmlspecialchars($_POST['offer_price']));
    $discount_till_date = get_safe_value($con,htmlspecialchars($_POST['discount_till_date']));
    
    //$discount_type = get_safe_value($con,htmlspecialchars($_POST['discount_type']));
    //$discounted_price = get_safe_value($con,htmlspecialchars($_POST['discounted_price']));

    $update_course_sql = "UPDATE `instructor_made_courses` SET  `ins_mc_free` = '$is_free_course', `ins_mc_orginal_fee`= '$original_price', `ins_mc_offer_fee`='$offer_price', `ins_mc_discount_till_date` = '$discount_till_date' WHERE `ins_mc_url` = '$ins_mc_url'";

    if (mysqli_query($con, $update_course_sql)) {

		echo reloader($reload_path.'&type=success'.'&step=3',0);   
        die();
        exit();

    }  else {
		echo reloader($reload_path.'&type=danger'.'&step=3',0);   
        die();
        exit();
    }
}
?>
                                    <div class="tab-pane" id="pricing">
                                       <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])."?url=".$ins_mc_url; ?>" method="POST">
                                        <div class="row justify-content-center pl-3">
                                            <div class="col-xl-12">
<!--                                                <div class="form-group row mb-3">
                                                    <div class="offset-md-3 col-md-9">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="is_free_course" id="is_free_course" value="1">
                                                            <label class="custom-control-label" for="is_free_course"> এটি ফ্রি কোর্স হলে এখানে টিক চিহ্ন দিন</label>
                                                        </div>
                                                    </div>
                                                </div>-->

                                                <div class="form-group row mb-3">
                                                      <label class="col-md-3 col-form-label" for="radios">এটি কি ফ্রি কোর্স?</label>
                                                      <div class="col-md-9"> 
                                                        <label class="radio-inline" for="radios-0">
                                                          <input type="radio" name="is_free_course" id="radios-0" value="1" checked="checked">
                                                          হ্যা
                                                        </label> 
                                                        <label class="radio-inline" for="radios-1">
                                                          <input type="radio" name="is_free_course" id="radios-1" value="0">
                                                          না
                                                        </label>
                                                      </div>
                                                    </div>

                                                <div id="whole-price" class="paid-course-stuffs">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="original_price">কোর্সের বাজারমূল্য</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" id="original_price" name="original_price" value="<?php if(isset($original_price)){echo $original_price;}else{echo $course['ins_mc_orginal_fee'];} ?>" placeholder="এখানে ক্রয়মূল্য লিখুন" min="0">
                                                        </div>
                                                    </div>
                                                    
<!--                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="offer_price">Course Offer Price </label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" id="offer_price" name="offer_price" placeholder="Enter course offer price" min="0">
                                                        </div>
                                                    </div>-->

<!--                                                    <div class="form-group row mb-3">
                                                        <label for="dis" class="col-md-3 text-dark h6" >Discount Type</label>
                                                    <div class="col-md-9">
                                                          <select class="form-control" id="dis" name="discount_type">
                                                              <option value="0" selected>Percentage (%)</option>
                                                              <option value="1">Fixed (TK)</option>
                                                          </select>
                                                          </div>
                                                    </div>-->
                                                    
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="offer_price">ABC বিক্রয় মূল্য</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="offer_price" id="offer_price" value="<?php if(isset($offer_price)){echo $offer_price;}else{echo $course['ins_mc_offer_fee'];} ?>" placeholder="এখানে বিক্রয়মূল্য লিখুন" onkeyup="calculateDiscountPercentage(this.value)" min="0">
                                                            <small class="text-muted">&nbsp This course has <span id="discounted_percentage" class="text-danger">0%</span> Discount</small>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="discount_till_date">এই মুল্য থাকবে ?</label>
                                                        <div class="col-md-9">
                                                            <input type="date" class="form-control" value="<?php if(isset($discount_till_date)){echo $discount_till_date;}else{echo $course['ins_mc_discount_till_date'];} ?>" id="discount_till_date" name="discount_till_date">
                                                            <small class="text-muted">&nbsp কতদিন ডিসকাউন্ট থাকবে সিলেক্ট করুন</small>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-5">
                                                <div class="text-center">
                                                    <button type="submit" name="submit_step_three_pricing" class="btn btn-block btn-primary text-center myfont fs26">তথ্য সেভ করুন</button>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        </form>
                                    </div>
<?php
if(isset($_POST['submit_step_four_media'])){
    
    $course_overview_provider = get_safe_value($con,htmlspecialchars($_POST['course_overview_provider']));
    $ins_mc_vid_link = get_safe_value($con,htmlspecialchars($_POST['course_overview_url']));
    //$ins_mc_url = get_safe_value($con,htmlspecialchars($_POST['website_url']));
    
    $response_image = imageChecker('thumbnail_image');
    
     if($response_image['valid'] == false){
                $response = $response_image;
    }else{
        // image uploaded code start    
        $thumbnail_image = $_FILES['thumbnail_image']['name'];
        $thumbnail_image_after_explode_extention = strtolower(pathinfo($thumbnail_image, PATHINFO_EXTENSION));
        $image_new_name = time() . "-" . rand(111, 999) . "." . $thumbnail_image_after_explode_extention;
        // image uploaded code End 

        $previous_image = $course['ins_mc_image'];
        $update_course_sql = "UPDATE `instructor_made_courses` SET `ins_mc_image`= '$image_new_name',`ins_mc_vd_provider`='$course_overview_provider',`ins_mc_vid_link`='$ins_mc_vid_link' WHERE `ins_mc_url` = '$ins_mc_url'";
    
        if (mysqli_query($con, $update_course_sql)) {
            
            $ImagePath = '../upload/instructor-made-courses/'.$previous_image;
            if (file_exists($ImagePath)) {
                unlink($ImagePath);
            }
        
            $image_tmp_location = $_FILES['thumbnail_image']['tmp_name'];
            $image_new_location = "../upload/instructor-made-courses/" . $image_new_name;
            move_uploaded_file($image_tmp_location, $image_new_location);


    		echo reloader($reload_path.'&type=success'.'&step=4',0);   
            die();
            exit();
    
        }  else {
    		echo reloader($reload_path.'&type=danger'.'&step=4',0);   
            die();
            exit();
        }
    
    }


}
?>                                    
                                    <div class="tab-pane" id="media" data-select2-id="media">
                                        <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])."?url=".$ins_mc_url; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row justify-content-center pl-3">
                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3" data-select2-id="160">
                                                    <label class="col-md-3 col-form-label" for="course_overview_provider">ভিডিও সাইট</label>
                                                    <div class="col-md-9">
                                                        <select name="course_overview_provider" class="form-control select2">
                                                            <option value="youtube" data-select2-id="8">Youtube</option>
                                                            <option value="vimeo" data-select2-id="163">Vimeo</option>
                                                            <option value="html5" data-select2-id="164">Html5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="course_overview_url">ভিডিও লিংক</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="course_overview_url" id="course_overview_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="course_overview_url">কোর্সের ছবি সংযুক্ত করুন এখানে</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="thumbnail_image" id="course_overview_url" accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi">
                                                        <label for="course_thumbnail" class="btn"> <i class="fa fa-camera"></i> Course thumbnail image</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-5">
                                                <div class="text-center">
                                                    <button type="submit" name="submit_step_four_media" class="btn btn-block btn-primary text-center myfont fs26">তথ্য সেভ করুন</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
<?php
if(isset($_POST['submit_step_five_seo'])){
    $meta_keywords = get_safe_value($con,htmlspecialchars($_POST['meta_keywords']));
    $meta_description = get_safe_value($con,htmlspecialchars($_POST['meta_description']));
    
    
    $update_course_sql = "UPDATE `instructor_made_courses` SET  WHERE `ins_mc_url` = '$ins_mc_url'";

    if (mysqli_query($con, $update_course_sql)) {

		echo reloader($reload_path.'&type=success'.'&step=5',0);   
        die();
        exit();

    }  else {
		echo reloader($reload_path.'&type=danger'.'&step=5',0);   
        die();
        exit();
    }
}
?>                                     
                                    <div class="tab-pane" id="seo">
                                        <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])."?url=".$ins_mc_url; ?>" method="POST">
                                        <div class="row justify-content-center pl-3">
<!--                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="website_url">URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="website_url" name="website_url" placeholder="no space is allowed use hyphen" data-role="tagsinput" required>
                                                        <span class="help-block">URL Example: my-graphics-hero</span> 
                                                    </div>
                                                </div>
                                            </div>-->
                                            
                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="website_keywords">Meta keywords</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Write a keyword and then press enter button" data-role="tagsinput" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="meta_description">Meta description</label>
                                                    <div class="col-md-9">
                                                        <textarea name="meta_description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-5">
                                                <div class="text-center">
                                                    <button type="submit" name="submit_step_five_seo" class="btn btn-block btn-primary text-center myfont fs26">তথ্য সেভ করুন</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="finish">
                                            
                                    </div>

                                </div> 
                            </div> 
                        </form>
                    </div>
                    </div>
                    </div>

                </div>

        </div>

    </div>
</section>


<script type="text/javascript">

    var blank_outcome = '<div class="d-flex mt-2"><div class="flex-grow-1 px-3"><div class="form-group"><input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="Provide outcomes"></div></div><div class=""><button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeOutcome(this)"> <i class="fa fa-minus"></i> </button></div></div>';
    var blank_requirement = '<div class="d-flex mt-2"><div class="flex-grow-1 px-3"><div class="form-group"><input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements"></div></div><div class=""><button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button></div></div>';
    jQuery(document).ready(function() {
    jQuery('#blank_outcome_field').hide();
    jQuery('#blank_requirement_field').hide();
    });
    function appendOutcome() {
    jQuery('#outcomes_area').append(blank_outcome);
    }
    function removeOutcome(outcomeElem) {
    jQuery(outcomeElem).parent().parent().remove();
    }

    function appendRequirement() {
    jQuery('#requirement_area').append(blank_requirement);
    }
    function removeRequirement(requirementElem) {
    jQuery(requirementElem).parent().parent().remove();
    }

    function priceChecked(elem){
    if (jQuery('#discountCheckbox').is(':checked')) {

        jQuery('#discountCheckbox').prop( "checked", false );
    }else {

        jQuery('#discountCheckbox').prop( "checked", true );
    }
    }

    function topCourseChecked(elem){
    if (jQuery('#isTopCourseCheckbox').is(':checked')) {

        jQuery('#isTopCourseCheckbox').prop( "checked", false );
    }else {

        jQuery('#isTopCourseCheckbox').prop( "checked", true );
    }
    }

/*    function isFreeCourseChecked() {

    if (jQuery('#is_free_course').is(':checked')) {
        console.log)('hello');
        $('#price').prop('required',false);
        $('#whole-price').hide();
    }else {
        $('#price').prop('required',true);
    }
    }*/
    
    function calculateDiscountPercentage(discounted_price) {
    if (discounted_price > 0) {
        var actualPrice = jQuery('#original_price').val();
        if ( actualPrice > 0) {
        var reducedPrice = actualPrice - discounted_price;
        var discountedPercentage = (reducedPrice / actualPrice) * 100;
        if (discountedPercentage > 0) {
            jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2)+'%');

        }else {
            jQuery('#discounted_percentage').text('0%');
        }
        }
    }
    }


    

</script>

<script src="http://demo.academy-lms.com/default/assets/backend/js/app.min.js"></script>
<!-- third party js -->
<script src="http://demo.academy-lms.com/default/assets/backend/js/pages/demo.form-wizard.js"></script>
<!-- dragula js-->

<?php
    include ('../footer.php');
?>




