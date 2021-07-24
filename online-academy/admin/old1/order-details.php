 <?php
include 'header.php';

$order_id = $_GET['id'];

$select_query = "SELECT * FROM orders WHERE id = '$order_id'";
$select_order_info = mysqli_query($con, $select_query);
$select_order_info_after_assoc = mysqli_fetch_assoc($select_order_info);



?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <nav class="breadcrumb sl-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="order.php">Orders</a></li>
          <li class="breadcrumb-item active" aria-current="page">order details</li>
        </ol>
      </nav>

        <div class="col-lg-12 sl-pagebody m-auto">

            <!-- Show Bootstrap Modal page Start -->
            <div class="row m-auto">
                <div class="col-lg-12 modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Order id: <?= "EB" . "10119" . "ZA" . "-" . $select_order_info_after_assoc['id']?></h4>

                    <a href="order.php" type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                    </a>
                    
                </div><!-- .modal-header -->

                <div class="modal-body">

                    <div class="py-4">
                    <div class="row gutters-5 text-center aiz-steps">
                        <div class="col  active ">
                            <div class="icon">
                                <i class="tx-success tx-30 fa fa-first-order" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12">Order placed</div>
                        </div>
                        <div class="col active">
                            <div class="icon">
                                <i style="<?php if($select_order_info_after_assoc['order_status'] == "On delivery"){
                                    echo "color: #2fb07a";
                                }else{ echo "color: #3d4245"; } ?>" class="tx-30 fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12 text-dark">On delivery</div>
                        </div>
                        <div class="col active">
                            <div class="icon">
                                <i style="<?php if($select_order_info_after_assoc['order_status'] == "Delivered"){
                                    echo "color: #2fb07a";
                                }else{ echo "color: #3d4245"; } ?>" class="tx-30 tx-30 fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="title fs-12 text-dark">Delivered</div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card mt-4">
                        <div class="card-header bg-white">
                            <b class="fs-15 text-dark h5">Order Summary</b>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order Code:</td>
                                            <td class="text-dark"><?= "EB" . "10119" . "ZA" . "-" . $select_order_info_after_assoc['id']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Customer id:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['customer_id']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Customer Name:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['name']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Email:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['email']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Shipping address:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['address']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order date:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['order_date']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Order status:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['order_status']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Total order amount:</td>
                                            <td class="text-dark">TK : <?=$select_order_info_after_assoc['amount_price']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Contact:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['phone']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Reference:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['reference']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Payment Method:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['pmode']?></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50 fw-600 h6">Transaction id:</td>
                                            <td class="text-dark"><?=$select_order_info_after_assoc['transaction_code']?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card mt-4">
                                    <div class="card-header bg-info">
                                    <b class="fs-15 text-white">Order Details</b>
                                    </div>
                                    <div class="card-body bg-secondary pb-0">
                                        <table class="table table-borderless table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th width="40%">Product</th>
                                                    <th>Variation</th>
                                                    <th>Quantity</th>
                                                    <th>Delivery Type</th>
                                                    <th>Price</th>
                                                    <th>Refund</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                    <a href="http://localhost/ebazar/product-details.php" target="_blank"><?=$select_order_info_after_assoc['products']?></a>
                                                    </td>
                                                    <td class="text-dark">
                                                    Aqua-36-20gm
                                                    </td>
                                                    <td class="text-dark">
                                                    1
                                                    </td>
                                                    <td class="text-dark">
                                                    Home Delivery
                                                    </td>
                                                    <td class="text-dark">330</td>
                                                    <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" onclick="send_refund_request('1821')">Send</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card mt-4">
                                    <div class="card-header bg-info">
                                    <b class="fs-15 text-white">Order Ammount</b>
                                    </div>
                                    <div class="card-body bg-secondary">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Subtotal</td>
                                                    <td class="text-right">
                                                        <span class="strong-600 text-dark">TK : <?=$select_order_info_after_assoc['amount_price']?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Shipping</td>
                                                    <td class="text-right text-dark">
                                                        <span class="text-italic text-dark">$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Tax</td>
                                                    <td class="text-right text-dark">
                                                        <span class="text-italic">$10.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Coupon</td>
                                                    <td class="text-right text-dark">
                                                        <span class="text-italic">$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50 fw-600 text-dark">Total</td>
                                                    <td class="text-right text-dark">
                                                        <strong>
                                                            <span>$340.00
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="py-4 mt-4 col-sm-10 m-auto">
                            <form action="order-details-post.php" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <!-- This input field catch for unique id -->
                                            <input type="hidden" value="<?=$select_order_info_after_assoc['id']?>" name="id">

                                            <div class="col-sm-6 mt-4 mb-4">
                                            <label class="text-dark h6" for="inputState">Payment Status</label>
                                            <select id="inputState" class="form-control" name="payment_status">
                                                <option selected>
                                                    <?php
                                                        if($select_order_info_after_assoc['user_pay_status'] == 1){
                                                            echo "Paid";
                                                        }
                                                        else{
                                                            echo "Unpaid";
                                                        }
                                                    ?>
                                                </option>
                                                <option>Unpaid</option>
                                                <option>Paid</option>
                                            </select>
                                            </div>
                                            <div class="col-sm-6 mt-4 mb-4">
                                            <label class="text-dark h6" for="inputState">Delivery Status</label>
                                            <select id="inputState" class="form-control" name="order_status">
                                                <option selected><?=$select_order_info_after_assoc['order_status']?></option>
                                                <option>Pending</option>
                                                <option>On delivery</option>
                                                <option>Delivered</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                </div>
        
                                <!-- .modal-footer -->
                                <div class="modal-footer">
                                <a href="pending-order.php" type="submit" class="btn bg-warning text-white">Cancel</a>
                                <button type="submit" value="submit" class="btn btn-success">
                                    Save Change
                                </button>
                            </form>
                    </div>
                    <!-- .modal-footer -->

                </div><!-- .modal-body -->
                
                </div>
            </div><!-- /.modal-dialog -->
            <!-- Show Bootstrap Modal page End -->

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>

