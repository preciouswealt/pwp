<?php

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	// public function fetch_user_login($username,$password)
	// {
	// 	$this->db->where('user_name',$username);
	// 	$this->db->where('password',$password);
	// 	$query = $this->db->get('userlogin');
	// 	return $query->row();
	// }
	public function fetch_user_login($username,$password)
	{
		// $this->db->where('user_name',$username);
		// $this->db->where('password',$password);
		// return $this->db->count_all_results('userlogin');

      $query = "SELECT * FROM userlogin  where user_name = '$username' and  password = '$password' ";
		return $this->db->query($query)->result();
	}
    public function record_count($username,$password)
	{
      $query = "SELECT * FROM userlogin  where user_name = '$username' and  password = '$password' ";
		return $this->db->query($query)->result();
	}

    public function salt_pass($password)
	{
		return md5($password);
	}
	public function forminsert_model(){
		
	}
	public function property_model(){
// 		SELECT PR.id,p_id,p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,p_image,p_status
// 		,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match
// 		,square_wah,type_product,p_price,percen,P.name_th,D.name_th,SD.name_th,SD.zipcode 
// 		FROM properties as PR 
// 		INNER JOIN th_province as P
// ON PR.p_province = P.id 
// INNER JOIN th_district as D ON PR.p_district = D.id
// INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id
	}
	
    public function News_model(){
		$query = "SELECT * FROM news ";
		return $this->db->query($query)->result();

	}
	public function News_model_detail($idnews){
		$query = "SELECT * FROM news where id = '$idnews' ";
		return $this->db->query($query)->result();

	}
	public function Insert_news($Title, $Detail, $imagenews,$Update_By){

		$query = "INSERT INTO news (title,detail,savedate,update_date,status_new,image_new,userupdate)
		VALUES ('$Title','$Detail', now(), now(),'1','$imagenews','$Update_By')";
		return $this->db->query($query);
	}

	public function Update_newdetail($idnews, $Title, $Detail, $imagenews,$Update_By){

	$query = "  UPDATE news
		SET title = '$Title',detail ='$Detail',savedate = now(),update_date=now(),status_new ='1'
		,image_new ='$imagenews',userupdate = '$Update_By' WHERE id = '$idnews' ";
		return $this->db->query($query);
	}
	public function Delete_news_modail($News_ID)
	{
	$query = " DELETE  FROM news  WHERE id = '$News_ID'";
		return $this->db->query($query);
	}
	public function Get_idnews($News_ID)
	{
		$query = "SELECT * FROM news  WHERE id = '$News_ID'";
		return $this->db->query($query)->result();
	}
	public function update_statusnews($Status, $News_ID)
	{
		$query = "UPDATE news SET status_new = '$Status' WHERE id ='$News_ID'";
		return $this->db->query($query);
	}


	public function Even_model(){
		$query = "SELECT * FROM evens ";
		return $this->db->query($query)->result();

	}
	public function Even_model_detail($idnews){
		$query = "SELECT * FROM evens where id = '$idnews' ";
		return $this->db->query($query)->result();

	}
	public function Insert_even($Title, $Detail, $imagenews,$Update_By){

		$query = "INSERT INTO evens (title,detail,savedate,update_date,status_even,image_even,userupdate)
		VALUES ('$Title','$Detail', now(), now(),'1','$imagenews','$Update_By')";
		return $this->db->query($query);
	}

	public function Update_evendetail($idnews, $Title, $Detail, $imagenews,$Update_By){

	$query = "  UPDATE evens
		SET title = '$Title',detail ='$Detail',savedate = now(),update_date=now(),status_even ='1'
		,image_even ='$imagenews',userupdate = '$Update_By' WHERE id = '$idnews' ";
		return $this->db->query($query);
	}
	public function Delete_even_modail($News_ID)
	{
	$query = " DELETE  FROM evens  WHERE id = '$News_ID'";
		return $this->db->query($query);
	}
	public function Get_ideven($News_ID)
	{
		$query = "SELECT * FROM evens  WHERE id = '$News_ID'";
		return $this->db->query($query)->result();
	}
	public function update_statuseven($Status, $News_ID)
	{
		$query = "UPDATE evens SET status_even = '$Status' WHERE id ='$News_ID'";
		return $this->db->query($query);
	}

	public function Touchtomoney(){
		$query = "SELECT * FROM touch_to_money ";
		return $this->db->query($query)->result();
	}
	// public function Touchtomoney(){
	// 	$query = "SELECT * FROM touch_to_money ";
	// 	return $this->db->query($query)->result();
	// }
	public function Contact_model()
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM contract";
		return $this->db->query($query)->result();
	}
	public function Touchtomoney_model($idtouch)
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM touch_to_money where id = '$idtouch'";
		return $this->db->query($query)->result();
	}
	public function Imagedeed_model($idtouch,$iddeed)
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM image_touch_to_money where type = '$iddeed' and id_code = '$idtouch'";
		return $this->db->query($query)->result();
	}
	public function Imageproperty_model($idtouch,$idproperty)
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM image_touch_to_money where type = '$idproperty' and id_code = '$idtouch'";
		return $this->db->query($query)->result();
	}
	public function Property_model_index()
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM properties ";
		return $this->db->query($query)->result();
	}

	public function province()
	{
		$query = "SELECT * FROM th_province ";
		return $this->db->query($query)->result();
	}
	public function district($dis)
	{
		$query = "SELECT * FROM th_district WHERE province_id = '$dis' ";
		return $this->db->query($query)->result();
	}
	public function subdistrict($subdis)
	{
		$query = "SELECT * FROM th_subdistrict WHERE district_id = '$subdis' ";
		return $this->db->query($query)->result();
	}

}