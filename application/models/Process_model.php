<?php

class Process_model extends CI_Model{


	public function add_adress($data)
	{
		return $this->db->insert('adress_card', $data);
	}



	public function optik_linza()
	{
		return $this->db->get('optik_linzalar')->result();
	}

	public function optik_linza_price($where)
	{
		return $this->db->where($where)->get('optik_linzalar')->result();
	}


	public function view_adress($where)
	{
		return $this->db->where($where)->get('adress_card')->result();
	}

	public function read_company()
	{
		return $this->db->get('kompaniyalar')->result();
	}

	public function komp_alert()
	{
		$this->db->select('*');
		$this->db->from('kompaniyalar');
		$this->db->where('activation',1);
		$query = $this->db->get();
		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}


	public function optition()
	{
		return $this->db->get('optition_detail')->result();
	}




	public function remove($where)
	{
		return $this->db->where($where)->delete('adress_card');
	}

	public function show_card_item($where)
	{
		return $this->db->where($where)->get('card')->result();
	}

	public function delete_card($where)
	{
		return $this->db->where($where)->delete('card');
	}

	public function view_adress_control($where)
	{
		$this->db->where('username', $where);
		$query = $this->db->get('adress_card');

		if($query->num_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}



	public function finished($data)
	{
		return $this->db->insert('shopping_card', $data);
	}

	public function arxiv($card)
	{
		return $this->db->insert('order_arxiv', $card);
	}


	public function call_center($data)
	{
		return $this->db->insert('call_center', $data);
	}


	public function add_comment($data)
	{
		return $this->db->insert('comment', $data);
	}

	public function showAdress($where)
	{
		return $this->db->where($where)->get('adress_card')->result();
	}	


	public function updateAdress($data = array(), $where)
	{
		return $this->db->where($where)->update('adress_card', $data);
	}	


	public function yukle($data){
		return $this->db->insert('test',$data);
	}


	public function share_cooment($data, $where)
	{
		return $this->db->where($where)->update('comment',$data);
	}

	public function read_cooment()
	{
		return $this->db->get('comment')->result();
	}

	public function share_delete($where)
	{
		return $this->db->where($where)->delete('comment');
	}


	public function addkompany($data){
		return $this->db->insert('kompaniyalar',$data);
	}

	public function viewkompany(){
		return $this->db->get('kompaniyalar')->result();
	}

	public function openkompany($data,$where){
		return $this->db->where($where)->update('kompaniyalar',$data);
	}

	public function closekompany($data,$where){
		return $this->db->where($where)->update('kompaniyalar',$data);
	}

	public function deletekompany($where){
		return $this->db->where($where)->delete('kompaniyalar');
	}

	function log_in($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('user');

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function axtar($key)
    {
        $this->db->like('username',$key);
        $query = $this->db->get('account');
        return $query->result();
    }

    public function fetch_data($query)
    {
        $this->db->select('*');
        $this->db->from('account');
        if($query !='')
        {
            $this->db->like('username', $query);
        }
        $this->db->order_by('uid','asc');
        return $this->db->get();
    }



    public function fetch_card_data($where)
    {
        return $this->db->where($where)->get('order_arxiv')->result();
    }




















}



?>