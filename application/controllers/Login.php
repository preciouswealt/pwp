<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));
		$this->load->helper(array('url', 'html', 'form'));
		$this->load->library("pagination");
		$this->load->helper('cookie');
		$this->load->model('Admin_model');
		$this->load->library("pagination");
	}
    public function Index()
	{
		// $data['ShowPage'] = 'homeindex/homeindex';
		// $this->load->view('backend/login', $data);
        $this->load->view('Backend/Login');
	}


    // public function index()
	// {
	// 	if ($this->session->userdata('username') == '') {
	// 		$data['username'] = "";
	// 		$data['password'] = "";
	// 		$data['result'] = "";
	// 		$this->load->view('admin/login', $data);
	// 	} else {
	// 		redirect('admin_controller/Manage_Customer');
	// 	}
	// }
    public function Validlogin()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		if($this->input->server('REQUEST_METHOD') == TRUE){
            
            $check_user = $this->Admin_model->record_count($username,$password);
            if (count($check_user) == 1) {
				$result = $this->Admin_model->fetch_user_login($username, $password);
                foreach ($result as $value) {
					$id = $value->id;
					$user_name = $value->user_name;
					$fristname = $value->fristname;
					$lastname = $value->lastname;
				} 
				$this->session->set_userdata(array('login_id'=> $id,'username' => $user_name,'fristname'=> $fristname,'lastname'=> $lastname));
				redirect('Login/Indexview');
            
			}
			else
			{
                // echo count($check_user);
				$this->session->set_flashdata(array('msgerr'=> '<p class="login-box-msg" style="color:red;">ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!</p>'));
				redirect('Login', 'refresh');
			}
		}
 
	}
    public function Indexview()
	{
		$data['ShowPage'] = 'backend/mainindex/mainindex';
        $this->load->view('backend/Indexview',$data);
 	}
    
	public function login_admin()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('admin/login', $data);
		} else {
			redirect('admin_controller/Manage_Customer');
		}
	}
	public function Login_check()
	{
		$username = iconv('UTF-8//IGNORE', 'TIS-620//IGNORE', $this->input->POST('username'));
		$password = iconv('UTF-8//IGNORE', 'TIS-620//IGNORE', $this->input->POST('password'));
		$check_user = $this->admin_models->check_username($username);
		if (count($check_user) == 0) {
			$data['username'] = $username;
			$data['password'] = $password;
			$data['result'] = "Wrong_Username";
			$this->load->view('admin/login', $data);
		} else {
			$check_password = $this->admin_models->check_password($username, $password);
			if (count($check_password) == 0) {
				$data['username'] = $username;
				$data['password'] = $password;
				$data['result'] = "Wrong_Password";
				$this->load->view('admin/login', $data);
			} else {
				$check_password = $this->admin_models->check_password($username, $password);
				foreach ($check_password as $value) {
					$username = $value->Username;
					$password = $value->Password;
					$Level_ID = $value->Level_ID;
					$Level_Emp = $value->Level_Emp;
				} //foreach
				$session_data = array(
					'username' => $username,
					'password' => $password,
					'Level_ID' => $Level_ID,
					'Level_Emp' => $Level_Emp
				); // session
				$this->session->set_userdata($session_data);
				if ($this->session->userdata('Level_ID') == '1') {
					redirect('admin_controller/Manage_Customer');
				} elseif ($this->session->userdata('Level_ID') == '2') {
				} elseif ($this->session->userdata('Level_ID') == '3') {
					redirect('admin_controller/Manage_Customer2');
				}
				// echo $this->session->userdata('username');
			} // if count checkpassword;
		} // if count checkusername
	}
	public function Logout()
	{
		// echo "สวัสดีจ้า";
		$this->session->sess_destroy();
		// delete_cookie('l');
		redirect('Login');
	}

	public function Table()
	{
		// $this->lo
		$data['ShowPage'] = 'Backend/Estimate/Estimate';
		$this->load->view('Backend/Indexview', $data);
		// $this->load->view('backend/tables');
	}
	
	public function Insertproperty()
	{
		// $this->lo
		$data['ShowPage'] = 'Backend/Insertproperty/Forminsertproperty';
		$this->load->view('Backend/Indexview', $data);
		// $this->load->view('backend/tables');
	}
	public function News_admin()
	{
		$data['newsall'] = $this->Admin_model->News_model();
		$data['ShowPage'] = 'Backend/News/Newsindex';
		$this->load->view('Backend/Indexview', $data);
		// $this->load->view('backend/tables');
	}
	public function Even_admin()
	{
		// $this->lo
		$data['ShowPage'] = 'Backend/Even/Evenindex';
		$this->load->view('Backend/Indexview', $data);
		// $this->load->view('backend/tables');
	}
}