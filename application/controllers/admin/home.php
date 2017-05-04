<?php 
	class Home extends My_controller
	{
		function __construct()
		{
			parent::__construct();

		}
		function index()
		{
			$data = array();
			$data['temp'] = 'admin/home';
			$this->load->view('admin/index',$data);
		}
		function logout()
		{
			if  ($this->session->userdata('login'))
			{
				$this->session->unset_userdata('login');
				redirect(admin_url('login/index'));
			}
		}
	}

?>