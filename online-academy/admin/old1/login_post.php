<?php

    require '../connection.inc.php';


    $phone_number = $_POST['phone'];
    $admin_password = $_POST['password'];

    $count_query = "SELECT COUNT(*) AS total_check FROM user WHERE user_phone = '$phone_number' AND user_pass = '$admin_password' AND user_type = 'admin'";
    
    $from_db = mysqli_query($con, $count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
    if($after_assoc['total_check'] == 1){
        $_SESSION['login_status'] = "Yes";

        $_SESSION['phone_number_from_login_page'] = $phone_number;

        header("location: index.php");
    }
    else{
        $_SESSION['email_password_error'] = "Your email or password is wrong!";
        header("location: login.php");
    }









?>