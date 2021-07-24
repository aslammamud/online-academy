<?php

include ('../header.php');
    
demon('instructor/login.php',2);

$instructor_id = $_SESSION['abc_ins_id'];
    

$noti_query = "SELECT * FROM `instructor_notification` WHERE `nt_for_user` = '$instructor_id' ORDER BY nt_id DESC LIMIT 10"; 
$notifications =  mysqli_query($con,$noti_query);
$cnt = mysqli_num_rows($notifications);

    

?>

<style>
    .alert {
    border: 0;
    border-radius: 0;
    color: #FFFFFF;
    padding: 25px 19px;
    font-size: 24px;
}
.alert-success {
    background-color: #2ce486;
}
</style>
<section id="instractor-panel">
    <div class="container">
        <div class="row my-5">
        <div   id="confetti-wrapper"></div>
            <?php include ('left_sidebar.php'); ?>

            <div class="col-md-8">
  
            <div class="card pl-4 pt-4 pb-2 bg-light">
                <p> <strong class="text-secondary myfont h3">নোটিফিকেশনসমূহ</strong></p>
            </div>
<?php
            if($cnt>0){
?>               
                <div class="card-body bg-light">
<?php               
                foreach($notifications as $ntf){
?> 
                <div class="my-2">

                   <h4 class="alert alert-<?=$ntf['nt_type']?>"><?=$ntf['nt_msg']?></h4>

                </div>
<?php  
    }
?>    
    </div>
<?php    
        }else{
    
?>    
                  <div class="card-body bg-light">
                    <div class="row">
                        
                        <div style="min-height:200px" class="col-12 col-sm-12 col-md-12  myfont">
                         <p>এই মুহূর্তে আপনার জন্য কোন নোটিফিকেশন নেই </p>

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















