<!--  wrapper -->
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="<?php echo base_url('super_admin/updateLandlord');?>" method="post" role="form" enctype="multipart/form-data">

                            <input type="hidden" name="lnd_id" value="<?php echo isset($lndData[0]->lnd_id)?$lndData[0]->lnd_id:''; ?>">

                            <div class="col-md-4">
                                <div class="row">
                                    <?php if ($lndData[0]->lnd_photo): ?>
                                    <img style="margin-left: 40px;" id='lnd_photo_preview' src="<?php echo base_url('uploads/'.$lndData[0]->lnd_photo);?>" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="lnd_division">বিভাগঃ</label>
                                        <input readonly="readonly" class="form-control" type="text" value="<?php echo $lndData[0]->lnd_division; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="lnd_district">জেলাঃ</label>
                                        <input readonly="readonly" value="<?php echo $lndData[0]->lnd_district; ?>" type="text" name="lnd_district" id="lnd_district" class="form-control" placeholder="জেলা">
                                    </div>

                                </div>
                            </div> <hr/>

                            <div class="form-group">
                                <label for="lnd_police_station">থানাঃ</label>
                                <?php echo form_error('lnd_police_station'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_police_station; ?>" type="text" name="lnd_police_station" id="lnd_police_station" class="form-control" placeholder="থানাঃ">
                            </div>

                            <div class="form-group">
                                <label for="lnd_flat_floor_no">ফ্ল্যাট / তলাঃ</label>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_flat_floor_no; ?>" type="text" name="lnd_flat_floor_no" id="lnd_flat_floor_no" class="form-control" placeholder="ফ্ল্যাট / তলাঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_holding_no">হোল্ডিং নম্বরঃ</label>
                                <?php echo form_error('lnd_holding_no'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_holding_no; ?>" type="text" name="lnd_holding_no" id="lnd_holding_no" class="form-control" placeholder="বাড়ী / হোল্ডিং নম্বরঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_road_no">রাস্তাঃ</label>
                                <?php echo form_error('lnd_road_no'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_road_no; ?>" type="text" name="lnd_road_no" id="lnd_road_no" class="form-control" placeholder="রাস্তাঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_locality">এলাকাঃ</label>
                                <?php echo form_error('lnd_locality'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_locality; ?>" type="text" name="lnd_locality" id="lnd_locality" class="form-control" placeholder="এলাকাঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_postcode">পোস্ট কোডঃ</label>
                                <?php echo form_error('lnd_postcode'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_postcode; ?>" type="text" name="lnd_postcode" id="lnd_postcode" class="form-control" placeholder="পোস্ট কোডঃ">
                            </div>

                            <div class="form-group">
                                <label for="lnd_name">বাড়িওয়ালা নামঃ</label>
                                <?php echo form_error('lnd_name'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_fullname; ?>" type="text" name="lnd_name" id="lnd_name" class="form-control" placeholder="বাড়িওয়ালা নামঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_father_name">পিতার নামঃ</label>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_father_name; ?>" type="text" name="lnd_father_name" id="lnd_father_name" class="form-control" placeholder="পিতার নামঃ">
                            </div>
                            <div class="form-group">
                                <label for="popupDatepickerFrontEnd">জন্ম তারিখঃ</label>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_birth_date; ?>" type="text" name="lnd_birth_date" id="popupDatepickerFrontEnd" class="form-control" placeholder="জন্ম তারিখঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_maritial_status">বৈবাহিক অবস্থাঃ</label>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_maritial_status; ?>" type="text" name="lnd_maritial_status" id="lnd_maritial_status" class="form-control" placeholder="বৈবাহিক অবস্থাঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_permanent_add">স্থায়ী ঠিকানাঃ</label>
                                <textarea readonly="readonly" name="lnd_permanent_add" id="lnd_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"><?php echo $lndData[0]->lnd_permanent_add; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lnd_profession_institute">পেশা ও প্রতিষ্ঠান / কর্মস্থলের ঠিকানাঃ</label>
                                <textarea readonly="readonly" name="lnd_profession_institute" id="lnd_profession_institute" class="form-control" placeholder="পেশা ও প্রতিষ্ঠান / কর্মস্থলের ঠিকানাঃ" rows="1"><?php echo $lndData[0]->lnd_profession_institute; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="lnd_religion">ধর্মঃ</label>
                                <input readonly="readonly" class="form-control" type="text" value="<?php echo $lndData[0]->lnd_religion; ?>">
                            </div>

                            <div class="form-group">
                                <label for="lnd_educational_status">বর্তমান শিক্ষাগত যোগ্যতাঃ</label>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_educational_status; ?>" type="text" name="lnd_educational_status" id="lnd_educational_status" class="form-control" placeholder="বর্তমান শিক্ষাগত যোগ্যতাঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_phone">মোবাইল নম্বরঃ</label>
                                <?php echo form_error('lnd_phone'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_phone; ?>" type="text" name="lnd_phone" id="lnd_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_email">ই-মেইল আইডিঃ</label>
                                <p id="lnd_emailMsg" style="text-transform: initial" class="help-block"></p>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_email; ?>" type="text" id="lnd_email" name="lnd_email" class="form-control" placeholder="ই-মেইল আইডিঃ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_nid">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                                <p id="lnd_nidMsg" style="text-transform: initial" class="help-block"></p>
                                <?php echo form_error('lnd_nid'); ?>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_nid; ?>" type="text" id="lnd_nid" name="lnd_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ ">
                            </div>
                            <div class="form-group">
                                <label for="lnd_passport">পাসপোর্ট নম্বর (যদি থাকে)</label>
                                <p id="lnd_passportMsg" style="text-transform: initial" class="help-block"></p>
                                <input readonly="readonly" value="<?php echo $lndData[0]->lnd_passport; ?>" type="text" id="lnd_passport" name="lnd_passport" class="form-control" placeholder="পাসপোর্ট নম্বর (যদি থাকে)">
                            </div>

                            <div class="form-group">
                                <label>জরুরী যোগাযোগঃ</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lnd_emergency_name">(ক) নামঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndData[0]->lnd_emergency_name; ?>" type="text" name="lnd_emergency_name" id="lnd_emergency_name" class="form-control" placeholder="(ক) নামঃ">
                                        </div>
                                        <div class="form-group">
                                            <label for="lnd_emergency_relation">(খ) সম্পর্কঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndData[0]->lnd_emergency_relation; ?>" type="text" name="lnd_emergency_relation" id="lnd_emergency_relation" class="form-control" placeholder="(খ) সম্পর্কঃ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lnd_emergency_address">(গ) ঠিকানাঃ</label>
                                            <textarea readonly="readonly" name="lnd_emergency_address" id="lnd_emergency_address" class="form-control" placeholder="(গ) ঠিকানাঃ" rows="1"><?php echo $lndData[0]->lnd_emergency_address; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="lnd_emergency_phone">(ঘ) মোবাইল নম্বরঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndData[0]->lnd_emergency_phone; ?>" type="text" name="lnd_emergency_phone" id="lnd_emergency_phone" class="form-control" placeholder="(ঘ) মোবাইল নম্বরঃ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    পরিবার সদস্যদের বিবরণঃ
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="member-add-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>ক্রঃ নং</th>
                                                <th>নাম</th>
                                                <th>বয়স</th>
                                                <th>পেশা</th>
                                                <th colspan="2">মোবাইল নম্বর</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0; foreach ($lndFamilyMData as $key1 => $renterFamilyMDataRow) : ?>
                                                <tr>
                                                    <input value="<?php echo $renterFamilyMDataRow->family_member_id;?>" type="hidden" name="family_member_id[]">
                                                    <td><?php echo ++$i;?></td>
                                                    <td><?php echo $renterFamilyMDataRow->family_member_name;?></td>
                                                    <td><?php echo $renterFamilyMDataRow->family_member_age;?></td>
                                                    <td><?php echo $renterFamilyMDataRow->family_member_job;?></td>
                                                    <td colspan="2"><?php echo $renterFamilyMDataRow->family_member_phone;?></td>
                                                </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input readonly="readonly" value="<?php echo $lndHomeWrkData[0]->homeworker_id;?>" name="homeworker_id" type="hidden">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="homeworker_name">গৃহকর্মীর নামঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndHomeWrkData[0]->homeworker_name;?>" type="text" name="homeworker_name" id="homeworker_name" class="form-control" placeholder="গৃহকর্মীর নামঃ">
                                        </div>
                                        <div class="form-group">
                                            <label for="homeworker_phone">মোবাইল নম্বরঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndHomeWrkData[0]->homeworker_phone;?>" type="text" name="homeworker_phone" id="homeworker_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="homeworker_nid">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndHomeWrkData[0]->homeworker_nid;?>" type="text" name="homeworker_nid" id="homeworker_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                                        </div>
                                        <div class="form-group">
                                            <label for="homeworker_permanent_add">স্থায়ী ঠিকানাঃ</label>
                                            <textarea readonly="readonly" name="homeworker_permanent_add" id="homeworker_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"><?php echo $lndHomeWrkData[0]->homeworker_permanent_add;?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> <hr/>

                            <div class="form-group">
                                <div class="row">
                                    <input value="<?php echo $lndDriverData[0]->driver_id;?>" type="hidden" name="driver_id" id="driver_id">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">ড্রাইভারের নামঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndDriverData[0]->driver_name;?>" type="text" name="driver_name" id="driver_name" class="form-control" placeholder="ড্রাইভারের নামঃ">
                                        </div>
                                        <div class="form-group">
                                            <label for="driver_phone">মোবাইল নম্বরঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndDriverData[0]->driver_phone;?>" type="text" name="driver_phone" id="driver_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_nid">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                                            <input readonly="readonly" value="<?php echo $lndDriverData[0]->driver_nid;?>" type="text" name="driver_nid" id="driver_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                                        </div>
                                        <div class="form-group">
                                            <label for="driver_permanent_add">স্থায়ী ঠিকানাঃ</label>
                                            <textarea readonly="readonly" name="driver_permanent_add" id="driver_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"><?php echo $lndDriverData[0]->driver_permanent_add;?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
<!-- end wrapper -->