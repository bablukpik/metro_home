<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdsManager extends CI_Controller {
    public static $model = 'MyModel';

	public function __construct(){
		parent:: __construct();
        $this->load->model(self::$model);

	}

	public function index()
	{
		$this->load->view("home_page");
	}

    //Ads Account Registration
    public function adsRegistration(){

        $reterData = array();

        //form validation
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
             
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>'); /*<?php echo form_error('lnd_police_station'); ?>*/

        $this->form_validation->set_rules('ad_lnd_first_name', 'First Name', 'trim|required', array('required' => 'You must provide a %s.')); 

        $this->form_validation->set_rules('ad_lnd_last_name', 'Last Name', 'trim|required', array('required' => 'You must provide a %s.')); 

        $this->form_validation->set_rules('ad_lnd_username', 'Username', 'trim|required|is_unique[ads_account_general.ad_lnd_username]', array('required' => 'You must provide a %s.')); 

        $this->form_validation->set_rules('ad_lnd_password', 'Password', 'trim|required', array('required' => 'You must provide a %s.')); 

        $this->form_validation->set_rules('ad_lnd_mobile', 'Mobile No.', 'trim|required', array('required' => 'You must provide a %s.')); 

        if ($this->form_validation->run() == FALSE)
        {
            $sdata["failureMsg"] = "Try again";
            $this->session->set_userdata($sdata);
            redirect("adsManager/");            
        }else{
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
                    $check = $this->_createThumbnaill($finfo['file_name']);
                    //$renter_photo = $finfo['file_name'];

                    //check thumb is uploaded to the directory
                    if ($check) {
                       $ad_user_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                    }else{
                        $ad_user_photo = '';
                    }
                    
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
            $data['ad_user_photo'] = $ad_user_photo;

            $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
            $todayDate = $dt->format('Y-m-d h:i:s');

            $data['ad_created_date']    = $todayDate;
            $data['ad_modified_date']   = $todayDate;

            $result = $this->MyModel->adsRegistration('ads_account_general',$data);

            if ($result) {
                $sdata["successMsg"] = "User created successfully";
                $this->session->set_userdata($sdata);
                redirect("adsManager/");
            }else{
                echo "Try again";
                $sdata["failureMsg"] = "Try again";
                $this->session->set_userdata($sdata);
                redirect("adsManager/");
            }
        }
        //End Data upload

    }
    //End Ads Registration

    public function _createThumbnaill($filename)
    {
        $config['image_library']    = "gd2";
        $config['source_image']     = "uploads/general_user/" .$filename;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width']            = "160";
        $config['height']           = "200";

        $this->load->library('image_lib');
        // Set your config up
        $this->image_lib->initialize($config);
        
        if(!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }else{
            return TRUE;
        }

    }
    //End Ads Account Registration

    //Temp
    //Update
    public function interestJobUpdate()
    {
        $id                                     = $this->input->post('id');
        $data['education_provider_type']        = $this->input->post('education_provider_type');
        $data['interested_program']             = $this->input->post('interested_program');
        $data['location']                       = $this->input->post('location');
        $data['other']                          = $this->input->post('other');

        $this->M_interested_job_post_manage->update($data, $id);        
        redirect('generalUserHome/interestedJobPost');
        
    }

}