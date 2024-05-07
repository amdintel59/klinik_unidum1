<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dokter extends CI_Model {

        function tampil_datadok(){
            return $this->db->get('dokter');
        }
}
