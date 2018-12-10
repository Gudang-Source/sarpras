<?php
	/*
    @Copyright Arya45
    @Class Name : Divisi Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Divisi_model extends CI_Model {

		
		// Divisi Barang
		public function setDivisi($data){
			return $this->db->insert('tb_divisi', $data);
		}

		public function getDivisi($id = FALSE){
			if ($id === FALSE) {
				$query = $this->db->get('tb_divisi');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_divisi', array('id_divisi'=>$id));
				return $query->row();
			}
		}

		public function editDivisi($id,$data){
			$this->db-> where('id_divisi', $id);
			return $this->db-> update('tb_divisi', $data);
		}

		public function deleteDivisi($id){
			return $this->db->delete('tb_divisi', array('id_divisi' => $id));
		}

	}

/* End of file Divisi_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Divisi_model.php */
