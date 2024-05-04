<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/appzia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 06:49:07 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Appzia - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
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
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <!-- <h4 class="card-title text-muted">Total Subscription</h4>
                                <h2 class="mt-3 mb-2"><i class="mdi mdi-arrow-down text-danger me-2"></i><b>8952</b>
                                </h2>
                                <p class="text-muted mb-0 mt-3"><b>48%</b> From Last 24 Hours</p> -->
                                    <div class="mt-4 mt-md-0">
                                        <img class="img-thumbnail rounded-circle avatar-lg" alt="200x200" src="https://cdn-icons-png.flaticon.com/512/1035/1035688.png" data-holder-rendered="true">
                                        <h5><span class="badge bg-primary-subtle text-primary">HOME</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body p-t-10">
                                <div class="mt-4 mt-md-0">
                                        <img class="img-thumbnail rounded-circle avatar-lg" alt="200x200" src="https://cdn-icons-png.freepik.com/256/3145/3145765.png" data-holder-rendered="true">
                                        <h5><span class="badge bg-success-subtle text-success">Books</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body p-t-10">
                                <div class="mt-4 mt-md-0">
                                        <img class="img-thumbnail rounded-circle avatar-lg" alt="200x200" src="https://cdn-icons-png.freepik.com/256/4906/4906375.png" data-holder-rendered="true">
                                        <h5><span class="badge bg-info-subtle text-info">Library</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body p-t-10">
                                <div class="mt-4 mt-md-0">
                                        <img class="img-thumbnail rounded-circle avatar-lg" alt="200x200" src="https://cdn-icons-png.freepik.com/256/6489/6489949.png"  data-holder-rendered="true">
                                        <h5><span class="badge bg-warning-subtle text-warning">Setting</span></h5>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 card-title">Email Sent</h4>

                                    <ul class="list-inline d-flex justify-content-around mt-3">
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>3654</b></h5>
                                            <p class="text-muted mb-0">Marketplace</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>954</b></h5>
                                            <p class="text-muted mb-0">Last week</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>8462</b></h5>
                                            <p class="text-muted mb-0">Last Month</p>
                                        </li>
                                    </ul>

                                    <div class="morris-charts" id="morris-donut-example" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 card-title">Revenue</h4>

                                    <ul class="list-inline d-flex justify-content-around mt-3">
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>5248</b></h5>
                                            <p class="text-muted mb-0">Marketplace</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>321</b></h5>
                                            <p class="text-muted mb-0">Last week</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>964</b></h5>
                                            <p class="text-muted mb-0">Last Month</p>
                                        </li>
                                    </ul>


                                    <div id="morris-bar-example" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 card-title">Email Sent</h4>

                                    <ul class="list-inline d-flex justify-content-around mt-3">
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>3654</b></h5>
                                            <p class="text-muted mb-0">Marketplace</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>954</b></h5>
                                            <p class="text-muted mb-0">Last week</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="text-center"><b>8462</b></h5>
                                            <p class="text-muted mb-0">Last Month</p>
                                        </li>
                                    </ul>


                                    <div id="morris-area-example" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <!-- end row -->
                    <!-- end row -->
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

    <!-- JAVASCRIPT -->
    <?php $this->load->view('admin/include/scripts'); ?>

</body>

</html>