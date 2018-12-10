<?php
	/*
    @Copyright Arya45
    @Class Name : Satuan Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Satuan_model extends CI_Model {

		/// Satuan
				
		public function setSatuan($data){
			return $this->db->insert('tb_barang_satuan', $data);
		}

		public function getSatuan($id = FALSE){
			if ($id === FALSE) {
				$query = $this->db->get('tb_barang_satuan');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_barang_satuan', array('id_barang_satuan'=>$id));
				return $query->row();
			}
		}

		public function list_satuan() {
	        $this->db->select('*');
	        $this->db->from('tb_barang_satuan');
	        $this->db->order_by('id_barang_satuan','ASC');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

		public function editSatuan($id,$data){
			$this->db->where('id_barang_satuan', $id);
			return $this->db->update('tb_barang_satuan', $data);
		}

		public function deleteSatuan($id){
			return $this->db->delete('tb_barang_satuan', array('id_barang_satuan' => $id));
		}
	// End Satuan


	}

/* End of file Satuan_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Satuan_model.php */
