<?php
$dynamic_title = 'Student Profile - Password | ABC Academy';
$nav_page ="profile";
include ('student-panel-header.php');
demon('login.php',1);
$std_id = $_SESSION['abc_usr_id'];

$std_query = "SELECT * FROM `user` WHERE `user_id` = '$std_id'"; 
$std_res =  mysqli_query($con,$std_query);
$student = mysqli_fetch_assoc($std_res);
$cnt = mysqli_num_rows($std_res);


if(isset($_POST['submit'])){
    
	$user_pass = get_safe_value($con,htmlspecialchars($_POST['user_pass']));;
	$user_new_pass = get_safe_value($con,htmlspecialchars($_POST['user_new_pass']));
	$user_new_pass_confirm = get_safe_value($con,htmlspecialchars($_POST['user_new_pass_confirm']));
	
	if($student['user_pass'] == $user_pass){
	    if($user_new_pass == $user_new_pass_confirm){
	        $update_query = "UPDATE `user` SET `user_pass`='$user_new_pass' WHERE `user_id`  = '$std_id'"; 
    
            if (mysqli_query($con, $update_query)) {
            
            std_notifier($std_id,'Successfully updated your password!  '.date("Y-m-d h:m:s"),$type='success',$status=0,$priotity=0,$np2con);
            
            notifier($msg='Successfully updated your password at '.date("Y-m-d h:m:s").'!',$alert=2,$time=3000);
            
            mysqli_close($con);
            echo reloader('student/profile-password-change.php',1000);
            exit();
            die();
            
                
            } else {
            echo "Error: " . $update_query . "<br>" . mysqli_error($con);
            notifier($msg='Error occurred! Please try again.',$alert=4,$time=3000);
            }
	    }else{
	        $error_msg_2 =  '<small class="form-text text-danger">পাসওয়ার্ড মিলছে না, চেক করে আবার লিখুন!</small>';
	    }
	}else{
	    $error_msg_1 =  '<small class="form-text text-danger">দুঃখিত, পাসওয়ার্ড সঠিক নয়!</small>';
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
                                <li class="active"><a href="student/profile-password-change.php">পাসওয়ার্ড পরিবর্তন</a></li>
                                <li><a href="student/profile-photo-change.php">ছবি পরিবর্তন</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content col-sm-9 col-md-9 p-0">
                        <div class="content-title-box">
                            <div class="title text-danger"><strong>প্রোফাইল পাসওয়ার্ড পরিবর্তন</strong></div>
                            <div class="subtitle">আপনার প্রোফাইলের পাসওয়ার্ড এখান থেকে পরিবর্তন করতে পারবেন</div>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="content-box">
                                <div class="basic-group">
                                    <div class="form-group">
                                        <label for="user_pass">আপনার পুরাতন পাসওয়ার্ডটি লিখুন</label>
                                        <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="" value="" required>
                                        <?php
                                            if(isset($error_msg_1)){
                                                echo $error_msg_1;
                                            }else{
                                                echo '<small class="form-text text-muted">পুরাতন পাসওয়ার্ড ভুলে গিয়ে থাকলে হেল্প সেকশনে <a style="color:#dc4d40" href="#" >আবেদন করুন</a></small>';
                                            }
                                        ?>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="user_new_pass">নতুন পাসওয়ার্ড</label>
                                        <input type="password" class="form-control" name="user_new_pass" id="user_new_pass" placeholder="" value="" required>
                                        <small class="form-text text-muted">ভবিষ্যতে মনে রাখতে পারেন এমন পাসওয়ার্ড লিখুন</small>
                                    </div>
                                    <div class="form-group">
                                         <label for="user_new_pass_confirm">নতুন পাসওয়ার্ড আবার লিখুন</label>
                                        <input type="password" class="form-control" name="user_new_pass_confirm" id="user_new_pass_confirm" placeholder="" value="" required>
                                        <?php
                                            if(isset($error_msg_2)){
                                                echo $error_msg_2;
                                            }else{
                                                echo '<small class="form-text text-muted">সাবধানে নতুন পাসওয়ার্ড লিখুন</small>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" name="submit" class="btn">পাসওয়ার্ড আপডেট করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

