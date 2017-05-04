<?php 
	class Docgia_home extends My_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->load->model('baiviet_model');
			$this->load->library('pagination');
        	// lay du lieu tu bang pagination
	        $this->db->select('*');                  
	        $this->db->from('baiviet');
	        $this->db->order_by('id desc');     
	        // lay ra $limit row tu vi tri thu $offset 
	        $offset=$this->uri->segment(5);    
	        $limit=3;        
	        $this->db->limit($limit,$offset);
	        $query_poster = $this->db->get();   
			// pagination        
	        $config['base_url'] = docgia_url('Docgia/docgia_home/index/page/');
	        $config['total_rows'] = $this->db->count_all('baiviet');
	        $config['uri_segment']  = 5;
	        $config['per_page'] = $limit;
	        $config['prev_link'] 	= 'prev';
	        $config['next_link'] 	= 'next';	        
	        $config['last_link'] 	= 'Last';
	        $config['first_link']	= 'First';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['prev_tag_open'] = '<li>';
	        $config['prev_tag_close'] = '</li>';
	        $config['num_tag_open'] = '<li>';
    		$config['num_tag_close'] = '</li>';
    		$config['cur_tag_open'] = '<li><strong>';
    		$config['cur_tag_close'] = '</strong></li>';
	        $this->pagination->initialize($config);
	        $paginator=$this->pagination->create_links();
			$input = array();
			$data['list'] = $this->baiviet_model->get_list();
			$data['paginator'] = $paginator;
			$data['sobaitren1trang'] = $query_poster;
			$data['hello'] = $this->uri->segment(1);
			$data['temp'] = 'docgia/content' ;
			$this->load->view('docgia/index',$data);
		}
	}
?>