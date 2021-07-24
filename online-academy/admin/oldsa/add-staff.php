
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
        <span class="breadcrumb-item active">Add Staffs</span>
      </nav>

      
<!------ Include the above in your HEAD tag ---------->



<center><section id="staff" style="margin-top: 100px; margin-bottom: 100px;">
  <center><h2 style="margin-bottom: 50px;">Add Staff:</h2></center>
  <div class="container" style="width: 70%;">
    <div class="row">
      <div class="col-sm">
        <form>
          <label for="name" style="float: left;">Name:</label><br>
          <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>
          <label for="phone" style="float: left;">Phone Number:</label><br>
          <input type="tel" id="number" name="number" placeholder="Enter your number"><br><br>
          <label for="sex" style="float: left;">Sex:</label><br>
          <select name="sex" id="sex">
            <option value="male" style="float: left;">Male</option>
            <option value="female" style="float: left;">Female</option>
            
          </select>
          <br><br>
          <label for="date" style="float: left;">Joining Date:</label><br>
          <input type="date" id="date" name="date" ><br><br>
          <label for="desiganation" style="float: left;">Desiganation:</label><br>
          <select name="desiganation" id="desiganation">
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="swe">SWE</option>
            <option value="bba">BBA</option>
            
          </select>
          <br><br>
          <label for="password" style="float: left;">Password:</label><br>
          <input type="password" id="password" name="password"><br><br>
        </form>
      </div>
      <div class="col-sm">
        <form>
          <label for="email" style="float: left;">Email(User-id):</label><br>
          <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
          <label for="source" style="float: left;">Source:</label><br>
          <input type="text" id="source" name="source"><br><br>
          <label for="department" style="float: left;">Department:</label><br>
          <select name="department" id="department">
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="swe">SWE</option>
            <option value="bba">BBA</option>
            
          </select>
          <br><br>
          <label for="facebook" style="float: left;">Facebook:</label><br>
          <input type="text" id="facebook" name="facebook"><br><br>
          <label for="address" style="float: left;">Address:</label><br>
          <input type="text" id="address" name="address"><br><br>
          <label for="ad-form" style="float: left;">Show on Admission Form:</label><br>
          <select name="ad-form" id="ad-form">
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="swe">SWE</option>
            <option value="bba">BBA</option>
            
          </select>
          <br><br>
        </form>
      </div>
      
    </div>
  </div>
  <form >
    
    <label style="margin-left: 200px; font-size: 18px; margin-top: 30px;" for="note" >Notes for Stuffs:</label><br>
    <center><textarea type="textbox" id="note" name="note" style="width: 65%;" cols="8" rows="5"></textarea> <br><br></center>
    <input style="margin-left: 200px;" type="file" id="myFile" name="filename"><br><br>
    <center><input class="submit" type="submit"></center>
  </form>
</section></center>


<style type="text/css">
    	div #staff .col-sm form{
  
width: 100%;
padding: 5px;
color: #000;


  
  text-align: center;
}
    	div #staff .col-sm form input,select{
  
width: 100%;
height: 40px;
  /*text-align: center;*/

}


</style>






    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>
