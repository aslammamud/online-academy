 <div class="sidebar" data-color="black" data-image="assets/img/sidebar-5.jpg">
	
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo $site_link;?>" class="simple-text">
                  <img src="images/ecourse-logo.png" width="210"/>
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="<?php echo $site_link;?>/admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				
				<!-- 
				   <li STYLE="border-top:5px solid black; BACKGROUND:rgba(0, 0, 0, 0.5);">
                    
                       
                <p style="font-size:18px;">VIDEO COURSE </p>
                   
                </li>
            
			
                <li>
                    <a href="#">
                        <i class="pe-7s-pen"></i>
                        <p>Course</p>
                    </a>
                </li>
				   <li>
                    <a href="#">
                        <i class="pe-7s-leaf"></i>
                        <p>Instructor</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-ids"></i>
                        <p>Student List</p>
                    </a>
                </li>
				   <li>
                    <a href="#">
                        <i class="pe-7s-medal"></i>
                        <p>Certificate MNG</p>
                    </a>
                </li> -->
				
				
				
                <li STYLE="border-top:5px solid black; BACKGROUND:rgba(0, 0, 0, 0.5);">
                    
                       
                        <p style="font-size:18px;">LIVE COURSE</p>
                   
                </li>
				<?php
			//admin 
			if(is_admin()){
			?>
			<li>
                    <a href="online-students.php">
                        <i class="pe-7s-video"></i>
                        <p>ONLINE STUDENTS</p>
                    </a>
                </li>
			<li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
            <i class="pe-7s-id"></i>
              <p> STAFF 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="add-staff.php">
                    <span class="sidebar-normal"> ADD NEW STAFF </span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="all-staff.php">
                    <span class="sidebar-normal">All STAFF </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="admission-by-staff.php">
                    <span class="sidebar-normal">STAFF ADMISSION</span>
                  </a>
                </li>
                
               </ul>
            </div>
          </li>
		  
		  <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples2" aria-expanded="false">
            <i class="pe-7s-way"></i>
              <p> Batch Setup 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples2">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="manage-batch.php">
                    <span class="sidebar-normal"> Manage Batch </span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="create-batch.php">
                    <span class="sidebar-normal"> Create Batch </span>
                  </a>
                </li>
               </ul>
            </div>
          </li>
		  
		  <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples2v" aria-expanded="false">
            <i class="pe-7s-cash"></i>
              <p> Manage Accounts 
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples2v">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="add-expense.php">
                    <span class="sidebar-normal"> Add Expense </span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="account-collection.php">
                    <span class="sidebar-normal"> Accounts Collection </span>
                  </a>
                </li>
               </ul>
            </div>
          </li>
			<?php  } ?>
			
			
			<?php 	//supporter 
			if($di_stf_desiganation == 8){		?>
			<li>
                    <a href="manage-batchs-support.php">
                        <i class="pe-7s-video"></i>
                        <p>Manage Batch</p>
                    </a>
                </li>
			<?php  } ?>
			
			
			<?php
			//class manger 
			if($di_stf_desiganation == 4){
			?>
			<li>
                    <a href="online-students.php">
                        <i class="pe-7s-video"></i>
                        <p>ONLINE STUDENTS</p>
                    </a>
                </li>
			<?php  } ?>
			
			
			
			
                
				<!-- <li>
                    <a href="due-payments.php">
                        <i class="pe-7s-alarm"></i>
                        <p>DUE PAYMENT</p>
                    </a>
                </li>
				
				
					 <li>
                    <a href="due-payments.php">
                        <i class="pe-7s-id"></i>
                        <p>Batch MNG</p>
                    </a>
                </li>
				
				
                <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#account" aria-expanded="false">
            <i class="pe-7s-graph3"></i>
              <p> ACCOUNTS MNG<b class="caret"></b>
              
              </p>
            </a>
            <div class="collapse" id="account">
              <ul class="nav">
                
                <li class="nav-item ">
                  <a class="nav-link" href="add-expense.php">
                    <span class="sidebar-normal"> ADD EXPENSE </span>
                  </a>
                </li>
				   <li class="nav-item ">
                  <a class="nav-link" href="total-collection.php">
                    <span class="sidebar-normal">TOTAL COLLECTION </span>
                  </a>
                </li>
				<li class="nav-item ">
                  <a class="nav-link" href="income-statement.php">
                    <span class="sidebar-normal">INCOME STATEMENT </span>
                  </a>
                </li>
               </ul>
            </div>
          </li>-->
             
			 	
				
				<?php
			//admin 
			if(is_admin()){
			?>
				   <li STYLE="border-top:5px solid black; BACKGROUND:rgba(0, 0, 0, 0.5);">
                   <p style="font-size:18px;">WEBSITE SETTING </p>
                 </li>
				 
				
			<?php } ?>
			<li class="">
                    <a href="logout.php">
                        <i class="pe-7s-back-2"></i>
                        <p>Log Out</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>
