<?php 
	class Danhmuc extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Dmbaiviet_model');
		}
		function themdm()
		{
			$data = array();
			$data['temp'] = 'admin/themdm';
			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('ten_dm','Tên danh mục','required');	
	
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('ten_dm');
					$dulieu = array(
						'ten_dm'=>$tendm
						);
					$this->Dmbaiviet_model->create($dulieu);
					$this->session->set_flashdata('mess','thành công');
					}		
				}
				$this->load->view('admin/index',$data);
		}	
		// function xemdm()
		// {
		// 	$data = array();
		// 	$data['temp'] = 'admin/danhmuc/xemdm';
		// 	$list = $this->dmbaiviet_model->getlist();
		// 	$data['list'] = $list;
		// 	$this->load->view('admin/index',$data);
		// }
		function xemdm()
		{
			$input = array();
			$data['list'] = $this->Dmbaiviet_model->get_list($input);
			$data['temp'] = 'admin/danhmuc/xemdm' ;
			$this->load->view('admin/index',$data);
		}
		function suadm()
		{
			$data = array();
			$id = $this->uri->segment(4);
			$row = $this->Dmbaiviet_model->get_info($id);

			if($this->input->post())
			{
				$this->form_validation->set_rules('title','Tên danh mục','required');	
					//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('title');
					$input = array(
						'ten_dm'=>$tendm
						);
					$this->Dmbaiviet_model->update($id,$input);
					$this->session->set_flashdata('mess','Sửa thành công');
					$row->ten_dm = $tendm;
					}		
				}

			$data['row'] = $row;
			$data['temp'] = 'admin/danhmuc/suadm';
			$this->load->view('admin/index',$data);
		}
		// function suadm()
		// {
		// 	$id = $this->uri->segment(4);
		// 	$id = intval($id);
		// 	$info = $this->Baiviet_model->get_info($id);
		// 	$data = array();
		// 	$data['info'] = $info;
		
		// 	if($this->input->post())
		// 	{
		// 		$this->form_validation->set_rules('ten_dm',"Tên danh mục",'required');		
		// 		//khi nhập liệu chính xác
		// 		if($this->form_validation->run())
		// 		{
		// 			$tendm = $this->input->post('ten_dm');

		// 			$dulieu = array(
		// 				'ten_dm'=>$tendm
		// 				);
		// 			$this->Dmbaiviet_model->update($id,$dulieu);
		// 			$this->session->set_flashdata('mess','Đã sửa thành công');
		// 			redirect(admin_url('Dmbaiviet_c/xembai'));
		// 		}		
		// 	}
		// 		$data['temp'] = 'admin/suadm';
		// 		$this->load->view('admin/index',$data);

		// }
		function xoadm()
		{
			$id = $this->uri->segment(4);
			$this->Dmbaiviet_model->delete($id);
			$this->session->set_flashdata('mess','Xóa thành công ');
			redirect(admin_url('danhmuc/xemdm'));
		}
	}


?>