   <div class="row">
					   
					   
					   
					   
				
   <?php
							  $queryv = mysqli_query($np2con,"SELECT * FROM staff");	
							  $montawd = array();
							  while ($rowc = mysqli_fetch_array($queryv)) { 
							  if($rowc['stf_id'] != 'Admin'){
								$mntly_admited = student_count_author($rowc['stf_id'],'admission_this_month');
							  $montawd[''.$rowc['stf_id'].''] = $mntly_admited;  
							  }}
							  arsort($montawd);
							  $cnt =1;
							  foreach ($montawd as $key => $value){
								if($key != 'Abc-Acadamy') {
								if($cnt < 5) {
			$xuser_profile = 'images/avatar.png';							
	$queryvx = mysqli_query($np2con,"SELECT * FROM staff  inner join desiganation on  staff.stf_desiganation = desiganation.d_id where stf_id = '{$key}'");	
	while ($rowcv = mysqli_fetch_array($queryvx)) { 
	$xstf_name = $rowcv['stf_name'];
	$xstf_photo = $rowcv['stf_photo'];
	}
	if($xstf_photo !=''){$xuser_profile = ''.$site_link.'/upload/staff/'.$xstf_photo.'';}													

	if($cnt == 1){$topcrobg ='1';}else{$topcrobg ='';}
echo '
<div class="col-md-3">
                        <div class="card card-user">
                            <div class="image" style="height: 140px;">
                                <img src="images/winbg'.$topcrobg.'.png" alt="...">
                            </div>
                            <div class="content" style="min-height: auto;">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="'.$xuser_profile.'" alt="...">

                                      <h4 class="title" style="min-height: 73px;">'.$xstf_name.'<br>
                                         <small>'.student_count_author($key,'admission_this_month').'</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
								Today Admission:  <span class="badge badge-secondary">'.student_count_author($key,'today_admission').'</span> <br>
                                Form This Month : <span class="badge badge-secondary">'.student_count_author($key,'form_this_month').'</span><br>
                                                    
                                </p>
						
                            </div>
                            <hr>
                            <div class="text-center">
                               <span style="font-size:24px; font-weight:700;">Rank - '.$cnt.'</span>

                            </div>
                        </div>
                    </div>
';
								
								} 
								$cnt++; 
								} 
							  }
							  
							  ?>	   
					   
					   
					   
					   
					   
					   
					   
					   

					   
               
			   </div>
       
				 