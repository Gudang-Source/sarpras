<?php
	/*
    @Copyright Arya45
    @Class Name : Ruangan Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ruangan_model extends CI_Model {

	 
        public function __construct() {
            $this->load->database();
            $dbsdm = $this->load->database('db_sdm', TRUE);
           
        }


	    public function addRuangan($data){
			return $this->db->insert('tb_ruangan', $data);
		}


      public function list_satuan(){
					$query = $this->db->get('tb_ruangan');
					$this->db->order_by('id_ruangan');
					if($query->num_rows()>0){
						return $query->result_array();
					}
	    }

	  

	    public function stokBarang($id) {
				$query = $this->db->get_where('tb_barang_item',array('id_barang' => $id, 'gudang' => 'sarpras'));
				return $query->num_rows();	
			}
		
				
		public function getRuangan($id = FALSE){
			if ($id === FALSE) {
				$query = $this->db->get('tb_ruangan');
				return $query->result();
			}else{
				
				$query = $this->db->get_where('tb_ruangan', array('id_ruangan'=>$id));
				return $query->row();
			}
		}

		public function getRuanganPic($id = FALSE){
			if ($id === FALSE) {
				if ( $this->session->userdata('role') == 'Pic') {
						$this->db->where('id_karyawan', $this->session->userdata('nik'));
				}
				$this->db->order_by('no_ruangan', 'DESC');
				$query = $this->db->get('tb_ruangan');
				return $query->result();
			}else{
				
				$query = $this->db->get_where('tb_ruangan', array('id_ruangan'=>$id));
				return $query->row();
			}
		}

		public function editRuangan($id,$data){
			$this->db->where('id_ruangan', $id);
			return $this->db->update('tb_ruangan', $data);
		}

		public function getRuanganDetail($id = FALSE){
			
			if ($id === FALSE) {
				$query = $this->db->get('tb_ruangan');
				return $query->result();
			}else{
				$this->db->join('pahtsung_sdm.karyawan', 'karyawan.nik = tb_ruangan.id_karyawan' );
				$query = $this->db->get_where('pahtsung_pembelian_live.tb_ruangan', array('id_ruangan' => $id));
				return $query->row();
			}
		}

		public function getDetailItem($id = FALSE){
				if ($id===FALSE) {
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				} else {

					$query = $this->db->get_where('tb_barang_item', array('id_ruangan' => $id ));
					return $query->result();
				}
				
			}




		public function getRuanganDetailItem($id ){
			
			// $this->db->join('tb_barang_item', 'tb_barang_item.id_barang_item = tb_ruangan_detail.id_barang_item');
			
			$this->db->join('pahtsung_sdm.karyawan', 'karyawan.nik = tb_barang_item.id_karyawan','LEFT' );
			$this->db->join('pahtsung_pembelian_live.tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang','LEFT');
			// $query = $this->db->get_where('tb_ruangan_detail', array('id_ruangan' => $id));
			$query = $this->db->get_where('pahtsung_pembelian_live.tb_barang_item', array('id_ruangan' => $id));
			return $query->result();		
		}

		public function getRuanganPrint($id ){
			if ($id === FALSE) {
				$query = $this->db->get('tb_ruangan');
				return $query->result();
			}else{
				$this->db->join('pahtsung_sdm.karyawan', 'karyawan.nik = tb_ruangan.id_karyawan','LEFT');
				$query = $this->db->get_where('pahtsung_pembelian_live.tb_ruangan', array('id_ruangan' => $id));
				return $query->row();
			}		
		}

		public function getRuanganPrintItem($id ){
			
			// $this->db->join('tb_barang_item', 'tb_barang_item.id_barang_item = tb_ruangan_detail.id_barang_item');
			$this->db->join('pahtsung_sdm.karyawan', 'karyawan.nik = tb_barang_item.id_karyawan','LEFT');
			$this->db->join('pahtsung_pembelian_live.tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang','LEFT');
			// $query = $this->db->get_where('tb_ruangan_detail', array('id_ruangan' => $id));
			$query = $this->db->get_where('pahtsung_pembelian_live.tb_barang_item', array('id_ruangan' => $id));
			return $query->result();		
		}



		public function deleteRuangan($id){
			return $this->db->delete('tb_ruangan', array('id_ruangan' => $id));
		}


	}
/* End of file Ruangan_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Ruangan_model.php */