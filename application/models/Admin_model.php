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
	public function fetch_user_login($username, $password)
	{
		// $this->db->where('user_name',$username);
		// $this->db->where('password',$password);
		// return $this->db->count_all_results('userlogin');

		$query = "SELECT * FROM userlogin  where user_name = '$username' and  password = '$password' ";
		return $this->db->query($query)->result();
	}
	public function record_count($username, $password)
	{
		$query = "SELECT * FROM userlogin  where user_name = '$username' and  password = '$password' ";
		return $this->db->query($query)->result();
	}

	public function salt_pass($password)
	{
		return md5($password);
	}
	public function forminsert_model()
	{
	}
	public function property_model()
	{
		// 		SELECT PR.id,p_id,p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,p_image,p_status
		// 		,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match
		// 		,square_wah,type_product,p_price,percen,P.name_th,D.name_th,SD.name_th,SD.zipcode 
		// 		FROM properties as PR 
		// 		INNER JOIN th_province as P
		// ON PR.p_province = P.id 
		// INNER JOIN th_district as D ON PR.p_district = D.id
		// INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id
	}

	public function News_model()
	{
		$query = "SELECT * FROM news ";
		return $this->db->query($query)->result();
	}
	public function News_model_detail($idnews)
	{
		$query = "SELECT * FROM news where id = '$idnews' ";
		return $this->db->query($query)->result();
	}
	public function Insert_news($Title, $Detail, $imagenews, $Update_By)
	{

		$query = "INSERT INTO news (title,detail,savedate,update_date,status_new,image_new,userupdate)
		VALUES ('$Title','$Detail', now(), now(),'1','$imagenews','$Update_By')";
		return $this->db->query($query);
	}

	public function Update_newdetail($idnews, $Title, $Detail, $imagenews, $Update_By)
	{

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


	public function Even_model()
	{
		$query = "SELECT * FROM evens ";
		return $this->db->query($query)->result();
	}
	public function Even_model_detail($idnews)
	{
		$query = "SELECT * FROM evens where id = '$idnews' ";
		return $this->db->query($query)->result();
	}
	public function Insert_even($Title, $Detail, $imagenews, $Update_By)
	{

		$query = "INSERT INTO evens (title,detail,savedate,update_date,status_even,image_even,userupdate)
		VALUES ('$Title','$Detail', now(), now(),'1','$imagenews','$Update_By')";
		return $this->db->query($query);
	}

	public function Update_evendetail($idnews, $Title, $Detail, $imagenews, $Update_By)
	{

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

	public function Touchtomoney()
	{
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
	public function Imagedeed_model($idtouch, $iddeed)
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM image_touch_to_money where type = '$iddeed' and id_code = '$idtouch'";
		return $this->db->query($query)->result();
	}
	public function Imageproperty_model($idtouch, $idproperty)
	{
		$query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM image_touch_to_money where type = '$idproperty' and id_code = '$idtouch'";
		return $this->db->query($query)->result();
	}
	public function Property_model_index()
	{
		// $query = "SELECT * ,ROW_NUMBER() OVER(ORDER BY id) as row FROM properties ";
		$query = "SELECT p.id,p.p_touch,p.p_id,p.p_code,p.p_name,p.p_savedate,p.p_status,p.status_match,p.p_updatedate,td.productname,tp.nametype ,ROW_NUMBER() OVER(ORDER BY p.id) as row 
FROM properties as p 
INNER JOIN  typeproduct as td ON p.type_product = td.id
INNER JOIN  typeproperties as tp ON p.p_typeproperties = tp.id";
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
	public function subdistrictpost($subdis)
	{
		$query = "SELECT * FROM th_subdistrict WHERE id = '$subdis' ";
		return $this->db->query($query)->result();
	}

	public function Insert_property(
		$codepoduct,
		$codeproperty,
		$typeproduct,
		$typeproperty,
		$titleroperty,
		$detailproperty,
		$address,
		$province,
		$dristrict,
		$sub_dristrict,
		$postcode,
		$squarerai,
		$squarengan,
		$squarewah,
		$squaremeter,
		$price,
		$percen,
		$typeopen,
		$limit_price,
		$start_date,
		$end_date
	) {

		$query = "INSERT INTO properties (p_id,
		p_code,
		p_name,
		p_detail,
		p_address,
		p_province,
		p_district,
		p_subdistrict,
		p_postcode,
		p_image,
		p_status,
		p_savedate,
		p_updatedate,
		p_typeproperties,
		p_deed,
		p_pagedeed,
		status_match,
		square_wah,
		type_product,
		p_price,
		percen,
		square_meter,
		type_open_property,
		price_limit,
		square_rai,
		square_ngan,
		p_touch,
		type_excusive,
		start_date,
		end_date)
		VALUES ('$codepoduct',
	    '$codeproperty',	
		'$titleroperty',
		'$detailproperty',
		'$address',
		'$province',
		'$dristrict',
		'$sub_dristrict',
		'$postcode',
		'',
		'1',
		now(),
		now(),
		'$typeproperty',
		'',
		'',
		'done',
		'$squarewah',
		'$typeproduct',
		'$price',
		'$percen',
		'$squaremeter',
		'$typeopen',
		'$limit_price', 
		'$squarerai',
		'$squarengan ',
		'',
		'',
		'$start_date',
	    '$end_date' )";
		return $this->db->query($query);
	}
	public function Insert_userproperty(
		$codepoduct,
		$codeproperty,
		$Fristname,
		$Lastname,
		$phone,
		$IDline
	) {
		$query = "	INSERT INTO userproject(p_id,p_code,fristname,lastname,phone,idline)VALUES ('$codepoduct',
		'$codeproperty',
		'$Fristname',
		'$Lastname',
		'$phone',
		'$IDline')";
		return $this->db->query($query);
	}

	public function Update_image($codepoduct, $codeproperty, $imageproperty)
	{
		$query = "  UPDATE properties SET p_image = '$imageproperty' WHERE p_code = '$codepoduct' and p_id = '$codeproperty' ";
		return $this->db->query($query);
	}

	public function insertumgheader($codepoduct, $codeproperty, $imageproperty)
	{
		$query = "INSERT INTO image_property (p_id,p_code,imagesname,savedate,status)
		VALUES ('$codepoduct','$codeproperty','$imageproperty',now(),'2')";
		return $this->db->query($query);
	}

	public function inserimgdetail($codepoduct, $codeproperty, $imageproperty)
	{
		$query = "INSERT INTO image_property (p_id,p_code,imagesname,savedate,status)
		VALUES ('$codepoduct','$codeproperty','$imageproperty',now(),'1')";
		return $this->db->query($query);
	}
	public function selecttypeppt()
	{
		$query = "SELECT * FROM typeproperties";
		return $this->db->query($query)->result();
	}
	public function selecttypepd()
	{
		$query = "SELECT * FROM typeproduct";
		return $this->db->query($query)->result();
	}
	public function selectstatusmatch($SM_id)
	{
		$query = " SELECT status_match,p_status FROM properties WHERE id = '$SM_id'  ";
		return $this->db->query($query)->result();;
	}
	public function Update_statusmatch($Status, $SM_id)
	{
		$query = "  UPDATE properties
			SET status_match = '$Status' WHERE id = '$SM_id'  ";
		return $this->db->query($query);
	}

	public function Update_statusshow($Status, $SM_id)
	{
		$query = "  UPDATE properties
			SET p_status = '$Status' WHERE id = '$SM_id'  ";
		return $this->db->query($query);
	}


	public function detailproperty($idproperty)
	{
		$query = "SELECT ROW_NUMBER() OVER(ORDER BY p.id) as row 
		,p.*
		,td.productname
		,tp.nametype,
		Pv.name_th as province ,D.name_th as district ,SUP.name_th as supdistrict,SUP.zipcode
		,UP.fristname ,UP.lastname ,UP.phone ,UP.idline 
		FROM properties as p 
		INNER JOIN  typeproduct as td ON p.type_product = td.id
		INNER JOIN  typeproperties as tp ON p.p_typeproperties = tp.id
		INNER JOIN th_province AS Pv ON p.p_province = Pv.id 
		INNER JOIN th_district AS D ON p.p_province = D.province_id AND p.p_district = D.id 
		INNER JOIN th_subdistrict AS SUP ON p.p_province = D.province_id AND p.p_district = SUP.district_id AND p.p_subdistrict = SUP.id 
		INNER join userproject as UP on p.p_id  = UP.p_id  and p.p_code  = UP.p_code  where p.id = '$idproperty'";
		return $this->db->query($query)->result();
	}

	public function Update_property(
		$codepoduct,
		$codeproperty,
		$typeproduct,
		$typeproperty,
		$titleroperty,
		$detailproperty,
		$address,
		$province,
		$dristrict,
		$sub_dristrict,
		$postcode,
		$squarerai,
		$squarengan,
		$squarewah,
		$squaremeter,
		$price,
		$percen,
		$typeopen,
		$limit_price,
		$start_date,
		$end_date
	) {
		// p_image = '',
		// p_deed,
		// p_pagedeed,
		$query = "UPDATE properties
        SET     p_id ='$codepoduct',
        p_code  = '$codeproperty',
		p_name = '$titleroperty',
		p_detail = '$detailproperty',
		p_address = '$address',
		p_province = '$province',
		p_district = '$dristrict',
		p_subdistrict ='$sub_dristrict',
		p_postcode = '$postcode',
		
		p_status = '1',
		p_updatedate = now(),
		p_typeproperties = '$typeproperty',
		status_match = 'done',
		square_wah = '$squarewah',
		type_product = '$typeproduct',
		p_price = '$price',
		percen = '$percen',
		square_meter = '$squaremeter',
		type_open_property = '$typeopen',
		price_limit = '$limit_price', 
		square_rai = '$squarerai',
		square_ngan = '$squarengan ',
		p_touch = '',
		type_excusive = '',
		start_date = '$start_date',
		end_date  = '$end_date'
		WHERE p_id = '$codepoduct' AND  p_code = '$codeproperty'";
		return $this->db->query($query);
	}

	public function Update_userproperty(
		$codepoduct,
		$codeproperty,
		$Fristname,
		$Lastname,
		$phone,
		$IDline
	) {
		$query = "UPDATE  userproject SET p_id = '$codepoduct',p_code = '$codeproperty',fristname = '$Fristname',lastname = '$Lastname',phone = '$phone',idline = '$IDline'
		WHERE p_id = '$codepoduct' AND  p_code = '$codeproperty'";
		return $this->db->query($query);
	}

	public function Checkp_code($p_code){
		$query = "select if(p_code = '$p_code','FALSE','TRUE') AS Result  from properties WHERE p_code = '$p_code'";
		// $query = "select p_code AS Result  from properties WHERE p_code = '$p_code'";
		return $this->db->query($query)->result();
	}
	public function Checkp_id($p_id){
		$query = "select if(p_id = '$p_id','FALSE','TRUE') AS Result  from properties WHERE p_id = '$p_id'";
		// $query = "select p_code AS Result  from properties WHERE p_code = '$p_code'";
		return $this->db->query($query)->result();
	}

}

// $typepoduct,