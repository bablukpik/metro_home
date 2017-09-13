<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public static $model = 'MyModel';
    const  TITLE = 'Metro Home';

    public function __construct()
    {
        parent::__construct();
        $this->load->model(self::$model);

        //Total Empty house
        $data['totalNoOfHouse'] = $this->MyModel->findAll('publicity');
        $this->load->vars($data);
    }

	public function index()
	{

	    //die(var_dump($data));
		$this->load->view('home_page');
	}

}
