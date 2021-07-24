<?php 
include '../header.php';
$std_id = $_SESSION['abc_usr_id'];
$course_url = $_GET['url'];

//mysqli_query($con,'SET CHARACTER SET utf8');

$course = getSingleCourse($course_url);
?>

<style>

.backgg {
    background: #1f1e1e82;
    background-image: url(upload/instructor-made-courses/<?=$course['ins_mc_image']; ?>);
    background-blend-mode: overlay;
    background-repeat: no-repeat;
    background-size: 100%;
}


thead, tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;
}

[data-toggle="toggle"] {
	display: none;
}

.course-class-items{
    max-height: 600px;
    overflow-x: hidden;
    overflow-y: auto;
}

table{
    margin-bottom: 0px !important;
}

</style>
<section class="bg-dark backgg">
  <div class="container">

    <div class="col-12 col-sm-12">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="text-white px-3 myfont mt-5"> <?=$course['ins_mc_title']; ?></h1>
          <h5 class="text-white px-3 mt-3"><?=$course['ins_mc_short_desc']; ?></h5>
          <div class="row mb-5">
            <div class="col-12 col-sm-7 px-4 ml-2">
              <style>
                  span.fa.fa-star-o, .fa.fa-star{
                        color: yellow;
                    }
              </style>    
              <?php getRatingStars($course['ins_mc_id']); ?>
              
              <span class="text-white px-2"> (<?php getCountReviews($course['ins_mc_id']); ?> ratings)  <?=$course['ins_mc_enrolled']; ?> students</span>
              <?php
                  $instructor = getInstructor($course['ins_mc_instrc_id']); 
              ?>
              <P class="text-white px-3 mt-2"> Created By
                <a class="text-info mt-2" href="#"><?=$instructor['ins_name']; ?></a></P>
                <div class="row">
              
              <div class="col-md-3">
                <button type="button" class="btn btn-dark border-info">Wishlist <i class="fa fa-heart-o" aria-hidden="true"> </i></button>
              </div>
              <div class="col-md-3">
               <button type="button" class="btn btn-dark border-info">Share <i class="fa fa-share-square-o" aria-hidden="true"></i></button>
              </div>
              <div class="col-md-5">
                <button type="button" class="btn btn-dark border-info">Gift this course <i class="fa fa-gift" aria-hidden="true"></i></button>
              </div>
            </div>
                
              </div>
            </div>
          </div>
    
        </div>
        
      </div>
    </div>
  </section>


<div style="min-height: 80vh" class="container p-5 bg-light">
            <div class="row  mt-5">
                <div class="col-12 col-sm-7">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php if(isset($_GET['crs_vdo_url'])){echo getYoutubeIdFromUrl($_GET['crs_vdo_url']);} else{ echo getYoutubeIdFromUrl($course['ins_mc_vid_link']);} ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              <div class="col-md-11 mt-5">
                 <h3 class="mt-5 myfont fs36"><strong> এই কোর্সে যা যা অন্তর্ভুক্ত থাকবে </strong></h3>
              
                <?php echo $course['ins_mc_long_desc']; ?>
              </div>
                </div>
                        <?php
                            $crs_id = $course['ins_mc_id'];
                            $paid = getPaidSingleCourseByStudent($std_id, $crs_id); 
                        
                        ?>
                <div style="border: .5px solid #9191915c;  min-height: 600px;" class="col-12 col-sm-5 p-0">
                    <div class="col-12 col-sm-12 course-class-items m-0 p-0 bg-info">
                            <h2 class="text-white text-center p-3 myfont"> কোর্স কারিকুলাম<h2>
                        
                      </div>   
                      <div class="col-12 col-sm-12 course-class-items m-0 p-0">
                        <table id="course-datatable-server-side" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable-server-side_info" style="width: 100%;">
                            
                            <?php
                                $sections = getAllSectionsByCourse($course['ins_mc_id']);
                                
                                $sr = 0;

                                foreach($sections as $section):
                                        $sr++;
                                        echo '<tbody><tr>
                                            <td>
                                                <label for="sid'.$section['section_id'].'"><strong> '.$sr.' :: </strong>'.$section['section_title'].' &nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-down" aria-hidden="true"></i></label>
                                                <input type="checkbox" id="sid'.$section['section_id'].'" data-toggle="toggle">
                                            </td>
                                        </tr></tbody>';
                                        $classes = getAllClassesBySection($section['section_id']);
                                        echo '<tbody class="hidd-itm sid'.$section['section_id'].'">';
                                        foreach($classes as $class):
                            ?>
                                            <tr role="row" class="odd bg-white px-2">
                                                <td colspan="4" class="text-left">
                                                    <strong>
                                                        <a href="#"><?=$class['sec_class_title'];?></a>
                                                    </strong><br>
                                                     <small class="text-muted"><?=$section['section_title']; ?></small>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($paid==true){
                                                            echo '<a href="student/start-to-learn-course.php?url='.$course['ins_mc_url'].'&& crs_vdo_url='.$class['sec_class_vid_link'].'" class="p-2 mt-2"><i class="fa fa-play-circle" aria-hidden="true"></i></a>';
                                                        }else{
                                                            echo '<a class="p-2 mt-2"><i class="fa fa-lock" aria-hidden="true"></i></a>';
                                                        }
                                                    
                                                    ?>
                                                    
                                                </td>
                                                
                                            </tr>
                            <?php
                                    endforeach;
                           
                                    echo '</tbody>';
                        	    echo "<script>\$(document).ready(function() {\$('.hidd-itm').hide();  \$('[data-toggle=\"toggle\"]').change(function(){\$(this).parents().next('.sid".$section['section_id']."').toggle();});});</script>";
                        	    endforeach;
                        	    
                        	 if($paid==false){
                                    echo '<tbody><tr><td><small style="color:#f00;">Please Complete Your Payment to Watch the Videos.</small></td></tr></tbody>';
                                }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
            
</div>

  



  <?php include '../footer.php'; ?>