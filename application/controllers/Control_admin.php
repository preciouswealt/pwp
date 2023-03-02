<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_admin extends CI_Controller
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
		// $this->load->view('backend/Login', $data);
        $this->load->view('Backend/Login');
	}

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
				redirect('Control_admin/Indexview');
            
			}
			else
			{
                // echo count($check_user);
				$this->session->set_flashdata(array('msgerr'=> '<p class="login-box-msg" style="color:red;">ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!</p>'));
				redirect('Control_admin', 'refresh');
			}
		}
 
	}
    public function Indexview()
	{if ($this->session->userdata('username') == '') {
		$data['username'] = "";
		$data['password'] = "";
		$data['result'] = "";
		$this->load->view('Backend/Login', $data);
	} else {
		$data['ShowPage'] = 'Backend/Mainindex/Mainindex';
        $this->load->view('Backend/Indexview',$data);
	}
 	}
    
	public function login_admin()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
			redirect('Control_admin/Manage_Customer');
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
			$this->load->view('Backend/Login', $data);
		} else {
			$check_password = $this->admin_models->check_password($username, $password);
			if (count($check_password) == 0) {
				$data['username'] = $username;
				$data['password'] = $password;
				$data['result'] = "Wrong_Password";
				$this->load->view('Backend/Login', $data);
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
					redirect('Control_admin/Manage_Customer');
				} elseif ($this->session->userdata('Level_ID') == '2') {
				} elseif ($this->session->userdata('Level_ID') == '3') {
					redirect('Control_admin/Manage_Customer2');
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
		redirect('Control_admin');
	}

	public function Table()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$data['ShowPage'] = 'Backend/Estimate/Estimate';
		$this->load->view('Backend/Indexview', $data);
		}
	}
	public function Property_index()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
	    $data['province'] = $this->Admin_model->province();
		$data['Property_index'] = $this->Admin_model->Property_model_index();
		$data['ShowPage'] = 'Backend/Insertproperty/Property_index';
		$this->load->view('Backend/Indexview', $data);
		}
	}
	public function Insertproperty()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {

        //    $imageproperty =   $this->input->post("imageproperty");
        //    $imageproperty2  =  $this->input->post("imageproperty2");
           $typepoduct  =  $this->input->post("typepoduct");
           $typeproperty  =  $this->input->post("typeproperty");
           $titleroperty =    $this->input->post("titleroperty");
           $detailproperty =   $this->input->post("detailproperty");
           $address =   $this->input->post("address");
           $province  =  $this->input->post("province");
           $dristrict =   $this->input->post("dristrict");
           $sub_dristrict  =  $this->input->post("sub_dristrict");
           $postcode =   $this->input->post("postcode");
           $squarerai  =  $this->input->post("squarerai");
           $squarengan =   $this->input->post("squarengan");
           $squarewah  =  $this->input->post("squarewah");
           $squaremeter =   $this->input->post("squaremeter");
           $price =   $this->input->post("price");
           $percen  =  $this->input->post("percen");
           $typeopen =  $this->input->post("typeopen");
           $limit_price =   $this->input->post("limit_price");


		   if (isset($_FILES['imageproperty']) && !empty($_FILES['imageproperty'])) {
			$no_files = count($_FILES["imageproperty"]['name']);
			for ($i = 0; $i < $no_files; $i++) {
				$dateSv = date('ymd');
				$type = strrchr($_FILES['imageproperty']['name'][$i], ".");
				$newnamefile = rand(0, 999999);
				$imageproperty =  $dateSv.$newnamefile . $type;
				// $imageproperty =  $_FILES['imageproperty']['name'][$i];
				$_FILES['file']['name'] = $imageproperty;
				$_FILES['file']['type'] = $_FILES['imageproperty']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['imageproperty']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['imageproperty']['error'][$i];
				$_FILES['file']['size'] = $_FILES['imageproperty']['size'][$i];
				$config['upload_path']          = './property/'.$typeproperty;
				$config['allowed_types']         = 'pdf|Pdf|jpg|jpeg|png';
				$config['remove_spaces'] = 'FALSE';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if(!is_dir('./property/'.$typeproperty)) {
					mkdir('./property/'.$typeproperty, 0777, true);
				}

				if ($this->upload->do_upload('file')) {
					// $this->Homemodel->inserttouchimagedeed($imageproperty,$typeproperty);
				
					$uploadData = $this->upload->data();
				}
			}
		}

		if (isset($_FILES['imageproperty2']) && !empty($_FILES['imageproperty2'])) {
			$no_filesLg = count($_FILES["imageproperty2"]['name']);
			for ($i = 0; $i < $no_filesLg; $i++) {
				$dateSv = date('ymd');
				$type = strrchr($_FILES['imageproperty2']['name'][$i], ".");
				$newnamefile = rand(0, 999999);
				$imageproperty2 =  $dateSv.$newnamefile . $type;
				// $imageproperty2 =  $_FILES['imageproperty2']['name'][$i];
				$_FILES['file']['name'] = $imageproperty2;
				$_FILES['file']['type'] = $_FILES['imageproperty2']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['imageproperty2']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['imageproperty2']['error'][$i];
				$_FILES['file']['size'] = $_FILES['imageproperty2']['size'][$i];
				$config['upload_path']          = './property/'.$typeproperty;
				$config['allowed_types']         = 'pdf|Pdf|jpg|jpeg|png';
				$config['remove_spaces'] = 'FALSE';
			
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if(!is_dir('./property/'.$typeproperty)) {
					mkdir('./property/'.$typeproperty, 0777, true);
				}
				if ($this->upload->do_upload('file')) {
					// $this->Homemodel->inserttouchimage($imageproperty2,$typeproperty);
					$uploadData = $this->upload->data();
				
				}
			}
		}




		$insert = true;
		if ($insert) {
			$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2');
		} else {
			$data = array('success' => false, 'msg' => 'Form has been not submitted');
		}

		echo json_encode($data);	
		// $data['ShowPage'] = 'Backend/Insertproperty/Forminsertproperty';
		// $this->load->view('Backend/Indexview', $data);
		}
	}
	public function News_admin()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$data['newsall'] = $this->Admin_model->News_model();
		$data['ShowPage'] = 'Backend/News/Newsindex';
		$this->load->view('Backend/Indexview', $data);
		}
	}
	public function News_detail(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$idnews = $this->input->post('id');
		$data['newdetail'] = $this->Admin_model->News_model_detail($idnews);
	
		$this->load->view('Backend/News/Detailnew', $data);
		}
	}
	public function News_edit(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		    $idnews = $this->input->post('idnews');
			// $imagenews = $this->input->post('avatar');
			$Title = $this->input->post('Title', TRUE);
			$Detail = $this->input->post('Detail', TRUE);
			$imagenewsdelete = $this->input->POST('imagenewsdelete');
			$Update_By = $this->session->userdata('username');
			
			if (isset($_FILES['imagenews']) && !empty($_FILES['imagenews'])) {
			
					$dateSv = date('ymd');
					$type = strrchr($_FILES['imagenews']['name'], ".");
					$newnamefile = rand(0, 999999);
					$imagenews =  $dateSv.$newnamefile . $type;
					$_FILES['file']['name'] = $imagenews;
					$_FILES['file']['type'] = $_FILES['imagenews']['type'];
					$_FILES['file']['tmp_name'] = $_FILES['imagenews']['tmp_name'];
					$_FILES['file']['error'] = $_FILES['imagenews']['error'];
					$_FILES['file']['size'] = $_FILES['imagenews']['size'];
					$config['upload_path']          = './assets/img/news';
					$config['allowed_types']        = '*';
					$config['remove_spaces'] = 'FALSE';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('file')) {
						$delete_img = "./assets/img/news/" . $imagenewsdelete;
						@unlink($delete_img);
						// $this->Homemodel->inserttouchimagedeed($filedeed,$idcode);
						$insert = $this->Admin_model->Update_newdetail($idnews, $Title, $Detail, $imagenews,$Update_By);
						if ($insert) {
							$data = array('success' => true, 'msg1' => 'Form has been submitted successfully1');
						} else {
							$data = array('success' => false, 'msg' => 'Form has been not submitted');
						}
						echo json_encode($data);
						// $uploadData = $this->upload->data();
					}else{
						$insert = $this->Admin_model->Update_newdetail($idnews, $Title, $Detail, $imagenewsdelete,$Update_By);
						// $insert = true;
						if ($insert) {
							$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2' 
							,'msg2' => $idnews,'msg3' => $Title,'msg4' => $Detail,'msg5' => $imagenewsdelete,'msg6' => $Update_By);
						} else {
							$data = array('success' => false, 'msg' => 'Form has been not submitted'
							,'msg2' => $idnews,'msg3' => $Title,'msg4' => $Detail,'msg5' => $imagenewsdelete,'msg6' => $Update_By);
						}
			
						echo json_encode($data);
					}
		
			}else{
				$insert = $this->Admin_model->Update_newdetail($idnews, $Title, $Detail, $imagenewsdelete,$Update_By);
				// $insert = true;
				if ($insert) {
					$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2' 
					,'msg2' => $idnews,'msg3' => $Title,'msg4' => $Detail,'msg5' => $imagenewsdelete,'msg6' => $Update_By);
				} else {
					$data = array('success' => false, 'msg' => 'Form has been not submitted'
					,'msg2' => $idnews,'msg3' => $Title,'msg4' => $Detail,'msg5' => $imagenewsdelete,'msg6' => $Update_By);
				}
	
				echo json_encode($data);
			}
		}

	}
	public function Insert_News()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$Title = $this->input->post('Titleinsert', TRUE);
		$Detail = $this->input->post('Detailinsert', TRUE);
		$Update_By = $this->session->userdata('username');
		
		if (isset($_FILES['imagenews']) && !empty($_FILES['imagenews'])) {
		
				$dateSv = date('ymd');
				$type = strrchr($_FILES['imagenews']['name'], ".");
				$newnamefile = rand(0, 999999);
				$imagenews =  $dateSv.$newnamefile . $type;
				$_FILES['file']['name'] = $imagenews;
				$_FILES['file']['type'] = $_FILES['imagenews']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['imagenews']['tmp_name'];
				$_FILES['file']['error'] = $_FILES['imagenews']['error'];
				$_FILES['file']['size'] = $_FILES['imagenews']['size'];
				$config['upload_path']          = './assets/img/news';
				$config['allowed_types']        = '*';
				$config['remove_spaces'] = 'FALSE';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file')) {
					$insert = $this->Admin_model->Insert_news($Title, $Detail, $imagenews,$Update_By);
					if ($insert) {
						$data = array('success' => true, 'msg1' => 'Form has been submitted successfully1');
					} else {
						$data = array('success' => false, 'msg' => 'Form has been not submitted');
					}
					echo json_encode($data);
					// $uploadData = $this->upload->data();
				}else{
					$insert = $this->Admin_model->Insert_news($Title, $Detail, $imagenews,$Update_By);
					// $insert = true;
					if ($insert) {
						$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2');
					} else {
						$data = array('success' => false, 'msg' => 'Form has been not submitted');
					}
					echo json_encode($data);
				}
	
		}else{
			$imagenews = NULL;
			$insert = $this->Admin_model->Insert_news($Title, $Detail, $imagenews,$Update_By);
			// $insert = true;
			if ($insert) {
				$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2' );
			} else {
				$data = array('success' => false, 'msg' => 'Form has been not submitted');
			}

			echo json_encode($data);
		}
	}
	}
	
	public function Status_News()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$News_ID = $this->input->POST('News_ID');
		$get_News= $this->Admin_model->Get_idnews($News_ID);
		if ($get_News[0]->status_new == '1') {
			$status_updatenew = 0;
			$this->Admin_model->update_statusnews($status_updatenew, $News_ID);
			echo "<button type='button' class='btn btn-danger btn-xs'
			style='color:white;font-size: 13px;border-radius: 5px;' onclick='statusupdate(" . $News_ID . ")'>
			ปิดการใช้งาน
			</button>";

		} else if ($get_News[0]->status_new == '0') {
			$status_updatenew = 1;
			$this->Admin_model->update_statusnews($status_updatenew, $News_ID);
			echo "<button type='button' class='btn btn-success btn-xs'
			style='color:white;font-size: 13px;border-radius: 5px;'
			onclick='statusupdate(" . $News_ID . ")'>
			เปิดการใช้งาน
			</button>";
		}
	}
	}
	public function delete_News()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$News_ID = $this->input->POST('News_ID');
			$get_News = $this->Admin_model->Get_idnews($News_ID);
			if ($get_News[0]->status_new == 0) {
				echo "ลบข้อมูลสำเร็จ";
				$Photo = $get_News[0]->image_new;
				$delete_img = "./assets/img/news/" . $Photo;
				@unlink($delete_img);
				$this->Admin_model->Delete_news_modail($News_ID);
			} else {
				echo "มีการใช้งานอยู่";
			}
		}
	}
	
	public function Even_admin()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {

		$data['Evenall'] = $this->Admin_model->Even_model();
		$data['ShowPage'] = 'Backend/Even/Evenindex';
		$this->load->view('Backend/Indexview', $data);
		}
	}

	public function Even_detail(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$idevens = $this->input->post('id');
		$data['evendetail'] = $this->Admin_model->Even_model_detail($idevens);
	
		$this->load->view('Backend/Even/Detaileven', $data);
		}
		}
	public function Even_edit(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		    $ideven = $this->input->post('ideven');
			// $imagenews = $this->input->post('avatar');
			$Title = $this->input->post('Title', TRUE);
			$Detail = $this->input->post('Detail', TRUE);
			$imageevendelete = $this->input->POST('imageevendelete');
			$Update_By = $this->session->userdata('username');
			
			if (isset($_FILES['imageeven']) && !empty($_FILES['imageeven'])) {
			
					$dateSv = date('ymd');
					$type = strrchr($_FILES['imageeven']['name'], ".");
					$newnamefile = rand(0, 999999);
					$imageeven =  $dateSv.$newnamefile . $type;
					$_FILES['file']['name'] = $imageeven;
					$_FILES['file']['type'] = $_FILES['imageeven']['type'];
					$_FILES['file']['tmp_name'] = $_FILES['imageeven']['tmp_name'];
					$_FILES['file']['error'] = $_FILES['imageeven']['error'];
					$_FILES['file']['size'] = $_FILES['imageeven']['size'];
					$config['upload_path']          = './assets/img/even';
					$config['allowed_types']        = '*';
					$config['remove_spaces'] = 'FALSE';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('file')) {
						$delete_img = "./assets/img/even/" . $imageevendelete;
						@unlink($delete_img);
						$insert = $this->Admin_model->Update_newdetail($ideven, $Title, $Detail, $imageeven,$Update_By);
						if ($insert) {
							$data = array('success' => true, 'msg1' => 'Form has been submitted successfully1');
						} else {
							$data = array('success' => false, 'msg' => 'Form has been not submitted');
						}
						echo json_encode($data);
					}else{
						$insert = $this->Admin_model->Update_newdetail($ideven, $Title, $Detail, $imageevendelete,$Update_By);
						// $insert = true;
						if ($insert) {
							$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2' );
						} else {
							$data = array('success' => false, 'msg' => 'Form has been not submitted');
						}
						echo json_encode($data);
					}
			}else{
				$insert = $this->Admin_model->Update_newdetail($ideven, $Title, $Detail, $imageevendelete,$Update_By);
				// $insert = true;
				if ($insert) {
					$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2');
				} else {
					$data = array('success' => false, 'msg' => 'Form has been not submitted');
				}
	
				echo json_encode($data);
			}
		}
	}
	public function Insert_Even()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$Title = $this->input->post('Titleinsert', TRUE);
		$Detail = $this->input->post('Detailinsert', TRUE);
		$Update_By = $this->session->userdata('username');
		
		if (isset($_FILES['imageeven']) && !empty($_FILES['imageeven'])) {
		
				$dateSv = date('ymd');
				$type = strrchr($_FILES['imageeven']['name'], ".");
				$newnamefile = rand(0, 999999);
				$imageeven =  $dateSv.$newnamefile . $type;
				$_FILES['file']['name'] = $imageeven;
				$_FILES['file']['type'] = $_FILES['imageeven']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['imageeven']['tmp_name'];
				$_FILES['file']['error'] = $_FILES['imageeven']['error'];
				$_FILES['file']['size'] = $_FILES['imageeven']['size'];
				$config['upload_path']          = './assets/img/even';
				$config['allowed_types']        = '*';
				$config['remove_spaces'] = 'FALSE';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file')) {
					$insert = $this->Admin_model->Insert_even($Title, $Detail, $imageeven,$Update_By);
					if ($insert) {
						$data = array('success' => true, 'msg1' => 'Form has been submitted successfully1');
					} else {
						$data = array('success' => false, 'msg' => 'Form has been not submitted');
					}
					echo json_encode($data);
				}else{
					$insert = $this->Admin_model->Insert_even($idnews, $Title, $Detail, $imageeven,$Update_By);
					// $insert = true;
					if ($insert) {
						$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2');
					} else {
						$data = array('success' => false, 'msg' => 'Form has been not submitted');
					}
		
					echo json_encode($data);
				}
	
		}else{
			$imageeven = NULL;
			$insert = $this->Admin_model->Insert_even($Title, $Detail, $imageeven,$Update_By);
			// $insert = true;
			if ($insert) {
				$data = array('success' => true, 'msg1' => 'Form has been submitted successfully2' );
			} else {
				$data = array('success' => false, 'msg' => 'Form has been not submitted');
			}

			echo json_encode($data);
		}
	}
	}
	
	public function Status_Even()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$Even_ID = $this->input->POST('Even_ID');
		$get_Even= $this->Admin_model->Get_ideven($Even_ID);
		if ($get_Even[0]->status_even == '1') {
			$status_updateeven = 0;
			$this->Admin_model->update_statuseven($status_updateeven, $Even_ID);
			echo "<button type='button' class='btn btn-danger btn-xs'
			style='color:white;font-size: 13px;border-radius: 5px;' onclick='statusupdate(" . $Even_ID . ")'>
			ปิดการใช้งาน
			</button>";

		} else if ($get_Even[0]->status_even == '0') {
			$status_updateeven = 1;
			$this->Admin_model->update_statuseven($status_updateeven, $Even_ID);
			echo "<button type='button' class='btn btn-success btn-xs'
			style='color:white;font-size: 13px;border-radius: 5px;'
			onclick='statusupdate(" . $Even_ID . ")'>
			เปิดการใช้งาน
			</button>";
		}
	}
	}
	public function delete_Even()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$Even_ID = $this->input->POST('Even_ID');
			$get_Even = $this->Admin_model->Get_ideven($Even_ID);
			if ($get_Even[0]->status_even == 0) {
				echo "ลบข้อมูลสำเร็จ";
				$Photo = $get_Even[0]->image_even;
				$delete_img = "./assets/img/news/" . $Photo;
				@unlink($delete_img);
				$this->Admin_model->Delete_even_modail($Even_ID);
			} else {
				echo "มีการใช้งานอยู่";
			}
		}
	}

	public function Touchtomoney()
	{
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$data['Touchtomoney'] = $this->Admin_model->Touchtomoney();
		$data['ShowPage'] = 'Backend/Touchtomoney/Touchtomoney';
		$this->load->view('Backend/Indexview', $data);
		// $this->load->view('backend/tables');
		}
	}
	public function Appraisal($idtouch){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		// $idtouch = $this->input->post('id');
		$data['touchdetail'] = $this->Admin_model->Touchtomoney_model($idtouch);
	    foreach($data['touchdetail'] as $idcode){
          $idcode     =   $idcode->id_code;
	    }
		$idproperty = 1;
		$iddeed = 2;
	     $data['imagedeed'] = $this->Admin_model->Imagedeed_model($idcode,$iddeed);
	     $data['imageproperty'] = $this->Admin_model->Imageproperty_model($idcode,$idproperty);
		//  $this->load->view('Backend/Touchtomoney/Touchtomoneydetail', $data);
		 $data['ShowPage'] = 'Backend/Touchtomoney/Touchtomoneydetail';
		 $this->load->view('Backend/Indexview', $data);
		}
	}
	public function Touchtomoney_detail(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$idtouch = $this->input->post('id');
		$data['touchdetail'] = $this->Admin_model->Touchtomoney_model($idtouch);
	    foreach($data['touchdetail'] as $idcode){
          $idcode     =   $idcode->id_code;
	    }
		$idproperty = 1;
		$iddeed = 2;
	     $data['imagedeed'] = $this->Admin_model->Imagedeed_model($idcode,$iddeed);
	     $data['imageproperty'] = $this->Admin_model->Imageproperty_model($idcode,$idproperty);
		 $this->load->view('Backend/Touchtomoney/Touchtomoneydetail', $data);
		}
	}
	public function Contact_admin(){
		if ($this->session->userdata('username') == '') {
			$data['username'] = "";
			$data['password'] = "";
			$data['result'] = "";
			$this->load->view('Backend/Login', $data);
		} else {
		$data['Contact'] = $this->Admin_model->Contact_model();
		$data['ShowPage'] = 'Backend/Contact/Contact';
		$this->load->view('Backend/Indexview', $data);
		}
	}

	public function getdistrict()
	{
		$district = trim($this->input->get('dis'));
		$this->session->set_userdata("district", $district);
		// $this->session->set_userdata("carYear2", $year);
		$res = $this->Admin_model->district($district);
		$result = array();
		foreach ($res as $r) {
			$result[] = array(
				'name_th' => 	$r->name_th,
				'id' => 	$r->id,
				'province_id' => 	$r->province_id
			);
		}
		echo json_encode($result);
	}
	public function getsubdistrict()
	{
		$subdistrict = trim($this->input->get('subdis'));
		$this->session->set_userdata("subdistrict", $subdistrict);
		// $this->session->set_userdata("carYear2", $year);
		$res = $this->Admin_model->subdistrict($subdistrict);
		$result = array();
		foreach ($res as $r) {
			$result[] = array(
				'name_th' => 	$r->name_th,
				'id' => 	$r->id,
				'district_id' => 	$r->district_id,
				'zipcode' => 	$r->zipcode
				
			);
		}
		echo json_encode($result);
	}
	public function getpostcode()
	{
		$postcode = trim($this->input->get('postcode'));
		$this->session->set_userdata("postcode", $postcode);
		// $this->session->set_userdata("carYear2", $year);
		// $res = $this->Admin_model->subposcode($postcode);
		$result = array();
		// foreach ($res as $r) {
			$result[] = array(
				'zipcode' => $postcode
				
			);
		// }
		echo json_encode($result);
	}
	
}