<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public static $model = 'MyModel';
    //public static $model 	 = array('myModel');
    const  TITLE = 'Metro Home';

    public function __construct()
    {

        parent::__construct();

        //$this->load->database();
        $this->load->model(self::$model);
        //$this->load->helper(self::$helper);
        //$this->load->library('form_validation');
        //$this->load->library('upload');
        //$this->load->library('image_lib');
        //$this->load->library('session');


       // $admin_email_address = $this->session->userdata('admin_email_address');
        /*if ($admin_email_address != NULL) {
            redirect('super_admin');
        }*/

    }

    public function index()
    {
        $this->load->view('home_page');
    }

    public function check_login()
    {
        if (!empty($_POST['user_name']) && !empty($_POST['user_pass']) && !empty($_POST['user_type'])) {
            $user_name = $this->input->post('user_name');
            $user_pass = $this->input->post('user_pass');
            $user_type = $this->input->post('user_type');

            if( $user_type == 'admin'){
                $result = $this->MyModel->check_admin_login_info($user_name, $user_pass, $user_type);
            }elseif ($user_type == 'landlord'){
                $result = $this->MyModel->check_landloard_login_info($user_name, $user_pass, $user_type);
            }elseif ($user_type == 'renter'){
                $result = $this->MyModel->check_renter_login_info($user_name, $user_pass, $user_type);
            }elseif ($user_type == 'metro_police'){
                $result = $this->MyModel->check_metro_police_login_info($user_name, $user_pass, $user_type);
            }elseif ($user_type == 'general'){
                $result = $this->MyModel->check_genUser_login_info($user_name, $user_pass, $user_type);
            }


            if ($result) {
                $sdata['user_name'] = $result->user_name;
                $sdata['user_type'] = $result->user_type;
                $sdata['user_fullname'] = $result->user_fullname;
                $sdata['message'] = 'Welcome ' . $result->user_fullname;
                $this->session->set_userdata($sdata);
                redirect('super_admin');
            }else{
                $sdata['message'] = 'Invalid Username or Password';
                $this->session->set_userdata($sdata);
                redirect('login');
            }
        }else{
            redirect('login');
        }

    } //End check login



} //End class
?>