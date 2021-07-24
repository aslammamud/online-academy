<?php include'header.php'; ?>

<section id="result">

	<div class="results">
		<img src="../images/graphic design.jpg" style="width: 100%; height: 700px;  filter: blur(8px);
  -webkit-filter: blur(8px);">
  <div class="form">
  	<center><h2 style="margin-bottom: 50px; color: #000;">আপনার রেসাল্ট দেখুন</h2></center>
  	<input type="text" name="registration" placeholder="Registration Number"><br><br>
  	<select name="cars" id="cars" style="padding-left: 125px;">
  <option  value="volvo">Online</option>
  <option value="saab">Offline</option>
 
</select><br><br>
<input class="find" type="submit" name="submit" value="Find">
  </div>
		
	</div>
</section>


<style type="text/css">
	#result .form {
   /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
#result .form input,select{
	width: 300px;
	text-align: center;
	height: 50px;
	border-style: none;
	border-radius: 10px;

}

#result .form .find{
	height: 40px;
	width: 300px;
	border-radius: 5px;
	background-color: #59cebd;
}

</style>


<?php
  require_once 'footer.php';
?>