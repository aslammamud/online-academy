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
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<div class="">
         <div class="row">
      
    <div class="col-12" style="background:#B7D3B5;">

    <h3 class="title myfont fs26 pl-5 pt-5"><a href="#">আলামিন জামান</a></h3>

      <ul class="print-hidden">
              <li class=""><a href="my-courses.php">My Courses</a></li>
              <li class=""><a href="wishlist.php">Wishlists</a></li>

          

              <li class=""><a href="purches-history.php">Purchase history</a></li>

              <li class="nav-link active"><a href="student-panel.php">Profile</a></li>
            </ul>

        </div>
    </div>
<div class="tab" style="background:#ccc;">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
<div class="container mt-5 mb-5">
  <div class="row">
   <div class="col-sm">
     <div class="card border-white bg-white shadow">
            <div class="card-img">
              <img class="p-2 " src="images/ABC-Academy-sir2.png" alt="..." style="border-radius: 15px;">
            </div>
            <a href="web-design-development-course.php">
            <h6 class="card-title px-3 myfont fs36"><strong> ঘরে বসে স্পোকেন ইংলিশ  </strong></h6></a>
            <h6 class="card-title text-dark px-3">Avi Sheikh</h6>
             <div class="row">
              <div class="col-sm-12 px-4 d-flex justify-content-between">
                <div>
                  <p class="mentor-payment text-success h5 ml-1"> ৳2000  </p>
                </div>
                <div class="">
                  <i class="fa fa-play-circle text-danger mb-2 fa-2x mr-1" aria-hidden="true"></i> 24 Class
                </div>
              </div>
                
            </div>
          </div>
    </div>
    <div class="col-sm">
     <div class="card border-white bg-white shadow">
            <div class="card-img">
              <img class="p-2 " src="images/ABC-Academy-sir2.png" alt="..." style="border-radius: 15px;">
            </div>
            <a href="#">
            <h6 class="card-title px-3 myfont fs36"><strong> ঘরে বসে স্পোকেন ইংলিশ  </strong></h6></a>
            <h6 class="card-title text-dark px-3">Avi Sheikh</h6>
             <div class="row">
              <div class="col-sm-12 px-4 d-flex justify-content-between">
                <div>
                  <p class="mentor-payment text-success h5 ml-1"> ৳2000  </p>
                </div>
                <div class="">
                  <i class="fa fa-play-circle text-danger mb-2 fa-2x mr-1" aria-hidden="true"></i> 24 Class
                </div>
              </div>
                
            </div>
          </div>
    </div>
      <div class="col-sm">
     <div class="card border-white bg-white shadow">
            <div class="card-img">
              <img class="p-2 " src="images/ABC-Academy-sir2.png" alt="..." style="border-radius: 15px;">
            </div>
            <a href="#">
            <h6 class="card-title px-3 myfont fs36"><strong> ঘরে বসে স্পোকেন ইংলিশ  </strong></h6></a>
            <h6 class="card-title text-dark px-3">Avi Sheikh</h6>
             <div class="row">
              <div class="col-sm-12 px-4 d-flex justify-content-between">
                <div>
                  <p class="mentor-payment text-success h5 ml-1"> ৳2000  </p>
                </div>
                <div class="">
                  <i class="fa fa-play-circle text-danger mb-2 fa-2x mr-1" aria-hidden="true"></i> 24 Class
                </div>
              </div>
                
            </div>
          </div>
    </div>
   </div>
  </div>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</div>
<div class="container mt-5">
          <div class="row mt-5">
              <div class="col-xl-3">
                   <div class="card">
                  <div class="card-header bg-light">
                    <div class="row ">
                      <div class="col-12 text-center ">
                      <img class="rounded-circle m-auto" alt="student image" src="images/f91b1059aaad2d00d608a93abce78897.jpg" height="150px" width="150px" >
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush  ">
                      
                      <tbody>
                        <tr>
                          <th scope="row">
                            <a class="h3 m-4" href=""> <strong> Ovi Sheikh </strong> </a>
                          </th>
                        <tr>
                          <th scope="row">
                             <a class="h4 m-4" href=""> Profile </a>
                          </th>
                        </tr>
                        <tr>
                          <th scope="row">
                             <a class="h4 m-4" href="">  Account </a>
                          </th> 
                        </tr>
                        <tr>
                          <th scope="row">
                            <a class="h4 m-4"  href="">   Photo </a>
                          </th>
                        </tr>
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
              <div class="col-xl-8">
                <div class="card">
                  <div class="card-header border-0 bg-light">
                    <div class="row text-center">
                      <div class="col-12 ">
                        <h3 class="mb-0 mt-4"><strong> Profile </strong></h3>

                        <p class="mt-1">Please fille your valid information below</p>
                          <hr>
                      </div>
                     
                    </div>
                  </div>
                  <div class="table-responsive">
                    <!-- Projects table -->
                    <div class="card-body bg-light">
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">First Name</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="name" placeholder="Enter First Name" onchange="update_sku()" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Last Name</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="name" placeholder="Enter Last Name" onchange="update_sku()" required="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Biography</label>
                    <div class="col-md-8">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Social media Link</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="name" placeholder="Enter social media link" onchange="update_sku()" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Social media Link</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="name" placeholder="Enter social media link" onchange="update_sku()" required="">
                    </div>
                  </div>
                   <div class="form-group row ml-auto mt-5">
                    <div class="col-md- m-auto">
                      <button type="button" class="btn btn-success">Save</button>
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