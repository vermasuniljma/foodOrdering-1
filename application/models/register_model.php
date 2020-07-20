<?php

	class Register_model extends CI_model{
	
	function all(){
			return $users = $this->db->get('register')->result_array();
		}
		
	function addCategory($formArray){
		$this->db->insert('categories',$formArray);
	}
	
	function categories_list(){
		return $users = $this->db->get('categories')->result_array();
		
	}
	
	function getUser($userId){
		$this->db->where('id',$userId);
		return $user = $this->db->get('categories')->result_array();
	}
	
	function updateUser($userId,$formArray){
		$this->db->where('id',$userId);
		$this->db->update('categories',$formArray);
	}
	function deleteUser($userId){
		$this->db->where('id',$userId);
		$this->db->delete('categories');	
	}
}
?>