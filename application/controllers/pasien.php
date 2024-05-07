<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class pasien extends CI_Controller {

	function __construct(){
		parent:: __construct();
		if(empty($this->session->userdata('login'))){
				redirect ('auth');
		}

        $this->load->model('m_pasien');
	}
	public function index()
	{
		$data['title'] = "Manajemen Data Pasien";
        $data['pasien'] = $this->m_pasien->tampil_pasien()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('Pasien/v_datapasien',$data);
		$this->load->view('v_footer');
	}
}
