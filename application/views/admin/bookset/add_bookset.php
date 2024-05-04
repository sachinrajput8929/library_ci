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
                                <h4 style="color: #2e2665;font-weight:bold;">Create Book-Set</h4>

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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <form method="post" action="<?php echo base_url(); ?>Bookset/addset">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">University</label>
                                                    <select class="form-select" id="universityid" name="university" aria-label="Default select example"required>
                                                        <option selected="">Select University</option>
                                                        <?php
                                                        $data['universities'] = $this->crud->fetchA11data('university');
                                                        foreach ($data['universities'] as $alluniversity) {
                                                            // $university_name = $alluniversity->university_name;
                                                            // $words = explode(' ', $university_name);
                                                            // $trimmed_name = $words[0];
                                                        ?>
                                                            <option value="<?php echo $alluniversity->id; ?>"><?php echo $alluniversity->university_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="validationCustom01" class="form-label">Course</label>
                                                    <select class="form-select" id="courseid" name="course" aria-label="Default select example" required>
                                                        <option selected="">Select Course</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                         <input type="hidden" name="name" id="name" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <script>
                                                    // JavaScript to automatically update the input field with the selected course name and the first word of the selected university
                                                    document.getElementById('courseid').addEventListener('change', function() {
                                                        var courseSelect = document.getElementById('courseid');
                                                        var selectedCourse = courseSelect.options[courseSelect.selectedIndex].text;
                                                        var universitySelect = document.getElementById('universityid');
                                                        var selectedUniversity = universitySelect.options[universitySelect.selectedIndex].text;
                                                        var firstWordOfUniversity = selectedUniversity.split(' ')[0];
                                                        document.getElementById('name').value = selectedCourse  +'[' + firstWordOfUniversity +']' ;
                                                    });
                                                </script>

                                                <div>
                                                    <label for="validationCustom01" class="form-label">Status</label>
                                                    <select class="form-select" name="status" aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="0">In-Active</option>
                                                    </select>

                                                </div>


                                            </div>

                                            <div class="col-lg-6">
                                                <label>Book Name</label>
                                                <div class="shadow-lg p-4 mb-1 bg-white rounded" style="overflow-y: scroll; max-height: 210px;">
                                                    <input type="text" id="searchInput" class="form-control" onkeyup="searchBooks()" placeholder="Search for books..."><br>
                                                    <div id="checkboxContainer">

                                                        <div class="form-check mb-3" id="bookname">
                                                            <input class="form-check-input" type="checkbox" name="booksets[]" required />
                                                            <h5 class="form-check-label">
                                                                First select the university and course,After that there will be book shows according to the course-
                                                                Then you can create multiple book sets.
                                                            </h5>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="mt-3" style="text-align: center;">
                                            <button class="btn btn-success" style="font-size: 17px; font-weight:bold" name="set" type="submit">Submit Book Set <i class="ri-check-line align-middle me-2"></i></button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                            <!-- end select2 -->
                        </div>
                    </div>
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
                        // console.log(data);
                    }
                });
            });
        });



        $(document).ready(function() {
            $('#courseid').change(function() {
                var courseid = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('bookset/fetchBookname'); ?>",
                    type: "post",
                    data: {
                        courseid: courseid
                    },
                    success: function(data) {
                        $('#bookname').html(data);
                        console.log(bookname);
                    }
                });
            });
        });
    </script>



    <script>
        function removeSpecialChars(text) {
            return text.replace(/[^\w\s]/gi, ''); // Remove special characters except whitespace and alphanumeric characters
        }

        function searchBooks() {
            var input, filter, checkboxes, label, i, txtValue;
            input = document.getElementById("searchInput");
            filter = removeSpecialChars(input.value).toUpperCase(); // Remove special characters and convert to uppercase
            checkboxes = document.getElementsByClassName("form-check");

            for (i = 0; i < checkboxes.length; i++) {
                label = checkboxes[i].getElementsByTagName("label")[0];
                txtValue = removeSpecialChars(label.textContent || label.innerText).toUpperCase(); // Remove special characters from label text and convert to uppercase
                if (txtValue.indexOf(filter) > -1) {
                    checkboxes[i].style.display = "";
                } else {
                    checkboxes[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>