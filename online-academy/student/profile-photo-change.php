<?php
$dynamic_title = 'Student Profile | ABC Academy';
$nav_page ="profile";
include ('student-panel-header.php');
demon('login.php',1);
$std_id = $_SESSION['abc_usr_id'];

$std_query = "SELECT * FROM `user` WHERE `user_id` = '$std_id'"; 
$std_res =  mysqli_query($con,$std_query);
$student = mysqli_fetch_assoc($std_res);
$cnt = mysqli_num_rows($std_res);


if(isset($_POST['submit'])){

    //user_image
    $response_user_image = imageChecker('user_image');
    
     if($response_user_image['valid'] == false){
                $response = $response_user_image;
    }else{
        // image uploaded code start    
        $thumbnail_image = $_FILES['user_image']['name'];
        $thumbnail_image_after_explode_extention = strtolower(pathinfo($thumbnail_image, PATHINFO_EXTENSION));
        $image_new_name = time() . "-" . rand(111, 999) . "." . $thumbnail_image_after_explode_extention;
        // image uploaded code End 

        $update_user_image_sql = "UPDATE `user` SET `user_image`= '$image_new_name' WHERE `user_id` = '$std_id'";
    
        if (mysqli_query($con, $update_user_image_sql)) {
            
            $ImagePath = '../upload/student-profile/'.$student['user_image'];
            if (file_exists($ImagePath)) {
                unlink($ImagePath);
            }
        
            $image_tmp_location = $_FILES['user_image']['tmp_name'];
            $image_new_location = "../upload/student-profile/" . $image_new_name;
            move_uploaded_file($image_tmp_location, $image_new_location);

            std_notifier($std_id,'Successfully updated your profile picture!  '.date("Y-m-d h:m:s"),$type='success',$status=0,$priotity=0,$np2con);
            notifier($msg='Successfully updated your profile picture at '.date("Y-m-d h:m:s").'!',$alert=2,$time=3000);
            
            echo reloader('student/profile-photo-change.php',0);
            exit();
            die();               
    
        } else {
              echo "Error: " . mysqli_error($con);
              notifier($msg='Some error occurred! Please try again',$alert=4,$time=3000);
        }
    
    }

}
?>


<style>
.user-dashboard-menu ul li {
    border-bottom: .5px solid;
    
}
.user-dashboard-sidebar .user-dashboard-menu ul a {
    display: block;
    padding: 8px 15px;
}

a:link, a:visited{
    color: #000;
}

.content-title-box{
background: #00416A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E4E5E6, #00416A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E4E5E6, #00416a59); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.user-dashboard-box {
    min-height: 800px;
}
</style>
<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
<div class="col-12 col-sm-12 col-md-12">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar col-sm-3 col-md-3 bg-light">
                        <div class="user-box">
                            <!--<img src="../upload/student-profile/default_student.jpg" alt="" class="img-fluid">-->
                            <?php 
                                if($student['user_image'] == ""){
                                    echo '<img src="../upload/student-profile/default_student.jpg" alt="user-image" class="img-fluid">';
                                }else{
                                    echo '<img src="../upload/student-profile/'.$student['user_image'].'" alt="user-image" class="img-fluid">';
                                }
                            ?>
                            <div class="name">
                                <div class="name"><?=$student['user_name'];?></div>
                            </div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                                <li><a href="student/profile.php">প্রোফাইল</a></li>
                                <!--<li><a href="profile-account-details.php">একাউন্ট ডিটেইলস</a></li>-->
                                <li><a href="student/profile-password-change.php">পাসওয়ার্ড পরিবর্তন</a></li>
                                <li class="active"><a href="student/profile-photo-change.php">ছবি পরিবর্তন</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content col-sm-9 col-md-9 p-0">
                        <div class="content-title-box">
                            <div class="title"><strong>প্রোফাইল</strong></div>
                            <div class="subtitle">আপনার প্রোফাইলের যাবতীয় তথ্যাদি এখান থেকে পরিবর্তন করতে পারবেন</div>
                        </div>
                        <?php if(isset($response) && !empty($response)) { ?>
                            <div style="background-color: #ffbc6733; color: #ff0000; font-size: 22px !important" class="col-12 col-sm-12 col-md-12 text-center alert alert-<?php echo $response["type"]; ?>">
                                <?php echo $response["message"]; ?>
                            </div>
                        <?php }?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" >

                                    <div class="content-box p-2 text-center">
                                        <div class="form-group">
                                       <label for="user_image">ছবি আপলোড করুন</label>
                                       <br>
                                       <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                       <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
                                       <style>
                                          article, aside, figure, footer, header, hgroup, 
                                          menu, nav, section { display: block; }
                                       </style>
                                       <div class="text-center m-auto">
                                            <img id="user_image" class="img-sm mt-2 mb-4" style="height:140px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                                            <input class="form-control-file m-0" type='file' onchange="setThumbnail_Image1(this); " name="user_image" accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi" required>
                                       </div>
                                       <script>
                                          function setThumbnail_Image1(input) {
                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();
                                              reader.onload = function (e) {
                                              $('#user_image')
                                                .attr('src', e.target.result)
                                                .width(300)
                                                .height(300);
                                              };
                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }
                                       </script>
                                    </div>

                                        
                                    </div>

                            <div class="content-update-box">
                                <button type="submit" name="submit" class="btn">ছবি পরিবর্তন করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

