<?php

class Menu_Model extends CI_Model{
	
	function categories_list(){
		return $users = $this->db->get('categories')->result_array();
		
	}
	
	function insert_menu($formArray){
		$this->db->insert('menu_item',$formArray);
	}
	
	function menu_list(){
		return $users = $this->db->get('menu_item')->result_array();
		
	}
	
	function getUser($userId){
		$this->db->where('id',$userId);
		return $user = $this->db->get('menu_item')->result_array();
	}
	
	function updateUser($userId,$formArray){
		$this->db->where('id',$userId);
		$this->db->update('menu_item',$formArray);

	}
	
	function deleteUser($user){
		
		$this->db->where('id',$user);
		$this->db->delete('menu_item');	
	}
	
}

?>