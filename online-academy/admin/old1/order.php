 <?php
include 'header.php';

// Select query for total orders
$select_query = "SELECT * FROM orders";
$select_order_info = mysqli_query($con, $select_query);

// select query for Pending orders
$select_query_pending_order = "SELECT id FROM orders WHERE order_status = 'Pending'";
$pending_order_from_db = mysqli_query($con, $select_query_pending_order);

// select query for On-delivery orders
$select_query_ondelivery_order = "SELECT id FROM orders WHERE order_status = 'On delivery'";
$ondelivery_order_from_db = mysqli_query($con, $select_query_ondelivery_order);

// select query for Confirmed/successfull orders
$select_query_confirm_order = "SELECT id FROM orders WHERE order_status = 'Delivered'";
$confirm_order_from_db = mysqli_query($con, $select_query_pending_order);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      
      <nav class="breadcrumb sl-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="order.php">Orders</a></li>
          <li class="breadcrumb-item active" aria-current="page">Order page</li>
        </ol>
      </nav>

      <div class="col-lg-10 sl-pagebody m-auto">

          <div class="card">
              <div class="card-header">
                  <h5 class="mb-0 h4">Order History</h5>
              </div>
            <div class="card-body">
                <table class="table aiz-table mb-0 footable footable-1 breakpoint-lg table-bordered" style="">
                  <tbody>
                    <tr>
                      <td class="footable-first-visible text-header h6" style="display: table-cell;">Total orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$select_order_info->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="total-order.php">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">Pending orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$pending_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="pending-order.php">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">On delivery:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$ondelivery_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="ondelivery-order.php">Show Details</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="footable-first-visible h6" style="display: table-cell;">Cancelled orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"> 0 </td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="cancel-order.php">Show Details</a>
                      </td>
                    </tr>
                    <tr>  
                      <td class="footable-first-visible h6" style="display: table-cell;">Successful orders:</td>
                      <td class="footable-last-visible text-dark" style="display: table-cell;"><?=$confirm_order_from_db->num_rows?></td>
                      <td class="footable-last-visible text-center" style="display: table-cell;">
                        <a class="btn btn-outline-primary" href="success-order.php">Show Details</a>
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>

        <div class="text-center mt-5">
          <a class="btn btn-md bg-warning text-white" href="total-order.php">Show All Order Details</a>
        </div>




      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel --> 

  


    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>
