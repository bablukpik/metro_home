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
        $data =array();
        $data['content'] = $this->load->view('index_page', '', true);
		$this->load->view('home_page', $data);
	}

    public function contact()
    {
        $data =array();
        $data['content'] = $this->load->view('contact_page', '', true);
        $this->load->view('home_page', $data);
    }

    public function about()
    {
        $data =array();
        $data['content'] = $this->load->view('about_page', '', true);
        $this->load->view('home_page', $data);
    }

}
