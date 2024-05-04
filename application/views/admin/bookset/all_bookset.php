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
                                                <a href="<?php echo base_url('bookset/addset'); ?>">
                                                    <button type="button" class="btn btn-info waves-effect waves-light" style="font-weight: bold;font-size:15px">
                                                        Create Book Set <i class="ri-arrow-right-line align-middle ms-2"></i>
                                                    </button> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    <table id="datatable-buttons" class="responsive table table-striped table-bordered">
                                        <thead>
                                            <tr role="row">
                                                <th>Sr No</th>
                                                <th>Book Set Name</th>
                                                <th> Sets</th>
                                                <th>University</th>
                                                <th>Course</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($ALLDATA as $data) {
                                            ?>
                                                <tr>

                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $data->name; ?></td>
                                                    <td>
                                                        <?php
                                                        foreach (json_decode($data->booksets) as $bookname) {
                                                            // echo $bookname;

                                                            $condition = array('id' => $bookname);
                                                            $allDATA = $this->crud->selectbymultiplecolumn('book', $condition);
                                                            foreach ($allDATA as $data3) {
                                                        ?>
                                                                <?php echo $data3->book_name; ?>,
                                                        <?php }
                                                        } ?>
                                                    </td>

                                                    <?php
                                                    $condition = array('id' => $data->university);
                                                    $allDATA = $this->crud->selectbymultiplecolumn('university', $condition);
                                                    foreach ($allDATA as $data1) {
                                                    ?>
                                                        <td><?php echo $data1->university_name; ?></td>
                                                    <?php } ?>

                                                    <?php
                                                    $condition = array('id' => $data->course);
                                                    $allDATA = $this->crud->selectbymultiplecolumn('course', $condition);
                                                    foreach ($allDATA as $data2) {
                                                    ?>
                                                        <td><?php echo $data2->course_name; ?></td>
                                                    <?php } ?>

                                                   

                                                    <td>
                                                        <?php if ($data->status == '1') { ?>
                                                            <a href="<?php echo base_url('bookset/active/') ?>?activeid=<?php echo $data->id; ?>&status=<?php echo $data->status; ?>"> <span class="badge bg-success">Active</span></a>
                                                        <?php } else { ?>
                                                            <a href="<?php echo base_url('bookset/inactive/') ?>?inactiveid=<?php echo $data->id; ?>&status=<?php echo $data->status; ?>"> <span class="badge bg-danger">Inactive</span></a>
                                                        <?php   } ?>
                                                    </td>
                                                    <td> <a href="" title="Edit"><i style="    font-size: 23px;color: #0823d4;" class="fas fa-edit"></i></a>
                                                        <a href="<?php echo base_url('bookset/delete/' . $data->id); ?>" title="Delete"><i style="    font-size: 23px;color: red;" class=" fas fa-trash-restore-alt"></i></a>
                                                    </td>

                                                </tr>
                                            <?php $i++;
                                            } ?>
                                        </tbody>
                                    </table>
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


</body>

</html>