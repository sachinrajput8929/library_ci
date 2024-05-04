<div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li class="shadow-sm p-1 mb-1 bg-gray rounded">
                        <a href="<?php echo  base_url('admin/dashboard'); ?>" class="waves-effect">
                        <i class="ri-home-4-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="shadow-sm p-1 mb-1 bg-gray rounded">
                        <a href="<?php echo  base_url('books/all_book'); ?>" class="waves-effect">
                        <i class="ri-book-open-line"></i>
                            <span>Books Stocks</span>
                        </a>
                    </li>

                    <li class="shadow-sm p-1 mb-1 bg-gray rounded">
                        <a href="<?php echo  base_url('bookset/all_bookset'); ?>" class="waves-effect">
                        <i class="ri-contacts-book-2-fill"></i>
                            <span>Books Sets</span>
                        </a>
                    </li>

                    <li class="shadow-sm p-1 mb-1 bg-gray rounded">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Student</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="shadow-none   mb-1 bg-light rounded"><a href="<?php echo base_url('student/list') ;?>"><i class="fas fa-book-reader"></i> &nbsp;Student Issue-Books</a></li>
                            <li class="shadow-none  mb-1 bg-light rounded"><a href="<?php echo base_url('student/history') ;?>"><i class="fas fa-history"></i>&nbsp;Issue-Books History</a></li> 
                        </ul>
                    </li>





                    <li class="shadow-sm p-1 mb-1 bg-gray rounded">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-login-box-line"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo base_url('admin/logout') ;?>">Logout</a></li>
                            
                        </ul>
                    </li>


                </ul>
            </div>