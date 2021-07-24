<?php
include ('../header.php');

demon('instructor/login.php',2);
$instructor_id = $_SESSION['abc_ins_id'];
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
                                <strong class="text-secondary h3">কোর্স ম্যানেজার</strong>
                            </p>
                        </div>

                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/add-new-course.php" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-plus"></i> কোর্স তৈরি করুন
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card bg-light">
                   <div class="card-body bg-light">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-link text-muted mb-3" style="font-size: 24px;"></i>
                                            <h3><span><?php getActiveCouseByInstructor($instructor_id,1); ?></span></h3>
                                            <p class="text-muted font-15 mb-0 myfont">চলতি কোর্স</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-chain-broken text-muted mb-3" style="font-size: 24px;"></i>
                                            <h3><span> <?php getActiveCouseByInstructor($instructor_id,0); ?> </span></h3>
                                            <p class="text-muted font-15 mb-0 myfont">বন্ধ কোর্স</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

<!--                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left">
                                        <div class="card-body text-center">
                                            <i class="fa fa-bookmark-o text-muted mb-3" style="font-size: 24px;"></i>
                                            <h3><span>0</span></h3>
                                            <p class="text-muted font-15 mb-0">Draft courses</p>
                                        </div>
                                    </div>
                                </a>
                            </div>-->

                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-star-o text-muted mb-3" style="font-size: 24px;"></i>
                                            <h3><span><?php getFreeCouseByInstructor($instructor_id,1); ?></span></h3>
                                            <p class="text-muted font-15 mb-0 myfont">ফ্রি কোর্স</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="#" class="text-secondary">
                                    <div class="card shadow-none m-0 border-left grad-bg query-boxes">
                                        <div class="card-body text-center">
                                            <i class="fa fa-tags text-muted mb-3" style="font-size: 24px;"></i>
                                            <h3><span><?php getFreeCouseByInstructor($instructor_id,0); ?></span></h3>
                                            <p class="text-muted font-15 mb-0 myfont">পেইড কোর্স</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div> <!-- end row -->
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="card-body">
                        
                     <div class="row">
                        <div class="col-md-6">
                                <strong class="text-secondary h3">কোর্স লিস্ট</strong>
                            </p>
                        </div>

                        <div class="col-md-4 ml-auto text-center">
                            <a href="instructor/delete-any-course.php" class="btn btn-outline-danger btn-rounded alignToTitle">
                                <i class="fa fa-minus"></i> কোর্স ডিলিট করুন
                            </a>
                        </div>
                    </div>
<!--                        <form class="row justify-content-center" action="##" method="get">
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="category_id">Categories</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                        <option value="all" selected="" data-select2-id="2">All</option>
                                        <optgroup label="Web Design">
                                            <option value="11">Responsive Design</option>
                                            <option value="12">WordPress Theme</option>
                                            <option value="19">Bootstrap</option>
                                            <option value="28">HTML &amp; CSS</option>
                                        </optgroup>
                                        <optgroup label="Graphic Design">
                                            <option value="17">Photoshop</option>
                                            <option value="18">Adobe Illustrator</option>
                                            <option value="29">Drawing</option>
                                            <option value="30">Logo Design</option>
                                            <option value="31">Digital Art</option>
                                            </optgroup>
                                        <optgroup label="User Experience">
                                            <option value="20">User Experience Design</option>
                                            <option value="21">Mobile App Design</option>
                                            <option value="32">User Interface</option>
                                            <option value="33">Design Thinking</option>
                                            <option value="34">Figma</option>
                                            <option value="35">Prototyping</option>
                                            </optgroup>
                                        <optgroup label="Interior Design">
                                            <option value="22">Color Theory</option>
                                            <option value="23">Lighting Design</option>
                                            <option value="40">SketchUp</option>
                                            <option value="41">Home Improvement</option>
                                            <option value="42">3D Lighting</option>
                                        </optgroup>
                                        <optgroup label="3D and Animation">
                                            <option value="24">Blender</option>
                                            <option value="25">Motion Graphics</option>
                                            <option value="36">After Effects</option>
                                            <option value="37">Maya</option>
                                            <option value="38">zBrush</option>
                                            <option value="39">Character Modeling</option>
                                        </optgroup>
                                        <optgroup label="Fashion">
                                            <option value="43">Fashion Design</option>
                                            <option value="44">Sewing</option>
                                            <option value="45">T-shirt Design</option>
                                            <option value="46">Jewelry Design</option>
                                        </optgroup>
                                        <optgroup label="Frontend Development With Vue.js">

                                        </optgroup>
                                    </select>
                                </div>
                            </div>


                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="status" id="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                    <option value="all" selected="" data-select2-id="4">All</option>
                                    <option value="active">Active</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="price" id="price" data-select2-id="price" tabindex="-1" aria-hidden="true">
                                    <option value="all" selected="" data-select2-id="6">All</option>
                                    <option value="free">Free</option>
                                    <option value="paid">Paid</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <label for=".." class="text-white">..</label>
                            <button type="submit" class="btn btn-primary btn-block" name="button">Filter</button>
                        </div>
                    </form>-->

                    <div class="table-responsive-sm mt-5">
                        <div id="course-datatable-server-side_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<!--                            <div class="row mb-4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="course-datatable-server-side_length">
                                        <label>Show 
                                            <select name="course-datatable-server-side_length" aria-controls="course-datatable-server-side" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">5</option>
                                                <option value="25">10</option>
                                                <option value="50">20</option>
                                                <option value="100">50</option>
                                                <option value="100">100</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="course-datatable-server-side_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="course-datatable-server-side">
                                        </label>
                                    </div>
                                </div>
                            </div>-->

<style>
.table thead th {
    vertical-align: middle;
    text-align: left;
}

th strong {
    font-size: 26px;
}

i.fa.fa-plus ,i.fa.fa-eye, i.fa.fa-pencil{
    position: relative;
    top: 3px;
    padding: 3px;
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
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>ভর্তি হয়েছে</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Price">
                                                    <strong>কোর্স ফি</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ক্লাস</strong>
                                                </th>                                                
                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ইডিট</strong>
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
                                                    <small class="text-muted"><b><?=$data['ins_mc_enrolled']; ?></b> জন</small>
                                                </td>
                                                
                                                <td>
                                                    <small class="text-muted"><b><?=$data['ins_mc_offer_fee']; ?></b> টাকা</small>
                                                </td>
                                                <td>
                                                    <a href="instructor/add-new-class.php?mc_id=<?=$data['ins_mc_id']; ?>"><span class="badge text-dark badge-success px-2 pb-2"><i class="fa fa-plus" aria-hidden="true"></i>ক্লাস তৈরি করুন</span></a><br>
                                                    <a href="course-details.php?url=<?=$data['ins_mc_url'] ?>"><span class="badge text-dark badge-primary px-2 pb-2"><i class="fa fa-eye" aria-hidden="true"></i>ক্লাসগুলো দেখুন</span></a>
                                                </td>                                                
                                                
                                                <td>
                                                    <a href="instructor/edit-course.php?url=<?=$data['ins_mc_url']; ?>"><span class="badge text-dark badge-warning px-2 pb-2"><i class="fa fa-pencil" aria-hidden="true"></i>ইডিট করুন</span></a>
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
    echo '<h3 class="text-danger text-center myfont pb-5">দুঃখিত এই মুহুর্তে আপনার কোন কোর্স তৈরি করা নেই</h3>';
}
?>
                                </div>
                            </div>

                            
<!--                            <div class="row mt-5">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_paginate paging_simple_numbers" id="course-datatable-server-side_paginate">
                                        <ul class="pagination text-right">
                                            <li class="paginate_button page-item previous disabled" id="course-datatable-server-side_previous">
                                                <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item">
                                                <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item">
                                                <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item next disabled" id="course-datatable-server-side_next">
                                                <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>-->
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