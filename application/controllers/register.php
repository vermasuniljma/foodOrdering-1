<?php

class Register extends CI_Controller{
	
	function index()
	{	
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('index');
	}
	
	function show(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$html = $this->load->view('create.php','',true);
		$responce['html'] = $html;
		echo json_encode($responce);
	}
	
	function edit(){
		
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->model('register_model');
		$EmployeeId = $this->input->post("userId");
		$this->db->select("*");
		$this->db->where("id",$EmployeeId);
		$this->db->from('categories');
		$qryEmployeeDetails = $this->db->get();
		$rstEmployeeDetails = $qryEmployeeDetails->result();
		if(!empty($rstEmployeeDetails)):
            foreach($rstEmployeeDetails as $row):
				echo $row->id."--x--".$row->category_name."--x--".base_url()."upload/".$row->image."--x--".$row->status."--x--".$row->created_at."--x--".$row->updated_at;			
			endforeach;
        endif;
		
	}
	
	function delete(){
		
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
			$this->load->model('register_model');
			$userId = $this->input->post("userId");
			$this->register_model->deleteUser($userId);
			redirect('register/categories');
			
	}
	
	function update(){
		
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$config = ['upload_path' => './upload','allowed_types' => 'gif|jpg|png|jpeg'];
		$this->load->library('upload', $config);
		$this->load->model('register_model');
		
		$formArray = array();
		$userId = $this->input->post("cId");
		$formArray['category_name']=$this->input->post("cname");
		$formArray['updated_at'] = date('Y-m-d H:i:s');
		if($_FILES["userfile"]['name'] !="")
				{
					$this->upload->set_filename("user_profile_".time()."jpg");
					$this->upload->do_upload();
					$uplodadata = $this->upload->data();
					$imagefilename = $uplodadata['file_name'];
					$formArray['image'] = $imagefilename;
				}
		$this->register_model->updateUser($userId,$formArray);
		redirect('register/categories');
	}
	
	
	
	function categories(){
		
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('index');
		$this->load->model('register_model');
		$users = $this->register_model->categories_list();
		$data = array();
		$data['users']= $users;
		$this->load->view('categories',$data);
		$this->load->view('footer');
	}
	function open(){
		
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('addCategories');
	}
	
	
	function addCategories(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$config = ['upload_path' => './upload','allowed_types' => 'gif|jpg|png|jpeg'];
		$this->load->library('upload', $config);
		$this->load->model('register_model');
		$this->form_validation->set_rules('cname','Category Name','required');
		if($this->form_validation->run() && $this->upload->do_upload()){
			$formArray = array();
			$formArray['category_name']= $this->input->post('cname');
			$formArray['created_at'] = date('Y-m-d H:i:s');
			$formArray['status'] = 1;
			$data = $this->upload->data();
			$image_path = $data['file_name'];
			$formArray['image'] = $image_path;
			$this->register_model->addCategory($formArray);
			redirect('register/categories');
		}
		else{
			
			$this->load->view('categories', compact('upload_error'));
		}
		
	}
	function editCategories($userId){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$config = ['upload_path' => './upload','allowed_types' => 'gif|jpg|png|jpeg'];
		$this->load->library('upload', $config);
		
			$this->load->model('register_model');
			$user = $this->register_model->getUser($userId);
			$data = array();
			$data['user']= $user;
			
		$this->form_validation->set_rules('cname','Category Name','required');
		
		if($this->form_validation->run()){
			$formArray = array();
			$formArray['category_name']= $this->input->post('cname');
			$formArray['created_at'] = date('Y-m-d H:i:s');
			 
			if($_FILES["userfile"]['name'] !="")
				{
					$this->upload->set_filename("user_profile_".time()."jpg");
					$this->upload->do_upload();
					$uplodadata = $this->upload->data();
					$imagefilename = $uplodadata['file_name'];
					$formArray['image'] = $imagefilename;
				}
				$this->register_model->updateUser($userId,$formArray);
				redirect(base_url().'index.php/register/categories');
			}
			else{
				$this->load->view('editCategories',$data,compact('upload_error'));
			}
		}
		
		
}
?>