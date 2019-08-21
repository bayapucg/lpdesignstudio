<?php 
	 Class Admin_model extends CI_Model
	 {
		public function loginverification($email,$password)
		{
			$condition=array('email'=>$email, 'password'=>$password);
			$list=$this->db->select(['*'])->from('admin')->where($condition)->get();
			return $list->row();
		}
		public function allwhatwedo(){
			$list=$this->db->select(['*'])->from('whatwedo')->get();
			return $list->result();
			
		}
		public function edit_whatwedo($id){
			
			$list=$this->db->select(['*'])->from('whatwedo')->where('id',$id)->get();
			return $list->row();
		}
		public function update_whatwedo($id,$data){
			
			$list=$this->db->where('id',$id)->update('whatwedo',$data);
			return 1;
		}
			public function allourprocess(){
			$list=$this->db->select(['*'])->from('ourprocess')->get();
			return $list->result();
			
		}
		public function edit_ourprocess($id){
			
			$list=$this->db->select(['*'])->from('ourprocess')->where('id',$id)->get();
			return $list->row();
		}
		public function update_ourprocess($id,$data){
			
			$list=$this->db->where('id',$id)->update('ourprocess',$data);
			return 1;
		}  

			public function alltestimonial(){
			$list=$this->db->select(['*'])->from('testimonial')->get();
			return $list->result();
			//print_r($list->result()); exit;
			
		}
		public function save_testimonial($data){
			$this->db->insert('testimonial',$data);
			return 1;
			
		}
		public function edit_testimonial($id){
			
			$list=$this->db->select(['*'])->from('testimonial')->where('id',$id)->get();
			return $list->row();
		}
		public function update_testimonial($id,$data){
			$list=$this->db->where('id',$id)->update('testimonial',$data);
			return 1;
		}
		public function delete_testimonial($id){
			$this->db->where('id',$id)->delete('testimonial');
			return 1;
			
		}
		public function allaboutus(){
			$list=$this->db->select(['*'])->from('aboutus')->get();
			return $list->result();
			
		}
		public function edit_aboutus($id){
			
			$list=$this->db->select(['*'])->from('aboutus')->where('id',$id)->get();
			return $list->row();
		}
		public function update_aboutus($id,$data){
			$list=$this->db->where('id',$id)->update('aboutus',$data);
			return 1;
		}
		public function allslider(){
			$list=$this->db->select(['*'])->from('slider')->get();
			return $list->result();
			
		}
		public function edit_slider($id){
			
			$list=$this->db->select(['*'])->from('slider')->where('id',$id)->get();
			return $list->row();
		}
		public function update_slider($id,$data){
			$list=$this->db->where('id',$id)->update('slider',$data);
			return 1;
		}
		public function add_slider($data){
			$this->db->insert('slider',$data);
			return 1;
			
		}
		public function allcontacts(){
			$list=$this->db->select(['*'])->from('contacts')->get();
			return $list->result();
		}
		public function delete_contacts($id){
			$this->db->where('id',$id)->delete('contacts');
			return 1;
		}
		public function contactinfo(){
		 	$list=$this->db->select(['*'])->from('contact_info')->get();
			return $list->result();   
		}
		public function edit_contactinfo($id){
		  	$list=$this->db->select(['*'])->from('contact_info')->where('id',$id)->get();
			return $list->row();  
		}
		public function update_contactinfo($id,$data){
		    	$list=$this->db->where('id',$id)->update('contact_info',$data);
			return 1;
		}
	}
	
	?>