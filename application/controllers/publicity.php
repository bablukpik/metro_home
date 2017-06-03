<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicity extends CI_Controller{
    public static $model = 'MyModel';
    //public static $model 	 = array('myModel');
    const  TITLE = 'Metro Home';

    public function __construct()
    {

        parent::__construct();
        $this->load->model(self::$model);
        $this->load->helper('form');
        
    }

    public function index($page=1)
    {
        //Select options like 10, 20, 30, 40
        if(!empty($_POST['sel'])){
            $limit = $this->input->post('sel');
        }else
            $limit = 10;
        //End Select options like 10, 20, 30, 40  

        //get total data
        $total = $this->MyModel->get_total();
        //per page, select records 1 - 10 (inclusive)
        //$limit  = 10;
        //get records according to limit
        $result = $this->MyModel->get_all($limit, $page); //$this->db->limit($pPagination['Length'], $pPagination['Start']);
        //menentukan url pagination
        $url = site_url('publicity/index');
        //load library pagination
        $this->load->library('pagination');
        //config library pagination dengan style twitter bootstrap css
        $config['base_url']         = $url;
        $config['total_rows']       = $total;
        $config['per_page']         = $limit;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 5;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        $data['result']     = $result;
        $data['total']     = $total;
        $data['pagination'] = $pagination;
        $data['publicity_search_msg']='';

        //Displaying X to Y of Z results
        $data['result_start'] = ($page - 1) * $config['per_page'] + 1;
        if ($data['result_start'] == 0) $data['result_start']= 1; 
            $data['result_end'] = $data['result_start']+$config['per_page']-1;

        if ($data['result_end'] < $config['per_page'])   
            $data['result_end'] = $config['per_page'];  
        else if ($data['result_end'] > $config['total_rows'])
            $data['result_end'] = $config['total_rows'];

        //load view
        $this->load->view('publicity_page', $data);
        
    }

    public function search_publicity($find='')
    {
        $search_publicity = $this->input->post('search_publicity');
        //Homepage search data
        $home_search_publicity_loca = $this->input->post('home_search_publicity_loca');
        $home_search_publicity_city = $this->input->post('home_search_publicity_city');
        //End Homepage search data
        if (!empty($search_publicity) || !empty($find) || ($home_search_publicity_loca and $home_search_publicity_city)) {

            $data['result']     = '';
            $data['total']     = '';
            $data['pagination'] = '';
            $data['result_start'] = '';
            $data['result_end'] = '';
            if ($find) {
                $search = $find;
            }else{
                $search = $search_publicity;
            }

            if (!empty($home_search_publicity_city) and !empty($home_search_publicity_loca)) {
                $search = $home_search_publicity_city;
                $home_search = $home_search_publicity_loca;
                $data['result'] = $this->MyModel->search_publicityM($search, $home_search);
            }else{
                $data['result'] = $this->MyModel->search_publicityM($search, $home_search='');
            }

            $data['publicity_search_msg'] = 'Click the search button again to refresh the page';
            
            if ($data['result']) {
                $sdata['result_found'] = count($data['result']);
                $this->session->set_userdata($sdata);

                $this->load->view('publicity_page', $data);
            }else{
                $sdata['result_not_found'] = "No Result Found";
                $this->session->set_userdata($sdata);
                redirect('publicity');
            }
        }else{
            $sdata['search_result_msg'] = "Please enter something for search";
            redirect('publicity');
        }
            
    }

    public function create_publicity($value='')
    {
        $data['publicity_create_page'] = $this->load->view('publicity_create_page', '', TRUE);
        $this->load->view('dashboard/dashboard_master', $data);
    }

    public function publish_publicity()
    {   
        //Start upload picture
        if(!empty($_FILES['publicity_photo']['name'])){ //if($_FILES['image']['error'] == 0){
            $config['upload_path'] = 'publicity/images/publicity_img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = date("Y-m-d-H-i-s")."_".str_replace(' ', '-', $_FILES['publicity_photo']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('publicity_photo')){
                $finfo=$this->upload->data();
                $this->_createThumbnail($finfo['file_name']);
                $publicity_photo = $finfo['raw_name'].'_thumb'.$finfo['file_ext'];
                //$publicity_photo = $finfo['file_name'];
            }else{
                $publicity_photo = '';
            }
        }else{
            $publicity_photo = '';
        }
        //End upload picture

        $data = $this->input->post();
        $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
        $todayDate = $dt->format('Y-m-d h:i:s');

        $data['publicity_userid']           = $this->session->userdata('user_name');
        $data['publicity_usertype']         = $this->session->userdata('user_type');
        $data['publicity_created_date']     = $todayDate;
        $data['publicity_modified_date']    = $todayDate;
        $data['publicity_photo']    = $publicity_photo;

        $response = $this->MyModel->publish_publicity($data);

        if ($response) {
            $sdata['successMsg'] = "Data inserted successfully";
        }else{
            $sdata['failure'] = "Failed!! Data has not been inserted successfully";
        }

        $this->session->set_userdata( $sdata );

        redirect('publicity/create_publicity');
    }

    /*
     * Thumbnail image creation for landloard
     */
    function _createThumbnail($filename)
    {
        $config['image_library']    = "gd2";
        $config['source_image']     = "publicity/images/publicity_img/" .$filename;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width']            = "400";
        $config['height']           = "200";

        $this->load->library('image_lib',$config);

        if(!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
    } 
    //End Thumbnail image creation for landloard

}