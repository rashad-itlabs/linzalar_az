<?php

class User extends CI_Model{


	public function user_control($where)
	{
		return $this->db->where($where)->get('user')->result();
	}














}


?>