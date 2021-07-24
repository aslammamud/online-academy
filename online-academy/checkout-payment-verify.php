<?php
session_start();
include 'functions.inc.php';

$_SESSION['paid'] = true;
echo reloader('checkout-payment.php',0);
exit();
?>