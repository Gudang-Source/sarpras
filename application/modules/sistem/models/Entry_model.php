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


			public function getDataBarang($id = FALSE){
				if ($id === FALSE) {
					
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan');
					$this->db->order_by('id_barang', 'DESC');
					$query = $this->db->get('tb_barang');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}


	}

/* End of file Barang_model.php */
/* Location: ./application/modules/sistem/models/Entry_model.php */