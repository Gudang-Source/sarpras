<?php
	/*
    @Copyright Arya45
    @Class Name : Proses Model
	*/

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Proses_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

	/* Proses Default Barang*/
		//== Get Barang
		public function getBarang($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role')=='User' || $this->session->userdata('role')=='Pembelian') {
					$this->db->where('nama', $this->session->userdata('username'));
				}
				$this->db->limit(20);
				$this->db->order_by('created_date','desc');
				$query = $this->db->get('tb_order_barang');
				return $query->result();
			}else{
				$this->db->order_by('created_date','desc');
				$query = $this->db->get_where('tb_order_barang', array('id_order_barang' => $id));
				return $query->row();
			}
		}

		public function getBarangDetail($id = FALSE){
			if ($id === FALSE) {
				$this->db->join('tb_order_item', 'tb_order_item.id_order_item = tb_order_item.id_order_barang');
				$query = $this->db->get('tb_order_barang');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_order_barang', array('id_order_barang' => $id));
				return $query->row();
			}
		}

		public function getBarangItem($id){
			$query = $this->db->get_where('tb_order_item', array('id_order_barang' => $id ,''));
			return $query->result();
		}

		//== Edit Barang
		public function edit_barang($id,$dataOrderBarang){
			$this->db->where('id_order_barang', $id);
			return $this->db->update('tb_order_barang', $dataOrderBarang);
		}

	/* Proses Default ATK*/
		//== Get ATK
			public function get_atk($id = FALSE){
				if ($id === FALSE) {
					if ($this->session->userdata('role')=='User' ||$this->session->userdata('role')=='Pembelian' || $this->session->userdata('role')=='Toko') {
						$this->db->where('nama', $this->session->userdata('username'));
					}
					$this->db->order_by('created_date', 'ASSC');
					$query = $this->db->get('tb_order_atk');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_order_atk', array('id_order_atk' => $id));
					return $query->row();
				}
			}

			public function get_atk_detail($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_order_atk_item', 'tb_order_atk_item.id_order_atk_item = tb_order_atk_item.id_order_atk');
					$query = $this->db->get('tb_order_atk');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_order_atk', array('id_order_atk' => $id));
					return $query->row();
				}
			}

			public function get_atk_item($id){
				$query = $this->db->get_where('tb_order_atk_item', array('id_order_atk' => $id ,''));
				return $query->result();
			}

		//== Edit ATK
			public function edit_atk($id,$dataOrderAtk){
				$this->db->where('id_order_atk', $id);
				return $this->db->update('tb_order_atk', $dataOrderAtk);
			}



	/*=== Unit / User ===*/

		// Unit Batal Barang
		public function unit_batal($id,$data){
			$this->db->where('id_order_barang', $id);
			return $this->db->update('tb_order_barang', $data);
		}
		// Unit Batal ATK
		public function unit_batal_atk($id,$data){
			$this->db->where('id_order_atk', $id);
			return $this->db->update('tb_order_atk', $data);
		}


	/*=== Kepunit ===*/

		//Get Barang
		public function getBarangKepunit($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role')=='Kepsek') {
					$this->db->where('divisi', $this->session->userdata('fullname'));
				}
				$this->db->order_by('created_date','desc');
				$query = $this->db->get('tb_order_barang');
				return $query->result();
			}else{
				$this->db->order_by('created_date','desc');
				$query = $this->db->get_where('tb_order_barang', array('id_order_barang' => $id));
				return $query->row();
			}
		}

		//Get ATK
		public function getAtkKepunit($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role')=='Kepsek') {
					$this->db->where('divisi', $this->session->userdata('fullname'));
				}
				$this->db->order_by('created_date','desc');
				$query = $this->db->get('tb_order_atk');
				return $query->result();
			}else{
				$this->db->order_by('created_date','desc');
				$query = $this->db->get_where('tb_order_atk', array('id_order_atk' => $id));
				return $query->row();
			}
		}


	/*=== Sarpras ===*/

		public function getAtkSarpras(){
				$this->db->order_by('created_date','desc');
				$query = $this->db->get_where('tb_order_atk', array('status'=>'Kepsek','divisi'=>'PEMBELIAN'));
				return $query->result();
		}
		

	/*=== Direktur ===*/
		public function barangItemDitolak($iditem,$data){
			$this->db->where('id_order_item', $iditem);
			return $this->db->update('tb_order_item', $data);
		}

		public function atkItemDitolak($iditem,$data){
			$this->db->where('id_order_atk_item', $iditem);
			return $this->db->update('tb_order_atk_item', $data);
		}



	/*=== Pembelian ===*/
		public function no_po(){
	        $this->db->select('Left(tb_po.no_po,5) as kode ',false);
	        $this->db->order_by('no_po', 'desc');
	        $this->db->limit(1);
	        $query = $this->db->get('tb_po');
	        if($query->num_rows()<>0){
	            $data = $query->row();
	            $kode = intval($data->kode)+1;
	        }else{
	            $kode = 1;
	        }
	        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
	        $kodejadi  = $kodemax."/PO/PB-PT";
	        return $kodejadi;
	    }

		public function getBarangPembelian(){
			$this->db->order_by('created_date', 'ASSC');
			$this->db->join('tb_order_item', 'tb_order_item.id_order_barang = tb_order_barang.id_order_barang');
			$query = $this->db->get('tb_order_barang');
			return $query->result();
		}

		public function getBarangPo($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role')=='User' ) {
					$this->db->where('nama', $this->session->userdata('username'));
				}
				$this->db->order_by('no_po','DESC');
				$query = $this->db->get('tb_po');
				return $query->result();
			}else{
				$this->db->order_by('no_permintaan','DESC');
				$query = $this->db->get_where('tb_po', array('id_po' => $id));
				return $query->row();
			}
		}

		public function getPoDetail($id = FALSE){
			if ($id === FALSE) {
				$this->db->join('tb_po_item', 'tb_po_item.id_po_item = tb_po_item.id_po');
				$query = $this->db->get('tb_po');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_po', array('id_po' => $id));
				return $query->row();
			}
		}

		public function getPoItem($id){

			$this->db->join('tb_order_item', 'tb_order_item.id_order_item = tb_po_item.id_order_item');
			$query = $this->db->get_where('tb_po_item', array('id_po' => $id));
			return $query->result();
		}

		public function simpanPo($dataPembelianBarang){
			$this->db->insert('tb_po', $dataPembelianBarang);
		}

		public function simpanPoItem($dataPoItem){
			$this->db->insert_batch('tb_po_item',$dataPoItem);
		}

		public function updatePo($dataPembelianBarang){
			$this->db->insert('tb_po', $dataPembelianBarang);
		}

		public function updatePoItem($dataPoItem){
			$this->db->insert_batch('tb_po_item',$dataPoItem);
		}

		public function terima_barang($id,$dataPo){
			$this->db->where('id_po', $id);
			return $this->db->update('tb_po', $dataPo);
		}

		public function po_batal($id,$dataPo){
			$this->db->where('id_po', $id);
			return $this->db->update('tb_po', $dataPo);
		}

		public function po_batal_item($iditem,$data){
			$this->db->where('id_order_item', $iditem);
			return $this->db->update('tb_order_item', $data);
		}

	
	/*=== Toko ===*/
		public function no_atk(){
	        $this->db->select('Left(tb_po_atk.no_atk,5) as kode ',false);
	        $this->db->order_by('no_atk', 'desc');
	        $this->db->limit(1);
	        $query = $this->db->get('tb_po_atk');
	        if($query->num_rows()<>0){
	            $data = $query->row();
	            $kode = intval($data->kode)+1;
	        }else{
	            $kode = 1;
	        }
	        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
	        $kodejadi  = $kodemax."/PO/PA-PT";
	        return $kodejadi;
	    }

		public function getBarangPembelianAtk(){
			$this->db->order_by('created_date', 'ASSC');
			$this->db->join('tb_order_atk_item', 'tb_order_atk_item.id_order_atk = tb_order_atk.id_order_atk');
			$query = $this->db->get('tb_order_atk');
			return $query->result();
		}

		public function getBarangPoAtk($id = FALSE){
			if ($id === FALSE) {
				if ($this->session->userdata('role')=='User' ) {
					$this->db->where('nama', $this->session->userdata('username'));
				}
				$this->db->order_by('no_atk','DESC');
				$query = $this->db->get('tb_po_atk');
				return $query->result();
			}else{
				$this->db->order_by('no_atk','DESC');
				$query = $this->db->get_where('tb_po_atk', array('id_po_atk' => $id));
				return $query->row();
			}
		}

		public function getPoAtkDetail($id = FALSE){
			if ($id === FALSE) {
				$this->db->join('tb_po_atk_item', 'tb_po_atk_item.id_po_atk_item = tb_po_atk_item.id_po_atk');
				$query = $this->db->get('tb_po_atk');
				return $query->result();
			}else{
				$query = $this->db->get_where('tb_po_atk', array('id_po_atk' => $id));
				return $query->row();
			}
		}

		public function getPoAtkItem($id){

			$this->db->join('tb_order_atk_item', 'tb_order_atk_item.id_order_atk_item = tb_po_atk_item.id_order_atk_item');
			$query = $this->db->get_where('tb_po_atk_item', array('id_po_atk' => $id));
			return $query->result();
		}

		public function simpanPoAtk($dataPembelianAtk){
			$this->db->insert('tb_po_atk', $dataPembelianAtk);
		}

		public function simpanPoAtkItem($dataPoItem){
			$this->db->insert_batch('tb_po_atk_item',$dataPoItem);
		}

		


	}