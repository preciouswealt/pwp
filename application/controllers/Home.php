<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));
		$this->load->helper(array('url', 'html', 'form'));
		$this->load->library("pagination");
		$this->load->helper('cookie');
		$this->load->model('Homemodel');
		$this->load->library("pagination");
	}
	public function index()
	{
		$data['evenshome'] = $this->Homemodel->evenshome();
		$data['newshome'] = $this->Homemodel->newshome();
		$data['aboutus'] = $this->Homemodel->aboutus();
		$data['image'] = $this->Homemodel->image();
		$data['properties1'] = $this->Homemodel->propertieshome1();
		$data['properties2'] = $this->Homemodel->propertieshome2();
		$data['properties3'] = $this->Homemodel->propertieshome3();
		$data['properties4'] = $this->Homemodel->propertieshome4();
		$data['properties5'] = $this->Homemodel->propertieshome5();
		$data['ShowPage'] = 'Homeindex/Homeindex';
		$this->load->view('Indexview', $data);
	}
	public function aboutpage()
	{
		$data['aboutus'] = $this->Homemodel->aboutus();
		$data['ShowPage'] = 'About/Aboutpage';
		$this->load->view('Indexview', $data);
	}
	public function consignment()
	{
		$IDtype = '1';

		$typeproperties = $this->input->GET('typeproperties');

		$province = $this->input->GET('province');

		$dristrictAll = $this->input->GET('dristrict');
		$dristrictAllCut = (explode(",", $dristrictAll));
		$dristrict = isset($dristrictAllCut[0]) ?  $dristrictAllCut[0] : '';
		$dristrictname = isset($dristrictAllCut[1]) ?  $dristrictAllCut[1] : '';

		$sub_dristrictALL = $this->input->GET('sub_dristrict');
		$sub_dristrictALLCut = (explode(",", $sub_dristrictALL));
		$sub_dristrict = isset($sub_dristrictALLCut[0]) ?  $sub_dristrictALLCut[0] : '';
		$sub_dristrictname = isset($sub_dristrictALLCut[1]) ?  $sub_dristrictALLCut[1] : '';

		$size = $this->input->GET('size');

		$statusmatch = $this->input->GET('statusmatch');

		$this->session->set_userdata(
			array(
				'typeproperties' => $typeproperties, 'province' => $province, 'dristrict' => $dristrict, 'sub_dristrict' => $sub_dristrict, 'size' => $size, 'statusmatch' => $statusmatch, 'dristrictname' => $dristrictname, 'sub_dristrictname' => $sub_dristrictname
			)
		);

		$countpag = $this->Homemodel->countproperties($IDtype);
		foreach ($countpag as $cout) {
			$coutpage = $cout->countpro;
		}

		$per_page = 10;
		$config = array();
		// $config["base_url"] = base_url('insurance_premium/Search_insurance');
		$config['base_url'] = site_url('Home/consignment');
		$config['reuse_query_string'] = true;
		$config["total_rows"] = $coutpage;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link" style=" position: inherit;">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_pages = $config["per_page"];


		$data['pagelinks'] = $this->pagination->create_links();
		$data['province'] = $this->Homemodel->province();
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['square_wah'] = $this->Homemodel->square_wah();
		$data['properties'] = $this->Homemodel->propertiessearch($IDtype, $page, $per_pages, $typeproperties, $province, $dristrict, $sub_dristrict, $size, $statusmatch);
		$data['ShowPage'] = 'Consignment/Consignmentpage';
		$this->load->view('Indexview', $data);
	}

	public function detail_consignment($ID_A)
	{
		$data['province'] = $this->Homemodel->province();
		$data['properties'] = $this->Homemodel->propertiesdetail($ID_A);
		// $data['properties'] = $this->Homemodel->properties();
		$data['ShowPage'] = 'Consignment/Detail_consignmentpage';
		$this->load->view('Indexview', $data);
	}
	public function Mortgage()
	{
		$IDtype = '2';
		
		$typeproperties = $this->input->GET('typeproperties');

		$province = $this->input->GET('province');

		$dristrictAll = $this->input->GET('dristrict');
		$dristrictAllCut = (explode(",", $dristrictAll));
		$dristrict = isset($dristrictAllCut[0]) ?  $dristrictAllCut[0] : '';
		$dristrictname = isset($dristrictAllCut[1]) ?  $dristrictAllCut[1] : '';

		$sub_dristrictALL = $this->input->GET('sub_dristrict');
		$sub_dristrictALLCut = (explode(",", $sub_dristrictALL));
		$sub_dristrict = isset($sub_dristrictALLCut[0]) ?  $sub_dristrictALLCut[0] : '';
		$sub_dristrictname = isset($sub_dristrictALLCut[1]) ?  $sub_dristrictALLCut[1] : '';

		$size = $this->input->GET('size');

		$statusmatch = $this->input->GET('statusmatch');

		$this->session->set_userdata(
			array(
				'typeproperties' => $typeproperties, 'province' => $province, 'dristrict' => $dristrict, 'sub_dristrict' => $sub_dristrict, 'size' => $size, 'statusmatch' => $statusmatch, 'dristrictname' => $dristrictname, 'sub_dristrictname' => $sub_dristrictname
			)
		);

		$countpag = $this->Homemodel->countproperties($IDtype);
		foreach ($countpag as $cout) {
			$coutpage = $cout->countpro;
		}

		$per_page = 10;
		$config = array();
		// $config["base_url"] = base_url('insurance_premium/Search_insurance');
		$config['base_url'] = site_url('Home/consignment');
		$config['reuse_query_string'] = true;
		$config["total_rows"] = $coutpage;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link" style=" position: inherit;">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_pages = $config["per_page"];


		$data['pagelinks'] = $this->pagination->create_links();
		$data['province'] = $this->Homemodel->province();
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['square_wah'] = $this->Homemodel->square_wah();
		$data['properties'] = $this->Homemodel->propertiessearch($IDtype, $page, $per_pages, $typeproperties, $province, $dristrict, $sub_dristrict, $size, $statusmatch);
		$data['ShowPage'] = 'Mortgage/Mortgagepage';
		$this->load->view('Indexview', $data);
	}
	public function detail_mortgage($ID_A)
	{
		$data['province'] = $this->Homemodel->province();
		$data['properties'] = $this->Homemodel->propertiesdetail($ID_A);

		// $data['properties'] = $this->Homemodel->properties();
		$data['ShowPage'] = 'Mortgage/Detail_mortgagepage';
		$this->load->view('Indexview', $data);
	}
	public function rentproperty()
	{
		$IDtype = '3';
	
		$typeproperties = $this->input->GET('typeproperties');

		$province = $this->input->GET('province');

		$dristrictAll = $this->input->GET('dristrict');
		$dristrictAllCut = (explode(",", $dristrictAll));
		$dristrict = isset($dristrictAllCut[0]) ?  $dristrictAllCut[0] : '';
		$dristrictname = isset($dristrictAllCut[1]) ?  $dristrictAllCut[1] : '';

		$sub_dristrictALL = $this->input->GET('sub_dristrict');
		$sub_dristrictALLCut = (explode(",", $sub_dristrictALL));
		$sub_dristrict = isset($sub_dristrictALLCut[0]) ?  $sub_dristrictALLCut[0] : '';
		$sub_dristrictname = isset($sub_dristrictALLCut[1]) ?  $sub_dristrictALLCut[1] : '';

		$size = $this->input->GET('size');

		$statusmatch = $this->input->GET('statusmatch');

		$this->session->set_userdata(
			array(
				'typeproperties' => $typeproperties, 'province' => $province, 'dristrict' => $dristrict, 'sub_dristrict' => $sub_dristrict, 'size' => $size, 'statusmatch' => $statusmatch, 'dristrictname' => $dristrictname, 'sub_dristrictname' => $sub_dristrictname
			)
		);

		$countpag = $this->Homemodel->countproperties($IDtype);
		foreach ($countpag as $cout) {
			$coutpage = $cout->countpro;
		}

		$per_page = 10;
		$config = array();
		// $config["base_url"] = base_url('insurance_premium/Search_insurance');
		$config['base_url'] = site_url('Home/consignment');
		$config['reuse_query_string'] = true;
		$config["total_rows"] = $coutpage;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link" style=" position: inherit;">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_pages = $config["per_page"];


		$data['pagelinks'] = $this->pagination->create_links();
		$data['province'] = $this->Homemodel->province();
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['square_wah'] = $this->Homemodel->square_wah();
		$data['properties'] = $this->Homemodel->propertiessearch($IDtype, $page, $per_pages, $typeproperties, $province, $dristrict, $sub_dristrict, $size, $statusmatch);
		$data['ShowPage'] = 'Rentproperty/Rentpropertypage';
		$this->load->view('Indexview', $data);
	}
	public function detail_rentproperty($ID_A)
	{
		$data['province'] = $this->Homemodel->province();
		$data['properties'] = $this->Homemodel->propertiesdetail($ID_A);
		// $data['properties'] = $this->Homemodel->properties();
		$data['ShowPage'] = 'Rentproperty/Detail_rentpropertypage';
		$this->load->view('Indexview', $data);
	}
	public function propertysale()
	{
		$IDtype = '4'; 
		//('4','6','7','8');
	
		$typeproperties = $this->input->GET('typeproperties');

		$province = $this->input->GET('province');

		$dristrictAll = $this->input->GET('dristrict');
		$dristrictAllCut = (explode(",", $dristrictAll));
		$dristrict = isset($dristrictAllCut[0]) ?  $dristrictAllCut[0] : '';
		$dristrictname = isset($dristrictAllCut[1]) ?  $dristrictAllCut[1] : '';

		$sub_dristrictALL = $this->input->GET('sub_dristrict');
		$sub_dristrictALLCut = (explode(",", $sub_dristrictALL));
		$sub_dristrict = isset($sub_dristrictALLCut[0]) ?  $sub_dristrictALLCut[0] : '';
		$sub_dristrictname = isset($sub_dristrictALLCut[1]) ?  $sub_dristrictALLCut[1] : '';

		$size = $this->input->GET('size');

		$statusmatch = $this->input->GET('statusmatch');

		$this->session->set_userdata(
			array(
				'typeproperties' => $typeproperties, 'province' => $province, 'dristrict' => $dristrict, 'sub_dristrict' => $sub_dristrict, 'size' => $size, 'statusmatch' => $statusmatch, 'dristrictname' => $dristrictname, 'sub_dristrictname' => $sub_dristrictname
			)
		);

		$countpag = $this->Homemodel->countproperties($IDtype);
		foreach ($countpag as $cout) {
			$coutpage = $cout->countpro;
		}

		$per_page = 10;
		$config = array();
		// $config["base_url"] = base_url('insurance_premium/Search_insurance');
		$config['base_url'] = site_url('Home/consignment');
		$config['reuse_query_string'] = true;
		$config["total_rows"] = $coutpage;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link" style=" position: inherit;">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_pages = $config["per_page"];

		$data['pagelinks'] = $this->pagination->create_links();
		$data['province'] = $this->Homemodel->province();
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['square_wah'] = $this->Homemodel->square_wah();
		$data['properties'] = $this->Homemodel->propertiessearch($IDtype, $page, $per_pages, $typeproperties, $province, $dristrict, $sub_dristrict, $size, $statusmatch);
		$data['ShowPage'] = 'Propertysale/Propertysalepage';
		$this->load->view('Indexview', $data);
	}
	public function detail_propertysale($ID_A)
	{
		$data['province'] = $this->Homemodel->province();
		$data['properties'] = $this->Homemodel->propertiesdetail($ID_A);
		// $data['properties'] = $this->Homemodel->properties();
		$data['ShowPage'] = 'Propertysale/Detail_propertysale';
		$this->load->view('Indexview', $data);
	}
	public function touchtomoney()
	{
		$data['province'] = $this->Homemodel->province();
		$data['ShowPage'] = 'Touchtomoney/Touchtomoneypage';
		$this->load->view('Indexview', $data);
	}
	public function insert_touchtomoney()
	{

		$txtFirstName = $this->input->post('txtFirstName');
		$txtLastName = $this->input->post('txtLastName');
		$phone = $this->input->post('phone');
		$idline = $this->input->post('idline');
		$typeproties = $this->input->post('typeproties');
		$dealing_file_no = $this->input->post('dealing_file_no');
		$number = $this->input->post('number');
		$province = $this->input->post('province');
		$dristrict = $this->input->post('dristrict');
		$sub_dristrict = $this->input->post('sub_dristrict');
		
		if($typeproties == '1'){
			$idran = rand(0, 99999);
			$idcode = "CM-".$idran;
		}else{
			$idran = rand(0, 99999);
			$idcode = "MG-".$idran;
		}
		// $insdeed = $this->input->post('filedeed');
		// $ins = $this->input->post('formFileLg');
		if (isset($_FILES['filedeed']) && !empty($_FILES['filedeed'])) {
			$no_files = count($_FILES["filedeed"]['name']);
			for ($i = 0; $i < $no_files; $i++) {
				$dateSv = date('ymd');
				$type = strrchr($_FILES['filedeed']['name'][$i], ".");
				$newnamefile = rand(0, 999999);
				$filedeed =  $dateSv.$newnamefile . $type;
				// $filedeed =  $_FILES['filedeed']['name'][$i];
				$_FILES['file']['name'] = $filedeed;
				$_FILES['file']['type'] = $_FILES['filedeed']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['filedeed']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['filedeed']['error'][$i];
				$_FILES['file']['size'] = $_FILES['filedeed']['size'][$i];
				$config['upload_path']          = './deed/'.$idcode;
				$config['allowed_types']         = 'pdf|Pdf|jpg|jpeg|png';
				$config['remove_spaces'] = 'FALSE';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if(!is_dir('./deed/'.$idcode)) {
					mkdir('./deed/'.$idcode, 0777, true);
				}

				if ($this->upload->do_upload('file')) {
					$this->Homemodel->inserttouchimagedeed($filedeed,$idcode);
					$uploadData = $this->upload->data();
				}
			}
		}

		if (isset($_FILES['formFileLg']) && !empty($_FILES['formFileLg'])) {
			$no_filesLg = count($_FILES["formFileLg"]['name']);
			for ($i = 0; $i < $no_filesLg; $i++) {
				$dateSv = date('ymd');
				$type = strrchr($_FILES['formFileLg']['name'][$i], ".");
				$newnamefile = rand(0, 999999);
				$formFileLg =  $dateSv.$newnamefile . $type;
				// $formFileLg =  $_FILES['formFileLg']['name'][$i];
				$_FILES['file']['name'] = $formFileLg;
				$_FILES['file']['type'] = $_FILES['formFileLg']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['formFileLg']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['formFileLg']['error'][$i];
				$_FILES['file']['size'] = $_FILES['formFileLg']['size'][$i];
				$config['upload_path']          = './imagehome/'.$idcode;
				$config['allowed_types']         = 'pdf|Pdf|jpg|jpeg|png';
				$config['remove_spaces'] = 'FALSE';
			
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if(!is_dir('./imagehome/'.$idcode)) {
					mkdir('./imagehome/'.$idcode, 0777, true);
				}
				if ($this->upload->do_upload('file')) {
					$this->Homemodel->inserttouchimage($formFileLg,$idcode);
					$uploadData = $this->upload->data();
				
				}
			}
		}

		// $txtFirstName;
		// $txtLastName;
		// $phone;
		// $idline;
		// $typeproties;
		// $dealing_file_no;
		// $number;
		// $province 
		// $dristrict 
		// $sub_dristrict 

		$insert = $this->Homemodel->inserttouchtomoney($txtFirstName, $txtLastName, $phone
		, $idline, $typeproties, $dealing_file_no, $number,$idcode,$province,$dristrict,$sub_dristrict);

		// $insert = true;
		$data = array('success' => false, 'msg' => 'Form has been not submitted');
		if ($insert) {
			$data = array(
				'success' => true, 'msg' => 'Form has been submitted successfully'
				, 'txtFirstName' => $txtFirstName 
				, 'txtLastName' => $txtLastName
				, 'typeproties' => $typeproties
				, 'number' => $number
				, 'idcode' => $idcode
			);
		}
		echo json_encode($data);
	}
	public function stepnext($idcode)
	{
        $data['detailtouch'] = $this->Homemodel->detailtouchtomoney($idcode);
		$data['ShowPage'] = 'Touchtomoney/Detailstepnext';
		$this->load->view('Indexview', $data);
	}
	public function propertyproject()
	{
		$IDtype = '5';
	
		$typeproperties = $this->input->GET('typeproperties');

		$province = $this->input->GET('province');

		$dristrictAll = $this->input->GET('dristrict');
		$dristrictAllCut = (explode(",", $dristrictAll));
		$dristrict = isset($dristrictAllCut[0]) ?  $dristrictAllCut[0] : '';
		$dristrictname = isset($dristrictAllCut[1]) ?  $dristrictAllCut[1] : '';

		$sub_dristrictALL = $this->input->GET('sub_dristrict');
		$sub_dristrictALLCut = (explode(",", $sub_dristrictALL));
		$sub_dristrict = isset($sub_dristrictALLCut[0]) ?  $sub_dristrictALLCut[0] : '';
		$sub_dristrictname = isset($sub_dristrictALLCut[1]) ?  $sub_dristrictALLCut[1] : '';

		$size = $this->input->GET('size');

		$statusmatch = $this->input->GET('statusmatch');

		$this->session->set_userdata(
			array(
				'typeproperties' => $typeproperties, 'province' => $province, 'dristrict' => $dristrict, 'sub_dristrict' => $sub_dristrict, 'size' => $size, 'statusmatch' => $statusmatch, 'dristrictname' => $dristrictname, 'sub_dristrictname' => $sub_dristrictname
			)
		);

		$countpag = $this->Homemodel->countproperties($IDtype);
		foreach ($countpag as $cout) {
			$coutpage = $cout->countpro;
		}

		$per_page = 10;
		$config = array();
		// $config["base_url"] = base_url('insurance_premium/Search_insurance');
		$config['base_url'] = site_url('Home/consignment');
		$config['reuse_query_string'] = true;
		$config["total_rows"] = $coutpage;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link" style=" position: inherit;">';
		$config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_pages = $config["per_page"];

		$data['pagelinks'] = $this->pagination->create_links();
		$data['province'] = $this->Homemodel->province();
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['square_wah'] = $this->Homemodel->square_wah();
		$data['properties'] = $this->Homemodel->propertiessearch($IDtype, $page, $per_pages, $typeproperties, $province, $dristrict, $sub_dristrict, $size, $statusmatch);
		$data['ShowPage'] = 'Propertyproject/Propertyprojectpage';
		$this->load->view('Indexview', $data);
	}
	public function detail_propertyproject($ID_A)
	{
		// $data['properties'] = $this->Homemodel->properties();
		$data['properties'] = $this->Homemodel->propertiesdetail($ID_A);
		$data['ShowPage'] = 'Propertyproject/Detail_propertyprojectpage';
		$this->load->view('Indexview', $data);
	}


	public function news()
	{
		$data['news'] = $this->Homemodel->news();
		$data['ShowPage'] = 'News/Newspage';
		$this->load->view('Indexview', $data);
	}
	public function detail_news($ID_A)
	{
		// $Channelclick = $this->session->userdata('Channelclick');
		// $data['ChannelHome'] = $this->session->userdata('ChannelHome');
		$data['news_detail'] = $this->Homemodel->news_detail($ID_A);

		// foreach ($data['articleS'] as $values) {
		//     $Title	= $values->Title;
		// 	$Keyword = $values->Keyword;
		// 	$Discription =	$values->DescriptionS;
		// }

		// $data['Title'] = isset($Title) ? $Title : '';
		// $data['Description'] = isset($Discription) ? $Discription : '' ;
		// $data['Keyword'] = isset($Keyword) ? $Keyword : '';

		$data['news_Allright'] = $this->Homemodel->newshome();

		// $data['Contactus'] = $this->model->Contactus();
		$data['ShowPage'] = 'News/Detail_new';
		$this->load->view('Indexview', $data);
	}
	public function even()
	{
		$data['evens'] = $this->Homemodel->evens();
		$data['ShowPage'] = 'Even/Evenpage';
		$this->load->view('Indexview', $data);
	}
	public function detail_even($ID_A)
	{
		$data['evens_detail'] = $this->Homemodel->evens_detail($ID_A);
		$data['evens_Allright'] = $this->Homemodel->evenshome();
		$data['ShowPage'] = 'Even/Even_detail';
		$this->load->view('Indexview', $data);
	}
	public function contract()
	{
		$data['ShowPage'] = 'Contract/Contractpage';
		$this->load->view('Indexview', $data);
	}
	public function getdistrict()
	{
		$district = trim($this->input->get('dis'));
		$this->session->set_userdata("district", $district);
		// $this->session->set_userdata("carYear2", $year);
		$res = $this->Homemodel->district($district);
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
		$res = $this->Homemodel->subdistrict($subdistrict);
		$result = array();
		foreach ($res as $r) {
			$result[] = array(
				'name_th' => 	$r->name_th,
				'id' => 	$r->id,
				'district_id' => 	$r->district_id
			);
		}
		echo json_encode($result);
	}
	public function insert_contract()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$line = $this->input->post('line');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$insert = $this->Homemodel->insertcontract($name, $phone, $line, $email, $subject, $message);
		// $insert = true;
		$data = array('success' => false, 'msg' => 'Form has been not submitted');
		if ($insert) {
			$data = array(
				'success' => true, 'msg' => 'Form has been submitted successfully'
			);
		}
		echo json_encode($data);
	}
	public function Register()
	{
		$data['ShowPage'] = 'Register/Choosregister';
		$this->load->view('Indexview', $data);
	}

	public function Registerconsignor()
	{
		$data['ShowPage'] = 'Register/Registerconsignor';
		$this->load->view('Indexview', $data);
	}

	public function Registerinvestor()
	{
		$data['typeproperty'] = $this->Homemodel->typeproperty();
		$data['ShowPage'] = 'Register/Registerinvestor';
		$this->load->view('Indexview', $data);
	}
}
