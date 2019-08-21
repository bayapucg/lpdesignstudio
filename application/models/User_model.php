<?php

	Class User_model extends CI_Model{
		
	public function whatwedo(){
	$list=$this->db->select(['*'])->from('whatwedo')->get();
	return $list->result();
	}

	public function ourprocess(){
	$list=$this->db->select(['*'])->from('ourprocess')->get();
	return $list->result();
	}	
	public function testimonials(){
    $list=$this->db->select(['*'])->from('testimonial')->order_by('id','desc')->get();
	return $list->result();

	}
	public function aboutus(){
	$list=$this->db->select(['*'])->from('aboutus')->get();
	return $list->result();
	}	
	public function slider(){
	$list=$this->db->select(['*'])->from('slider')->get();
	return $list->result();	
		
	}
	public function contactus($data){
		$this->db->insert('contacts',$data);
	 $inserted_id=$this->db->insert_id();
     return $inserted_id;
		
	}
	public function sendContactEmail($id){
	 $data=$this->db->select(['*'])->from('contacts')->where('id',$id)->get();
      $result=$data->row();
      $name=$result->name;
      $email=$result->email;
      $message=$result->message;
      $mobile= $result->phone;
      
        $messag = '';
      	$messag.=' Name: '. $name;
        $messag.=' Email: '. $email;
        $messag.=' Mobile: '. $mobile;
        $messag.=' Message: ' . $message;
        
     //   echo $messag; exit;
      
        $from_email = 'info@lpdesignstudio.org';
    //	$message = 'Your Contact details submitted successfully.We will contact you';  
      $subject = 'Enquiry Users In Lpdesign';
	  $message = 'Dear Admin Please check the details User Contact You! Details Of the user ' . $messag;  
	  $this->email->from($from_email, 'Lpdesign');
	  $this->email->to('info@lpdesignstudio.org');   
	  $this->email->subject($subject);
	  $this->email->message($message);
	  $status = $this->email->send();
	  $subjectu = 'Contact Response';
	  $messageu = 'Thanks for contact us . We will get back to you shortly.' ;  
	  $this->email->from($from_email, 'Lpdesign');
	  $this->email->to($email);   
	  $this->email->subject($subjectu);
	  $this->email->message($messageu);
	  $statusu = $this->email->send();
        if(($status) && ($statusu)){
            return true;
        }else{
            return false;
        }	
		
	}
	public function contact_information(){
	   $list=$this->db->select(['*'])->from('contact_info')->get('');
	   return $list->result();
	}
		
	}

?>