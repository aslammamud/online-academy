<?php 
require '../connection.inc.php';
require '../functions.inc.php';
?>

<html>
<head>
	<meta charset="utf-8" />

	<link rel="icon" href="../images/icon.png" type="image/gif" sizes="16x16">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php if(isset($dynamic_title)){echo $dynamic_title;}else{echo 'Website Settings | ABC Academy';} ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	    
	<!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    
    <!-- Sweet alert js -->
    <script src="assets/js/sweetalert.min.js"></script>
    
    <style>
    
    /* curso type */
    .pointer {cursor: pointer;}
    
    </style>
    
    <link href="assets/css/custom-padding-margin.css" rel="stylesheet" />

</head>
<body>