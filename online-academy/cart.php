<?php
$page='single';
$dynamic_title = 'Shopping Cart';
include ('header.php');
$grand_total = 0;
                    
if(isset($_SESSION['CurrentCartSession']) && $_SESSION['CurrentCartSession'] != null){
                                               
    $cart_session = $_SESSION['CurrentCartSession'];

}else{
    $_SESSION['CurrentCartSession'] = generateRandomString();
    $cart_session = $_SESSION['CurrentCartSession'];
}

?>
  
<style>
.table-responsive {
    overflow: hidden;
}
  .cart_summary > thead,
.cart_summary > tfoot {
  background: #f8f8f8;
  font-size: 16px;
}
.cart_summary > tfoot strong {
  color: #e74c3c;
}
.cart_summary > thead > th {
  border-bottom-width: 1px;
  padding: 20px;
}

.cart_summary td {
  vertical-align: middle !important;
  padding: 20px 10px;
}
.cart_summary .table > tbody > tr > td,
.table > tbody > tr > th,
.cart_summary .table > tfoot > tr > td,
.table > tfoot > tr > th,
.cart_summary .table > thead > tr > td,
.table > thead > tr > th {
  padding: 10px;
}
.cart_summary img {
  max-width: 100px;
}
.cart_summary td.cart_product {
  width: 120px;
  padding: 15px;
}
.cart_summary .price {
  text-align: center;
  font-weight: 600;
}
.cart_summary .qty {
  text-align: center;
  width: 100px;
}
.cart_summary .qty input {
  text-align: center;
  max-width: 64px;
  margin: 0 auto;
  border-radius: 3px;
  border: 1px solid #e5e5e5;
  box-shadow: none;
  width: 50px;
}
.cart_summary .qty a {
  padding: 8px 10px 5px 10px;
  border: 1px solid #e8e6e2;
  display: inline-block;
  width: auto;
  margin-top: 5px;
}
.cart_summary .qty a:hover {
  background: #14b04f;
  color: #fff;
}
.cart_summary .action {
  text-align: center;
}
.cart_summary .action a {
  font-size: 12px;
  display: inline-block;
  line-height: 24px;
}
.cart_summary tfoot {
  text-align: right;
}
.cart_navigation {
  margin-top: 10px;
  float: left;
  width: 100%;
}
.table-bordered {
  border: 0px solid #ddd;
}
.table-bordered > tbody > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border: none;
  border-bottom: 1px solid #e5e5e5;
}
/******************************************
5. Service area
******************************************/

.our-features-box {
  overflow: hidden;
  width: 100%;
  margin: auto;
  padding: 15px 0 115px;
  background: #14b04f;
}
.our-features-box ul {
  list-style: none;
  margin: auto;
  padding: 0;
  border: none;
  overflow: hidden;
}
.our-features-box .seprator-line {
  width: 2% !important;
  text-align: center;
  border-left: 1px #eeeeee solid;
  height: 50px;
  margin-left: 2%;
}
.our-features-box li {
  float: left;
  margin-bottom: 0px;
  text-align: center;
  width: 30.5%;
  padding: 0;
  display: inline-block;
}
.our-features-box .feature-box {
  overflow: hidden;
  font-size: 13px;
  text-align: center;
  color: #ccc;
  line-height: 1.4em;
  font-weight: normal;
  text-transform: uppercase;
  padding: 0px 0px;
}
.our-features-box .feature-box h3 {
  font-size: 13px;
  letter-spacing: 0.5px;
  margin-bottom: 3px;
  margin-top: 5px;
  font-weight: 400;
  color: #ccc;
}
.our-features-box .feature-box .content {
  display: inline-block;
  text-align: left;
  text-transform: none;
}
.our-features-box .feature-box .content p {
  margin: 0px;
}
.our-features-box .feature-box span {
  display: inline-block;
  font-size: 16px;
  font-weight: normal;
  padding-top: 5px;
  text-transform: none;
  margin-right: 6px;
  color: #fff;
}
.our-features-box .feature-box i {
  display: inline-block;
  font-size: 16px;
  font-weight: normal;
  padding-top: 5px;
  text-transform: none;
  margin-right: 6px;
  color: #3acaf9;
  vertical-align: -2px;
}
.our-features-box .feature-box:hover h3,
.our-features-box .feature-box:hover i {
  color: #fff;
  cursor: default;
}
.service-text h2 {
  color: #333333;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 20px;
  letter-spacing: 0.5px;
  margin-bottom: 12px;
}
.service-text p {
  color: #333333;
  font-size: 12px;
  padding-bottom: 0;
  display: inline-block;
  padding: 0 5px;
}
.jtv-service-area {
  text-align: left;
  padding: 25px 0 25px;
}
.jtv-service-area .col-md-3 {
  padding-right: 8px;
}
.jtv-service-area .col-md-3:last-child {
  padding-right: 15px;
}
.jtv-service-area .block-wrapper {
  background: #fff;
  border: 1px #e8e8e8 solid;
  color: #333;
  padding: 15px;
  border-radius: 3px;
}
.icon-wrapper {
  width: 50px;
  height: 50px;
  float: left;
  text-align: center;
  line-height: 36px;
  font-size: 36px;
  margin-right: 5px;
}
.icon-wrapper i {
  color: #333;
}
.service-wrapper {
  overflow: hidden;
  zoom: 1;
  text-align: left;
}
.jtv-service-area .block-wrapper.return {
  background: #fff;
  border: 1px #e8e8e8 solid;
  color: #333;
}
.jtv-service-area .block-wrapper.ship {
  background: #fff;
  border: 1px #e8e8e8 solid;
  color: #333;
}
.jtv-service-area .block-wrapper.user {
  background: #fff;
  border: 1px #e8e8e8 solid;
  color: #333;
}
.jtv-service-area .block-wrapper .text-des {
  text-align: center;
  font-size: 12px;
  line-height: 18px;
  vertical-align: middle;
  padding: 0px;
}
.jtv-service-area .block-wrapper .text-des h3 {
  font-size: 14px;
  margin-bottom: 3px;
  display: inline-block;
  margin-left: 2px;
  vertical-align: top;
  font-weight: 600;
}
.jtv-service-area .block-wrapper .text-des p {
  margin: 0;
  font-size: 12px;
  font-weight: 400;
}
.bottom-service {
  background-color: #1fc0a0;
}
.bottom-service-box .box-outer > div.column:first-child {
  border-left: 0 none;
}
.bottom-service-box .service-box-center {
  padding: 30px 0;
  text-align: left;
}
.bottom-service-box .service-box-center .bottom-service-title {
  color: #fff;
  font-size: 20px;
  font-weight: 400;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  transition: all 0.35s ease 0s;
}
.bottom-service-box .service-box-center:hover .bottom-service-title {
  letter-spacing: 4px;
}
.bottom-service-box .service-box-center .description {
  color: #f8f8f8;
  font-size: 12px;
}
.bottom-service-box .box-outer > div {
  border-left: 1px solid rgba(255, 255, 255, 0.2);
}
.jtv-single-service {
  background-color: #f7f7f7;
  border: 1px solid #e5e5e5;
  border-bottom: none;
  padding: 18px;
  text-align: center;
}
.jtv-single-service:last-child {
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 19px;
}
.service-text h2 {
  color: #333333;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 20px;
  letter-spacing: 0.5px;
  margin-bottom: 12px;
}
.service-text p {
  color: #333333;
  font-size: 12px;
  padding-bottom: 0;
  display: inline-block;
  padding: 0 5px;
}

</style>
  <!-- Main Container -->
  <section>
    <div class="container">
      <div class="row">
          
            <div class="col-sm-12">
                <h2 class="text-left mt-5 mb-3">Cart</h2>
            </div>
			<div class="col-sm-12">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Course</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th  class="action"> <button id="cart_all_delete" style="background:#ff0000;" class="badge p-1"><i class="fa fa-trash-o"></i> Clear</button></th>
					</tr>
					
					<!-- before delete sweetalert code start -->
                    <!--script>
                      $(document).ready(function(){
                        $('#cart_all_delete').click(function(){
                          
                          Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't to clear your cart!",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, clear it'
                          }).then((result) => {
                            if (result.isConfirmed) {
                                if(window.location.href = "cart-action?clear=all"){
                                  Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'This cart is clear!',
                                    showConfirmButton: false,
                                    timer: 2000,
                                  })
                                }
                            }
                          });

                        });
                      });
                    </script-->
                    <!-- before delete sweetalert code End -->
					
                  </thead>
                  <tbody>
                    <?php

                    $result = getCartItemsBySession($cart_session);
                            
                    foreach ($result as $row):
                            $course_id = $row['ins_mc_id'];
                            $course_s = "SELECT * FROM instructor_made_courses WHERE ins_mc_id = '$course_id'"; 
                            $result_p_s = mysqli_query($con,$course_s);
                            $course = mysqli_fetch_assoc($result_p_s);
                            
                    ?>
                   <!-- ins_mc_title `ins_mc_language``ins_mc_orginal_fee``ins_mc_offer_fee``ins_mc_image``ins_mc_short_desc`-->
                    <tr>
                    <input type="hidden" class="course_id" value="<?= $row['ins_mc_id'] ?>">
                    <input type="hidden" class="course_price" value="<?= $course['ins_mc_offer_fee'] ?>">
                      <td><?=date("Y-m-d");?></td>
                      <td class="text-left"><?= $course['ins_mc_title'] ?></td>
                      <td class="text-left"><small><?= substr($course['ins_mc_short_desc'],0,50)."..." ?></small></td>
                      <td class="text-left"><span><?= number_format($course['ins_mc_offer_fee'],2); ?>  ৳ </span></td>
                      
                      <td class="action">
						    <?php
                                //itemRemover(id,title,column,table)
                                itemRemover($course_id,$course['ins_mc_title'],'ins_mc_id','cart');
                            ?>
						  </td>
                    </tr>  
                    
                    
                    <?php
                        $grand_total += $course['ins_mc_offer_fee'];
                        endforeach; 		
                    ?>
                    
                  </tbody>
				  
                  <tfoot>
                   <!-- <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total (products tax incl.)</td>
                      <td colspan="2"><?= number_format($grand_total,2); ?>  ৳ </td>
                    </tr>-->
                    <tr>
                      <td rowspan="2"></td>
                      <td rowspan="2"></td>
                      <td class="text-left"><strong>Cart Total</strong></td>
                      <td style="padding-left: 10px;" class="text-left" colspan="2"><strong><?= number_format($grand_total,2); ?>  ৳ </strong></td>
                    </tr>					
                  </tfoot>
                </table>
              </div>
        </div>
        <div class="col-sm-12">        
            <div class="row">

                       
                
                <?php
                    $count = countCartItemsBySession($cart_session);
                    if($count == 0){
                        notifier('You can not checkout with empty cart!',$alert=4,$time=4000);
                        echo ' <div class="col-sm-12 text-center"><a href="courses.php" class="btn btn-warning btn-lg mt-5 mb-3"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> &nbsp BROWSE COURSES &nbsp<i class="fa fa-folder-open-o" aria-hidden="true"></i></i></a></div>';
                    }else{
                        
                        echo ' <div class="col-sm-6 text-left"><a href="courses.php" class="btn btn-warning btn-sm mt-5 mb-3"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> &nbsp BROWSE COURSES &nbsp<i class="fa fa-folder-open-o" aria-hidden="true"></i></i></a></div>';
                    
                        echo '<div class="col-sm-6 text-right"><a href="checkout-payment.php" class="btn btn-success btn-sm mt-5 mb-3"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> &nbsp CHECKOUT &nbsp<i class="fa fa-money" aria-hidden="true"></i></a></div>';
                    }
                    
                ?>
                

            </div>
        </div>
        
    </div>
  </section>
    <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>All Bangladesh Shipping</h3>
                <p>On order over ৳ 999</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Monthly Discount</h3>
                <p>25% on order over ৳ 1499</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  
  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".product_quantity").on('change', function() {
      var $el = $(this).closest('tr');

      var product_id = $el.find(".product_id").val();
      var pprice = $el.find(".pprice").val();
      var product_quantity = $el.find(".product_quantity").val();
      location.reload(true);
      $.ajax({
        url: 'cart-action.php',
        method: 'post',
        cache: false,
        data: {
          product_quantity: product_quantity,
          product_id: product_id,
          product_price: product_price
        },
        success: function(response) {
          console.log(response);
        }
      });
    });
  });
  </script>
  
<!-- JS --> 
<?php
mysqli_close($con);
include ('footer.php');
?>