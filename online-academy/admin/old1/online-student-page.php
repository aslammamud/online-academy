<?php

include 'header.php';

  // if($_SESSION['login_status'] != "Yes"){
  //   header('location: login.php');
  // }

?>


<link rel="stylesheet" type="text/css" href="./css/admin-panel.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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

    <center><section class="staff-info">
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