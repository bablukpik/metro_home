<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

     public static $model = 'MyModel';

    public function __construct()
    {
        parent::__construct();

        

    }


    public function inlllldexm()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('min_length', '{field} must have at least {param} characters.');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|callback_username_check'); /*|is_unique[users.username]*/
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must             provide a %s.'));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        /*$config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);*/

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myForm');
        }
        else
        {
            $this->load->view('formSuccess');
        }
    }

    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    ////////////////////////////////////////////// Test

    public function index(){
        $this->load->view('testRegForm');
    }

    public function testForm(){
        $this->load->database();
        $this->load->model(self::$model);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
             
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        $this->form_validation->set_rules('userName', 'Username', 'trim|required|min_length[4]|max_length[40]|is_unique[users.user_name]'); 

     

        if ($this->form_validation->run() == FALSE)
            {
                //$username = $this->input->post('userName');
                ///die(var_dump($username));
                $this->load->view('testRegForm');            
               
            }
            else
            {
                $username = $this->input->post('userName');
                //die(var_dump($username));
                $this->MyModel->testt($username);
            }

    }

}