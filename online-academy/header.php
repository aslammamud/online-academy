<?php
require 'connection.inc.php';
require 'functions.inc.php';
?>

<?php
$page = "";
$dir = getcwd();
$page_dir = basename($_SERVER['PHP_SELF']);
if($dir == '/home/abcacademy/public_html'){
    $page = "home";
}else if($dir == '/home/abcacademy/public_html/instructor'){
    
    if($page_dir=='cart.php' || $page_dir=='checkout-payment.php' || $page_dir=='checkout-invoice.php'){
         $page = "home";
    }else{
        $page = "instructor";
    }

}


if(!isset($_SESSION['CurrentCartSession']) || empty($_SESSION['CurrentCartSession'])){
	   $_SESSION['CurrentCartSession'] = generateRandomString();
  }	
?>

<!doctype html>
<html lang="en">
   <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="AM" />
        <base href="<?php echo $site_link?>" target="_self">
        <!-- Document Title -->
        <title><?php if(isset($dynamic_title)){echo $dynamic_title;}else{echo 'ABC Academy - নিজে শিখবো, অন্যকে শিখাবো ';} ?></title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom-style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $site_link?>/student/css/custom-style.css"> 
        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        
        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>
        
        <!--  Notifications Plugin    -->
        <script src="assets/js/bootstrap-notify.js"></script>
        
        <link rel="stylesheet" href="assets/css/as-alert-message.min.css" />
        <script src="assets/js/as-alert-message.min.js"></script>        
        
        <!-- Sweet alert js -->
        <script src="assets/js/sweetalert.min.js"></script>
 
      <style>
            *:focus {
                outline: none;
            }
      
            a:link {
              text-decoration: none !important;
            }
            
            a:hover {
              color: black !important;
            }
      
            .img-brand{
                max-width:160px;
                max-height: 120px;
            }
            
/*            .sidepanel a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
              margin-top: -30px;
            }
            
            .sidepanel a:hover {
              color: #f1f1f1;
            }
            
            .sidepanel .closebtn {
              position: absolute;
              margin-top: -35px;
              right: 25px;
              font-size: 36px;
            }
            
            .openbtn {
              font-size: 20px;
              cursor: pointer;
              background-color: #fff;
              color: #000;
              padding: 10px 15px;
              border: none;
              float: right;
            }
            
            .openbtn,.sidepanel{
            	display: none;
            }

                
            header .search-cate {
                height: 50px;
                position: relative;
                border: 1px solid #ddd;
                border-radius: 0px;
                padding-left: 20px;
                background: #fff;
            }              
            
            header .search-cate input {
              background-color: white;
              border: none;
              padding: 5px;
              text-decoration: none;
              cursor: pointer;
              width: 100%;
              height: 50px;
            }            
            

            @media all and (min-width: 1199px) {
                header .search-cate {
                    width: 550px;
                }
            }           
            
            
            @media all and (max-width: 991.98px) {
                                
            header .search-cate {

                display:none;
            }
                
            }

            @media all and (max-width: 767.98px) {
                                
            header .search-cate {
                display: none;
            }
            }
            
            @media all and (max-width: 575.98px){
            .main-nav{
                display: none;
            }   
                
            header .search-cate {
                display: none;
            }
                                
            .header-navbar-rht{
            	display: none;
            }
            
            .openbtn,.sidepanel{
            	display: block;
            }
            
            .header{
                margin-bottom: 60px;
            }
            
            .sidepanel .closebtn {
              position: absolute;
              top: 2;
              right: 25px;
              font-size: 36px;
            }
            
            .navbar-brand .logo{
                margin-left: 0px !important;
            }
            
            .navbar-brand.logo img{
                text-align: left !important;
            }
            
            .sidepanel  {
              width: 0;
              position: fixed;
              z-index: 1;
              height: 200px;
              top: 0;
              right: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
            }
            .main-nav .has-submenu a{
            	font-size: 20px;
            }
            .main-nav .live {
            	padding-left: 50px;
            	padding-top: 5px;
            }
            .main-nav .has-submenu a{
            	margin-left: 40px;
                font-size: 23px;
            }
            .main-nav .live .fa-circle{
            	margin-right: 20px;
            	margin-top: -1px;
            }
            .main-nav .live a {
            	line-height: 15px;
            	margin-right: 150px;
            }
            }
            @media only screen and (max-width: 479px) {
            
            .header-navbar-rht{
            	display: none;
            }        
            
            .main-nav{
                display: none;
            }
            header .search-cate {
                width: 100px;
            }
            }*/
            
            
            .alert {
                border: 0;
                border-radius: 0;
                color: #FFFFFF;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .container .alert {
                border-radius: 4px;
            }
            
            .navbar .alert {
                border-radius: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 85px;
                width: 100%;
                z-index: 3;
            }
            
            .navbar:not(.navbar-transparent) .alert {
                top: 70px;
            }
            
            .alert span[data-notify="icon"] {
                font-size: 30px;
                display: block;
                left: 15px;
                position: absolute;
                top: 50%;
                margin-top: -15px;
            }
            
            .alert button.close {
                position: absolute;
                right: 10px;
                top: 50%;
                margin-top: -13px;
                z-index: 1033;
                background-color: #FFFFFF;
                display: block;
                border-radius: 50%;
                opacity: .4;
                line-height: 11px;
                width: 25px;
                height: 25px;
                outline: 0 !important;
                text-align: center;
                padding: 3px;
                padding-top: 1px;
                font-weight: 300;
            }
            
            .alert button.close:hover {
                opacity: .55;
            }
            
            .alert .close ~ span {
                display: block;
                max-width: 89%;
            }
            
            .alert[data-notify="container"] {
                padding: 10px 10px 10px 20px;
                border-radius: 4px;
            }
            
            .alert.alert-with-icon {
                padding-left: 65px;
            }
            
            .alert-info {
                background-color: #63d8f1;
            }
            
            .alert-success {
                background-color: #a1e82c;
            }
            
            .alert-warning {
                background-color: #ffbc67;
            }
            
            .alert-danger {
                background-color: #fc727a;
            }

            
          </style>
          

</head>

<body >
   
      
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="navbar-toggler-icon"></span> </button> <a class="navbar-brand" href="/"><img src="images/ecourse-logo.png" class="img-brand" alt="Logo"></a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav main-nav">
<!--                        <li class="nav-item active"> <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">ABOUT</a> </li>-->
                        
                        
                        <li class="nav-item has-submenu myfont">
                            <a href="javascript:void(0)"><i class="fa fa-list" aria-hidden="true"></i> কোর্সসমূহ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="submenu">
                             <li class="myfont"><a href="courses.php">কোর্সসমূহ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item live myfont"><a href="online-live-course-bangladesh.php"><i class="fa fa-circle" style="font-size:14px;color:#ff0000;" aria-hidden="true"></i>  লাইভ কোর্স&nbsp</a></li>
                        
                        
                        
                    </ul>
                    
                    
                    <style>
                        form.form-inline.search-header {
                            border: .5px solid #d8cccc;
                            margin-left: 15px;
                        }
                        button.submit-searach.btn.btn-primary.my-2.my-sm-0 {
                                height: 46px;
                                width: 50px;
                                background: #eee;
                                color: #555;
                                border: none;
                        }
                        input.search-header-bar.form-control.myfont.fs26{
                             opacity: 0.5; font-weight:100; border-radius: 4px;
                             height: 48px;
                        }
                        
                        input.search-header-bar.form-control.myfont.fs26:focus{
                            outline: none !important;
                        }
                        
                        input.search-header-bar.form-control.myfont.fs26::placeholder {
                          font-size: 26px !important;
                        }
                        
                        a.nav-link.header-register.myfont .custom :hover{
                                background: #17a2b8 !important;
                           }
                           a.nav-link .header-login .myfont .custom2{
                               background: #17a2b8 !important;
                        }
                         
                        span.cart-total {
                            background: #3cbf3e;
                            padding: 0 6px;
                            border: 0px;
                            position: relative;
                            font-size: 18px;
                            top: -22px;
                            left: 9px;
                            border-radius: 50%;
                            color: #fff;
                        }
                        a.cart.head-cart {
                            margin: 20px;
                            font-size: 30px;
                        }
                    </style>
                    <form class="form-inline search-header"> <input class="search-header-bar form-control myfont fs26" type="search" placeholder="এখানে যেকোনো কোর্স খুঁজুন " /> <button class="submit-searach btn btn-primary my-2 my-sm-0" type="submit"> <i class="fa fa-search" style="color:#07b00b; font-size: 22px;" aria-hidden="true"></i></button> </form>
<!--                    <div class="search-cate nav navbar-right header-navbar-rht" style="padding-left:0px;">
                        <select class="selector">
                         <option> All Categories</option>
                         <option>Graphics Design</option>
                         <option>Web Design</option>
            			 <option>Web Development</option>
                         <option>Data Entry</option>
                         <option>Office Fundamental</option>
                        </select>
                       <input class="myfont fs26" style="opacity: 0.5; font-weight:100; border-radius: 4px;" type="search" placeholder="এখানে যেকোনো কোর্স খুঁজুন ">
                       <button class="submit" type="submit"><i class="fa fa-search" style="color:#07b00b; font-size: 22px;" aria-hidden="true"></i></button>
        	       </div>-->
                    <ul class="navbar-nav ml-md-auto header-navbar-rht">
<!--                        <li class="nav-item active"> <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">My Account</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Settings</a> <a class="dropdown-item" href="#">social connect</a> <a class="dropdown-item" href="#">Privacy</a>
                                <div class="dropdown-divider"> </div> <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>-->
                                <?php
                
                                    if((isset($_SESSION['abc_lgn']) && $_SESSION['abc_lgn'] == true) || (isset($_SESSION['abc_ins_lgn']) && $_SESSION['abc_ins_lgn'] == true)){
                                        echo '<li class="nav-item"><a href="cart.php" class="cart head-cart"><span class="cart-total">0</span><i class="fa fa-shopping-cart"></i></a></li>';
                                    }else{
                                        echo '<li class="nav-item"><a href="login.php" class="cart head-cart"><span class="cart-total">0</span><i class="fa fa-shopping-cart"></i></a></li>';                    
                                    }
                                    
                                    ?>
                                
                               <?php
                                 
                                 if($page == "instructor"){
                                     
                                    if(isset($_SESSION['abc_ins_lgn']) && $_SESSION['abc_ins_lgn'] == true){
                                        
                    	            echo '<li class="nav-item"><a class="nav-link header-login myfont mr-1" href="instructor/">ইন্সট্রাক্টর ড্যাশবোর্ড</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link header-login myfont" href=instructor/logout.php>ইন্সট্রাক্টর লগ-আউট</a></li>';
                    	            
                        	        }else{
                                          echo '<li class="nav-item"><a class="nav-link header-login myfont" href=instructor/login.php>ইন্সট্রাক্টর লগিন</a></li>
                                          <li class="nav-item"><a class="nav-link header-register myfont" href="instructor/signup.php">ইন্সট্রাক্টর রেজিস্ট্রেশন </a></li>';	            
                        	        }
                                     
                                 }else{
                                    if(isset($_SESSION['abc_lgn']) && $_SESSION['abc_lgn'] == true){
                                        ?>
                                        
                                    <li class="nav-item"><a class="nav-link header-login myfont mr-1" href="student/">ড্যাশবোর্ড</a></li>
                                    <li class="nav-item"><a class="nav-link header-login myfont" href=logout.php>লগআউট</a></li>
                                    <?php
                                    }else{
                                    echo '<li class="nav-item"><a class="nav-link header-login myfont" href=login.php>লগিন</a></li>
                                    <li class="nav-item"><a class="nav-link header-register myfont" href="signup.php">রেজিস্ট্রেশন </a></li>';	            
                                    }
                                 }
                                 
                             ?>
                    
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>