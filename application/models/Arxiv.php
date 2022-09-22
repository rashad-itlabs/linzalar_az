<?php

class Arxiv extends CI_Model{

	function calls()
	{
		return $this->db->get('zengler')->result();
	}











}


?>