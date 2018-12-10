<?php
	/*
    @Copyright Arya45
    @Class Name : Gudang Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Gudang_model extends CI_Model {


		//Simpan Data Gudang

			public function simpanGudang($dataGudang){
				$this->db->insert('tb_barang', $dataGudang);
			}

			public function simpanItem($dataGudangItem){
				$this->db->insert_batch('tb_barang_item',$dataGudangItem);
			}

		// Get Gudang
			public function getDataGudang($id = FALSE){
				if ($id === FALSE) {
					if ($this->session->userdata('role')=='User') {
						$this->db->where('nama', $this->session->userdata('fullname'));
					}
					$this->db->order_by('id_barang', 'DESC');
					$query = $this->db->get('tb_barang');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}

			public function getDetailGudang($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_barang_item', 'tb_barang_item.id_barang_item = tb_barang_item.id_barang');
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$query = $this->db->get('tb_barang');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}

			public function getDetailItem($id){
				$query = $this->db->get_where('tb_barang_item', array('id_barang' => $id ,''));
				return $query->result();
			}

			public function getDetailPrint($id){
				$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
			}

		// Listing Gudang
	    public function listGudang() {
	        $this->db->select('*');
	        $this->db->from('tb_barang');
	        $this->db->order_by('id_barang','ASC');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

	    

		// Add Gudang
	    public function addGudang($data) {
	        $this->db->insert('tb_barang',$data);
	    }

		// Detail 
		public function detailGudang($id) {
	        $this->db->select('*');
	        $this->db->from('tb_barang');
	        $this->db->where('id_barang',$id_barang);
	        $this->db->order_by('id_barang','DESC');
	        $query = $this->db->get();
	        return $query->row_array();
	    } 

		// Edit
		public function editGudang($id, $data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}

		// Delete
		public function deleteGudang($id){
			return $this->db->delete('tb_barang', array('id_barang' => $id));
		}

		// Aktif
		public function aktifGudang($id,$data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}

		// Block
		public function blockGudang($id,$data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}


	}

/* End of file Gudang_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Gudang_model.php */