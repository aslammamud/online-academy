<?php include 'header.php'; ?>
<div class="h2 bred_cus myfont fs42">আমাদের একাডেমির ভিডিও কোর্স গুলো </div>
<div class="container">
   <div class="row my-4">
      <div class="col-md-12">
         <div class="row">
		 
		 <?php
		 
 
		 
			mysqli_query($con,'SET CHARACTER SET utf8');
			$result_courses = getCourses();

				foreach($result_courses as $course){
					 
		 ?>

            <div class="col-12 col-sm-4 col-md-4">
               <div class="card bg-light">
                  <img class="card-img-top" src="upload/instructor-made-courses/<?php echo $course['ins_mc_image']; ?>" alt="img" height="150px" width="240px">
                  <div class="custom-card card-body">
                     <div class="course-details mt-2">
                        <a href="course-details.php">
                           <h5 class="title myfont fs26"><a href="course-details.php?url=<?php echo $course['ins_mc_url'] ?>" class="tittle"><?php echo $course['ins_mc_title']; ?></a></h5>
                        </a>

                        <div class="rating your-rating-box text-left" style="position: absolute;"><span><?php echo $course['ins_mc_enrolled'] ?> জন ভর্তি হয়েছে</span></div>
                        <div class="rating your-rating-box text-right" style="position: relative;">
                            
                      <style>
                          span.fa.fa-star-o, .fa.fa-star{
                                color: #febe42;
                            }
                      </style>  
                      
                            <?php getRatingStars($course['ins_mc_id']); ?>
                        </div>
						<div class="row pt-1">
						<div class="col-md-12"><span>কোর্স ফিঃ &nbsp <del><?php echo $course['ins_mc_orginal_fee'].'TK'; ?></del>&nbsp<?php echo $course['ins_mc_offer_fee'].'TK'; ?></span></div>
						</div>
                        <div class="row pt-2">						
                           <div class="col-md-6 pt-1">
                              <a href="course-details.php?url=<?php echo $course['ins_mc_url'] ?>" class="badge badge-success text-dark p-2">বিস্তারিত</a>
                           </div>
                           <div class="col-md-6 text-right">
                             <?php
                                if(!isset($_SESSION['abc_lgn']) || $_SESSION['abc_lgn'] == false){
                                    echo '<a href="login.php" class="btn btn-sm btn-dark" style="width: 100%"><strong> কার্টে রাখুন </strong></a>';
                                }else{
                                    echo '<button type="button" class="btn btn-sm btn-dark  addItemBtn" style="width: 100%"><strong> কার্টে রাখুন </strong></button>';
                                }
                              ?>
<!--                              <a href="#" class="btn btn-sm btn-dark">Enroll Now</a>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
			<?php } ?>
			
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php'; ?>