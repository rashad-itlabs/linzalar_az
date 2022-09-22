<?php


class Search extends CI_Model{


	public function filter_search($keyword)
	{
		$this->db->like('pro_name',$keyword);
		$this->db->order_by('pro_name','desc');
		$query = $this->db->get('products');
		return $query->result();
	}



}


?>