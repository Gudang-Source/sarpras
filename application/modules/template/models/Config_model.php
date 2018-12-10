<?php
	/*
    @Copyright Arya45
    @Class Name : Config Model
	*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Config_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Config
        public function list_config() {
            $this->db->select('*');
            $this->db->from('tb_config');
            $this->db->order_by('id_config','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }

        // Edit Config
        public function edit_config($data) {
            $this->db->where('id_config',$data['id_config']);
            $this->db->update('tb_config',$data);
        } 

        public function getConfig($id = FALSE){
            if ($id === FALSE) {
                $query = $this->db->get('tb_config');
                return $query->result();
            }else{
                
                $query = $this->db->get_where('tb_config', array('id_config'=>$id));
                return $query->row();
            }
        }

        public function addConfig($data){
            return $this->db->insert('tb_config', $data);
        }

        // With ID
        public function edit($id,$data){
            $this->db->where('id_config', $id);
            return $this->db->update('tb_config', $data);
        } 
        
        public function editConfig($data) {
            $this->db->where('id_config',$data['id_config']);
            $this->db->update('tb_config',$data);
        } 
           
        public function deleteConfig($id){
            return $this->db->delete('tb_config', array('id_config' => $id));
        }
           

    }

/* End of file Config_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Config_model.php */