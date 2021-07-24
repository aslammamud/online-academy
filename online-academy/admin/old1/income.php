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


<center><section class="incomelist" style="width: 90%; margin-top: 40px;">
  <div class="row">
    
    <div class="col-sm-4">
      <h2>000
PROFIT THIS MONTH

      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>
000
PROFIT LAST MONTH


      </h2>
      
      
      
    </div>
    <div class="col-sm-4">
      <h2>000
ALL TIME PROFIT

      </h2>
      
      
      
    </div>
  </div>
</section>
</center>

<style type="text/css">
    	div .incomelist .col-sm-4 h2{
  width: 300px;
  height: 100px;

padding: 30px;
background-color: #59cebd;
font-size: 20px;
border-radius: 8px;
color: #fff;


  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .incomelist .col-sm-4 h2:hover{
	background-color: #fff;
	color: #000;
	transition: all 0.5s ease;
	
	}
    </style>

    <center><section id="search">
    	<div class="pick-date">
    		<h3 style="margin-top: 50px;">Search</h3>
    		<form>
    			<label for="start"></label><br>
          <input  type="month" id="date" name="date" min="2000-01" value="2021-03" style="width: 50%; height: 50px;"><br>
    		</form>
    	</div>
    </section></center>


    


<center><section class="incomeinfo" style="margin-top: 30px; margin-bottom: 50px;">
  <table>
    <tr>
      <th>INCOME THIS MONTH</th>
      <th>BDT</th>
      <th>EXPENSE THIS MONTH</th>
      <th>BDT</th>
      
    </tr>
    <tr>
      <td>TOTAL ADMISSION</td>
      <td>5000</td>
      <td>MOBILE BILL
FACEBOOK BOOST
</td>
      <td>500<br>
1000
</td>

      
    </tr>



     <tr class="calculation">
      <td>TOTAL EXPENSE</td>
      <td>5000</td>
      <td>TOTAL EXPENSE
</td>
      <td>1500
</td>

      
    </tr>
    
   
    

  </table>
  <table>
      <tr class="profit">
       <th style="font-size: 18px;">NET PROFIT /LOSS = 3500 TK</th>
     </tr>
  </table>
</section>
</center>

<style type="text/css">
  .incomeinfo table{
    width: 90%;
    text-align: center;
  }

  .incomeinfo table th{
    height: 40px;
    
  }

  .incomeinfo table td{
    height: 400px;
    

  }
 table .calculation td{
    height: 60px;
  }

  table .profit th{
    width: 90%;
  }
  
</style>






<?php
  require_once 'footer.php';
?>