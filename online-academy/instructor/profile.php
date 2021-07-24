<?php

include ('../header.php');
    
demon('instructor/login.php',2);

$instructor_id = $_SESSION['abc_ins_id'];
    
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");

$ins_query = "SELECT * FROM `instructor` WHERE `ins_id` = '$instructor_id'"; 
$ins_res =  mysqli_query($con,$ins_query);
$instructor = mysqli_fetch_assoc($ins_res);
$cnt = mysqli_num_rows($ins_res);


if(isset($_POST['submit'])){

	$sex = get_safe_value($con,htmlspecialchars($_POST['gender']));
	$dob = get_safe_value($con,htmlspecialchars($_POST['dob']));
	
	$education = get_safe_value($con,htmlspecialchars($_POST['education']));
	$join_date = date("Y-m-d");
	$facebook = get_safe_value($con,htmlspecialchars($_POST['facebook']));
	$address = get_safe_value($con,htmlspecialchars($_POST['address']));
	
	
	
	$nid = get_safe_value($con,htmlspecialchars($_POST['nid']));

	$name = get_safe_value($con,htmlspecialchars($_POST['name']));
	$phone = get_safe_value($con,htmlspecialchars($_POST['userphone']));
	$email = get_safe_value($con,htmlspecialchars($_POST['email']));
    
    $update_query = "UPDATE `instructor` SET `ins_nid`= '$nid',`ins_name`='$name',`ins_phone`='$phone',`ins_email`='$email',`ins_sex`='$sex',`ins_dob`='$dob',`ins_education`='$education',`ins_facebook`='$facebook',`ins_address`='$address' WHERE `ins_id`  = '$instructor_id'"; 
    //$update_res =  mysqli_query($con,$update_query);
    
    if (mysqli_query($con, $update_query)) {
    
    inst_notifier($instructor_id,'Successfully updated your profile!  '.date("Y-m-d h:m:s"),$type='success',$status=0,$priotity=0,$np2con);
    
    notifier($msg='Successfully updated your profile at '.date("Y-m-d h:m:s").'!',$alert=2,$time=3000);
    
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
        
    } else {
    echo "Error: " . $insertuser . "<br>" . mysqli_error($con);
    notifier($msg='Error occurred! Please try again.',$alert=4,$time=3000);
    }

}

?>


<style>
.frmsa {
    max-width: 850px;
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 50px;
    border: 5px solid #fff;
    box-shadow: 0 0 9px #b5b7b4;
    background: linear-gradient( 45deg ,#d7ecff,#73d84700);
    border-radius: 7px;
    width: 100%;
	
}
.apply_sc {
    width: 100%;
}

.inptex select {
margin: 10px;	
color: #757575;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;       /* Remove default arrow */
  
}


.inptex {
    font-size: 20px;
    background: rgb(255 255 255 / 90%);
    border: 0px;
    color: #000000;
    width: 400px;
    border-radius: 6px;
    border: solid 1px #5a5a5a2e;
    margin: 4px 0 12px 0;
    padding: 8px 16px 8px 16px;
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

.apply_sc  textarea{
    margin: 10px;
    width: 100% !important;
   }

.apply_sc input,select,textarea {
margin: 10px;	
color: #000;
width: 100%;
}


.apply_sc select {
width: 100%;
margin: 10px;	
color: #757575;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;       /* Remove default arrow */
  
}

.success-animation { margin:60px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
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


.bred_cus{
    background: #eff4f8;
}

.checkoutbox{
    background: #eff4f8;
}


</style>
<section id="instractor-panel">
    <div class="container">
        <div class="row my-5">
        <div   id="confetti-wrapper"></div>
            <?php include ('left_sidebar.php'); ?>

            <div class="col-md-8">
  
            <div class="card pl-4 pt-4 pb-2 bg-light">
                <p> <strong class="text-secondary h3">প্রোফাইল</strong></p>
            </div>
<?php
            if($cnt>0){
?>               

                  <div class="card-body bg-light">
                    <div class="row">
                        
                        <div style="min-height:200px" class="col-12 col-sm-12 col-md-12">
                         
                         <form class="apply_sc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
							<br><input class="inptex" type="text" name="name" placeholder="আপনার নাম " value="<?=  $instructor['ins_name']?>" required>
							<br><input class="inptex" type="number" name="userphone" placeholder="আপনার ফোন নাম্বার " value="<?=  $instructor['ins_phone']?>" >
							<br><input class="inptex" type="text" name="dob" placeholder="আপনার  জন্ম  তারিখ" value="<?=  $instructor['ins_dob']?>" >							
							<br><input class="inptex" type="email" name="email" placeholder="আপনার ইমেইল" value="<?=  $instructor['ins_email']?>"readonly>         	 			
							<?php
							    if(!$instructor['ins_sex'] == ''){
							 ?>       
							    
                            <br><input class="inptex" type="text" placeholder="আপনার লিঙ্গ" name="gender" value="<?=  $instructor['ins_sex']?>" readonly>    
							        
							<?php        
							    }else{
							?>
							<br><select name="gender" class="inptex" required>
							<option class="inptex" hidden selected>আপনার লিঙ্গ</option>	
							<option class="inptex" value="পুরুষ">পুরুষ</option>
							<option class="inptex" value="মহিলা">মহিলা</option>					
						    </select>
						   <?php        
							    }
							?>
							<br><input class="inptex" type="text" name="facebook" placeholder="আপনার  ফেসবুক প্রোফাইল লিংক" value="<?=  $instructor['ins_facebook']?>" >
						    <br><input class="inptex" type="number" name="nid" placeholder="আপনার জাতীয় পরিচয়পত্র অথবা জন্ম নিবন্ধন  নাম্বার" value="<?=  $instructor['ins_nid']?>" >						
							<br><textarea class="inptex" rows="2" type="text" name="education" placeholder="আপনার  প্রাতিষ্ঠানিক যোগ্যতা বা পড়াশোনা"><?=  $instructor['ins_education']?></textarea>
							<br><textarea class="inptex" rows="3" type="text" name="address" placeholder="আপনার ঠিকানা লিখুন"><?=  $instructor['ins_address']?></textarea>
							<?php
    							if(!empty($error)){
    								echo '<div class="text-center fntsz p-b-15">'.$error.'</div>'; 
    							}
							?>
							<center><input class="apply mt-3 applybtn" name="submit" type="submit" value="আপডেট করুন"></center>
					</form>
                         
                         

                        </div>
                        
                        </div>
                        
                </div>

<?php    
        }
    
?>              

                



            </div>
        </div>
    </div>
</section>


<?php

    include ('../footer.php');
?>