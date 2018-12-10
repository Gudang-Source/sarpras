<?php
	/*
    @Copyright Arya45
    @Class Name : Groupsub Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Groupsub_model extends CI_Model {

		public function noGroup(){
			$this->db->select('Right(tb_barang_group.no_group,1) as kode ',false);
			$this->db->order_by('no_group', 'desc');
			$this->db->limit(1);
			$query = $this->db->get('tb_barang_group');
			if($query->num_rows()<>0){
				$data = $query->row();
				$kode = intval($data->kode)+1;
			}else{
				$kode = 1;
			}
			$kodemax = str_pad($kode,1,"0",STR_PAD_LEFT);
			$kodejadi  = $kodemax;
			return $kodejadi;
		}

		public function noSubroup(){
			$this->db->select('Right(tb_barang_subgroup.no_subgroup,1) as kode ',false);
			$this->db->order_by('no_subgroup', 'desc');
			$this->db->limit(1);
			
			$query = $this->db->get('tb_barang_subgroup');
			if($query->num_rows()<>0){
				$data = $query->row();
				$kode = intval($data->kode)+1;
			}else{
				$kode = 1;
			}
			$kodemax = str_pad($kode,1,"0",STR_PAD_LEFT);
			$kodejadi  = $kodemax;
			return $kodejadi;
		}


	/*// Group Barang*/

		public function setGroup($data){
			return $this->db->insert('tb_barang_group', $data);
		}

		public function getGroup($id = FALSE){
			if ($id === FALSE) {
				$query = $this->db->get('tb_barang_group');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_barang_group', array('id_barang_group'=>$id));
				return $query->row();
			}
		}

		public function editGroup($id,$data){
			$this->db-> where('id_barang_group', $id);
			return $this->db-> update('tb_barang_group', $data);
		}

		public function deleteGroup($id){
			return $this->db->delete('tb_barang_group', array('id_barang_group' => $id));
		}
	/* // End*/


	/*// Sub Group Barang*/
		public function setSub($data){
			return $this->db->insert('tb_barang_subgroup', $data);
		}

		public function getSub($id = FALSE){
			if ($id === FALSE) {
				$query = $this->db->get('tb_barang_subgroup');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_barang_subgroup', array('id_barang_subgroup'=>$id));
				return $query->row();
			}
		}

		public function editSub($id,$data){
			$this->db -> where('id_barang_subgroup', $id);
			return $this->db -> update('tb_barang_subgroup', $data);
		}

		public function deleteSub($id){
			return $this->db->delete('tb_barang_subgroup', array('id_barang_subgroup' => $id));
		}
	/* // End*/

	
		public function group(){
			$this->db->order_by('no_group','ASC');
			$group= $this->db->get('tb_barang_group');
			return $group->result_array();
		}


		public function subgroup($groupId){
			$subgroup="<option value='0'>--pilih--</pilih>";
			$this->db->order_by('no_subgroup','ASC');
			$sub= $this->db->get_where('tb_barang_subgroup',array('id_barang_group'=>$groupId));
			
			foreach ($sub->result_array() as $data ){
				$subgroup.= "<option value='$data[no_subgroup]'>$data[no_subgroup] | $data[nama_subgroup]</option>";
			}
			return $subgroup;
		}


		/*public function nobarang($groupId){
			
			$subgroup="<option value='0'>--pilih--</pilih>";
			$this->db->order_by('nama_subgroup','ASC');
			$sub= $this->db->get_where('tb_barang_subgroup',array('id_barang_group'=>$groupId));
			
			foreach ($sub->result_array() as $data ){
				$subgroup.= "<option value='$data[no_subgroup]'>$data[nama_subgroup]</option>";
			}
			return $subgroup;
		}*/



		// SELECT COUNT(no_barang)+1 AS no_barang FROM `tb_barang` WHERE id_barang_group=1 AND id_barang_subgroup=2

	}

/* End of file Groupsub_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Groupsub_model.php */
