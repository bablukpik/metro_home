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
        <li style="padding: 10px 10px; margin-right:5px;"><i style="color: #fff; font-size: 50px;" class="fa fa-clock-o" aria-hidden="true"></i><span class="top-label label label-warning"><?php  date_default_timezone_set('Asia/Dhaka'); echo date("l, d F Y"); ?></span></li>
        <?php if($this->session->userdata("user_type") == 'landlord') : ?>
            <li style="padding: 10px 10px; margin-right:5px;"><i style="color: #fff; font-size: 50px;" class="fa fa-home" aria-hidden="true"></i><span class="top-label label label-warning"> <?php $i=0; if (isset($renter_tracking_tbl)) { foreach ($renter_tracking_tbl as $key => $obj) { if (date($obj->renter_started_date) == date($obj->renter_ending_date)) {++$i;}}} echo $i; ?></span></li>
        <?php endif;?>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span style="right: 45px;" class="top-label label label-warning"><?php $allNotification = $this->session->userdata('notification_data'); echo count(array_filter($allNotification));?></php></span>  <i class="fa fa-bell fa-3x"></i>
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
                <i class="fa fa-user fa-3x"></i> <span class="top-label label label-warning"> <?php if($this->session->userdata("user_type") == 'landlord') echo "Landlord";?> <?php if($this->session->userdata("user_type") == 'admin') echo "Admin";?> <?php if($this->session->userdata("user_type") == 'metro_police') echo "Police";?> <?php if($this->session->userdata("user_type") == 'general') echo "General";?></span>
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