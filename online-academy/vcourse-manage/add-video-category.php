<?php include('header.php') ?>
<?php include('../functions.inc.php') ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                 
				 
				 <div class="col-12">
                        <div class="card">
                 <div class="card-body">
                 <div class="content">
            <div class="container-fluid">
                <div class="row">
				 <div class="col-md-8">

                <div id="msg-container" class="card pl-4 pt-4 pb-2 p-3 bg-light">
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6">
                            <p> <strong id="message" class="text-secondary h4"> নতুন ক্যাটেগরি তৈরি করুন</strong></p>
                        </div>
						<div class="col-md-4 ml-auto text-center pull-right">
                            <a href="course-categories.php" class="btn btn-outline-primary btn-rounded alignToTitle">
                                <i class="fa fa-shopping-basket tx-2x text-secondary"></i> ক্যাটেগরি দেখুন
                            </a>
                        </div>
                    </div>
                </div>
				
				
				<?php
						if(isset($_POST['submit'])){
    
$catg_title  = get_safe_value($con,htmlspecialchars($_POST['catg_title']));
$catg_description = get_safe_value($con,htmlspecialchars($_POST['catg_description']));
$catg_type = get_safe_value($con,htmlspecialchars($_POST['catg_type']));

// image uploaded code start

$thumbnail_image = $_FILES['thumbnail_image']['name'];
$thumbnail_image_after_explode_extention = strtolower(pathinfo($thumbnail_image, PATHINFO_EXTENSION));
$thumbnail_image_new_name = time() . "-" . rand(111, 999) . "." . $thumbnail_image_after_explode_extention;

$image_tmp_location = $_FILES['thumbnail_image']['tmp_name'];
$image_new_location = "../upload/instructor-video-categories/" . $thumbnail_image_new_name;
move_uploaded_file($image_tmp_location, $image_new_location);

// image uploaded code End


//$instructor_id = $_SESSION['abc_ins_id'];

$insert_query = "INSERT INTO `instructor_video_categories`(`ins_catg_title`, `ins_catg_image`, `ins_catg_desc`, `ins_catg_type`) VALUES ('$catg_title', '$thumbnail_image_new_name', '$catg_description', '$catg_type')";
//echo $insert_query;
if (mysqli_query($con, $insert_query)) {

    //notifier($msg='Sucessfully Created a new category: '.$catg_title.'!',$alert=2,$time=3000);
 echo gen_notifi('Sucessfully Created a new category: '.$catg_title.'!','alert-success');      
} else {
echo gen_notifi('Error occurred! Please try again','alert-danger');  
}
    
    
}


if(isset($_GET['del'])){
echo gen_notifi('are you sure want to delete?','alert-danger');  	
echo '
<a href="add-video-category.php?del_confirm='.$_GET['del'].'" class="item_delete_button btn btn-sm btn-danger mt-2">
Yes</a>';
echo ' <a href="add-video-category.php" class="item_delete_button btn btn-sm btn-success mt-2">NO</a>';
}

if(isset($_GET['del_confirm'])){
$del_confirm = $_GET['del_confirm'];
$delete = "DELETE FROM instructor_video_categories WHERE ins_catg_id = '$del_confirm'";
$result =  mysqli_query($con, $delete);  
echo gen_notifi('Deleted successfully!','alert-info');  
echo reloader('add-video-category.php',1000);
}	


						?>

                <div class="card-body bg-light" data-select2-id="17">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="header-title mb-3">ক্যাটেগরি ফর্ম</h4>

                             <form class="required-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" data-select2-id="14">
                                   <div class="row justify-content-center" data-select2-id="12">
                                                <div class="col-xl-10" data-select2-id="11">                                   
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="catg_title">ক্যাটেগরির নাম <span class="required">*</span> </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="catg_title" name="catg_title" placeholder="Enter course title" required="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="course_overview_url">ক্যাটেগরির ছবি সংযুক্ত করুন *</label>
                                                        <div class="col-md-9">
                                                            <input type="file" class="form-control" name="thumbnail_image" id="course_overview_url" accept=".jpg, .jpeg, .JPG, .png, .webpp, .jpe .jif, .jfif, .jfi">
                                                            <label for="course_thumbnail" class="btn"> <i class="fa fa-camera"></i>  ক্যাটেগরির ছবি</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="catg_description"> ক্যাটেগরির ডেসক্রিপ্টশন *</label>
                                                        <div class="col-md-9">
                                                            <textarea name="catg_description" id="catg_description" class="form-control" rows="4" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3" data-select2-id="102">
                                                        <label class="col-md-3 col-form-label" for="catg_type">ক্যাটেগরির ধরন</label>
                                                        <div class="col-md-9">
                                                            <select name="catg_type" id="catg_type" class="form-control select2">
                                                                <option value="বাংলা" data-select2-id="6">বাংলা</option>
                                                                <option value="ইংরেজি" data-select2-id="103">ইংরেজি</option>
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
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="course-datatable-server-side" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable-server-side_info" style="width: 100%;">
                                        <thead class="bg-info text-center text-white">
                                            <tr role="row">
                                                <th class="sorting_asc"  aria-label="#">
                                                    <strong>ক্রম.</strong>
                                                </th>
                                                <th class="sorting_disabled"   aria-label="Title">
                                                    <strong>ক্যাটেগরির নাম</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>ক্যাটেগরি ইমেজ</strong>
                                                </th>
                                                <th class="sorting_disabled"  aria-label="Enrolled student">
                                                    <strong>ক্যাটেগরি টাইপ</strong>
                                                </th>

                                                <th class="sorting_disabled"  aria-label="Lesson and section">
                                                    <strong>ডিলিট</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $result = getCategories();
    
                                            $count = 0;
                                            foreach($result as $data):
                                                $count++;
                                        ?>
                                            <tr role="row" class="odd bg-white">
                                                <td class="sorting_1" tabindex="0"><?=$count?></td>
                                                <td>
                                                    <strong>
                                                        <a href="#"><?=$data['ins_catg_title'];?></a>
                                                    </strong><br>
                                                     <small class="text-muted"><?=$data['ins_catg_desc']; ?></small>
                                                </td>
                                                
                                                <td>
                                                    <img src="<?php echo $site_link?>/upload/instructor-video-categories/<?=$data['ins_catg_image']; ?>" alt="<?=strtolower($data['ins_catg_title']);?>" height="30px" width=30px>
                                                </td>
                                                
                                                <td>
                                                    <small class="text-muted"><b><?=$data['ins_catg_type']; ?></b></small>
                                                </td>
                                                <td>
                                                
												<a href="add-video-category.php?del=<?=$data['ins_catg_id']; ?>" 
												class="item_delete_button btn btn-sm btn-danger mt-2">
												<i style="" class="fa fa-trash" aria-hidden="true"></i>
												</a>
												
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
             </div>
             </div>
             </div>
				 
				 </div>
             </div>
        </div>

<?php include('footer.php') ?>