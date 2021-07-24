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
        <span class="breadcrumb-item active">Admin Dashboard</span>
      </nav>

      
<!------ Include the above in your HEAD tag ---------->
<center><div class="container">

  <h1 style="margin-top: 30px; margin-bottom: 30px;">Best Employee</h1>
  
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top" src="https://media.newstracklive.com/uploads/entertainment-news/bollywood-news/Dec/27/big_thumb/salman3_5e0586e0e2708.JPG">
        <p class="card-block">
          Today Admission -  01
          Admission This month - 100
          Lifetime Admission -50
        </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top" src="https://media.newstracklive.com/uploads/entertainment-news/bollywood-news/Dec/27/big_thumb/salman3_5e0586e0e2708.JPG">
        <p class="card-block">
          Today Admission -  01
          Admission This month - 100
          Lifetime Admission -50
        </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top" src="https://media.newstracklive.com/uploads/entertainment-news/bollywood-news/Dec/27/big_thumb/salman3_5e0586e0e2708.JPG">
        <p class="card-block">
          Today Admission -  01
          Admission This month - 100
          Lifetime Admission -50
        </p>
      </div>
    </div>
    
  </div>
</div>
</center>

 <style type="text/css">
      div.card {
  width: 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  border-radius: 10px;
  color: #fff;
background-color: #59cebd;
}

div.card p:hover{
  background-color: #fff;
  color: #000;
  transition: all 0.5s ease;
}
</style>
  <center><section class="collection" style="width: 90%; margin-top: 100px;">
  <div class="row">
    <div class="col-sm-3">
      <h3>5000
Today Collection
</h3>>
      
    </div>
    <div class="col-sm-3">
      <h3>3000
This Month Collection
</h3>
      
    </div>
    <div class="col-sm-3">
      <h3>5
Today Admission
</h3>
      
    </div>
    <div class="col-sm-3">
      <h3>1500
This Month 
Admission
</h3>
      
      
    </div>
  </div>
</section>
</center>


<style type="text/css">
      div .collection .col-sm-3 h3{
  width: 250px;
  height: 100px;

padding: 30px;
color: #fff;
background-color: #59cebd;
font-size: 18px;

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div .collection .col-sm-3 h3:hover{
  background-color: #fff;
  color: #000;
  transition: all 0.5s ease;
  
  }
    </style>
  </div>

    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>
