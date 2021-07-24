<?php
include ('../header.php');
   
demon('instructor/login.php',2);
?>
<style>

   .frmsa {
       max-width: 850px;
       margin: 0 auto;
       border: 5px solid #fff;
       box-shadow: 0 0 9px #b5b7b4;
       background: linear-gradient( 45deg ,#eff4f8,#73d84700);
       border-radius: 7px;
       width: 100%;
   }

   .apply_sc select {
       margin: 10px;	
       color: #757575;
       -webkit-appearance: none;
       -moz-appearance: none;
       appearance: none;
   }
   .applybtn {
       width: 100%;
       box-shadow: 4px 2px 19px #c3bfbf;
       color: #ffffff !important;
   }
   .applybtn:hover {
       box-shadow: 0px 0px 29px #c3bfbf;	
       background: #12dc36;
       background: linear-gradient(45deg,#1fc332,#1e7d33);
   }
   .success-animation { margin:60px auto;}

   .checkmark {
       border-radius: 50%;
       display: block;
       stroke-width: 2;
       stroke: #4bb71b;
       stroke-miterlimit: 10;
       box-shadow: inset 0px 0px 0px #4bb71b;
       animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
       position:relative;
   }
   .checkmark__circle {
       stroke-dasharray: 166;
       stroke-dashoffset: 166;
       stroke-width: 2;
       stroke-miterlimit: 10;
       stroke: #4bb71b;
       fill: #fff;
       animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
   }
   .checkmark__check {
       transform-origin: 50% 50%;
       stroke-dasharray: 48;
       stroke-dashoffset: 48;
       animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
   }
   @keyframes stroke {
   100% {
   stroke-dashoffset: 0;
   }
   }
   @keyframes scale {
   0%, 100% {
   transform: none;
   }
   50% {
   transform: scale3d(1.1, 1.1, 1);
   }
   }
   @keyframes fill {
   100% {
   box-shadow: inset 0px 0px 0px 30px #4bb71b;
   }
   }
   
   .bred_cus {
    border-top: 10px solid #07a207;
    background: #eff4f8;
    }   
    
   textarea{
          width: 100% !important;
   }
</style>

<?php

mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
    
if(isset($_POST['submit'])){

   	if(!empty($_POST['skills'])){
								
			foreach($_POST['skills'] as $skill_name){

				$skills[] = $skill_name;
				$skillset = implode(', ',$skills);
				
				}
		}
    
    
    $comment = get_safe_value($con,htmlspecialchars($_POST['comment']));


    //nid front
    $response_nid_front = imageChecker('nidfront');
    
    //nid back
    $response_nid_back = imageChecker('nidback');
    
    //certificate
    $response_certificate = imageChecker('certificate');
    
    if($response_nid_front['valid'] == false){
        $response = $response_nid_front;
        
    }else{
    
        if($response_nid_back['valid'] == false){
            $response = $response_nid_back;
            
        }else {
    
            if($response_certificate['valid'] == false){
                $response = $response_certificate;
                
            }else{
                
                        // image uploaded code start    
                        $nidfront_image = $_FILES['nidfront']['name'];
                        $explode_extention = strtolower(pathinfo($nidfront_image, PATHINFO_EXTENSION));
                        $nidfront_image_new_name = time() . "-" . rand(111, 999) . "." . $explode_extention;
                        $nidfront_image_tmp_location = $_FILES['nidfront']['tmp_name'];
                        $nidfront_image_new_location = "../upload/instructor-verification/" . $nidfront_image_new_name;
                        move_uploaded_file($nidfront_image_tmp_location, $nidfront_image_new_location);
                        
                        
                        $nidback_image = $_FILES['nidback']['name'];
                        $nidback_image_after_explode_extention = strtolower(pathinfo($nidback_image, PATHINFO_EXTENSION));
                        $nidback_image_new_name = time() . "-" . rand(111, 999) . "." . $nidback_image_after_explode_extention;
                        $nidback_image_tmp_location = $_FILES['nidback']['tmp_name'];
                        $nidback_image_new_location = "../upload/instructor-verification/" . $nidback_image_new_name;
                        move_uploaded_file($nidback_image_tmp_location, $nidback_image_new_location);
                    
                        
                        $thumbnail_image = $_FILES['certificate']['name'];
                        $thumbnail_image_after_explode_extention = strtolower(pathinfo($thumbnail_image, PATHINFO_EXTENSION));
                        $certificate_image_new_name = time() . "-" . rand(111, 999) . "." . $thumbnail_image_after_explode_extention;
                        $image_tmp_location = $_FILES['certificate']['tmp_name'];
                        $image_new_location = "../upload/certificate/" . $certificate_image_new_name;
                        move_uploaded_file($image_tmp_location, $image_new_location);
                        // image uploaded code End 
                
                $instructor_id = $_SESSION['abc_ins_id'];
                
                $insert_query = "INSERT INTO `instructor_req`(`ins_id`, `ins_nid_front`, `ins_nid_back`, `ins_skillset`, `ins_comment`, `ins_certificate`, `ins_verification_status`) VALUES ('$instructor_id', '$nidfront_image_new_name', '$nidback_image_new_name', '$skillset', '$comment', '$certificate_image_new_name', '0')";
                //$insert_to_db = mysqli_query($con, $insert_query);
            
            
                if (mysqli_query($con, $insert_query)) {
       
                        inst_notifier($instructor_id,'Requested to verify instructor application.',$type='success',$status=0,$priotity=0,$np2con);
                        notifier($msg='Successfully requested to verify instructor application.',$alert=2,$time=3000);
                        
                        echo reloader('instructor/',0);
                        exit();
                        die();               
            
                } else {
                      echo "Error: " . mysqli_error($con);
                      notifier($msg='Some error occurred! Please try again',$alert=4,$time=3000);
                }
            
            }
        }
    }
}


?>


<section id="instractor-panel">
   <div class="container">
    <div class="row">    
        <div class="col-12 col-sm-12 col-md-12">
                <div class="h4 bred_cus myfont fs42">আপনার ইন্সট্রাক্টর একাউন্ট ভেরিফিকেশন এর জন্য আবেদন করুন </div>
         </div>
    </div>

      <div class="row my-5">
         <?php include ('left_sidebar.php'); ?>
         <div class="col-md-8">
            <div class="card-body bg-light">
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12">
                     <div class="contacta" style="/*background:url('https://i.pinimg.com/originals/3d/08/e0/3d08e03cb40252526fee2036a67f07f1.gif') no-repeat center; background-size:850px 500px; border-radius: 25px;">
                        <div class="bildet myfont frmsa">
                           
                           <form enctype="multipart/form-data" class="apply_sc" action="" method="POST">
                              নিচের তথ্য দিয়ে ফর্মটি পূরণ করুন <br>
                            <hr>
                              <div class="row">
                                  <?php if(isset($response) && !empty($response)) { ?>
                                    <div style="background-color: #ffbc6733; color: #ff0000; font-size: 22px !important" class="col-12 col-sm-12 col-md-12 alert alert-<?php echo $response["type"]; ?>">
                                        <?php echo $response["message"]; ?>
                                    </div>
                                    <?php }?>
                                 <div class="col-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <label class="text-dark h6" >
                                          <h4>আইডি কার্ডের সামনের দিকের ছবি</h4>
                                       </label>
                                       <br>
                                       <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                       <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
                                       <style>
                                          article, aside, figure, footer, header, hgroup, 
                                          menu, nav, section { display: block; }
                                       </style>
                                       <img id="nidfront" class="img-sm mt-2 mb-4" style="height:140px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                                       <input class="form-control-file" type='file' onchange="setThumbnail_Image1(this); " name="nidfront"accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi" required>
                                       <script>
                                          function setThumbnail_Image1(input) {
                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();
                                              reader.onload = function (e) {
                                              $('#nidfront')
                                                .attr('src', e.target.result)
                                                .width(220)
                                                .height(140);
                                              };
                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }
                                       </script>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <label class="text-dark h6" >
                                          <h4> আইডি কার্ডের পিছনের দিকের ছবি</h4>
                                       </label>
                                       <br>
                                       <style>
                                          article, aside, figure, footer, header, hgroup, 
                                          menu, nav, section { display: block; }
                                       </style>
                                       <img id="nidback" class="img-sm mt-2 mb-4" style="height:140px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                                       <input class="form-control-file" type='file' onchange="setThumbnail_Image2(this); " name="nidback" accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi" required>
                                       <script>
                                          function setThumbnail_Image2(input) {
                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();
                                              reader.onload = function (e) {
                                              $('#nidback')
                                                .attr('src', e.target.result)
                                                .width(220)
                                                .height(140);
                                              };
                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }
                                       </script>
                                    </div>
                                 </div>
                                 <style>
                                     #choiceSkills{
                                         max-height: 180px;
                                         overflow-x: hidden;
                                         overflow-y: auto;
                                     }
                                 </style>
                                 <div class="col-12 col-sm-6 col-md-6">
                                     <div class="form-group">
                                      <label class="text-dark h6"><h4> আপনার দক্ষতা নির্বাচন করুন এখানে</h4></label> 
                                      <div id="choiceSkills">
                                     <?php
                                        $skill_q = "SELECT * FROM `skills` WHERE 1";
                                        $res_skill = mysqli_query($con, $skill_q);
                                        $cnt_skill = mysqli_num_rows($res_skill);
                                        
                                        if($cnt_skill>0){
                                            foreach($res_skill as $skills){
                                            echo '<div>&nbsp &nbsp <input type="checkbox" name="skills[]" id="sk'.$skills['skill_id'].'" value="'.$skills['skill_title'].'"><label class="text-dark h4" for="sk'.$skills['skill_id'].'">&nbsp &nbsp'.$skills['skill_title'].'</label></div>';
                                        }
                                        }else{
                                            echo '<input type="hidden" name="skills[]" value=" ">';
                                        }
                                     ?>
                                     </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6 col-md-6">
                                  <div class="form-group">
                                       <label class="text-dark h6" >
                                          <h4> সার্টিফিকেট সংযুক্ত করুন এখানে</h4>
                                       </label>
                                       <br>
                                       <style>
                                          article, aside, figure, footer, header, hgroup, 
                                          menu, nav, section { display: block; }
                                       </style>
                                       <img id="certificate" class="img-sm mt-2 mb-4" style="height:140px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                                       <input class="form-control-file" type='file' onchange="setThumbnail_Image(this); " name="certificate"accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi" required>
                                       <script>
                                          function setThumbnail_Image(input) {
                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();
                                              reader.onload = function (e) {
                                              $('#certificate')
                                                .attr('src', e.target.result)
                                                .width(220)
                                                .height(140);
                                              };
                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }
                                       </script>
                                    </div>
                                 </div>
                                <div class="col-12 col-sm-12 col-md-12">
                                    <textarea class="inptex" rows="4" type="text" name="comment" placeholder="আপনার গুরুত্বপূর্ণ মন্ত্যব্য লিখুন কেন আপনি আমাদের সাথে সংযুক্ত হতে চান"></textarea>
                                </div>
                                 
                              </div>
                              <center><input class="apply mt-3 applybtn"  name="submit" type="submit" value="আবেদন করুন"></center>
                           </form>

                        </div>
                     </div>
 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include ('../footer.php');
   ?>