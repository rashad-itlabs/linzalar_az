<?php

	class Admin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('menu');
		$this->load->model('counter');
        $this->load->model('card_model');
        $this->load->model('products');
        $this->load->model('process_model');
        $this->load->model('arxiv');
		$this->load->model('user');
		
	}

	public function index()
	{

		
		$this->load->view('admin/login');
	}


	public function home()
	{
        if($this->session->username){

            $data['usercount'] = $this->counter->users_count();
            $data['ordercard'] =$this->card_model->list_card();
            $data['all'] =$this->products->foradmin();
            $data['count'] =$this->products->pro_count();
            $where = array('username'=>$this->session->username);
            $data['router'] = $this->user->user_control($where);

            $this->load->view('admin/home',$data);

        }else{
            redirect(base_url('admin'));
        }
		
	}

	public function coment_alert()
    {
       $this->counter->count_comment();
    }

    public function call_alert()
    {
       $this->counter->re_call();
    }


     public function card_alert()
    {
       $result = $this->counter->card();
    }

    public function approv($kod)
    {
    	$where = array(
    		'sifaris_kodu'=>$kod
    	);

    	$data = array(
    		'activation'=>1,
    		'position' =>'Təsdiqləndi'
    	);

    	$card = array(
    		'activation'=>1,
    	);

    	$approv = $this->card_model->approv_order($data,$where);
    	$approv_card = $this->card_model->approv_card($card,$where);
    	redirect(base_url('pages/card'));
    }


    public function ignore($kod)
    {
    	$where = array(
    		'sifaris_kodu'=>$kod
    	);

    	$data = array(
    		'activation'=>1,
    		'position' =>'Ləğv edildi'
    	);

    	$ignore = $this->card_model->ignore_order($data,$where);
    	redirect(base_url('pages/card'));
    }



	public function deleteCall($id)
    {
        $where = array(
            'call_id'=>$id
        );
        $delete = $this->products->deleteCall($where);
        header('location:' .$_SERVER['HTTP_REFERER']);
    }


    public function icerikgoster()
    {
        $where = array(
            'call_id'=>$_POST['id']
        );

        $rows = $this->products->view_call_detail($where);

        foreach ($rows as $row) { ?>

            <div class="modal-content">
              <div class="modal-header">
                <h5 style="width:100%;" class="modal-title" id="exampleModalLabel"><?=ucfirst($row->name)?> <?=ucfirst($row->surname)?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?=$row->text?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
              </div>
            </div>
            
       <?php }
    }


    public function share($id)
    {
        $where = array('comment_id'=>$id);
        $data = array('activation'=>1);
        $this->process_model->share_cooment($data,$where);
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }

    public function deletecomment($id)
    {
        $where = array('comment_id'=>$id);
        $this->process_model->share_delete($where);
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }


    public function addcompany()
    {
        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = "*";
        $this->load->library('upload',$config);

        $image = $_FILES['file']['name'];


        if($this->upload->do_upload('file')){

            $data = array(
                'image' =>$image,
                'title'     =>$_POST['basliq'],
                'description'   =>$_POST['content'],
                'activation'    =>1
            );
            $this->process_model->addkompany($data);
            header('Location:' .$_SERVER['HTTP_REFERER']);

        }
        
    }



    function open_c($id)
    {
        $where = array('komp_id'=>$id);
        $data = array('activation'=>1);
        $this->process_model->openkompany($data,$where);
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }

    function close_c($id)
    {
        $where = array('komp_id'=>$id);
        $data = array('activation'=>0);
        $this->process_model->closekompany($data,$where);
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }

    function delete_c($id)
    {
        $where = array('komp_id'=>$id);
        $this->process_model->deletekompany($where);
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }


    function signin()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $result = $this->process_model->log_in($username, $password);
        if($result==1){
            $sessionAdmin = array('username'=>$_POST['username']);
            $this->session->set_userdata($sessionAdmin);
            redirect(base_url('admin/home'));

        }else{
           redirect(base_url('admin'));
        }
    }


    function signout()
    {
        session_destroy();
        redirect(base_url('admin'));
    }



    public function search()
    {
        $output='';
        $query='';
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
        }
        $data = $this->process_model->fetch_data($query);

        $output .='
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Ad Soyad</th>
                            <th>İstifadəçi adı</th>
                            <th>Telefon</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>';

        if($data->num_rows() > 0)
        {
            foreach ($data->result() as $row) 
            {
                $output .='<tr>
                            <td>'.$row->name.' '.$row->surname.'</td>
                            <td>'.$row->username.'</td>
                            <td>'.$row->phone.'</td>
                            <td>'.$row->email.'</td>
                          </tr>';
                
            }
        }else
        {
            $output = '<tr>
                            <td colspan="8">No data Found</td>
                        </tr>';
        }
        $output .='</table>';
        echo $output;
    }



    public function filter()
    {
        $userName = $_POST['cardVal'];
        if($userName==""){

        }else{
            $where = array('username'=>$userName);
            $data['rows'] = $this->process_model->fetch_card_data($where);

            $data['ordercard'] =$this->card_model->list_card();
            $data['shopcard'] = $this->card_model->list_shopcard();

            $data['cardlist'] = $this->card_model->list_card();
            $this->load->view('admin/filter', $data);
        }
        

        
        
    }

    public function editProduct()
    {
        $id = $_GET['edit'];
        $data['product'] = $this->products->edit_product($id);
        $this->load->view('admin/editProduct',$data);
    }

    public function edit_product()
    {
        $id = $_POST['id'];
        $proname = $_POST['proname'];
        $brandname = $_POST['brandname'];
        $price = $_POST['price'];
        $data = array(
            'pro_name' => $proname,
            'brand_name' => $brandname,
            'pro_price' => $price
        );
        $this->db->where('pro_id',$id)->update('products',$data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_card()
    {
        $id = $_GET['dlt'];
        $this->db->where('arxiv_id',$id)->delete('order_arxiv');
        redirect($_SERVER['HTTP_REFERER']);
    }

















	}








?>