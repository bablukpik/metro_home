<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
***01***
public function chck(){
	$oldpass = $this->input->post('oldpass');
	$where = array("pass" => $oldpass);
	$result = $this->M_organize_profile_manage->findorgallByUser('data_admin', $where);
	if($result){
		echo TRUE;
	}else{
		echo FALSE;
	}
}

public function findorgallByUser($table, $where){
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($where);
	$query = $this->db->get();
	return $query->row();
}

***02**
public function passwordupdate (){

	$logInUser      = $this->session->userdata('name');
	$data['pass']    = $this->input->post('newpassword');	
	$where = array('name' => $logInUser);
	$this->db->update('data_admin', $data, $where);
	
   redirect('form/view');
}

***03***
	public function login(){
    $name       = $this->input->post('name');
    $pass       = $this->input->post('pass');
    $logInDetails    = $this->M_organize_profile_manage->login('data_admin', $name);
    if( !empty($logInDetails) && $logInDetails->pass == $pass){
    	$this->session->set_userdata(array('name' => $name));
    	redirect('form/view'); 
    }else{
        $this->session->set_userdata(array('msg' => "You are not valid user"));
        redirect('form/panel');
    }
}

***04***
public function logout (){
	$this->session->set_userdata(array('name' => ""));
	redirect('form/panel'); 
}

***05***
public function store(){	
	$data['name'] 					= $this->input->post('name');
	$data['mobile_no']				= $this->input->post('mobile');
	$data['interested_country'] 	= $this->input->post('country');
	$data['purposes']				= $this->input->post('purpose');
	$data['interested_course'] 		= $this->input->post('course');
	$data['city']					= $this->input->post('city');
	$data['dhaka_dist']				= $this->input->post('dhaka_dist');
	$data['chittagong_dist']		= $this->input->post('chittagong_dist');
	$data['sylhet_dist']			= $this->input->post('sylhet_dist');
	$data['rangpur_dist']			= $this->input->post('rangpur_dist');
	$data['rajshahi_dist']			= $this->input->post('rajshahi_dist');
	$data['khulna_dist']			= $this->input->post('khulna_dist');
	$data['barisal_dist']			= $this->input->post('barisal_dist');
	$data['mymensingh_dist']		= $this->input->post('mymensingh_dist');
	$data['edu_qualification'] 		= $this->input->post('education');
	//$data['fil_up_date']			= date('Y-m-d H:i:s');
	$dt 							= new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$data['fil_up_date']  			= $dt->format('Y-m-d g:i:s');
	
	$this->session->set_userdata(array('alert' =>"<h2 align='center' style='color:#00a9e7'>Your data has been submitted successfully!</h2>"));
	
    $result = $this->M_organize_profile_manage->save('student_form', $data);
	if($result){
    	redirect('form/success');
	}else{
		redirect('form/failure');
	}
}

***06***
	$query = $this->db->get_where('mytable',array('id'=>10));

***07***

*/
		


class Admin_login extends CI_Controller {

	static $model 	 = array('myModel');
	//static $helper   = array('url','generalauthentication','userauthentication');

	const  Title	 = 'Metro Home';
	

	public function __construct(){
		parent:: __construct();
		//$this->load->model(self::$model);
		//$this->load->helper(self::$helper);
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('image_lib');

        $admin_email_address = $this->session->userdata('admin_email_address');
        if($admin_email_address != NULL){
           redirect('super_admin');
        }

	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function check_login(){

		$admin_email_address = $this->input->post('admin_email_address');
		$admin_password = $this->input->post('admin_password');
		
		$result = $this->myModel->check_login_info($admin_email_address, $admin_password);
		if ($result) {
			/*
			echo "<pree>";
			print_r ($result);
			exit;
			*/

			$sdata['admin_name'] = $result->admin_name;
			$sdata['admin_email_address'] = $result->admin_email_address;
			$sdata['admin_password'] = $result->admin_password;
			$this->session->set_userdata($sdata);
			redirect('super_admin');
		}else{
			$sdata['message'] = 'Username or password invalid';
			$this->session->set_userdata($sdata);
			redirect('admin_login');
		}
		
	}
}