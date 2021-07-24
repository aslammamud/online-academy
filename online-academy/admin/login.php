<?php 
require '../connection.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
   <title>AbcAcademy Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	 

  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
        <form method="POST">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
       <br>
       <br>
       <br>
                <div class="tx-center mg-b-60">Admin Dashboard</div>
				
				
			<?php

		
			
				if(isset($_SESSION['abca_sa_signed_in']) AND $_SESSION['abca_sa_signed_in'] == true)
				{
			
					echo '<h4><a href="'.$site_link.'/admin"><center>Go to Dashboard?</center></a></h4>';	
					 if($di_stf_desiganation == 4){
						//include('part-award.php');    
					echo reloader2(''.$site_link.'/admin',500);
					 }
					 else{
					echo reloader2(''.$site_link.'/admin',500);	 
					 }
					  	


 
				}
				
				if(isset($_SESSION['abca_sa_signed_in_offline']) AND $_SESSION['abca_sa_signed_in_offline'] == true)
				{
			
					echo '<h4><a href="'.$site_link.'/admin"><center>Go to Dashboard?</center></a></h4>';	
					 if($di_stf_desiganation == 4){
						//include('part-award.php');    
					echo reloader2(''.$site_link.'/admin',5000);
					 }
					 else{
					echo reloader2(''.$site_link.'/admin-offline',500);	 
					 }
					  	


 
				}
				
			 if(isset($_POST['submit'])){
				
					$form_name =$_POST['form_name'];
					if(!preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$form_name))
					{
					echo gen_notifi('Not Valid Email!','alert-danger');	
					die();
					}
				$form_pass = preg_replace('/\s/', '', $_POST['form_pass']);
				$type = 0;
				
				
			if(isset($_POST['form_name']) AND isset($_POST['form_pass']) AND $_POST['form_name'] != ''  AND $_POST['form_pass'] != ''){

			
				$query = mysqli_query($con,"SELECT * FROM staff where stf_email = '".$form_name."'  AND (stf_pass = '".$form_pass."' OR stf_pass = '".sha1($form_pass)."')");	
				$cnt = mysqli_num_rows($query);
				while ($row = mysqli_fetch_array($query)) {
				$stf_id = $row['stf_id'];
				}
				if($cnt > 0){
				
			
				$_SESSION['abca_sa_signed_in'] = true;
				$_SESSION['abca_sa_user_id'] 	=  $stf_id;	
				//logtracer($stf_id);
				echo gen_notifi('Logged Successfull! ('.$stf_id.')','alert-success');
				echo reloader2(''.$site_link.'/admin',100);
					
				}else{
					echo gen_notifi('Something is wrong!','alert-danger');
				}
				
			}
				
			
			  }
			  
			  ?>
				
                <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail" name="form_name">
                </div><!-- form-group -->
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="form_pass">
                
               

                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
                <button type="submit" name="submit" class="btn btn-info btn-block">Sign In</button>

                <div class="mg-t-60 tx-center">Not yet a member? <a href="../index.php" class="tx-info">Sign Up</a></div>
            </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
