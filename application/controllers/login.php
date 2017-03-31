<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller
{
    public static $model = 'MyModel';

    const  Title = 'Next Admission';

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

/*    public function index()
    {
        //$this->load->view('admin/login');
    }*/

    public function check_login()
    {

        if (!empty($_POST['admin_username']) && !empty($_POST['admin_pass'])) {
            $admin_username = $this->input->post('admin_username');
            $admin_pass = $this->input->post('admin_pass');
            $user_type = $this->input->post('user_type');
            $result = $this->MyModel->check_login_info($admin_username, $admin_pass, $user_type);

            if ($result) {
                $sdata['admin_name'] = $result->admin_name;
                $sdata['admin_email_address'] = $result->admin_email_address;
                $sdata['admin_password'] = $result->admin_password;
                $this->session->set_userdata($sdata);
                redirect('super_admin');
            }else{
                $sdata['message'] = 'Username olocalhostr password invalid';
                $this->session->set_userdata($sdata);
                redirect('admin_login');
            }
        }
    }
}
?>

