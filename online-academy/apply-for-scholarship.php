<?php include 'header.php'; ?>
<?php
$phn = '';
$error=''; 

if(isset($_POST['submit'])) {
	if(empty($_POST['givenuserphone'])){
		$error = '<b style="color:red;">Please enter phone no.<b>';
	}else if(preg_match("/^[0-9][0-9]*$/",$_POST['givenuserphone'])){
		$phn = htmlspecialchars($_POST['givenuserphone']);
		
		if(strlen($_POST['givenuserphone'])<11){
			$error = '<b style="color:red;">Mobile no should be 11 digits long.<b>';
		}else if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['givenuserphone'])){			
			$sql = "SELECT user_phone FROM user";
			$result = mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
			if($data['user_phone']== $phn){
				$error = '<b style="color:red;">Mobile no already used ! Try another number.<b>';
			}else{
				$_SESSION['givenphone'] = htmlspecialchars($_POST['givenuserphone']);				
				//header("Location: signup-verify-phone.php");
				echo  reloader('signup-verify-phone.php',0);
				exit();
				die();	
			 }
		}else if(strlen($_POST['givenuserphone'])>11){
			$error = '<b style="color:red;">Mobile no should be 11 digits.<b>';
		}


	}else{
		$error = '<b style="color:red;">Mobile no should be digits only<b>';
	}
}
?>
<style>
.frmsa {
max-width: 850px;
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 50px;
    /* background: rgb(255 255 255 / 30%); */
    border: 5px solid #fff;
    /* border-top: 5px solid #07b00b; */
    /* border-bottom: 5px solid #07b00b; */
    box-shadow: 0 0 9px #b5b7b4;
    background: linear-gradient( 45deg ,#6fd7422b,#73d84700);
    border-radius: 7px;
    width: 100%;
	
}
.apply_sc{
    width: 100%;
}
.apply_sc input,select {
margin: 10px;	
color: #797775;
width: 100%;
}
.apply_sc select {
margin: 10px;	
color: #757575;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;       /* Remove default arrow */
  
}
.applybtn {
	box-shadow: 4px 2px 19px #c3bfbf;
	color: #ffffff !important;
}
.applybtn:hover {
	box-shadow: 0px 0px 29px #c3bfbf;	
	background: #12dc36;
	background: linear-gradient(45deg,#1fc332,#1e7d33);
}



.success-animation { margin:60px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
 
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
</style>

<center>

<div class="h2 bred_cus myfont fs42"> স্কলারশিপ এর জন্য আবেদন করুন </div>
<div class="" >
	<div class="contacta" style="/*background:url('https://i.pinimg.com/originals/3d/08/e0/3d08e03cb40252526fee2036a67f07f1.gif') no-repeat center; background-size:850px 500px; border-radius: 25px;">
		<div class="bildet myfont frmsa">
			
			<?php if(isset($_GET['success'])){ ?>
			<h1>আপনি সফল ভাবে স্কলারশিপ ফর্ম  পূরণ করেছেন! </h1> 
			 
			<div class="success-animation">
			<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
			</div>
			<h1>আপনার স্টুডেন্ট আইডিঃ <?php echo  hex2bin($_GET['success'])?> </h1>
			<?php } else { ?>
			
			<form class="apply_sc" action="" method="POST">
			নিচের তথ্য দিয়ে ফরম পূরণ করুন।
			
			
			

			
			
			 <?php
				
				  if(isset($_POST['submitf'])){
			
					$student_name = $_POST['student_name'];
					$father_name = $_POST['father_name'];
					//$mother_name = $_POST['mother_name'];
					$mother_name = '';
					$mobile = $_POST['mobile'];
					//$Address = $_POST['Address'];
					$Address = 0;
					$Facebook = $_POST['Facebook'];
					$paymethod = $_POST['paymethod'];
					//$education = $_POST['education'];
					$education = 0;
					$course = $_POST['course'];
					$st_sex = $_POST['gender'];
					
					$time_shdl = $_POST['time_shdl'];
					$it_firm = $_POST['it_firm'];
					
					
					//$bath_number = $_POST['bath_number'];
					$bath_number = 0;
					//$certificat_recive_by = $_POST['certificat_recive_by'];
					$certificat_recive_by = 'Home';
					$Reffrance_name = $_POST['Reffrance_name'];
					//$db = $_POST['db_year'].'-'. sprintf("%02d", $_POST['db_month']).'-'.sprintf("%02d", $_POST['db_day']);
					//$registration_number = rand(111111111,999999999);
					$db = 0;
					$st_id = 0;
					$sqlus = "SELECT st_id FROM online_students Order by st_id DESC limit 1";
					$resultus = mysqli_query($con,$sqlus);
					while($row = mysqli_fetch_assoc($resultus)){
					$st_id = $row['st_id'];	
					}
					$registration_number = rand(0000000,9999999999);
					
					
					
					
					$query = 'SELECT COUNT(*) as `num` FROM online_students WHERE st_course_name = "'.$course.'" 
					AND st_phone = "'.$mobile.'" AND st_batch_number = "'.$bath_number.'"';
						$row = mysqli_fetch_array(mysqli_query($con,$query));
						$submitted = $row['num'];
					//if($submitted == $submitted ){
					if($submitted < 1){
					$sql = "INSERT INTO online_students (`st_name`, `st_father_name`, 
				  `st_mother_name`, `st_phone`, `st_join_date`,  `st_join_day`,  `st_join_month`,  `st_join_year`, 
				  `st_address`, `st_course_name`,`st_sex`,`st_db`, `st_batch_number`, `st_facebook`, `st_payment_method`, 
				  `st_education`, `st_certificate`, `st_registration_number`, `st_reference_name`,`st_time_shdl`,`st_it_firm`)
						VALUES ('".$student_name."','".$father_name."','".$mother_name."','".$mobile."','".$ctime."','".$day."','".$month."','".$year."','".$Address."','".$course."','".$st_sex."','".$db."','".$bath_number."','".$Facebook."','".$paymethod."','".$education."','".$certificat_recive_by."','".$registration_number."','".$Reffrance_name."','".$time_shdl."','".$it_firm."')";
						if ($con->query($sql) === TRUE) {
						///upadete reg
						$last_id = $con->insert_id;
						if(isset($last_id) AND $last_id > 0){
						$new_reg = $last_id + 9500;
						$sql = "UPDATE online_students SET st_registration_number = '{$new_reg}' WHERE st_id = {$last_id}";
						if (mysqli_query($con,$sql)){}
						$registration_number = $new_reg;		
						}	
							
							
							
						echo ntf('Form Successfully Submitted!!',1);	
					echo '<script>
					setTimeout(function(){window.location = "'.$site_link.'/apply-for-scholarship.php?success='.bin2hex($registration_number).'"},1000);
					</script>
					';
						}	
					}else {
					echo ntf('Form Already Submitted!!',1);		
					}
				  
				  }
				  
				  ?>  
			   
			 
			
				<br><input class="inptex" type="text" name="student_name" placeholder="আপনার নাম " value="" required> 
				<input class="inptex" type="text" name="father_name" placeholder="পিতার নাম " value="" required>
				<input class="inptex" type="text" name="mobile" placeholder="মোবাইল নং " value="" required>
				<br>
					
				<select name="time_shdl" class="inptex">
				    	<option hidden selected>কোন সময়ে ক্লাস করতে ইচ্ছুক ? </option>
					<option value="9TO11PM">রাত ৯ টা  থেকে ১১ টা </option>
					<option value="7TO9PM">সন্ধ্যা ৭টা  থেকে ৯ টা  </option>
					<option value="4TO6PM">বিকেল ৪টা  থেকে ৬ টা  </option>
				</select>
				
					<select name="course" class="inptex" required="">
					
					<option hidden value="" selected>কোর্স নির্বাচন করুন </option>
                          
					
							<?php
			$query = mysqli_query($con,"
			SELECT * FROM online_courses ");
			$cntnum = mysqli_num_rows($query );
			while ($row = mysqli_fetch_array($query)) {
			if($row['oc_status'] == 0){$status = 'disabled';$boostatus = ' (Booked)';}else{$status = '';$boostatus = '';}	
			if($row['oc_visibility'] == 1){
			echo '<option value="'.$row['oc_id'].'" '.$status.'>'.$row['oc_name_short'].''.$boostatus.'</option>';}
			}
					  ?>
							</select>
				<br>
						<select class="inptex" name="it_firm" required="">
				    	<option hidden selected>কিভাবে স্কলারশিপের ক্লাসটি করতে চাচ্ছেন ?   </option>
					<option value="abc">- এবিসি একাডেমির মাধ্যমে</option>
					<option value="others">- সহযোগী প্রতিষ্টানের মাধ্যমে</option>
					
					
				     </select>
				
					 <select name="paymethod" class="inptex" required="">
                           <option hidden value="" selected="">কিভাবে কোর্স ফি দিতে চান ? </option>
                            <option value="bkash">বিকাশ </option>
                            <option value="rocket">রকেট </option>	
                            <option value="nexus">নেক্সাস পে  </option>	
                            <option value="nagad">নগদ  </option>	
                            <option value="dbbl">ডাচ বাংলা ব্যাংক   </option>		
                          </select>
						  <br>
						  <select name="Reffrance_name" class="inptex" required="">
                            <option hidden value="" selected="">যার রেফারেন্সে ভর্তি হচ্ছেন</option>	
							
							<?php
			$queryv = mysqli_query($con,"
			SELECT * FROM staff ");
			//$cntnum = mysqli_num_rows($queryv);
			while ($rowv = mysqli_fetch_array($queryv)) {
			if($rowv['stf_type'] == 1){
			echo '<option value="'.$rowv['stf_id'].'">'.$rowv['stf_name'].'</option>';
			}
			}
					  ?>				
						  
						  </select>
						   
							<select name="gender" class="inptex" required="">
                            <option hidden value="" selected="">জেন্ডার </option>	
							
							<option value="1">Male</option>
							<option value="2">Female</option>					
						  
						  </select>
							<br>
				<input class="inptex" type="text" name="Facebook" placeholder="আপনার ফেইসবুক নাম ?" value="" required>
				
					<input  class="" type="checkbox" name="givenuserphone" style="width: max-content;" value="" required> <span style="font-size:28px;">ভর্তি হওয়ার পরে কোর্স ফি ফেরতযোগ্য নই । </span>
				
				<center><input class="apply mt-3 applybtn"  name="submitf" type="submit" value="এপ্লাই করুন"></center>
			</form>
		
				  <?php } ?>
		</div>
	</div>
</div>
</center>

<?php include 'footer.php'; ?>