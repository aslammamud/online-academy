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
                            <h4 class="page-title">ONLINE STUDENTS</h4>
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
		  
		 
		  //set_pay_log(4,'wqewqeqw');
		  
		  if(isset($_GET['stdntpaid'])){
			$stdntpaid = $_GET['stdntpaid'];
			 $query = mysqli_query($con,"SELECT * FROM online_students INNER JOIN online_courses on online_students.st_course_name = online_courses.oc_id  WHERE st_id = {$stdntpaid}");
			while ($row = mysqli_fetch_array($query)) {
			$cours_fee = $row['oc_discunt_fee'];
			}
			$sql = "UPDATE online_students SET st_payment_status = '1',st_payment_paid = '{$cours_fee}',st_payment_fullpaid = '1' WHERE st_id = {$stdntpaid}";
			if (mysqli_query($con,$sql)){
			echo ntf('Marked As FullPaid!',1);
			set_pay_log($stdntpaid,'Payment Full Paid by ('.$_SESSION['abca_sa_user_id'].')');
			echo reloader(''.$site_link.'/admin/online-students.php');	
			}  
		  }
		  
		  
		  if(isset($_GET['stdntunpaid'])){
			$stdntunpaid = $_GET['stdntunpaid'];
			
			$sql = "UPDATE online_students SET st_payment_status = '0',st_payment_paid = '0',st_payment_fullpaid = '0' WHERE st_id = {$stdntunpaid}";
			if (mysqli_query($con,$sql)){
			echo ntf('Marked As UnPaid!',0);
			set_pay_log($stdntunpaid,'Payment Marked UnPaid by ('.$_SESSION['abca_sa_user_id'].')');
			echo reloader(''.$site_link.'/admin/online-students.php');	
			}		  }
		  ?>
		  
		  <table class="table table-hover"> 
		  <thead style="background:#ccc;">
		  <tr> <th>REG ID</th> <th>Full Name</th> <th>Course Name</th> <th>Payment</th> <th>Institut</th><th>Reference</th><th>Number</th> <th>View Details</th></tr> </thead> 
		  
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
		
		
		   $query = mysqli_query($con,"SELECT * FROM online_students INNER JOIN online_courses on online_students.st_course_name = online_courses.oc_id $author_setment  $Serch_setment  $setment_today  order by st_id DESC LIMIT {$startpoint}, {$limit}");
		   while ($row = mysqli_fetch_array($query)) {
$st_payment_paid = $row['st_payment_paid'];
$oc_discunt_fee = $row['oc_discunt_fee'];	
$unpaidamount = $oc_discunt_fee-$st_payment_paid;
if($row ['st_photo'] != ''){
$usrimg = ''.$site_link.'/upload/students/'.$row ['st_photo'].'';	
}	
else {
$usrimg = ''.$site_link.'/img/11.png';
}
	echo '<tr> 
		  <th scope="row">'.$row ['st_registration_number'].'</th> 
		  <td>'.$row ['st_name'].'</td> 
		  <td>'.$row ['oc_name'].'</td> 
		  <td>';
		  
		  
		 if($row ['st_payment_status']== '1'){
			 
			if($st_payment_paid < $oc_discunt_fee ){
			  echo '<span class="label label-info">Due ('.$unpaidamount .')</span><br><span class="label label-success">Paid ('.$st_payment_paid .')</span>';
			  }else {
				  echo '<span class="label label-success">FullPaid</span>';  
			  }
			 }else{
				  echo '<span class="label label-danger">Unpaid</span>';
			  } 
		  
		  echo '<br>'.$row ['st_payment_method'].'';
			  
			$time_shdl = str_replace('TO','~',$row ['st_time_shdl']);
			$time_shdl = str_replace('PM','(PM)',$time_shdl);
			$time_shdl = str_replace('AM','(AM)',$time_shdl);
			echo'</td> 
		  <td>'.strtoupper($row ['st_it_firm']).'<br>'.$time_shdl.'</td>
		  <td>'.$row ['st_reference_name'].'</td>
		  <td>'.$row ['st_phone'].'</td>
		  <td>
		  ';
		 /*  if($row ['st_payment_fullpaid']== '0'){
			  echo '<a href="'.$site_link.'/admin/online-students.php?stdntpaid='.$row ['st_id'].'">
			  <button type="button" class="btn btn-success btn-sm">Full Paid?</button></a>';}
			  
		  else{echo '<a href="'.$site_link.'/admin/online-students.php?stdntunpaid='.$row ['st_id'].'">
		  <button type="button" class="btn btn-danger btn-sm" >Unpaid?</button></a>';} 
		  
		  <a href="'.$site_link.'/admin/edit-invoice.php?st='.$row ['st_id'].'" class="btn btn-success  btn-sm" >Payment</a>
		  <a href="'.$site_link.'/admin/edit-online-student.php?st='.$row ['st_id'].'" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" >Edit</a>
		 <a href="'.$site_link.'/st-invoice.php?inv='.$row ['st_registration_number'].'" class="btn btn-danger btn-transparent btn-theme-colored btn-sm" >L-INV</a>
		 <a href="download-form.php?st='.$row ['st_id'].'" class="btn btn-success btn-sm" >DOWNLOAD FORM</a>
*/
		  
		  echo '
		  #
</td> 
		  </tr> ';
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