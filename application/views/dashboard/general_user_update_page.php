<!--  wrapper -->
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="color:red;">
                সঠিক তথ্য দিয়ে নিচের ফরমটি পূরণ করুন।
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="<?php echo base_url('super_admin/generalUserUpdate');?>" method="post" role="form" enctype="multipart/form-data">

                            <input type="hidden" name="ad_id" value="<?php echo isset($generalUserData[0]->ad_id)?$generalUserData[0]->ad_id:''; ?>">

                            <div class="col-md-3">
                                <div class="row">
                                    <?php if ($generalUserData[0]->ad_user_photo): ?>
                                    <img id='general_user_photo_preview' src="<?php echo base_url('uploads/general_user/'.$generalUserData[0]->ad_user_photo);?>" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                                    <?php else: ?>
                                    <img id='general_user_photo_preview' src="<?php echo base_url();?>backend_assets/img/UserAltPhoto.png" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                                    <?php endif; ?>
                                    <div class="form-group"><br>
                                        <label>আপনার ছবি দিন</label> <?php echo form_error('ad_user_photo', '<span class="error">', '</span>'); ?>
                                        <input id="ad_user_photo" type="file" name="ad_user_photo" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="lnd_district">First Name</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_first_name; ?>" type="text" name="ad_lnd_first_name" id="ad_lnd_first_name" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Second Name</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_last_name; ?>" type="text" name="ad_lnd_last_name" id="ad_lnd_last_name" class="form-control" placeholder="Second name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Username</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_username; ?>" type="text" name="ad_lnd_username" id="ad_lnd_username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Password</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_password; ?>" type="password" name="ad_lnd_password" id="ad_lnd_password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Police Station</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_police_station; ?>" type="text" name="ad_lnd_police_station" id="ad_lnd_police_station" class="form-control" placeholder="Police Station">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Holding No.</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_holding_no; ?>" type="text" name="ad_lnd_holding_no" id="ad_lnd_holding_no" class="form-control" placeholder="Holding No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Road No.</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_road_no; ?>" type="text" name="ad_lnd_road_no" id="ad_lnd_road_no" class="form-control" placeholder="Road No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Locality</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_locality; ?>" type="text" name="ad_lnd_locality" id="ad_lnd_locality" class="form-control" placeholder="Locality">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Post Code</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_postcode; ?>" type="text" name="ad_lnd_postcode" id="ad_lnd_postcode" class="form-control" placeholder="Post Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="lnd_district">Phone</label>
                                        <input value="<?php echo $generalUserData[0]->ad_lnd_mobile; ?>" type="text" name="ad_lnd_mobile" id="ad_lnd_mobile" class="form-control" placeholder="Phone">
                                    </div>

                                </div>
                            </div>
                            <button style="float: right" type="submit" class="btn btn-success submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
<!-- end wrapper -->