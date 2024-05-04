<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/appzia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 06:49:12 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
         <?php $this->load->view('admin/include/css');?>

     </head>

    <body class="auth-body-bg">
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">

                <div class="card-body">
                    <h3 class="text-center mt-0 mb-3">
                        <a href="index.html" class="logo"><img src="<?php echo base_url();?>assets/images/loglib.png" height="84" alt="logo-img"></a>
                    </h3>
                    <h5 class="text-center mt-0 text-color"><b>Library</b></h5>

                    <form class="form-horizontal mt-3 mx-3"   method="POST">

                        <div class="form-group mb-3">
                            <div class="col-12">
                                <input class="form-control" type="text" name="phone" required="" style="color:white" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="col-12">
                                <input class="form-control" type="password" name="password" required="" style="color:white" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" checked="">
                                    <label for="checkbox-signup" class="text-color">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center mt-3">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light w-100" name="login" type="submit">
                                    Log In</button>
                            </div>
                        </div>
 
                    </form>
                </div>

            </div>
        </div>

        

        <!-- JAVASCRIPT -->
       
    </body>

 </html>
