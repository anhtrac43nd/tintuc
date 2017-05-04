<?php 
	class My_Controller extends CI_Controller
	{
		//biến gửi dữ liệu
		public $data =array();
		function __construct()
		{
			//ke thua CI_Controller
			parent::__construct();
			$this->ktra_dn();
		}
		private function ktra_dn()
		{
			$control = $this->uri->segment(2);
			$user = $this->session->userdata('login');
			if ($control !='login' && !$user)
			{
				redirect(admin_url('login/index'));
			}
			if ($control == 'login' && $user)
			{
				redirect(admin_url('home/index'));
			}
		}
	}
?>