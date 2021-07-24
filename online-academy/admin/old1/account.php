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

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">AbcAcademy</a>
        <span class="breadcrumb-item active">Accounts</span>
      </nav>


<center><section class="staff-list" style="width: 90%; margin-top: 40px;">
  <div class="row">
    
    <div class="col-sm-4">
      <h2>000
TODAY COLLECTION

      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>
000
COLLECTION THIS MONTH


      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>000
TOTAL COLLECTION

      </h2>
      
      
      
    </div>
  </div>
</section>
</center>

<style type="text/css">
    	div .staff-list .col-sm-4 h2{
  width: 300px;
  height: 150px;

padding: 50px;
background-color: #59cebd;
font-size: 20px;
border-radius: 8px;
color: #fff;


  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .staff-list .col-sm-4 h2:hover{
	background-color: #fff;
	color: #000;
	transition: all 0.5s ease;
	
	}
    </style>

    <center><section id="search">
    	<div class="pick-date">
    		<h3>Search</h3>
    		<form>
    			<label for="date"></label><br>
          <input  type="date" id="date" name="date" style="width: 50%; height: 50px;"><br>
    		</form>
    	</div>
    </section></center>


    <center><section class="staff-info" style="margin-top: 30px;">
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
  
  </table>
</section>
</center>

<style type="text/css">
  .staff-info table{
    width: 90%;
  }

  .staff-info table th{
    width: 50px;
    height: 50px;
    font-size: 15px;
    text-align: center;
  }
</style>



<?php
  require_once 'footer.php';
?>