<?php
	/*
    @Copyright Arya45
    @Class Name : User Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model {

		// Get User
		public function getUser($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role') != 'Super Admin') {
					$this->db->where('role !=', 'Super Admin');
				}
				$query = $this->db->get('tb_admin');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_admin', array('id_admin' => $id));
				return $query->row();
			}
		}

		public function getUserSdm($id = FALSE){
	    	$dbsdm = $this->load->database('db_sdm', TRUE);
				if ($id === FALSE) {

					/*$dbsdm->join('penempatan','penempatan.nik = karyawan.nik','LEFT');
					$dbsdm->join('karyawan','karyawan.nik = penempatan.nik','LEFT');
					$dbsdm->join('master_unit','master_unit.id_master_unit = penempatan.unit');*/
					$dbsdm->order_by('karyawan', 'ASC');
					
					$query = $dbsdm->get('karyawan');
					return $query->result();
				}else{

					$query = $dbsdm->get_where('karyawan', array('nik'=>$id));
					return $query->row();
				}
				
		}

		// Listing User
	    public function listUser() {
	        $this->db->select('*');
	        $this->db->from('tb_user');
	        $this->db->order_by('id_user','ASC');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

		// Add User
	    public function addUser($data) {
	        $this->db->insert('tb_admin',$data);
	    }

		// Detail 
		public function detailUser($id_user) {
	        $this->db->select('*');
	        $this->db->from('tb_user');
	        $this->db->where('id_user',$id_user);
	        $this->db->order_by('id_user','DESC');
	        $query = $this->db->get();
	        return $query->row_array();
	    } 

		// Edit
		public function editUser($id, $data){
			$this->db->where('id_admin', $id);
			return $this->db->update('tb_admin', $data);
		}

		// Delete
		public function deleteUser($id){
			return $this->db->delete('tb_admin', array('id_admin' => $id));
		}

		// Aktif
		public function aktifUser($id,$data){
			$this->db->where('id_admin', $id);
			return $this->db->update('tb_admin', $data);
		}

		// Block
		public function blockUser($id,$data){
			$this->db->where('id_admin', $id);
			return $this->db->update('tb_admin', $data);
		}

		


	}

/* End of file User_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/User_model.php */
