
<!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->

      <div class="row ml-auto">
        <div class="col-lg-12">

          <div class="input-group input-group-search">
            <input type="text" class="form-control" placeholder="Search Here" onkeyup="getCoursesBySearchString(this.value)">
            <div class="input-group-append">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div><!-- input-group -->
          
        </div>
      </div>

      <div class="sl-header-right">
	  <?php if(isset($_SESSION['abca_sa_signed_in']) AND $_SESSION['abca_sa_signed_in'] == true){
	echo		  
        '<nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">'.$di_stf_name.'</span>
              <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200 p-0">
              <ul class="list-unstyled user-profile-nav">
                <li style="background-color: #03a9f4;"><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li style="background-color: #03a9f4;"><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li style="background-color: #03a9f4;"><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li style="background-color: #03a9f4;"><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>';
		
	  }else {
		  
	  }
	?>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->