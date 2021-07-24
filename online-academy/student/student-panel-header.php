<?php
  include ('../header.php');
?>
<style>
.bg-gradient{
    background: #1D976C;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
</style>
<section id="student-panel" class="bred_cus bg-gradient">
<div class="col-md-12 col-sm-12 col-lg-12 ">
    <div class="student-panel-header">
      <p class="text-white myfont fs50"><?php 
        
        if($nav_page=="dashborad"){
            echo 'ড্যাশবোর্ড';
        }else if($nav_page=="pending"){
            echo 'পেন্ডিং কোর্সসমূহ';
        }else if($nav_page=="favourite"){
            echo 'পছন্দকৃত কোর্সসমূহ';
        }else if($nav_page=="message"){
            echo 'মেসেজ';
        }else if($nav_page=="purchase"){
            echo 'পার্চেস হিস্টোরি';
        }else if($nav_page=="profile"){
            echo 'প্রোফাইল';
        }else if($nav_page=="notification"){
            echo 'নোটিফিকেশন সমূহ';
        }else{
            echo 'স্টুডেন্ট ড্যাশবোর্ড';
        }
      
      ?> </p>
      
    </div>
    <div class="student-panel-menu mt-4 myfont fs26">
      <div class="d-flex flex-row">
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="dashborad") ? 'text-info' : 'text-white';  ?>" href="student/"> ক্রয়কৃত কোর্স  </a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="pending") ? 'text-info' : 'text-white';  ?>" href="student/pending-course.php"> পেন্ডিং কোর্স  </a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="favourite") ? 'text-info' : 'text-white';  ?>" href="student/favourite.php"> পছন্দকৃত কোর্স </a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="message") ? 'text-info' : 'text-white';  ?>" href="student/message.php"> মেসেজ</a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="purchase") ? 'text-info' : 'text-white';  ?>" href="student/purchase-history.php"> পার্চেস হিস্টোরি </a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="profile") ? 'text-info' : 'text-white';  ?>" href="student/profile.php"> প্রোফাইল</a> </div>
        <div class="pl-2 pr-3 bd-highlight"> <a class="<?php echo ($nav_page=="notification") ? 'text-info' : 'text-white';  ?>" href="student/notification.php"> নোটিফিকেশন</a> </div>
      </div>
    </div>
  </div>
</section>


