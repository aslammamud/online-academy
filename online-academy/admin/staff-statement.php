<?php include('header.php');

include('admin-check.php');
require('super-admin-check.php');
$stf = $_GET['stf'];
if(isset($_POST['serch_month'])){
					$Selectet_month = $_POST['serch_month'];
				$serch_month_stmnt = "AND st_join_month = '".$_POST['serch_month']."' AND  st_join_year = '".date("Y")."'";	
				}else {
				$serch_month_stmnt = '';
				$Selectet_month = date('m');}
				
				
	if(isset($_POST['serch_year'])){
				$Selectet_year = $_POST['serch_year'];
				$serch_year_stmnt = "AND st_join_year = '".$_POST['serch_year']."'  ";	
				}else {
				$serch_year_stmnt = '';
				$Selectet_year = '2021';}	
				
				
    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 50;
    	$startpoint = ($page * $limit) - $limit;
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                 <div class="col-12">
                <div class="card" style="padding: 13px;">
				<div class="card-body">
				    <div data-example-id="hoverable-table" class="bs-example">
<h3>Admission Report (<?php echo $stf ?>) -  (<?php echo date("F", mktime(0, 0, 0, $Selectet_month, 10)) ?>) (<?php echo $Selectet_year;?>)
<form method ="post">
	<select name="serch_month" class="form-control">
	<option> <?php echo date('F')?> Admission</option>
	<?php
	for ($x = 1; $x <= 12; $x++) {
	echo '<option value="'.sprintf('%02d', $x).'"'; if(isset($_POST['serch_month'])){	if($_POST['serch_month'] == sprintf('%02d', $x)){echo 'selected';}}echo '>'.date("F", mktime(0, 0, 0, $x, 10)).'</option>';	
	}
	?>
	</select>
	<select name="serch_year" class="form-control">
	<option value="2020" <?php if(isset($_POST['serch_year'])){if($_POST['serch_year'] == 2020){echo 'selected';}}?>> 2020</option>
	<option value="2021" <?php if(isset($_POST['serch_year'])){if($_POST['serch_year'] == 2021){echo 'selected';}}else{echo'selected';}?>> 2021</option>
	<option value="2022" <?php if(isset($_POST['serch_year'])){if($_POST['serch_year'] == 2022){echo 'selected';}}?>> 2022</option>
	</select>
	<input type="submit" class="btn btn-success" value="Check"/>
	</form></h3>
                <table class="table table-hover">
                    <thead style="background:#434344;">
                        <tr>
                            <th>Day</th>
                           <!--<th>VIEW DETAILS</th>-->
							 <th>TOTAL AD</th>
                            <th><?php echo strtoupper(date("F", mktime(0, 0, 0, $Selectet_month, 10)))?> (ADM)</th>
                            <th><?php echo strtoupper(date("F", mktime(0, 0, 0, $Selectet_month, 10)))?>(FORM) </th>
                            <th>THIS DAY ADM</th>
							 <th>THIS DAY UNPAID</th>
							  <th>COLLECTION THIS DAY</th>
                        </tr>
                    </thead>

					
					
					<?php
					
				
					
					
							 /*  $queryv = mysqli_query($np2con,"SELECT * FROM staff where stf_type ='1'");	
							  $montawd = array();
							  while ($rowc = mysqli_fetch_array($queryv)) { 
							  
						  
					  
							  
							  if($rowc['stf_type'] != '0'){
							$mntly_admited = student_count_author($rowc['stf_id'],'admission_this_month');
							 $montawd[''.$rowc['stf_id'].''] = $mntly_admited;  
							  }} */
							  
							  
							  // arsort($montawd);
							  // $cnt =1;
							 
							  $stdn_this = 0; 
							  $total_collection_selected_month = 0; 
							  for ($x = 1; $x <= 31; $x++){
								  
								  
								
								 
								$sday = sprintf('%02d', $x);
								$search_day_admission = student_count_author($stf,'search_day_admission',$sday,$Selectet_month,$Selectet_year);
								$search_day_form = student_count_author($stf,'search_day_form',$sday,$Selectet_month,$Selectet_year);
								$Collection_by_day = get_counselor_amount_collection($stf,'Collection_by_day',$sday,$Selectet_month,$Selectet_year);
								$admission_this_month = student_count_author($stf,'Month',$sday,$Selectet_month,$Selectet_year);
								$form_this_month = student_count_author($stf,'form_this_month');
								
								if(sprintf('%02d', $x) == date('d')){
								$col_day = '    background: #9e9e9e;';	
								}else {$col_day = '';}		
								echo '
							  <tbody>

                        <tr style="'.$col_day.'">
                            
                            <td><span class="badge badge-secondary">'.sprintf('%02d', $x).'</span></td>
							<td><span class="badge badge-success btn-sm">'.student_count_author($stf,'all').'</span></td>
                            <td><span class="badge badge-success btn-sm">'.$admission_this_month.'</span></td>
                            <td><span class="badge badge-success btn-sm">'.$form_this_month.'</span></td>
							<td><span class="badge badge-success btn-sm">'.$search_day_admission.'</span></td>
                            <td><span class="badge badge-warning btn-sm">'.$search_day_form.'</span></td>
							<td><span class="badge badge-info btn-sm">TK.'.$Collection_by_day.'</span></td>
                          
                           
                         </tr>
                      
                    </tbody>
							  ';
								$total_collection_selected_month = $total_collection_selected_month+$Collection_by_day;
							  }
							  
				echo '
							  <tbody>

                        <tr style="background: #6fd742;">
                                                        <td></td>
							<td></td>
                            <td></td>
                            <td></td>
                             <td></td>
							<td><span class="badge badge-success btn-sm"></span></td>
							<td><span class="badge badge-success btn-sm">TOTAL TK.'.number_format($total_collection_selected_month,2).'</span></td>
                           </tr> </tbody>
							  ';  
							  
							  
							  ?>
					
					
					
                    
                </table>

            </div>
       
								
				 </div>
				 </div>
				 </div>
				 </div>
             </div>
        </div>

<?php include('footer.php') ?>