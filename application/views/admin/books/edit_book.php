<!doctype html>
<html lang="en">

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
                                <h4 class="mb-sm-0">Update Book </h4>

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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" class="custom-validation" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">University</label>
                                                        <select class="form-select" id="universityid" name="university" aria-label="Default select example">
                                                            <option selected="">Select University</option>
                                                            <?php
                                                            $data['universities'] = $this->crud->fetchA11data('university');
                                                            // $this->load->view('admin/books', $data);
                                                            foreach ($data['universities'] as $alluniversity) {
                                                            ?>
                                                                <option value="<?php echo $alluniversity->id; ?>" <?= ($EDITDATA[0]->university == $alluniversity->id) ? 'selected' : '' ?>><?php echo $alluniversity->university_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Course</label>
                                                        <select class="form-select" id="courseid" name="course" aria-label="Default select example" required>
                                                            <option selected="" >Select Course</option>

                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Book name</label>
                                                        <input type="text" name="book_name" value="<?php echo $EDITDATA[0]->book_name; ?>" class="form-control" id="validationCustom01" placeholder="Book name" required />

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Author name</label>
                                                        <input type="text" name="author" value="<?php echo $EDITDATA[0]->author; ?>" class="form-control" id="validationCustom02" placeholder="Author name" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Price ₹</label>
                                                        <input type="text" name="price" value="<?php echo $EDITDATA[0]->price; ?>" class="form-control" id="validationCustom02" placeholder="price" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Type</label>
                                                        <select class="form-select" name="type" aria-label="Default select example">
                                                            <option selected="">Select Type</option>
                                                            <option value="AFTE" <?php if ($EDITDATA[0]->type == 'AFTE') echo 'selected'; ?>>AFTE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Medium</label>
                                                        <select class="form-select" name="medium" aria-label="Default select example">
                                                            <option selected="">Select Medium</option>
                                                            <option value="Hindi" <?php if ($EDITDATA[0]->medium == 'Hindi') echo 'selected'; ?>>Hindi</option>
                                                            <option value="English" <?php if ($EDITDATA[0]->medium == 'English') echo 'selected'; ?>>English</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Status</label>
                                                        <select class="form-select" name="status" aria-label="Default select example">
                                                            <option value="1" <?php if ($EDITDATA[0]->status == '1') echo 'selected'; ?>>Active</option>
                                                            <option value="0" <?php if ($EDITDATA[0]->status == '0') echo 'selected'; ?>>In-Active</option>
                                                        </select>

                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Book Images</label>
                                                        <input type="file" name="image" class="form-control" id="validationCustom02" required />
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                         <?php
                                                        if (!empty($EDITDATA[0]->image)) {
                                                            // Check if old image exists
                                                            echo '<img src="' . base_url() . '/assets/uploads/' . $EDITDATA[0]->image . '" alt="Old Image" class=" img-thumbnail rounded avatar-lg" />';
                                                        } 
                                                        ?>
                                                    </div>
                                                </div>



                                                <div class="mb-0">
                                                    <div>
                                                        <button type="submit" name="updatebook" class="btn btn-primary waves-effect waves-light me-1">
                                                            Submit
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                    </form>

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
            $('#universityid').change(function() {
                var university_id = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('books/fetchCourses'); ?>",
                    type: "post",
                    data: {
                        university_id: university_id
                    },
                    success: function(data) {
                        $('#courseid').html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>