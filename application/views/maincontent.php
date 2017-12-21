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
                                        <img src="<?php echo base_url(); ?>assets/images/users/photo3.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/create_account"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Create account</a>
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
                                    <h2 class="page-title">CAR CRIME CONTROL SYSTEM</h2>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">
 
                        <div class="container">
                            <form action="<?php echo base_url();?>welcome/search_crime" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-12">
                                    <div class="mini-stat clearfix bg-primary">
                                        <div class="form-group row">
                                           
                                                 <div class="col-sm-10">
                                                     <input class="form-control" type="text" name="search" placeholder="Searching......" id="example-search-input">
                                                </div>
                                              <div class="col-sm-2">
                                                  <button type="submit" class="btn btn-outline-secondary waves-effect">Search</button>
                                                </div>
                                            
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </form>

                          
                            <!-- end row -->


                            <div class="row">

                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title">Recent Crime List</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>Case Number</th>
                                                    <th>Car Number</th>
                                                    <th>Status</th>
                                                    <th>Location</th>
                                                    <th>Start date</th>
                                                    <th>Fine</th>
                                                    <th>Details</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $i=1;;?>
                                                      <?php foreach($last_ten_case as $case) { ?>   
                                               <tr>
                                                   <td> <?php echo $i++;?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                    <td><span class="badge badge-primary">Active</span></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td><?php echo $case->date?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                                    <td><a href="#" >More</a></td>
                                                </tr>
                                                <?php }?>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Saiful|Saif.
                </footer>

            </div>