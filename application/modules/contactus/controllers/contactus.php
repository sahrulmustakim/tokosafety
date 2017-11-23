<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller {
	function Contactus(){
		parent::__construct();
	}
	
	function index(){
		$data["filelist"] = "contactus/contactus";
		$data["title"] = "Contact Us";

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

	function sendmail(){
		$config['protocol'] = 'smtp';
		$config['wordwrap'] = TRUE;
		$config['smtp_host'] = 'mail.tokosafety68.com';
		$config['smtp_user'] = 'info@tokosafety68.com';
		$config['smtp_pass'] = '@Password123';
		$config['smtp_port'] = 26;
		$config['mailtype'] = 'html'; //plaintext 'text' mails or 'html'
		$config['charset'] = 'iso-8859-1';

		$body = "Dear,<br>Administrator<br><br>";
		$body .= "<b>".$this->input->post('name')."</b>, telah mengirim pesan dari contact form <b>tokosafety68.com</b><br><br>";
		$body .= "Email : ".$this->input->post('email')."<br>";
		$body .= "Pesan : ".$this->input->post('body')."<br><br>";
		$body .= "Thanks,<br>Tokosafety68";

		$mailto = "admin@tokosafety68.com";

		$this->email->initialize($config);

		$this->email->from('info@tokosafety68.com', 'tokosafety68.com');
		$this->email->to($mailto);

		$this->email->subject($this->input->post('subject'));
		$this->email->message($body);

		if($this->email->send()){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */