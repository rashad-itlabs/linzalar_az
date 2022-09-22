<?php


class Bookmark_model extends CI_Model{


	public function __construct()
	{

		$this->load->database();

		$this->load->library('cart');
	}


	public function lists($id = 0)
	{
		if($id){

			$query = $this->db->get_where('products', array('pro_id'=>$id));
			return $query->row_array();

		}else{
			
			$query = $this->db->get('products');
			return $query->result_array();
		}
	}


	public function addBookmark($id = 0)
	{
		if($id){
			$pro = $this->lists($id);
			if(isset($pro['id'])){
				$data = array(
					'id' =>$pro['id']
				);
				$this->cart->insert($data);
			}
		}
	}




}









?>