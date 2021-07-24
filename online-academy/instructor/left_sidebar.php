<style>

.query-boxes {
    height: 150px;
    width: 170px;
}
    .col {
    padding-bottom: 3rem!important;
}


    ul li a ,a{
       color:#000 !important;
    }
    
    li.side-nav-item.active.pl-2.pt-3.pb-3 span {
    color: #fff;
    }
    
    li.side-nav-item.active.pl-2.pt-3.pb-3 {
        background: #7ddb55;
    }
    
    span.h6.pl-1 {
    font-size: 1.4rem !important;
    font-weight: 100;
    font-family: 'adornoirrit', sans-serif !important;
}
table{
    font-weight: 100 !important;
}

.container{
    font-weight: 100;
    font-family: 'adornoirrit', sans-serif;
    font-size: 1.4rem;
}

.badge {
    font-weight: 100 !important;
}

strong{
    font-weight: lighter !important;
}
    
    
i.ins-nav-icons {
    height: 30px;
    width: 35px;
    top: 3px;
    position: relative;
    /*border: 1px solid black;*/
    text-align: center;
}
.min-dash-btn{
    display: none;
}

@media screen and (max-width: 991px) {
    .metismenu{
        display: none;
    }
    
    .min-dash-btn{
        display: block;
    }
}

@media screen and (max-width: 768px) {
    
    ul.metismenu{
        text-align: -3px;
        margin: 20px -25px;
    }
}


@media screen and (max-width: 591px) {

    ul.metismenu{
        text-align: -3px;
        margin: 20px 35px;
    }

}

.min-dash-btn{
    position:relative;
    top: 0px;
    right: -20px;
}


</style>

<?php

    $ins_id = $_SESSION['abc_ins_id'];

    $query = "SELECT * FROM instructor WHERE ins_id = '$ins_id'";
    $res = mysqli_query($con,$query);
    //$cnt = mysqli_num_rows($res);
    $instructor = mysqli_fetch_assoc($res);
?>

<div class="col-md-3">

    <div class="card-header">
        <div class="col-12 col-sm-12 min-dash-btn leftbar-user text-right">
            <button id="navTogg" class="btn btn-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
        </div>
        <div class="left-side-menu left-side-menu-detached bg-light">
            <div class="leftbar-user text-center col-12 col-sm-12">
                                    <a>
                    <?php if($instructor['ins_photo']== ""){
                        echo '<img width="80px" src="../upload/instructor-profile/default_instructor.jpg" alt="user-image" class="rounded-circle shadow-sm mt-3">';
                    }else{
                        echo '<img width="80px" src="../upload/instructor-profile/'.$instructor['ins_photo'].'" alt="user-image" class="rounded-circle shadow-sm mt-3">';
                    }
                    ?>
                </a>
                <h5 class="leftbar-user-name text-center mt-2"><?=$instructor['ins_name']?></h5>
            </div>
         
             <ul class="metismenu side-nav side-nav-light">       
             <li class="side-nav-title side-nav-item text-secondary mb-2 h5"><hr></li>

<?php
    
    if($instructor['ins_verified'] == false) {
        

?>
            <li class="side-nav-item pl-2 pt-3 pb-1">
                <a href="instructor/" class="side-nav-link active">
                    <i class="fa fa-th tx-2x text-secondary ins-nav-icons"></i>
                    <span class="h6 pl-1 myfont"><strong>ড্যাশবোর্ড</strong></span>
                </a>
            </li>
            <li class="side-nav-item pl-2 pt-3 pb-1">
                <a href="instructor/notifications.php" class="side-nav-link active">
                    <i class="fa fa-bell-o tx-2x text-secondary ins-nav-icons"></i>
                    <span class="h6 pl-1"><strong>নোটিফিকেশন</strong></span>
                </a>
            </li>
            
            <li class="side-nav-item pl-2 pt-3 pb-1">
                <a href="instructor/profile.php" class="side-nav-link active">
                    <i class="fa fa-user tx-2x text-secondary ins-nav-icons"></i>
                    <span class="h6 pl-1"><strong>প্রোফাইল</strong></span>
                </a>
            </li>            
            <li class="side-nav-item pl-2 pt-3 pb-1">
                <a href="instructor/logout.php" class="side-nav-link active">
                    <i class="fa fa-power-off tx-2x text-secondary ins-nav-icons"></i>
                    <span class="h6 pl-1"><strong>লগ-আউট</strong></span>
                </a>
            </li>

<?php

    }else{
    
?>
                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/" class="side-nav-link active">
                        <i class="fa fa-th tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1 myfont"><strong>ড্যাশবোর্ড</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/course-manage.php" class="side-nav-link active">
                        <i class="fa fa-shopping-basket tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1 myfont"><strong>কোর্স ম্যানেজার</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/add-new-course.php" class="side-nav-link active">
                        <i class="fa fa-plus-square tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1 myfont"><strong>কোর্স তৈরি করুন</strong></span>
                    </a>
                </li>

<!--                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/add-new-category.php" class="side-nav-link active">
                        <i class="fa fa-plus-square tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>ক্যাটেগরি</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/add-new-sub-catg.php" class="side-nav-link active">
                        <i class="fa fa-plus-square tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>সাব-ক্যাটেগরি  </strong></span>
                    </a>
                </li>-->
                
<!--                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/sales_report.php" class="side-nav-link active">
                        <i class="fa fa-tachometerfa fa-calendar-minus-o tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>Sales report</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/payout_report.php" class="side-nav-link active">
                        <i class="fa fa-money tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>Payout report</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/payout_settings.php" class="side-nav-link active">
                        <i class="fa fa-cog tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>Payout settings</strong></span>
                    </a>
                </li>-->

<!--                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="#" class="side-nav-link active">
                        <i class="fa fa-envelope-o tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>Message</strong></span>
                    </a>
                </li>-->
            
                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/notifications.php" class="side-nav-link active">
                        <i class="fa fa-bell-o tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>নোটিফিকেশন</strong></span>
                    </a>
                </li>

                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/profile.php" class="side-nav-link active">
                        <i class="fa fa-user tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>প্রোফাইল</strong></span>
                    </a>
                </li>            
                <li class="side-nav-item pl-2 pt-3 pb-1">
                    <a href="instructor/logout.php" class="side-nav-link active">
                        <i class="fa fa-power-off tx-2x text-secondary ins-nav-icons"></i>
                        <span class="h6 pl-1"><strong>লগ-আউট</strong></span>
                    </a>
                </li>
                
                
                
<?php

    }

?>
            </ul>
        </div>

    </div>
</div>

<script>
$(document).ready(function(){
  $("#navTogg").click(function(){
    $("ul.metismenu").toggle();
  });
});
</script>