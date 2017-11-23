<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {
	function product(){
		parent::__construct();
	}
	
	function index($slug="",$id=""){
		$data["filelist"] = "product/product";
		$data["title"] = "Product";
		$data["product_id"] = $id;
		
		$sql = "SELECT * FROM categories WHERE status='Active'";
		$data['categories'] = $this->db->query($sql);
		
		$sql = "SELECT * FROM brands WHERE status='Active'";
		$data['brands'] = $this->db->query($sql);
		
		$sql = "SELECT * FROM products WHERE status='Active'";
		$query = $this->db->query($sql);
		$data['total_product'] = $query->num_rows();
		
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

		$sql = "SELECT * FROM products WHERE id=$id";
		$data['products'] = $this->db->query($sql);

		getHTMLWeb($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */