<?php


class Products extends CI_Model{



	public function view_all()
	{
		return $this->db->order_by('pro_id','RANDOM')->get('products')->result();
	}

	public function edit_product($id)
	{
		return $this->db->where('pro_id',$id)->get('products')->result();
	}

	public function all_header_menu()
	{
		return $this->db->order_by('pro_id','RANDOM')->limit(1)->get('products')->result();
	}

	public function view_all_limit()
	{
		return $this->db->limit(13)->get('products')->result();
	}

	public function view_johnson($where)
	{
		return $this->db->where($where)->get('products')->result();
	}

	public function detail($where=array())
	{
		return $this->db->where($where)->get('products')->result();
	}

	public function brands($where=array())
	{
		return $this->db->where($where)->get('products')->result();
	}

	public function lenstype($cat)
	{
		return $this->db->where($cat)->get('products')->result();
	}

	public function lenscolore($color)
	{
		return $this->db->where($color)->get('products')->result();
	}

	public function addCart($data)
	{
		return $this->db->insert('card', $data);
	}

	public function viewCard($sessionID)
	{
		$sql = $this->db->where('sessionID',$sessionID);
		$query = $this->db->get('card');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}


	public function viewCardUser($sessionEmail)
	{
		$sql = $this->db->where('sessionEmail',$sessionEmail);
		$query = $this->db->get('card');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}


	public function show_Card($where)
	{
		return $this->db
		->where($where)
		->get('card')->result();
	}

	public function get_count($where)
	{
		$where = $this->session->sessionID;

		$sql = "SELECT count(sessionID) as sessionID FROM card WHERE sessionID='$where'";
		$result = $this->db->query($sql);
		return $result->row()->sessionID;
	}

	public function get_count_user($where)
	{
		$where = $this->session->email;

		$sql = "SELECT count(sessionEmail) as sessionEmail FROM card WHERE sessionEmail='$where'";
		$result = $this->db->query($sql);
		return $result->row()->sessionEmail;
	}


	public function get_sum_user($count)
	{
		$count = $this->session->email;

		$sql = "SELECT sum(price) as price FROM card WHERE sessionEmail='$count'";
		$result = $this->db->query($sql);
		return $result->row()->price;
	}


	public function get_sum($count)
	{
		$count = $this->session->sessionID;

		$sql = "SELECT sum(price) as price FROM card WHERE sessionID='$count'";
		$result = $this->db->query($sql);
		return $result->row()->price;
	}

	public function delete_Card($where)
	{
		return $this->db->where($where)->delete('card');
	}


	public function viewAll($where)
	{
		return $this->db->where($where)->get('products')->result();
	}

	public function foradmin()
	{
		return $this->db->get('products')->result();
	}

	public function pro_count()
	{
		$sql = "SELECT count(pro_id) as pro_id FROM products";
		$query = $this->db->query($sql);
		return $query->row()->pro_id;
	}

	public function viewAdress($where)
	{
		return $this->db->where($where)->get('adress_card')->result();
	}

	public function viewCall()
	{
		return $this->db->get('call_center')->result();
	}
	public function deleteCall($where)
	{
		return $this->db->where($where)->delete('call_center');
	}

	public function view_call_detail($where)
	{
		return $this->db->where($where)->get('call_center')->result();
	}


	public function viewComment()
	{
		return $this->db->order_by('comment_id','desc')->get('comment')->result();
	}



// ================================MOBILE==============================================

	public function limit_product()
	{
		return $this->db->limit(5)->get('products')->result();
	}

	public function updateWishing($data, $where)
	{
		return $this->db->where($where)->update('wishing',$data);
	}

	public function addWishing($data)
	{
		return $this->db->insert('wishing',$data);
	}
	
	public function deleteWishing($where)
	{
		return $this->db->where($where)->delete('wishing');
	}

	// public function readWishing($where)
	// {
	// 	return $this->db->where($where)->get('wishing')->result();
	// }






}







?>