<?php

class Homemodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function image()
	{
		$query = "SELECT * FROM images ";
		return $this->db->query($query)->result();
	}
	public function propertieshome1()
	{
		$query = "SELECT PR.id,PR.p_id,PR.p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,IMG.imagesname as p_image
		,p_status,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match,square_wah,square_meter,square_rai,
		square_ngan 
		,type_product,p_price,percen,P.name_th as province  ,D.name_th as district ,SD.name_th as supdistrict,SD.zipcode,PR.price_limit 
		FROM properties as PR 
		INNER JOIN th_province as P ON PR.p_province = P.id 
		INNER JOIN th_district as D ON PR.p_district = D.id 
		INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id   
		INNER JOIN image_property as IMG on  PR.p_id  = IMG.p_id and PR.p_code  = IMG.p_code  and IMG.status  = 2  
		where PR.p_status = '1' and PR.type_product = '1' limit 5";
		//  SELECT * FROM properties  where p_status = '1' and type_product = '1' limit 5
		return $this->db->query($query)->result();
	}
	public function propertieshome2()
	{
		$query = "SELECT PR.id,PR.p_id,PR.p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,IMG.imagesname as p_image
		,p_status,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match,square_wah,square_meter,square_rai,
		square_ngan 
		,type_product,p_price,percen,P.name_th as province  ,D.name_th as district ,SD.name_th as supdistrict,SD.zipcode,PR.price_limit 
		FROM properties as PR 
		INNER JOIN th_province as P ON PR.p_province = P.id 
		INNER JOIN th_district as D ON PR.p_district = D.id 
		INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id   
		INNER JOIN image_property as IMG on  PR.p_id  = IMG.p_id and PR.p_code  = IMG.p_code  and IMG.status  = 2 
		where PR.p_status = '1' and PR.type_product = '2' limit 5";
		// $query = "SELECT * FROM properties  where p_status = '1' and type_product = '2' limit 5  ";
		return $this->db->query($query)->result();
	}
	public function propertieshome3()
	{
		$query = "SELECT PR.id,PR.p_id,PR.p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,IMG.imagesname as p_image
		,p_status,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match,square_wah,square_meter,square_rai,
		square_ngan 
		,type_product,p_price,percen,P.name_th as province  ,D.name_th as district ,SD.name_th as supdistrict,SD.zipcode,PR.price_limit 
		FROM properties as PR 
		INNER JOIN th_province as P ON PR.p_province = P.id 
		INNER JOIN th_district as D ON PR.p_district = D.id 
		INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id   
		INNER JOIN image_property as IMG on  PR.p_id  = IMG.p_id and PR.p_code  = IMG.p_code  and IMG.status  = 2  
		where PR.p_status = '1' and PR.type_product = '3' limit 5";
		// $query = "SELECT * FROM properties  where p_status = '1' and type_product = '3' limit 5  ";
		return $this->db->query($query)->result();
	}
	public function propertieshome4()
	{
		$query = "SELECT PR.id,PR.p_id,PR.p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,IMG.imagesname as p_image
		,p_status,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match,square_wah,square_meter,square_rai,
		square_ngan 
		,type_product,p_price,percen,P.name_th as province  ,D.name_th as district ,SD.name_th as supdistrict,SD.zipcode,PR.price_limit 
		FROM properties as PR 
		INNER JOIN th_province as P ON PR.p_province = P.id 
		INNER JOIN th_district as D ON PR.p_district = D.id 
		INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id   
		INNER JOIN image_property as IMG on  PR.p_id  = IMG.p_id and PR.p_code  = IMG.p_code  and IMG.status  = 2
		where PR.p_status = '1' and PR.type_product in ('4','6','7','8') limit 5";
		// $query = "SELECT * FROM properties  where p_status = '1' and type_product = '4' limit 5  ";
		return $this->db->query($query)->result();
	}
	public function propertieshome5()
	{
		$query = "SELECT PR.id,PR.p_id,PR.p_code,p_name,p_detail,p_address,p_province,p_district,p_subdistrict,IMG.imagesname as p_image
		,p_status,p_savedate,p_updatedate,p_typeproperties,p_postcode,p_deed,p_pagedeed,status_match,square_wah,square_meter,square_rai,
		square_ngan 
		,type_product,p_price,percen,P.name_th as province  ,D.name_th as district ,SD.name_th as supdistrict,SD.zipcode,PR.price_limit 
		FROM properties as PR 
		INNER JOIN th_province as P ON PR.p_province = P.id 
		INNER JOIN th_district as D ON PR.p_district = D.id 
		INNER JOIN th_subdistrict as SD ON PR.p_subdistrict = SD.id   
		INNER JOIN image_property as IMG on  PR.p_id  = IMG.p_id and PR.p_code  = IMG.p_code  and IMG.status  = 2
		where PR.p_status = '1' and PR.type_product = '5' limit 5";

		// $query = "SELECT * FROM properties  where p_status = '1' and type_product = '5' limit 5  ";
		return $this->db->query($query)->result();
	}
	public function countproperties($IDtype)
	{
		$query = "SELECT count(*) as countpro FROM properties  where p_status = '1' And type_product = '$IDtype' ";
		return $this->db->query($query)->result();
	}
	public function properties($IDtype, $page, $per_pages)
	{
		$query = "SELECT * FROM properties  where p_status = '1' And type_product = '$IDtype'  LIMIT $per_pages OFFSET $page ";
		return $this->db->query($query)->result();
	}
	public function propertiessearch($IDtype, $page, $per_pages,$typeproperties,$province,$dristrict,$sub_dristrict,$size,$statusmatch)
	{
		if ($typeproperties == '') {
            $typepropertiess = '';
        } else {
            $typepropertiess = " AND T.p_typeproperties = '".$typeproperties."'";
        }
        if ($province == '') {
            $provinces = '';
        } else {
            $provinces =" AND T.p_province = '".$province."'";
        }
        if ($dristrict == '') {
            $dristricts = '';
        } else {
            $dristricts = " AND T.p_district = '".$dristrict."'";
        }
        if ($sub_dristrict == '') {
            $sub_dristricts = '';
        } else {
            $sub_dristricts = " AND T.p_subdistrict = '".$sub_dristrict."'";
        }
		if ($size == '') {
            $sizes = '';
        } else {
            $sizes = " AND T.square_wah = '".$size."'";
        }
		if ($statusmatch == '') {
            $statusmatchs = '';
        } else {
            $statusmatchs = " AND T.status_match = '".$statusmatch."'";
        }
		if($IDtype == '4'){
			$type_product = "T.type_product in ('4','6','7','8')";
		}else{
			$type_product = "T.type_product = '".$IDtype."'";
		}
		// $query = "SELECT * FROM properties  where p_status = '1' And type_product = '$IDtype'  LIMIT $per_pages OFFSET $page ";
		$query = "SELECT T.id ,T.p_id ,T.p_code,T.p_name ,T.p_detail ,T.p_address ,T.p_province,IMG.imagesname as p_image,T.p_district ,T.p_subdistrict ,T.p_status ,T.p_savedate ,T.p_updatedate,
			T.p_postcode ,T.p_deed ,T.p_deed,T.percen ,T.status_match ,T.square_wah ,T.type_product ,T.p_typeproperties , T.p_price ,T.square_meter,T.square_rai,
			T.square_ngan  ,
			P.name_th as province ,D.name_th as district ,SUP.name_th as supdistrict,SUP.zipcode,T.price_limit  FROM properties as T 
			INNER JOIN th_province AS P ON T.p_province = P.id 
			INNER JOIN th_district AS D ON T.p_province = D.province_id AND T.p_district = D.id 
			INNER JOIN th_subdistrict AS SUP ON T.p_province = D.province_id AND T.p_district = SUP.district_id AND T.p_subdistrict = SUP.id
			INNER JOIN image_property as IMG on  T.p_id  = IMG.p_id and T.p_code  = IMG.p_code  and IMG.status  = 2
			WHERE $type_product and T.p_status = '1' $typepropertiess $provinces  $dristricts $sub_dristricts  $sizes   $statusmatchs LIMIT $per_pages OFFSET $page";
		return $this->db->query($query)->result();
	}
	public function propertiesdetail($IDtype)
	{
		$query = "SELECT T.id ,T.p_id ,T.p_code,T.p_name ,T.p_detail ,T.p_address ,T.p_province,T.p_image,T.p_district ,T.p_subdistrict ,T.p_status ,T.p_savedate ,T.p_updatedate,
			T.p_postcode ,T.p_deed ,T.p_deed,T.percen ,T.status_match ,T.square_wah ,T.type_product, T.p_price,T.square_meter ,T.square_rai,
			T.square_ngan  ,
			P.name_th as province ,D.name_th as district ,SUP.name_th as supdistrict,SUP.zipcode,T.price_limit  FROM properties as T 
			INNER JOIN th_province AS P ON T.p_province = P.id 
			INNER JOIN th_district AS D ON T.p_province = D.province_id AND T.p_district = D.id 
			INNER JOIN th_subdistrict AS SUP ON T.p_province = D.province_id AND T.p_district = SUP.district_id AND T.p_subdistrict = SUP.id
			WHERE T.id = '$IDtype'";
		return $this->db->query($query)->result();
	}
	public function imageproperty($p_id,$p_code)
	{
		$query = "SELECT * FROM image_property WHERE p_id  = '$p_id' and p_code = '$p_code'";
		return $this->db->query($query)->result();
	}
	
	public function aboutus()
	{
		$query = "SELECT * FROM aboutus where status_about = '1' ";
		return $this->db->query($query)->result();
	}
	public function news()
	{
		$query = "SELECT * FROM news where status_new = '1' ";
		return $this->db->query($query)->result();
	}
	public function newshome()
	{
		$query = "SELECT * FROM news where status_new = '1' LIMIT 4 ";
		return $this->db->query($query)->result();
	}
	public function evens()
	{
		$query = "SELECT * FROM evens where status_even = '1' ";
		return $this->db->query($query)->result();
	}
	public function evenshome()
	{
		$query = "SELECT * FROM evens where status_even = '1' LIMIT 4 ";
		return $this->db->query($query)->result();
	}
	public function news_detail($ID)
	{
		$query = "SELECT * FROM news where id = '$ID'";
		return $this->db->query($query)->result();
	}
	public function evens_detail($ID)
	{
		$query = "SELECT * FROM evens where id = '$ID'";
		return $this->db->query($query)->result();
	}

	public function typeproperty()
	{
		$query = "SELECT * FROM typeproperties ";
		return $this->db->query($query)->result();
	}
	public function square_wah()
	{
		$query = "SELECT square_wah FROM properties  where p_status = '1' GROUP BY square_wah ";
		return $this->db->query($query)->result();
	}
	public function square_meter()
	{
		$query = "SELECT square_meter FROM properties  where p_status = '1' GROUP BY square_meter ";
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
	public function searchproperty($subdis)
	{
		$query = "SELECT T.id ,T.p_id ,T.p_code,T.p_name ,T.p_detail ,T.p_address ,T.p_province,T.p_image,T.p_district ,T.p_subdistrict ,T.p_status ,T.p_savedate ,T.p_updatedate,
		T.p_postcode ,T.p_deed ,T.p_deed ,T.status_match ,T.square_wah ,T.type_product, T.p_price , T.square_meter,
		P.name_th as province ,D.name_th as district ,SUP.name_th as supdistrict,SUP.zipcode,T.price_limit  FROM properties as T 
		INNER JOIN th_province AS P ON T.p_province = P.id 
		INNER JOIN th_district AS D ON T.p_province = D.province_id AND T.p_district = D.id 
		INNER JOIN th_subdistrict AS SUP ON T.p_province = D.province_id AND T.p_district = SUP.district_id AND T.p_subdistrict = SUP.id
		WHERE T.id = '$subdis'";
	return $this->db->query($query)->result();
	}
	public function insertcontract($name,$phone,$line,$email,$subject,$message)
	{
		// $query = "SELECT count(*) as countpro FROM properties  where p_status = '1' And type_product = '$IDtype' ";
		$query = "INSERT INTO contract (name,phone,idline,email,subject,remark,savedate,status_con)
		VALUES ('$name','$phone','$line','$email','$subject','$message',now(),'1')";
		return $this->db->query($query);
		// SELECT name,phone,idline,email,subject,remark,savedate,status_new FROM `contract` WHERE 1
		// return $this->db->query($query);
	}
	public function inserttouchtomoney($txtFirstName, $txtLastName, $phone, $idline, $typeproties, $dealing_file_no, $number,$idcode,$province,$dristrict,$sub_dristrict)
	{
		// $query = "SELECT count(*) as countpro FROM properties  where p_status = '1' And type_product = '$IDtype' ";
		$query = "INSERT INTO touch_to_money (fristname,lastname,phone,idline,typeproperties,dealing_file_no,number,id_code,save_date,userupdate,status,province,district,sub_district)
		VALUES ('$txtFirstName','$txtLastName','$phone','$idline','$typeproties','$dealing_file_no','$number','$idcode',now(),now(),'1' ,'$province','$dristrict','$sub_dristrict')";
		return $this->db->query($query);
		// SELECT name,phone,idline,email,subject,remark,savedate,status_new FROM `contract` WHERE 1
		// return $this->db->query($query);
	}
	public function inserttouchimage($filedeed,$idcode)
	{
		// $query = "SELECT count(*) as countpro FROM properties  where p_status = '1' And type_product = '$IDtype' ";
		$query = "INSERT INTO image_touch_to_money (id_code,image_touch,save_date,userupdate,status,type)
		VALUES ('$idcode','$filedeed',now(),now(),'1','1')";
		return $this->db->query($query);
		// SELECT name,phone,idline,email,subject,remark,savedate,status_new FROM `contract` WHERE 1
		// return $this->db->query($query);
	}
	public function inserttouchimagedeed($filedeed,$idcode)
	{
		// $query = "SELECT count(*) as countpro FROM properties  where p_status = '1' And type_product = '$IDtype' ";
		$query = "INSERT INTO image_touch_to_money (id_code,image_touch,save_date,userupdate,status,type)
			VALUES ('$idcode','$filedeed',now(),now(),'1','2')";
		return $this->db->query($query);
		// SELECT name,phone,idline,email,subject,remark,savedate,status_new FROM `contract` WHERE 1
		// return $this->db->query($query);
	}

	public function detailtouchtomoney($idcode){
		$query = "SELECT * FROM touch_to_money WHERE 'id_code' = '$idcode'";
		return $this->db->query($query)->result();
	}
}

