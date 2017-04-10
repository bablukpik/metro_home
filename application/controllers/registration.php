<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public static $model = 'MyModel';
    const  TITLE = 'Metro Home';

    public function __construct()
    {
        parent::__construct();
        $this->load->model(self::$model);

    }

    public function index()
    {
        redirect('home');
    }

    public function onlineRegistration()
    {
        if ( !empty($_POST['user_pass']) && !empty($_POST['lnd_name']) && !empty($_POST['lnd_birth_date']) && !empty($_POST['lnd_nid']) ) {

            //lnd Table (1)
            //$lnd_id = $this->input->post('lnd_id');
            $lndData['user_pass'] = $this->input->post('user_pass');
            $lndData['user_type'] = $this->input->post('user_type');
            $lndData['user_fullname'] = $this->input->post('lnd_name');
            $lndData['lnd_father_name'] = $this->input->post('lnd_father_name');
            $lndData['lnd_birth_date'] = $this->input->post('lnd_birth_date'); /* password*/
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
            //lnd_photo

            $lndInsertId = $this->MyModel->save_lnd_reg_data($lndData);

            if ($lndInsertId){
                $sdata['message'] = 'Landlord added successfully';
                $sdata['lndAddedSussess'] = 'Landlord added successfully';

                //lnd_familymember Table (02)
                $lndFMData['lnd_id'] = $lndInsertId; /* foreign key*/
                $lndFMData['family_member_name'] = $this->input->post('family_member_name');
                $lndFMData['family_member_age'] = $this->input->post('family_member_age');
                $lndFMData['family_member_job'] = $this->input->post('family_member_job');
                $lndFMData['family_member_phone'] = $this->input->post('family_member_phone');

                $lndFMInsertId = $this->MyModel->save_lndFM_data($lndFMData);

                if($lndFMInsertId){
                    $sdata['lndFMSuccess'] = 'Landlord family member added successfully';
                }else{
                    $sdata['lndFMFailure'] = 'Landlord family member added failure';
                }

                //lnd_homeworker Table (03)
                $lndHWData['lnd_id'] = $lndInsertId; /* foreign key*/
                $lndHWData['homeworker_name'] = $this->input->post('homeworker_name');
                $lndHWData['homeworker_nid'] = $this->input->post('homeworker_nid');
                $lndHWData['homeworker_phone'] = $this->input->post('homeworker_phone');
                $lndHWData['homeworker_permanent_add'] = $this->input->post('homeworker_permanent_add');

                $lndHWInsertId = $this->MyModel->save_lndHW_data($lndHWData);

                if($lndHWInsertId){
                    $sdata['lndHWSuccess'] = 'Landlord home worker added successfully';
                }else{
                    $sdata['lndHWFailure'] = 'Landlord home worker added failure!';
                }

                //lnd_driver Table (04)
                $lnd_driverData['lnd_id'] = $lndInsertId; /* foreign key*/
                $lnd_driverData['driver_name'] = $this->input->post('driver_name');
                $lnd_driverData['driver_nid'] = $this->input->post('driver_nid');
                $lnd_driverData['driver_phone'] = $this->input->post('driver_phone');
                $lnd_driverData['driver_permanent_add'] = $this->input->post('driver_permanent_add');

                $lndDriverInsertId = $this->MyModel->save_lndDriver_data($lnd_driverData);

                if($lndDriverInsertId){
                    $sdata['lndDriverSuccess'] = 'Landlord driver added successfully';
                }else{
                    $sdata['lndDriverFailure'] = 'Landlord driver added failure!';
                }

                $this->session->set_userdata($sdata);
                redirect('home');
            }else{
                $sdata['message'] = 'Try again! Landlord added failure';
                $sdata['lndAddedFailure'] = 'Try again! Landlord added failure';
                $this->session->set_userdata($sdata);
                redirect('home');
            }

        }else{
            redirect('home');
        }
    } //End check login



} //End class
?>