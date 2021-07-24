<?php
$nav_page ="purchase";
include ('student-panel-header.php');

demon('login.php',1);
$std_id = $_SESSION['abc_usr_id'];

$total_courses = getEnrolledCoursesByStudent($std_id,1);
?>

<section class="purchase-history-list-area bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="purchase-history-list">
                    <li class="purchase-history-list-header">
                        <div class="row">
                            <div class="col-12 col-sm-6"><h4 class="purchase-history-list-title"> ক্রয়কৃত কোর্সের বর্ণনা </h4></div>
                            <div class="col-12 col-sm-6 hidden-xxs hidden-xs">
                                <div class="row">
                                    <div class="col-sm-3"> তারিখ </div>
                                    <div class="p-0 m-0 col-sm-3"> মোট টাকা </div>
                                    <div class="p-0 m-0 col-sm-4"> অর্থ প্রদানের ধরণ </div>
                                    <div class="col-sm-2"> কার্যক্রম </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="purchase-history-items mb-2">
                        <div class="row">
                            
<?php 
             if(isset($total_courses) && !empty($total_courses)){
            	        	 foreach($total_courses as $s_c){
            	                foreach($s_c as $course){
?>
                            <div class="col-12 col-sm-6">
                                <div class="purchase-history-course-img">
                                    <img style="width:80px; height:70px;" src="../upload/instructor-made-courses/<?php echo $course['ins_mc_image']; ?>" alt="img">
                                </div>
                                <a class="purchase-history-course-title">
                                   <h5 class="title myfont fs26"><?=$course['ins_mc_title'] ?></h5>
                                   <small><?=$course['ins_mc_short_desc'] ?></small>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 purchase-history-detail">
                                <div class="row">
                                    <div class="col-sm-3 date">
                                        Tue, 09-Mar-2021
                                    </div>
                                    <div class="col-sm-3 payment-type">
                                        <p>৳ <?php echo $course['ins_mc_offer_fee']; ?></p>
                                    </div>
                                    <div class="col-sm-4 payment-type">
                                        Bkash
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="checkout-invoice.php?" target="_blank" class="btn btn-receipt">Invoice</a>
                                    </div>
                                </div>
                            </div>
                            <?php
            	       }
            	    }
            	
                }
         
         ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

