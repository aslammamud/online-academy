<?php include('header.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 50;
    	$startpoint = ($page * $limit) - $limit;
  // if($_SESSION['login_status'] != "Yes"){
  //   header('location: login.php');
  // }
$admnb = $di_stf_id;
IF($di_stf_desiganation == 11 or $di_stf_desiganation == 7){
$admnb = 'admin';  
}
$admnb = 'admin'; 
?>
        <div class="content">
        
		 <div class="container-fluid">

 <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                               
                            </div>
                            <h4 class="page-title">INSTRUCTOR REQUEST</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">


								    <section>
      <div class="">
	 
	 <div class="" style="color:black;">
	

	<div class="row p-2 mb-2 m-1" style="background:#ccc; padding-top:10px; padding-left:10px;">
	 <form class="form-inline" method="post" name="searchfrm">
	 <div class="form-group"><input type="text" placeholder="REG NO" name="REG_no" class="form-control"/> </div> 
	 <div class="form-group">  <input type="text" placeholder="Mobile Number" name="Mobile"class="form-control"/> 
	 <input type="text" placeholder="Student Name" name="Student_Name" class="form-control"> 
	 <input type="text" placeholder="Batch Number" name="Batch_Number" 	 class="form-control"></div> 
	 <input type="submit" name="subserch" class="btn btn-info btn-transparent btn-theme-colored btn-sm" value="Search" />
	 <input type="submit" name="subtodayserch" class="btn btn-success btn-transparent btn-theme-colored btn-sm"  value="Today" />
	 
	 </form> 
	 </div>
   
	 
	 
          <div data-example-id="hoverable-table" class="bs-example"> 
		  
		  <?php
		  
		 if(isset($_GET['Approve'])){
		 	
		 $sql = "UPDATE instructor SET ins_verified = '1' WHERE ins_id = {$_GET['Approve']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor Approved','alert-success');  
			echo reloader(''.$site_link.'/vcourse-manage/instructor-request.php');	
			}
		 }
		  
		 if(isset($_GET['UnApprove'])){
		 	
		 $sql = "UPDATE instructor SET ins_verified = '0' WHERE ins_id = {$_GET['UnApprove']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor UnApproved','alert-info');  
			echo reloader(''.$site_link.'/vcourse-manage/instructor-request.php');	
			}
		 }
		  
		 if(isset($_GET['Ban'])){
		 	
		 $sql = "UPDATE instructor SET ins_verified = '2' WHERE ins_id = {$_GET['Ban']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor Banned','alert-danger');  
			echo reloader(''.$site_link.'/vcourse-manage/instructor-request.php');	
			}
		 }
		 
		 
		  ?>
		  
		  <table class="table table-hover"> 
		  <thead style="background:#ccc;">
		  <tr> <th>REG ID</th> <th>Full Name</th> <th>Email</th> 
		  <th>Phone</th> <th>Document</th><th>Reference</th><th>Status</th> <th>View Details</th></tr> </thead> 
		  
		  <tbody>
		  
		  
		<?php
		$Serch_setment = '';
		$setment_today = '';
		if(isset($_POST['subtodayserch'])){
		$setment_today = " AND 	st_join_date = '".date('Y')."-".date('m')."-".date('d')."' ";	
		}
		if(isset($_POST['subserch'])){
		
			 $Serch_setment = '';
			 $Batch_Number = $_POST['Batch_Number'];
			 $REG_no = $_POST['REG_no'];
			 $Mobile = $_POST['Mobile'];
			 $Student_Name = $_POST['Student_Name'];
	    if($Batch_Number != '')	{$Serch_setment .= " AND st_batch_number = '".$Batch_Number."' ";}
	    if($REG_no != '')	{$Serch_setment .= " AND st_registration_number = '".$REG_no."' ";}
	    if($Mobile != '')	{$Serch_setment .= " AND st_phone LIKE  '%".$Mobile."%' ";}
	    if($Student_Name != '')	{$Serch_setment .= " AND st_name LIKE  '%".$Student_Name."%' ";}
			
		}
		//echo $Serch_setment;
		$author = $_SESSION['abca_sa_user_id'];
		if($author == 'Abc-Acadamy' OR $author == 'Rahim'  OR $author == 'Fahim' OR $di_stf_desiganation == 11 or $di_stf_desiganation == 7){
		$author_setment = "where st_id > 0";	
		}else {$author_setment = "where st_reference_name = '$author'";}
		
		
		$query = mysqli_query($con,"SELECT * FROM instructor_req INNER JOIN instructor on instructor_req.ins_id = instructor.ins_id");
		   while ($row = mysqli_fetch_array($query)) {
			   
			$ins_verified = $row['ins_verified'];   
			  if($ins_verified == '0'){
				$verified_sts = '<span class="label label-warning">Pending</span>';  
			  }
			  if($ins_verified == '1'){
				$verified_sts = '<span class="label label-success">Approved</span>';  
			  }
			  if($ins_verified == '2'){
				$verified_sts = '<span class="label label-danger">Banned</span>';  
			  }

echo '
<tr> 
		  <th scope="row">'.$row['ins_id'].'</th> 
		  <td>'.$row['ins_name'].'</td> 
		  <td>'.$row['ins_email'].'</td> 
		  <td>'.$row['ins_phone'].'</td> 
	<td>
	<a target="_blank" href="../upload/instructor-verification/'.$row['ins_nid_front'].'">
	<span class="label label-success">NID~FRONT</span></a><br>
		 
		<a target="_blank" href="../upload/instructor-verification/'.$row['ins_nid_back'].'">
		<span class="label label-success">NID~BACK</span></a>
		  </td> 
		  <td>'.$row['ins_skillset'].'</td> 
		  
		  <td>'.$verified_sts.'</td>
		  <td> 
		  <a href="instructor-request.php?Approve='.$row['ins_id'].'" class="btn btn-success  btn-sm">Approve</a>
		  <a href="instructor-request.php?UnApprove='.$row['ins_id'].'" class="btn btn-info  btn-sm">Un-Approve</a>
		  <a href="instructor-request.php?Ban='.$row['ins_id'].'" class="btn btn-danger  btn-sm">Ban</a>
		  </td> 
		  </tr>
';

}
		  
		  ?>
		  
		   
		  
		  </tbody> </table> </div></div>
		  <div class="pagination-filter-container">
		  <?php
			$querycnt = mysqli_query($con,"SELECT * FROM online_students INNER JOIN online_courses on online_students.st_course_name = online_courses.oc_id $author_setment  $Serch_setment  $setment_today  order by st_id DESC");
			$countrow = mysqli_num_rows($querycnt);
		  echo pagination_all($countrow,$limit,$page);
		  ?>

              </div>
	 </div>
	 
    </section>

                            
							</div>
                    </div>
                   </div><!--end row-->

              
             </div> <!-- end container -->
        </div>



									                                                  


		
		</div>

<?php include('footer.php') ?>