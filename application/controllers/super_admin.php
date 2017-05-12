<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {
    public static $model = 'MyModel';

	public function __construct(){
		parent:: __construct();
        $this->load->model(self::$model);

        //Check loged in or not
        $user_name = $this->session->userdata('user_name');
        $lnd_nid= $this->session->userdata('lnd_nid');
        $user_type = $this->session->userdata('user_type');
        if( ($user_name == NULL or $lnd_nid==NULL) and $user_type==NULL ){
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
		redirect("home");
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
                //Renter info
                $trackingData["renter_id"]          = $renter_check_r->renter_id;
                $trackingData["renter_fullname"]    = $renter_check_r->renter_fullname;
                $trackingData["renter_phone"]       = $renter_check_r->renter_phone;
                $trackingData["renter_nid"]         = $renter_check_r->renter_nid;
                $trackingData["renter_permanent_add"] = $renter_check_r->renter_permanent_add;
                $trackingData["renter_photo"]       = $renter_check_r->renter_photo;

                //Landlord info
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

                $trackingData["renter_started_date"] = $todayDate;
                $trackingData["renter_ending_date"]   = $todayDate;
            
                $result = $this->MyModel->addNewRenterToLetM('renter_tracking_tbl', $trackingData);

                if($result){
                    echo "<p style='color:green'>Renter inserted Successfull!!</p>";
                }
                else{
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


    //Temp
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