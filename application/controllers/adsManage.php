<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdsManage extends CI_Controller {
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


	}

	public function index()
	{
        
		$this->load->view("dashboard/dashboard_master");
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