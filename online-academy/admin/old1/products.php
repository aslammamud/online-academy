<?php
include 'header.php';

$select_query = "SELECT * FROM products";
$product_info_from_db = mysqli_query($con, $select_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="category.php">All Product</a>
      </nav>
      <div class="sl-pagebody"> 
        <div class="card">

          <div class="row gutters-10 mt-3 ml-2">
            <div class="col-md-3">
              <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700">0</div>
                    <a class="text-white" href="#"><i class="fa fa-upload tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Remaining Uploads</div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="bg-info text-white rounded-lg mb-4 overflow-hidden">
                <div class="px-3 pt-4 pb-5 text-center">
                  <div class="h3 fw-700"><?php echo $product_info_from_db->num_rows ?></div>
                    <a class="text-white" href="add-product.php"><i class="fa fa-plus-circle tx-30" aria-hidden="true"></i></a>
                  <div class="h5 opacity-50">Add New Product</div>
                </div>
              </div>  
            </div>

          </div>

            <div class="card-header pd-20 bg-transparent bd-b bd-gray-200">
              <h6 class="card-title tx-uppercase tx-22 mg-b-0">All Products</h6>
              
              <div class="search search-bar text-right">
                  <i class="fa fa-search" aria-hidden="true"></i>
              <i> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Product.."></i>
            </div>

            </div><!-- card-header -->
            <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Product Id</th>
                  <th class="pd-y-6 text-center">Category Id</th>
                  <th class="pd-y-6 text-center">Sub-Category Id</th>
                  <th class="pd-y-5 text-center">Product Tag</th>
                  <th class="pd-y-5 text-center">Product Code</th>
                  <th class="pd-y-5 text-center">Product Name</th>
                  <th class="pd-y-5 text-center">Description</th>
                  <th class="pd-y-5 text-center">Product Image</th>
                  <th class="pd-y-5 text-center">Regular Price</th>
                  <th class="pd-y-5 text-center">Sale Price</th>
                  <th class="pd-y-5 text-center">Option</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  foreach($product_info_from_db as $product_info):

                    ?>

                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?=$product_info['product_id']?></td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?=$product_info['product_category_id']?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?=$product_info['product_sub_category_id']?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_tag']?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_code']?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_title']?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?=$product_info['product_description']?></a>
                      </td>

                      <td class="pd-l-20">
                        <img src="../img/product-img/<?=$product_info['product_image']?>" class="wd-60" alt="Image">
                      </td>

                      <td class="valign-middle">
                        <span class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_regular_price']?></span>
                      </td>

                      <td class="valign-middle">
                        <span class="tx-inverse tx-12 tx-medium d-block text-center"><?=$product_info['product_sale_price']?></span>
                      </td>

                      <td class="valign-middle tx-center">
                        <a class="btn btn-outline-danger btn-sm mt-2" href="remove-product.php?id=<?=$product_info['product_id']?>">Delete</a>
                        <!-- <a class="btn btn-outline-info btn-sm mt-2" href="#">Edit</a> -->
                      </td>
                    </tr>

                    <?php
                  endforeach;
                ?>
                
              </tbody>
            </table>

            <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-b-200">
              <ul class="pagination">
                <ul class="pagination ml-auto">
                  <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                  </li>
                  <li      
                      class="page-item active" aria-current="page"><span class="page-link">1</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                  </li>
                  </ul>                   

                  </ul>
            </div><!-- card-footer -->
          </div><!-- card -->
      </div>
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

  <?php
  require_once 'footer.php';
?>
