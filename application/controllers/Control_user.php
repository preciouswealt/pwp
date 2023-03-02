<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_user extends CI_Controller
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

    public function insertvestor(){

    $title   =  $this->input->post('title');
    $nameall   =  $this->input->post('nameall');
    $phonenumber   =  $this->input->post('phonenumber');
    $lineid   =  $this->input->post('lineid');
    $email   =  $this->input->post('email');
    $password   =  $this->input->post('password');
    $activpassword   =  $this->input->post('activpassword');
    $current_oc   =  $this->input->post('current_oc');
    $property_type   =  $this->input->post('property_type');
    $convenient_time   =  $this->input->post('convenient_time');

    $experience_buy1   =  $this->input->post('experience_buy1');
    $experience_buy2 =  $this->input->post('experience_buy2');
 
        if($experience_buy1 == "Y" ){
        $checkexperience_buy = '1';
        }else if($experience_buy2  == "N" ){
        $checkexperience_buy = '0';
        }else{
        $checkexperience_buy = '0';
        }

      	$insert = true;
		$data = array('success' => false, 'msg' => 'Form has been not submitted');
		if ($insert) {
			$data = array(
				'success' => true, 'msg' => 'Form has been submitted successfully'
				, 'title' => $title 
                , 'nameall' => $nameall 
				, 'phonenumber' => $phonenumber
                , 'lineid' => $lineid
                , 'email' => $email
                , 'password' => $password
                , 'activpassword' => $activpassword
                , 'current_oc' => $current_oc
				, 'property_type' => $property_type
				, 'convenient_time' => $convenient_time
				, 'checkexperience_buy' => $checkexperience_buy
			);
		}
		echo json_encode($data);  
    }
    public function insertconsignor(){
        
    }
}