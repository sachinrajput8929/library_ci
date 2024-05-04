<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/appzia/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 06:49:29 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Books Stocks | Library</title>
    <?php $this->load->view('admin/include/css'); ?>

</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <?php $this->load->view('admin/include/header') ?>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <?php $this->load->view('admin/include/leftsidebar') ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <ul class="nav nav-pills nav-justified  shadow-lg mb-1 p-1 bg-white rounded" role="tablist" style="    background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgb(4 162 179 / 54%) 100%);">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link  active" data-bs-toggle="tab" href="#home-1" role="tab" style="font-weight: 900;font-size: 18px;">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">UNIVERSITY
                                    <img class="rounded-circle avatar-sm" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMOjWkSsQOrDQVkm5njzffiT_aBgW5TdbPpLkUkKTQ05_xZFYeXrn9LGID2g2PpMKenu0&usqp=CAU"></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab" style="font-weight: 900;font-size: 18px;">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">COURSES <img class="rounded-circle avatar-sm" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFLYK9go7Gi9VY20Uw5Ybx4Gca5sHBg0KxUgq9TsCecA&s"></span>
                            </a>
                        </li>

                    </ul>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">


                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <h3 style="color: #2e2665;font-weight: 700;">University List</h3>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6" style="text-align:right;">
                                                                <div class="btn-group mt-4 mt-md-0" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="font-weight: 700;   font-size: 17px;">Add University&nbsp;<i class=" ri-add-box-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel"><img class="rounded avatar-md" src="<?php echo base_url('assets/images/university.png'); ?>">&nbsp; Add University </h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" enctype="multipart/form-data">

                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label for="validationCustom01" class="form-label">University name</label>
                                                                                    <input type="text" name="university_name" class="form-control" id="validationCustom01" placeholder="University name" required />

                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label for="validationCustom01" class="form-label">Status</label>
                                                                                    <select class="form-select" name="status" aria-label="Default select example">
                                                                                        <option value="1">Active</option>
                                                                                        <option value="0">In-Active</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>


                                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th>Sr No</th>
                                                                    <th>University Name</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>


                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                foreach ($universities as $data) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i; ?></td>
                                                                        <td><?php echo $data->university_name; ?></td>
                                                                        <td>
                                                                            <?php if ($data->status == '1') { ?>
                                                                                <a href="<?php echo base_url('universitycourse/active/') ?>?activeid=<?php echo $data->id; ?>&status=<?php echo $data->status; ?>"> <span class="badge bg-info">Active</span></a>
                                                                            <?php } else { ?>
                                                                                <a href="<?php echo base_url('universitycourse/inactive/') ?>?inactiveid=<?php echo $data->id; ?>&status=<?php echo $data->status; ?>"> <span class="badge bg-danger">Inactive</span></a>
                                                                            <?php   } ?>
                                                                        <td>
                                                                            <a href="#" class="editUniversity" data-university-id="<?php echo $data->id; ?>" data-bs-toggle="modal" data-bs-target="#myModal3">
                                                                                <i style="font-size: 18px;color: #08bdd4;" class="fas fa-edit"></i>
                                                                            </a>
                                                                        </td>

                                                                    </tr>
                                                                <?php $i++;
                                                                } ?>

                                                                <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myModalLabel"><img class="rounded avatar-md" src="<?php echo base_url('assets/images/university.png'); ?>">&nbsp; Update University </h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form class="needs-validation" method="post" action="<?php echo base_url('universitycourse/updateuniversity/' . $data->id); ?>" enctype="multipart/form-data">

                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom01" class="form-label">Change University name</label>
                                                                                            <input type="text" name="university_name" class="form-control" value="<?php echo $university_name; ?>" id="uni_name" placeholder="University name" required />
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom01" class="form-label">Status</label>
                                                                                            <select class="form-select" id="uni_status" name="status" aria-label="Default select example">
                                                                                                <option value="1">Active</option>
                                                                                                <option value="0">In-Active</option>
                                                                                            </select>

                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="modal-footer">
                                                                                        <button class="btn btn-primary" name="updateuniversity" type="submit">Update University</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->




                                    </div>
                                    <div class="tab-pane" id="profile-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <h3 style="color: #2e2665;font-weight: 700;">Course List</h3>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6" style="text-align:right;">
                                                                <div class="btn-group mt-4 mt-md-0" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal2" style="font-weight: 700;   font-size: 17px;">Add Courses&nbsp;<i class=" ri-add-box-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel"><img class="rounded avatar-md" src="<?php echo base_url('assets/images/course.png'); ?>">&nbsp; Add Course </h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post">

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Session</label>
                                                                                        <select class="form-select" name="session" id="admission_session" aria-label="Default select example">
                                                                                            <option value="">Select Session</option>
                                                                                            <option value="3M">3 Month</option>
                                                                                            <option value="6M">6 Month</option>
                                                                                            <option value="1Y">1 Year</option>
                                                                                            <option value="2Y">2 Year</option>
                                                                                            <option value="3Y">3 Year</option>
                                                                                            <option value="20">2020-2022</option>
                                                                                            <option value="21">2021-2023</option>
                                                                                            <option value="22">2022-2024</option>
                                                                                            <option value="23">2023-2025</option>
                                                                                            <option value="24">2024-2026</option>
                                                                                            <option value="25">2025-2027</option>
                                                                                            <option value="26">2026-2028</option>
                                                                                            <option value="27">2027-2029</option>
                                                                                            <option value="TE">Till Exam</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">University</label>
                                                                                        <select class="form-select" name="university_id" aria-label="Default select example">
                                                                                            <option selected="">Select University</option>
                                                                                            <?php
                                                                                            foreach ($universities as $data) { ?>
                                                                                                <option value="<?php echo $data->id; ?>"><?php echo $data->university_name; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Year</label>
                                                                                        <select class="form-select" name="year" id="admission_year" aria-label="Default select example">
                                                                                            <option value="">Select University</option>
                                                                                            <option value="1st">1st Year</option>
                                                                                            <option value="2nd">2nd Year</option>
                                                                                            <option value="3rd">3rd Year</option>
                                                                                            <option value="4th">4th Year</option>
                                                                                            <option value="5th">5th Year</option>
                                                                                            <option value="1stSem">1st Sem</option>
                                                                                            <option value="2ndSem">2nd Sem</option>
                                                                                            <option value="3rdSem">3rd Sem</option>
                                                                                            <option value="4thSem">4th Sem</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Course</label>
                                                                                        <select class="form-select" name="course" id="course_coursename" onChange="return regno();" aria-label="Default select example">
                                                                                            <option value="">Select Course</option>
                                                                                            <option value="B.Ed">B.Ed</option>
                                                                                            <option value="M.Ed">M.Ed</option>
                                                                                            <option value="D.El.Ed">D.El.Ed</option>
                                                                                            <option value="PGT">PGT</option>
                                                                                            <option value="TGT">TGT</option>
                                                                                            <option value="PRT">PRT</option>
                                                                                            <option value="CTET">CTET</option>
                                                                                            <option value="DSSSB (TGT,PGT,PRT)">DSSSB (TGT,PGT,PRT)</option>
                                                                                            <option value="DSSSB PRT Only">DSSSB PRT Only</option>
                                                                                            <option value="DSSSB (TGT And PGT)">DSSSB (TGT And PGT)</option>
                                                                                            <option value="CTET (Part 1 + PART 2)">CTET (Part 1 + PART 2)</option>
                                                                                            <option value="CTET Subject Wise">CTET Subject Wise</option>
                                                                                            <option value="CTET SST">CTET SST</option>
                                                                                            <option value="B LIB">B LIB</option>
                                                                                            <option value="CUET">CUET</option>
                                                                                            <option value="D.Pharma">D.Pharma</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Course name</label>
                                                                                        <input type="text" name="course_name" class="form-control" id="namecourse" placeholder="Course name" style="background: #dfdfdf;font-weight: 700;" readonly />
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Status</label>
                                                                                        <select class="form-select" name="status" aria-label="Default select example">
                                                                                            <option value="1">Active</option>
                                                                                            <option value="0">In-Active</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-primary" name="addcourse" type="submit">Add Course</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th>Sr No</th>
                                                                    <th>University</th>
                                                                    <th>Course Name</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                foreach ($courses as $cdata) {

                                                                    $condition = array('id' => $cdata->university_id);
                                                                    $allData = $this->crud->selectbymultiplecolumn('university', $condition);
                                                                    foreach ($allData as $data1) {
                                                                ?>
                                                                        <tr>
                                                                            <td><?php echo $i; ?></td>
                                                                            <?php

                                                                            ?>
                                                                            <td><?php echo $data1->university_name; ?></td>
                                                                            <td><?php echo $cdata->course_name; ?></td>
                                                                            <td>
                                                                                <?php if ($cdata->status == '1') { ?>
                                                                                    <a href=" "> <i class="fas fa-toggle-on" style=" color: #09b409;font-size: 24px;"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a href=" "> <i class="fas fa-toggle-on" style=" color: red;font-size: 24px;"></i></a>
                                                                                <?php   } ?>
                                                                            <td>
                                                                                <a href="<?php echo base_url('universitycourse/edit_course/' . $cdata->id); ?>"><i style="font-size: 21px;color: #0807cb;font-weight: 900;" class="fas fa-edit"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                <?php $i++;
                                                                    }
                                                                } ?>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2024 © VGI.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with VGI IT
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>
    <div class="rightbar-overlay"></div>
    <?php $this->load->view('admin/include/scripts'); ?>


    <script type="text/javascript">
        function regno() {

            var session = document.getElementById("admission_session").value;
            var year = document.getElementById("admission_year").value;
            var course = document.getElementById("course_coursename").value;


            if (session != "" || course != "") {
                document.getElementById("namecourse").value = session + "-" + course + "-" + year;
            } else {
                alert("Please Fill Session, Location, Course, Color field to generate Reg No");
            }

        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // In your JavaScript file or within <script> tags in your view file
        $(document).ready(function() {
            $('.editUniversity').click(function(e) {
                e.preventDefault();
                var university_id = $(this).data('university-id');
                console.log(university_id);
                $.ajax({
                    url: "<?php echo base_url('universitycourse/edituniversity/'); ?>" + university_id,
                    type: "GET",
                    success: function(response) {
                        console.log(response);
                        // Replace the modal content with the fetched data
                        $('#myModal3 .modal-content').html(response.data.university);

                        var university_name = response.data.university_name;
                        var status = response.data.status;
                        $('#uni_name').val(university_name);
                        $('#uni_status').val(status);



                        // Show the modal
                        $('#myModal3').modal('show');
                    }
                });
            });
        });
    </script>
</body>

</html>