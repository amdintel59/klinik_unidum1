<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class users extends CI_Controller {

	function __construct(){
		parent:: __construct();
		if(empty($this->session->userdata('login'))){
				redirect ('auth');
		}

        $this->load->model('m_users');
	}

	public function index()
	{
		$data['title'] = "Manajemen Data Users";
        $data['users'] = $this->m_users->tampil_data()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('users/v_data',$data);
		$this->load->view('v_footer');
    }

	function tambah (){
		$data ['title'] = "Tambah Data Users";

		$this->load->view('v_header', $data);
		$this->load->view('users/v_data_tambah');
		$this->load->view('v_footer');

		
    }

	function insert (){
		$u = $this->input->post('ussername');
		$n = $this->input->post('nama_lengkap');
		$p = $this->input->post('passsword');

	$data = array(
		'ussername' =>$u,
		'nama_lengkap' =>$n,
		'passsword' =>$p
		);

	$this->m_users->insert_data($data);
	redirect ('users');

}
function edit ($id){
	$data ['title'] = "Edit Data Users";

	$where = array ('id' => $id);
	$data ['r'] = $this->m_users->edit_data($where)->row_array();

	    $this->load->view('v_header', $data);
		$this->load->view('users/v_data_edit');
		$this->load->view('v_footer');

}

}