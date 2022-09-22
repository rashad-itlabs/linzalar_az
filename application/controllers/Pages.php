<?php



class Pages extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('menu');
		$this->load->model('account_model');
		$this->load->model('card_model');
		$this->load->model('process_model');
		$this->load->model('products');
		$this->load->model('arxiv');
		$this->load->model('user');
	}


	public function archiv()
	{
	    if($this->session->username){
	        
	        $data['ordercard'] =$this->card_model->list_card();
    		$data['calls'] = $this->arxiv->calls();
    		$where = array('username'=>$this->session->username);
            $data['router'] = $this->user->user_control($where);
    		$this->load->view('admin/pages/archiv',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}

	public function users()
	{
	     if($this->session->username){
	         
	         $data['ordercard'] =$this->card_model->list_card();
    		$data['userlist'] = $this->account_model->userlist();
    		$where = array('username'=>$this->session->username);
                $data['router'] = $this->user->user_control($where);
    		$this->load->view('admin/pages/users',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}

	public function card()
	{
	     if($this->session->username){
	         
	        $data['user'] =$this->db->get('account')->result();
	        $data['ordercard'] =$this->card_model->list_card();
    		$data['shopcard'] = $this->card_model->list_shopcard();
    		$where = array('username'=>$this->session->username);
                $data['router'] = $this->user->user_control($where);
    
    		$data['cardlist'] = $this->card_model->list_card();
    		$this->load->view('admin/pages/card',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}

	public function dltOrders()
	{
		$kod = $_GET['order'];
		$this->db->where('sifaris_kodu',$kod)->delete('shopping_card');
		$this->db->where('sifaris_kodu',$kod)->delete('order_arxiv');
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function comment()
	{
	     if($this->session->username){
	         
	         $data['ordercard'] =$this->card_model->list_card();
    		$data['shopcard'] = $this->card_model->list_shopcard();
    		$data['comment'] = $this->products->viewComment();
    		$where = array('username'=>$this->session->username);
                $data['router'] = $this->user->user_control($where);
    
    		$data['cardlist'] = $this->card_model->list_card();
    		$this->load->view('admin/pages/comment',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}


	public function call_form()
	{
	     if($this->session->username){
	         
	         $data['ordercard'] =$this->card_model->list_card();
    		$data['shopcard'] = $this->card_model->list_shopcard();
    		$data['call'] = $this->products->viewCall();
    		$where = array('username'=>$this->session->username);
                $data['router'] = $this->user->user_control($where);
    
    		$data['cardlist'] = $this->card_model->list_card();
    		$this->load->view('admin/pages/call_form',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}


	public function discount()
	{
	     if($this->session->username){
	         $data['ordercard'] =$this->card_model->list_card();
    		$data['shopcard'] = $this->card_model->list_shopcard();
    		$where = array('username'=>$this->session->username);
                $data['router'] = $this->user->user_control($where);
    
    		$data['cardlist'] = $this->card_model->list_card();
    		$data['readcompany'] = $this->process_model->viewkompany();
    		$this->load->view('admin/pages/discount',$data);
	        
	    }else{
	        redirect(base_url('admin'));
	    }
		
	}











}








?>