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
                                                <h4 style="color: #2e2665;font-weight:bold;">Book Issue History &nbsp;<i class="fas fa-history"></i></h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6" style="text-align:right;">
                                            <div class="btn-group mt-4 mt-md-0" role="group" aria-label="Basic example">

                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="table-reponsive box">
                                        <table id="example" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr No</th>
                                                    <th>Regitration No</th>
                                                    <th>Set Name</th>
                                                    <th>Set Books</th>
                                                    <th>Issue Date</th>
                                                    <th>Remark</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($issue as $book) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td>
                                                            <?php echo $book->registration_no; ?><br>
                                                            <?php
                                                            $condition = array('admission_regno' => $book->registration_no);
                                                            $allDATA = $this->crud->selectbymultiplecolumn2('admission', $condition);
                                                            foreach ($allDATA as $data7) {
                                                                $data7->admission_fullname;
                                                            }
                                                            ?>
                                                            <p style="color: red;"><?php echo $data7->admission_fullname; ?></p>
                                                        </td>

                                                        <?php
                                                        $condition = array('id' => $book->setname);
                                                        $allDATA = $this->crud->selectbymultiplecolumn('book_sets', $condition);
                                                        foreach ($allDATA as $data1) {
                                                        ?>
                                                            <td><?php echo $data1->name; ?></td>

                                                        <?php } ?>

                                                        <td>
                                                            <?php
                                                            $j = 1;
                                                            foreach (json_decode($data1->booksets) as $bookid) {
                                                                $id = $bookid;
                                                                $condition2 = array('id' => $id);
                                                                $bookname = $this->crud->selectbymultiplecolumn('book', $condition2);
                                                                foreach ($bookname as $data2) {
                                                            ?>
                                                                    <p>[<?php echo $j; ?>]&nbsp;<?php echo $data2->book_name; ?></p>

                                                            <?php $j++;
                                                                }
                                                            } ?>
                                                        </td>


                                                        <td><?php echo $book->issuedate; ?></td>
                                                        <td><?php echo $book->remark; ?></td>
                                                        <td>
                                                            <?php if ($book->type == 'issue') { ?>
                                                                <a  href="<?php echo base_url('student/issue/') ?>?issueid=<?php echo $book->id; ?>&type=<?php echo $book->type; ?>">
                                                                    <span class="badge bg-info">Issued  &nbsp; <i style="color: white;font-size:16px" class="ri-hand-coin-line"></i></span>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="<?php echo base_url('student/return/') ?>?returnid=<?php echo $book->id; ?>&type=<?php echo $book->type; ?>">
                                                                    <span class="badge bg-danger">Return &nbsp;  <i style="color: white;font-size:16px" class="ri-arrow-go-back-line"></i></span>
                                                                </a>
                                                            <?php } ?>

                                                        </td>
                                                        <td>
                                                            <?php if ($book->status == '1') { ?>
                                                                <a href=" " title="Active"> <img src="../assets/images/act.png" alt="Active" class="rounded-circle avatar-sm"></a>
                                                            <?php } else { ?>
                                                                <a href=" " title="Inactive"> <img src="../assets/images/inact.png" alt="Active" class="rounded-circle avatar-sm"></a>
                                                            <?php   } ?>
                                                        </td>
                                                    </tr>

                                                <?php $i++;
                                                } ?>


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
</body>

</html>