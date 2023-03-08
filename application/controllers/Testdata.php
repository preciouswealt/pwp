<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
set_time_limit(0);
ini_set('memory_limit', '-1');

class Testdata extends CI_Controller
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
public function get_User()
  {
     $draw = intval($this->input->get("draw"));
     $start = intval($this->input->get("start"));
     $length = intval($this->input->get("length"));
    
 
    //  $query =$this->db->query("SELECT * FROM users");
    $query = $this->Admin_model->Even_model();
      
     $data = [];
 
 
 
     foreach($query->result() as $r) {
          $data[] = array(
               $r->id,
               $r->title,
               $r->detail,
               $r->savedate,
           $r->update_date,
           $r->status_even,
           $r->image_even,
           $r->userupdate,
               $r_tab[] = $r
 
 
          );
     }
 
     $result = array(
              "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data,
                 "data" =>  $r_tab
 
           );
     echo json_encode($result);
     exit();
   }

}