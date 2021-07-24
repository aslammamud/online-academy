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
        <span class="breadcrumb-item active">Staff List</span>
      </nav>




<center><section class="staff-list" style="width: 90%; margin-top: 100px;">
  <div class="row">
    
    <div class="col-sm-4">
      <h2>01
      Total Staff
      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>01
      Total Staff
      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>01
      Total Staff
      </h2>
      
      
      
    </div>
  </div>
</section>
</center>

<style type="text/css">
    	div .staff-list .col-sm-4 h2{
  width: 300px;
  height: 100px;

padding: 35px;
background-color: #59cebd;
font-size: 20px;
color: #fff;
border-radius: 8px;

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .staff-list .col-sm-4 h2:hover{
	background-color: #fff;
	color: #000;
	transition: all 0.5s ease;
	
	}
    </style>

    <center><section class="staff-contact" style="width: 90%; margin-top: 100px;">
  <div class="row">
    
    <div class="col-sm-4">
      <h2>Search by mobile 
      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>Registration number
      </h2>
     
      
      
    </div>
    <div class="col-sm-4">
      <h2>Name
      </h2>
      <p>
      
      
    </div>
  </div>
</section>
</center>


<style type="text/css">
      div .staff-contact .col-sm-4 h2{
  width: 300px;
  height: 100px;

padding: 35px;
background-color: #59cebd;
font-size: 20px;
color: #fff;
border-radius: 8px;

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .staff-contact .col-sm-4 h2:hover{
  background-color: #fff;
  color: #000;
  transition: all 0.5s ease;
  
  }
    </style>
<center><section class="staff-info" style="margin-top: 30px;">
  <table>
    <tr>
      <th>NAME</th>
      <th>Job ID</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Joining Date</th>
      <th>Designation</th>
      <th>Address</th>
      <th>Notes</th>
      <th>Status</th>
      <th>Option</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td style="color: green;">Active</td>
      <td><span>Suspend</span> | Deactivate| Login</td>
    </tr>
  </table>
</section>
</center>

<style type="text/css">
  .staff-info table{
    width: 90%;
  }

  .staff-info table th,td{
    width: 50px;
    font-size: 15px;
    text-align: center;
  }
</style>



<?php
  require_once 'footer.php';
?>