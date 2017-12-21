<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/admiry/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:07:30 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
         <title>Car Crime Control System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="<?php echo base_url(); ?>welcome/home.html" class="logo"><img src="<?php echo base_url(); ?>assets/images/logoo.png" height="42" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?>assets/images/users/photo3.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <h4 class="font-16">Saiful saif</h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>welcome/home" class="waves-effect">
                                    <i class="mdi ion-search"></i>
                                    <span> SEARCH CAR </span>
                                </a>
                            </li>

                           <li>
                                <a href="<?php echo base_url();?>welcome/category" class="waves-effect">
                                    <i class="mdi ion-levels"></i>
                                    <span> CRIME CATEGORY </span>
                                </a>
                            </li>

                             <li>
                                <a href="<?php echo base_url();?>welcome/crime_list" class="waves-effect">
                                    <i class="mdi ion-drag"></i>
                                    <span> LATEST CRIME </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i> <span> INBOX <span class="badge badge-primary pull-right">8</span></span> </a>
                                
                            </li>

                           <li>
                                <a href="<?php echo base_url();?>welcome/payment" class="waves-effect">
                                    <i class="mdi ti-credit-card"></i>
                                        <span> TAKE PAYMENT </span>
                                </a>
                            </li>


                           
                         
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <?php echo $maincontent ?>
            
            
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url(); ?>assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/admiry/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 21:07:56 GMT -->
</html>