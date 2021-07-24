<?php
    include ('../header.php');
?>

<style>
.grad-bg{
   background: linear-gradient(to right, #4aeeff7a, #2dffb247); 
}
</style>
 
<section id="instractor-panel">
    <div class="container">
        <div class="row my-5">

            <!-- Instractor panel Left side-bar start -->
            <?php include ('left_sidebar.php'); ?>
            <!-- Instractor panel Left side-bar End -->

            <div class="col-md-9">
                <div class="card pl-4 pt-4 pb-2 bg-light">
                    <div class="row">
                        <div class="col-md-6">
                                <strong class="text-secondary h3">কোর্স লিস্ট টেবিল</strong>
                            </p>
                        </div>

                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/course-manage.php" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-chevron-circle-left"></i> কোর্স ম্যানেজমেন্টে যান
                            </a>
                        </div>
                    </div>
                </div>

                <div style="min-height: 400px" class="card bg-light">
                    <div class="card-body">

                    <div class="table-responsive-sm mt-5">
                        <div id="course-datatable-server-side_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

<style>
.table thead th {
    vertical-align: middle;
    text-align: left;
}

th strong {
    font-size: 26px;
}
</style>
                            <div class="row">
                                <div class="col-sm-12">
<?php
$ins_id = $_SESSION['abc_ins_id'];
$result = getAllCoursesByInstructor($ins_id);
$count_result = mysqli_num_rows($result);

if($count_result>0){
?>
                                    <table id="course-datatable-server-side" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable-server-side_info" style="width: 100%;">
                                        <thead class="bg-info text-center text-white">
                                            <tr role="row">
                                                <th class="sorting_asc"  aria-label="#">
                                                    <strong>ক্রম.</strong>
                                                </th>
                                                <th class="sorting_disabled"   aria-label="Title">
                                                    <strong>কোর্সের নাম</strong>
                                                </th>

                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ডিলিট</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $count = 0;
                                            foreach($result as $data):
                                                $count++;
                                                $data['ins_mc_enrolled'];
                                        ?>
                                            <tr role="row" class="odd bg-white">
                                                <td class="sorting_1" tabindex="0"><?=$count?></td>
                                                <td>
                                                    <strong>
                                                        <a href="#"><?=$data['ins_mc_title'];?></a>
                                                    </strong><br>
                                                     <small class="text-muted"><?=$data['ins_mc_short_desc']; ?></small>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                        //itemRemover(id,title,column,table)
                                                        itemRemover($data['ins_mc_id'],$data['ins_mc_title'],'ins_mc_id','instructor_made_courses');
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                    	    endforeach;
                                        ?>
                                        </tbody>
                                    </table>
<?php
}
else{
    echo '<h3 class="text-danger text-center myfont">ডিলিট করার জন্য কোন কোর্স ডাটাবেজে নেই</h3>';
}
?>                                    
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



<?php
    include ('../footer.php');
?>