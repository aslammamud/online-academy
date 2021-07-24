<?php
    include ('../header.php');
?>

<section id="add-course">
    <div class="container">
        <div class="row my-5">
            <!-- Instractor panel Left side-bar start -->
            <?php include ('left_sidebar.php'); ?>
            <!-- Instractor panel Left side-bar End -->

            <div class="col-md-8">

                <div class="card pl-4 pt-4 pb-2 bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <p> <i class="fa fa-arrows-alt text-secondary pr-2 h3" aria-hidden="true"></i>
                                <strong class="text-secondary h3">Sales Reports</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="mb-3 header-title">Sales report</h4>
                        <div class="row justify-content-md-center">
                            <div class="col-xl-6">
                                <form class="form-inline" action="##" method="get">
                                <div class="col-xl-10">

                                    <div class="form-group">
                                        <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue" data-cancel-class="btn-light" style="width: 100%;">
                                            <i class="fa fa-calendar"></i>&nbsp;
                                            <span id="selectedValue">Last Month Sales History</span> <i class="mdi mdi-menu-down"></i>
                                        </div>
                                        <input id="date_range" type="hidden" name="date_range" value="01 March, 2021 - 31 March, 2021">
                                    </div>

                                </div>
                                <div class="col-xl-2">
                                    <button type="submit" class="btn btn-info" id="submit-button" onclick="update_date_range();"> Filter</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive-sm mt-4">
                            <div id="sales-report-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="sales-report-datatable_length">
                                        <label>
                                            Show 
                                            <select name="sales-report-datatable_length" aria-controls="sales-report-datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="sales-report-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sales-report-datatable"></label></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                                    <table id="sales-report-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="sales-report-datatable_info" style="position: relative;">
                                        <thead class="bg-info text-white">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="sales-report-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Course name: activate to sort column descending" style="width: 590.812px;">Course name</th>
                                                <th class="sorting" tabindex="0" aria-controls="sales-report-datatable" rowspan="1" colspan="1" aria-label="Instructor revenue: activate to sort column ascending" style="width: 241.812px;">Instructor revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeU odd bg-white" role="row">
                                                <td class="sorting_1">
                                                    <strong><a href="#" target="_blank">How To Shoot B-Roll Footage with Peter McKinnon</a></strong><br>
                                                        <small class="text-muted">
                                                            <strong>Enrolled student</strong>: Naomi Hill
                                                        </small><br>
                                                    <small class="text-muted"><strong>Enrolment date</strong>: Sun, 14-Mar-2021 12:00:00</small>
                                                </td>
                                                <td>
                                                    $1260<br>
                                                    <small class="text-muted"><strong>Total amount</strong>: $1800</small>
                                                </td>
                                            </tr>
                                            <tr class="gradeU even" role="row">
                                                <td class="sorting_1">
                                                    <strong><a href="#" target="_blank">How To Shoot B-Roll Footage with Peter McKinnon</a></strong><br>
                                                        <small class="text-muted">
                                                            <strong>Enrolled student</strong>: Signe Thompson
                                                        </small><br>
                                                    <small class="text-muted"><strong>Enrolment date</strong>: Sun, 14-Mar-2021 12:00:00</small>
                                                </td>
                                                <td>
                                                    $1260<br>
                                                    <small class="text-muted"><strong>Total amount</strong>: $1800</small>
                                                </td>
                                            </tr>
                                            <tr class="gradeU odd bg-white" role="row">
                                                <td class="sorting_1">
                                                    <strong><a href="#" target="_blank">How to shoot cinematic tech videos like Apple</a></strong><br>
                                                    <small class="text-muted">
                                                        <strong>Enrolled student</strong>: Naomi Hill                                                                                    </small><br>
                                                    <small class="text-muted"><strong>Enrolment date</strong>: Sun, 14-Mar-2021 12:00:00</small>
                                                </td>
                                                <td>
                                                    $367<br>
                                                    <small class="text-muted"><strong>Total amount</strong>: $524</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="row mt-4 text-center">
                                    <div class="col-sm-12 col-md-7">
                                        <!-- Showing 1 to 3 of 3 entries -->
                                    </div>

                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_paginate paging_simple_numbers" id="course-datatable-server-side_paginate">
                                            <ul class="pagination text-right">
                                                <li class="paginate_button page-item previous disabled" id="course-datatable-server-side_previous">
                                                    <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="1" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="course-datatable-server-side_next">
                                                    <a href="#" aria-controls="course-datatable-server-side" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</section>



<?php
    include ('../footer.php');
?>

