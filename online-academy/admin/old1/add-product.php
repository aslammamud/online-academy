<?php

include 'header.php';

?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="text-dark" href="add-product.php">Add Product</a>
          <a class="btn btn-outline-info ml-2" href="products.php">Show all Product</a>
        </nav>
      <div class="sl-pagebody">

        <form action="add-product-post.php" method="POST" enctype="multipart/form-data">
            <div class="d-flex align-items-center  bg-sl-white ht-50v">
              <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Product</div>
              <div class="tx-center mg-b-60">Product Information</div>

                <?php
                  if(isset($_SESSION['product_upload_status'])):
                  ?>
                  <div class="alert alert-success">
                      <?php
                        echo $_SESSION['product_upload_status'];
                        unset($_SESSION['product_upload_status']);
                      ?>
                  </div>
                <?php endif; ?>

              <div class="row">
                <div class="col-sm-6 mt-2">

                  <div class="form-group">
                    <label class="text-dark h6">Select Main Category</label>
                      <select class="from-control" name="main_category" id="main_category" onchange="get_category('main_category','1','sub_category')">
                          <option class="form-control">select category</option>
                          <?php
                              $select_category = "SELECT * FROM categories";
                              $category = mysqli_query($con, $select_category);

                              foreach($category as $main_category){

                          ?>
                            <option value="<?php echo $main_category['c_id'];?>"><?php echo $main_category['c_name'];?></option>
                          <?php } ?>
                      </select>
                  </div>

                  
                  <div id="sub_category" class="form-group">
              
                  </div>

                  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
                  <script type="text/javascript">

                    function get_category(em1,em2,rtn){
                    var element = document.getElementById(em1).value;
                    document.getElementById(rtn).innerHTML = '<center><img src="img/loader.gif" alt="Uploading...."/></center>';
                    if(em1.length==0){return;}if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
                    else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()
                    {if(xmlhttp.readyState==4&&xmlhttp.status==200)
                    {document.getElementById(rtn).innerHTML=xmlhttp.responseText;}}
                    xmlhttp.open("GET","get-category.php?cid="+element+"&cmd="+em2,true);
                    xmlhttp.send();}
               
                  </script>
                  <br>

                  <div class="form-group">
                    <label class="text-dark h6">product Title</label>
                    <input type="text" class="form-control" placeholder="Enter Product Title" name="product_title" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group m-auto"> 
                    <option class="text-dark h6">Description</option>
                    <textarea id="w3review" n rows="4" name="product_description" cols="58" > </textarea> 
                  </div>

                    <br> 
                    <div class="form-group">
                      <label class="text-dark h6" ><h6>Add Product Image</h6></label>
                      <br>
                      <!-- When select image than show this image Code start -->
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                      <style>
                        article, aside, figure, footer, header, hgroup, 
                        menu, nav, section { display: block; }
                      </style>

                        <img id="blah" class="img-sm mt-2 mb-4" style="height:124px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                        <input class="form-control" type='file' onchange="readURL(this); " name="product_image_name" />

                      <script>
                        function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#blah')
                                    .attr('src', e.target.result)
                                    .width(110)
                                    .height(120);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                        }
                      </script>
                      <!-- When select image than show this image Code End -->
                    </div><!-- form-group -->
                  
                    <br>
          
                    <div class="form-group">
                    <label class="text-dark h6"><h6>Reguler Price</h6></label>
                    <input type="text" class="form-control" placeholder="regular price TK/$" name="product_regular_price" required>
                    </div><!-- form-group -->
                    <br>

                    <div class="form-group">
                      <label class="text-dark h6"><h6> Face Value</h6></label>
                      <input type="text" class="form-control" placeholder="Enter face-value" name="product_face_value" required>
                    </div><!-- form-group -->
                    <br>
                    
                </div>

                <div class="col-sm-6 mt-2">

                  <div class="form-group">
                    <label class="text-dark h6">Meta Title</label>
                    <input type="text" class="form-control " placeholder="write a meta title" name="product_meta_title" required>
                  </div><!-- form-group -->

                  <div class="form-group m-auto">
                    <label class="text-dark h6 mt-4">Meta Desciption</label>
                    <textarea rows="4" name="product_meta_description" cols="58"> </textarea>
                  </div><!-- form-group -->
                          
                      
                  <div class="form-group ">
                    <label class="text-dark h6 mt-4" >Video Link</label><br>

                    <input type="video/mp4" class="form-control" name="product_video_link" placeholder="Enter video link: https//">
                    <!-- <iframe class="mt-2" width="434" height="230" src="https://www.youtube.com/embed/gyGsPlt06bo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

                  </div><!-- form-group -->

                  <div class="form-group">
                    <label class="text-dark h6 mt-4"><h6>Product Stock</h6></label>
                    <input type="text" class="form-control" placeholder="Enter product stock Amount" name="product_stock" required>
                  </div><!-- form-group -->

                  <div class="form-group ">
                      <label class="text-dark h6 mt-4"><h6>Unit Number</h6></label>
                      <input type="text" class="form-control" placeholder="pc/kg/.." name="product_unit" required>
                  </div><!-- form-group -->

                  <!-- <div class="form-group">
                    <label class="text-dark h6 mt-4"><h6>New product Code</h6></label>
                    <input type="text" class="form-control" placeholder="Enter Brand" name="product_code" required>
                  </div> -->

                  <div class="form-group">
                    <label class="text-dark h6 mt-4"><h6>Product Brand</h6></label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="product_brand" required>
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label class="text-dark h6 mt-4"><h6>Sale price </h6></label>
                    <input type="number" class="form-control" placeholder="Enter New Ammount" name="product_sale_price" required>
                  </div><!-- form-group -->

                </div>  
              </div>
          
              <div class="text-center">
                <button type="submit" value="submit" class="btn btn-success mt-4">Upload Product </button>
              </div>

        </div><!-- login-wrapper -->
      </div><!-- d-flex -->
     </form>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>