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

        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>publicity/css/DT_bootstrap.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    <section class="publicity_area">
        <div class="container">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-muted bootstrap-admin-box-title">Houses For Rent</div>
                </div>
                <div class="bootstrap-admin-panel-content">
                    <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    
                        <!--Search and Nubmer of records-->
                        <div class="row">
                            <div class="col-md-6">
                                <div id="example_length" class="dataTables_length">
                                    <label><select size="1" name="example_length" aria-controls="example"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                                    </select> records per page</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dataTables_filter" id="example_filter">
                                    <label>
                                        Search: <input type="text" aria-controls="example">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--End Search and Nubmer of records-->
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                                <table class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>House Details</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr class="gradeC">
                                            <td>FAQ Private Limited
Senior Android App Developer
International software company with Head Office in Sydney, Australia
Fast-growing. development team based in Shyamoli Square, Dhaka
Working on App projects for the Australian Government
Education:
B.Sc. in Computer Science & Engineering from any reputable university
Experience:
At least 4 year(s)</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>FAQ Private Limited
Senior Android App Developer
International software company with Head Office in Sydney, Australia
Fast-growing. development team based in Shyamoli Square, Dhaka
Working on App projects for the Australian Government
Education:
B.Sc. in Computer Science & Engineering from any reputable university
Experience:
At least 4 year(s)</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>FAQ Private Limited
Senior Android App Developer
International software company with Head Office in Sydney, Australia
Fast-growing. development team based in Shyamoli Square, Dhaka
Working on App projects for the Australian Government
Education:
B.Sc. in Computer Science & Engineering from any reputable university
Experience:
At least 4 year(s)</td>
                                        </tr>
                                    </tbody>
                                </table>
                    
                            </div>
                        </div>
                        
                        <!--pagination-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dataTables_info" id="example_info">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-md-6">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <ul class="pagination">
                                        <li class="prev disabled"><a href="#">← Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="next"><a href="#">Next → </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End pagination-->        
                    </div>
                </div>
            </div>
        </div>
    </section>

     <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/twitter-bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>publicity/js/bootstrap-admin-theme-change-size.js"></script>



</body>
</html>