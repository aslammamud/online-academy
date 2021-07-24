<?php

include ('../header.php');
    
demon('instructor/login.php',2);

$instructor_id = $_SESSION['abc_ins_id'];
    
?>


<section id="instractor-panel">
    <div class="container">
        <div class="row my-5">
        <div   id="confetti-wrapper"></div>
            <?php include ('left_sidebar.php'); ?>

            <div class="col-md-8">
  
            <div class="card pl-4 pt-4 pb-2 bg-light">
                <p> <strong class="text-secondary h3">পে আউট সেটিংস</strong></p>
            </div>

            </div>
        </div>
    </div>
</section>


<?php

    include ('../footer.php');
?>
