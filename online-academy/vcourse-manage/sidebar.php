 <div class="sidebar" data-color="black" data-image="assets/img/sidebar-5.jpg">
	
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo $site_link;?>" class="simple-text">
                  <img src="images/ecourse-logo.png" width="210"/>
                </a>
            </div>

            <ul class="nav">
                <li class="<?php echo ($page_title == "dashboard" ? "active" : "")?>">
                    <a href="<?php echo $site_link;?>/vcourse-manage">
                        <i class="pe-7s-graph"></i>
                        <p>Video Dashboard</p>
                    </a>
                </li>
			
				
                <li STYLE=" BACKGROUND:rgba(0, 0, 0, 0.5);">
                <p style="font-size:18px;">VIDEO COURSE</p>
                </li>
				<?php
			//vcourse-manage 
			if(is_admin()){
			?>
			<li>
                    <a href="enroll-student.php">
                        <i class="pe-7s-film"></i>
                        <p>enroll student</p>
                    </a>
                </li>
	
		  <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples2" aria-expanded="false">
            <i class="pe-7s-add-user"></i>
              <p> Manage Instructor 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples2">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="instructor-request.php">
                    <span class="sidebar-normal"> Instructor Request</span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="all-instructor.php">
                    <span class="sidebar-normal"> All Instructor </span>
                  </a>
                </li>
               </ul>
            </div>
          </li>
		  
		  <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamplesv2" aria-expanded="false">
            <i class="pe-7s-arc"></i>
              <p> Instructor Coureses 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamplesv2">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="submitted-coureses.php">
                    <span class="sidebar-normal"> Submitted Coureses</span>
                  </a>
                </li>
               </ul>
            </div>
          </li>
		  
		  
		  
		  <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples2v" aria-expanded="false">
            <i class="pe-7s-study"></i>
              <p> Manage COURSE 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples2v">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="add-video-category.php">
                    <span class="sidebar-normal"> Add Video Category</span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="add-video-subcategory.php">
                    <span class="sidebar-normal">Add Video Sub-Category</span>
                  </a>
                </li>
               </ul>
            </div>
          </li>
		  
			<?php  } ?>
			
			
			 	
				
				<?php
			//vcourse-manage 
			if(is_admin()){
			?>
				   <li STYLE=" BACKGROUND:rgba(0, 0, 0, 0.5);">
                   <p style="font-size:18px;">WEBSITE SETTING </p>
                 </li>
				 
				 
				<li class="nav-item <?php echo ($page_title == "featured" ? "active" : "")?>">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples2vv" aria-expanded="false">
            <i class="pe-7s-global"></i>
              <p> Website Content
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples2vv">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="featured.php">
                    <span class="sidebar-normal">Featured</span>
                  </a>
                </li>
				   <li class="nav-item <?php echo ($page_title == "our-team" ? "active" : "")?>">
                  <a class="nav-link" href="whychooseus.php">
                    <span class="sidebar-normal">Why Choose Us</span>
                  </a>
                </li>
				   <li class="nav-item <?php echo ($page_title == "our-team" ? "active" : "")?>">
                  <a class="nav-link" href="our-team.php">
                    <span class="sidebar-normal">Our Team</span>
                  </a>
                </li>
               </ul>
            </div>
          </li> 
				 
               			
				
			<?php } ?>
	
				<li class="active-pro">
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>
