<?php
	/*
    @Copyright Arya45
    @Class Name : Supplier Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Supplier_model extends CI_Model {

		// Get Supplier
		public function getSupplier($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role') != 'Super Admin') {
					$this->db->where('role !=', 'Super Admin');
				}
				$query = $this->db->get('tb_supplier');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_supplier', array('id_supplier' => $id));
				return $query->row();
			}
		}

		// Listing Supplier
	    public function listSupplier() {
	        $this->db->select('*');
	        $this->db->from('tb_supplier');
	        $this->db->order_by('id_supplier','ASC');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

		// Add Supplier
	    public function addSupplier($data) {
	        $this->db->insert('tb_supplier',$data);
	    }

		// Detail 
		public function detailSupplier($id_supplier) {
	        $this->db->select('*');
	        $this->db->from('tb_supplier');
	        $this->db->where('id_supplier',$id_supplier);
	        $this->db->order_by('id_supplier','DESC');
	        $query = $this->db->get();
	        return $query->row_array();
	    } 

		// Edit
		public function editSupplier($id, $data){
			$this->db->where('id_supplier', $id);
			return $this->db->update('tb_supplier', $data);
		}

		// Delete
		public function deleteSupplier($id){
			return $this->db->delete('tb_supplier', array('id_supplier' => $id));
		}

		// Aktif
		public function aktifSupplier($id,$data){
			$this->db->where('id_supplier', $id);
			return $this->db->update('tb_supplier', $data);
		}

		// Block
		public function blockSupplier($id,$data){
			$this->db->where('id_supplier', $id);
			return $this->db->update('tb_supplier', $data);
		}

		


	}

/* End of file Supplier_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Supplier_model.php */
