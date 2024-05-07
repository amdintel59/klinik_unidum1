<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class dokter extends CI_Controller {

	function __construct(){
		parent:: __construct();
		if(empty($this->session->userdata('login'))){
				redirect ('auth');
		}

        $this->load->model('m_dokter');
	}
	public function index()
	{
		$data['title'] = "Manajemen Data Dokter";
        $data['dokter'] = $this->m_dokter->tampil_datadok()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('dokter/v_datadokter',$data);
		$this->load->view('v_footer');
	}
}
