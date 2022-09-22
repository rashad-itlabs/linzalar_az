<?php



class Account_model extends CI_Model{


	public function add_account($data)
	{
		return $this->db->insert('account', $data);

	}

	public function list_users()
	{
		return $this->db->order_by('uid','DESC')->get('account')->result();
	}


	public function viewUser($where)
	{
		return $this->db->where($where)->get('account')->result();

	}

	public function user_update($data, $where)
	{
		return $this->db->where($where)->update('account',$data);

	}

	public function userlist()
	{
		return $this->db->get('account')->result();

	}








	public function log_in($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('account');

		if($query->num_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}


	public function email_available($email)
	{
		$this->db->where('email',$email);

		$query = $this->db->get('account');

		if($query->num_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}

	public function username_available($username)
	{

		$this->db->where('username',$username);

		$query = $this->db->get('account');

		if($query->num_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}


















}


?>