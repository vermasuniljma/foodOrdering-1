<?php

class Registration_controller extends CI_Controller{
	
	
	function index()
	{	
		$this->load->view('registration_view');
	}

	function create()
	{
		$this->load->model('registration_model');
		$this->form_validation->set_rules('fname','FirstName','required');
		$this->form_validation->set_rules('lname','LastName','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[registration.email]');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run()){
			$formArray = array();
			
			$formArray['f_name']= $this->input->post('fname');
			$formArray['l_name']= $this->input->post('lname');
			$formArray['email']= $this->input->post('email');
			$formArray['phone']= $this->input->post('phone');
			$formArray['created_at'] = date('Y-m-d H:i:s');
			$formArray['status']= 1;
			$this->registration_model->create($formArray);
			redirect('Registration_controller/login');
		} 
		else{
			$this->load->view('registration_view',compact('upload_error'));
		}
	}
	
	function login(){
		
		$this->load->view('login');
	}
	
	function addlogin(){
		
			$this->form_validation->set_rules('login','User Name','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			if($this->form_validation->run()){
		
			$this->load->model('registration_model');
			$formArray = array();
			$formArray['r_id']= $this->input->post('user');
			$formArray['username']= $this->input->post('login');
			$formArray['password']= $this->input->post('password');
			$this->registration_model->add($formArray);
			redirect('Registration_controller/index');
	}
	
	else{
				$this->load->view('login',compact('upload_error'));
			}
	}
	function login2(){
		$this->load->view('login2');
	}
	
	function loginProcess(){
		
				$username = $this->input->post('login'); 
				$password = $this->input->post('password');
				
				$this->load->model('registration_model');
				
				$result = $this->registration_model->login_valid($username, $password);
				if( $result->num_rows() > 0){
					
					$data = $result->row_array();
					
					$id   = $data['id'];
					$role = $data['r_id'];
					$username = $data['username'];
					
					$sesdata = array('id'=>$id,'r_id'=> $role,'username'=>$username);
					
					$this->session->set_userdata($sesdata);
					if($role === '1'){
					return redirect('Registration_controller/admin');
					}elseif($role === '2'){
					return redirect('Registration_controller/manager');
					}elseif($role === '3'){
					return redirect('Registration_controller/employee');
					}elseif($role === '4'){
					return redirect('Registration_controller/user');
					}else{
					return redirect('Registration_controller/customer');
					}
				}
				else{
					$this->session->set_flashdata('error',"Email not registered");
					return redirect('registration_controller/login2');
				}
			
			
			
			
	}
	
	
	public function admin_logout()
		{
			//print_r("ho");exit;
			$this->session->unset_userdata('id');
			return redirect('registration_controller/login2');
		}
		
	public function forgotpassword(){
		
		$this->load->view('forgotpassword');
	}
	
	public function resetlink(){
		$email  = $this->input->post('email');
		$result = $this->db->query("SELECT * FROM `registration` WHERE `email`='$email'")->result_array();
		if($result){
			$this->load->library('email');
			$tokan   = rand(1000,9999);   
				$this->db->query("update login set password='".$tokan."'where username='".$email."'");
			$message = "Please click on password reset link: <br> <a href='".base_url('registration_controller/resetpassword?tokan=').$tokan."'>Reset Password</a>";
			
			$subject = 'Password reset link';
			
			if(mail($email,$subject,$message)){
				$this->session->set_flashdata('msg',"Mail has been sent successfully");
				$this->session->set_flashdata('msg_class','alert-success');
				return redirect('registration_controller/forgotpassword');
			}
		}
		else{
			$this->session->set_flashdata('error',"Email not registered");
			return redirect('registration_controller/forgotpassword');
		}
	}
	
	public function resetpassword(){
		$data['tokan']=$this->input->get('tokan');
		$_SESSION['tokan']=$data['tokan'];
		$this->load->view('resetpass');
	}
	
	public function updatePass(){
		$_SESSION['tokan'];
			$data = array();
			$data['password']= $this->input->post('password');
			$data['cpassword']= $this->input->post('cpassword');
		
		if($data['password']==$data['cpassword']){
			$this->db->query("update login set password='".$data['password']."'where password='".$_SESSION['tokan']."'");
			$this->session->set_flashdata('msg',"Your password updated successfull !!!");
				$this->session->set_flashdata('msg_class','alert-success');
				return redirect('registration_controller/login2');
		}
		else{
			$this->session->set_flashdata('error',"The password and confirmation is should b same!!!");
			return redirect('registration_controller/resetpassword');
		}
	}
	
	
	
	function admin(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
			
		$this->load->view('admin');
	}
	
	function manager(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$this->load->view('manager');
	}
	
	function employee(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$this->load->view('employee');
	}
	
	function user(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$this->load->view('user');
	}
	
	function customer(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$this->load->view('customer');
	}
}
?>







