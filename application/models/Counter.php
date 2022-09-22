<?php


class Counter extends CI_Model{


	function users_count()
	{
		$sql = "SELECT count(uid) as uid FROM account";
		$query = $this->db->query($sql);
		return $query->row()->uid;
	}

	function count_comment()
	{
		$this->db->select('activation');
        $this->db->from('comment');
        $this->db->where('activation',0);
        echo $this->db->count_all_results();
	}


	function re_call()
	{
		$this->db->select('activation');
        $this->db->from('call_center');
        $this->db->where('activation',0);
        echo $this->db->count_all_results();
	}


	function card()
	{
		$this->db->select('activation');
        $this->db->from('order_arxiv');
        $this->db->where('activation',0);
        echo $this->db->count_all_results();
	}

	













}





?>