<?php
class Assign_controller extends CI_Controller{
	
	function index()
	{
		$this->load->model('register_model');
		$users = $this->register_model->all();
		$data = array();
		$data['users']= $users;
		// echo "<pre>";
		// print_r($data);
		// exit;
		$this->load->view('assign',$data);
	}
}

?>