<?php include('header.php');

include('admin-check.php');
require('super-admin-check.php');

?>
        <div class="content">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                               
                            </div>
                            <h4 class="page-title">Switch</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                   <div class="col-12">
                        <div class="card">
                 <div class="card-body">
				

				<div class="col-sm-6"> 
				<form method="post">
                    <div class="form-group">
                      <label>Password <small>*</small></label>
                      <input name="Password" type="Password" placeholder="Enter Pass" 
					  required="" class="form-control" aria-required="true">
                    </div>
					
				<div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" name="subfrm" class="btn btn-success">
				  Switch</button>
                </div>	
				
                  </form>
                  
				 
 <?php

			if(isset($_POST['Password'])){
			$Password = sha1($_POST['Password']);	
			//4512
			if($Password == '38e2ffe5668ce2950089528c1ac1325595a293cf'){
			$id = $_GET['id'];
			 $query = mysqli_query($np2con,"SELECT * FROM staff where stf_id = '".$id."'");	
				$cnt = mysqli_num_rows($query);
				while ($row = mysqli_fetch_array($query)) {
				$stf_id = $row['stf_id'];
				}
				if($cnt > 0){
				$_SESSION['abca_sa_signed_in'] = NULL;
				$_SESSION['abca_sa_signed_in'] = true;
				$_SESSION['abca_sa_user_id'] 	=  NULL;	
				$_SESSION['abca_sa_user_id'] 	=  $stf_id;	
				echo ntf('Logged Successfull! ('.$stf_id.')',1);
				echo reloader(''.$site_link.'/admin',1000);
				}	
			}else {
			echo ntf('Password Wrong!',0);	
			}
			}
			 
			 ?>

               </div>
               </div>
               </div>
               </div>
             </div> <!-- end container -->
        </div>



									   
        </div>

<?php include('footer.php') ?>