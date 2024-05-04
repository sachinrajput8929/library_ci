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
                                <h4 class="mb-sm-0">Update Course</h4>

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
                                    <form method="post" class="custom-validation">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Session</label>
                                                    <select class="form-select" name="session" id="admission_session" aria-label="Default select example" required>
                                                        <option value="">Select Session</option>
                                                        <option value="3M" <?php if ($EDITDATA[0]->session == '3M') echo 'selected'; ?>>3 Month</option>
                                                        <option value="6M" <?php if ($EDITDATA[0]->session == '6M') echo 'selected'; ?>>6 Month</option>
                                                        <option value="1Y" <?php if ($EDITDATA[0]->session == '1Y') echo 'selected'; ?>>1 Year</option>
                                                        <option value="2Y" <?php if ($EDITDATA[0]->session == '2Y') echo 'selected'; ?>>2 Year</option>
                                                        <option value="3Y" <?php if ($EDITDATA[0]->session == '3Y') echo 'selected'; ?>>3 Year</option>
                                                        <option value="20" <?php if ($EDITDATA[0]->session == '20') echo 'selected'; ?>>2020-2022</option>
                                                        <option value="21" <?php if ($EDITDATA[0]->session == '21') echo 'selected'; ?>>2021-2023</option>
                                                        <option value="22" <?php if ($EDITDATA[0]->session == '22') echo 'selected'; ?>>2022-2024</option>
                                                        <option value="23" <?php if ($EDITDATA[0]->session == '23') echo 'selected'; ?>>2023-2025</option>
                                                        <option value="24" <?php if ($EDITDATA[0]->session == '24') echo 'selected'; ?>>2024-2026</option>
                                                        <option value="25" <?php if ($EDITDATA[0]->session == '25') echo 'selected'; ?>>2025-2027</option>
                                                        <option value="26" <?php if ($EDITDATA[0]->session == '26') echo 'selected'; ?>>2026-2028</option>
                                                        <option value="27" <?php if ($EDITDATA[0]->session == '27') echo 'selected'; ?>>2027-2029</option>
                                                        <option value="TE" <?php if ($EDITDATA[0]->session == 'TE') echo 'selected'; ?>>Till Exam</option>
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
                                                            <option value="<?= $data->id ?>" <?= ($EDITDATA[0]->university_id == $data->id) ? 'selected' : '' ?>>
                                                                <?= $data->university_name ?>
                                                            </option> <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Year</label>
                                                    <select class="form-select" name="year" id="admission_year" aria-label="Default select example" required>
                                                        <option value="">Select University</option>
                                                        <option value="1st" <?php if ($EDITDATA[0]->year == '1st') echo 'selected'; ?>>1st Year</option>
                                                        <option value="2nd" <?php if ($EDITDATA[0]->year == '2nd') echo 'selected'; ?>>2nd Year</option>
                                                        <option value="3rd" <?php if ($EDITDATA[0]->year == '3rd') echo 'selected'; ?>>3rd Year</option>
                                                        <option value="4th" <?php if ($EDITDATA[0]->year == '4th') echo 'selected'; ?>>4th Year</option>
                                                        <option value="5th" <?php if ($EDITDATA[0]->year == '5th') echo 'selected'; ?>>5th Year</option>
                                                        <option value="1stSem" <?php if ($EDITDATA[0]->year == '1stSem') echo 'selected'; ?>>1st Sem</option>
                                                        <option value="2ndSem" <?php if ($EDITDATA[0]->year == '2ndSem') echo 'selected'; ?>>2nd Sem</option>
                                                        <option value="3rdSem" <?php if ($EDITDATA[0]->year == '3rdSem') echo 'selected'; ?>>3rd Sem</option>
                                                        <option value="4thSem" <?php if ($EDITDATA[0]->year == '4thSem') echo 'selected'; ?>>4th Sem</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Course</label>
                                                    <select class="form-select" name="course" id="course_coursename" onChange="return regno();" aria-label="Default select example" required>
                                                        <option value="">Select Course</option>
                                                        <option value="B.Ed" <?php if ($EDITDATA[0]->course == 'B.Ed') echo 'selected'; ?>>B.Ed</option>
                                                        <option value="M.Ed" <?php if ($EDITDATA[0]->course == 'M.Ed') echo 'selected'; ?>>M.Ed</option>
                                                        <option value="D.El.Ed" <?php if ($EDITDATA[0]->course == 'D.El.Ed') echo 'selected'; ?>>D.El.Ed</option>
                                                        <option value="PGT" <?php if ($EDITDATA[0]->course == 'PGT') echo 'selected'; ?>>PGT</option>
                                                        <option value="TGT" <?php if ($EDITDATA[0]->course == 'TGT') echo 'selected'; ?>>TGT</option>
                                                        <option value="PRT" <?php if ($EDITDATA[0]->course == 'PRT') echo 'selected'; ?>>PRT</option>
                                                        <option value="CTET" <?php if ($EDITDATA[0]->course == 'CTET') echo 'selected'; ?>>CTET</option>
                                                        <option value="DSSSB (TGT,PGT,PRT)" <?php if ($EDITDATA[0]->course == 'DSSSB (TGT,PGT,PRT)') echo 'selected'; ?>>DSSSB (TGT,PGT,PRT)</option>
                                                        <option value="DSSSB PRT Only" <?php if ($EDITDATA[0]->course == 'DSSSB PRT Only') echo 'selected'; ?>>DSSSB PRT Only</option>
                                                        <option value="DSSSB (TGT And PGT)" <?php if ($EDITDATA[0]->course == 'DSSSB (TGT And PGT)') echo 'selected'; ?>>DSSSB (TGT And PGT)</option>
                                                        <option value="CTET (Part 1 + PART 2)" <?php if ($EDITDATA[0]->course == 'CTET (Part 1 + PART 2)') echo 'selected'; ?>>CTET (Part 1 + PART 2)</option>
                                                        <option value="CTET Subject Wise" <?php if ($EDITDATA[0]->course == 'CTET Subject Wise') echo 'selected'; ?>>CTET Subject Wise</option>
                                                        <option value="CTET SST" <?php if ($EDITDATA[0]->course == 'CTET SST') echo 'selected'; ?>>CTET SST</option>
                                                        <option value="B LIB" <?php if ($EDITDATA[0]->course == 'B LIB') echo 'selected'; ?>>B LIB</option>
                                                        <option value="CUET" <?php if ($EDITDATA[0]->course == 'CUET') echo 'selected'; ?>>CUET</option>
                                                        <option value="D.Pharma" <?php if ($EDITDATA[0]->course == 'D.Pharma') echo 'selected'; ?>>D.Pharma</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Course name</label>
                                                    <input type="text" name="course_name" value="<?php echo $EDITDATA[0]->course_name; ?>" class="form-control" id="namecourse" placeholder="Course name" style="background: #dfdfdf;font-weight: 700;" readonly />
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

                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" name="updatecourse" class="btn btn-primary waves-effect waves-light me-1">
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

</body>

</html>