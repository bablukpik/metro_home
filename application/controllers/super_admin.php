<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {
    public static $model = 'MyModel';

	public function __construct(){
		parent:: __construct();
        $this->load->model(self::$model);

        $user_name = $this->session->userdata('user_name');
        $lnd_nid= $this->session->userdata('lnd_nid');
        $user_type = $this->session->userdata('user_type');
        if( ($user_name == NULL or $lnd_nid==NULL) and $user_type==NULL ){
           redirect('login');
        }

	}

	public function index()
	{
		$this->load->view("dashboard/dashboard_master");
	}

	public function logout()
	{
        $this->session->sess_destroy();
		/*$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_pass");
		$this->session->unset_userdata("user_type");
		$sdata["message"] = "You are successfully logout";
		$this->session->set_userdata($sdata);*/
		redirect("login");
	}

	public function renterRegisterForm()
	{
		$data["renterForm"] = $this->load->view("dashboard/renterForm", "", true);
		$this->load->view("dashboard/dashboard_master", $data);
	}


    public function registerRenter()
    {
        $reterData = array();

        //Start upload picture
        if(!empty($_FILES['renter_photo']['name'])){ //if($_FILES['image']['error'] == 0){
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = date("Y-m-d-H-i-s")."_".str_replace(' ', '-', $_FILES['renter_photo']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('renter_photo')){
                $finfo=$this->upload->data();
                $this->_createThumbnail($finfo['file_name']);
                $renter_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                //$renter_photo = $finfo['file_name'];
            }else{
                $renter_photo = '';
            }
        }else{
            $renter_photo = '';
        }
        //End upload picture

        //Data check
        if (!empty($_POST['renter_name']) && !empty($_POST['renter_birth_date']) && !empty($_POST['renter_nid'])) {

            //Renter Table (1)
            $reterData['user_fullname'] = $this->input->post('renter_name');
            $reterData['user_type'] = "renter";
            $reterData['renter_father_name'] = $this->input->post('renter_father_name');

            $renter_birth_date = strtotime($_POST['renter_birth_date']);
            $reterData['renter_birth_date']=date("Y-m-d",$renter_birth_date); /* password*/

            $reterData['renter_maritial_status'] = $this->input->post('renter_maritial_status');
            $reterData['renter_permanent_add'] = $this->input->post('renter_permanent_add');
            $reterData['renter_profession_institute'] = $this->input->post('renter_profession_institute');
            $reterData['renter_religion'] = $this->input->post('renter_religion');
            $reterData['renter_educational_status'] = $this->input->post('renter_educational_status');
            $reterData['renter_phone'] = $this->input->post('renter_phone');
            $reterData['renter_email'] = $this->input->post('renter_email');
            $reterData['renter_nid'] = $this->input->post('renter_nid'); /* user_name*/
            $reterData['renter_passport'] = $this->input->post('renter_passport');
            $reterData['renter_emergency_name'] = $this->input->post('renter_emergency_name');
            $reterData['renter_emergency_relation'] = $this->input->post('renter_emergency_relation');
            $reterData['renter_emergency_address'] = $this->input->post('renter_emergency_address');
            $reterData['renter_emergency_phone'] = $this->input->post('renter_emergency_phone');

            $reterData['renter_previous_landlord_name'] = $this->input->post('renter_previous_landlord_name');
            $reterData['renter_previous_landlord_phone'] = $this->input->post('renter_previous_landlord_phone');
            $reterData['renter_previous_landlord_permanent_add'] = $this->input->post('renter_previous_landlord_permanent_add');

            $reterData['renter_prvious_leave_reason'] = $this->input->post('renter_prvious_leave_reason');

            $reterData['renter_present_landlord_name'] = $this->input->post('renter_present_landlord_name');
            $reterData['renter_present_landlord_phone'] = $this->input->post('renter_present_landlord_phone');
            $reterData['renter_present_start_date'] = $this->input->post('renter_present_start_date');

            $reterData['renter_division'] = $this->input->post('renter_division');
            $reterData['renter_district'] = $this->input->post('renter_district');
            $reterData['renter_police_station'] = $this->input->post('renter_police_station');
            $reterData['renter_flat_floor_no'] = $this->input->post('renter_flat_floor_no');
            $reterData['renter_holding_no'] = $this->input->post('renter_holding_no');
            $reterData['renter_road_no'] = $this->input->post('renter_road_no');
            $reterData['renter_locality'] = $this->input->post('renter_locality');
            $reterData['renter_postcode'] = $this->input->post('renter_postcode');
            $reterData['renter_photo'] = $renter_photo;

            $renterInsertId = $this->MyModel->save_renter_reg_data($reterData);

            if ($renterInsertId){
                $sdata['message'] = 'Renter added successfully';
                $sdata['RenterAddedSussess'] = 'Renter added successfully';

                //renter_familymember Table (02)
                $renterFMData['renter_id'] = $renterInsertId; /* foreign key*/
                $renterFMData['family_member_name'] = $this->input->post('family_member_name');
                $renterFMData['family_member_age'] = $this->input->post('family_member_age');
                $renterFMData['family_member_job'] = $this->input->post('family_member_job');
                $renterFMData['family_member_phone'] = $this->input->post('family_member_phone');

                $renterFMInsertId = $this->MyModel->save_renterFM_data($renterFMData);

                if($renterFMInsertId){
                    $sdata['renterFMSuccess'] = 'Renter family member added successfully';
                }else{
                    $sdata['renterFMFailure'] = 'Renter family member added failure';
                }

                //renter_homeworker Table (03)
                $renterHWData['renter_id'] = $renterInsertId; /* foreign key*/
                $renterHWData['homeworker_name'] = $this->input->post('homeworker_name');
                $renterHWData['homeworker_nid'] = $this->input->post('homeworker_nid');
                $renterHWData['homeworker_phone'] = $this->input->post('homeworker_phone');
                $renterHWData['homeworker_permanent_add'] = $this->input->post('homeworker_permanent_add');

                $renterHWInsertId = $this->MyModel->save_renterHW_data($renterHWData);

                if($renterHWInsertId){
                    $sdata['renterHWSuccess'] = 'Renter home worker added successfully';
                }else{
                    $sdata['renterHWFailure'] = 'Renter home worker added failure!';
                }

                //renter_driver Table (04)
                $renter_driverData['renter_id'] = $renterInsertId; /* foreign key*/
                $renter_driverData['driver_name'] = $this->input->post('driver_name');
                $renter_driverData['driver_nid'] = $this->input->post('driver_nid');
                $renter_driverData['driver_phone'] = $this->input->post('driver_phone');
                $renter_driverData['driver_permanent_add'] = $this->input->post('driver_permanent_add');

                $renterDriverInsertId = $this->MyModel->save_renterDriver_data($renter_driverData);

                if($renterDriverInsertId){
                    $sdata['renterDriverSuccess'] = 'Renter driver added successfully';
                }else{
                    $sdata['renterDriverFailure'] = 'Renter driver added failure!';
                }

                $this->session->set_userdata($sdata);
                //Error msg for picture upload
                if($renter_photo == ''){
                    $this->session->set_flashdata('error_msg_photo_renter', 'Photo has not been uploaded');
                }
                redirect('super_admin');
            }else{
                $sdata['message'] = 'Try again! Renter added failure';
                $sdata['renterAddedFailure'] = 'Try again! Renter added failure';
                $this->session->set_userdata($sdata);
                redirect('super_admin/renterRegisterForm');
            }

        }else{
            redirect('super_admin/renterRegisterForm');
        }
    }
    //End Renter Registration

    function _createThumbnail($filename)
    {
        $config['image_library']    = "gd2";
        $config['source_image']     = "uploads/" .$filename;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width']            = "160";
        $config['height']           = "200";

        $this->load->library('image_lib',$config);

        if(!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
    }


	//Form validation for Renter
    public function checkDuplicateDataRenter()
    {
        //check email
        if(!empty($_POST['renter_email'])){
            $renter_email = $this->input->post('renter_email');
            $where = array("renter_email" => $renter_email);
            $result = $this->MyModel->checkDuplicateDataRenterM("renter", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }
        //check nid
        if(!empty($_POST['renter_nid'])){
            $renter_nid = $this->input->post('renter_nid');
            $where = array("renter_nid" => $renter_nid);
            $result = $this->MyModel->checkDuplicateDataRenterM("renter", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }

        //check passport
        if(!empty($_POST['renter_passport'])){
            $renter_passport = $this->input->post('renter_passport');
            $where = array("renter_passport" => $renter_passport);
            $result = $this->MyModel->checkDuplicateDataRenterM("renter", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }

    }
    //End Form validation for Renter

	//Form validation for Landlord
    public function checkDuplicateDataLandlord()
    {
        //check email
        if(!empty($_POST['lnd_email'])){
            $lnd_email = $this->input->post('lnd_email');
            $where = array("lnd_email" => $lnd_email);
            $result = $this->MyModel->checkDuplicateDataLandlordM("landloard", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }
        //check nid
        if(!empty($_POST['lnd_nid'])){
            $lnd_nid = $this->input->post('lnd_nid');
            $where = array("lnd_nid" => $lnd_nid);
            $result = $this->MyModel->checkDuplicateDataLandlordM("landloard", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }

        //check passport
        if(!empty($_POST['lnd_passport'])){
            $lnd_passport = $this->input->post('lnd_passport');
            $where = array("lnd_passport" => $lnd_passport);
            $result = $this->MyModel->checkDuplicateDataLandlordM("landloard", $where);
            if($result){
                echo TRUE; //echo for ajax because ajax will just load this file
            }
            else {
                echo FALSE;
            }
        }

    }
    //End Form validation for Landlord

    public function save_category()
    {
        if (!empty($this->input->post("categategory_name"))) {
            $data["categategory_name"]  = $this->input->post("categategory_name");
        }else{
            $sdata["message"] = "<span style='color:red;'>Please give categategory name</span>";
            $this->session->set_userdata($sdata);
            redirect("super_admin/add_category");
        }
        $data["category_description"] = $this->input->post("category_description");
        $data["category_status"] = $this->input->post("category_status");
        $result = $this->myModel->save_category_info($data);
        if ($result) {
            $sdata["message"] = "Category added successfully";
            $this->session->set_userdata($sdata);
            redirect("super_admin/add_category");
        }else{
            $sdata["message"] = "Category not added";
            $this->session->set_userdata($sdata);
            redirect("super_admin/add_category");
        }
    }

}