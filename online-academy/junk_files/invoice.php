<?php include 'header.php'; ?>
<style>
.page-title {
font-size: 30px;
font-weight: 400;
line-height: 1.287;
margin: 0;
color: #fff;
}
.print-hidden{
margin: 0;
padding: 0;
list-style: none;
margin-top: 20px;
display: block;
list-style-type: disc;
margin-block-start: 1em;
margin-block-end: 1em;
margin-inline-start: 0px;
margin-inline-end: 0px;
padding-inline-start: 40px;
}
.print-hidden li{
display: inline-block;
margin-right: 30px;
text-align: -webkit-match-parent;
}
.print-hidden li a{
color: #fff;
}
.user-dashboard-sidebar {
width: 18%;
border-right: 1px solid #dedfe0;
}
.user-dashboard-sidebar .user-box {
text-align: center;
padding: 10px;
}
.box-sizing: border-box;
}
.user-dashboard-sidebar .user-dashboard-menu ul {
padding: 0;
margin: 0;
list-style: none;
}
ul {
list-style-type: disc;
}
.section.page-header-area.my-course-area ul li.active a, section.page-header-area.my-course-area ul li a:hover {
border-bottom-color: hsla(0,0%,100%,.7);
}
.section.page-header-area.my-course-area ul li a {
padding: 0 0 5px;
border-bottom: 6px solid hsla(0,0%,100%,0);
color: #fff;
display: block;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 bg-secondary">
      <h3 class="mt-5 page-title ml-4"> User Profile</h3>
      <ul class="print-hidden">
        <li class=""><a href="my-courses.php">My Courses</a></li>
        <li class=""><a href="wishlist.php">Wishlists</a></li>
       
        <li class=""><a href="purches-history.php">Purchase history</a></li>
        <li class="nav-link active"><a href="student-panel.php">Profile</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row mt-5 ">
    <div class="col-xl-8 m-auto">
      <div class="card">
        <div class="card-header border-0 bg-white">
          <div class="row text-center">
            <div class="col-12 ">
              <h3 class="mb-0 mt-4"><strong> Invoice </strong></h3>
              <p class="mt-1">Please check Your Invoice</p>
              <hr>
            </div>
            
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <div class="card-body bg-white">
            <div class="form-group row">
              <img src="images/ecourse-logo.png" alt="logo">
              <div class="col-md-3 ml-auto">
                <p class="h4"> <strong> order:</strong>#23423</p>
                <p class="h4"> <strong> Issued:</strong>20/2/2021</p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-from-label"> <h4><strong> Invoice Form</strong></h4>
                <p>Simon Avishek</p>
                <p>Farmgate, Razabazar</p>
                <p>Dhaka, Bangladesh</p>
              </label>
              
              <div class="col-md-3 ml-auto">
                <label> <h4><strong> Invoice To</strong></h4>
                  <p>Ovi sheikh</p>
                  <p>Dhanmondi,15, songkor road</p>
                  <p>Dhaka, Bangladesh</p>
                </label>
                
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-from-label"> <h4><strong> Payment Method</strong></h4>
                <p>Debit Card</p>
                <p>XXXXXXXXXXXX-2541</p>
                <p>AB Bank</p>
              </label>
              
            </div>
            <div class="form-group row">
              
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"><strong> DESCRIPTION </strong></th>
                    <th scope="col"><strong>QUATITY</strong></th>
                    <th scope="col"><strong>VAT</strong></th>
                    <th scope="col"><strong>TOTAL</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">General consoltation</th>
                    <td>1</td>
                    <td>$0</td>
                    <td>@$250</td>
                  </tr>
                  <tr>
                    <th scope="row">Video call booking</th>
                    <td>1</td>
                    <td>$0</td>
                    <td>$100</td>
                  </tr>
                
                </tbody>
              </table>
            </div>
            <div class="form-group row">
              <div class="col-md-3 ml-auto">
                <p><strong> Sub Total </strong>  $250</p> 
                <hr>
                <p><strong> Discount </strong>  -20</p>
                <hr> 
                <p><strong> Total Ammount </strong>  250</p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-9 col-from-label"> <h4><strong> Other information</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
               
               
              </label>
              
            </div>
            <div class="form-group row ml-auto mt-5">
              <div class="col-md- m-auto">
                <button type="button" class="btn btn-success">Print</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>