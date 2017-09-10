<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {
    public static $model = 'MyModel';

	public function __construct(){
		parent:: __construct();
        $this->load->model(self::$model);

        //Check loged in or not
        $user_name = $this->session->userdata('user_name');
        $lnd_nid= $this->session->userdata('lnd_nid');
        $user_type = $this->session->userdata('user_type');
        if( ($user_name == NULL or $lnd_nid == NULL) and $user_type == NULL ){
           redirect('login');
        }

        //Notification data after login
        $notification_data = array();

        $user_type      = $this->session->userdata('user_type');
        $user_fullname  = $this->session->userdata('user_fullname');

        $renterDriverSuccess  = $this->session->userdata('renterDriverSuccess');
        $renterDriverFailure  = $this->session->userdata('renterDriverFailure');
        $error_msg_photo_renter  = $this->session->userdata('error_msg_photo_renter');
        $message  = $this->session->userdata('message');
        $renterAddedFailure  = $this->session->userdata('renterAddedFailure');

        $notification_data[] = isset($user_type)?$user_type:'';
        $notification_data[] = isset($user_fullname)?$user_fullname:'';
        $notification_data[] = isset($renterDriverSuccess)?$renterDriverSuccess:'';
        $notification_data[] = isset($renterDriverFailure)?$renterDriverFailure:'';
        $notification_data[] = isset($error_msg_photo_renter)?$error_msg_photo_renter:'';
        $notification_data[] = isset($message)?$message:'';
        $notification_data[] = isset($renterAddedFailure)?$renterAddedFailure:'';

        $this->session->set_userdata('notification_data',$notification_data);

	}

	public function index()
    {
        if ($this->session->userdata('user_type') == "landlord"){
            $id = $this->session->userdata('user_name');
            $data['renter_tracking_tbl'] = $this->MyModel->findById('renter_tracking_tbl', 'lnd_nid', $id);
            $this->load->view("dashboard/dashboard_master", $data);
        }else{
            $this->load->view("dashboard/dashboard_master");
        }
	}


	public function logout()
	{
        $this->session->sess_destroy();
		/*$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_pass");
		$this->session->unset_userdata("user_type");
		$sdata["message"] = "You are successfully logout";
		$this->session->set_userdata($sdata);*/
		redirect("home");
	}

	public function renterRegisterForm()
	{
		$data["renterForm"] = $this->load->view("dashboard/renterForm", "", true);
		$this->load->view("dashboard/dashboard_master", $data);
	}

    //Renter Registration
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
            $reterData['renter_fullname'] = $this->input->post('renter_name');
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

    //Add New Renter page
    public function addNewRenter(){

        $data["addNewRenterPage"] = $this->load->view('dashboard/addNewRenterToLet', "", true);
        $this->load->view("dashboard/dashboard_master", $data);
        
    }

    //Add New Renter To Let
    public function addNewRenterToLet(){

        if (!empty($_POST['renter_nid'])) {
           $data["renter_nid"]   = $_POST['renter_nid'];

            $where = $data;
            $renter_check_r = $this->MyModel->renter_check('renter', $where);

            $where2['lnd_nid'] = $this->session->userdata('user_name');
            $where2['user_type'] = "landlord";

            $lnd_check_r = $this->MyModel->landlord_check('landloard', $where2);

            if ($renter_check_r and $lnd_check_r) {

                //Renter info for renter_tracking_tbl Table
                $trackingData["renter_id"]          = $renter_check_r->renter_id;
                $trackingData["renter_fullname"]    = $renter_check_r->renter_fullname;
                $trackingData["renter_phone"]       = $renter_check_r->renter_phone;
                $trackingData["renter_nid"]         = $renter_check_r->renter_nid;
                $trackingData["renter_permanent_add"] = $renter_check_r->renter_permanent_add;
                $trackingData["renter_photo"]       = $renter_check_r->renter_photo;

                //First Find Renter
                //$found = $this->MyModel->findById('renter_tracking_tbl','renter_nid',$trackingDataRen["renter_nid"]);
                /*if ($found){
                    $trackingData["tracking_id"] = $found[0]->tracking_id;
                }else{
                    return false;
                }*/

                //If not found then insert
                /*$res = $this->MyModel->save('renter_tracking_tbl', $trackingDataRen);
                if ($res){

                }*/

                //Landlord info for renter_tracking_tbl_details Table
                $trackingData["lnd_id"]             = $lnd_check_r->lnd_id;
                $trackingData["lnd_fullname"]       = $lnd_check_r->lnd_fullname;
                $trackingData["lnd_phone"]          = $lnd_check_r->lnd_phone;
                $trackingData["lnd_nid"]            = $lnd_check_r->lnd_nid;
                $trackingData["lnd_police_station"] = $lnd_check_r->lnd_police_station;
                $trackingData["lnd_holding_no"]     = $lnd_check_r->lnd_holding_no;
                $trackingData["lnd_road_no"]        = $lnd_check_r->lnd_road_no;
                $trackingData["lnd_locality"]       = $lnd_check_r->lnd_locality;
                $trackingData["lnd_postcode"]       = $lnd_check_r->lnd_postcode;
                $trackingData["lnd_photo"]          = $lnd_check_r->lnd_photo;

                //Date
                $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
                $todayDate = $dt->format('Y-m-d h:i:s');

                //update last row's date field using today's date
                //First Find Renter
                $found = $this->MyModel->findById('renter_tracking_tbl','renter_nid',$trackingData["renter_nid"]);
                if ($found){
                    $renter_ending_date_previous_data['renter_ending_date'] = $todayDate;
                    $renter_ending_date_previous_data['renter_status'] = "inactive";
                    $where= array();
                    $where['renter_nid'] = $renter_check_r->renter_nid;
                    $this->MyModel->updateLastRow("renter_tracking_tbl","tracking_id", $where, $renter_ending_date_previous_data);
                }

                //Insert new date for new row
                $trackingData["renter_started_date"] = $todayDate;
                $trackingData["renter_ending_date"] = $todayDate;
                $trackingData['renter_status'] = "active";

                $result = $this->MyModel->addNewRenterToLetM('renter_tracking_tbl', $trackingData);

                if($result){
                    echo "<p style='color:green'>Renter inserted Successfull!!</p>";
                }else{
                    echo "<p style='color:red'>Try again!! Ranter has not been inserted</p>";
                }
            }else{
                echo "<p style='color:red'>Failure!! The Renter hasn't been registered yet. Please register first</p>";
            }
        }else{
            echo "<p style='color:red;'>Please enter Renter National ID</p>";
            redirect('super_admin/addNewRenter');
        }
    }

    //View Find Renter location by Metro police
    public function findRenterLocation(){
        $data["findRenterLocation"] = $this->load->view('dashboard/findRenterLocation', "", true);
        $this->load->view("dashboard/dashboard_master", $data);
    }

    //Find Renter location by Metro police
    public function findRenterLocationFromDB($download = ''){

        if (!empty($_POST["search_renter"]) || !empty($download)) {
            if (!empty($download)) {
                $search_renter = $download;
            }else{
                $search_renter = $_POST["search_renter"];
            }
            
            $result  = $this->MyModel->findRenterLocationFromDBM($search_renter);

            //$count = $result->num_rows;
            if($result){
                $results = json_encode($result);
                $data['results'] = json_decode($results, true);

                if (!empty($download)) {

                    $html = $this->load->view('dashboard/findRenterLocationResult', $data, true);

                    //Start New mpdf
                    $mpdf = new mPDF( '',  // mode (default '')
                    'A4', 0, '', // format ('A4', '' or...), font size(default 0), font family
                    15, 15, 16, 16, 9, 9, //(margins) left, right, top, bottom, HEADER, FOOTER
                    'L');

                   // Write some HTML code:
                   $mpdf->WriteHTML($html);

                   // Output a PDF file directly to the browser
                   $pdfFileName = 'report_'.date('Y-m-d-H-i-s');
                   $mpdf->Output($pdfFileName.'.pdf', "D");
                   //End New mpdf

                }else{
                    $this->load->view('dashboard/findRenterLocationResult', $data);
                }




                //Deprecated for constructor issue
                //Start Mpdf

                /*$data = [];
                $html=$this->load->view('welcome_message', $data, true);
         
                //this the the PDF filename that user will get to download
                $pdfFilePath = "output_pdf_name.pdf";
         
                //load mPDF library
                $this->load->library('m_pdf');
         
               //generate the PDF from the given html
                $this->m_pdf->pdf->WriteHTML($html);
         
                //download it.
                $this->m_pdf->pdf->Output($pdfFilePath, "I");*/     

                //End Mpdf

            }else{
                echo "<p style='color:red; border:1px solid red; padding:10px;'>Result not found</p>";
            }
        }else{
            echo "<p style='color:red; border:1px solid red; padding:10px;'>Please type something</p>";
        }

    }

    //Find Renter location by Metro police
    public function findRenterLocationDetailsDownload(){

        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('Find renter details');
        $pdf->SetHeaderMargin(30);
        $pdf->SetTopMargin(20);
        $pdf->setFooterMargin(20);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Md. Bablu Mia');
        $pdf->SetDisplayMode('real', 'default');

        //remove header and footer border
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        // add a page 
        $pdf->AddPage();

        // reset pointer to the last page
        //$pdf->lastPage();

        $html = "<h1>Test PDF</h1>";
        $pdf->writeHTML($html, true, false, true, false, '');
        
        ob_clean();

        //Direct Download
        $pdf->Output("filenametodownload.pdf", 'D');

        //Preview Download
        //$pdf->Output('pdfexample.pdf', 'I');
       
        end_ob_clean();

    }

    /*
     * Renter CRUD
     */

    //Renter View
    public function renterManage()
    {
        $data["renter_all"] = $this->MyModel->findAll('renter', 'renter_id');
        $page['renterManagePage'] = $this->load->view('dashboard/renterManagePage', $data, TRUE);
        $this->load->view("dashboard/dashboard_master", $page);
    }

    //Renter Update Form
    public function renter_update_form()
    {
        $data=array();
        $id = $this->input->post('renter_id');
        $data['renterData'] = $this->MyModel->findById('renter','renter_id', $id);
        $data['renterDriverData'] = $this->MyModel->findById('renter_driver','renter_id', $id);
        $data['renterFamilyMData'] = $this->MyModel->findById('renter_familymember','renter_id', $id);
        $data['renterHomeWrkData'] = $this->MyModel->findById('renter_homeworker','renter_id', $id);
        //die(print_r($data));
        if ($data) {
            $updateForm = $this->load->view('dashboard/renter_update_page', $data, TRUE);
            echo $updateForm;
            exit;
        }
    }

    //Renter Update
    public function updateRenter()
    {
        //die(print_r($_POST));
        $reterData = array();

        //Start upload picture
        if(!empty($_FILES['renter_photo']['name'])){ //if($_FILES['image']['error'] == 0){
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = date("Y-m-d-H-i-s")."_".str_replace(' ', '-', $_FILES['renter_photo']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            //$this->upload->initialize($config);

            if($this->upload->do_upload('renter_photo')){
                $finfo=$this->upload->data();

                //Image Manipulation
                $config['image_library']    = "gd2";
                $config['source_image']     = "uploads/" .$finfo['file_name']; //$finfo['full_path']
                $config['maintain_ratio']   = TRUE;
                $config['width']            = "160";
                $config['height']           = "200";

                $this->load->library('image_lib',$config);

                if(!$this->image_lib->resize())
                {
                    echo $this->image_lib->display_errors();
                }
                //End Image Manipulation

                //$renter_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                $renter_photo = $finfo['file_name'];
            }else{
                $renter_photo = '';
            }
        }else{
            $renter_photo = '';
        }
        //End upload picture

        //Data check
        if (!empty($_POST['renter_name']) && !empty($_POST['renter_nid'])) {
            $renter_id = $this->input->post('renter_id');
            //Renter Table (1)
            $reterData['renter_fullname'] = $this->input->post('renter_name');
            $reterData['user_type'] = "renter";
            $reterData['renter_father_name'] = $this->input->post('renter_father_name');

           // $renter_birth_date = strtotime($_POST['renter_birth_date']);
            $reterData['renter_birth_date']=date("Y-m-d", strtotime(str_replace('/', '-', $this->input->post('renter_birth_date'))));

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
            $reterData['renter_present_start_date'] = date("Y-m-d", strtotime(str_replace('/', '-', $this->input->post('renter_present_start_date'))));

            $reterData['renter_division'] = $this->input->post('renter_division');
            $reterData['renter_district'] = $this->input->post('renter_district');
            $reterData['renter_police_station'] = $this->input->post('renter_police_station');
            $reterData['renter_flat_floor_no'] = $this->input->post('renter_flat_floor_no');
            $reterData['renter_holding_no'] = $this->input->post('renter_holding_no');
            $reterData['renter_road_no'] = $this->input->post('renter_road_no');
            $reterData['renter_locality'] = $this->input->post('renter_locality');
            $reterData['renter_postcode'] = $this->input->post('renter_postcode');

            if(!empty($renter_photo)){
                $reterData['renter_photo'] = $renter_photo;

                //unlink the file
                $result = $this->MyModel->FindById('renter','renter_id', $renter_id);
                if($result){
                    unlink('uploads/'.$result->renter_photo);
                    //unlink('publicity/images/publicity_img/'.str_replace("_thumb","", $result->publicity_photo));
                }
            }


            $renterInsertId = $this->MyModel->update('renter','renter_id',$renter_id, $reterData);

            if ($renterInsertId){
                $sdata['message'] = 'Renter updated successfully';
                $sdata['success'] = 'Renter updated successfully';

                //renter_familymember Table (02)
                $renterFMData['family_member_id'] = $this->input->post('family_member_id');
                $renterFMData['family_member_name'] = $this->input->post('family_member_name');
                $renterFMData['family_member_age'] = $this->input->post('family_member_age');
                $renterFMData['family_member_job'] = $this->input->post('family_member_job');
                $renterFMData['family_member_phone'] = $this->input->post('family_member_phone');

                //Form array type data fetch
                for($i = 0; $i < count($renterFMData['family_member_name']); $i++) {
                    $batch[] = array(
                        "family_member_id" => $renterFMData['family_member_id'][$i],
                        "family_member_name" => $renterFMData['family_member_name'][$i],
                        "family_member_age" => $renterFMData['family_member_age'][$i],
                        "family_member_job" => $renterFMData['family_member_job'][$i],
                        "family_member_phone" => $renterFMData['family_member_phone'][$i]
                    );
                }
                //die(var_dump($batch));
                $renterFMInsertId = $this->MyModel->updateByBatch('renter_familymember','family_member_id',$batch);

                if($renterFMInsertId){
                    $sdata['success'] = 'Renter family member updated successfully';
                }else{
                    $sdata['failure'] = 'Renter family member updated failure';
                }

                //If new family member added in form then insert instead of update
                $newRenterFMData['renter_id'] = $renter_id;
                $newRenterFMData['family_member_name'] = $this->input->post('new_family_member_name');
                $newRenterFMData['family_member_age'] = $this->input->post('new_family_member_age');
                $newRenterFMData['family_member_job'] = $this->input->post('new_family_member_job');
                $newRenterFMData['family_member_phone'] = $this->input->post('new_family_member_phone');

                if ($newRenterFMData['family_member_name']){
                    for($i = 0; $i < count($newRenterFMData['family_member_name']); $i++)
                        $newBatch[] = array(
                            "renter_id" => $renter_id,
                            "family_member_name" => $newRenterFMData['family_member_name'][$i],
                            "family_member_age" => $newRenterFMData['family_member_age'][$i],
                            "family_member_job" => $newRenterFMData['family_member_job'][$i],
                            "family_member_phone" => $newRenterFMData['family_member_phone'][$i]
                        );
                    $this->MyModel->saveByBatch('renter_familymember',$newBatch);
                }

                //renter_homeworker Table (03)
                $homeworker_id = $this->input->post('homeworker_id');
                $renterHWData['homeworker_name'] = $this->input->post('homeworker_name');
                $renterHWData['homeworker_nid'] = $this->input->post('homeworker_nid');
                $renterHWData['homeworker_phone'] = $this->input->post('homeworker_phone');
                $renterHWData['homeworker_permanent_add'] = $this->input->post('homeworker_permanent_add');

                $renterHWInsertId = $this->MyModel->update('renter_homeworker','homeworker_id',$homeworker_id,$renterHWData);

                if($renterHWInsertId){
                    $sdata['renterHWSuccess'] = 'Renter home worker updated successfully';
                }else{
                    $sdata['renterHWFailure'] = 'Renter home worker updated failure!';
                }

                //renter_driver Table (04)
                $driver_id = $this->input->post('driver_id');
                $renter_driverData['driver_name'] = $this->input->post('driver_name');
                $renter_driverData['driver_nid'] = $this->input->post('driver_nid');
                $renter_driverData['driver_phone'] = $this->input->post('driver_phone');
                $renter_driverData['driver_permanent_add'] = $this->input->post('driver_permanent_add');

                $renterDriverInsertId = $this->MyModel->update('renter_driver','driver_id',$driver_id,$renter_driverData);

                if($renterDriverInsertId){
                    $sdata['renterDriverSuccess'] = 'Renter driver updated successfully';
                }else{
                    $sdata['renterDriverFailure'] = 'Renter driver updated failure!';
                }

                $this->session->set_userdata($sdata);
                //Error msg for picture upload
                if($renter_photo == ''){
                    $this->session->set_flashdata('error_msg_photo_renter', 'Photo has not been updated');
                }
                redirect('super_admin/renterManage');
            }else{
                $sdata['message'] = 'Try again! Renter updated failure';
                $sdata['renterAddedFailure'] = 'Try again! Renter updated failure';
                $this->session->set_userdata($sdata);
                redirect('super_admin/renterManage');
            }

        }else{
            redirect('super_admin/renterManage');
        }
    }
    //End Renter Update

    /*
     * Landlord CRUD
     */

    //Renter View
    public function landlordManage()
    {
        $data["landlord_all"] = $this->MyModel->findAll('landloard', 'lnd_id');
        $page['renterManagePage'] = $this->load->view('dashboard/landlordManagePage', $data, TRUE);
        $this->load->view("dashboard/dashboard_master", $page);
    }

    //Renter Update Form Data
    public function landlord_update_form()
    {
        $data=array();
        $id = $this->input->post('lnd_id');
        //die($id);
        $data['lndData'] = $this->MyModel->findById('landloard','lnd_id', $id);
        $data['lndDriverData'] = $this->MyModel->findById('lnd_driver','lnd_id', $id);
        $data['lndFamilyMData'] = $this->MyModel->findById('lnd_familymember','lnd_id', $id);
        $data['lndHomeWrkData'] = $this->MyModel->findById('lnd_homeworker','lnd_id', $id);
        //die(var_dump($data));

        if ($data) {
            $updateForm = $this->load->view('dashboard/landlord_update_page', $data, TRUE);
            echo $updateForm;
            exit;
        }
    }

    //Renter Update
    public function updateLandlord()
    {
        //die(print_r($_POST));
        $lndData = array();
        $lnd_id = $this->input->post('lnd_id');

        //Start upload picture
        if(!empty($_FILES['lnd_photo']['name'])){ //if($_FILES['image']['error'] == 0){
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = date("Y-m-d-H-i-s")."_".str_replace(' ', '-', $_FILES['lnd_photo']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            //$this->upload->initialize($config);

            if($this->upload->do_upload('lnd_photo')){
                $finfo=$this->upload->data();

                //Image Manipulation
                $config['image_library']    = "gd2";
                $config['source_image']     = "uploads/" .$finfo['file_name']; //$finfo['full_path']
                $config['maintain_ratio']   = TRUE;
                $config['width']            = "160";
                $config['height']           = "200";

                $this->load->library('image_lib',$config);

                if(!$this->image_lib->resize())
                {
                    echo $this->image_lib->display_errors();
                }
                //End Image Manipulation

                //$renter_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                $lnd_photo = $finfo['file_name'];
            }else{
                $lnd_photo = '';
            }
        }else{
            $lnd_photo = '';
        }
        //End upload picture

        if (!empty($_POST['lnd_name']) && !empty($_POST['lnd_nid'])) {
            //lnd Table (1)
            //$lnd_id = $this->input->post('lnd_id');
            $lndData['lnd_pass'] = $this->input->post('user_pass');
            $lndData['user_type'] = $this->input->post('user_type');
            $lndData['lnd_fullname'] = $this->input->post('lnd_name');
            $lndData['lnd_father_name'] = $this->input->post('lnd_father_name');

            $lnd_birth_date = strtotime($_POST['lnd_birth_date']);
            $lndData['lnd_birth_date']=date("Y-m-d",$lnd_birth_date); /* password*/
            /*$lndData['lnd_birth_date'] = $this->input->post('lnd_birth_date'); /* password*/

            $lndData['lnd_maritial_status'] = $this->input->post('lnd_maritial_status');
            $lndData['lnd_permanent_add'] = $this->input->post('lnd_permanent_add');
            $lndData['lnd_profession_institute'] = $this->input->post('lnd_profession_institute');
            $lndData['lnd_religion'] = $this->input->post('lnd_religion');
            $lndData['lnd_educational_status'] = $this->input->post('lnd_educational_status');
            $lndData['lnd_phone'] = $this->input->post('lnd_phone');
            $lndData['lnd_email'] = $this->input->post('lnd_email');
            $lndData['lnd_nid'] = $this->input->post('lnd_nid'); /* user_name*/
            $lndData['lnd_passport'] = $this->input->post('lnd_passport');
            $lndData['lnd_emergency_name'] = $this->input->post('lnd_emergency_name');
            $lndData['lnd_emergency_relation'] = $this->input->post('lnd_emergency_relation');
            $lndData['lnd_emergency_address'] = $this->input->post('lnd_emergency_address');
            $lndData['lnd_emergency_phone'] = $this->input->post('lnd_emergency_phone');

            $lndData['lnd_previous_landlord_name'] = $this->input->post('lnd_previous_landlord_name');
            $lndData['lnd_previous_landlord_phone'] = $this->input->post('lnd_previous_landlord_phone');
            $lndData['lnd_previous_landlord_permanent_add'] = $this->input->post('lnd_previous_landlord_permanent_add');

            $lndData['lnd_prvious_leave_reason'] = $this->input->post('lnd_prvious_leave_reason');

            $lndData['lnd_present_landlord_name'] = $this->input->post('lnd_present_landlord_name');
            $lndData['lnd_present_landlord_phone'] = $this->input->post('lnd_present_landlord_phone');
            $lndData['lnd_present_start_date'] = $this->input->post('lnd_present_start_date');

            $lndData['lnd_division'] = $this->input->post('lnd_division');
            $lndData['lnd_district'] = $this->input->post('lnd_district');
            $lndData['lnd_police_station'] = $this->input->post('lnd_police_station');
            $lndData['lnd_flat_floor_no'] = $this->input->post('lnd_flat_floor_no');
            $lndData['lnd_holding_no'] = $this->input->post('lnd_holding_no');
            $lndData['lnd_road_no'] = $this->input->post('lnd_road_no');
            $lndData['lnd_locality'] = $this->input->post('lnd_locality');
            $lndData['lnd_postcode'] = $this->input->post('lnd_postcode');

            if(!empty($lnd_photo)){
                $lndData['lnd_photo'] = $lnd_photo;

                //unlink the file
                $result = $this->MyModel->FindById('landloard','lnd_id', $lnd_id);
                if($result){
                    unlink('uploads/'.$result->lnd_photo);
                    //unlink('publicity/images/publicity_img/'.str_replace("_thumb","", $result->publicity_photo));
                }
            }

            $lndInsertId = $this->MyModel->update('landloard','lnd_id',$lnd_id, $lndData);

            if ($lndInsertId){
                $sdata['success'] = 'Landlord updated successfully';
                $sdata['lndAddedSussess'] = 'Landlord updated successfully';

                //lnd_familymember Table (02)
                $lndFMData['family_member_id'] = $this->input->post('family_member_id');
                $lndFMData['family_member_name'] = $this->input->post('family_member_name');
                $lndFMData['family_member_age'] = $this->input->post('family_member_age');
                $lndFMData['family_member_job'] = $this->input->post('family_member_job');
                $lndFMData['family_member_phone'] = $this->input->post('family_member_phone');

                //Form array type data fetch
                for($i = 0; $i < count($lndFMData['family_member_name']); $i++) {
                    $batch[] = array(
                        "family_member_id" => $lndFMData['family_member_id'][$i],
                        "family_member_name" => $lndFMData['family_member_name'][$i],
                        "family_member_age" => $lndFMData['family_member_age'][$i],
                        "family_member_job" => $lndFMData['family_member_job'][$i],
                        "family_member_phone" => $lndFMData['family_member_phone'][$i]
                    );
                }
                //die(var_dump($batch));

                $lndFMInsertId = $this->MyModel->updateByBatch('lnd_familymember','family_member_id',$batch);

                if($lndFMInsertId){
                    $sdata['success'] = 'Landlord family member updated successfully';
                }else{
                    $sdata['failure'] = 'Landlord family member updated failure';
                }

                //If new family member added in form then insert instead of update
                $newLndFMData['family_member_name'] = $this->input->post('new_family_member_name');
                $newLndFMData['family_member_age'] = $this->input->post('new_family_member_age');
                $newLndFMData['family_member_job'] = $this->input->post('new_family_member_job');
                $newLndFMData['family_member_phone'] = $this->input->post('new_family_member_phone');

                if ($newLndFMData['family_member_name']){
                    for($i = 0; $i < count($newLndFMData['family_member_name']); $i++)
                        $newBatch[] = array(
                            "lnd_id" => $lnd_id,
                            "family_member_name" => $newLndFMData['family_member_name'][$i],
                            "family_member_age" => $newLndFMData['family_member_age'][$i],
                            "family_member_job" => $newLndFMData['family_member_job'][$i],
                            "family_member_phone" => $newLndFMData['family_member_phone'][$i]
                        );
                    $this->MyModel->saveByBatch('lnd_familymember', $newBatch);
                }

                //lnd_homeworker Table (03)
                $homeworker_id = $this->input->post('homeworker_id');
                $lndHWData['lnd_id'] = $lndInsertId; /* foreign key*/
                $lndHWData['homeworker_name'] = $this->input->post('homeworker_name');
                $lndHWData['homeworker_nid'] = $this->input->post('homeworker_nid');
                $lndHWData['homeworker_phone'] = $this->input->post('homeworker_phone');
                $lndHWData['homeworker_permanent_add'] = $this->input->post('homeworker_permanent_add');

                $lndHWInsertId = $this->MyModel->update('lnd_homeworker','homeworker_id',$homeworker_id, $lndHWData);


                if($lndHWInsertId){
                    $sdata['success'] = 'Landlord home worker updated successfully';
                }else{
                    $sdata['failure'] = 'Landlord home worker updated failure!';
                }

                //lnd_driver Table (04)
                $driver_id = $this->input->post('driver_id'); /* foreign key*/
                $lnd_driverData['lnd_id'] = $lndInsertId; /* foreign key*/
                $lnd_driverData['driver_name'] = $this->input->post('driver_name');
                $lnd_driverData['driver_nid'] = $this->input->post('driver_nid');
                $lnd_driverData['driver_phone'] = $this->input->post('driver_phone');
                $lnd_driverData['driver_permanent_add'] = $this->input->post('driver_permanent_add');

                $lndDriverInsertId = $this->MyModel->update('lnd_driver','driver_id',$driver_id,$lnd_driverData);

                if($lndDriverInsertId){
                    $sdata['success'] = 'Landlord driver updated successfully';
                }else{
                    $sdata['failure'] = 'Landlord driver updated failure!';
                }
                //Error msg for picture upload
                if($lnd_photo == ''){
                    $sdata['error_msg_photo_renter'] = 'Photo has not been updated!!';
                }
                $this->session->set_userdata($sdata);

                redirect('super_admin/landlordManage');
            }else{
                $sdata['message'] = 'Try again! Landlord updated failure';
                $sdata['failure'] = 'Try again! Landlord updated failure';
                $this->session->set_userdata($sdata);
                redirect('super_admin/landlordManage');
            }
        }else{
            $sdata['message'] = 'Try again! Landlord updated failure';
            $sdata['failure'] = 'Try again! Landlord updated failure';
            $this->session->set_userdata($sdata);
            redirect('super_admin/landlordManage');
        }

    }
    //End Landlord Update

    /*
     * General CRUD
     */

    //General User View
    public function generalUserManage()
    {
        $data["generalUserAll"] = $this->MyModel->findAll('ads_account_general', 'ad_id');
        $page['renterManagePage'] = $this->load->view('dashboard/generalUserManagePage', $data, TRUE);
        $this->load->view("dashboard/dashboard_master", $page);
    }

    //Renter Update Form
    public function general_user_update_form()
    {
        $data=array();
        $id = $this->input->post('ad_id');
        $data['generalUserData'] = $this->MyModel->findById('ads_account_general','ad_id', $id);
        //die(print_r($data));
        if ($data) {
            $updateForm = $this->load->view('dashboard/general_user_update_page', $data, TRUE);
            echo $updateForm;
            exit;
        }
    }

    //General User Update
    public function generalUserUpdate(){
        $id = $this->input->post('ad_id');
        //die($id);

        //Start upload picture
        if(!empty($_FILES['ad_user_photo']['name'])){ //if($_FILES['image']['error'] == 0){
            $config['upload_path'] = 'uploads/general_user/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = date("Y-m-d-H-i-s")."_".str_replace(' ', '-', $_FILES['ad_user_photo']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('ad_user_photo')){
                $finfo=$this->upload->data();
                //Image Manipulation
                $config['image_library']    = "gd2";
                $config['source_image']     = "uploads/general_user/" .$finfo['file_name']; //$finfo['full_path']
                $config['maintain_ratio']   = TRUE;
                $config['width']            = "160";
                $config['height']           = "200";

                $this->load->library('image_lib',$config);

                if(!$this->image_lib->resize())
                {
                    echo $this->image_lib->display_errors();
                }
                //End Image Manipulation

                //$renter_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                $ad_user_photo = $finfo['file_name'];
            }else{
                $ad_user_photo = '';
            }
        }else{
            $ad_user_photo = '';
        }
        //End upload picture

        $data['ad_lnd_first_name'] = $this->input->post('ad_lnd_first_name');
        $data['ad_lnd_last_name'] = $this->input->post('ad_lnd_last_name');
        $data['ad_lnd_username'] = $this->input->post('ad_lnd_username');
        $data['ad_lnd_password'] = $this->input->post('ad_lnd_password');
        $data['ad_lnd_police_station'] = $this->input->post('ad_lnd_police_station');
        $data['ad_lnd_holding_no'] = $this->input->post('ad_lnd_holding_no');
        $data['ad_lnd_road_no'] = $this->input->post('ad_lnd_road_no');
        $data['ad_lnd_locality'] = $this->input->post('ad_lnd_locality');
        $data['ad_lnd_postcode'] = $this->input->post('ad_lnd_postcode');
        $data['ad_lnd_mobile'] = $this->input->post('ad_lnd_mobile');

        if(!empty($ad_user_photo)){
            $data['ad_user_photo'] = $ad_user_photo;
        }


        $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
        $todayDate = $dt->format('Y-m-d h:i:s');
        $data['ad_modified_date']   = $todayDate;
        $result = $this->MyModel->update('ads_account_general','ad_id',$id, $data);

        if ($result) {
            $sdata["successMsg"] = "User Updated successfully";
            $this->session->set_userdata($sdata);
            redirect("super_admin/generalUserManage");
        }else{
            $sdata["failure"] = "Try again";
            $this->session->set_userdata($sdata);
            redirect("super_admin/generalUserManage");
        }
    }
    //End General User Update

    //Renter Status by date
    public function renterStatus()
    {
        $id = $this->session->userdata('user_name');
        $data['results'] = $this->MyModel->findById('renter_tracking_tbl','lnd_nid', $id);
        //die(var_dump($data));
        $page['renterForm'] = $this->load->view("dashboard/renterStatusForLnd", $data, true);
        $this->load->view("dashboard/dashboard_master", $page);
    }



}