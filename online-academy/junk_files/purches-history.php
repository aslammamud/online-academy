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

<div class="container-fluid mb-5"> 
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

    <div class="col-md-12 mt-4">
      <div class="row">

        <div class="col-md-5">
          <h2>Purches History</h2>
        </div>

        <div class="col-md-2 text-center">
          <p>Date</p>
        </div>

        <div class="col-md-2 text-center">
          <p>Total price</p>
        </div>

        <div class="col-md-2 text-center">
          <p>Payment type</p>
        </div>

        <div class="col-md-1 text-center">
          <p>Actions</p>
        </div>

      </div>

      <div class="row mt-4">
          <div class="col-md-11 m-auto">
            <div class="row bg-light shadow">

              <div class="col-md-2">
                <img class="img-fluid m-2" src="images/img11.jpg" alt="img not found"  height="150px" width="150px" style="border-radius: 20px;">
              </div> 

              <div class="col-md-3 mt-4">
                <h4><a href="#">User Experience Design Essentials - Adobe XD UI UX Design</a></h4>
              </div>

              <div class="col-md-2">
                <p class="text-center mt-2">Sat, 27-Feb-2021</p>
              </div>

              <div class="col-md-2">
                <h5 class="text-center mt-2"><strong>$12</strong></h5>
              </div>

              <div class="col-md-2 mt-2">
                <p class="text-center">Paypal</p>
              </div>

              <div class="col-md-1">
                <a class="btn btn-sm btn-outline-info mt-2" href="invoice.php">Invoice</a>
              </div>

            </div>
          </div>

            <div class="col-md-11 m-auto">
            <div class="row bg-light shadow mt-4">

              <div class="col-md-2">
                   <img class="img-fluid m-2" src="images/img11.jpg" alt="img not found"  height="150px" width="150px" style="border-radius: 20px;">
              </div>

              <div class="col-md-3 mt-4">
                <h4><a href="#">User Experience Design Essentials - Adobe XD UI UX Design</a></h4>
              </div>

              <div class="col-md-2">
                <p class="text-center mt-2">Sat, 27-Feb-2021</p>
              </div>

              <div class="col-md-2">
                <h5 class="text-center mt-2"><strong>$12</strong></h5>
              </div>

              <div class="col-md-2 mt-2">
                <p class="text-center">Paypal</p>
              </div>

              <div class="col-md-1">
                <a class="btn btn-sm btn-outline-info mt-2" href="invoice.php">Invoice</a>
              </div>

            </div>
          </div>
      </div>

    </div>
    
    
</div>

<?php include 'footer.php'; ?>