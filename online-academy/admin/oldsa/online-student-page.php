<?php

include 'header.php';
    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 50;
    	$startpoint = ($page * $limit) - $limit;
  // if($_SESSION['login_status'] != "Yes"){
  //   header('location: login.php');
  // }
$admnb = $di_stf_id;
IF($di_stf_desiganation == 11 or $di_stf_desiganation == 7){
$admnb = 'admin';  
}$admnb = 'admin'; 
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
td,th {
width: auto;	
}
</style>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">AbcAcademy</a>
        <span class="breadcrumb-item active">Online Student Page</span>
      </nav>

      <center><section class="online-student" style="width: 90%; margin-top: 100px;">
  <div class="row">
    
    <div class="col-sm-3">
      
      <h1>Total Form</h1>
      
      
    </div>
    <div class="col-sm-3">
      
      <h1>Total Admission</h1>
      
      
      
    </div>
    <div class="col-sm-3">
      
      <h1>
      Admission This month
      </h1>
      
      
      
    </div>
    <div class="col-sm-3">
      
      <h1>
      Today Admission
      </h1>
      
      
      
    </div>
  </div>
</section>
</center>


<style type="text/css">
    	div .online-student .col-sm-3 h1{
  width: 250px;
  height: 100px;
 padding: 35px;
background-color: #59cebd;
font-size: 20px;
border-radius: 8px;


color: #fff;


  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .online-student .col-sm-3 h1:hover{
	background-color: #fff;
	color: #000;
	transition: all 0.5s ease;
	
	}
    </style>

    <center>
	<section class="staff-info">
  <table>
    <tr>
      <th>Date</th>
      <th>Reg No</th>
      <th>Name</th>
      <th>Course</th>
      <th>Payment</th>
      <th>Reference</th>
      <th>Phone Number</th>
      <th>Option</th>
      
    </tr>
    <tr>
      <td>aaaaa</td>
      <td>abc3350</td>
      <td>aaaa</td>
      <td>aaa</td>
      <td>Paid</td>
      <td>Shimanto</td>
      <td>01915552</td>
      <td>Form | Invoice | Edit | Ban| Delete</td>
      
    </tr>
  </table>

 <div class="container-fluid">

<div class="card-block">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-xl-3 col-sm-12">
                                                                <div class="badge-box">
                                                                    <div class="sub-title">Total Students

                                                                    </div>

                                                                   
                                                                    <div>
                                                                      <h2>  <label class="badge badge-primary">
																	  <?php echo student_count_author($admnb,'all') ;?>
																	  </label>
                                                                </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                                                  <div class="badge-box">
                                                                    <div class="sub-title">Admission This Month

                                                                    </div>

                                                                   
                                                                    <div>
                                                                      <h2>  <label class="badge badge-success">
																	  <?php echo round(get_counselor_amount_collection($admnb,0,'this_month_Collection')/1000);?>
																	  </label>
                                                                </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                                                <div class="badge-box">
                                                                    <div class="sub-title">Pending Students

                                                                    </div>

                                                                   
                                                                    <div>
                                                                      <h2>  <label class="badge badge-danger">
																	  <?php echo student_count_author($admnb,'pending_admission') ;?>
																	  </label>
                                                                </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-xl-3 col-sm-6">
                                                                  <div class="badge-box">
                                                                    <div class="sub-title">TODAY FORM

                                                                    </div>

                                                                   
                                                                    <div>
                                                                      <h2>  <label class="badge badge-primary">
																	  <?php echo student_count_author($admnb,'today_form') ;?>
																	  </label>
                                                                </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                     
                                                         
                                                        </div>
                                                    </div>
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
			echo reloader(''.$site_link.'/dashboard/online-students.php');	
			}  
		  }
		  
		  
		  if(isset($_GET['stdntunpaid'])){
			$stdntunpaid = $_GET['stdntunpaid'];
			
			$sql = "UPDATE online_students SET st_payment_status = '0',st_payment_paid = '0',st_payment_fullpaid = '0' WHERE st_id = {$stdntunpaid}";
			if (mysqli_query($con,$sql)){
			echo ntf('Marked As UnPaid!',0);
			set_pay_log($stdntunpaid,'Payment Marked UnPaid by ('.$_SESSION['abca_sa_user_id'].')');
			echo reloader(''.$site_link.'/dashboard/online-students.php');	
			}		  }
		  ?>
		  
		  <table class="table table-hover"> 
		  <thead style="background:#ccc;">
		  <tr> <th>REG ID</th> <th>Full Name</th> <th>Course Name</th> <th>Payment</th> <th>Institut</th><th>Number</th> <th>View Details</th></tr> </thead> 
		  
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
		  <td>'.$row ['st_phone'].'</td>
		  <td>
		  ';
		 /*  if($row ['st_payment_fullpaid']== '0'){
			  echo '<a href="'.$site_link.'/dashboard/online-students.php?stdntpaid='.$row ['st_id'].'">
			  <button type="button" class="btn btn-success btn-sm">Full Paid?</button></a>';}
			  
		  else{echo '<a href="'.$site_link.'/dashboard/online-students.php?stdntunpaid='.$row ['st_id'].'">
		  <button type="button" class="btn btn-danger btn-sm" >Unpaid?</button></a>';} */
		  
		  echo '
		  <button type="button" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg-'.$row ['st_registration_number'].'">View Details</button>
		  <a href="'.$site_link.'/dashboard/edit-invoice.php?st='.$row ['st_id'].'" class="btn btn-success  btn-sm" >Payment</a>
		  <a href="'.$site_link.'/dashboard/edit-online-student.php?st='.$row ['st_id'].'" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" >Edit</a>
		  <a href="'.$site_link.'/dashboard/send-sms.php?st='.$row ['st_id'].'" class="btn btn-info btn-transparent btn-theme-colored btn-sm" >SMS</a>
		  <a href="'.$site_link.'/st-invoice.php?inv='.$row ['st_registration_number'].'" class="btn btn-danger btn-transparent btn-theme-colored btn-sm" >L-INV</a>


<div class="modal fade bs-example-modal-lg-'.$row ['st_registration_number'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 585px;">
   
   
   
   <div data-example-id="contextual-table" style="background: #009688;min-width: 588px;
    border-radius: 10px" class="bs-example col-md-8 ">
<h3 style="text-align:center;" class="p-3">IT  Online Students</h3>	
			<div style="width:200px; height:200px; margin:0 auto;"><img src="'.$usrimg .'" class="mb-20 img-thumbnail"></div>
			<br>
			<table class="table"> 
	<tbody>
			<tr class="active"> 
			<th scope="row">Full Name:		
			
			</th> 
			<td>'.$row ['st_name'].'</td> 
			<th scope="row">Phone:</th>  
			<td>'.$row ['st_phone'].'</td> </tr>
			
			
			<tr> <th scope="row">Registration: 
			</th> <td>'.$row ['st_registration_number'].'</td> 
			<th scope="row">Payment :</th>  
			<td><span class="label">';
			if($row ['st_payment_status']== '0'){
			echo '<span class="label label-danger btn-sm">Pending</span>';}else{
			echo '<span class="label label-success btn-sm">Paid</span>';} 
			echo'</span></td> </tr>
			<tr class="success"> 
			<th scope="row">Course Name: </th> 
			<td>'.$row ['oc_name'].'</td> 
			<th scope="row">Date of Birth :</th> 
			<td>'.$row ['st_db'].'</td> </tr>
			
			 <tr class="active"> 
			<th scope="row">Batch No:</th> 
			<td>'.$row ['st_batch_number'].'</td> 
			<th scope="row">Reference:</th>  
			<td>'.$row ['st_reference_name'].'</td> </tr> 
			
			</tbody> 
	 
	</table> 
			<div class="row">
                      <div class="col-sm-6">
                       <a href="download-form.php?st='.$row ['st_id'].'" target="_blank"  class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">
					   DOWNLOAD FORM</a>
                      </div>
                      <div class="col-sm-6">
                       <a href="invoice.php?st='.$row ['st_id'].'" target="_blank" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">
					   VIEW INVOICE</a>
                      </div>
                    </div><br>
 
              </div>
   
   
   
   
   
   
  </div>
</div></td> 
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



									                                                  

</section>
</center>

<style type="text/css">
	.staff-info table{
		width: 90%;
	}
	.staff-info table th,td{
		text-align: center;
		height: 50px;
		width: 80px;
	}
</style>



<section id="invoice">
	


        <div class="container inv my-5 py-5">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="font-weight-lighter py-1 px-3">INVOICE</h1>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-6">
                    <p class="mb-0">INVOICE TO</p>
                    <h5 class="mb-0"><b>Mr. Simon Edwards</b></h5>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the.. </p>
                    <p class="mb-0">01710000000</p>
                    <p class="mb-0">invoice@gmail.com</p>
                </div>
                <div class="col-lg-6" style="margin-bottom: 50px; float: right;">
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Invoice No</td>
                                        
                                        <td>123456</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        
                                        <td>12-12-2019</td>
                                    </tr>
                                    <tr>
                                        <td>Order Date</td>
                                        
                                        <td>12-12-2019</td>
                                    </tr>
                                    <tr>
                                        <td>Account No</td>
                                        
                                        <td>00000123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">NO</th>
                                <th scope="col">ITEM DESCREPTION</th>
                                <th scope="col">QTY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <b>Brochure Design</b>
                                    <p>
                                        Design a stunning brochure in minutes with Canva.
                                    </p>
                                </td>
                                <td>1</td>
                                <td>540</td>
                                <td>540</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <b>Stationery Design</b>
                                    <p>
                                        The entire goal is to have beautiful branding throughout the company.
                                    </p>
                                </td>
                                <td>2</td>
                                <td>400</td>
                                <td>800</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <b>Logo Design</b>
                                    <p>
                                        Visiting Cards, Photo Mugs, Printed T-Shirts, Photo Books, Notebook, Letterhead.
                                    </p>
                                </td>
                                <td>4</td>
                                <td>500</td>
                                <td>20000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <b>Business Card Design</b>
                                    <p>
                                        Browse our selection of business cards design templates. 
                                    </p>
                                </td>
                                <td>10</td>
                                <td>300</td>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>SUB Total</b></td>
                                <td><b>15200</b></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>TAX VAT 3%</b></td>
                                <td><b>16200</b></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>DISCOUNT 3%</b></td>
                                <td><b>16000</b></td>
                            </tr>
                            <tr style="background: #E6E4E7; color: #0099D5;">
                                <td colspan="3"></td>
                                <td><b>GRAND TOTAL</b></td>
                                <td><b>28000</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="ml-5 border-bottom">Payment Method</h5>
                    <h6 class="text-center">Paypal</h6>
                    <p></p>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h5 class="ml-5">Terms and Conditions</h5>
                    <p class="ml-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3 text-center">
                    <h3 class="signature">ABC</h3>
                    <p>Account Manager</p>
                </div>
            </div>
        </div>

</section>
<style type="text/css">
	            #invoice {
                overflow-x: hidden;
                font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            }
            .signature{
                font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                color: #0099D5;
            }

            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid transparent;
                background: #0099D5;
                color: #fff;
            }
            .font-weight-lighter{
                font-weight: 300;
                background: #0099D5;
                color: #fff;
            }
            .inv{
                background: #E6E4E7;
            }
            .my-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important;
            }
            .my-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important;
            }
            .py-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important;
            }
            .px-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .border-bottom{
                border-bottom: 2px solid #000 !important;
                /*width: 35%;*/
                padding: 0px 0px 5px 0px;
            }
</style>



<center><section class="student-view" style="margin-top: 100px; margin-bottom: 50px;">
   <table>
      <tr style="width: 90%;">
       <th style="font-size: 18px; height: 150px;"><img src="./img/ecourse-logo.png" height="50" width="200"><center><h3 style="width: 500px; text-align: center; font-size: 14px; margin-top: 20px;"> STUDENT INFORMATION CHECKLIST
নিচের তথ্য গুলো  ভালোভাবে চেক করুন কারণ এই তথ্য অনুযায়ী আপনাকে সার্টিফিকেট প্রদান করা হবে। 
</h3></center></th>
     </tr>
  </table>
  <table>
    <tr>
      <th style="width: 300px;">NAME</th>
      <th></th>
      
    </tr>
    <tr>
      <th>FATHER’S NAME</th>
      <th></th>
      
    </tr>
    <tr>
      <th>COURSE NAME</th>
      <th></th>
      
    </tr>
    <tr>
      <th>VENNUE</th>
      <th></th>
      
    </tr>
    <tr>
      <th>GENDER</th>
      <th></th>
      
    </tr>
    <tr>
      <th>FACEBOOK NAME</th>
      <th></th>
      
    </tr>
    <tr>
      <th>ADDRESS</th>
      <th></th>
      
    </tr>
    <tr>
      <th>COURSE DURATION</th>
      <th></th>
      
    </tr>
    <tr>
      <th>COURSE SCHEDULE</th>
      <th></th>
      
    </tr>

  </table>
  <table>
      <tr style="width: 90%;">
       <th style="font-size: 18px;">THANK YOU FOR CHECKING ALL THE INFORMATION</th>
     </tr>
  </table>
</section>
</center>

<style type="text/css">
  .student-view table{
    width: 90%;

  }
  .student-view table th{
    height: 50px;
    text-align: center;
    font-size: 18px;
  }
</style>





<?php
  require_once 'footer.php';
?>