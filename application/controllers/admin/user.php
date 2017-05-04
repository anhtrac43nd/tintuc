<?php 
	class User extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
		}
		function themuser()
		{
			$this->load->model('User_model');
			$listuser = $this->User_model->get_list();
			$data = array();
			$data['temp']='admin/user/themuser';

			if($this->input->post())
			{
				$this->form_validation->set_rules('tk','ID','required');	
				$this->form_validation->set_rules('mk','Pass','required');
				$this->form_validation->set_rules('name','Ten','required');

				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tk = $this->input->post('tk');
					$mk = $this->input->post('mk');
					$name = $this->input->post('name');


					$dulieu = array(
						'id'=>$tk,
						'password'=>$mk,
						'ten_admin'=>$name

						);
					$this->User_model->create($dulieu);
					$this->session->set_flashdata('mess','Thêm thành công');
				}		
			}
			$data['listuser'] = $listuser;
			$this->load->view('admin/index',$data);
		}
		function xemuser()
		{
			{
			$data = array();
			
			$data['temp'] = 'admin/user/xemuser' ;
			$list = $this->User_model->get_list();
			$data['list'] = $list;
			$this->load->view('admin/index',$data);
			}
		}
		function suauser()
		{
			$id = $this->uri->segment(4);
			$user = $this->User_model->get_info($id);
			$this->load->model('User_model');
			$listuser = $this->User_model->get_list();
			$data = array();
			$data['temp'] = 'admin/user/suauser';
			$data['user'] = $user;
			$data['listuser'] = $listuser;

			if($this->input->post())
			{
				$this->form_validation->set_rules('tk','ID','required');	
				$this->form_validation->set_rules('mk','Pass','required');
				$this->form_validation->set_rules('name','Ten','required');
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tk = $this->input->post('tk');
					$mk = $this->input->post('mk');
					$name = $this->input->post('name');

					$dulieu = array(
						'id'=>$tk,
						'password'=>$mk,
						'ten_admin'=>$name

						);
					$this->User_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Sửa thành công');
					$tk = $user->id;
					$mk = $user->password;
					$name = $user->ten_admin;
				}		
			}

			$this->load->view('admin/index',$data);
		}
		function xoauser()
		{
			$id = $this->uri->segment(4);
			$this->User_model->delete($id);
			$this->session->set_flashdata('mess','Xóa thành công ');
			redirect(admin_url('user/xemuser'));
		}
    }
?>