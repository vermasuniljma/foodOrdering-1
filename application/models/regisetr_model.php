<?php

	class Register_model extends CI_model{
	
	function create($formArray)
	{
		$this->db->insert('register',$formArray);
	}

?>