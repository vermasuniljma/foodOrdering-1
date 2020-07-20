<?php

class Menu_Controller extends CI_Controller{
	
	function index()
	{	if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('index');
	}

	function list_view(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('index');
		$this->load->model('menu_Model');
		$users = $this->menu_Model->menu_list();
		$data = array();
		$data['users']= $users;
		$this->load->view('menu_Item',$data);
		$this->load->view('footer');
	}

	function add_item(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		$this->load->view('index');
		$this->load->view('add_menuItem');
		$this->load->view('footer');
	}
	
	function add_menuItem(){
		if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$config = ['upload_path' => './upload','allowed_types' => 'gif|jpg|png|jpeg'];
		$this->load->library('upload', $config);
		$this->load->model('menu_Model');
			
			$this->form_validation->set_rules('name','item name','required');
			$this->form_validation->set_rules('editor1','description','required');
			$this->form_validation->set_rules('vname','variant size','required');
			$this->form_validation->set_rules('vprice','variant price','required');
			$this->form_validation->set_rules('plimit','limit','required');
			
			if($this->form_validation->run() && $this->upload->do_upload()){
			$formArray = array();
			$formArray['item_name']= $this->input->post('name');
			$formArray['itme_description']= $this->input->post('editor1');
			$formArray['variant_size']= $this->input->post('vname');
			$formArray['variant_price']= $this->input->post('vprice');
			$formArray['extra_iname']= $this->input->post('extra');
			$formArray['extra_iprice']= $this->input->post('extraprice');
			$formArray['date'] = date('Y-m-d H:i:s');
			$formArray['status'] = $this->input->post('product_status');
			$formArray['recommended'] = $this->input->post('rec');
			$formArray['limit']= $this->input->post('plimit');
			$data = $this->upload->data();
			$image_path = $data['file_name'];
			$formArray['image'] = $image_path;
			
			$this->menu_Model->insert_menu($formArray);
			redirect('menu_Controller/list_view');
			}
			else{
				echo"error";
			}
		}
		
		function item_ViewDetails($userId){
			
			if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
			$this->load->view('index');
			$this->load->model('menu_Model');
			$user = $this->menu_Model->getUser($userId);
			
			$data = array();
			$data['user']= $user;
			$this->load->view('item_ViewDetails',$data);
			$this->load->view('footer');
		}
		
		function item_EditDetails($userId){
			if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
			$this->load->view('index');
			$this->load->model('menu_Model');
			$users = $this->menu_Model->getUser($userId);
			$data = array();
			$data['users']= $users;
			$this->load->view('item_EditDetails',$data);
			$this->load->view('footer');
			
		}
		
		function edit_menuItem($userId){
			if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
		
		$this->load->model('menu_Model');
			$formArray = array();
			$formArray['item_name']= $this->input->post('name');
			$formArray['itme_description']= $this->input->post('editor1');
			$formArray['variant_size']= $this->input->post('vname');
			$formArray['variant_price']= $this->input->post('vprice');
			$formArray['extra_iname']= $this->input->post('extra');
			$formArray['extra_iprice']= $this->input->post('extraprice');
			$formArray['date'] = date('Y-m-d H:i:s');
			$formArray['status'] = $this->input->post('product_status');
			$formArray['recommended'] = $this->input->post('rec');
			$formArray['limit']= $this->input->post('plimit');
				$config = ['upload_path' => './upload','allowed_types' => 'gif|jpg|png|jpeg'];
				$this->load->library('upload', $config);
				
				if($_FILES['userfile']['name']!="")
				{
					//$this->upload->set_filename("user_profile_".time()."jpg");
					$this->upload->do_upload();
					$uplodadata = $this->upload->data();
					$imagefilename = $uplodadata['file_name'];
					$formArray['image'] = $imagefilename;
				$this->menu_Model->updateUser($userId,$formArray);
				redirect('menu_Controller/list_view');
				}
				else{
				echo"error";
			}
		}
		
		function item_DeleteDetails($userId){
			if( ! $this->session->userdata('id') )
		{
			return redirect('Registration_controller/login2');
		}
			
			$this->load->model('menu_Model');
			$this->menu_Model->deleteUser($userId);
			redirect('menu_Controller/list_view');
			
		}
		
	}




?>