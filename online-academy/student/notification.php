<?php
$nav_page ="notification";
include ('student-panel-header.php');
demon('login.php',1);
$std_id = $_SESSION['abc_usr_id'];

$noti_query = "SELECT * FROM `student_notification` WHERE `nt_for_user` = '$std_id' ORDER BY nt_id DESC LIMIT 10"; 
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
<section id="student-panel">
    <div class="container">
        <div class="row my-5">
        <div   id="confetti-wrapper"></div>
            <?php include ('left_sidebar.php'); ?>

            <div class="col-md-12">
  
<?php
            if($cnt>0){
?>               
                <div class="card-body bg-light">
                    <div class="text-center myfont fs26">নোটিফিকেশনসমূহ <div>
<?php               
                foreach($notifications as $ntf){
?> 
                <div class="text-left my-2">

                   <hr><h4 class="alert alert-<?=$ntf['nt_type']?>"><?=$ntf['nt_msg']?></h4>

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


<?php include '../footer.php'; ?>

