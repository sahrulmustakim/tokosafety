<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller{
	function Start(){
		parent::__construct();
	}
	
	function index(){
		$data["filelist"] = "home/home";
		$data["title"] = "Home";

		// $sql = "SELECT * FROM cms_happy WHERE flag='ACTIVE'";
		// $thedata = $this->db->query($sql);
		// foreach ($thedata->result() as $happy){
		// 	$data['happy'] = $happy->total;
		// }

		$sql = "SELECT * FROM categories WHERE status='Active'";
		$data['categories'] = $this->db->query($sql);

		$sql = "SELECT * FROM brands WHERE status='Active'";
		$data['brands'] = $this->db->query($sql);

		$sql = "SELECT * FROM sliders WHERE status='Active'";
		$data['sliders'] = $this->db->query($sql);

		$sql = "SELECT * FROM product_promo WHERE status='Active'";
		$data['promos'] = $this->db->query($sql);

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

		$sql = "SELECT products.*,categories.title category 
				FROM products 
				INNER JOIN categories ON categories.id=products.categories_id 
				WHERE products.status='Active' 
				ORDER BY products.created_at DESC LIMIT 10";
		$data['newest'] = $this->db->query($sql);

		$sql = "SELECT products.*,categories.title category 
				FROM product_bestseller 
				INNER JOIN products ON products.id=product_bestseller.products_id 
				INNER JOIN categories ON categories.id=products.categories_id 
				WHERE products.status='Active' 
				ORDER BY product_bestseller.order";
		$data['bestseller'] = $this->db->query($sql);

		$sql = "SELECT products.*,categories.title category 
				FROM products 
				INNER JOIN categories ON categories.id=products.categories_id 
				WHERE products.status='Active' AND products.categories_id=4 
				ORDER BY products.created_at DESC LIMIT 7";
		$data['hands'] = $this->db->query($sql);

		$sql = "SELECT products.*,categories.title category 
				FROM products 
				INNER JOIN categories ON categories.id=products.categories_id 
				WHERE products.status='Active' AND products.categories_id=6 
				ORDER BY products.created_at DESC LIMIT 7";
		$data['tools'] = $this->db->query($sql);

		getHTMLWeb($data);
	}

	function pagenotfound(){
		$data["filelist"] = "home/pagenotfound";
		$data["title"] = "Home";

		$sql = "SELECT * FROM categories WHERE status='Active'";
		$data['categories'] = $this->db->query($sql);

		$sql = "SELECT * FROM brands WHERE status='Active'";
		$data['brands'] = $this->db->query($sql);

		$sql = "SELECT * FROM sliders WHERE status='Active'";
		$data['sliders'] = $this->db->query($sql);

		$sql = "SELECT * FROM product_promo WHERE status='Active'";
		$data['promos'] = $this->db->query($sql);

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

		getHTMLWeb($data);
	}
}