<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request extends CI_Controller {
	function Request(){
		parent::__construct();
	}
	
	function index(){
		$data["filelist"] = "request/request";
		$data["title"] = "Request";
		
		getHTMLWeb($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */