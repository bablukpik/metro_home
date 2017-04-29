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
   </head>
<body style="font-family: solaimanlipi">
    <!--  wrapper -->
    <div id="wrapper">

        <!-- Start all messages -->
        <div class="row">
            <?php $message = $this->session->userdata("message");
            if ($message) { ?>
                <div style="position: absolute; z-index: 999999999999999;" class="col-lg-4 col-lg-offset-6">
                    <div class="welcome_msg alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa  fa-pencil"></i>
                        <strong>
                            <?php
                            echo $message;
                            $this->session->unset_userdata("message");

                            ?>
                        </strong>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- End all messages -->

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
                <a class="navbar-brand" href="index.php">
                    <img class="img-responsive" src="<?php echo base_url(); ?>backend_assets/img/logo.png" alt="logo" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right topRightMenu">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"><?php $allMessage = $this->session->all_userdata(); echo count($allMessage); ?></php></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
                        //$allMessage = $this->session->all_userdata();
                        $user_name = $this->session->userdata('user_name');
                        $user_type = $this->session->userdata('user_type');
                        if ($allMessage) {
                            foreach ($allMessage as $singleMsg){
                            ?>

                        <li>
                            <a href="#">
                                <div>
                                    <!--<i class="fa fa-comment fa-fw"></i>-->

                                    <?php
                                       /* if($singleMsg == $user_name || $singleMsg == $user_type){
                                            continue;
                                        }else{*/
                                            echo $singleMsg;
                                        /*}*/
                                    ?>
                                    <span class="pull-right text-muted small">
                                        <?php $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
                                        echo $dt->format('m/d/Y, h:i:s'); ?> ago</span>
                                </div>
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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
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
                                <img src="<?php echo base_url(); ?>backend_assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php $user_fullname = $this->session->userdata("user_fullname");
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
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="<?php echo base_url(); ?>super_admin"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User Actions <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <?php
                                $user_type = $this->session->userdata("user_type");
                                if($user_type == 'admin') : ?>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Add a renter</a>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url(); ?>super_admin/renterRegisterForm">Register a renter</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-flask fa-fw"></i>Sample1</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
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
            <div class="row">

                <?php
                    echo isset($renterForm)?$renterForm:'';
                ?>

            </div>
            <!--End Document Body-->

        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->
    <!-- Core Scripts - Include with every page -->
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/plugins/jquery-1.10.2.js"></script>-->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>backend_assets/plugins/pace/pace.js"></script>
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/scripts/siminta.js"></script>-->
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url(); ?>backend_assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/plugins/morris/morris.js"></script>-->
    <!--<script src="<?php /*echo base_url(); */?>backend_assets/scripts/dashboard-demo.js"></script>-->

    <script>
        $(".welcome_msg").fadeOut(3000);
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
    <!--/Datepicker-->
    <script src="<?php echo base_url('backend_assets/scripts/FormValidation.js');?>"></script>

</body>
</html>