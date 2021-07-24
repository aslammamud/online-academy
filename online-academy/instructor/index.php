<?php
include ('../header.php');
    
demon('instructor/login.php',2);

$instructor_id = $_SESSION['abc_ins_id'];

$query = "SELECT * FROM `instructor` WHERE `ins_id` = '$instructor_id' AND `ins_verified` = true";
$res = mysqli_query($con,$query);
//$cnt = mysqli_num_rows($res);
$instructor = mysqli_fetch_assoc($res);


$sql_verification_req = "SELECT * FROM `instructor_req` WHERE `ins_id` = '$instructor_id' AND `ins_verification_status` = 0";
$res_sql_v = mysqli_query($con,$sql_verification_req);
$count_res_v = mysqli_num_rows($res_sql_v);

if($count_res_v > 0){
    $verify_req = true;
}else{
    $verify_req = false;
}


?>

<style>
.grad-bg{
   background: linear-gradient(to right, #4aeeff7a, #2dffb247); 
}
</style>
<section id="instractor-panel">
    <div class="container">
        <div class="row my-5">
        <div   id="confetti-wrapper"></div>
            <?php include ('left_sidebar.php'); ?>
            <div class="col-md-9">

<?php
    
if($instructor[ins_verified] == true){
    
?>
                

<div class="card pl-4 pt-4 pb-2 bg-light">
    <p> <strong class="text-secondary h3">ড্যাশবোর্ড </strong></p>
</div>

                <div class="card my-4">
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-dropbox text-muted pb-2" style="font-size: 24px;"></i>
                                                <h3><span><?php getCount('instructor_made_courses', 'ins_mc_instrc_id', $instructor_id); ?></span></h3>
                                            <p class="text-muted font-15 mb-0">কোর্স সংখ্যা</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-users text-muted pb-2" style="font-size: 24px;"></i>
                                            <h3><span><?php getCoursesEnrollmentByInstructor($instructor_id); ?></span></h3>
                                            <p class="text-muted font-15 mb-0">এনরোল হয়েছে </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php 
                                $ins_sav_acc = getResult('instructor_savings_account', 'ins_id', $instructor_id); 
                            ?>
                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-first-order text-muted pb-2" style="font-size: 24px;"></i>
                                            <h3><span>0</span></h3>
                                            <p class="text-muted font-15 mb-0">মোট অর্ডার </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-credit-card text-muted pb-2" style="font-size: 24px;"></i>
                                            <h3><span><?=$ins_sav_acc['sav_transac_count']?></span></h3>
                                            <p class="text-muted font-15 mb-0">মোট লেনদেন</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card shadow-none border-left grad-bg">
                                            <div class="card-body text-center">
                                            <i class="fa fa-money text-muted pb-2" style="font-size: 24px;"></i>
                                            <h3><span><?=$ins_sav_acc['sav_payable']?></span></h3>
                                            <p class="text-muted font-15 mb-0">পাওনা টাকা</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                   <div class="card shadow-none border-left grad-bg">
                                        <div class="card-body text-center">
                                            <i class="fa fa-money text-muted pb-2" style="font-size: 24px;"></i>
                                            <h3><span><?=$ins_sav_acc['sav_total']?></span></h3>
                                            <p class="text-muted font-15 mb-0">মোট উপার্জিত টাকা </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card bg-light mt-5">
                    <h4 class="header-title p-4">কোর্স পরিদর্শন</h4>
                    <div class="row text-center mt-2 py-2 mb-5">
                        <div class="col-6">
                            <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                            <h3 class="font-weight-normal">
                                <span><?php getActiveCouseByInstructor($instructor_id,1); ?></span>
                            </h3>
                            <p class="text-muted mb-0">চলতি কোর্স</p>
                        </div>
                        <div class="col-6">
                            <i class="mdi mdi-trending-down text-warning mt-3 h3"></i>
                            <h3 class="font-weight-normal">
                                <span><?php getActiveCouseByInstructor($instructor_id,0); ?></span>
                            </h3>
                            <p class="text-muted mb-0"> বন্ধ কোর্স </p>
                        </div>
                    </div>
                </div>
<?php

}else if(isset($verify_req) && $verify_req == false && $instructor[ins_verified] == false) {
        

?>
                <div class="alert alert-danger pl-4 pt-4 pb-2">
                    <h3> আপনার একাউন্টটি ভেরিফাইড নয় </h3>
                </div>
                <style>
                        .instructions{
                            list-style-type: decimal;
                        }
                        
                        .instructions li{
                            padding:6px;
                            list-style: decimal;
                        }
                        
                        .aaa:hover{
                         color: #ffe793 !important;   
                        }
                </style>
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                         <p> ইন্সট্রাক্টর হিসেবে ভেরিফিকেশন সম্পন্ন করতে আপনাকে কিছু তথ্য প্রদান করতে হবে। </p>
                         <ol class="instructions">
                             <li>আপনার ভোটার আইডির ছবি তুলে প্রথমে  সামনের পৃষ্ঠা এবং দ্বিতীয়বারে আইডি কার্ডের পিছনের পৃষ্ঠার ছবি আপলোড করতে হবে।</li>
                             <li> আপনি দক্ষতার বিষয়সমূহ সিলেক্ট করুন।</li>
                             <li> এই বিষয়ে আপনার কোন পূর্ব অভিজ্ঞতা থেকে থাকে তাহলে সেই সার্টিফিকেট এর ছবি আপলোড করুন। </li>
                         </ol>
                        </div>
                        </div>
                        
                        <div class="row">
                            
                            
                        </div>
                        
                    
                    <a class="aaa text-white btn btn-lg btn-success" href="instructor/instructor-verification.php">ভেরিফিকেশন এর জন্য  আবেদন করুন</a>
                    <div class="">
                        
                    </div>
                </div>
                
                
<?php

}else if(isset($verify_req) && $verify_req == true){
    
?>
                
<style>
:root {
  --border-color: #D7DBE3;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', 'Open Sans', 'Helvetica Neue', sans-serif;
  --green: #0CD977;
  --red: #FF1C1C;
  --pink: #FF93DE;
  --purple: #5767ED;
  --yellow: #FFC61C;
  --rotation: 0deg;
  }

body {
  overflow: hidden;

}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  
}



@keyframes scaleCup {
  0% {
    transform: scale(0.6);
  } 
  
  100% {
    transform: scale(1);
  }
}


.modal-btn {
  display: block;
  margin: 0 -2rem -2rem -2rem;
  padding: 1rem 2rem;
  font-size: .75rem;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  font-weight: 600;
  border-radius: 0 0 .25rem .25rem;
  background-color: var(--green);
  text-decoration: none;
}

@keyframes confettiRain {
  0% {
    opacity: 1;
    margin-top: -100vh;
    margin-left: -200px;
  } 
  
  100% {
    opacity: 1;
    margin-top: 100vh;
    margin-left: 200px;
  }
}

.confetti {
  opacity: 0;
  position: absolute;
  width: 1rem;
  height: 1.5rem;
  transition: 500ms ease;
  animation: confettiRain 5s infinite;
}

#confetti-wrapper {
   overflow: hidden !important;
}

</style>



                <div class="alert alert-success pl-4 pt-4 pb-2">
                    <h3> আপনার ইন্সট্রাক্টর ভেরিফিকেশনের আবেদন ফর্মটি আমাদের কাছে জমা হয়েছে। </h3>
                </div>
                <style>
                        .instructions{
                            list-style-type: decimal;
                        }
                        
                        .instructions li{
                            padding:6px;
                            list-style: decimal;
                        }
                        
                        .aaa:hover{
                         color: #ffe793 !important;   
                        }
                </style>
                <div class="card-body bg-light">
                    <div class="row">
                        
                        <div style="min-height:200px" class="col-12 col-sm-12 col-md-12 text-center">
                         <p> নিরিক্ষন সম্পন্ন হওয়া পর্যন্ত দয়া করে অপেক্ষা করুন, ধন্যবাদ। </p>

                        </div>
                        
                        </div>
                        
                    
<!--                    <a class="aaa text-white btn btn-success" href="instructor/instructor-verification.php">ভেরিফিকেশন এর জন্য  আবেদন করুন</a>-->
                </div>
                
                <script>

                         for(i=0; i<150; i++) {
                          // Random rotation
                          var randomRotation = Math.floor(Math.random() * 360);
                            // Random Scale
                          var randomScale = Math.random() * 1;
                          // Random width & height between 0 and viewport
                          var randomWidth = Math.floor(Math.random() * Math.max(document.documentElement.clientWidth, window.innerWidth || 0));
                          var randomHeight =  Math.floor(Math.random() * Math.max(document.documentElement.clientHeight, window.innerHeight || 700));
                          
                          // Random animation-delay
                          var randomAnimationDelay = Math.floor(Math.random() * 15);
        
                          // Random colors
                          var colors = ['#0CD977', '#FF1C1C', '#FF93DE', '#5767ED', '#FFC61C', '#8497B0']
                          var randomColor = colors[Math.floor(Math.random() * colors.length)];
                        
                          // Create confetti piece
                          var confetti = document.createElement('div');
                          confetti.className = 'confetti';
                          confetti.style.top=randomHeight + 'px';
                          confetti.style.right=randomWidth + 'px';
                          confetti.style.backgroundColor=randomColor;
                          // confetti.style.transform='scale(' + randomScale + ')';
                          confetti.style.obacity=randomScale;
                          confetti.style.transform='skew(15deg) rotate(' + randomRotation + 'deg)';
                          confetti.style.animationDelay=randomAnimationDelay + 's';
                          document.getElementById("confetti-wrapper").appendChild(confetti);
        
                        }
                        
                        setTimeout(function(){ 
                            
                              document.getElementById("confetti-wrapper").style.display = "none";
                            
                        }, 10000);

                </script>
    
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















