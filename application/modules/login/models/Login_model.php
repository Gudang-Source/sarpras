<?php
/*
    @Copyright Arya45
    @Class Name : Login Model
*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model {

		//check login
		public function act_login($data){
	        $this->db->where($data);
	        $query = $this->db->get('tb_admin');
	        return $query->row();
		}

		public function login() {
            $this->db->select('*');
            $this->db->from('tb_admin');
            $this->db->order_by('id_admin','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }  

	}

/* End of file Login_model.php */
/* Location: ./application/modules/login/models/Login_model.php */