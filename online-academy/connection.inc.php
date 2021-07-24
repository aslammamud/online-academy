<?php
session_start();
$servername = "localhost";
$username = "abcacademy_usr";
$password = "=*QD@v8!+,Ln";
$dbname = "abcacademy_abcdb";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$con->set_charset('utf8');
date_default_timezone_set('Asia/Dhaka');
$np2con = $con;
$ctime = date("Y-m-d H:i:s");

$day = date('d');
$year = date('Y');
$month =  date('m');
$site_link = 'http://localhost/abcacademy';
$site_link = 'https://www.abcacademy.net';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							
if(isset($_SESSION['abc_lgn']) AND $_SESSION['abc_lgn'] == true){
		$abc_user_id =  $_SESSION['abc_usr_id'];
		
		$sql = "SELECT * FROM user WHERE user_id = '$abc_user_id'";

		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count>0){
			$abc_user_name = $data['user_name'];
			$abc_user_email = $data['user_email'];
			$abc_user_phone = $data['user_phone'];
			$abc_user_pass = $data['user_pass'];
			$abc_user_city = $data['user_city'];
			$abc_user_region = $data['user_region'];
			$abc_user_location = $data['user_location'];
			$abc_user_level = $data['user_level'];
			$abc_user_type = $data['user_type'];
		}
	}
	
	
/// sa 
	 if(isset($_SESSION['abca_sa_signed_in']) AND $_SESSION['abca_sa_signed_in'] == true)
	{		
	$queryv = mysqli_query($con,"SELECT * FROM staff  inner join 
	desiganation 
	on  
	staff.stf_desiganation = desiganation.d_id where stf_id = '{$_SESSION['abca_sa_user_id']}'");	
	while ($rowc = mysqli_fetch_array($queryv)) { 
	$di_stf_id = $rowc['stf_id'];
	$di_stf_name = $rowc['stf_name'];
	$di_stf_phone = $rowc['stf_phone'];
	$di_stf_address = $rowc['stf_address'];
	$di_stf_email = $rowc['stf_email'];
	$di_stf_photo = $rowc['stf_photo'];
	$di_stf_dis = $rowc['stf_discription'];
	$di_stf_joining_date = $rowc['stf_joining_date'];
	$di_stf_desiganation = $rowc['stf_desiganation'];
	$di_stf_desiganation_name = $rowc['d_name'];
	
	if($di_stf_photo !=''){$de_user_profile = ''.$site_link.'/upload/staff/'.$di_stf_photo.'';}
	}				
	}



function gen_notifi($msg,$type = 'alert-info'){
$ikey = rand(0,999);
return ' <div class="alert '.$type.'" role="alert">
'.$msg.'
</div>';
$r = '<li id="'.$ikey.'bb" class="dash-ntf"><a href="javascript:void(0)">'.$msg.'</a>
<span onclick="document.getElementById(\''.$ikey.'bb\').style.display=\'none\'" class="dash-close" title="Close Chat">×</span>
</li>';	
}	

function reloader2($link = '' ,$timer= 1000){ 
global $actual_link;
if($link == ''){$link = $actual_link;}
return '<script>setTimeout(function(){window.location = "'.$link.'"},'.$timer.');</script>';
}

	  function ntf($notes,$type){
			  if($type == 0){
			return '<center style="max-width: 300px;    color: #FF5722;    border: 1px solid;    margin: 0 auto;    border-radius: 6px;    background: #ff572238;    padding: 2px;"><span>'.$notes.'</span></center>';	
			  }
			  else{
			return '<center style="max-width: 300px;    color: green;    border: 1px solid;    margin: 0 auto;    border-radius: 6px;    background: #1492144d;  padding: 2px;"><span>'.$notes.'</span></center>';	
			  }
		  }

	function student_count_author($reference,$command,$sday= '0',$smonth = '0',$syear = '2020'){
	global $con,$day,$month,$year;
if($reference == 'Abc-Acadamy'){$ref = "where st_id > 0";}else {$ref = "where st_reference_name = '".$reference."'";}
	
	if($command == 'Month'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_month = '".$smonth."'  AND st_join_year = '".$syear."' AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'search_month_admission'){
	//$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_month = '".$smonth."'  AND st_join_year = '".$syear."' AND st_payment_status = '1'");	
	//$cnt = mysqli_num_rows($query);
	//return sprintf('%02d', $cnt);	
	}
	if($command == 'search_day_admission'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_day = '".$sday."'  AND st_join_month = '".$smonth."'  AND st_join_year = '".$syear."' AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'search_day_form'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_day = '".$sday."'  AND st_join_month = '".$smonth."'  AND st_join_year = '".$syear."' AND st_payment_status != '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	
	
	if($command == 'all'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'today_admission'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref} AND st_join_day = '".$day."'  AND st_join_month = '".$month."' AND st_join_year = '".$year."' AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'today_form'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref} AND st_join_day = '".$day."'  AND st_join_month = '".$month."' AND st_join_year = '".$year."'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'form_this_month'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_month = '".$month."' AND st_join_year = '".$year."'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'admission_this_month'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_month = '".$month."' AND st_join_year = '".$year."' AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'previous_month'){
	$prevyear = $year;
	if($month == 1){
	$prevmonth = 12;
	$prevyear = $year-1;
	}else {
	$prevmonth = $month-1;	
	}
	$prevyear = sprintf('%02d', $prevyear);
	$prevmonth = sprintf('%02d', $prevmonth);	
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_join_month = '".$prevmonth."' AND st_join_year = '".$prevyear."' AND st_payment_status = '1'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	if($command == 'pending_admission'){
	$query = mysqli_query($con,"SELECT * FROM online_students {$ref}  AND st_payment_status = '0'");	
	$cnt = mysqli_num_rows($query);
	return sprintf('%02d', $cnt);	
	}
	}
	
function get_counselor_amount_collection($reference,$command,$gday = 0,$gmonth = 0,$gyear = 0){
		global $con,$day,$month,$year;
	$amount = 0;
//where st_reference_name = '".$reference."'
	$user_sttment = " AND pl_author = '".$reference."'";
	if($command == 'this_month_Collection'){
	$query = mysqli_query($con,"SELECT pl_amount FROM pay_log where pl_id > '0' $user_sttment  AND pl_month = '".$month."' AND pl_year = '".$year."'");	
	while ($row = mysqli_fetch_array($query)) { 
	$amount = $amount+$row['pl_amount'];
	}
	return sprintf('%02d', $amount);
	}
	
	if($command == 'Collection_by_day'){
	$query = mysqli_query($con,"SELECT pl_amount FROM pay_log where pl_id > '0' $user_sttment  AND pl_day = '".$gday."'  AND pl_month = '".$gmonth."' AND pl_year = '".$gyear."'");	
	while ($row = mysqli_fetch_array($query)) { 
	$amount = $amount+$row['pl_amount'];
	}
	return sprintf('%02d', $amount);
	}
	
	if($command == 'prev_month_Collection'){
	if($month < 2){
	$monthprv = 12;	
	}else {
	$monthprv = $month-1;		
	}
	$monthprv =  sprintf('%02d',$monthprv);
	$query = mysqli_query($con,"SELECT pl_amount FROM pay_log where pl_id > '0' $user_sttment AND pl_month = '".$monthprv."' AND pl_year = '".$year."'");	
	while ($row = mysqli_fetch_array($query)) { 
	$amount = $amount+$row['pl_amount'];
	}
	return sprintf('%02d', $amount);
	}	
}	

function pagination_all($countrow, $per_page = 6,$page = 1, $url = '?'){        
    	//$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	//$row = mysql_fetch_array(mysql_query($query));
    	$total = $countrow;
        $adjacents = "2"; 
			$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a  href='{$url}page=$counter' class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    }
				function batch_students_count($batch_number,$course_id,$cmd){
			global $np2con;
			if($cmd == 'paid'){
			$queryc = mysqli_query($np2con,"SELECT st_id FROM online_students where st_batch_number = '".$batch_number."' AND st_course_name = '".$course_id."' AND st_payment_status = '1'");	
			$cnt = mysqli_num_rows($queryc);	
			return sprintf('%02d', $cnt);
			}
			if($cmd == 'unpaid'){
			$querycc = mysqli_query($np2con,"SELECT st_id FROM online_students where st_batch_number = '".$batch_number."'  AND st_course_name = '".$course_id."' AND st_payment_status = '0'");	
			$cntc = mysqli_num_rows($querycc);	
			return sprintf('%02d', $cntc);
			}
		
		}
 function set_pay_log($student_id,$notes,$author,$amount,$type='online'){
			  global $np2con,$ctime,$day,$month,$year;
			  if($type == 'online'){
				$p_table = 'pay_log';  
			  }
			  if($type == 'offline'){
				$p_table = 'pay_log_offline';  
			  }
			  if($student_id !=''){
				 $sql = "INSERT INTO ".$p_table." (`pl_author`,`pl_student`,`pl_amount`, `pl_date`,`pl_day`,`pl_month`,`pl_year`, `pl_notes`)
						VALUES ('".$author."','".$student_id."','".$amount."','".$ctime."','".$day."','".$month."','".$year."','".$notes."')";
						if ($np2con->query($sql) === TRUE) {
						return true;	
						}  
			  }
			 
		  }		
		
$fnc_expense_type = array('Salary' => 'Salary','Transport' => 'Transport','Snacks' => 'Snacks','Purchase' => 'Purchase','Utlities' => 'Utlities'
			,'House-Rent' => 'House rent','Mobile-Cost' => 'Mobile cost','Boosting-Cost' => 'Boosting cost'
			,'Stationary-Cost' => 'Stationary Cost','Office-Expense' => 'Office Expense'
			,'Computer-Accessories' => 'Computer Accessories','Loan-Repayment' => 'Loan Repayment','dividend-shares' => 'Dividend shares','entertainment' => 'Entertainment'
			,'internet-cost' => 'Internet Cost','bonus' => 'Bonus','gift-money' => 'Gift Money','leadership-incentive' => 'Leadership Incentive');		


function is_admin(){
global $di_stf_id;
if($di_stf_id == 'Abc-Acadamy'){
return true;	
}else {
return false;	
}
}	

function stf_notifier($to,$msg,$type=0,$status=0,$priotity=0){
	global $np2con;
$ctime = ''.date("Y-m-d H:i:s").'';
if($to!='' AND $msg!=''){
$stmt = $np2con->prepare("INSERT INTO `notification` 
(nt_for_user,nt_type,nt_date,nt_msg,nt_status,nt_priority)
VALUES(?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$to,$type,$ctime,$msg,$status,$priotity);
if ($stmt->execute()) {
return true;
}else {return false;}	
}else {return false;}
}
//use--notifier('Mozahid','asasas',$type=0,$status=0,$priotity=0,$np2con);


function inst_notifier($to,$msg,$type=0,$status=0,$priotity=0){
	global $np2con;
$ctime = ''.date("Y-m-d H:i:s").'';
if($to!='' AND $msg!=''){
$stmt = $np2con->prepare("INSERT INTO `instructor_notification` 
(nt_for_user,nt_type,nt_date,nt_msg,nt_status,nt_priority)
VALUES(?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$to,$type,$ctime,$msg,$status,$priotity);
if ($stmt->execute()) {
return true;
}else {return false;}	
}else {return false;}
}
//use--inst_notifier('Mozahid','asasas',$type=0,$status=0,$priotity=0,$np2con);




function std_notifier($to,$msg,$type=0,$status=0,$priotity=0){
	global $np2con;
$ctime = ''.date("Y-m-d H:i:s").'';
if($to!='' AND $msg!=''){
$stmt = $np2con->prepare("INSERT INTO `student_notification` 
(nt_for_user,nt_type,nt_date,nt_msg,nt_status,nt_priority)
VALUES(?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$to,$type,$ctime,$msg,$status,$priotity);
if ($stmt->execute()) {
return true;
}else {return false;}	
}else {return false;}
}
//use--inst_notifier('Mozahid','asasas',$type=0,$status=0,$priotity=0,$np2con);



 function getYoutubeIdFromUrl($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}


?>