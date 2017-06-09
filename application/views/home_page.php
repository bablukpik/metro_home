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
			  <a class="navbar-brand" href="#">
				<div class="logo">
					<img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" />
				</div>
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 
			  <ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
				<li><a href="#">Info</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Press</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rent Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#adsLogiOrSignup_dialog">Create Ads for Rent</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url('publicity');?>">Find House for Rent</a></li>
                    <li role="separator" class="divider"></li>
                  </ul>
                </li>

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

<section class="dilogs_area">
    <div class="container">
        <?php $this->load->view('dialogs/adsLogiOrSignup_dialog');?>
        <?php $this->load->view('dialogs/login_dialog'); ?>
        <?php $this->load->view('dialogs/registration_dialog'); ?>
    </div>
</section>

<section class="locationSearch">
    <div class="container">
        <!--start row-->
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-panel clearfix">
                            <h2 style="font-weight: bold;">Find Homes For Rent</h2>
                            <div class="search-form">
                                <form action="<?php echo base_url('publicity/search_publicity'); ?>" class="" method="post" target="_blank">
                                    <div class="homepage_search_formgroup" style="max-width: 800px; margin: 0 auto;">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <input type="text" name="home_search_publicity_loca" id="txtKeyword" class="form-control" required="required" placeholder="Enter your locality">
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <select name="home_search_publicity_city" required="required" class="form-control selectpicker" data-live-search="true">
                                                    <option disabled selected value="">Please select your area </option>
                                                    <option data-tokens="Adabor">Adabor</option>
                                                    <option data-tokens="Badda">Badda</option>
                                                    <option data-tokens="Bangsal">Bangsal</option>
                                                    <option data-tokens="Bimanbandar">Bimanbandar</option>
                                                    <option data-tokens="Cantonment">Cantonment</option>
                                                    <option data-tokens="Chak Bazar">Chak Bazar</option>
                                                    <option data-tokens="Dakshinkhan">Dakshinkhan</option>
                                                    <option data-tokens="Darus Salam">Darus Salam</option>
                                                    <option data-tokens="Demra">Demra</option>
                                                    <option data-tokens="Dhamrai">Dhamrai</option>
                                                    <option data-tokens="Dhanmondi">Dhanmondi</option>
                                                    <option data-tokens="Dohar">Dohar</option>
                                                    <option data-tokens="Gendaria">Gendaria</option>
                                                    <option data-tokens="Gulshan">Gulshan</option>
                                                    <option data-tokens="Hazaribagh">Hazaribagh</option>
                                                    <option data-tokens="Jatrabari">Jatrabari</option>
                                                    <option data-tokens="Kadamtali">Kadamtali</option>
                                                    <option data-tokens="Kafrul">Kafrul</option>
                                                    <option data-tokens="Kalabagan">Kalabagan</option>
                                                    <option data-tokens="Kamrangirchar">Kamrangirchar</option>
                                                    <option data-tokens="Keraniganj">Keraniganj</option>
                                                    <option data-tokens="Khilgaon">Khilgaon</option>
                                                    <option data-tokens="khilkhet">khilkhet</option>
                                                    <option data-tokens="Kotwali">Kotwali</option>
                                                    <option data-tokens="Lalbagh">Lalbagh</option>
                                                    <option data-tokens="Mirpur">Mirpur</option>
                                                    <option data-tokens="Mohammadpur">Mohammadpur</option>
                                                    <option data-tokens="Motijheel">Motijheel</option>
                                                    <option data-tokens="Nawabganj">Nawabganj</option>
                                                    <option data-tokens="Newmarket">Newmarket</option>
                                                    <option data-tokens="Pallabi">Pallabi</option>
                                                    <option data-tokens="Paltan">Paltan</option>
                                                    <option data-tokens="Ramna">Ramna</option>
                                                    <option data-tokens="Rampura">Rampura</option>
                                                    <option data-tokens="Sabujbagh">Sabujbagh</option>
                                                    <option data-tokens="Savar">Savar</option>
                                                    <option data-tokens="Shah Ali">Shah Ali</option>
                                                    <option data-tokens="Shahbag">Shahbag</option>
                                                    <option data-tokens="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                                    <option data-tokens="Shyampur">Shyampur</option>
                                                    <option data-tokens="Sutrapur">Sutrapur</option>
                                                    <option data-tokens="Tejgaon">Tejgaon</option>
                                                    <option data-tokens="Mohakhali">Mohakhali</option>
                                                    <option data-tokens="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
                                                    <option data-tokens="Turag">Turag</option>
                                                    <option data-tokens="Uttara">Uttara</option>
                                                    <option data-tokens="Uttar Khan">Uttar Khan</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-md-2">
                                                 <button type="submit" class="btn btn-info homepage_search_btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="home_guide">
                            <p>Metrohomebd.com-এ স্বাগতম - ঢাকা-এর সবচেয়ে বড় হোম রেন্ট প্লাটফর্ম ! আপনার পছন্দের বাসাটা খুঁজে নিন আর বাসা ভাড়া খোঁজার ঝামেলা থেকে বেঁচে যান!! এবং Metrohomebd.com আপনার সমস্ত তথ্য সংরক্ষণ করে এবং এটি সরাসরি Metro Police কর্তৃক নিয়ন্ত্রিত। প্রত্যেকেই নিরাপদ থাকুন এবং সন্ত্রাসবাদ-জঙ্গিবাদ মোকাবেলায় Police -কে সহযোগীতা করুন।</p>
                        </div>

                    </div> <!--End Full col-->
                </div>
            </div>

            <div class="col-md-3">
                <div class="homeRightSidebar">
                    <div class="city">
                        <h4>All City of Dhaka</h4>
                        <div class="all-city">
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Adabor'); ?>" target="_blank">Adabor</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Badda'); ?>" target="_blank">Badda</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Bangsal'); ?>" target="_blank">Bangsal</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Bimanbandar'); ?>" target="_blank">Bimanbandar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Cantonment'); ?>" target="_blank">Cantonment</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/ChakBazar'); ?>" target="_blank">Chak Bazar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dakshinkhan'); ?>" target="_blank">Dakshinkhan</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/DarusSalam'); ?>" target="_blank">Darus Salam</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Demra'); ?>" target="_blank">Demra</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dhamrai'); ?>" target="_blank">Dhamrai</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dhanmondi'); ?>" target="_blank">Dhanmondi</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Dohar'); ?>" target="_blank">Dohar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Gendaria'); ?>" target="_blank">Gendaria</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Gulshan'); ?>" target="_blank">Gulshan</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Hazaribagh'); ?>" target="_blank">Hazaribagh</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Jatrabari'); ?>" target="_blank">Jatrabari</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kadamtali'); ?>" target="_blank">Kadamtali</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kafrul'); ?>" target="_blank">Kafrul</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kalabagan'); ?>" target="_blank">Kalabagan</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kamrangirchar'); ?>" target="_blank">Kamrangirchar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Keraniganj'); ?>" target="_blank">Keraniganj</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Khilgaon'); ?>" target="_blank">Khilgaon</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/khilkhet'); ?>" target="_blank">khilkhet</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Kotwali'); ?>" target="_blank">Kotwali</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/mirpur'); ?>" target="_blank">Mirpur</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Mohammadpur'); ?>" target="_blank">Mohammadpur</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Motijheel'); ?>" target="_blank">Motijheel</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Nawabganj'); ?>" target="_blank">Nawabganj</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Newmarket'); ?>" target="_blank">Newmarket</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Pallabi'); ?>" target="_blank">Pallabi</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Paltan'); ?>" target="_blank">Paltan</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Ramna'); ?>" target="_blank">Ramna</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Rampura'); ?>" target="_blank">Rampura</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sabujbagh'); ?>" target="_blank">Sabujbagh</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Savar'); ?>" target="_blank">Savar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/ShahAli'); ?>" target="_blank">Shah Ali</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Shahbag'); ?>" target="_blank">Shahbag</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sher-e-BanglaNagar'); ?>" target="_blank">Sher-e-Bangla Nagar</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Shyampur'); ?>" target="_blank">Shyampur</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Sutrapur'); ?>" target="_blank">Sutrapur</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Tejgaon'); ?>" target="_blank">Tejgaon</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Mohakhali'); ?>" target="_blank">Mohakhali</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/TejgaonIndustrialArea'); ?>" target="_blank">Tejgaon Industrial Area</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Turag'); ?>" target="_blank">Turag</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/Uttara'); ?>" target="_blank">Uttara</a>
                            <a class="btn btn-default" href="<?php echo base_url('publicity/search_publicity/UttarKhan'); ?>" target="_blank">Uttar Khan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
</section>

<section class="body_sec">
	<div class="container">
		
        
	</div>
</section>
<section class="foot_top">
	
</section>
<footer class="foot_sec">
	<div class="container">
		<p>Copyright &copy; 2017, Metro Home. All rights reserved</p>
	</div>
</footer>

<script src="<?php /*echo base_url(); */?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.plugin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datepicker/js/jquery.datepick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).on("click","#bs-example-navbar-collapse-1 > ul > li > a", function(){
	   $("#bs-example-navbar-collapse-1 > ul > li").removeClass("active");
	   $(this).parent().addClass("active");
	   //alert("Test");
	});
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