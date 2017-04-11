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
<body>
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
	</div>
</header>

<nav class="mainmenu_sec">
	<div class="container"></div>
</nav>
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
        $('#popupDatepickerFrontEnd').datepick();
        console.log('colling');
    });
</script>
<!--/Datepicker-->

</body>
</html>