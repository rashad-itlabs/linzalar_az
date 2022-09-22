<?php 


class Card_model extends CI_Model{


	public function card_view($where)
	{
		return $this->db->where($where)->get('shopping_card')->result();
	}


	public function order_refresh($where)
	{
		return $this->db->where($where)->delete('shopping_card');
	}


	public function show_order($where)
	{
		return $this->db->where($where)->get('shopping_card')->result();
	}

	public function list_card()
	{
		return $this->db->order_by('arxiv_id','DESC')->get('order_arxiv')->result();
	}

	public function list_shopcard()
	{
		return $this->db->order_by('shop_id','DESC')->get('shopping_card')->result();
	}

	public function approv_order($data,$where)
	{
		return $this->db->where($where)->update('order_arxiv',$data);
	}

	public function approv_card($card,$where)
	{
		return $this->db->where($where)->update('shopping_card',$card);
	}


	public function ignore_order($data,$where)
	{
		return $this->db->where($where)->update('order_arxiv',$data);
	}








}


?>