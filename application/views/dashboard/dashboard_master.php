<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Home</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>backend_assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend_assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url(); ?>backend_assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!--Datepicker-->
    <link href="<?php echo base_url(); ?>assets/datepicker/css/jquery.datepick.css" rel="stylesheet">
    <!--/Datepicker-->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
   
   </head>
<body style="font-family: solaimanlipi">
    <!--Renter already registered dialog-->
    <?php $this->load->view("dialogs/landLoardAlreadyRegistered_dialog");?>
    <!--End Renter already registered dialog-->
    <!--  wrapper -->
    <div id="wrapper">

        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img class="img-responsive" src="<?php echo base_url(); ?>backend_assets/img/logo.png" alt="logo" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right topRightMenu">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"><?php $allNotification = $this->session->userdata('notification_data'); echo count(array_filter($allNotification));?></php></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
                        //$allNotification = $this->session->all_userdata();
                        
                        if ($allNotification) {
                            $i=0;
                            foreach (array_filter($allNotification) as $singleMsg){ ?>

                        <li>
                            <a href="#">
                            <?php
                                if ($singleMsg=='metro_police') {
                                    echo "Hi, Metro Police";
                                }else if ($singleMsg=='admin') {
                                    echo "Hi, Admin";
                                }else if ($singleMsg=='landlord') {
                                    echo "Hi, Landlord";
                                }else if ($singleMsg=='renter') {
                                    echo "Hi, Renter";
                                }else{

                                    echo $singleMsg;    
                                }
                            ?>
                            </a>
                        </li>

                        <li class="divider"></li>
                       
                        <?php } } ?>

                        <!--<li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>-->
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>super_admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">

                                <?php if($photo = $this->session->userdata('photo')) :?>
                                    
                                    <?php 
                                    $user_type = $this->session->userdata('user_type');
                                    if($user_type=='general'):?>
                                    <img src="<?php echo base_url('uploads/general_user/'.$photo); ?>" alt="General User" />
                                   <?php else:?>
                                    <img src="<?php echo base_url('uploads/'.$photo); ?>" alt="Admin" />
                                    <?php endif;?>

                                <?php else:?>
                                <img src="<?php echo base_url(); ?>backend_assets/img/user.jpg" alt="User Photo">
                                <?php endif;?>

                            </div>
                            <div class="user-info">
                                <div style="font-size: 16px;"><?php $user_fullname = $this->session->userdata("user_fullname");
                                    if($user_fullname != NULL){
                                        echo $user_fullname;
                                    }
                                ?></div>
                                <div id="result" class="user-text-online">
                                    
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>

                    <div class="clearfix"></div>
                    <li class="selected" style="margin-top: 20px; box-shadow: 0px 2px 2px 1px rgba(0, 0, 0, 0.2);">
                        <a href="<?php echo base_url('super_admin'); ?>" style="padding: 10px 10px; color: #EC008B; font-size: 16px; font-weight: bold;"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    
                    <!-- For Admin Menu -->               
                    <?php if($this->session->userdata("user_type") == 'admin') : ?>

                    <li>
                        <a href="<?php echo base_url(); ?>super_admin/renterRegisterForm">Renter Registration</a>
                    </li>
                    <?php endif; ?>

                    <!-- For Landlord Menu -->   
                    <?php if($this->session->userdata("user_type") == 'landlord') : ?>
                    <li>
                        <a href="<?php echo base_url('super_admin/addNewRenter'); ?>">Add Renter</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>super_admin/renterRegisterForm">Renter Registration</a>
                    </li>
                    <?php endif; ?>

                    <!-- For Landlord Menu -->   
                    <?php if($this->session->userdata("user_type") == 'metro_police') : ?>
                    <li>
                        <a href="<?php echo base_url('super_admin/findRenterLocation'); ?>">Find Renter Details</a>
                    </li>
                    <?php endif; ?>

                    <!-- For Creating Publicity Menu item -->   
                    <?php if($this->session->userdata("user_type") !='metro_police') : ?>
                    <li>
                        <a href="<?php echo base_url('publicity/create_publicity'); ?>">Ad for Rent</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('publicity/publicity_action'); ?>">Manage Ads</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

        <!--Renter creation error message of Photo-->
        <?php if($this->session->userdata('error_msg_photo_renter') || $this->session->userdata("successMsg") || $this->session->userdata("success") || $this->session->userdata("failure")): ?>
            <div style="max-width: 400px; margin: 0 auto; position: relative; z-index:999999;">
                
                <!-- success Message-->
                <?php if($success = $this->session->userdata("success")): ?>
                <div class="welcome_msg alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                    echo "<h4>".$success."</h4>";
                    $this->session->unset_userdata("success");
                    ?>
                </div>
                <?php endif; ?>
                <!-- End success Message -->

                <!-- Failure Message-->
                <?php if($failure = $this->session->userdata("failure")): ?>
                <div class="welcome_msg alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                    echo "<h4>".$failure."</h4>";
                    $this->session->unset_userdata("failure");
                    ?>
                </div>
                <?php endif; ?>
                <!-- End Failure Message -->

                <!-- Welcome and Data added success -->
                <?php if($successMsg = $this->session->userdata("successMsg")): ?>
                <div class="welcome_msg alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                    echo "<h4>".$successMsg."</h4>";
                    $this->session->unset_userdata("successMsg");
                    ?>
                </div>
                <?php endif; ?>
                <!-- End Welcome and Data added success -->

                <!--For image-->
                <?php if($error_msg_photo_renter =  $this->session->userdata('error_msg_photo_renter')): ?>
                <div class="welcome_msg alert alert-danger alert-dismissable" style="">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                    echo "<h4>".(isset($error_msg_photo_renter)?$error_msg_photo_renter:'')."</h4>";
                    $this->session->unset_userdata('error_msg_photo_renter');
                    ?>
                </div>
                <?php endif;?>

            </div>
        <?php endif;?>
        <!--End Renter creation error message of Photo-->

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <!--Start Sidebar Menu-->
            <!-- Category Form -->
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if (isset($add_category_form)) {
                        echo $add_category_form;
                    }
                    ?>
                </div>
            </div>
            <!-- -/Category Form -->
            <!--End Sidebar Menu-->

            <!--Start Document Body-->

            <!-- renterForm -->
            <div class="row">
                <?php echo isset($renterForm)?$renterForm:''; ?>
            </div>
            <!-- renterForm -->

            <!-- Add new renter page -->
            <div class="row">
                <?php echo isset($addNewRenterPage)?$addNewRenterPage:''; ?>
            </div>
            <!-- End Add new renter page -->

            <!-- Find renter location page -->
            <div class="row">
                <?php echo isset($findRenterLocation)?$findRenterLocation:''; ?>
            </div>
           <!-- End Find renter location page -->

           <!-- Publicity create page -->
            <div class="row">
                <?php echo isset($publicity_create_page)?$publicity_create_page:''; ?>
            </div>
           <!-- End Publicity create page -->

            <!-- Publicity Action page -->
            <?php echo isset($publicity_actions_page)?$publicity_actions_page:''; ?>
           <!-- End Publicity Action page -->

            <!--End Document Body-->

        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>backend_assets/plugins/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- <script src="<?php echo base_url(); ?>backend_assets/plugins/pace/pace.js"></script> -->
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/scripts/siminta.js"></script>-->
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url(); ?>backend_assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/plugins/morris/morris.js"></script>-->
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/scripts/dashboard-demo.js"></script>-->

    <script>
        $(".welcome_msg").fadeOut(9000);
    </script>

    <script>
        function autoRefresh_div(){
            if (navigator.onLine) {
                //alert('online');
                $("#result").html("<span class='user-circle-online btn btn-success btn-circle'></span> Online");
            }else{
                $("#result").html("<span class='user-circle-online btn btn-danger btn-circle'></span> Offline");
            }

            //$("#result").load("load.html");// a function which will load data from other file after x seconds
        }

        setInterval('autoRefresh_div()', 2000); // refresh div after 2 secs
    </script>

    <!--Datepicker-->
    <script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.plugin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.datepick.js"></script>
    <script>
        $('.popupDatepickerBackEnd').datepick({dateFormat: 'dd/mm/yyyy'});
    </script>
    <!--Datepicker-->
    <script src="<?php echo base_url('backend_assets/scripts/FormValidation.js');?>"></script>
    <!--Main Js For backend-->
    <script src="<?php echo base_url('backend_assets/scripts/main.js');?>"></script>
    <!--Select Option-->
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script>
        $('.selectpicker').selectpicker({
          //style: 'btn-info',
          size: 4
        });
    </script>
<!--End Select Option-->
</body>
</html>