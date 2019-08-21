<?php
Class Welcome extends CI_Controller{
	 function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
	
	public function index(){
		$this->load->view('login');	
	}
	
	public function verifylogin(){
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');	
    	$rs=$this->admin_model->loginverification($email,$password);
    	//print_r($rs); exit;
    	$adminid=$rs->id;
    	$adminname= $rs->name;
    	$email=$rs->email;
    	$mobile=$rs->phone;
	
	if($rs!=''){
    	$data = array(
       'admin_id' => $adminid,
       'admin_name' => $adminname,       
       'email' => $email,
       'phone' => $mobile
         );
    	$sessiondata=$this->session->set_userdata($data);
    	redirect('welcome/dashboard');	
    	}else{
    	$this->session->set_flashdata('invalid_login',"Username/ Password is invalid..");
    	redirect('welcome');		
    	}
	}
	
	public function dashboard()
	{
		if($this->session->userdata('admin_id')){
		$data['contacts']=$this->admin_model->allcontacts();
		$this->load->view('header');	
		$this->load->view('dashboard',$data);	
		$this->load->view('footer');
		}else{
		redirect('welcome');	
		}
	}
	public function whatwedo(){
		$data['whatwedo']=$this->admin_model->allwhatwedo();
		$this->load->view('header');	
		$this->load->view('what-we-do',$data);	
		$this->load->view('footer');
		
	}
	public function editwhatwedo($id){	
	$data['whatwedo']=$this->admin_model->edit_whatwedo($id);
		$this->load->view('header');	
		$this->load->view('edit-what-we-do',$data);	
		$this->load->view('footer');	
	}
	
	public function updatewhatwedo($id){
		 $title=$this->input->post('title');
	   $content=$this->input->post('content');
		$picture1 ='';
        if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = 'uploads/whatwedo';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name']; 
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);   
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                $picture1 = $uploadData['file_name'];
            }
			$data = array(
           'image'=>$picture1,
           'title' =>$title,
		   'content' =>$content,
        );
       }else{
			$data = array(
           'title' =>$title,
		   'content' =>$content,
        );   
		   
	   }
        $Data = $this->admin_model->update_whatwedo($id,$data);
        if($Data==1){
        echo "<script>alert('What we do updated Successfully.');</script>";   
        redirect(base_url('welcome/whatwedo'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Album Already Exist...');</script>";   
        redirect(base_url('welcome/whatwedo'),'refresh');     
        }
}


public function ourprocess(){
		$data['ourprocess']=$this->admin_model->allourprocess();
		$this->load->view('header');	
		$this->load->view('our-process',$data);	
		$this->load->view('footer');
		
	}
	public function editourprocess($id){	
	$data['ourprocess']=$this->admin_model->edit_ourprocess($id);
		$this->load->view('header');	
		$this->load->view('edit-our-process',$data);	
		$this->load->view('footer');	
	}
	
	public function updateourprocess($id){
		 $title=$this->input->post('title');
	   $content=$this->input->post('content');

		$data = array(
           'title' =>$title,
		   'content' =>$content,
        );   

        $Data = $this->admin_model->update_ourprocess($id,$data);
        if($Data==1){
        echo "<script>alert('Our Process updated Successfully.');</script>";   
        redirect(base_url('welcome/ourprocess'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Our Process Already Exist...');</script>";   
        redirect(base_url('welcome/ourprocess'),'refresh');     
        }
}


    public function testimonial(){
		$data['testimonials']=$this->admin_model->alltestimonial();
		$this->load->view('header');	
		$this->load->view('testimonial',$data);	
		$this->load->view('footer');
		
	}
	public function addtestimonial(){	
		$this->load->view('header');	
		$this->load->view('add-testimonial');	
		$this->load->view('footer');	
	}
	
	public function savetestimonial(){
	   $name=$this->input->post('name');
	   $profession=$this->input->post('profession');
	   $content=$this->input->post('content');

		$data = array(
            'name' =>$name,
		    'profession' =>$profession,
		    'content' =>$content,
        );   

        $Data = $this->admin_model->save_testimonial($data);
        if($Data==1){
        echo "<script>alert('Testimonial Uploaded Successfully.');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Testimonial Already Exist...');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');     
        }
      }
	
	
	public function edittestimonial($id){	
	$data['testimonial']=$this->admin_model->edit_testimonial($id);
		$this->load->view('header');	
		$this->load->view('edit-testimonial',$data);	
		$this->load->view('footer');	
	}
	
	public function updatetestimonial($id){
	   $name=$this->input->post('name');
	   $profession=$this->input->post('profession');
	   $content=$this->input->post('content');


		$data = array(
            'name' =>$name,
		    'profession' =>$profession,
		    'content' =>$content,
        );     

        $Data = $this->admin_model->update_testimonial($id,$data);
        if($Data==1){
        echo "<script>alert('Testimonial updated Successfully.');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Testimonial Already Exist...');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');     
        }
      }
	  public function deletetestimonial($id){
		 $Data = $this->admin_model->delete_testimonial($id);
        if($Data==1){
        echo "<script>alert('Testimonial Deleted Successfully.');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Testimonial Already Exist...');</script>";   
        redirect(base_url('welcome/testimonial'),'refresh');     
        } 
		  
	  }
	
	 public function aboutus(){
		$data['aboutus']=$this->admin_model->allaboutus();
		$this->load->view('header');	
		$this->load->view('about-us',$data);	
		$this->load->view('footer');
		
	}
	public function editaboutus($id){	
	$data['aboutus']=$this->admin_model->edit_aboutus($id);
		$this->load->view('header');	
		$this->load->view('edit-about-us',$data);	
		$this->load->view('footer');	
	}
	
	public function updateaboutus($id){
		$title=$this->input->post('title');
	    $content=$this->input->post('content');
		$picture1 ='';
        if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = 'uploads/aboutus';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name']; 
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);   
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                $picture1 = $uploadData['file_name'];
            }
			$data = array(
           'image'=>$picture1,
           'title' =>$title,
		   'content' =>$content,
        );
       }else{
			$data = array(
           'title' =>$title,
		   'content' =>$content,
        );   
		   
	   }
        $Data = $this->admin_model->update_aboutus($id,$data);
        if($Data==1){
        echo "<script>alert('About us updated Successfully.');</script>";   
        redirect(base_url('welcome/aboutus'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('About us Already Exist...');</script>";   
        redirect(base_url('welcome/aboutus'),'refresh');     
        }
     }


	 public function slider(){
		$data['slider']=$this->admin_model->allslider();
		$this->load->view('header');	
		$this->load->view('slider',$data);	
		$this->load->view('footer');
		
	}
	public function addslider(){
	    $this->load->view('header');	
		$this->load->view('add-slider');	
		$this->load->view('footer');	
		
	}
	public function saveslider(){
	    $title1=$this->input->post('title1');
	    $title2=$this->input->post('title2');
		$picture1 ='';
        if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = 'uploads/slider';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name']; 
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);   
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                $picture1 = $uploadData['file_name'];
            }
			$data = array(
           'image'=>$picture1,
           'title1' =>$title1,
		   'title2' =>$title2,
        );
       }else{
			$data = array(
           'title1' =>$title1,
		   'title2' =>$title2,
        );   
		   
	   }
        $Data = $this->admin_model->add_slider($data);
        if($Data==1){
        echo "<script>alert('Slider Uploaded Successfully.');</script>";   
        redirect(base_url('welcome/slider'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Slider Already Exist...');</script>";   
        redirect(base_url('welcome/slider'),'refresh');     
        }	
		
	}
	public function editslider($id){	
	$data['slider']=$this->admin_model->edit_slider($id);
		$this->load->view('header');	
		$this->load->view('edit-slider',$data);	
		$this->load->view('footer');	
	}
	
	public function updateslider($id){
		$title1=$this->input->post('title1');
	    $title2=$this->input->post('title2');
		$picture1 ='';
        if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = 'uploads/slider';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name']; 
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);   
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                $picture1 = $uploadData['file_name'];
            }
			$data = array(
           'image'=>$picture1,
           'title1' =>$title1,
		   'title2' =>$title2,
        );
       }else{
			$data = array(
           'title1' =>$title1,
		   'title2' =>$title2,
        );   
		   
	   }
        $Data = $this->admin_model->update_slider($id,$data);
        if($Data==1){
        echo "<script>alert('Slider updated Successfully.');</script>";   
        redirect(base_url('welcome/slider'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Slider Already Exist...');</script>";   
        redirect(base_url('welcome/slider'),'refresh');     
        }
     }
	  public function allcontacts(){
		$data['contacts']=$this->admin_model->allcontacts();
		$this->load->view('header');	
		$this->load->view('contacts',$data);	
		$this->load->view('footer');
		
	}
	public function deletecontacts($id){
		 $Data = $this->admin_model->delete_contacts($id);
        if($Data==1){
        echo "<script>alert('Contacts Deleted Successfully.');</script>";   
        redirect(base_url('welcome/allcontacts'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Contacts Already Exist...');</script>";   
        redirect(base_url('welcome/allcontacts'),'refresh');     
        } 
		  
		
	}
	
	public function contactinfo(){
		$data['contactinfo']=$this->admin_model->contactinfo();
		$this->load->view('header');	
		$this->load->view('contact-info',$data);	
		$this->load->view('footer');
		
	}
	public function editcontactinfo($id){	
	$data['contactinfo']=$this->admin_model->edit_contactinfo($id);
		$this->load->view('header');	
		$this->load->view('edit-contact-info',$data);	
		$this->load->view('footer');	
	}
	
	public function updatecontactinfo($id){
		$email=$this->input->post('email');
        $web=$this->input->post('web');
        $address=$this->input->post('address');
        $phone1=$this->input->post('phone1');
        $phone2=$this->input->post('phone2');
        $open_time=$this->input->post('open_time');
		$data = array(
            'email' =>$email,
		    'web' =>$web,
            'address' =>$address,
            'phone1' =>$phone1,
            'phone2' =>$phone2,
            'web' =>$web,
            'open_time' =>$open_time,
        );   

        $Data = $this->admin_model->update_contactinfo($id,$data);
        if($Data==1){
        echo "<script>alert('Contact Information updated Successfully.');</script>";   
        redirect(base_url('welcome/contactinfo'),'refresh');        
        }elseif($Data==0){
          echo "<script>alert('Contact Information Already Exist...');</script>";   
        redirect(base_url('welcome/contactinfo'),'refresh');     
        }
}

	public function logout()
	{	
		$this->session->unset_userdata('admin_id');
		redirect('welcome');	
	}
	

}
	?>