<?php
$dynamic_title = 'Student Profile | ABC Academy';
$nav_page ="profile";
include ('student-panel-header.php');

$std_id = $_SESSION['abc_usr_id'];

$std_query = "SELECT * FROM `user` WHERE `user_id` = '$std_id'"; 
$std_res =  mysqli_query($con,$std_query);
$student = mysqli_fetch_assoc($std_res);
$cnt = mysqli_num_rows($std_res);


if(isset($_POST['submit'])){

	$user_name = get_safe_value($con,htmlspecialchars($_POST['user_name']));
	$user_email = get_safe_value($con,htmlspecialchars($_POST['user_email']));
	//$user_phone = get_safe_value($con,htmlspecialchars($_POST['user_phone']));
	$user_phone = $student['user_phone'];
	$user_location = get_safe_value($con,htmlspecialchars($_POST['user_location']));
	$user_about = get_safe_value($con,htmlspecialchars($_POST['user_about']));
    
    $update_query = "UPDATE `user` SET `user_name`='$user_name',`user_email`='$user_email',`user_about`='$user_about',`user_location`='$user_location',`user_phone`='$user_phone' WHERE `user_id`  = '$std_id'"; 
    //$update_res =  mysqli_query($con,$update_query);
    
    if (mysqli_query($con, $update_query)) {
    
    std_notifier($std_id,'Successfully updated your profile!  '.date("Y-m-d h:m:s"),$type='success',$status=0,$priotity=0,$np2con);
    
    notifier($msg='Successfully updated your profile at '.date("Y-m-d h:m:s").'!',$alert=2,$time=3000);
    
    echo reloader('student/profile.php',1000);
    
        
    } else {
    echo "Error: " . $update_query . "<br>" . mysqli_error($con);
    notifier($msg='Error occurred! Please try again.',$alert=4,$time=3000);
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
                                <li class="active"><a href="student/profile.php">প্রোফাইল</a></li>
                                <!--<li><a href="profile-account-details.php">একাউন্ট ডিটেইলস</a></li>-->
                                <li><a href="student/profile-password-change.php">পাসওয়ার্ড পরিবর্তন</a></li>
                                <li><a href="student/profile-photo-change.php">ছবি পরিবর্তন</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content col-sm-9 col-md-9 p-0">
                        <div class="content-title-box">
                            <div class="title"><strong>প্রোফাইল</strong></div>
                            <div class="subtitle">আপনার প্রোফাইলের যাবতীয় তথ্যাদি এখান থেকে পরিবর্তন করতে পারবেন</div>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="content-box">
                                <div class="basic-group">
                                    <div class="form-group">
                                        <label for="user_name">আপনার নাম</label>
                                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="" value="<?=$student['user_name'];?>" required>
                                        <small class="form-text text-muted">সার্টিফিকেটে দেওয়া নাম লিখুন</small>
                                    </div>
                                    <div class="form-group">
                                          <label for="user_email">আপনার ইমেইল</label>
                                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="" value="<?=$student['user_email'];?>">
                                         <small class="form-text text-muted">সাবধানে ইমেইল পরিবর্তন করুন</small>
                                    </div>
                                </div>
                                <div class="link-group">
                                    <div class="form-group">
                                          <label for="user_phone">আপনার ফোন নাম্বার</label>
                                        <input type="number" class="form-control" maxlength="11" id="user_phone"  name="user_phone" placeholder=" " value="<?=$student['user_phone'];?>" readonly>
                                       <small class="form-text text-muted">মোবাইল নাম্বার পরিবর্তনযোগ্য নয়</small>
                                    </div>
                                    <div class="form-group">
                                          <label for="user_location">আপনার ঠিকানা</label>
                                        <textarea type="text" class="form-control" rows="2" name="user_location" placeholder="" id="user_location"><?=$student['user_location'];?></textarea>
                                        <small class="form-text text-muted">সঠিক ঠিকানা লিখুন</small>
                                    </div>
                                    <div class="form-group">
                                         <label for="user_about">আপনার সম্পর্কে কিছু লিখুন</label>
                                        <textarea type="text" class="form-control" rows="4" name="user_about" placeholder="" id="user_about"><?=$student['user_about'];?></textarea>
                                        <small class="form-text text-muted">সঠিক তথ্য প্রদান করুন</small>
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" name="submit" class="btn">তথ্য আপডেট করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

