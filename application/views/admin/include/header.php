<header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo base_url(); ?>assets/images/loglib.png" alt="logo-sm-dark" height="56">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>assets/images/loglib.png" alt="logo-dark" height="54">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo base_url(); ?>assets/images/loglib.png" alt="logo-sm-light" height="56">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>assets/images/loglib.png" alt="logo-light" height="54">&nbsp;<span style="color:white;font-weight:700">Library</span>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="ri-search-line"></span>
                    </div>
                </form>
 
            </div>

            <div class="d-flex">
   
                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/images/loglib.png"
                            alt=" ">
                        <span class="d-none d-xl-inline-block ms-1">Profile</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> <?php echo $this->session->name;?></a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> <?php echo $this->session->phone;?></a>
                        <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> <?php echo $this->session->email;?></a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<?php echo base_url('admin/logout')?>"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                
            
            </div>
        </div>
    </header>