<?php
include 'header.php';
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="add-category.php">Add Category</a>
      </nav>
      <div class="col-lg-12 sl-pagebody m-auto">
          
        <table class="table">
          <div class="card">
            <div class="card-header bg-light">
              <div class="row">
                <div class="col-sm-2 mt-2 h6 text-center">All Coupons</div>
                <div class="col-sm-2">
                  <a class="btn btn-sm btn-outline-info" href="add-copon.php">Add New Copon</a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 m-auto">
              <form>
                <div class="row  mt-3 mb-3">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Search coupon card">
                  </div>
                  <div class="col ml-0 pl-0">
                    <button type="button" class="btn btn-primary">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </form>
              </div>
            </div>

            <thead>
              <tr class="tx-10">
                    <th class="pd-y-6">Coupon Name</th>
                <th class="pd-y-5">Coupon Code</th>
                <th class="pd-y-5">Quantity</th>
                <th class="pd-y-5">Current QNT</th>
                <th class="pd-y-5">Expires</th>
                <th class="pd-y-5 tx-center">Coupon Option</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="pd-l-20">
                  <a href="#">Long weekend promo(20% off)</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">QWEW2434</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Unlimited</a>
                </td>
                
                <td class="valign-middle"><span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span></td>
                <td>02-11-2021</td>
                <td class="valign-middle tx-center">
                  <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                  <a class="btn btn-outline-warning btn-sm" href="#">Edit</a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <a href="#">Student Discount</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">QW2345234</a>
                  
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">20</a>
                </td>
                
                <td class="valign-middle"><span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span></td>
                <td>20-02-2021</td>
                <td class="valign-middle tx-center">
                  <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                  <a class="btn btn-outline-warning btn-sm" href="#">Edit</a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <a href="#">Summer Sale</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">QWwerW2434</a>
                  
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">210</a>
                </td>
              
                <td class="valign-middle"><span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span></td>
                <td>28-02-2021</td>
                <td class="valign-middle tx-center">
                  <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                  <a class="btn btn-outline-warning btn-sm" href="#">Edit</a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <a href="#">50% off two Months</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">WTRE43654</a>
                  <span class="tx-11 d-block">
                </span></td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">500</a>
                </td>
              
                <td class="valign-middle"><span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span></td>
                <td>12-03-2021</td>
                <td class="valign-middle tx-center">
                  <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                    <a class="btn btn-outline-warning btn-sm" href="#">Edit</a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <a href="#">Speceal customer offer</a>
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">QRWE543</a>
                  <span class="tx-11 d-block">
                </span></td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Unlimited</a>
                </td>
              
                <td class="valign-middle"><span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span></td>
                <td>01-06-2021</td>
                <td class="valign-middle tx-center">
                  <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                <a class="btn btn-outline-warning btn-sm" href="#">Edit</a>
                </td>
              </tr>
            </tbody>

          </div>
        </table>      

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>

