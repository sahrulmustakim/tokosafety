<?php 

function getHTMLWeb($data=null){
	$CI =& get_instance();
	
	$CI->load->view('skin/header', $data);
	$CI->load->view('skin/body');
	$CI->load->view('skin/footer');
}

function getSkinCMS($data=null){
	$CI =& get_instance();
	
	$CI->load->view('skincms/header', $data);
	$CI->load->view('skincms/body');
	$CI->load->view('skincms/footer');
}

function goLogin(){
	$CI =& get_instance();
	
	$data['title'] = 'Login';
	$CI->load->view('admin/login', $data);
}

function checkSession($sessName=null){
	$CI =& get_instance();
	
	if(trim($sessName)=="")
		return $CI->session->userdata();
	else 
		return $CI->session->userdata("$sessName");
}

function isLogin(){
	if(checkSession("username")=="")
		return FALSE;
	else
		return TRUE;
}

function escapeStr($str){
	$CI =& get_instance();
	
	return $CI->db->escape_str($str);
}

function postInput($str){
	$CI =& get_instance();
	
	return $CI->input->post("$str");
}

function loadModel($model){
	$CI =& get_instance();
	
	if(is_array($model)){
		foreach ($model as $each){
			loadModel($each);
		}
	}else{	
		return $CI->load->model("$model");
	}
}

function loadLibrary($library){
	$CI =& get_instance();
	
	if(is_array($library)){
		foreach ($library as $each){
			loadLibrary($each);
		}
	}else{	
		return $CI->load->library("$library");
	}
}

function loadView($view,$data=null){
	$CI =& get_instance();
	
	if(is_array($view)){
		foreach ($view as $each){
			loadView($each,$data);
		}
	}else{	
		return $CI->load->view("$view",$data);
	}
}

function getLastId(){
	$CI =& get_instance();
	return $CI->db->insert_id();
}

function setSession($arrayUserData){
	$CI =& get_instance();
	
	return $CI->session->set_userdata($arrayUserData);
}

function sessionValue($sessionName){
	$CI =& get_instance();
	
	return $CI->session->userdata("$sessionName");
}

function ajaxProcessStatus($grid=null,$text="Loading..."){
	$str = "<td colspan='100'>$text</td> />";
	if(trim($grid)==""){
		$str = "<div class='row-fluid'><div class='span12' style='text-align: center;'>$text</div></div>";
	}
	
	return $str;
}

function mysqldatetime(){
	$CI =& get_instance();
	$datestring = "%Y-%m-%d %H:%i:%s";
	$time = time();
	return mdate($datestring, $time);
}

function getSeachQuery($table,$keyword){
    $CI =& get_instance();
    $fields = $CI->db->list_fields($table);
    $likeQuery = "";
    foreach ($fields as $field)
    {
       $likeQuery.="LOWER(".$table.".".$field.") LIKE LOWER('%".$keyword."%') OR ";
    }
    $likeQuery.="false";
    return $likeQuery;
}

function getSeachFormArray($fields,$keyword){
	$likeQuery = "";
    foreach ($fields as $field)
    {
       $likeQuery.="LOWER(".$field.") LIKE LOWER('%".$keyword."%') OR ";
    }
    $likeQuery.="false";
    return $likeQuery;
}

function setNumberFormat($val){
	if($val!=''){
		$setNumberFormat = number_format($val,2,',','.');	
	}else if($val==0){
		$setNumberFormat = '0,00';
	}else{
		$setNumberFormat = NULL;
	}
	
	return $setNumberFormat;
}

function setNumberFormatNoDesimal($val){
	if($val!=""){
		$setNumberFormat = number_format($val,0,',','.');
		return $setNumberFormat;
	}else{
		return NULL;
	}
	
}