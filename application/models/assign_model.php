<?php

	class Assign_model extends CI_model{
		function all(){
			return $users = $this->db->get('register')->result_array();
		}
	}
 
?>