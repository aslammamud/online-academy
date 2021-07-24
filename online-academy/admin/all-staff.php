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
                            <h4 class="page-title">ALL STAFF</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                   <div class="col-12">
                        <div class="card">
                 <div class="card-body">
<div data-example-id="hoverable-table" class="bs-example">

                <table class="table table-hover table-dark table-striped">
                    <thead class="thead-dark ">
                        <tr>
                            <th>NAME</th>
                           <!--<th>VIEW DETAILS</th>-->
							 <th>Phone</th>
                            <th>Email</th>
                            <th>Joining date</th>
                            <th>Desiganation</th>
							 <th>Address</th>
							 <th>Notes</th>
							 <th>Option</th>
                        </tr>
                    </thead>

					
					
					<?php
							  $queryv = mysqli_query($np2con,"SELECT * FROM staff 
							  inner join 
							  desiganation 
							  on  
							  staff.stf_desiganation = desiganation.d_id 
							  order by stf_user_id ASC");	
							  $montawd = array();
							  while ($rowc = mysqli_fetch_array($queryv)) { 
							  
						  
					  echo '
							  <tbody>

                        <tr>
                            
                            <td>'.$rowc['stf_name'].'</td>
                            <td>'.$rowc['stf_phone'].'</td>
                            <td>'.$rowc['stf_email'].'</td>
							<td>'.$rowc['stf_joining_date'].'</td>
                            <td>'.$rowc['d_name'].'</td>
                            <td>'.$rowc['stf_address'].'</td>
                            <td>'.$rowc['stf_notes'].'</td>
                           <td><a href="switch-account.php?id='.$rowc['stf_id'].'" class="btn btn-success btn-sm">Login</a></td>
                         
                         </tr>
                      
                    </tbody>
							  ';
							  
							  
							  }
							  
							  
							  
				//  <td><button type="button" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" data-toggle="modal" 
							//data-target=".bs-example-modal-lg-68358">View</button> <button type="button" class="btn btn-dark btn-transparent btn-theme-colored btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg-68358">EDIT</button></td>
                        			  
							  
							 
							  
							  
							  ?>
					
					
					
                    
                </table>
         
            </div>

               </div>
               </div>
               </div>
             </div> <!-- end container -->
        </div>
        </div>

<?php include('footer.php') ?>