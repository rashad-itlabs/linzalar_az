<?php



class Demo_model extends CI_Model{


	// public function add_model($data)
	// {
	// 	return $this->db->insert('demo', $data);

	// }

	public function add($data)
	{
		return $this->db->insert('test', $data);

	}

	public function verisayisi()
	{
		$sonuc = $this->db->select('*')->from('test')->count_all_results();
		return $sonuc;

	}

	public function vericek($per, $segment)
	{
		$sonuc = $this->db->select('*')->from('test')->limit($per, $segment)->get()->result();
		return $sonuc;

	}

















}


?>