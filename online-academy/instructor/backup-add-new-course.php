<?php
include ('../header.php');

/*if(isset($_GET['token'])){
    
}else {
 echo reloader($site_link.'/instructor/add-new-course.php?token=456789',0);   
die();    
}*/


mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
    
if(isset($_POST['submit'])){
    
$title  = get_safe_value($con,htmlspecialchars($_POST['title']));
$category = get_safe_value($con,htmlspecialchars($_POST['category']));
$is_top_course = get_safe_value($con,htmlspecialchars($_POST['is_top_course']));

$meta_keywords = get_safe_value($con,htmlspecialchars($_POST['meta_keywords']));
$meta_description = get_safe_value($con,htmlspecialchars($_POST['meta_description']));
$is_free_course = get_safe_value($con,htmlspecialchars($_POST['is_free_course']));
$original_price = get_safe_value($con,htmlspecialchars($_POST['original_price']));
$offer_price = get_safe_value($con,htmlspecialchars($_POST['offer_price']));

$discount_type = get_safe_value($con,htmlspecialchars($_POST['discount_type']));
$discounted_price = get_safe_value($con,htmlspecialchars($_POST['discounted_price']));
$short_description = get_safe_value($con,htmlspecialchars($_POST['short_description']));
$long_description = get_safe_value($con,htmlspecialchars($_POST['long_description']));
$level = get_safe_value($con,htmlspecialchars($_POST['level']));
$language = get_safe_value($con,htmlspecialchars($_POST['language']));
$course_overview_provider = get_safe_value($con,htmlspecialchars($_POST['course_overview_provider']));
$ins_mc_vid_link = get_safe_value($con,htmlspecialchars($_POST['course_overview_url']));
$ins_mc_url = get_safe_value($con,htmlspecialchars($_POST['website_url']));

   	
   	if(!empty($_POST['outcomes'])){
								
			foreach($_POST['outcomes'] as $outcome_name){

				$otcs[] = $outcome_name;
				$outcomes = implode(', ',$otcs);
				
				}

		}else{
		    $outcomes = '';
		}
		
		
    if(!empty($_POST['requirements'])){
    				
        foreach($_POST['requirements'] as $requirement_name){
        
            $reqs[] = $requirement_name;
            $requirements = implode(', ',$reqs);
        
        }
    
    }else{
        $requirements = '';
    }
    
    
    // image uploaded code start

    $thumbnail_image = $_FILES['thumbnail_image']['name'];
    $thumbnail_image_after_explode_extention = strtolower(pathinfo($thumbnail_image, PATHINFO_EXTENSION));
    $thumbnail_image_new_name = time() . "-" . rand(111, 999) . "." . $thumbnail_image_after_explode_extention;
    
    $image_tmp_location = $_FILES['thumbnail_image']['tmp_name'];
    $image_new_location = "../upload/instructor-made-courses/" . $thumbnail_image_new_name;
    move_uploaded_file($image_tmp_location, $image_new_location);

    // image uploaded code End
    
   
    $instructor_id = $_SESSION['abc_ins_id'];
    
    $insert_query = "INSERT INTO `instructor_made_courses`(`ins_mc_instrc_id`, `ins_mc_title`, `ins_mc_category`, `ins_mc_meta_keys`, `ins_mc_meta_desc`, `ins_mc_image`, `ins_mc_free`, `ins_mc_orginal_fee`,
    `ins_mc_offer_fee`, `ins_mc_discount_type`, `ins_mc_discount`, `ins_mc_short_desc`, `ins_mc_long_desc`, `ins_mc_level`, `ins_mc_language`, `ins_mc_vd_provider`, `ins_mc_vid_link`, `ins_mc_url`, `ins_mc_outcomes`, `ins_mc_requirements`) 
    VALUES ('$instructor_id', '$title', '$category', '$meta_keywords', '$meta_description', '$thumbnail_image_new_name' ,'$is_free_course' ,'$original_price' ,'$offer_price' ,'$discount_type' ,'$discounted_price' ,'$short_description' ,'$long_description' ,'$level' ,'$language' ,'$course_overview_provider' ,'$ins_mc_vid_link', '$ins_mc_url' ,'$outcomes' ,'$requirements')";
    //$insert_to_db = mysqli_query($con, $insert_query);
    
//echo $insert_query;

        if (mysqli_query($con, $insert_query)) {
            
            inst_notifier($instructor_id,'Created a new course: '.$title,$type='success',$status=0,$priotity=0,$np2con);
            
            notifier($msg='Sucessfully Created a new course: '.$title.'!',$alert=2,$time=3000);
            
            echo '<script type="text/javascript"> 
                $(document).ready(function () {
                    $("#message").empty();
                    $("#message").removeClass("text-secondary h3");
                    $("#message").addClass("text-success");
                    $("#msg-container").addClass("alert alert-success");
                    $("#message").append("সফলভাবে নতুন কোর্স তৈরি হয়েছে");
                    $("#lukayito").show();
                    $("#lukochuri").hide();
                      });
                </script>';
                
                echo '<style>#lukayito{display:block !important}</style>';
                
        } else {
          echo "Error: " . $insertuser . "<br>" . mysqli_error($con);
          notifier($msg='Course not created! Please try again',$alert=4,$time=3000);
        }
    
    /*echo reloader('add-new-course.php',0);
    exit();
    die();*/
    
}


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

                    <div id="lukayito" class="row">
                        <div class="col-md-6">
                             <button id="add-new-course"  class="btn btn-primary text-white"> <i class="fa fa-plus-square"></i>  নতুন কোর্স তৈরি করুন</button>
                        </div>
                    </div>
                    
                    
                <div id="lukochuri" class="card-body bg-light" data-select2-id="17">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="header-title mb-3">কোর্স তৈরির ফর্ম</h4>
                        </div>

<!--                        <div class="col-md-6 text-right pb-3">
                            <a href="course_manage.php" class="alignToTitle btn btn-outline-info btn-rounded btn-sm"> <i class=" fa fa-long-arrow-left"></i> Back to course list</a>        
                        </div>-->
                    </div>
                    

                    <div class="row  w-100" data-select2-id="16">
                        <div class="col-xl-12" data-select2-id="15">
                            <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" data-select2-id="14">
                                <div id="basicwizard" data-select2-id="basicwizard">

                                    <ul class="nav nav-pills nav-justified form-wizard-header">
                                        <li class="nav-item">
                                            <a id="first" href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                <span class="d-none d-sm-inline">সাধারণ</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-bell-alert mr-1"></i>
                                                <span class="d-none d-sm-inline">কোর্স কন্টেন্ট</span>
                                            </a>
                                        </li>
<!--                                        <li class="nav-item">
                                            <a href="#outcomes" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-camera-control mr-1"></i>
                                                <span class="d-none d-sm-inline">কোর্সটির উপকারিতা</span>
                                            </a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-currency-cny mr-1"></i>
                                                <span class="d-none d-sm-inline">প্রাইসিং</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-library-video mr-1"></i>
                                                <span class="d-none d-sm-inline">মিডিয়া</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-tag-multiple mr-1"></i>
                                                <span class="d-none d-sm-inline">মার্কেটিং</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a  id="last" href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                <span class="d-none d-sm-inline">সাবমিট</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content b-0 mb-0" data-select2-id="13">
                                        <div class="tab-pane active" id="basic" data-select2-id="basic">
                                            <div class="row justify-content-center" data-select2-id="12">
                                                <div class="col-xl-10" data-select2-id="11">
                                                    <input type="hidden" name="course_type" value="general">                                       
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="course_title">Course title <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter course title" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="short_description">Short description *</label>
                                                        <div class="col-md-9">
                                                            <textarea name="short_description" id="short_description" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="long_description">Long description *</label>
                                                        <div class="col-md-9">
                                                            <textarea name="long_description" id="long_description" class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3" data-select2-id="10">
                                                        <label class="col-md-3 col-form-label" for="main_category">Category<span class="required">*</span></label>
                                                        <div class="col-md-9">
                                                        <select id="main_category" name="category" class="form-control select2"  onchange="get_category('main_category','1','sub_category')">
                                                            <option value="" hidden selected>ক্যাটেগরি সিলেক্ট করুন </option>

                                                            <?php
                                                            $ins_video_categories_q = "SELECT * FROM `instructor_video_categories` WHERE 1";
                                                            $res_video_categories = mysqli_query($con, $ins_video_categories_q);
                                                            $cnt_skill = mysqli_num_rows($res_video_categories);
                                                            
                                                            if($cnt_skill>0){
                                                                foreach($res_video_categories as $video_category){
                                                                    echo '<option value="'.$video_category['ins_catg_id'].'">'.$video_category['ins_catg_title'].'</option>';
                                                            }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row mb-3" id="sub_category"></div>
                                    
                                                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
                                                    <script type = "text/javascript" >
                                                        function get_category(em1, em2, rtn) {
                                                            
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
                                                
                                                <div class="form-group row mb-3" data-select2-id="98">
                                                    <label class="col-md-3 col-form-label" for="level">Level *</label>
                                                    <div class="col-md-9">
                                                        <select name="level" class="form-control select2 ">
                                                            <option value="1" data-select2-id="4">Beginner</option>
                                                            <option value="2" data-select2-id="100">Intermediate</option>
                                                            <option value="3" data-select2-id="99">Advanced</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3" data-select2-id="102">
                                                    <label class="col-md-3 col-form-label" for="language_made_in">Language made in *</label>
                                                    <div class="col-md-9">
                                                        <select name="language" class="form-control select2">
                                                            <option value="বাংলা" data-select2-id="6">বাংলা</option>
                                                            <option value="ইংরেজি" data-select2-id="103">ইংরেজি</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <div class="offset-md-3 col-md-9">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="is_top_course" id="is_top_course" value="1">
                                                            <label class="custom-control-label" for="is_top_course">Check if this course is top course</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- end tab pane -->

                                    <div class="tab-pane" id="requirements">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="requirements">কোর্সটি কাদের জন্য *</label>
                                                    <div class="col-md-9">
                                                        <div id="requirement_area">
                                                            <div class="d-flex mt-2">
                                                                <div class="flex-grow-1 px-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements">
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
                                                                </div>
                                                            </div>
                                                            <div id="blank_requirement_field" style="display: none;">
                                                                <div class="d-flex mt-2">
                                                                    <div class="flex-grow-1 px-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements">
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="outcomes">কোর্সটির উপকারিতা *</label>
                                                    <div class="col-md-9">
                                                        <div id="outcomes_area">
                                                            <div class="d-flex mt-2">
                                                                <div class="flex-grow-1 px-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="Provide outcomes">
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-success btn-sm" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
                                                                </div>
                                                            </div>
                                                            <div id="blank_outcome_field" style="display: none;">
                                                                <div class="d-flex mt-2">
                                                                    <div class="flex-grow-1 px-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="outcomes[]" id="outcomes" placeholder="Provide outcomes">
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeOutcome(this)"> <i class="fa fa-minus"></i> </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>

<!--                                    <div class="tab-pane" id="outcomes">
                                        <div class="row justify-content-center">

                                        </div>
                                    </div>-->

                                    <div class="tab-pane" id="pricing">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <div class="offset-md-3 col-md-9">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="is_free_course" id="is_free_course" value="1" onclick="isFreeCourseChecked()">
                                                            <label class="custom-control-label" for="is_free_course">Check if this is a free course</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="whole-price" class="paid-course-stuffs">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="original_price">Course Original Price </label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" id="original_price" name="original_price" placeholder="Enter original course price" min="0">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="offer_price">Course Offer Price </label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" id="offer_price" name="offer_price" placeholder="Enter course offer price" min="0">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label for="dis" class="col-md-3 text-dark h6" >Discount Type</label>
                                                    <div class="col-md-9">
                                                          <select class="form-control" id="dis" name="discount_type">
                                                              <option value="0" selected>Percentage (%)</option>
                                                              <option value="1">Fixed (TK)</option>
                                                          </select>
                                                          </div>
                                                    </div>
                                                    


                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="discounted_price">Discounted price </label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="discounted_price" id="discounted_price" onkeyup="calculateDiscountPercentage(this.value)" min="0">
                                                            <small class="text-muted">This course has <span id="discounted_percentage" class="text-danger">0%</span> Discount</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- end tab-pane -->
                                    <div class="tab-pane" id="media" data-select2-id="media">
                                        <div class="row justify-content-center" data-select2-id="162">

                                            <div class="col-xl-10" data-select2-id="161">
                                                <div class="form-group row mb-3" data-select2-id="160">
                                                    <label class="col-md-3 col-form-label" for="course_overview_provider">Course overview provider *</label>
                                                    <div class="col-md-9">
                                                        <select name="course_overview_provider" class="form-control select2">
                                                            <option value="youtube" data-select2-id="8">Youtube</option>
                                                            <option value="vimeo" data-select2-id="163">Vimeo</option>
                                                            <option value="html5" data-select2-id="164">Html5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="course_overview_url">Course overview url *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="course_overview_url" id="course_overview_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <!-- this portion will be generated theme wise from the theme-config.json file Starts-->
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="course_overview_url">Select thumbnail image *</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="thumbnail_image" id="course_overview_url" accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi">
                                                        <label for="course_thumbnail" class="btn"> <i class="fa fa-camera"></i> Course thumbnail image</label>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <!-- this portion will be generated theme wise from the theme-config.json file Ends-->

                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="seo">
                                        <div class="row justify-content-center">
                                            
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="website_url">URL *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="website_url" name="website_url" placeholder="no space is allowed use hyphen" data-role="tagsinput" required>
                                                        <span class="help-block">URL Example: my-graphics-hero</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="website_keywords">Meta keywords *</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Write a keyword and then press enter button" data-role="tagsinput" required>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-xl-10">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="meta_description">Meta description *</label>
                                                    <div class="col-md-9">
                                                        <textarea name="meta_description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="finish">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <br>

                                                    <div class="mb-3 mt-3">
                                                        <button id="success-submit" type="submit" name="submit" class="btn btn-primary text-center" onclick="">Submit</button>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

<!--                                    <ul class="list-inline mb-0 wizard text-center pb-5">
                                        <li class="previous list-inline-item disabled">
                                            <a href="javascript::" class="btn btn-info"> Previous</a>
                                        </li>
                                        <li class="next list-inline-item">
                                            <a href="javascript::" class="btn btn-info"> Next</a>
                                        </li>
                                    </ul>-->

                                </div> <!-- tab-content -->
                            </div> <!-- end #progressbarwizard-->
                        </form>
                    </div>
                    </div><!-- end row-->
                    </div>

                </div>

        </div>

    </div>
</section>


<script type="text/javascript">
    $(document).ready(function () {
        $("#lukayito").hide();
      
/*        $("#success-submit").click(function(){
            $("#message").empty();
            $("#message").removeClass("text-secondary h3");
            $("#message").addClass("text-success");
            $("#msg-container").addClass("alert alert-success");
            $("#message").append("সফলভাবে নতুন কোর্স তৈরি হয়েছে");
            $("#lukayito").show();
            $("#lukochuri").hide();
            
      });  */      
      
      $("#add-new-course").click(function(){
          
            $("#lukayito").hide();
            $("#lukochuri").show();
            $("#last").removeClass("active");
            $("#finish").removeClass("active");
            $("#first").addClass("active");
            $("#basic").addClass("active");
            $(".required-form")[0].reset();
            
      });
      
      
      
    });

    var blank_outcome = jQuery('#blank_outcome_field').html();
    var blank_requirement = jQuery('#blank_requirement_field').html();
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
        var actualPrice = jQuery('#price').val();
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




