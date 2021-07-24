<?php 
require '../connection.inc.php';
function reloader($link = '' ,$timer= 1000){ 
global $actual_link;
if($link == ''){$link = $actual_link;}
return '<script>setTimeout(function(){window.location = "'.$link.'"},'.$timer.');</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin Panel - AbcAcademy</title>

    <!-- vendor css -->
    <link href="lib-admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib-admin/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib-admin/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib-admin/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib-admin/morris.js/morris.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <link rel="stylesheet" href="css/custom-admin.css">
  </head>

  <body>
  
<?php
 if(isset($_SESSION['abca_sa_signed_in']) AND $_SESSION['abca_sa_signed_in'] == true)
{}else {
echo reloader(''.$site_link.'/admin/login.php',100);	
die();
}
include 'nav.php';
?>