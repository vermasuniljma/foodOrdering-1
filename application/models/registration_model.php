<?php

class Registration_model extends CI_model{
	
	function create($formArray)
	{
		$this->db->insert('registration',$formArray);
	}
	
	function getUser(){
		return $users = $this->db->get('registration')->result_array();
	}
	
	function add($formArray){
		$this->db->insert('login',$formArray);
	}
	
	function login_valid($username, $password)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where(['username'=>$username,'password'=>$password]);
		$query = $this->db->get();
		return $query;
		/*if( $q->num_rows() ){
			
			return $q->row()->id;
		}
		else{
			return FALSE;
		}*/
	}

}
?>