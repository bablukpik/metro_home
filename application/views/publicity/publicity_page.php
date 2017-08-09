<!DOCTYPE html>
<html>
    <head>
        <title>Publicity</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/bootstrap-admin-theme-change-size.css">
        
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/DT_bootstrap.css">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
<body style="padding-top: 0px;">
    <section class="top_head_sec">
        <div class="container">
            <div class="top_menu_left float_left">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                <span>01730910539</span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>metrohomebd@gmail.com</span>
            </div>
            <div class="top_menu_right float_right">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#">Bangla/English</a></li>
                </ul>
            </div> 
        </div>
    </section>
    <header class="head_sec">
        <div class="container">
            <nav class="navbar navbar-default" style="background: transparent; border: none; box-shadow: none;">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <div class="logo">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" />
                    </div>
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="#">Info</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#adsLogiOrSignup_dialog">Post Ads</a></li>
                        <li><a href="<?php echo base_url('publicity');?>">All Ads</a></li>
                        <li>
                            <button type="button" id="loginBtn" style="color:#fff; text-transform: capitalize;" class="btn btn-success" data-toggle="modal"  data-placement="bottom" data-target="#login_dialog" data-title="Login">Sign in <span class="caret"></button>
                        </li>
                      </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

            <!--Landlord creation message-->
                <!--For image-->
            <?php if($this->session->userdata('error_msg_photo_lnd') || $this->session->userdata('successMsg') ||  $this->session->userdata('failureMsg')): ?>
            <div style="max-width: 350px; margin: 0 auto; position: relative; z-index:999999;">
                <?php if ($error_msg_photo_lnd =  $this->session->userdata('error_msg_photo_lnd')):?>
                <div class="welcome_msg alert alert-danger alert-dismissable" style="">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                        echo "<h4>".(isset($error_msg_photo_lnd)?$error_msg_photo_lnd:'')."</h4>";
                        $this->session->unset_userdata('error_msg_photo_lnd');
                    ?>
                </div>
                <?php endif; ?>

                    <!--For Data-->
                <?php if($successMsg =  $this->session->userdata('successMsg')):?>
                <div class="welcome_msg alert alert-success alert-dismissable" style="">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                        echo "<h4>".(isset($successMsg)?$successMsg:'')."</h4>";
                        $this->session->unset_userdata('successMsg');
                    ?>
                </div>
                <?php endif;?>

                 <!--For Failure-->
                <?php if($failureMsg =  $this->session->userdata('failureMsg')):?>
                <div class="welcome_msg alert alert-danger alert-dismissable" style="">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                        echo "<h4>".(isset($failureMsg)?$failureMsg:'')."</h4>";
                        $this->session->unset_userdata('failureMsg');
                    ?>
                </div>
                <?php endif;?>

            </div>
            <?php endif;?>
            <!--End Landlord creation message-->

        </div>
    </header>
    <!--End Header Nav Menu-->
    
    <section class="dilogs_area">
        <div class="container">
            <?php $this->load->view('dialogs/adsLogiOrSignup_dialog');?>
            <?php $this->load->view('dialogs/login_dialog'); ?>
            <?php $this->load->view('dialogs/registration_dialog'); ?>
        </div>
    </section>

    <!--Publicity Start-->
    <section class="publicity_area" style="margin-top: 10px">
        <div class="container">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="bootstrap-admin-box-title">Rent a House Online</div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <div id="example_wrapper" class="form-inline" role="grid">
                    
                        <!--Search and Nubmer of records-->
                        <div class="row">
                            <div class="col-md-6">
                                <div id="example_length" class="dataTables_length hidden-xs">
                                    <?php 
                                        echo form_open('publicity/index');
                                        $options = array(
                                                         '10' => '10',
                                                         '20' => '20',
                                                         '30' => '30',
                                                         '40' => '40');
                                        echo form_dropdown('sel',$options,'');
                                        echo form_submit('submit','submit',"class='btn btn-default' style='padding: 0 5px;'");
                                        echo form_close();
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dataTables_filter" id="example_filter" style="float:right; margin-bottom: 5px;">
                                    <form class="form-inline" action="<?php echo base_url('publicity/search_publicity') ?>" method="post">
                                      <div class="form-group">
                                        <input type="text" name="search_publicity" class="form-control" id="search_publicity" placeholder="Search">
                                      </div>
                                      <button type="submit" class="btn btn-info">Search</button>
                                    </form>
                                    <div class="search_result">

                                        
                                        <?php if ($result_found = $this->session->userdata('result_found')): ?>
                                        <p style="color:red"><?php echo $publicity_search_msg; ?></p>
                                        <p>Result Found: <?php echo $result_found; $this->session->unset_userdata('result_found'); ?></p>
                                        <?php endif; ?>

                                        <?php if($result_not_found = $this->session->userdata('result_not_found')): ?>
                                        <p style="color:red;">Click the Search Button again to refresh the page</p>
                                        <p><?php echo $result_not_found; $this->session->unset_userdata('result_not_found'); ?></p>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Search and Nubmer of records-->
                        <hr>
                        <div class="row">
                                
                            <div class="col-md-12">
                                <?php foreach ($result as $key => $value):?>
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3><?php echo $value->publicity_title; ?></h3>
                                        <p><?php echo $value->publicity_description; ?></p>
                                        <br>
                                        <address>
                                            <strong>Area: </strong><?php echo $value->publicity_city; ?><br>
                                            <strong>Per Month Rent: </strong><?php echo $value->publicity_charge_permonth; ?>/-
                                        </address>
                                        <address>
                                            <strong>Address: </strong><?php echo $value->publicity_address; ?><br>
                                            <strong>Mobile: </strong><?php echo $value->publicity_mobile; ?>
                                        </address>
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <div class="publicity_image clearfix" style="padding-bottom: 20px;">
                                            <?php if($value->publicity_photo): ?>
                                            <img src="<?php echo base_url(); ?>publicity/images/publicity_img/<?php echo $value->publicity_photo; ?>" alt="Publicity Image">
                                            <?php endif; ?>
                                        </div>
                                        <p style="float: right; margin-top: 20px;"><strong>Published Date:</strong> <?php echo date('d/m/Y',strtotime($value->publicity_created_date)); ?></p>
  
                                    </div>

                                </div>
                                <hr>
                                <?php endforeach; ?>
                            </div>
                           
                        </div>
                        
                        <!--pagination-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dataTables_info" id="example_info"><?php echo "Displaying $result_start to $result_end of $total"; ?> entries</div>
                            </div>
                            <div class="col-md-6">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <?php echo $pagination;?>
                                </div>
                            </div>
                        </div>
                        <!--End pagination-->        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Publicity Start-->
    
    <!-- Footer-->
    <section class="foot_top">
    
    </section>
    <footer class="foot_sec">
        <div class="container">
            <p>Copyright &copy; 2017, Metro Home. All rights reserved</p>
            <div class="dev_by">
                <span style="color: #F1F1F2;">Md. Bablu Mia, </span>
                <span style="color: #EC008B;">Biswanath Sarker, </span>
                <span>Sagor Sur</span>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
    <!-- End Footer-->
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/twitter-bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/bootstrap-admin-theme-change-size.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>


</body>
</html>