<?php
include ('../header.php');

if(isset($_GET['mc_id'])){
    $mc_id = $_GET['mc_id'];
}


mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
    
if(isset($_POST['submit'])){
    
$section_id  = get_safe_value($con,htmlspecialchars($_POST['section_id']));
$sec_class_title  = get_safe_value($con,htmlspecialchars($_POST['sec_class_title']));
$sec_class_desc = get_safe_value($con,htmlspecialchars($_POST['sec_class_desc']));
$sec_class_duration = get_safe_value($con,htmlspecialchars($_POST['sec_class_duration']));
$sec_class_type = get_safe_value($con,htmlspecialchars($_POST['sec_class_type']));
$sec_class_vid_link = get_safe_value($con,htmlspecialchars($_POST['sec_class_vid_link']));
$sec_class_locked = get_safe_value($con,htmlspecialchars($_POST['sec_class_locked']));


$instructor_id = $_SESSION['abc_ins_id'];

$insert_query = "INSERT INTO `ins_mc_sec_class`(`section_id`, `sec_class_title`, `sec_class_desc`, `sec_class_duration`, `sec_class_type`, `sec_class_vid_link`, `sec_class_locked`) 
VALUES ('$section_id', '$sec_class_title', '$sec_class_desc', '$sec_class_duration', '$sec_class_type', '$sec_class_vid_link', '$sec_class_locked')";

if (mysqli_query($con, $insert_query)) {
    
    notifier($msg='Sucessfully Created a new class: '.$sec_class_title.'!',$alert=2,$time=3000);
     
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
                            <p> <strong id="message" class="text-secondary h4"> নতুন ক্লাস তৈরি করুন</strong></p>
                        </div>
                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/add-new-section.php?mc_id=<?=$_GET['mc_id'];?>" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-plus-square tx-2x text-secondary"></i> সেকশন তৈরি করুন
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body bg-light" data-select2-id="17">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center header-title mb-5 mt-4">ক্লাস তৈরি ফর্ম</h4>

                             <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?mc_id=<?=$_GET['mc_id'];?>" method="post" enctype="multipart/form-data" data-select2-id="14">
                                   <div class="row justify-content-center" data-select2-id="12">
                                                <div class="col-xl-10" data-select2-id="11">     
                                                                                                    
                                                     <div class="form-group row mb-3" data-select2-id="10">
                                                            <label class="col-md-3 col-form-label" for="section_id">ক্লাসটি কোন সেকশনের মধ্যে তৈরি হবে সিলেক্ট করুন<span class="required">*</span></label>
                                                            <div class="col-md-9">
                                                            <select id="section_id" name="section_id" class="form-control select2" required>
                                                                <option value="" hidden selected>ক্লাস-সেকশন সিলেক্ট করুন </option>
    
                                                                <?php
                                                                    
                                                                    $sections = getAllSectionsByCourse($mc_id);

                                                                    foreach($sections as $section){
                                                                        echo '<option value="'.$section['section_id'].'">'.$section['section_title'].'</option>';
                                                                }

                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="sec_class_title">ক্লাসের নাম <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="sec_class_title" name="sec_class_title" placeholder="Enter class title" required="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="sec_class_duration">ক্লাসের সময়কাল (ঘন্টা-মিনিট-সেকেন্ড) <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="sec_class_duration" name="sec_class_duration" placeholder="Enter class duration" required="">
                                                        </div>
                                                    </div>                                                      
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="sec_class_vid_link">ক্লাসের ভিডিও লিংক <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="sec_class_vid_link" name="sec_class_vid_link" placeholder="Enter class video link" required="">
                                                        </div>
                                                    </div>                                                      
                                                    
                                                   <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="sec_class_desc"> ক্লাসের ডেসক্রিপ্টশন *</label>
                                                        <div class="col-md-9">
                                                            <textarea name="sec_class_desc" id="sec_class_desc" class="form-control" rows="4" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3" data-select2-id="102">
                                                        <label class="col-md-3 col-form-label" for="sec_class_type">ক্লাসের ধরন</label>
                                                        <div class="col-md-9">
                                                            <select name="sec_class_type" id="sec_class_type" class="form-control select2">
                                                                <option value="বাংলা" data-select2-id="6">বাংলা</option>
                                                                <option value="ইংরেজি" data-select2-id="103">ইংরেজি</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row mb-3" data-select2-id="102">
                                                        <label class="col-md-3 col-form-label" for="sec_class_locked">ক্লাস স্ট্যাটাস</label>
                                                        <div class="col-md-9">
                                                            <select name="sec_class_locked" id="sec_class_locked" class="form-control select2">
                                                                <option value="0" data-select2-id="6">উন্মুক্ত</option>
                                                                <option value="1" data-select2-id="103">তালাবদ্ধ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row mb-3">
                                                        <div class="offset-md-3 col-md-9">
                                                            <div class="text-center">
                                                                <div class="mb-3 mt-3">
                                                              <button id="success-submit" type="submit" name="submit" class="btn btn-primary btn-block text-center" onclick="">Submit</button>
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
                                                    <strong>ক্লাসের নাম</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>ক্লাসের ভিডিও লিংক</strong>
                                                </th>
                                                
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>ইডিট</strong>
                                                </th>

                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ডিলিট</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sr = 0;
                                            foreach($sections as $section):
                                                    $sr++;
                                                    echo '<tr><td colspan="5"><strong> '.$sr.' :: </strong>'.$section['section_title'].'</td></tr>';
                                            
                                                    $classes = getAllClassesBySection($section['section_id']);
                                                    $count=0;
                                                    foreach($classes as $class):
                                                        $count++;
                                        ?>
                                                        <tr role="row" class="odd bg-white">
                                                            <td class="sorting_1" tabindex="0"><?=$count?></td>
                                                            <td>
                                                                <strong>
                                                                    <a href="#"><?=$class['sec_class_title'];?></a>
                                                                </strong><br>
                                                                 <small class="text-muted"><?=$section['section_title']; ?></small>
                                                            </td>
                                                            <td>
                                                                 <small class="text-muted"><b><?=$class['sec_class_vid_link']; ?></b></small>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-warning mt-2"><i style="color:#fff" class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                    //itemRemover(id,title,column,table)
                                                                    itemRemover($class['sec_class_id'],$class['sec_class_title'],'sec_class_id','ins_mc_sec_class');
                                                                ?>
                                                            </td>
                                                        </tr>
                                        <?php
                                                endforeach;
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




