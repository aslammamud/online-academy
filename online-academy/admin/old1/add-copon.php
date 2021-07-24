 <?php
include 'header.php';
?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="add-copon.php">Add Coupon</a>
      </nav>
      <table class="table">
      <div class="col-lg-12 sl-pagebody m-auto">
          
            <div class="card-body">
              <div class="row">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Discount type
                        </div>
                        <div class="col-sm-6">
                          <select id="inputState" class="form-control">
                            <option selected>Fixed cart Discount</option>
                            <option>Cart Discount</option>
                            <option>20% Discount</option>
                          </select>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Coupon Amount
                        </div>
                        <div class="col-sm-6">
                          <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Coupon Amount 0 $">
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-1">
                          Allow free shipping
                        </div>
                        <div class="col-sm-6">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <p class="text-dark">Check This box if the coupon grants. A <a href="">free shipping method </a>must be enabled in your shipping zone and be set to require "a valid free shipping coupon" (see the "free shipping requires" Settings)</p>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Coupon Expiry Date
                        </div>
                        <div class="col-sm-6">
                          <input type="Date" class="form-control" aria-describedby="emailHelp" placeholder="YYY-MM-DD">
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Product ID
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="product id:">
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Category name
                        </div>
                        <div class="col-sm-6">
                          <select id="inputState" class="form-control">
                            <option selected>Men </option>
                            <option>Women</option>
                            <option>Kid Cloth</option>
                            <option>Winter Collection</option>
                          </select>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mt-5 mb-5">
                <div class="col-sm-10 m-auto">
                    <div class="row">
                        <div class="col-sm-4 text-center text-dark h6 mt-2">
                          Using Limit
                        </div>
                        <div class="col-sm-6">
                          <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="using limit">
                        </div>
                    </div>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-sm-4 ml-auto">
                      <button class="btn bg-danger text-white" href="#"> Cancel </button>
                      <a class="ml-3 btn bg-success text-white" href="copon.php">Save Copon</a>
                </div>
              </div>
            </div>
          

      </div><!-- sl-pagebody -->
      </table>
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>