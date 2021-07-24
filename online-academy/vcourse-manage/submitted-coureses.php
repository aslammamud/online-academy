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
                            <h4 class="page-title">INSTRUCTOR COURSE REQUEST</h4>
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
<style>   
.modal-backdrop {
  z-index: 1;
}
</style>   


	 
          <div data-example-id="hoverable-table" class="bs-example"> 
		  
		  <?php
		  
		 if(isset($_GET['Approve'])){
		 //echo $_GET['Approve'];	
		 $sql = "UPDATE instructor_made_courses SET ins_mc_visibility = '1' WHERE ins_mc_id = {$_GET['Approve']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor Approved','alert-success');  
			echo reloader(''.$site_link.'/vcourse-manage/submitted-coureses.php');	
			}
		 }
		  
		 if(isset($_GET['UnApprove'])){
		 	
		 $sql = "UPDATE instructor_made_courses SET ins_mc_visibility = '0' WHERE ins_mc_id = {$_GET['UnApprove']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor UnApproved','alert-info');  
			echo reloader(''.$site_link.'/vcourse-manage/submitted-coureses.php');	
			}
		 }
		  
		 if(isset($_GET['Canceled'])){
		 	
		 $sql = "UPDATE instructor_made_courses SET ins_mc_visibility = '2' WHERE ins_mc_id = {$_GET['Canceled']}";
			if (mysqli_query($con,$sql)){
			echo gen_notifi('Instructor Canceled','alert-danger');  
			echo reloader(''.$site_link.'/vcourse-manage/submitted-coureses.php');	
			}
		 }
		 
		 
		  ?>
		  
		  <table class="table table-hover"> 
		  <thead style="background:#ccc;">
		  <tr>
		  <th>#</th> 
		  <th>ID</th> 
		  <th>Course Name</th>
		  <th>Instructor</th> 
		  <th>Category</th>
		  <th>Course Fee</th>
		  <th>Status</th> 
		  <th>View Details</th></tr> </thead> 
		  
		  <tbody>
		  
		  
		<?php
		$Serch_setment = '';
		$setment_today = '';
		
		
		//echo $Serch_setment;
		$author = $_SESSION['abca_sa_user_id'];
		if($author == 'Abc-Acadamy' OR $author == 'Rahim'  OR $author == 'Fahim' OR $di_stf_desiganation == 11 or $di_stf_desiganation == 7){
		$author_setment = "where st_id > 0";	
		}else {$author_setment = "where st_reference_name = '$author'";}
		
		
		$query = mysqli_query($con,"SELECT * FROM 
		instructor_made_courses 
		INNER JOIN 
		instructor 
		on 
		instructor_made_courses.ins_mc_instrc_id = instructor.ins_id
		
		INNER JOIN 
		instructor_video_categories 
		on 
		instructor_video_categories.ins_catg_id = instructor_made_courses.ins_mc_category
		
		
		");
		   while ($row = mysqli_fetch_array($query)) {
			   
			$ins_mc_visibility = $row['ins_mc_visibility'];   
			  if($ins_mc_visibility == '0'){
				$verified_sts = '<span class="label label-warning">Pending</span>';  
			  }
			  if($ins_mc_visibility == '1'){
				$verified_sts = '<span class="label label-success">Approved</span>';  
			  }
			  if($ins_mc_visibility == '2'){
				$verified_sts = '<span class="label label-danger">Canceled</span>';  
			  }

echo '
<tr> 
		  <th scope="row"><img src="upload/instructor-made-courses/'.$row['ins_mc_image'].'"></th> 
		  <th scope="row">'.$row['ins_mc_id'].'</th> 
		  <td>'.$row['ins_mc_title'].'</td> 
		  <td>'.$row['ins_name'].'</td> 
		<td><span class="label label-success">'.$row['ins_catg_title'].'</span></td> 
		  
		  <td>
		  <span class="label label-success">'.$row['ins_mc_orginal_fee'].'</span><br>
		  <span class="label label-info">'.$row['ins_mc_offer_fee'].'</span>
		  </td> 
		  
		  <td>'.$verified_sts.'</td>
		  <td> 
		  <a href=""  class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal_'.$row['ins_mc_id'].'">Details</a>
		  <a href="submitted-coureses.php?Approve='.$row['ins_mc_id'].'" class="btn btn-success  btn-sm">Approve</a>
		  <a href="submitted-coureses.php?UnApprove='.$row['ins_mc_id'].'" class="btn btn-info  btn-sm">Un-Approve</a>
		  <a href="submitted-coureses.php?Canceled='.$row['ins_mc_id'].'" class="btn btn-danger  btn-sm">Canceled</a>
		  </td> 
		  </tr>
		  
<div class="modal fade" id="exampleModal_'.$row['ins_mc_id'].'" tabindex="-1" role="dialog" 
		aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$row['ins_mc_title'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Meta keys: '.$row['ins_mc_meta_keys'].'
       Meta Des: '.$row['ins_mc_meta_desc'].'
	   <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  
		  
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