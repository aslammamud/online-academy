<?php

include 'header.php';

  // if($_SESSION['login_status'] != "Yes"){
  //   header('location: login.php');
  // }

?>

<style type="text/css">
  body{
     background-color: rgba(228, 42, 0, 0.75);
  }
</style>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">AbcAcademy</a>
        <span class="breadcrumb-item active">Congratulations</span>
      </nav>


<center><section id="congrats" style="margin-top: 30px;">
	<div class="c-img">
		<img src="https://image.shutterstock.com/image-illustration/congrats-banner-speech-bubble-poster-260nw-1505205356.jpg">
	</div>

  <h3 style="margin-top: 30px; margin-bottom: 50px; width: 500px; color: #fff;">CONGRATULATIONS! , YOU GOT SCHOLARSHIP FOR THIS COURSE. YOUR REGISTRATION NUMBER IS : 
</h3>
</section></center>



<?php
  require_once 'footer.php';
?>