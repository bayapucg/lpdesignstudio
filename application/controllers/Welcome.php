<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

   	public function index()
	{
	    $data['contact_information']=$this->user_model->contact_information();
		$data['slider']=$this->user_model->slider();
		$data['whatwedo']=$this->user_model->whatwedo();
		$data['ourprocess']=$this->user_model->ourprocess();
		$data['testimonial']=$this->user_model->testimonials();
	    $this->load->view('header');
		$this->load->view('index',$data);
	    $this->load->view('footer',$data);
	}
	public function about()
	{  
	    $data['contact_information']=$this->user_model->contact_information();
		$data['aboutus']=$this->user_model->aboutus();
		$data['testimonial']=$this->user_model->testimonials();
	    $this->load->view('header');
		$this->load->view('about',$data);
	    $this->load->view('footer',$data);
	}
		public function blog()
	{
	    $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('blog');
	    $this->load->view('footer',$data);
	}
		public function interior_design()
	{
	     $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('interior-design');
	    $this->load->view('footer',$data);
	}
	public function space_planning()
	{
	     $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('space-planning');
	    $this->load->view('footer',$data);
	}
	public function furniture_design()
	{
	     $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('furniture-design',$data);
	    $this->load->view('footer');
	}
	public function project_management()
	{
	     $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('project-management',$data);
	    $this->load->view('footer');
	}
		public function contact()
	{
	    $data['contact_information']=$this->user_model->contact_information();
	    $this->load->view('header');
		$this->load->view('contact',$data);
	    $this->load->view('footer',$data);
	}
	
	public function contactus(){
		//print_r($_POST); exit;
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$phone=$this->input->post('phone');
    	$message=$this->input->post('message');	
    	
    	$data=array('name'=>$name,
    	'email'=>$email,
    	'phone'=>$phone,
    	'message'=>$message,
    	'date'=>date('Y-m-d h:i:s'));
    	
    	$rs=$this->user_model->contactus($data);
		if($rs){
    	 if($this->user_model->sendContactEmail($rs)){
	    	$this->session->set_flashdata('contact',"Thanks For Contacting Us..We will get back to you Shortly.");	
            redirect("welcome/contact");    
    	}
    	else{
    	 	$this->session->set_flashdata('contact',"Thanks For Contacting Us.");	
            redirect("welcome/contact");      
    	}
    	}else{
    	   	$this->session->set_flashdata('contact',"Message is not submitted.");	
            redirect("welcome/contact");     
    	}
    }
    
    public function rooms_images(){
		 $data['contact_information']=$this->user_model->contact_information();
        $this->load->view('header');
		$this->load->view('rooms-images');
	    $this->load->view('footer',$data);
    }
   
    public function test(){
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "info@lpdesignstudio.org";
        $to = "shiva.arkainfoteck@gmail.com";
        $subject = "Shramitha";
        $message = "This is a test to check the PHP Mail functionality";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Test email sent";
    }
} 

?>