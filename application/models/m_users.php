<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_users extends CI_Model {

        function tampil_data(){
            return $this->db->get('users');
        }

        function insert_data($data){
            return $this->db->insert('users', $data);

        }
        
    function edit_data($where){
        return $this->db->get_where('users', $where);
    }
}
