<?php
include 'header.php';

$user_id = $_GET['id'];

$select_query = "SELECT * FROM categories WHERE c_id='$user_id'";
$select_user_info = mysqli_query($con, $select_query);
$select_user_info_after_assoc = mysqli_fetch_assoc($select_user_info);

?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="add-category.php">Edit Category</a>
      </nav>
        <div class="col-lg-12 sl-pagebody m-auto">
          <div class="row">

            <div class="col-lg-6 m-auto">
              <table class="table table-bordered text-center">
                <form action="edit-category-post.php" method="POST" enctype="multipart/form-data">
                  <div class="login-wrapper wd-500 wd-xs-500 pd-25 pd-xs-50 bg-white">
                      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Edit Category</div>
                      <div class="tx-center mg-b-60"> Given Information</div>

                      <div class="form-group">
                        <label><h6>Category Name:</h6></label>
                        <input type="hidden" class="form-control" value="<?=$select_user_info_after_assoc['c_id']?>" name="c_id">
                        <input type="text" class="form-control" placeholder="product name" value="<?=$select_user_info_after_assoc['c_name']?>" name="c_name">
                      </div><!-- form-group -->
                      
                      <div class="form-group">
                        <label><h6>Category Banner Image</h6></label>
                        <input type="file" class="form-control" value="" name="c_image">
                        <img class="mt-2" width="80" height="80" src="../img/category-img/<?=$select_user_info_after_assoc['c_image']?>" alt="img not found">
                      </div><!-- form-group -->

                      <div class="text-center mt-5">
                        <button class="btn btn-success" >Update Category</button>
                      </div>
                  </div>
                </form>
              </table>
            </div>
          </div>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>