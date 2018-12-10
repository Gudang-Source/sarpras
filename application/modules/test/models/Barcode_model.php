<?php
	/*
    @Copyright Arya45
    @Class Name : Barcode Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Barcode_model extends CI_Model {

		function getId() {
			$this->db->order_by('id','ASC');
			$query = $this->db->get('tb_barcode');  
			return $query->result();     
		}

		function insert_barcode($data){
			$this->db->insert('tb_barcode', $data);  
		}

	}

/* End of file Stats_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Barcode_model.php */