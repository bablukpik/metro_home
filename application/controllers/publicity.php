<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicity extends CI_Controller{
    public static $model = 'MyModel';
    //public static $model 	 = array('myModel');
    const  TITLE = 'Metro Home';

    public function __construct()
    {

        parent::__construct();
        $this->load->model(self::$model);
        
    }

    public function index()
    {
        $this->load->view('publicity_page');
    }

}