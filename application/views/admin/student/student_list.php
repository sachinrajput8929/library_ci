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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <h4 style="color: #2e2665;font-weight:bold;">All Book-Set List</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6" style="text-align:right;">
                                            <div class="btn-group mt-4 mt-md-0" role="group" aria-label="Basic example">
                                                <!-- <a href="<?php echo base_url('bookset/addset'); ?>">
                                                    <button type="button" class="btn btn-info waves-effect waves-light" style="font-weight: bold;font-size:15px">
                                                        Create Book Set <i class="ri-arrow-right-line align-middle ms-2"></i>
                                                    </button> </a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="table-reponsive box">
                                        <table id="example" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr No</th>
                                                    <th>Registration No</th>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Phone</th>
                                                    <th>Course Name</th>
                                                    <th>Issue</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($ALLDATA as $student) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $student->admission_id; ?></td>
                                                        <td><?php echo $student->admission_regno; ?></td>
                                                        <td><?php echo $student->admission_fullname; ?></td>
                                                        <td><?php echo $student->admission_fathername; ?></td>
                                                        <td><?php echo $student->admission_phone1; ?></td>
                                                        <td><?php echo $student->admission_course; ?></td>
                                                        <td>
                                                            <a href="" class="student" data-regno="<?php echo $student->admission_regno; ?>" data-bs-toggle="modal" data-bs-target="#myModal3">issue book set <i class="mdi mdi-arrow-right-bold-box" style=" font-size: 23px;color: #00c500;"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="" title="Edit"><i style="font-size: 23px;color: #0823d4;" class="fas fa-edit"></i></a>
                                                            <a href=" " title="Delete"><i style="font-size: 23px;color: red;" class=" fas fa-trash-restore-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
                                                } ?>


                                                <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel"><img class="rounded avatar-md" src="<?php echo base_url('assets/images/issue.png'); ?>">&nbsp; Student Books Issue </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="needs-validation" method="post" enctype="multipart/form-data">
                                                                    <div class="row">

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom01" class="form-label">Student Registration</label>
                                                                                <input type="text" name="registration_no" style="background: #dddddd;" class="form-control" id="regno" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom01" class="form-label">Issue Book Set Name</label>
                                                                                <select class="form-select" name="setname"  aria-label="Default select example" required>
                                                                                    <option selected="">Select Set</option>
                                                                                    <?php
                                                                                    $data['ALLDATA'] = $this->crud->fetchA11data('book_sets');
                                                                                    foreach ($data['ALLDATA'] as $set) {
                                                                                    ?>
                                                                                        <option value="<?php echo $set->id; ?>"><?php echo $set->name; ?></option>
                                                                                    <?php
                                                                                    }
                                                                                    ?>

                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom01" class="form-label">Issue Date</label>
                                                                                <input type="date" name="issuedate" class="form-control" id="" >
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

    

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom01" class="form-label">Remarks</label>
                                                                                <textarea type="text" name="remark" class="form-control" id="validationCustom02"  > </textarea>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-success" name="issue" type="submit">Issue Book</button>
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
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



    <script>
        // In your JavaScript file or within <script> tags in your view file
        $(document).ready(function() {
            $('.student').click(function(e) {
                e.preventDefault();
                var regno = $(this).data('regno');
                // console.log(regno);
                $.ajax({
                    type: "GET",
                    success: function(response) {
                        $('#regno').val(regno);
                        $('#myModal3').modal('show');
                    }
                });
            });
        });
    </script>

</body>

</html>