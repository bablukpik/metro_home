<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Metro Home</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/style.css" />
    <!--Datepicker-->
    <link href="<?php echo base_url(); ?>assets/datepicker/css/jquery.datepick.css" rel="stylesheet">
    <!--/Datepicker-->
</head>
<body style="font-family: solaimanlipi">
<section class="top_head_sec">
	<div class="container">
		<div class="top_menu_left float_left">
			<i class="fa fa-phone-square" aria-hidden="true"></i>
			<span>01730910539</span>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<span>bablukpik@gmail.com</span>
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
					<img src="assets/images/logo.png" alt="logo" />
				</div>
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 
			  <ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Info</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Home Rent</a></li>
				<li>
                    <button type="button" id="loginBtn" style="color:#fff; text-transform: capitalize;" class="btn btn-success" data-toggle="modal"  data-placement="bottom" data-target="#login_dialog" data-title="Login">Sign in <span class="caret"></button>

                    <?php $this->load->view('dialogs/login_dialog'); ?>
                    <?php $this->load->view('dialogs/registration_dialog'); ?>
                </li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
        <!--Landlord creation message-->
            <!--For image-->
        <?php if($this->session->userdata('error_msg_photo_lnd') || $this->session->userdata('message')): ?>
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
            <?php if($message =  $this->session->userdata('message')):?>
            <div class="welcome_msg alert alert-success alert-dismissable" style="">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                    echo "<h4>".(isset($message)?$message:'')."</h4>";
                    $this->session->unset_userdata('message');
                ?>
            </div>
            <?php endif;?>
        </div>
        <?php endif;?>
        <!--End Landlord creation message-->

	</div>
</header>

<nav class="mainmenu_sec">
	<div class="container"></div>
</nav>

<section class="locationSearch" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <!--<link rel="stylesheet" href="css/odometer-theme-default.css" />-->
                <div class="search-panel">
                    <h2>Find Homes For Rent</h2>
                    <div class="search-form">


                        <form action="#" method="post" target="_blank">

                            <div class="inner-addon keyword-search">
                                <i class="icon-tag"></i>
                                <input type="text" name="txtsearch" id="txtKeyword" class="form-control" placeholder="Search by keyword">
                            </div>

                            <div class="inner-addon categoryCombo hidden-sm hidden-xs">
                                <i class="icon-briefcase"></i>
                                <select name="qOT" id="qOT" class="form-control active">
                                    <option value="0" selected="">Please select your area </option>
                                    <option value="0">Adabor</option>
                                    <option value="0">Badda</option>
                                    <option value="0">Bangsal</option>
                                    <option value="0">Bimanbandar</option>
                                    <option value="0">Mirpur</option>
                                    <!--Adabor, Badda, Bangsal, Bimanbandar, Cantonment, Chak Bazar, Dakshinkhan, Darus Salam, Demra, Dhamrai Upazila, Dhanmondi, Dohar Upazila, Gendaria, Gulshan, Hazaribagh, Jatrabari, Kadamtali, Kafrul, Kalabagan, Kamrangirchar, Keraniganj Upazila, Khilgaon, khilkhet, Kotwali, Lalbagh, Mirpur, Mohammadpur, Motijheel, Nawabganj Upazila, Newmarket, Pallabi, Paltan, Ramna, Rampura, Sabujbagh, Savar Upazila, Shah Ali, Shahbag, Sher-e-Bangla Nagar, Shyampur, Sutrapur, Tejgaon, Mohakhali, Tejgaon Industrial Area, Turag, Uttara, Uttar Khan-->
                                    <!--<option value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Government</option>-->
                                </select>
                            </div>

                            <!--<a href="http://www.bdjobs.com/"  class="btn btn-default">
                              <i class="icon-search"></i>&nbsp;Search
                            </a>-->
                            <input type="hidden" id="hidJobSearch" name="hidJobSearch" value="jobsearch">
                            <input type="submit" class="btn btn-default" value="Search" onclick="Generategglevent()">
                        </form>
                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-12">


                <div class="sliderSidebar">
                    <div class="division">
                        <h4>Available Homes</h4>
                        <div class="all-division">
                            <a href="#" class="btn btn-default" target="_blank">Adabor <span>(2122)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Badda <span>(44)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Bangsal <span>(60)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Bimanbandar <span>(84)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Cantonment <span>(358)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Chak Bazar <span>(111)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Dakshinkhan <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Darus Salam <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Demra <span>(48)</span></a>
                            <!--<a href="#" class="btn btn-default" target="_blank">Dhamrai <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Dhanmondi <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Dohar Upazila <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Gendaria <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Gulshan <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Hazaribagh <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Jatrabari <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Kadamtali <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Kafrul <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Kalabagan <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Kamrangirchar <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Keraniganj <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Khilgaon <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">khilkhet <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Kotwali <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Lalbagh <span>(48)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Mirpur <span>(48)</span></a>-->
                            <!--Mohammadpur, Motijheel, Nawabganj Upazila, Newmarket, Pallabi, Paltan, Ramna, Rampura, Sabujbagh, Savar Upazila, Shah Ali, Shahbag, Sher-e-Bangla Nagar, Shyampur, Sutrapur, Tejgaon, Mohakhali, Tejgaon Industrial Area, Turag, Uttara, Uttar Khan-->
                            <!--<a href="http://www.bdjobs.com/"  class="btn btn-default">Mymensingh <span>()</span></a>-->
                            <a href="#" class="btn btn-default" target="_blank">Mymensingh <span>(20)</span></a>
                        </div>
                    </div>

                </div>
            </div>


            <script type="application/javascript">
                function init() {}
            </script>

            <!--eid background ends-->
        </div>
    </div>
</section>

<section class="body_sec">

	<div class="container">
		<div class="lorm">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur architecto incidunt, cumque qui laborum repellat praesentium, numquam fugit id, nihil sapiente reiciendis illo error deleniti doloremque quisquam recusandae optio!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur architecto incidunt, cumque qui laborum repellat praesentium, numquam fugit id, nihil sapiente reiciendis illo error deleniti doloremque quisquam recusandae optio!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur architecto incidunt, cumque qui laborum repellat praesentium, numquam fugit id, nihil sapiente reiciendis illo error deleniti doloremque quisquam recusandae optio!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur architecto incidunt, cumque qui laborum repellat praesentium, numquam fugit id, nihil sapiente reiciendis illo error deleniti doloremque quisquam recusandae optio!</p>
		</div>
		
	</div>
</section>
<section class="foot_top">
	
</section>
<footer class="foot_sec">
	<div class="container">
		<p>Copyright &copy; 2017, Metro Home. All rights reserved</p>
	</div>
</footer>

<!--<script src="<?php /*echo base_url(); */?>assets/js/jquery.min.js" type="text/javascript"></script>-->
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

<!--Datepicker-->
<script>
    $(function () {
        $('#popupDatepickerFrontEnd').datepick({dateFormat: 'dd/mm/yyyy'});
        console.log('colling');
    });
</script>
<!--/Datepicker-->

<script src="<?php echo base_url('backend_assets/scripts/FormValidation.js');?>"></script>
<script>
    $(".welcome_msg").fadeOut(9000);
</script>

</body>
</html>