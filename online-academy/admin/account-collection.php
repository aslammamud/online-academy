<?php include('header.php');
include('admin-functions.php');   

?>
        <div class="content">
            <div class="container-fluid">

<div class="card-block">
												   </div>            <!-- Page-Title -->
              
 
         <!-- content here -->
	    <div class="row">
                   <div class="col-12" style="margin:0 auto;">
				   
				   
			<div class="row ">
		<h3 class="sep_title">ACCOUNTS STATISTICS</h3>
                    <div class="col-md-2 stat_box bg_green">
					<h4><?php echo number_format(payment_collection('today_Collection'), 0, '.', ',')?>.TK</h4>
					<p>Today Collection</p>
					    </div>
						
						 <div class="col-md-2 stat_box bg_purple">
					<h4>
					<?php 
					$monthly_collection = payment_collection('monthly_collection');
					echo  number_format($monthly_collection, 0, '.', ',')?>.TK</h4>
					<p>Monthly Collection</p>
					    </div>
						
						 <div class="col-md-2 stat_box bg_pending">
					<h4><?php echo number_format(payment_collection('total_collection'), 0, '.', ',')?>.TK</h4>
					<p>Total Collection</p>
					    </div>
						
						 <div class="col-md-2 stat_box bg_lime">
					<h4><?php 
													$monthly_expense = expense_collection('monthly_expense');
													echo number_format($monthly_expense, 0, '.', ',');?>.TK</h4>
					<p>MONTHLY EXPENSE</p>
					    </div>
						 <div class="col-md-2 stat_box bg_grey">
					<h4><?php 
												$net_monthly_collection = $monthly_collection-$monthly_expense;
												echo  number_format($net_monthly_collection, 0, '.', ',');?>.TK</h4>
					<p>Net Collection (<?php echo date('M')?>)</p>
					    </div>
						
						<div class="col-md-2 stat_box bg_pending">
					<h4><?php echo  number_format(due_payment('total_due'), 0, '.', ',');?>.TK</h4>
					<p>Due Payment</p>
					    </div>
						<div class="col-md-2 stat_box bg_lime">
					<h4><?php echo  number_format(expense_collection('total_expense'), 0, '.', ',');?>.TK</h4>
					<p>TOTAL EXPENSES</p>
					    </div>
						
						<div class="col-md-2 stat_box bg_grey">
					<h4><?php echo  number_format(payment_collection('total_collection')-expense_collection('total_expense'), 0, '.', ',');?>.TK</h4>
					<p>NET TOTAL ACCOUNTS</p>
					    </div>
						
						<div class="col-md-2 stat_box bg_purple">
					<h4>00</h4>
					<p>Savings</p>
					    </div>
						
						<div class="col-md-2 stat_box bg_green">
					<h4>00</h4>
					<p>Others</p>
					    </div>
                 </div>	   
				   
				   
				  
	
               </div>

			   <div class="col-12" style="margin:0 auto;">
                        <div class="card">
                 <div class="card-body">
   <div class="pt-30 pl-60 pr-60">

	 <div class="row">
	 <div class="col-md-12 p-3 text-white bg-info ">
	 <form class="form-inline" method="post" name="searchfrm">
	 <div class="form-group"><input type="text" placeholder="REG NO" name="REG_no" class="form-control"> </div> 
	 <div class="form-group">  <input type="text" placeholder="Mobile Number" name="Mobile" class="form-control"> 
	 <input type="text" placeholder="Student Name" name="Student_Name" class="form-control"> 
	 <input type="text" placeholder="Batch Number" name="Batch_Number" class="form-control"></div> 
	 <input type="submit" name="subserch" class="btn btn-secondary  btn-transparent btn-theme-colored" value="Search">
	 <input type="submit" name="subtodayserch" class="btn btn-success btn-transparent btn-theme-colored" value="Today">
	 
	 </form> 
	 </div>
	 </div>

	 

	 <div class="row">
	 <div class="col-md-12 p-3 text-white bg-dark  ">
	 <form class="form-inline" method="post" name="searchfrm">
	 <div class="form-group"> 
	<select name="serch_day" class="form-control">
	<option> Select Day</option>
	<?php
	for ($x = 1; $x <= 31; $x++) {
	echo '<option value="'.sprintf('%02d', $x).'"'; if(isset($_POST['serch_day'])){if($_POST['serch_day'] == sprintf('%02d', $x)){echo 'selected';}}echo '>'.$x.'</option>';	
	}
	?>
	</select>
	<select name="serch_month" class="form-control">
	<option> Select Month</option>
	<?php
	for ($x = 1; $x <= 12; $x++) {
	echo '<option value="'.sprintf('%02d', $x).'"'; if(isset($_POST['serch_day'])){if($_POST['serch_month'] == sprintf('%02d', $x)){echo 'selected';}}echo '>'.date("F", mktime(0, 0, 0, $x, 10)).'</option>';	
	}
	?>
	</select>
	<select name="serch_year" class="form-control">
	<option value="2020"> 2020</option>
	<option value="2021"> 2021</option>
	</select>	 
	 </div> 
	 &nbsp;<input type="submit" name="Searchdate" class="btn btn-info btn-transparent btn-theme-colored" value="Search">

	 </form> 
	 </div>
	 </div>

	 
	 
<div data-example-id="hoverable-table" class="bs-example">




<br>
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Course Name</th>
                            <th>Mobile Number</th>
							 <th>Paid Amount</th>
							<th>Status</th>
	                         <th>Ref.</th>
	                        <th></th>
                         
                           
                        </tr>
                    </thead>

					
					
					<?php
					
			
				if(isset($_POST['serch_day'])){
				$serch_day_stmnt = "AND pl_day = '".$_POST['serch_day']."'";	
				}else {$serch_day_stmnt = '';}
				
				if(isset($_POST['serch_month'])){
				$serch_month_stmnt = "AND pl_month = '".$_POST['serch_month']."'";	
				}else {$serch_month_stmnt = '';}
				
				if(isset($_POST['serch_year'])){
				$serch_year_stmnt = "AND pl_year = '".$_POST['serch_year']."'";	
				}else {$serch_year_stmnt = '';}
				
				
				
 $query = mysqli_query($np2con,"SELECT * FROM pay_log Inner join online_students ON online_students.st_id = pay_log.pl_student Inner Join online_courses on online_courses.oc_id = online_students.st_course_name Where st_id > 1 {$serch_day_stmnt} {$serch_month_stmnt} {$serch_year_stmnt}  order by pl_id DESC limit 100");
$amount = 0;
				while ($rowe = mysqli_fetch_array($query)) {

				echo ' <tbody>

                        <tr>
						
                            <th scope="row">'.$rowe['pl_id'].'</th>
                            <th scope="row">'.$rowe['st_name'].'<br>REG:'.$rowe['st_registration_number'].'</th>
						<td>'.substr($rowe['pl_date'], 0, -9).'</td>
                            <td>'.$rowe['oc_name'].'</td>
                            <td>'.$rowe['st_phone'].'</td>
                           <td><span style="color:green;">'.$rowe['pl_amount'].'</span></span>
						   <a href="'.$site_link.'/dashboard/edit-payment-log.php?plid='.$rowe['pl_id'].'" class="badge p-1 badge-info bg_lime">Edit</a>
						   <a href="'.$site_link.'/dashboard/delete-payment-log.php?plid='.$rowe['pl_id'].'" class="badge p-1 badge-danger bg_pending">Delete</a>
						   </td>
							<td>';
							if($rowe['st_payment_paid'] >= $rowe['oc_discunt_fee']){
							echo '<span class="badge p-1 badge-info bg_lime">FullPaid</span>';	
							}else {
							$rem = $rowe['oc_discunt_fee']-$rowe['st_payment_paid'];	
							echo '<span class="badge p-1 badge-success bg_green">UP-'.$rem.'</span>';	
							}
							
                         echo '</td>
						 <td>'.$rowe['pl_author'].'</td>
                            <td>
							<button style="display:none;" type="button" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg-XX'.$rowe ['st_registration_number'].'">View Details</button>
							<a href="'.$site_link.'/admin/edit-online-student.php?st='.$rowe ['st_id'].'" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" >Edit Student</a>
							<a href="'.$site_link.'/st-invoice.php?inv='.$rowe ['st_registration_number'].'" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" >Invoice</a>
							<a href="download-form.php?st='.$rowe ['st_id'].'" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" >Download Form</a>
							 <a href="'.$site_link.'/admin/edit-invoice.php?st='.$rowe ['st_id'].'" class="btn btn-success  btn-sm" >Payment</a>

							 <div class="modal fade bs-example-modal-lg-'.$rowe ['st_registration_number'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
   
   
   
   <div data-example-id="contextual-table" style="background: #FFF;
margin: 0 auto;
border-top: 5px solid #51504d;
border-radius: 4px;" class="bs-example col-md-8 col-md-push-2">
<h3 style="text-align:center;">Students Info</h3>		
			<br>
			<table class="table "> 
	<tbody>
			<tr class="active"> 
			<th scope="row">Full Name:		
			
			</th> 
			<td>'.$rowe ['st_name'].'</td> 
			<th scope="row">Phone:</th>  
			<td>'.$rowe ['st_phone'].'</td> </tr>
			
			
			<tr> <th scope="row">Registration: 
			</th> <td>'.$rowe ['st_registration_number'].'</td> 
			<th scope="row">Payment :</th>  
			<td><span class="label">';
			if($rowe ['st_payment_status']== '0'){
			echo '<span class="badge p-1 badge-danger bg_pending btn-sm">Pending</span>';}else{
			echo '<span class="badge p-1 badge-success bg_green btn-sm">Paid</span>';} 
			echo'</span></td> </tr>
			<tr class="success"> 
			<th scope="row">Course Name: </th> 
			<td>'.$rowe ['oc_name'].'</td> 
			<th scope="row">Date of Birth :</th> 
			<td>'.$rowe ['st_db'].'</td> </tr>
			
			 <tr class="active"> 
			<th scope="row">Batch No:</th> 
			<td>'.$rowe ['st_batch_number'].'</td> 
			<th scope="row">Reference:</th>  
			<td>'.$rowe ['st_reference_name'].'</td> </tr> 
			
			</tbody> 
	 
	</table> ';
	
 
			  $queryc = mysqli_query($np2con,"SELECT * FROM pay_log  WHERE pl_student = '{$rowe ['st_id']}' order by pl_id DESC limit 10");
				//if(mysqli_num_rows($queryc) < 1){echo ntf('not found!',0);die();}
				echo '<table class="table table-bordered">';
				echo '<tr class="table-success "><td >Log</td><td>Amount</td><td>Date</td></tr>';	
				while ($rowec = mysqli_fetch_array($queryc)) {
				echo '<tr><td>'.$rowec['pl_notes'] .'</td><td>'.$rowec['pl_amount'] .'</td><td>'.substr($rowec['pl_date'], 0, -9).'</td></tr>';	
				}
				echo '</table>';
		
			echo '<div class="row">
                      <div class="col-sm-6">
                       <a href="download-form.php?st='.$row ['st_id'].'" target="_blank"  class="btn btn-block btn-success btn-theme-colored btn-sm mt-20 pt-10 pb-10">
					   DOWNLOAD FORM</a>
                      </div>
                      <div class="col-sm-6">
                       <a href="'.$site_link.'/st-invoice.php?inv='.$row ['st_registration_number'].'" target="_blank" class="btn btn-block btn-info btn-theme-colored btn-sm mt-20 pt-10 pb-10">
					   VIEW INVOICE</a>
                      </div>
                    </div><br>
 
              </div>
   
   
   
   
   
   
  </div>
</div>
							</td>
                           
                          
                        </tr>
                      
                    </tbody>';	
					$amount = $amount+$rowe['pl_amount'];
					
					

					
					
				}

			  
			  
?>
					
                   
                </table>
            </div>

			
		<div class="text-center">
		<h2 style="color:#28a745 ;">Total Collection - <?Php echo $amount?>.TK</h2></div>	
			</div>
  

	   

               </div>
               </div>
               </div>
             </div> <!-- end container -->
       </div>



        </div>

<?php include('footer.php') ?>