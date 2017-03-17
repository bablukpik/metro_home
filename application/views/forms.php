<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Home info System</title>
    <!-- Core CSS - Include with every page -->
    <link href="backend_assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="backend_assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="backend_assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="backend_assets/css/style.css" rel="stylesheet" />
    <link href="backend_assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
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
                <a class="navbar-brand" href="index.html">
                    <img src="backend_assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                                <img src="backend_assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" name="" type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li class="selected">
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">ভাড়াটিয়া নিবন্ধন</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							সঠিক তথ্য দিয়ে নিচের ফরমটি পূরণ করুন।
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
										
										<div class="row">
											<div class="col-lg-12">
												<img style="margin-right: 10px" src="backend_assets/img/dmp-logo.png" alt="DMP" class="img-responsive pull-left" width="100"/>												
												<img src="backend_assets/img/intro_title.png" alt="ঢাকা মেট্রোপলিটন পুলিশ" class="img-responsive pull-left" width="450"/>
											</div>
										</div> <hr/>
										
										<div class="col-md-4">
											<div class="row">
												<img src="backend_assets/img/UserAltPhoto.png" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
												<div class="form-group"><br>
													<label>আপনার ছবি দিন</label>
													<input type="file" name="renter_photo" type="file">
												</div>												
											</div>
										</div>
										<div class="col-md-8">
											<div class="row">										
												<div class="form-group">
													<select name="renter_religion" class="form-control">
														<option disabled selected>আপনার বিভাগ নির্বাচন করুন</option>
														<option>Dhaka</option>
														<option>Chittagong</option>
														<option>Rajshahi</option>
														<option>Barisal</option>
														<option>Khulna</option>
														<option>Sylhet</option>
														<option>Rangpur</option>
														<option>Mymensingh</option>
													</select>
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="জেলা">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="থানাঃ">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="ফ্ল্যাট / তলাঃ">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="বাড়ী / হোল্ডিং নম্বরঃ">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="রাস্তাঃ">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="এলাকাঃ">
												</div>										
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="পোস্ট কোডঃ">
												</div>
											</div>
										</div> <hr/>
										
                                        <div class="form-group">
                                            <input type="text" name="renter_name" class="form-control" placeholder="ভাড়াটিয়া নামঃ">
                                            <p class="help-block">i.e Md. Masudul Islam</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_father_name" class="form-control" placeholder="পিতার নামঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_birth_date" class="form-control" placeholder="জন্ম তারিখঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_maritial_status" class="form-control" placeholder="বৈবাহিক অবস্থাঃ">
                                        </div>
                                        <div class="form-group">
											<textarea name="renter_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="renter_profession_institute" class="form-control" placeholder="পেশা ও প্রতিষ্ঠান / কর্মস্থলের ঠিকানাঃ" rows="1"></textarea>
                                        </div>
										
										<div class="form-group">
                                            <select name="renter_religion" class="form-control">
                                                <option disabled selected>আপনার ধর্ম নির্বাচন করুনঃ</option>
                                                <option>Islam</option>
                                                <option>Hinduism</option>
                                                <option>Buddhism</option>
                                                <option>Christian</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
										
                                        <div class="form-group">
                                            <input type="text" name="renter_educational_status" class="form-control" placeholder="বর্তমান শিক্ষাগত যোগ্যতাঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_email" class="form-control" placeholder="ই-মেইল আইডিঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_passport" class="form-control" placeholder="পাসপোর্ট নম্বর (যদি থাকে)">
                                        </div>
										
										<div class="form-group">
											<label>জরুরী যোগাযোগঃ</label>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_emergency_name" class="form-control" placeholder="(ক) নামঃ">
													</div>
													<div class="form-group">
														<input type="text" name="renter_emergency_relation" class="form-control" placeholder="(খ) সম্পর্কঃ">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<textarea name="renter_emergency_address" class="form-control" placeholder="(গ) ঠিকানাঃ" rows="1"></textarea>
													</div>
													<div class="form-group">
														<input type="text" name="renter_emergency_phone" class="form-control" placeholder="(ঘ) মোবাইল নম্বরঃ">
													</div>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												পরিবার / মেসের সঙ্গীয় সদস্যদের বিবরণঃ
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover table-responsive">
														<thead>
															<tr>
																<th>ক্রঃ নং</th>
																<th>নাম</th>
																<th>বয়স</th>
																<th>পেশা</th>
																<th>মোবাইল নম্বর</th>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td><input type="text" name="family_member_name"></td>
																<td><input type="text" name="family_member_age"></td>
																<td><input type="text" name="family_member_job"></td>
																<td><input type="text" name="family_member_phone"></td>
															</tr>
														</tbody>
													</table>
													<button type="submit" class="btn btn-primary pull-right">সদস্য যুক্ত করুন</button>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_homeworker_name" class="form-control" placeholder="গৃহকর্মীর নামঃ">
													</div>
													<div class="form-group">
														<input type="text" name="renter_homeworker_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_homeworker_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
													</div>
													<div class="form-group">
														<textarea name="renter_homeworker_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"></textarea>
													</div>
												</div>
											</div>
										</div> <hr/>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_driver_name" class="form-control" placeholder="ড্রাইভারের নামঃ">
													</div>
													<div class="form-group">
														<input type="text" name="renter_driver_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_driver_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
													</div>
													<div class="form-group">
														<textarea name="renter_driver_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"></textarea>
													</div>
												</div>
											</div>
										</div> <hr/>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_previous_landlord_name" class="form-control" placeholder="পূর্ববর্তী বাড়িওয়ালার নামঃ">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_previous_landlord_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
													</div>
												</div>
												
												<div class="col-md-12">
													<div class="form-group">
														<textarea name="renter_previous_landlord_permanent_add" class="form-control" placeholder="ঠিকানাঃ" rows="1"></textarea>
													</div>
												</div>
											</div>
										</div> <hr/>

                                        <div class="form-group">
                                            <textarea name="renter_prvious_leave_reason" class="form-control" placeholder="পূর্ববর্তী বাসা ছাড়ার কারণঃ" rows="1"></textarea>
                                        </div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_present_landlord_name" class="form-control" placeholder="বর্তমান বাড়িওয়ালার নামঃ" />
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" name="renter_present_landlord_phone" class="form-control" placeholder="মোবাইল নম্বরঃ" />
													</div>											
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<input type="text" name="renter_present_start_date" class="form-control" placeholder="বর্তমান বাড়িতে কোন তারিখ থেকে বসবাসরতঃ" />
										</div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="backend_assets/plugins/jquery-1.10.2.js"></script>
    <script src="backend_assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="backend_assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="backend_assets/plugins/pace/pace.js"></script>
    <script src="backend_assets/scripts/siminta.js"></script>

</body>

</html>
