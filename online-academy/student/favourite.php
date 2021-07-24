<?php
  $nav_page="favourite";
  include ('student-panel-header.php');
?>

<section class="my-courses-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="my-course-search-bar">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search my courses" onkeyup="getCoursesBySearchString(this.value)">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row no-gutters" id="my_wishlists_area">
            <div class="col-lg-3">
                <div class="course-box-wrap">
                    <div class="course-box">
                        <div class="course-image">
                            <a href=""><img src="../images/course-image/courses-img1.jpg" alt="" class="img-fluid"></a>
                            <div class="instructor-img-hover">
                                <a href="#"><img src="../images/alamin.jpg" alt=""></a>
                                <span>24 Lessons</span>
                                <span>24:10:22 Hours</span>
                            </div>
                            <div class="wishlist-add wishlisted">
                                <button type="button" data-toggle="tooltip" data-placement="left" title="" style="cursor : auto;" onclick="handleWishList(this)" id="12" data-original-title="">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                        </div>
                        <div class="course-details">
                            <a href="#"><h5 class="title">লারাভেল ডেভেলপমেন্ট শিখুন ঘরে বসে..</h5></a>
                            <p class="instructors">Sayed Amin</p>
                            <p class="price text-right"><small>৳600</small>৳400</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="course-box-wrap">
                    <div class="course-box">
                        <div class="course-image">
                            <a href=""><img src="../images/course-image/courses-img2.jpg" alt="" class="img-fluid"></a>
                            <div class="instructor-img-hover">
                                <a href="#"><img src="../images/khalid.jpg" alt=""></a>
                                <span>24 Lessons</span>
                                <span>24:10:22 Hours</span>
                            </div>
                            <div class="wishlist-add wishlisted">
                                <button type="button" data-toggle="tooltip" data-placement="left" title="" style="cursor : auto;" onclick="handleWishList(this)" id="12" data-original-title="">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                        </div>
                        <div class="course-details">
                            <a href="#"><h5 class="title">ওয়ার্ডপ্রেস ডেভেলপমেন্ট শিখুন ঘরে বসে..</h5></a>
                            <p class="instructors">Ovi Sheikh</p>
                            <p class="price text-right"><small>৳600</small>৳400</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="course-box-wrap">
                    <div class="course-box">
                        <div class="course-image">
                            <a href=""><img src="../images/course-image/courses-img3.jpg" alt="" class="img-fluid"></a>
                            <div class="instructor-img-hover">
                                <a href="#"><img src="../images/f91b1059aaad2d00d608a93abce78897.jpg" alt=""></a>
                                <span>24 Lessons</span>
                                <span>24:10:22 Hours</span>
                            </div>
                            <div class="wishlist-add wishlisted">
                                <button type="button" data-toggle="tooltip" data-placement="left" title="" style="cursor : auto;" onclick="handleWishList(this)" id="12" data-original-title="">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                        </div>
                        <div class="course-details">
                            <a href="#"><h5 class="title">ওয়ার্ডপ্রেস ডেভেলপমেন্ট শিখুন ঘরে বসে..</h5></a>
                            <p class="instructors">Sayed Amin</p>
                            <p class="price text-right"><small>৳600</small>৳400</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php'; ?>

