<?php
include ('../header.php');

if(isset($_GET['mc_id'])){
    $mc_id = $_GET['mc_id'];
}

mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
    
if(isset($_POST['submit'])){
    
$section_title  = get_safe_value($con,htmlspecialchars($_POST['section_title']));
$section_status = get_safe_value($con,htmlspecialchars($_POST['section_status']));

$instructor_id = $_SESSION['abc_ins_id'];

$insert_query = "INSERT INTO `ins_mc_section`(`ins_mc_id`, `section_title`, `section_status`) VALUES ('$mc_id', '$section_title', '$section_status')";

if (mysqli_query($con, $insert_query)) {
    
    notifier($msg='Sucessfully Created a new section: '.$section_title.'!',$alert=2,$time=3000);
     
} else {
  notifier($msg='Error occurred! Please try again',$alert=4,$time=3000);
}
    
    
}


?>

<style>
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #007bff;
}
</style>

<section id="add-course">
    <div class="container">
        <div class="row my-5">
            <!-- Instractor panel Left side-bar start -->
            <?php include ('left_sidebar.php'); ?>
            <!-- Instractor panel Left side-bar End -->

            <div class="col-md-8">

                <div id="msg-container" class="card pl-4 pt-4 pb-2 bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <p> <strong id="message" class="text-secondary h4"> নতুন ক্লাস-সেকশন তৈরি করুন</strong></p>
                        </div>
                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/add-new-class.php?mc_id=<?=$_GET['mc_id'];?>" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> ক্লাসে ফেরত যান
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body bg-light" data-select2-id="17">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center header-title mb-5 mt-4">সেকশন তৈরি ফর্ম</h4>

                             <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?mc_id=<?=$_GET['mc_id'];?>" method="post" enctype="multipart/form-data" data-select2-id="14">
                                   <div class="row justify-content-center" data-select2-id="12">
                                                <div class="col-xl-10" data-select2-id="11">                                   
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="section_title">সেকশনের নাম <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="section_title" name="section_title" placeholder="Enter section title" required="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3" data-select2-id="102">
                                                        <label class="col-md-3 col-form-label" for="section_status">সেকশন স্ট্যাটাস</label>
                                                        <div class="col-md-9">
                                                            <select name="section_status" id="section_status" class="form-control select2">
                                                                <option value="0" data-select2-id="6">উন্মুক্ত</option>
                                                                <option value="1" data-select2-id="103">তালাবদ্ধ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <div class="offset-md-3 col-md-9">
                                                            <div class="text-center">
                                                                <div class="mb-3 mt-3">
                                                              <button id="success-submit" type="submit" name="submit" class="btn btn-primary btn-block text-center" onclick="">সাবমিট করুন</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                 
                            </form>
                        </div>

                    </div>
<style>
.table thead th {
    vertical-align: middle;
    text-align: left;
}
</style>
                            <div class="row mt-5">
                                <div class="col-sm-12">
                                    <table id="course-datatable-server-side" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable-server-side_info" style="width: 100%;">
                                        <thead class="bg-info text-center text-white">
                                            <tr role="row">
                                                <th class="sorting_asc"  aria-label="#">
                                                    <strong>ক্রম.</strong>
                                                </th>
                                                <th class="sorting_disabled"   aria-label="Title">
                                                    <strong>সেকশনের নাম</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>সেকশন স্ট্যাটাস</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ডিলিট</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sections = getAllSectionsByCourse($mc_id);
                                            $count = 0;
                                            foreach($sections as $section):
                                                $count++;
                                        ?>
                                            <tr role="row" class="odd bg-white">
                                                <td class="sorting_1" tabindex="0"><?=$count?></td>
                                                <td>
                                                    <strong>
                                                        <a href="#"><?=$section['section_title'];?></a>
                                                    </strong>
                                                </td>
                                                <td>
                                                    <small class="text-muted"><b><?php echo($section['section_status']==true ? 'Locked' : 'Unlocked'); ?></b></small>
                                                </td>
                                                <td>
                                                    <?php
                                                        //itemRemover(id,title,column,table)
                                                        itemRemover($section['section_id'],$section['section_title'],'section_id','ins_mc_section');
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                    	    endforeach;
                                        ?>
                                        </tbody>
                                    </table>
                                    <div id="course-datatable-server-side_processing" class="dataTables_processing card" style="display: none;">
                                        Processing...
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




