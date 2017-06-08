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
        if ($this->session->userdata('user_name') and $this->session->userdata('user_type')) {
            //$this->session->sess_destroy();
            if(session_destroy()){
                $this->login();
            }
        }else{
            $this->login();
        }
       
    } //End check login

    //Login after calling Login()
    public function login()
    {
        if (!empty($_POST['user_name']) && !empty($_POST['user_pass']) && !empty($_POST['user_type'])) {
            $user_type = $this->input->post('user_type');
            $user_name = $this->input->post('user_name');
            $user_pass = $this->input->post('user_pass');

            if( $user_type == 'admin'){
                $resultAdmin = $this->MyModel->check_admin_login_info($user_name, $user_pass, $user_type);

                if ($resultAdmin) {
                    $sdata['user_name']         = $resultAdmin->adm_username;
                    $sdata['user_type']         = $resultAdmin->user_type;
                    $sdata['user_fullname']     = $resultAdmin->adm_fullname;
                    $sdata['photo']             = $resultAdmin->adm_photo;
                    $sdata['successMsg']        = 'Welcome ' . $resultAdmin->adm_fullname;
                    $this->session->set_userdata($sdata);
                    redirect('super_admin');
                }else{
                    $sdata['failureMsg'] = 'Invalid Username or Password';
                    $this->session->set_userdata($sdata);
                    redirect('login');
                }
            }elseif ($user_type == 'landlord'){
                $resultLandlord = $this->MyModel->check_landloard_login_info($user_name, $user_pass, $user_type);

                if ($resultLandlord) {
                    $sdata['user_name']     = $resultLandlord->lnd_nid;
                    $sdata['user_type']     = $resultLandlord->user_type;
                    $sdata['user_fullname'] = $resultLandlord->lnd_fullname;
                    $sdata['photo']         = $resultLandlord->lnd_photo;
                    $sdata['successMsg']    = 'Welcome ' . $resultLandlord->lnd_fullname;

                    $this->session->set_userdata($sdata);
                    redirect('super_admin');
                }else{
                    $sdata['failureMsg'] = 'Invalid Username or Password';
                    $this->session->set_userdata($sdata);
                    redirect('login');
                }
            }elseif ($user_type == 'renter'){
                $resultRenter = $this->MyModel->check_renter_login_info($user_name, $user_pass, $user_type);

                if ($resultRenter) {
                    $sdata['user_name'] = $resultRenter->renter_nid;
                    $sdata['user_type'] = $resultRenter->user_type;
                    $sdata['user_fullname'] = $resultRenter->renter_fullname;
                    $sdata['photo'] = $resultRenter->renter_photo;
                    $sdata['successMsg'] = 'Welcome ' . $resultRenter->renter_fullname;
                    $this->session->set_userdata($sdata);
                    redirect('super_admin');
                }else{
                    $sdata['failureMsg'] = 'Invalid Username or Password';
                    $this->session->set_userdata($sdata);
                    redirect('login');
                }
            }elseif ($user_type == 'metro_police'){
                $resultMetroPolice = $this->MyModel->check_metro_police_login_info($user_name, $user_pass, $user_type);

                if ($resultMetroPolice) {
                    $sdata['user_name']     = $resultMetroPolice->metro_police_username;
                    $sdata['user_type']     = $resultMetroPolice->user_type;
                    $sdata['user_fullname'] = $resultMetroPolice->metro_police_fullname;
                    $sdata['photo']         = $resultMetroPolice->metro_police_photo;
                    $sdata['successMsg']    = 'Welcome ' . $resultMetroPolice->metro_police_fullname;
                    $this->session->set_userdata($sdata);
                    redirect('super_admin');
                }else{
                    $sdata['failureMsg'] = 'Invalid Username or Password';
                    $this->session->set_userdata($sdata);
                    redirect('login');
                }
            }elseif ($user_type == 'general'){
                $resultGeneral = $this->MyModel->check_genUser_login_info($user_name, $user_pass, $user_type);
                
                if ($resultGeneral) {
                    $sdata['user_name']     = $resultGeneral->ad_lnd_username;
                    $sdata['user_type']     = $resultGeneral->ad_lnd_user_type;
                    $sdata['user_fullname'] = $resultGeneral->ad_lnd_first_name;
                    $sdata['photo']         = $resultGeneral->ad_user_photo;
                    $sdata['successMsg']    = 'Welcome ' . $resultGeneral->ad_lnd_first_name;
                    $this->session->set_userdata($sdata);
                    redirect('super_admin');
                }else{
                    $sdata['failureMsg'] = 'Invalid Username or Password';
                    $this->session->set_userdata($sdata);
                    redirect('login');
                }
            }

        }else{
            $sdata['failureMsg'] = 'Try again';
            $this->session->set_userdata($sdata);
            redirect('login');
        }

    }

    
} //End class
?>