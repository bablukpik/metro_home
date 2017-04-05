<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {
    
	public function __construct(){
		parent:: __construct();

        $user_name = $this->session->userdata('user_name');
        if($user_name == NULL){
           redirect('login');
        }

	}

	public function index()
	{
		$this->load->view("dashboard/dashboard_master");
		//$this->load->view("dashboard/dashboardForm");
	}

	public function logout()
	{
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_pass");
		$this->session->unset_userdata("user_type");
		$sdata["message"] = "You are successfully logout";
		$this->session->set_userdata($sdata);
		redirect("login");
	}

	public function registerRenter()
	{
		$data["renterForm"] = $this->load->view("dashboard/renterForm", "", true);
		$this->load->view("dashboard/dashboard_master", $data);
	}

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