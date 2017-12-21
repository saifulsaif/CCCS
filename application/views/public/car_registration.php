

   <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                 <div class="topbar">

                        <nav class="navbar-custom">

                               <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>assets/images/users/photo2.jpg" alt="user" class="rounded-circle">
                                    </a>
                                   <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="<?php echo base_url();?>super_admin/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>super_admin/car_registration"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Car Registration</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">CAR CRIME CONTROL SYSTEM</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">

                            <div class="row">
                                <div class="col-2">
                                    
                                </div>
                                <div class="col-8">
                                    <div class="card m-b-20">
                                        <div class="card-block">

                                            <h2 class="mt-0 header-title">Car Registration Form</h2>
                                            <form action="<?php echo base_url(); ?>super_admin/save_car_info" method="post" >
                                           
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Car Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="car_number" type="text" placeholder="Enter your name"  id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input"  class="col-sm-2 col-form-label">Car Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="car_name" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="category" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Color</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="color" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                           
                                             <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">CC</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="cc" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Chasis Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="chasis_number" type="text" value="4444" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Body Type</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="body_type" type="text" id="example-number-input">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Horse Power</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="horse_power" type="tel" placeholder="1-(555)-555-5555"  id="example-tel-input">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-email-input" n class="col-sm-2 col-form-label">Fuel Type</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="fuel_type" type="text" placeholder=""  id="example-email-input">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Manufacture Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="mnu_date" type="date" value="2013-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                         <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Registration Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="reg_date" type="date" value="2015-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Car Image</label>
                                                <div class="col-sm-10">
                                                   
                                                    <div class="fallback">
                                                      <input type="file" name="photo">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           <div style="float: right; ">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                           
                                           
                                         
                                         </form>
                                          
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-2">
                                    
                                </div>
                            </div> <!-- end row -->
                            <div class="form-group m-b-0" style="float: right;margin-right: 20px;">
                                                   
                                                </div>

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Saifulsaif
                </footer>

            </div>