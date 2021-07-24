<?php
  include ('student-panel-header.php');
?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar">
                        <div class="user-box">
                            <img src="../images/alamin.jpg" alt="" class="img-fluid">
                            <div class="name">Signe Thompson</div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="account-settings.php">Account</a></li>
                                <li class="active"><a href="photo-settings.php">Photo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title">Photo</div>
                            <div class="subtitle">Update your photo.</div>
                        </div>
                        <form action="##" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image">Upload image:</label>
                                        <input type="file" class="form-control" name="user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" class="btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>

