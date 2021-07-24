<?php
$page='featured';
$dynamic_title = 'Featured | Settings | ABC Academy';
include 'header.php';
include 'navigation.php';

if(isset($_POST['submit'])){
    
$title = get_safe_value($con,htmlspecialchars($_POST['featured_title']));
$link = get_safe_value($con,htmlspecialchars($_POST['featured_link']));
	
// image uploaded code start
$partner_company_image = ($_FILES['featured_company_image']['name']);
$partner_company_image_after_explode = explode(".", $partner_company_image);
$partner_company_image_after_explode_extention = end(strtolower($partner_company_image_after_explode));
$partner_company_image_new_name = time() . "-" . rand(111, 999) . "." . $partner_company_image_after_explode_extention;

$partner_company_image_tmp_location = ($_FILES['featured_company_image']['tmp_name']);
$partner_company_image_new_location = "images/featured/" . $partner_company_image_new_name;
move_uploaded_file($partner_company_image_tmp_location, $partner_company_image_new_location);

// image uploaded code End

$partner_insert_query = "INSERT INTO `featured_companies`(`fc_title`, `fc_image`, `fc_link`) VALUES ('$title','$partner_company_image_new_name','$link')";
$partner_to_db = mysqli_query($con, $partner_insert_query);

notifier('Sucessfully Added New Featured Company!',2,4000);

}


?>
<div class="wrapper">
    <div class="main-panel">
    <?php include 'navigation-topbar.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
			<div class="h2 text-center text-inverse">All Featured Companies</div>
		    <table class="table table-bordered">
              <thead>
                <tr class="tx-10">
                  <th class="py-5 text-center">Serial No.</th>
                  <th class="py-5 text-center">Company</th>
                  <th class="py-5 text-center">Featured Company Image</th>
                  <th class="py-5 text-center">Link</th>
                  <th class="py-5 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_partner = 'select * from featured_companies';
					$result_partner = mysqli_query($con,$sql_partner);
					$count_partner = mysqli_num_rows($result_partner);
					$cnt = 0;
					if($count_partner > 0){
					foreach($result_partner as $partner){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td class=" text-center">
                         <p><?php echo $partner['fc_title']; ?></p>
                      </td>
                      <td>
                        <div class="text-center"><img src="images/featured/<?php echo $partner['fc_image']; ?>" alt="<?php echo $partner['fc_title']; ?>" height="40" width="160"></div>
                      </td>
                      <td class="text-center">
                          <a class="badge badge-primary" href="<?php echo $partner['fc_link']; ?>" target="_blank">Visit</a>
                      </td>
					  <td class="text-center">
                        	<input type="hidden" class="item_delete_id" value="<?php echo $partner['fc_id'] ?>">
							<input type="hidden" class="item_delete_name" value="<?php echo $partner['fc_title'] ?>">
							<a style="color:red;" href="javascript:void(0)" class="item_delete_button">Remove</a>
                      </td>
                    </tr>
                    <?php
						}
					}
                ?>
				
              </tbody>
            </table>
	  </div>


                <div class="row">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">

              <div class="h2 text-center text-inverse">Add New Featured Comapny</div>
              <div class="col-12 col-sm-4 col-md-4">
				<div class="form-group text-center">
                      <label class="text-dark h6 text-mute" ><h6>Upload Featured Comapny Image</h6></label>
                      <br>
                      <!-- When select image than show this image Code start -->
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                      <style>
                        article, aside, figure, footer, header, hgroup, 
                        menu, nav, section { display: block; }
                      </style>
					  <div class="text-center">
                        <img id="blah" class="img-sm mt-2 mb-4" style="height:200px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" />
                        <br>
                        <br>
                        <input class="form-control  mt-3" type='file' onchange="readURL(this); " name="featured_company_image" />
					</div>
                      <script>
                        function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#blah')
                                    .attr('src', e.target.result);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                        }
                      </script>

                    </div>					
                    </div>	
                  <div class="col-12 col-sm-8 col-md-8">
                      <br>
                      <br>
                      <br>
                    <div class="form-group">
                        <label class="form-control text-mute" for="title">Company Title</label>
                        <input class="form-control" id="title" placeholder="title" name="featured_title" required>
                    </div>                    
                    <div class="form-group">
                        <label class="form-control text-mute" for="link">Company Website Link</label>
                        <input class="form-control" id="link" placeholder="link" name="featured_link" required>
                    </div>      
                    <div class="form-group text-left">
                        <input type="submit" value="ADD NEW FEATURED COMPANY" name="submit" class="btn btn-success mt-4">
                        <a href="featured.php" class="btn btn-danger mt-4">Discard</a>
                     </div>
                  </div>
              
     </form>
      </div>
      </div>
      </div>
    </div>    
  </div>    


<?php
  require_once 'footer.php';
?>