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
                                <h4 class="mb-sm-0">Add Books Stock</h4>

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
                                                    <label for="validationCustom01" class="form-label">Available Book Quantity</label>
                                                    <input type="text" id="available_quantity" value="3" class="form-control" style="background: #dfdfdf;font-weight: 700;" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Add Book Copy</label>
                                                    <input type="text" id="addbook" value="" class="form-control" placeholder="add stock">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Total Book Stock</label>
                                                    <input type="text" id="bookstock" value="" class="form-control" placeholder="Total Book Stock" style="background: #dfdfdf;font-weight: 700;" readonly />
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

    <script> 
        const availableQuantityInput = document.getElementById('available_quantity');
        const addBookInput = document.getElementById('addbook');
        const totalStockInput = document.getElementById('bookstock'); 
        function calculateTotalStock() {
            const availableQuantity = parseInt(availableQuantityInput.value);
            const addBookQuantity = parseInt(addBookInput.value); 
            const totalStock = availableQuantity + addBookQuantity; 
            totalStockInput.value = totalStock;
        } 
        addBookInput.addEventListener('input', calculateTotalStock); 
        calculateTotalStock();
    </script>


</body>

</html>