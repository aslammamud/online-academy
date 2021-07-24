<?php

  include ('student-header.php');

?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar">
                        <div class="user-box">
                            <img src="../images/alamin.jpg" alt="" class="img-fluid">
                            <div class="name">AL Amin Hossain</div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                                <li><a href="profile.php">Profile</a></li>
                                <li class="active"><a href="account-settings.php">Account</a></li>
                                <li><a href="photo-settings.php">Photo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title">Account</div>
                            <div class="subtitle">Edit your account settings.</div>
                        </div>
                        <form action="##" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="student@example.com">
                                    </div>
                                </div>
                                <div class="password-group">
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter current password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new_password" placeholder="Enter new password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Re-type your password">
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

<?php include 'footer.php'; ?>

