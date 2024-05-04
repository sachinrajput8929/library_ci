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
                                 <h4 class="mb-sm-0">Book Stocks List</h4>

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
                                     <a href="<?php echo base_url('universitycourse/adduniversity'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="font-weight: bold;font-size:15px">University & Course</button></a>
                                     <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="font-weight: bold;font-size:15px">Add New Book <i class="ri-add-circle-fill"></i></button>
                                     <hr />
                                     <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                         <div class="modal-dialog">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title" id="myModalLabel"><img class="rounded avatar-md" src="<?php echo base_url('assets/images/loglib.png'); ?>">&nbsp; Add New Books </h5>
                                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <form class="needs-validation" method="post" enctype="multipart/form-data">

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
                                                                             <option value="<?php echo $alluniversity->id; ?>"><?php echo $alluniversity->university_name; ?></option>
                                                                         <?php } ?>
                                                                     </select>
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Course</label>
                                                                     <select class="form-select" id="courseid" name="course" aria-label="Default select example">
                                                                         <option selected="">Select Course</option>

                                                                     </select>

                                                                 </div>
                                                             </div>

                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Book name</label>
                                                                     <input type="text" name="book_name" class="form-control" id="validationCustom01" placeholder="Book name" required />

                                                                 </div>
                                                             </div>

                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom02" class="form-label">Author name</label>
                                                                     <input type="text" name="author" class="form-control" id="validationCustom02" placeholder="Author name" required />
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom02" class="form-label">Price ₹</label>
                                                                     <input type="text" name="price" class="form-control" id="validationCustom02" placeholder="price" required>
                                                                 </div>
                                                             </div>


                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Type</label>
                                                                     <select class="form-select" name="type" aria-label="Default select example">
                                                                         <option selected="">Select Type</option>
                                                                         <option value="AFTE">AFTE</option>
                                                                     </select>
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Medium</label>
                                                                     <select class="form-select" name="medium" aria-label="Default select example">
                                                                         <option selected="">Select Medium</option>
                                                                         <option value="Hindi">Hindi</option>
                                                                         <option value="English">English</option>
                                                                     </select>

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
                                                                     <label for="validationCustom01" class="form-label">Book Images</label>
                                                                     <input type="file" name="image" class="form-control" id="validationCustom02" required multiple />
                                                                 </div>
                                                             </div>


                                                         </div>
                                                         <div class="modal-footer">
                                                             <button class="btn btn-primary" name="addbook" type="submit">Submit form</button>
                                                         </div>
                                                     </form>
                                                 </div>

                                             </div>
                                         </div>
                                     </div>


                                     <table id="datatable-buttons" class="responsive table table-striped table-bordered">
                                         <thead>
                                             <tr role="row">
                                                 <th>Sr No</th>
                                                 <th>Image</th>
                                                 <th>Name</th>
                                                 <th>Quantity</th>
                                                 <th>University</th>
                                                 <th>Course</th>
                                                 <th>Medium</th>
                                                 <th>Author</th>
                                                 <th>Price</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead>


                                         <tbody>
                                         <?php
                                            // $issue = $this->crud->fetchA11data('issue_book');
                                            $condition = array('type' => 'issue');
                                                $issue = $this->crud->selectbymultiplecolumn('issue_book', $condition);
                                            $allBookIds = [];

                                            // First, collect all book IDs
                                            foreach ($issue as $book) {
                                                 $booksetid = $book->setname;
                                                $condition = array('id' => $booksetid);
                                                $allDATA = $this->crud->selectbymultiplecolumn('book_sets', $condition);
                                                foreach ($allDATA as $data1) {
                                                    $booksets = $data1->booksets;
                                                    $bookIds = json_decode($booksets, true);
                                                    if (is_array($bookIds)) {
                                                        $allBookIds = array_merge($allBookIds, $bookIds); // Merge all book IDs into one array
                                                    }
                                                }
                                            }
                                            // Count the occurrences of each ID
                                            $idCounts = array_count_values($allBookIds);

                                            // Now output data based on unique book IDs and their counts
                                            foreach ($idCounts as $id => $count) {
                                                  "ID: $id, Count: $count<br>";
                                                $condition2 = array('id' => $id);
                                                $bookDetails = $this->crud->selectbymultiplecolumn('book', $condition2);
                                                foreach ($bookDetails as $data2) {
                                                      $data2->book_name ;
                                                }
                                            }
                                            ?>

                                             <?php
                                                $i = 1;
                                                //   echo   $totalCount = count($ALLDATA);
                                                foreach ($ALLDATA as $data) {
                                                    $bookId = $data->id; // Assuming 'id' is the field containing the book ID
                                                    $count = isset($idCounts[$bookId]) ? $idCounts[$bookId] : 0;
    
                                                     $availableQuantityWithCount = $data->available_quantity + $count;
                                                ?>
                                                 <tr>
                                                     <td><?php echo $i; ?></td>
                                                     <td>
                                                         <div>
                                                             <img src="<?php echo base_url(); ?>/assets/uploads/<?php echo $data->image; ?>" class=" img-thumbnail rounded avatar-sm">
                                                         </div>
                                                     </td>
                                                     <td><?php echo $data->book_name; ?></td>
                                                     <?php

                                                        ?>
                                                     <td><span class="badge rounded-pill bg-success"><?php echo $availableQuantityWithCount; ?></span>
                                                     <a type="button" class="addstock" data-bookstock-id="<?php echo $data->id; ?>" data-bs-toggle="offcanvas" data-bs-target="#stockid" aria-controls="offcanvasRight"><span class="badge bg-warning">Add Stock<i style=" font-size: 15px;color:  white  ;font-weight:900" class="mdi mdi-plus-outline"></i></span></a></td>
                                                     <?php
                                                        $condition = array('id' => $data->university);
                                                        $allDATA = $this->crud->selectbymultiplecolumn('university', $condition);
                                                        foreach ($allDATA as $data1) {
                                                        ?>
                                                         <td><?php echo $data1->university_name; ?>
                                                        </td>
                                                     <?php } ?>

                                                     <?php
                                                        $condition = array('id' => $data->course);
                                                        $allDATA = $this->crud->selectbymultiplecolumn('course', $condition);
                                                        foreach ($allDATA as $data2) {
                                                        ?>
                                                         <td><?php echo $data2->course_name; ?></td>
                                                     <?php } ?>
                                                     <td><?php echo $data->medium; ?></td>
                                                     <td><?php echo $data->author; ?></td>
                                                     <td><?php echo $data->price; ?></td>
                                                     <td> <a href="<?php echo base_url('books/edit/' . $data->id); ?>" title="Edit"><i style="    font-size: 23px;color: #0823d4;" class="fas fa-edit"></i></a>
                                                         <a href="<?php echo base_url('books/delete/' . $data->id); ?>" title="Delete"><i style="    font-size: 23px;color: red;" class=" fas fa-trash-restore-alt"></i></a>
                                                         
                                                     </td>


                                                 </tr>
                                             <?php $i++;
                                                } ?>

                                             <div class="offcanvas offcanvas-end" tabindex="-1" id="stockid" aria-labelledby="offcanvasRightLabel" style="width: 40%">
                                                 <div class="offcanvas-header" style="background: #dadada">
                                                     <img class="rounded avatar-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrWVEBssuPm0WTgNwSKtqJJ3ONj22HZsOvg5dWVV888gJsp0wiap1g1dQ0sK-Jng34-88&usqp=CAU">
                                                     <h4 id="offcanvasRightLabel" style="font-weight: 700;">Add Books Stocks</h4>
                                                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                 </div>
                                                 <div class="offcanvas-body">
                                                     <form method="post" action="<?php echo base_url('books/bookquantity/' . $data->id); ?>" class="custom-validation" enctype="multipart/form-data">
                                                         <div class="row">

                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <!-- <label for="validationCustom01" class="form-label">Available Book Quantity</label> -->
                                                                     <input type="hidden" id="total_quantity" name="total_quantity" value="<?php echo $total_quantity; ?>" class="form-control" style="background: #dfdfdf;font-weight: 700;" readonly />
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Book Name</label>
                                                                     <input type="text" id="book_name" name="book_name" class="form-control" style="background: #dfdfdf;font-weight: 700;" readonly />
                                                                     <input type="hidden" id="book_id" name="book_id" class="form-control" style="background: #dfdfdf;font-weight: 700;" readonly />

                                                                 </div>
                                                             </div>
                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Add Book Copy</label>
                                                                     <input type="number" id="stock_quantity" name="stock_quantity" class="form-control" placeholder="add stock" required />
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Remarks</label>
                                                                     <input type="text" name="remark" class="form-control" placeholder="book remarks">
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <label for="validationCustom01" class="form-label">Billing</label>
                                                                     <input type="file" name="bill" class="form-control">
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
                                                             <div class="col-md-12">
                                                                 <div class="mb-3">
                                                                     <!-- <label for="validationCustom01" class="form-label">Total Book Stock</label> -->
                                                                     <input type="hidden" id="bookstock" value="" name="available_quantity" class="form-control" placeholder="Total Book Stock" style="background: #dfdfdf;font-weight: 700;" readonly />
                                                                 </div>
                                                             </div>


                                                             <div class="mb-0">
                                                                 <div>
                                                                     <button type="submit" name="addstock" class="btn btn-primary waves-effect waves-light me-1">
                                                                         Add Book Stock
                                                                     </button>

                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </form>
                                                 </div>
                                             </div>




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

     <!-- JAVASCRIPT -->
     <?php $this->load->view('admin/include/scripts'); ?>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

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
     <script>
         const availableQuantityInput = document.getElementById('total_quantity');
         const addBookInput = document.getElementById('stock_quantity');
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



     <script>
         // In your JavaScript file or within <script> tags in your view file
         $(document).ready(function() {
             $('.addstock').click(function(e) {
                 e.preventDefault();
                 var book_id = $(this).data('bookstock-id');
                 console.log(book_id);
                 $.ajax({
                     url: "<?php echo base_url('books/add_book_stock/'); ?>" + book_id,
                     type: "GET",
                     success: function(response) {
                         console.log(response);
                         // Replace the modal content with the fetched data
                         $('#stockid.offcanvas-body').html(response.data.book);

                         var bookid = response.data.id;
                         var available_quantity = response.data.available_quantity;
                         var book_name = response.data.book_name;

                         $('#book_id').val(bookid);
                         $('#total_quantity').val(available_quantity);
                         $('#book_name').val(book_name);



                         // Show the modal
                         $('#stockid').offcanvas - body('show');
                     }
                 });
             });
         });
     </script>

 </body>

 </html>