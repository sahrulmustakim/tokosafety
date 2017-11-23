<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	function Aboutus(){
		parent::__construct();
	}
	
	function index(){
		$data["filelist"] = "aboutus/aboutus";
		$data["title"] = "About Us";

		$sql = "SELECT * FROM categories WHERE status='Active'";
		$data['categories'] = $this->db->query($sql);
		
		$sql = "SELECT * FROM brands WHERE status='Active'";
		$data['brands'] = $this->db->query($sql);
		
		$sql = "SELECT * FROM contactus WHERE status='Active'";
		$thedata = $this->db->query($sql);
		foreach ($thedata->result() as $contact){
			$data['contact_info'] = $contact->contact_info;
			$data['contact_address'] = $contact->address;
			$data['contact_phone'] = $contact->phone;
			$data['contact_fax'] = $contact->fax;
			$data['contact_email'] = $contact->email;
			$data['contact_facebook'] = $contact->facebook;
			$data['contact_instagram'] = $contact->instagram;
			$data['contact_twitter'] = $contact->twitter;
			$data['contact_linkedin'] = $contact->linkedin;
		}

		getHTMLWeb($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */