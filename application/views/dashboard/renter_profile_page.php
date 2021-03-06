<style>
    #renterUpdateForm .form-group{
        /* margin-right: 0px;
        margin-left: 0px; */
    }
    .form-horizontal .form-group {
        margin-right: 0px;
        margin-left: -15px;
    }
</style>
<div class="panel panel-default">
    <div class="panel-body">
        <form id="renterUpdateForm" action="<?php echo base_url('super_admin/updateRenter'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="renter_id" value="<?php echo isset($renterData[0]->renter_id)?$renterData[0]->renter_id:''; ?>">
            <!-- Image Upload -->
            <div class="col-md-4">
                <div class="row">
                    <?php if(isset($renterData[0]->renter_photo)) : ?>
                        <img id="renter_photo_preview" src="<?php echo base_url(). 'uploads/' . $renterData[0]->renter_photo; ?>" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                    <?php endif; ?>
                </div>
            </div>
            <!--End Image Upload -->

            <div class="col-md-8">
                <div class="form-group">
                    <label for="renter_division">বিভাগঃ</label>
                    <input readonly="readonly" type="text" class="form-control" value="<?php echo $renterData[0]->renter_division; ?>">
                </div>
                <div class="form-group">
                    <label for="renter_district">জেলাঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_district; ?>" id="renter_district" type="text" name="renter_district" class="form-control" placeholder="জেলা">
                </div>
                <div class="form-group">
                    <label for="renter_police_station">থানাঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_police_station; ?>" type="text" name="renter_police_station" id="renter_police_station" class="form-control" placeholder="থানাঃ">
                </div>
            </div> <hr/>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="renter_flat_floor_no">ফ্ল্যাটঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_flat_floor_no; ?>" type="text" name="renter_flat_floor_no" id="renter_flat_floor_no" class="form-control" placeholder="ফ্ল্যাট / তলাঃ">
                </div>
                <div class="form-group">
                    <label for="renter_holding_no">বাড়ী / হোল্ডিং নম্বরঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_holding_no; ?>" type="text" name="renter_holding_no" id="renter_holding_no" class="form-control" placeholder="বাড়ী / হোল্ডিং নম্বরঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">রাস্তাঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_road_no; ?>" type="text" name="renter_road_no" class="form-control" id="renter_road_no" placeholder="রাস্তাঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">এলাকাঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_locality; ?>" type="text" name="renter_locality" class="form-control" placeholder="এলাকাঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">পোস্ট কোডঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_postcode; ?>" type="text" name="renter_postcode" class="form-control" placeholder="পোস্ট কোডঃ">
                </div>
                <div class="form-group">
                    <label for="renter_name">ভাড়াটিয়া নামঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_fullname; ?>" type="text" name="renter_name" id="renter_name" class="form-control" placeholder="ভাড়াটিয়া নামঃ" required="required">
                    <p class="help-block">i.e Md. Masudul Islam</p>
                </div>
                <div class="form-group">
                    <label for="renter_road_no">পিতার নামঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_father_name; ?>" type="text" name="renter_father_name" class="form-control" placeholder="পিতার নামঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">জন্ম তারিখঃ</label>
                    <input readonly="readonly" value="<?php echo date("d/m/Y", strtotime($renterData[0]->renter_birth_date)); ?>" type="text" name="renter_birth_date" class="form-control" placeholder="জন্ম তারিখঃ">
                </div>
                <div class="form-group">
                    <label for="renter_maritial_status">বৈবাহিক অবস্থাঃ</label>
                    <input type="text" readonly="readonly" class="form-control" value="<?php echo $renterData[0]->renter_maritial_status; ?>">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">স্থায়ী ঠিকানাঃ</label>
                    <textarea readonly="readonly" name="renter_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1" required="required"><?php echo $renterData[0]->renter_permanent_add; ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="renter_road_no">পেশা ও প্রতিষ্ঠান / কর্মস্থলের ঠিকানাঃ</label>
                    <textarea readonly="readonly" name="renter_profession_institute" class="form-control" placeholder="পেশা ও প্রতিষ্ঠান / কর্মস্থলের ঠিকানাঃ" rows="1"><?php echo $renterData[0]->renter_profession_institute; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="renter_road_no">ধর্মঃ</label>
                    <input class="form-control" type="text" readonly="readonly" value="<?php echo $renterData[0]->renter_religion; ?>">
                </div>

                <div class="form-group">
                    <label for="renter_road_no">বর্তমান শিক্ষাগত যোগ্যতাঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_educational_status; ?>" type="text" name="renter_educational_status" class="form-control" placeholder="বর্তমান শিক্ষাগত যোগ্যতাঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">মোবাইল নম্বরঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_phone; ?>" type="text" name="renter_phone" class="form-control" placeholder="মোবাইল নম্বরঃ" required="required">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">ই-মেইল আইডিঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_email; ?>" type="text" id="renter_email" name="renter_email" class="form-control" placeholder="ই-মেইল আইডিঃ">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_nid; ?>" type="text" id="renter_nid" name="renter_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ " required="required">
                </div>
                <div class="form-group">
                    <label for="renter_road_no">পাসপোর্ট নম্বর (যদি থাকে)</label>
                    <input readonly="readonly" value="<?php echo $renterData[0]->renter_passport; ?>" type="text" id="renter_passport" name="renter_passport" class="form-control" placeholder="পাসপোর্ট নম্বর (যদি থাকে)">
                </div>

                <div class="form-group">
                    <div>জরুরী যোগাযোগঃ</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">(ক) নামঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_emergency_name; ?>" type="text" name="renter_emergency_name" class="form-control" placeholder="(ক) নামঃ">
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">(খ) সম্পর্কঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_emergency_relation; ?>" type="text" name="renter_emergency_relation" class="form-control" placeholder="(খ) সম্পর্কঃ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">(গ) ঠিকানাঃ</label>
                            <textarea readonly="readonly" name="renter_emergency_address" class="form-control" placeholder="(গ) ঠিকানাঃ" rows="1"><?php echo $renterData[0]->renter_emergency_address; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">(ঘ) মোবাইল নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_emergency_phone; ?>" type="text" name="renter_emergency_phone" class="form-control" placeholder="(ঘ) মোবাইল নম্বরঃ">
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        পরিবার / মেসের সঙ্গীয় সদস্যদের বিবরণঃ
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
                                <?php $i=0; foreach ($renterFamilyMData as $key1 => $renterFamilyMDataRow) : ?>
                                    <tr>
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
                    <input readonly="readonly" type="hidden" name="homeworker_id" value="<?php echo isset($renterHomeWrkData[0]->homeworker_id)?$renterHomeWrkData[0]->homeworker_id:''; ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">গৃহকর্মীর নামঃ</label>
                            <input readonly="readonly" value="<?php echo $renterHomeWrkData[0]->homeworker_name; ?>" type="text" name="homeworker_name" class="form-control" placeholder="গৃহকর্মীর নামঃ">
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">মোবাইল নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterHomeWrkData[0]->homeworker_phone; ?>" type="text" name="homeworker_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterHomeWrkData[0]->homeworker_nid; ?>" type="text" name="homeworker_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">স্থায়ী ঠিকানাঃ</label>
                            <textarea readonly="readonly" name="homeworker_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"><?php echo $renterHomeWrkData[0]->homeworker_permanent_add; ?></textarea>
                        </div>
                    </div>
                </div> <hr/>

                <div class="form-group">
                    <input type="hidden" name="driver_id" value="<?php echo isset($renterDriverData[0]->driver_id)?$renterDriverData[0]->driver_id:''; ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">ড্রাইভারের নামঃ</label>
                            <input readonly="readonly" value="<?php echo $renterDriverData[0]->driver_name; ?>" type="text" name="driver_name" class="form-control" placeholder="ড্রাইভারের নামঃ">
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">মোবাইল নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterDriverData[0]->driver_phone; ?>" type="text" name="driver_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">জাতীয় পরিচয়পত্র নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterDriverData[0]->driver_nid; ?>" type="text" name="driver_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                        </div>
                        <div class="form-group">
                            <label for="renter_road_no">স্থায়ী ঠিকানাঃ</label>
                            <textarea readonly="readonly" name="driver_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"><?php echo $renterDriverData[0]->driver_permanent_add; ?> </textarea>
                        </div>
                    </div>
                </div> <hr/>

                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">পূর্ববর্তী বাড়িওয়ালার নামঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_previous_landlord_name; ?>" type="text" name="renter_previous_landlord_name" class="form-control" placeholder="পূর্ববর্তী বাড়িওয়ালার নামঃ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">মোবাইল নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_previous_landlord_phone; ?>" type="text" name="renter_previous_landlord_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="renter_road_no">ঠিকানাঃ</label>
                            <textarea readonly="readonly" name="renter_previous_landlord_permanent_add" class="form-control" placeholder="ঠিকানাঃ" rows="1"><?php echo $renterData[0]->renter_previous_landlord_permanent_add; ?> </textarea>
                        </div>
                    </div>
                </div> <hr/>

                <div class="form-group">
                    <label for="renter_road_no">পূর্ববর্তী বাসা ছাড়ার কারণঃ</label>
                    <textarea readonly="readonly" name="renter_prvious_leave_reason" class="form-control" placeholder="পূর্ববর্তী বাসা ছাড়ার কারণঃ" rows="1"><?php echo $renterData[0]->renter_prvious_leave_reason; ?> </textarea>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">বর্তমান বাড়িওয়ালার নামঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_present_landlord_name; ?>" type="text" name="renter_present_landlord_name" class="form-control" placeholder="বর্তমান বাড়িওয়ালার নামঃ" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="renter_road_no">মোবাইল নম্বরঃ</label>
                            <input readonly="readonly" value="<?php echo $renterData[0]->renter_present_landlord_phone; ?>" type="text" name="renter_present_landlord_phone" class="form-control" placeholder="মোবাইল নম্বরঃ" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="renter_road_no">বর্তমান বাড়িতে কোন তারিখ থেকে বসবাসরতঃ</label>
                    <input readonly="readonly" value="<?php echo date("d/m/Y", strtotime($renterData[0]->renter_present_start_date)); ?>" type="text" name="renter_present_start_date" class="form-control datetimepicker" placeholder="বর্তমান বাড়িতে কোন তারিখ থেকে বসবাসরতঃ" />
                </div>

            </div>
        </form>
    </div>
</div>