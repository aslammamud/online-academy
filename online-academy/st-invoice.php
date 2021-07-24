<?php
include 'connection.inc.php';

?>
<?php
	 if(isset($_GET['inv'])){
		 $query = mysqli_query($con,"SELECT * FROM online_students INNER JOIN online_courses on online_students.st_course_name = online_courses.oc_id where st_registration_number = '".$_GET['inv']."' limit 1");
		$stc = mysqli_num_rows($query);
		if($stc < 1){die('<h1><center>NOT FOUND!</center></h1>');}
while ($row = mysqli_fetch_array($query)) { 
$course_fee = $row ['oc_discunt_fee'];
$course_fee = $row ['oc_discunt_fee'];
$st_join_date = $row ['st_join_date'];

		$duration = str_replace("m"," Month",$row ['st_course_duration']);
		 $duration = str_replace("d"," Days",$duration);
		 
			$paid = $row ['st_payment_paid'];  
			$unpaid = $course_fee-$row ['st_payment_paid'];  
		if($row ['st_payment_paid'] >= $course_fee){
		$fullpaid = 1;	
		}else {
		$fullpaid = 0;	
		}
	?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style>
.cvbc {
padding: 24px;
    box-sizing: border-box;
    box-shadow: 0 0 40px;
    border-radius: 5px;	
}
.thsd {
background: #70d743;
    background: -webkit-linear-gradient(to right, #1CB5E0, #000046);
    background: linear-gradient(to right, #70d743, #30a200);
    color: white;	
	
}
</style>

<section id="invoice">
	


        <div class="container inv my-5 py-5 cvbc">
            <div class="row">
                <div class="col-lg-6">
				<img style="width: 200px;" src="images/ecourse-logo.png" class="img-fluid" alt="Logo">
				</div>
                <div class="col-lg-6">
                    <h1 class="font-weight-lighter py-1 px-3" style="float: right;">INVOICE</h1>
                </div>
            </div>
            <div class="row ">
			

			  
                <div class="col-md-6">
                    <address style="color:#838383;">
         <b> <h3 class="m-0"><?php echo $row ['st_name']?></h3></b> 
        <?php if(isset($row ['st_father_name']) AND $row ['st_father_name'] !=''){echo 'Father\'s name: '.$row ['st_father_name'].'<br>';}?>
         <?php if(isset($row ['st_mother_name']) AND $row ['st_mother_name'] !=''){echo 'Mother\'s name: '.$row ['st_mother_name'].'<br>';}?>
         <?php if(isset($row ['st_phone']) AND $row ['st_phone'] !=''){echo 'Phone:  '.$row ['st_phone'].'<br>';}?>
         
        </address>
                </div>
                <div class="col-lg-6" style="">
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Invoice No</td>
                                        
                                        <td>: <b> INV<?php echo $_GET['inv']?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Date&emsp; </td>
                                        
                                        <td>: <?php echo $year.'-'.$month.'-'.$day?></td>
                                    </tr>
                                    <tr>
                                        <td>Order Date&emsp; </td>
                                        
                                        <td>: <?php echo substr($st_join_date, 0,11);?></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-0">
                 <table class="table table-striped">
                            <thead class="thsd">
                                <tr>
                                    <th class="center">#</th>
                                    <th>COURSES NAME</th>
                                    <th>DESCRIPTION</th>
									<th class="right">Duration </th>
                                    <th class="center"></th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
							<tr>
            <td>1</td>
            <td><?php echo $row ['oc_name_short']?></td>
            <td><?php echo $row ['oc_name']?></td>
            <td><?php echo $duration?></td>
            <td>Course <?php echo $row ['oc_name']?></td>
            <td><?php echo number_format($course_fee,2),''?> TK</td>
          </tr>
                               
                      
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8 p-4">
						<p style="font-size:18px;">
						আপনার সিটটি কনফার্ম করতে নিচের যেকোন পেমেন্ট 
						মেথড থেকে পেমেন্ট  প্রদান করে স্কলারশিপ কনফার্ম করবেন - ধন্যবাদ 
						</p>
						
						<img src="img/Payment-Methord.png" />
						</div>

                        <div class="col-md-4 ">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="right">BDT. <?php echo number_format($row ['oc_orginal_fee'])?> TK</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (<?php echo $row ['oc_discunt_percent']?>%)</strong>
                                        </td>
                                        <td class="right">-<?php echo number_format($row ['oc_orginal_fee']-$row ['oc_discunt_fee'])?> TK</td>
                                    </tr>
									<tr>
                                        <td class="left">
                                            <strong>Payable amount </strong>
                                        </td>
                                        <td class="right"><?php echo number_format($row ['oc_discunt_fee'])?> TK</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Paid Amount</strong>
                                        </td>
                                        <td class="right"><?php echo number_format($paid)?> TK</td>
                                    </tr>
									<tr>
                                        <td class="left">
                                            <strong>Unpaid Amount</strong>
                                        </td>
                                        <td class="right"><?php echo number_format($unpaid)?> TK</td>
                                    </tr>
                                  
									 <tr>
<td>
                                         <h6>Payment Status : </h6> 
											<?php
		  if($fullpaid == 1){
			echo '<button type="button" class="btn btn-block btn-success btn-sm" disabled>FULL PAID</button>';  
		  }else {
			if($row ['st_payment_status'] == 0){
			  echo '<button type="button" class="btn btn-block btn-danger btn-sm" disabled>UNPAID</button> ';
		  }
		  if($row ['st_payment_status'] == 1){
			  echo '<button type="button" class="btn btn-block btn-success btn-sm" disabled>ADMITTED (DUE TK.'.$unpaid.')</button>';
		  }  
		  }
		  
		  

		  ?>
											
											
</td>
                                    </tr>
								
                                </tbody>
                            </table>
                        </div>
                    </div>
				 </div>
            </div>
            
        </div>

</section>
<?php }
	 }
?>