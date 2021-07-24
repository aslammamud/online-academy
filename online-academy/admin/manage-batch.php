<?php include('header.php');
include('admin-check.php');
//require('super-admin-check.php');
    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;

?>
        <div class="content">
            <div class="container-fluid">

<div class="card-block">
                                                 <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Batch</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Total Completed Batch</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     

                    </div>
												   </div>            <!-- Page-Title -->
              
 
         <!-- content here -->
		 
		<div class="row">
                   <div class="col-12">
                        <div class="card">
                 <div class="card-body">
      
	  
	    <div class="container">
	  <?php
	 	  if(is_admin()){
			  ?>

	 
		  <?php }else{die();} ?>
	 <div class="row" style="color:black;">
	 <div class="col-12 mx-auto">
		  <a href="<?php echo $site_link; ?>/admin/create-batch.php" class="btn btn-info">Create Batch</a>
		 </div>
	  <div class="col-12">
	
          <div data-example-id="hoverable-table" class="bs-example"> 
		   
		  <?php
  
		  
		  if(isset($_GET['cmd'])){
			$cmd = $_GET['cmd'];
			$cid = $_GET['cid'];
			//OnGoing Booked Visible Hidden
			if($cmd != '' AND $cmd != ''){
			if($cmd == 'Visible'){
			$sql = "UPDATE batchs SET b_visibility = '1'  WHERE b_id = '{$cid}'";
			if (mysqli_query($np2con,$sql)){
			echo ntf('Updated!',0);
			echo reloader(''.$site_link.'/admin/manage-batch.php');	
			}}
			if($cmd == 'Hidden'){
			$sql = "UPDATE batchs SET b_visibility = '0'  WHERE b_id = '{$cid}'";
			if (mysqli_query($np2con,$sql)){
			echo ntf('Updated!',0);
			echo reloader(''.$site_link.'/admin/manage-batch.php');	
			}}
			if($cmd == 'OnGoing'){
			$sql = "UPDATE batchs SET b_status = '1'  WHERE b_id = '{$cid}'";
			if (mysqli_query($np2con,$sql)){
			echo ntf('Updated!',0);
			echo reloader(''.$site_link.'/admin/manage-batch.php');	
			}}
			if($cmd == 'Booked'){
			$sql = "UPDATE batchs SET b_status = '0'  WHERE b_id = '{$cid}'";
			if (mysqli_query($np2con,$sql)){
			echo ntf('Updated!',0);
			echo reloader(''.$site_link.'/admin/manage-batch.php');	
			}}
			
			
			}
	//oc_visibility oc_status
			
			}
			
	
			
		  ?>
		  

		<!--  
		`b_name`, `b_couse`, `b_creation_date`, `b_day`, `b_month`, `b_year`, `b_class_on_week`, 
		`bc_duration`, `b_end_day`, `b_end_month`, `b_end_year`, `b_class_time`, `b_class_time_ampm`,
		`b_mentor`, `b_on_day_saturday`, `b_on_day_sunday`, `b_on_day_tuesday`, `b_on_day_wednesday`,
		`b_on_day_thursday`, `b_on_day_friday`, `b_on_day_monday`, `b_terget`, `b_visibility`, `b_status`
		 --> 
		  
		  
		  <table class="table table-bordered   table-striped"> 
		  <thead class="thead-dark">
		  <tr> 
		  <th>Batch Info</th> 
		  <th>Time</th> 
		  <th>Date </th> 
		  <th>Status</th>
		  <th>Onday</th>
		  <th>Students</th> 
		  <th>Options</th></tr> </thead> 
		  
		  <tbody>
		  
		  
		<?php

		//echo $Serch_setment;
		

		
		   $query = mysqli_query($np2con,"SELECT * FROM batchs Inner Join online_courses on batchs.b_couse = online_courses.oc_id  order by b_id DESC LIMIT {$startpoint}, {$limit}");
while ($row = mysqli_fetch_array($query)) {
	echo '<tr> 
		  <th scope="row">
		  <span class="badge p-1 badge-success bg_green">Batch - '.$row ['b_name'].'</span>
		  <a target="_blank" href="edit-batchs.php?batch='.$row ['b_id'].'&course='.$row ['oc_id'].'"><span class="badge p-1 badge-info bg_lime">Edit</span></a><br>
		  '.$row ['oc_name'].'<br>
		  Mentor : '.$row ['b_mentor'].'</th> 
		  <td>
		  START <b>'.$row ['b_day'].'-'.date("F", mktime(0, 0, 0, $row ['b_month'], 10)).'-'.$row ['b_year'].'</b><br>
		  END&nbsp;&nbsp; <b>'.$row ['b_end_day'].'-'.date("F", mktime(0, 0, 0, $row ['b_end_month'], 10)).'-'.$row ['b_end_year'].'</b>
		  </td> 
			<td>
			Weekly: '.$row ['b_class_on_week'].'Days<br>
			Duration: '.$row ['bc_duration'].'<br>
			Time: '.$row ['b_class_time'].' '.$row ['b_class_time_ampm'].'<br>
			</td> 
		  ';
		  
		  echo'<td>';
		  if($row ['b_status']== '1'){
			echo '<span class="badge p-1 badge-success bg_green">OnGoing</span>';  
		  }else {echo '<span class="badge p-1 badge-danger bg_pending">Booked</span>';}  
			echo '<br>';
			if($row ['b_visibility']== '1'){
			echo '<span class="badge p-1 badge-success bg_green">Visible</span>';  
		  }else {echo '<span class="badge p-1 badge-danger bg_pending">Hidden</span>';} 	
		  
		  
		  echo'</td>';
		 echo '<td>';
		  if($row ['b_on_day_saturday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Saturday</span><br>';}
		  if($row ['b_on_day_sunday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Sunday</span><br>';}
		  if($row ['b_on_day_monday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Monday</span><br>';}
		  if($row ['b_on_day_tuesday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Tuesday</span><br>';}
		  if($row ['b_on_day_wednesday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Wednesday</span><br>';}
		  if($row ['b_on_day_thursday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Thursday</span><br>';}
		  if($row ['b_on_day_friday'] == '1'){echo '<span class="badge p-1 badge-info bg_lime">Friday</span><br>';}
		   
		  echo'</td>';
			  
			 echo '<td>
			 <span class="badge p-1 badge-success bg_green">Paid - '.batch_students_count($row ['b_name'],$row ['oc_id'],'paid').'</span><br>
			 <span class="badge p-1 badge-danger bg_pending">Unpaid - '.batch_students_count($row ['b_name'],$row ['oc_id'],'unpaid').'</span><br>
			 <span class="badge p-1 badge-info bg_lime">Terget - '.$row ['b_terget'].'</span><br>
			 </td>';
		
			  echo'<td>';
		  if($row ['b_status']== '0'){ 
			  echo '<a href="'.$site_link.'/admin/manage-batch.php?cmd=OnGoing&cid='.$row ['b_id'].'" class="badge p-1 badge-success bg_green" >OnGoing?</a><br> ';}
			  
		  else{echo '<a href="'.$site_link.'/admin/manage-batch.php?cmd=Booked&cid='.$row ['b_id'].'" class="badge p-1 badge-danger bg_pending" >Booked?</a> <br>';}

		  if($row ['b_visibility']== '0'){
			  echo '<a href="'.$site_link.'/admin/manage-batch.php?cmd=Visible&cid='.$row ['b_id'].'" class="badge p-1 badge-info bg_lime">Visible?</a><br>';}
			  
		  else{echo '<a href="'.$site_link.'/admin/manage-batch.php?cmd=Hidden&cid='.$row ['b_id'].'" class="badge p-1 badge-danger bg_pending" >Hidden?</a><br>';}
		  
		  echo '
<a  href="'.$site_link.'/admin/show-batch-students.php?batch='.$row ['b_name'].'&course='.$row ['oc_id'].'&cmd=paid" class="badge p-1 badge-info bg_lime" >Show Paid</a><br>
<a  href="'.$site_link.'/admin/show-batch-students.php?batch='.$row ['b_name'].'&course='.$row ['oc_id'].'&cmd=unpaid" class="badge p-1 badge-info bg_lime" >Show UnPaid</a><br>
</td> 
		  </tr> ';
}
		  
		  ?>
		  
		   
		  
		  </tbody> </table> </div></div>
		  <div class="pagination-filter-container">
         <?php
			$querycnt = mysqli_query($np2con,"SELECT b_id FROM batchs Inner Join online_courses on batchs.b_couse = online_courses.oc_id  order by b_id DESC");
			$countrow = mysqli_num_rows($querycnt);
		  //echo pagination_all($countrow,$limit);
		  ?>
              </div>
	 </div>

               </div>
               
	  
	  
	  </div>
               </div>
               </div>
             </div>
		 
		 
		 
		  <!-- content here -->
		
		
		</div>

        </div>

<?php include('footer.php') ?>