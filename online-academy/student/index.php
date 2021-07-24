<?php
$dynamic_title = 'Student Dashboard | ABC Academy';
$nav_page="dashborad";
include ('student-panel-header.php');

demon('login.php',1);
$std_id = $_SESSION['abc_usr_id'];

$total_courses = getEnrolledCoursesByStudent($std_id,1);
?>
<div class="container">
    <div class="row my-4">
      <div class="col-sm-12 col-md-12">
        <div class="row">
          <div class="col-md-9 custom-btn">
          </div>
          <div class="col-md-3 ml-auto mb-4 text-right">
            <div class="my-course-search-bar">
              <form action="">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="কোর্স খুঁজুন  " onkeyup="getCoursesBySearchString(this.value)">
                      <div class="input-group-append">
                          <button class="btn btn-light" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </div>
                  </div>
              </form>
            </div>
          </div>

        </div>
      </div>                                              
    </div>

    <div class="row my-4">
      <div class="col-sm-12 col-md-12">
        <div class="row">
         
<?php 
             if(isset($total_courses) && !empty($total_courses)){
            	        	 foreach($total_courses as $s_c){
            	                foreach($s_c as $course){
?>
         
          <div class="col-sm-4 col-md-4">
            <div class="card bg-light">
              <img class="card-img-top" src="../upload/instructor-made-courses/<?php echo $course['ins_mc_image']; ?>" alt="img">
              <div class="custom-card card-body">
                <div class="course-details mt-2">
                    <a href=""><h5 class="title myfont fs26"><?=$course['ins_mc_title'] ?></h5></a>
                      <div class="progress mt-3 mb-2" style="height: 20px;">
                   <div class="progress-bar bg-success progress-bar-striped" style="width:40%;">70%</div>
                      </div>
                          <div class="rating your-rating-box text-left" style="position: absolute;"><span>৮৫% সম্পন্ন হয়েছে</span></div>
                        <div class="rating your-rating-box text-right" style="position: relative;">
                              <style>
                                  span.fa.fa-star-o, .fa.fa-star{
                                        color: #febe42;
                                    }
                              </style>  
                        <?php getRatingStars($course['ins_mc_id']); ?>
                        </div>
                    <div class="row mb-2">
                      <div class="col-6 col-sm-6 col-md-6">
                           <a href="student/purchased-course-details.php?url=<?php echo $course['ins_mc_url'] ?>" class="btn btn-secondary myfont fs26"> বিস্তারিত </a>
                      </div>

                      <div class="col-6 col-sm-6 col-md-6 text-right">
                        <a href="student/start-to-learn-course.php?url=<?php echo $course['ins_mc_url'] ?>" class="btn btn-sm btn-outline-secondary myfont fs26">শিখা শুরু করুন </a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
<?php
            	       }
            	    }
            	
                }
         
         ?>
          
		</div>
	</div>
</div>
</div>

<!-- javascript code for filter dropdown select  -->
  <script>
    $('#dropdownMenuButton').on('show.bs.dropdown', function () {
      
    });          
  </script>


<?php include '../footer.php'; ?>

