<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller {
	function category(){
		parent::__construct();
	}
	
	function index($slug="",$id=""){
		$data["filelist"] = "category/category";
		$data["title"] = "Category";
		$data["category_id"] = $id;

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

		$sql = "SELECT * FROM categories WHERE status='Active' AND id='$id'";
		$thedata = $this->db->query($sql);
		foreach ($thedata->result() as $category){
			$data['category_title'] = $category->title;
		}

		$sql = "SELECT * FROM products WHERE status='Active' AND categories_id=$id ORDER BY created_at DESC LIMIT 15";
		$data['products'] = $this->db->query($sql);

		getHTMLWeb($data);
	}

	function listing($slug="",$id=""){
		$data["filelist"] = "category/list";
		$data["title"] = "Category";
		$data["category_id"] = $id;

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

		$sql = "SELECT * FROM categories WHERE status='Active' AND id='$id'";
		$thedata = $this->db->query($sql);
		foreach ($thedata->result() as $category){
			$data['category_title'] = $category->title;
		}

		$sql = "SELECT * FROM products WHERE status='Active' AND categories_id=$id ORDER BY created_at DESC LIMIT 15";
		$data['products'] = $this->db->query($sql);

		getHTMLWeb($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */