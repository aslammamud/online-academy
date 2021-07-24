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
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong class="text-secondary h3">Payout Reports</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="mb-3 header-title">Payout Report updated a few days later</h4>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php

    include ('../footer.php');
?>



