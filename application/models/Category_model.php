<?php

class Category_model extends CI_Model{


	public function brands()
	{
		return $this->db->get('markalar')->result();
	}

	public function lenstype()
	{
		return $this->db->get('lens_type')->result();
	}

	public function use_lens()
	{
		return $this->db->get('use_lens')->result();
	}

	












}

?>