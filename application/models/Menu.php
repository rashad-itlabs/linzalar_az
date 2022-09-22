<?php



class Menu extends CI_Model{




	public function navbar(){
		return $this->db->get('navbar')->result();
	}





}








?>