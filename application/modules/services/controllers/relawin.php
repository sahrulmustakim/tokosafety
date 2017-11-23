<?php

class relawin extends CI_Controller{
	function relawin(){
		parent::__construct();
	}
	function index(){
		echo "Relawin API'S";
	}
	function sales_login(){
		$params["no_handphone"] = $_POST["username"];
		$params["password"] = md5($_POST["password"]);
		$this->db->where($params);
		$query = $this->db->get("relawan");
		if($query->num_rows() >= 1){
			$data = $query->row();
			echo json_encode(array("status"=>"true","msg"=>"Sukses","user_id"=>$data->id,"name"=>$data->nama_lengkap));
		}else{
			echo json_encode(array("status"=>"false","msg"=>"Username Atau Password salah"));
		}
	}
	function submit_review(){
		$config['upload_path'] = 'file_images/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('uploadedfile');
		
		$id = $_GET["id_user"];
		$title = $_GET["title"];
		$review = $_GET["review"];
		$data["REVIEW_TITLE"] = $title;
		$data["REVIEW_IMAGE"] = $_FILES["uploadedfile"]["name"];
		$data["REVIEW_DESC"] = $review;
		$data["USERNAME"] = $id;
		$data["CREATED_DATE"] = mysqldatetime();
		$data["FLAG"] = "RELEASED";
		$this->db->where("USERNAME",$id); 
		$quser = $this->db->get("m_user");
		if($quser->num_rows() > 0){
			$user = $quser->row();
			$data["CREATED_BY"] = $user->NAME;
		}
		$this->db->insert('t_review',$data);
		var_dump($_FILES);
	}
	function submit_comment(){
		$id = $_GET["id_user"];
		$reviewid = $_GET["title"];
		$review = $_GET["review"];
		$data["REVIEW_ID"] = $reviewid;
		$data["USERNAME"] = $id;
		$data["COMMENT"] = $review;
		$data["CREATED_DATE"] = mysqldatetime();
		$data["CREATED_BY"] = "";
		$data["FLAG"] = "RELEASED";
		$this->db->where("USERNAME",$id); 
		$quser = $this->db->get("m_user");
		if($quser->num_rows() > 0){
			$user = $quser->row();
			$data["CREATED_BY"] = $user->NAME;
		}
		$this->db->insert('t_comment',$data);
	}
	function list_review($index=0){
		$sql = "select ID,CREATED_BY,REVIEW_TITLE,REVIEW_DESC,REVIEW_IMAGE from t_review order by ID DESC limit $index,20";
		$query = $this->db->query($sql);
		echo json_encode($query->result());
	}
	function list_tugas($index=0){
		$sql = "select * from t_tugas order by ID DESC limit $index,20";
		$query = $this->db->query($sql);
		echo json_encode($query->result());
	}
	function list_comment($id,$index=0){
		$sql = "select `COMMENT`,CREATED_BY from t_comment where REVIEW_ID = '$id' order by ID DESC limit 0,20";
		$query = $this->db->query($sql);
		echo json_encode($query->result());
	}
	function check_update($deptId = ""){
		echo $deptId."20131217";
	}
	function formatCabang($cabang){
		$arrCabang = explode("-",$cabang);
		for($i=0;$i<count($arrCabang);$i++){
			$arrCabang[$i] = "'".$arrCabang[$i]."'";
		}
		return join(",",$arrCabang);
	}
	function formatCabang2($cabang){
		$arrCabang = explode("-",$cabang);
		for($i=0;$i<count($arrCabang);$i++){
			$tmp = explode("_",$arrCabang[$i]);
			$arrCabang[$i] = "'".$tmp[0]."'";
		}
		return join(",",$arrCabang);
	}
	function load_image($images = null){
		header('Content-Type: image/jpeg');
		header('Content-Length: ' . filesize("./file_images/".$images));
		echo file_get_contents("./file_images/".$images);
	}
}