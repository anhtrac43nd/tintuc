 <?php 
	class Login extends My_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Thanhvien_model');
		}
		function index()
		{
			$data = array();			
			 if($this->input->post())
			{
				//goi den ham kiem tra dang nhap check_login
				$this->form_validation->set_rules('login','login','callback_check_login');	
				if($this->form_validation->run())
				{
					$user = $this->input->post('user');
					//neu form da chay dung thi se tao 1 session cho admin
					$this->session->set_userdata('login',$user);
					redirect(admin_url('home'));
				}		
		
			}
			$this->load->view('admin/login',$data);
		}
		//so sanh tai khoan trong csdl,tra ve gia tri true false 
		function check_login()
		{
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$where = array('id'=>$user,'password'=>$pass);
			if($this->Thanhvien_model->check_exists($where))
			{
				return true;
			}
			else
			{
				// tao 1 message thong bao dang nhap ko thanh cong
				$this->form_validation->set_message(__FUNCTION__,'Không đăng nhập thành công');
				return false;
			}
		}
		
	}
?> 