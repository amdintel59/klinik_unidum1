<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pasien extends CI_Model {

        function tampil_pasien(){
            return $this->db->get('pasien');
        }
}
