<?php
include 'header.php';

// $user_select_query = "SELECT * FROM user";
// $user_info = mysqli_query($con, $user_select_query);



?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="customer-list.php">Instructor List</a>
      </nav>

      <div class="col-lg-12 sl-pagebody m-auto">

        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Instructor List</h4>
                <div class="table-responsive-sm mt-4">
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="basic-datatable_length">
                                    <label>
                                        <h6>Total Instructors</h6>
                                        <div class="card bg-primary text-center mt-2 p-4 text-white">
                                            <h5>12</h5>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-3 ml-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Instructor" onkeyup="getCoursesBySearchString(this.value)">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                            <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                            <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8.8125px;">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 38.8125px;">Photo</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 78.8125px;">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 139.812px;">Phone</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 139.812px;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Enrolled courses: activate to sort column ascending">Course Provide</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Enrolled courses: activate to sort column ascending">Course Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 49.8125px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>
                                            <img src="img/img6.jpg" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                                        </td>
                                        <td>Signe Thompson</td>
                                        <td>01302509844</td>
                                        <td>saiful@gmail.com</td>
                                        <td> 7 </td>
                                        <td>
                                            <ul>
                                                <li>User Experience Design Essentials - Adobe XD</li>
                                                <li>WordPress Theme Development with Bootstrap</li>
                                                <li>Adobe Illustrator CC - Essentials Training</li>
                                            </ul>
                                        </td>
                                        <td class="">
                                            <div class="dropright dropright mt-3">
                                                <a class="btn btn-sm btn-outline-primary btn-rounded mt-1" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a class="btn btn-sm btn-outline-danger btn-rounded mt-1" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">2</td>
                                        <td>
                                            <img src="img/img6.jpg" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                                        </td>
                                        <td>Signe Thompson</td>
                                        <td>01302509844</td>
                                        <td>saiful@gmail.com</td>
                                        <td> 3 </td>
                                        <td>
                                            <ul>
                                                <li>User Experience Design Essentials - Adobe XD</li>
                                                <li>WordPress Theme Development with Bootstrap</li>
                                                <li>Adobe Illustrator CC - Essentials Training</li>
                                            </ul>
                                        </td>
                                        <td class="">
                                            <div class="dropright dropright mt-3">
                                                <a class="btn btn-sm btn-outline-primary btn-rounded mt-1" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a class="btn btn-sm btn-outline-danger btn-rounded mt-1" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">3</td>
                                        <td>
                                            <img src="img/img6.jpg" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                                        </td>
                                        <td>Signe Thompson</td>
                                        <td>01302509844</td>
                                        <td>saiful@gmail.com</td>
                                        <td> 5 </td>
                                        <td>
                                            <ul>
                                                <li>User Experience Design Essentials - Adobe XD</li>
                                                <li>WordPress Theme Development with Bootstrap</li>
                                                <li>Adobe Illustrator CC - Essentials Training</li>
                                            </ul>
                                        </td>
                                        <td class="">
                                            <div class="dropright dropright mt-3">
                                                <a class="btn btn-sm btn-outline-primary btn-rounded mt-1" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a class="btn btn-sm btn-outline-danger btn-rounded mt-1" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <!-- Showing 1 to 5 of 5 entries -->
                        </div>
                            <div class="col-sm-3 col-md-2 mt-4 ml-auto">
                                <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                                    <ul class="pagination pagination-rounded">
                                        <li class="paginate_button page-item previous disabled" id="basic-datatable_previous">
                                            <a href="#" aria-controls="basic-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-chevron-left"></i></a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="basic-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next disabled" id="basic-datatable_next">
                                            <a href="#" aria-controls="basic-datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body-->
        </div>


      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->       
    <!-- ########## END: MAIN PANEL ########## -->

<?php
  require_once 'footer.php';
?>