<?php 
	include '../header.php';

	$course_url = $_GET['url'];

	//mysqli_query($con,'SET CHARACTER SET utf8');

	$course = getSingleCourse($course_url);
?>

<style>
  .vhasha {
   top: 22%;
    z-index: 3;
    position: absolute;
    left:65% ;
  }
  .icon:hover {
    color: #ff0000;
}


@media (max-width: 576px){
    .vhasha {
        top: 0%;
        z-index: 0;
        position: relative;
        left:0% ;
    }
}

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
              
              <div class="col-md-3 mr-3 mb-1">
                <button type="button" class="btn btn-dark border-info">Wishlist <i class="fa fa-heart-o" aria-hidden="true"> </i></button>
              </div>
              <div class="col-md-3 mb-1">
               <button type="button" class="btn btn-dark border-info">Share <i class="fa fa-share-square-o" aria-hidden="true"></i></button>
              </div>
              <div class="col-md-5 mb-1">
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
<!--
`instructor`

`ins_id`,
`ins_nid`,
`ins_verified`,
`ins_verify_req`,
`ins_name`, `ins_pass`,
`ins_type`, `ins_phone`,
`ins_email`, `ins_sex`, `ins_dob`,
`ins_education`, `ins_joining_date`,
`ins_facebook`, `ins_desiganation`,
`ins_online_offline`, `ins_address`,
`ins_notes`, `ins_discription`, `ins_photo`)
  
 
 
ins_mc_id
ins_mc_instrc_id
ins_mc_title
ins_mc_category
ins_mc_meta_keys
ins_mc_meta_desc
ins_mc_code
ins_mc_image
ins_mc_free
ins_mc_orginal_fee
ins_mc_offer_fee
ins_mc_discount_type
ins_mc_discount
ins_mc_cls_total
ins_mc_cls_duration
ins_mc_short_desc
ins_mc_long_desc
ins_mc_level
ins_mc_language
ins_mc_vd_provider
ins_mc_vid_link
ins_mc_module
ins_mc_outcomes
ins_mc_requirements
ins_mc_enrolled
ins_mc_priority
ins_mc_visibility

--> 

        <div id="message"></div>
        <div class="col-sm-4 vhasha">
            <div  class="card shadow bg-white rounded p-3 mb-5">
              <div class="card border-white mb-3 " >
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= getYoutubeIdFromUrl($course['ins_mc_vid_link']); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body text-primary mt-3 p-0">
                    <div style="border: .5px solid #9191915c;" class="col-12 col-sm-12 p-0">
                    <div class="col-12 col-sm-12 course-class-items m-0 p-0 bg-light">
                        <h2 class="text-dark text-center p-3 myfont"> কোর্স কারিকুলাম</h2>
                      </div>   
                      <div class="col-12 col-sm-12 course-class-items m-0 p-1">
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
                                                    <a href="student/start-to-learn-course.php?url=<?php echo $course['ins_mc_url'] ?>&& crs_vdo_url=<?=$class['sec_class_vid_link'];?>" class="p-2 mt-2"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                                </td>
                                                
                                            </tr>
                            <?php
                                    endforeach;
                                    echo '</tbody>';
                        	    echo "<script>\$(document).ready(function() {\$('.hidd-itm').hide();  \$('[data-toggle=\"toggle\"]').change(function(){\$(this).parents().next('.sid".$section['section_id']."').toggle();});});</script>";
                        	    endforeach;
                            ?>

                        </table>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
  <div style="min-height:100vh;" class="container">
    <div class="row">
	
	
	</div>
      <div class="col-12 col-md-12">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="header">
              <h3 class="mt-5 myfont fs36"><strong> এই কোর্সে যা যা অন্তর্ভুক্ত থাকবে </strong></h3>
              
            </div>
            <div class="row">
              <div class="col-md-12">
               <p class="pre-line"><?php echo $course['ins_mc_long_desc']; ?></p>
              </div>

            </div>
            <div class="row">
              <div class="col-md-11 mt-5">
                  <div class="header">
                    <h3 class="myfont fs36"> <strong> এই কোর্সটি কাদের জন্য ?  </strong></h3>
                  </div>
                    <div class="row">
                      <div class="col-md-6">
                         <p class="pre-line"><?php echo str_replace(',','<br>',$course['ins_mc_requirements']); ?></p>
                      </div>
                    </div>
              </div>
            </div>
            
          <div class="row">
              <div class="col-md-11 mt-5">
                  <div class="header">
                    <h3 class="myfont fs36"> <strong> এই কোর্সটির উপকারিতা </strong></h3>
                  </div>
                    <div class="row">
                      <div class="col-md-12">
                      <p class="pre-line"><?php echo str_replace(',','<br>',$course['ins_mc_outcomes']); ?></p>
                      </div>
                    </div>
              </div>
            </div>

			<div class="row">
              <div class="col-md-11 mt-5">
                <div class="card shadow">
                  <div class="card-header bg-light">
                    <h3 class="myfont fs36"> <strong> কোর্স কন্টেন্ট  </strong></h3>
                  </div>
                  <div class="card-body bg-light">
                    
                    <div class="row">
                        <p class="pre-line"><?php echo $course['ins_mc_module']; ?></p>
                  </div>
                </div>
              </div>
              
            </div>

        </div>
      </div>
      
    </div>
  </div>
  <?php include '../footer.php'; ?>