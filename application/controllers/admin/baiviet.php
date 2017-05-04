<?php 
	class Baiviet extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Baiviet_model');
		}
		function thembai()
		{
			$this->load->model('Dmbaiviet_model');
			$listdm = $this->Dmbaiviet_model->get_list();
			$data = array();
			$data['temp']='admin/baiviet/thembai';

			if($this->input->post())
			{
				$this->form_validation->set_rules('title','Tiêu đề bài viết','required');	
				$this->form_validation->set_rules('content','Nội dung bài viết','required');
				$this->form_validation->set_rules('img','Hình ảnh','required');
				$this->form_validation->set_rules('cat','Danh mục','required');
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$img = $this->input->post('img');
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title,
						'noi_dung'=>$content,
						'hinh_anh'=>$img,
						'id_dm'=>$cat
						);
					$this->Baiviet_model->create($dulieu);
					$this->session->set_flashdata('mess','Thêm thành công');
					}		
				}

			$data['listdm'] = $listdm;
			$this->load->view('admin/index',$data);
		}
		function xembai()
		{
			{
			$data = array();
			
			$data['temp'] = 'admin/baiviet/xembai' ;
			$list = $this->Baiviet_model->get_list();
			$data['list'] = $list;
			$this->load->view('admin/index',$data);
			}
		}
		function suabai()
		{
			$id = $this->uri->segment(4);
			$baiviet = $this->Baiviet_model->get_info($id);
			$this->load->model('Dmbaiviet_model');
			$listdm = $this->Dmbaiviet_model->get_list();
			$data = array();
			$data['temp'] = 'admin/baiviet/suabai';
			$data['baiviet'] = $baiviet;
			$data['listdm'] = $listdm;

			if($this->input->post())
			{
				$this->form_validation->set_rules('title','Tiêu đề bài viết','required');	
				$this->form_validation->set_rules('content','Nội dung bài viết','required');
				$this->form_validation->set_rules('img','Hình ảnh','required');
				$this->form_validation->set_rules('cat','Danh mục','required');
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$img = $this->input->post('img');
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title,
						'noi_dung'=>$content,
						'hinh_anh'=>$img,
						'id_dm'=>$cat
						);
					$this->Baiviet_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Sửa thành công');
					$title = $baiviet->tieu_de;
					$content = $baiviet->noi_dung;
					$img = $baiviet->hinh_anh;
				}		
			}

			$this->load->view('admin/index',$data);
		}
		function xoabai()
		{
			$id = $this->uri->segment(4);
			$this->Baiviet_model->delete($id);
			$this->session->set_flashdata('mess','Xóa thành công ');
			redirect(admin_url('baiviet/xembai'));
		}
	}
?>