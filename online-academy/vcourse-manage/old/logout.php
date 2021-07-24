<?php
session_start();
if(isset($_SESSION['abca_sa_signed_in']) AND $_SESSION['abca_sa_signed_in'] == true)
{
	//unset all variables
	$_SESSION['abca_sa_signed_in'] = NULL;
	$_SESSION['abca_sa_user_id'] = NULL;
	//$_SESSION['user_email']= NULL;
	//$_SESSION['user_phone']= NULL;
	//$_SESSION['user_pass']= NULL;
	//$_SESSION['user_photo']= NULL;
	//$_SESSION['user_level']= NULL;
	//$_SESSION['user_join_date']= NULL;
	//setcookie ('vb-secret-cookie', '',time() + (86400 * 30), "/");
	session_destroy();
	//echo $logout_msg;
	//session_regenerate_id();
	//echo '<script>removeCookie();</script>';
	//echo reloader($site_link,2000);
	

}
else
{

	
}
header('location: login.php'); 

    
?>