<!DOCTYPE HTML>
<html lang="en-US">
<head>

	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<title>Metro Home</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    
    <!--Datepicker-->
    <link href="<?php echo base_url(); ?>assets/datepicker/css/jquery.datepick.css" rel="stylesheet">
    <!--/Datepicker-->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css" />

</head>
<body style="font-family: solaimanlipi">
<!--Dialog for Landlord already registered-->
<section class="landlordExistDialog">
    <div class="container">
        <?php $this->load->view('dialogs/landLoardAlreadyRegistered_dialog'); ?>
    </div>
</section>
<!--End Dialog for Landlord already registered-->

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
		<nav class="navbar navbar-default">
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
				<li class="<?php echo (current_url()==base_url()) ? 'active':''?>"><a href="<?php echo base_url();?>">Home</a></li>
				<li class="<?=(current_url()==base_url('home/contact')) ? 'active':''?>"><a href="<?php echo base_url('home/contact');?>"">Contact</a></li>
				<li class="<?=(current_url()==base_url('home/about')) ? 'active':''?>"><a href="<?php echo base_url('home/about');?>"">About</a></li>
                <li><a class="removeActive" href="#" data-toggle="modal" data-target="#adsLogiOrSignup_dialog">Post Ads</a></li>
                <li class="<?php if($this->uri->segment(1)=="publicity"){echo "active";}?>"><a href="<?php echo base_url('publicity');?>">All Ads</a></li>
				<li>
                    <button type="button" id="loginBtn" style="color:#fff; text-transform: capitalize;" class="btn btn-success" data-toggle="modal"  data-placement="bottom" data-target="#login_dialog" data-title="Login">Sign in <span class="caret"></button>
                </li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</header>

<section class="dilogs_area">
    <div class="container">
        <?php $this->load->view('dialogs/adsLogiOrSignup_dialog');?>
        <?php $this->load->view('dialogs/login_dialog'); ?>
        <?php $this->load->view('dialogs/registration_dialog'); ?>
    </div>
</section>

<section class="alert_area" style="position: relative;">
    <div class="container" style="position: absolute;">
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
            <div class="welcome_msg alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?php echo isset($successMsg)?$successMsg:''; $this->session->unset_userdata('successMsg'); ?>
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
</section>

<section class="locationSearch">
    <div class="container">
        <!--start row-->
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <!--Content Or Pages-->
                        <?php echo isset($content)?$content:'';?>
                    </div> <!--End Full col-->
                </div>
            </div>

            <div class="col-md-3">
                <div class="homeRightSidebar">
                    <div class="city">
                        <h4>All City of Dhaka</h4>
                        <div class="all-city">
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Adabor'); ?>" target="_blank">Adabor (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1): if($row1->publicity_city=='Adabor'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Badda'); ?>" target="_blank">Badda (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Badda'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Bangsal'); ?>" target="_blank">Bangsal (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Bangsal'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Bimanbandar'); ?>" target="_blank">Bimanbandar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Bimanbandar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Cantonment'); ?>" target="_blank">Cantonment (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Cantonment'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/ChakBazar'); ?>" target="_blank">Chak Bazar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Chak Bazar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dakshinkhan'); ?>" target="_blank">Dakshinkhan (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Dakshinkhan'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/DarusSalam'); ?>" target="_blank">Darus Salam (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Darus Salam'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Demra'); ?>" target="_blank">Demra (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Demra'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dhamrai'); ?>" target="_blank">Dhamrai (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Dhamrai'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dhanmondi'); ?>" target="_blank">Dhanmondi (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Dhanmondi'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dohar'); ?>" target="_blank">Dohar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Dohar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Gendaria'); ?>" target="_blank">Gendaria (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Gendaria'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Gulshan'); ?>" target="_blank">Gulshan (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Gulshan'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Hazaribagh'); ?>" target="_blank">Hazaribagh (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Hazaribagh'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Jatrabari'); ?>" target="_blank">Jatrabari (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Jatrabari'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kadamtali'); ?>" target="_blank">Kadamtali (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Kadamtali'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kafrul'); ?>" target="_blank">Kafrul (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Kafrul'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kalabagan'); ?>" target="_blank">Kalabagan (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Kalabagan'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kamrangirchar'); ?>" target="_blank">Kamrangirchar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Kamrangirchar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Keraniganj'); ?>" target="_blank">Keraniganj (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Keraniganj'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Khilgaon'); ?>" target="_blank">Khilgaon (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Khilgaon'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/khilkhet'); ?>" target="_blank">khilkhet (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='khilkhet'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kotwali'); ?>" target="_blank">Kotwali (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Kotwali'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/mirpur'); ?>" target="_blank">Mirpur (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Mirpur'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Mohammadpur'); ?>" target="_blank">Mohammadpur (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Mohammadpur'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Motijheel'); ?>" target="_blank">Motijheel (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Motijheel'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Nawabganj'); ?>" target="_blank">Nawabganj (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Nawabganj'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Newmarket'); ?>" target="_blank">Newmarket (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Newmarket'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Pallabi'); ?>" target="_blank">Pallabi (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Pallabi'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Paltan'); ?>" target="_blank">Paltan (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Paltan'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Ramna'); ?>" target="_blank">Ramna (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Ramna'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Rampura'); ?>" target="_blank">Rampura (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Rampura'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sabujbagh'); ?>" target="_blank">Sabujbagh (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Sabujbagh'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Savar'); ?>" target="_blank">Savar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Savar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/ShahAli'); ?>" target="_blank">Shah Ali (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Shah Ali'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Shahbag'); ?>" target="_blank">Shahbag (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Shahbag'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sher-e-BanglaNagar'); ?>" target="_blank">Sher-e-Bangla Nagar (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Sher-e-Bangla Nagar'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Shyampur'); ?>" target="_blank">Shyampur (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Shyampur'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sutrapur'); ?>" target="_blank">Sutrapur (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Sutrapur'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Tejgaon'); ?>" target="_blank">Tejgaon (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Tejgaon'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Mohakhali'); ?>" target="_blank">Mohakhali (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Badda'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/TejgaonIndustrialArea'); ?>" target="_blank">Tejgaon Industrial Area (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Tejgaon Industrial Area'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Turag'); ?>" target="_blank">Turag (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Turag'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Uttara'); ?>" target="_blank">Uttara (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Uttara'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/UttarKhan'); ?>" target="_blank">Uttar Khan (<?php $count = 0; foreach (isset($totalNoOfHouse)?$totalNoOfHouse:array() as $key=>$row1):  if($row1->publicity_city=='Uttar Khan'): $count++; endif;?><?php endforeach; echo isset($count)?$count:'';?>)</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
</section>

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

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.plugin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.datepick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>

<script type="text/javascript">
	/*$(document).on("click","#bs-example-navbar-collapse-1 > ul > li > a", function(){
	   $("#bs-example-navbar-collapse-1 > ul > li").removeClass("active");
	   $(this).parent().addClass("active");
	});*/

	$(function () {
        active_nav();
    });
    function active_nav() {
        debugger
        var path = window.location.pathname;
        path = path.replace(/\/$/,"");
        path = decodeURIComponent(path);
        $(".navbar-default .navbar-nav>li>a").each(function () {
            var href = $(this).attr("href");
            if (path.substring(0,href.length==href)){
                $(this).closest("li").addClass("active");
            }
        });
    }
</script>

<!-- Datepicker -->
<script>
    $(function () {
        $('#popupDatepickerFrontEnd').datepick({dateFormat: 'dd/mm/yyyy'});
        console.log('calling Datepicker');
    });
</script>
<!-- /Datepicker-->
<script src="<?php echo base_url('backend_assets/scripts/FormValidation.js');?>"></script>
<script>
    $(".welcome_msg").fadeOut(9000);
</script>

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