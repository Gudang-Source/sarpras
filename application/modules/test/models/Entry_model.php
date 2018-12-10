<?php
	/*
    @Copyright Arya45
    @Class Name : Entry Model
	*/

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Entry_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		//Simpan Data Barang
			public function setBarang($dataOrderBarang){
				$this->db->insert('tb_order_barang', $dataOrderBarang);
			}

			public function setBarang2($dataOrderItem){
				$this->db->insert_batch('tb_order_item',$dataOrderItem);
			}
			

		//Simpan Data ATK
			public function simpanAtk($dataOrderAtk){
				$this->db->insert('tb_order_atk', $dataOrderAtk);
			}

			public function simpanAtkDetail($dataOrderItem){
				$this->db->insert_batch('tb_order_atk_item',$dataOrderItem);
			}


	}

/* End of file Barang_model.php */
/* Location: ./application/modules/backend/models/Barang_model.php */