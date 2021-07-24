<?php 
$page_title = 'invoice';
include('connection.inc.php');
//include('admin-check.php');
?>
<style>
.invoice tr td {color:black;}
.invoice (color:black !important;)
.table tr th (color:black;)
.name { float:left; width:30%; }
.f_table {font-size:20px; color:black !important; width: 100%;}
.f_table tr td {padding-top:20px;}
tr {
color: black;
    line-height: 35px;
}
/* style sheet for "letter" printing */
@media print {
    #dss {
       display:none;
    }
</style>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Start main-content -->
   <?php
	 if(isset($_GET['st'])){
		 $query = mysqli_query($np2con,"SELECT * FROM online_students INNER JOIN online_courses on online_students.st_course_name = online_courses.oc_id where st_id = '".$_GET['st']."' limit 1");
		$stc = mysqli_num_rows($query);
		if($stc < 1){die('<h1><center>NOT FOUND!</center></h1>');}
while ($row = mysqli_fetch_array($query)) { 
$course_fee = $row ['oc_discunt_fee'];

		  if($row ['st_payment_status'] == 0){
			$paid = '0';  
			$unpaid = $course_fee;  
		  }
		  if($row ['st_payment_status'] == 1){
			$paid = $course_fee ;  
			$unpaid = 0;  
		  }
		  
		  
		
		 $duration = str_replace("m"," Month",$row ['st_course_duration']);
		 $duration = str_replace("d"," Days",$duration);
		  
	if($row ['st_sex'] == 0){
	$gender = 'Female';	
	}else {$gender = 'Male';	}	  
		
	$st_it_firm = $row ['st_it_firm'];
	$st_it_firm = str_replace('abc',' ABC Academy ',$st_it_firm);
	$st_it_firm = str_replace('others',' ABC Academy ',$st_it_firm);
	$st_it_firm = str_replace('dit',' Digital it institute',$st_it_firm);
	$st_it_firm = str_replace('pixit',' Pixel it institute',$st_it_firm);
	$st_it_firm = str_replace('emok',' e-moktob islamic center',$st_it_firm);
	$st_it_firm = str_replace('100m',' 100 Miles IT',$st_it_firm);
	$st_it_firm = str_replace('itv',' IT Vision',$st_it_firm);
	
	$st_time_shdl = $row ['st_time_shdl'];
	$st_time_shdl = str_replace('TO',' ~ ',$st_time_shdl);
		
	?>
  
  <div class="main-content" style="margin-left: 0px;">
    
    <!-- Section: About -->
<div class="container" style="border-radius: 5px;width: 970px;box-shadow: 0 0 4px #444;margin-top: 20px;">
<div class="border-1px p-30 mb-0">
   

	
<div class="row">
<div class="col-md-12 p-4">
	        <img src="images/ecourse-logo.png" style="width: 100%;"/>		
                <hr> 
				<center  class="text-success h5">আপনার তথ্যগুলো যাচাই করে নিন পরবর্তিতে এই তথ্যের ভিত্তিতে আপনাকে সার্টিফিকেট প্রদান করা হবে</center>
                <hr> 
			
	<table width="100%" class="f_table">
		<tr>

			<td width="230">Full Name of Candidate:</td>
			<td style="border-bottom:1px solid black;"><?php echo $row ['st_name']?></td>
		</tr>
		<tr>
			<td>Father's Name:</td>
			<td style="border-bottom:1px solid black;"><?php echo $row ['st_father_name']?></td>
		</tr>
		<!--<tr>
			<td>Mother's Name:</td>
			<td style="border-bottom:1px solid black;"><?php echo $row ['st_mother_name']?></td>
		</tr>-->
	</table>
	
		<table class="f_table">
					<tr>
					
					<td width="230">Mobile:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="300"><?php echo $row ['st_phone']?></td>
			<td width="80">Gender:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo $gender?></td>
			
			</tr>
				</table>
				
					<table width="100%" class="f_table">
		<tr>
			<td width="230">Class Time:</td>
			<td style="border-bottom:1px solid black;text-align:center;"><?php echo $st_time_shdl?></td>
		</tr>
		<tr>
			<td>Course Institute:</td>
			<td style="border-bottom:1px solid black;text-align:center;"><?php echo $st_it_firm?></td>
		</tr>
		
	</table>
	

				
		<table class="f_table">
					<tr>
					
					<td width="230">Payment Method:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="300"><?php echo strtoupper($row ['st_payment_method'])?></td>
			<td width="80">FB ID:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo $row ['st_facebook']?></td>
			
			</tr>
				</table>		
				
				
				
				
					<table class="f_table">
					<tr>
					
					<td width="230">Course Name:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="440"><?php echo $row ['oc_name']?></td>
			<td width="80">Duration:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo $duration?></td>
			
			</tr>
				</table>	
				
				
				
		
				
					<table class="f_table">
					<tr>
					
					<td width="230">Course Fee:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="300"><center><?php echo number_format($course_fee,0)?>TK<center></td>
			<td width="80">Date:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo substr($ctime,0,11)?></td>
			
			</tr>
				</table>
				
					<table class="f_table">
					<tr>
					
					<td width="230">Mobile:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="300"><center><?php echo $row ['st_phone']?><center></td>
			<td width="80">Reference:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo $row ['st_reference_name']?></td>
			
			</tr>
				</table>	
				
				
				
			<table class="f_table">
					<tr>
					
					<td width="230">Scholarship:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width="300"><center>Yes<center></td>
			<td width="100">Batch No:</td>
			<td style="border-bottom:1px solid black; text-align:center;" width=""><?php echo $row ['st_batch_number']?></td>
			
			</tr>
				</table>		
				

				
				
				
				<br><br>
					<table class="f_table" width="100%">
				</table>
				
</div>
</div>


				
				
                </div>
</div>
	   <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" id="dss" name="submitf" class="btn btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Edit Info</button> 
					  <button type="submit" id="dss" name="submitf" class="btn  btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" onclick="window.print('')">Print</button>
                    </div>
	<?php 
} 
}else {
die('<h1><center>NOT FOUND!</center></h1>');
}
	 		  
	 ?>	
 </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>