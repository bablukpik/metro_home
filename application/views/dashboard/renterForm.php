
    <div class="row">
        <!-- page header -->
        <div class="col-lg-12">
            <h1 class="page-header">ভাড়াটিয়া নিবন্ধন</h1>
        </div>
        <!--end page header -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <img style="margin-right: 10px" src="<?php echo base_url();?>backend_assets/img/dmp-logo.png" alt="DMP" class="img-responsive pull-left" width="100"/>
            <img src="<?php echo base_url();?>backend_assets/img/intro_title.png" alt="ঢাকা মেট্রোপলিটন পুলিশ" class="img-responsive pull-left" width="450"/>
        </div>
    </div>

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
                            <form action="<?php echo base_url('super_admin/registerRenter');?>" method="post" role="form" enctype="multipart/form-data">

                                <div class="col-md-4">
                                    <div class="row">
                                    <?php if(isset($renter_photo)) : ?>
                                        <img src="<?php echo base_url(). 'uploads/' . $renter_photo; ?>" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                                    <?php else: ?>
                                        <img id="renter_photo_preview" src="<?php echo base_url();?>backend_assets/img/UserAltPhoto.png" alt="আপনার ছবি দিন" class="img-thumbnail" width="150">
                                        <?php endif; ?>
                                        <div class="form-group"><br>
                                            <label>আপনার ছবি দিন</label> <?php echo form_error('renter_photo', '<span class="error">', '</span>'); ?>
                                            <input type="file" id="renter_photo" name="renter_photo" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group">
                                            <select name="renter_division" class="form-control">
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
                                            <input type="text" name="renter_district" class="form-control" placeholder="জেলা">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_police_station" class="form-control" placeholder="থানাঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_flat_floor_no" class="form-control" placeholder="ফ্ল্যাট / তলাঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_holding_no" class="form-control" placeholder="বাড়ী / হোল্ডিং নম্বরঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_road_no" class="form-control" placeholder="রাস্তাঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_locality" class="form-control" placeholder="এলাকাঃ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="renter_postcode" class="form-control" placeholder="পোস্ট কোডঃ">
                                        </div>
                                    </div>
                                </div> <hr/>

                                <div class="form-group">
                                    <input type="text" name="renter_name" class="form-control" placeholder="ভাড়াটিয়া নামঃ" required="required">
                                    <p class="help-block">i.e Md. Masudul Islam</p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="renter_father_name" class="form-control" placeholder="পিতার নামঃ">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="renter_birth_date" class="form-control popupDatepickerBackEnd" placeholder="জন্ম তারিখঃ">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="renter_maritial_status" class="form-control" placeholder="বৈবাহিক অবস্থাঃ">
                                </div>
                                <div class="form-group">
                                    <textarea name="renter_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1" required="required"></textarea>
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
                                    <input type="text" name="renter_phone" class="form-control" placeholder="মোবাইল নম্বরঃ" required="required">
                                </div>
                                <div class="form-group">
                                    <p id="renter_emailMsg" class="help-block"></p>
                                    <input type="text" id="renter_email" name="renter_email" class="form-control" placeholder="ই-মেইল আইডিঃ">
                                </div>
                                <div class="form-group">
                                    <p id="renter_nidMsg" class="help-block"></p>
                                    <input type="text" id="renter_nid" name="renter_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ " required="required">
                                </div>
                                <div class="form-group">
                                    <p id="renter_passportMsg" class="help-block"></p>
                                    <input type="text" id="renter_passport" name="renter_passport" class="form-control" placeholder="পাসপোর্ট নম্বর (যদি থাকে)">
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
                                            <button class="btn btn-primary pull-right">সদস্য যুক্ত করুন</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="homeworker_name" class="form-control" placeholder="গৃহকর্মীর নামঃ">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="homeworker_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="homeworker_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="homeworker_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> <hr/>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="driver_name" class="form-control" placeholder="ড্রাইভারের নামঃ">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="driver_phone" class="form-control" placeholder="মোবাইল নম্বরঃ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="driver_nid" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বরঃ">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="driver_permanent_add" class="form-control" placeholder="স্থায়ী ঠিকানাঃ" rows="1"></textarea>
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
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

