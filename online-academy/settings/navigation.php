
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="../" class="simple-text">
                    Website Settings
                </a>
            </div>

            <ul class="nav">
                <li class="<?php echo ($page == "home" ? "active" : "")?>">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="<?php echo ($page == "live-courses" ? "active" : "")?>">
                    <a href="live-courses.php">
                        <i class="pe-7s-film"></i>
                        <p>Live Courses</p>
                    </a>
                </li>
                
                <li class="<?php echo ($page == "featured" ? "active" : "")?>">
                    <a href="featured.php">
                        <i class="pe-7s-more"></i>
                        <p>Featured</p>
                    </a>
                </li> 
                
                <li class="<?php echo ($page == "whychooseus" ? "active" : "")?>">
                    <a href="whychooseus.php">
                        <i class="pe-7s-video"></i>
                        <p>Why Choose Us</p>
                    </a>
                </li>                
                
                <li class="<?php echo ($page == "our-team" ? "active" : "")?>">
                    <a href="our-team.php">
                        <i class="pe-7s-users"></i>
                        <p>Our Team</p>
                    </a>
                </li>
                
<!--                <li class="<?php echo ($page == "profile" ? "active" : "")?>">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="<?php echo ($page == "icons" ? "active" : "")?>">
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li class="<?php echo ($page == "notifications" ? "active" : "")?>">
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>-->
				<li class="active-pro">
                    <a href="../">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>