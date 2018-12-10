<?php
	/*
    @Copyright Arya45
    @Class Name : Status Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Stats_model extends CI_Model {
		
		public function __construct() {
			$this->load->database();
		}

		// Status Task Barang
			public function stats_barang_kepunit() {
				$query = $this->db->get_where('tb_order_barang',array('status'=>'Kepsek'));
				return $query->num_rows();	
			}

			public function stats_barang_sarpras() {
				$query = $this->db->get_where('tb_order_barang',array('status'=>'Sarpras'));
				return $query->num_rows();	
			}

			public function stats_barang_direktur() {
				$query = $this->db->get_where('tb_order_barang',array('status'=>'Direktur'));
				return $query->num_rows();	
			}

			public function stats_barang_pembelian() {
				$query = $this->db->get_where('tb_order_item',array('status'=>'Pembelian'));

				return $query->num_rows();				
			}

			public function stats_barang_toko() {
				$query = $this->db->get_where('tb_order_atk_item',array('status'=>'Toko'));
				return $query->num_rows();	
			}


		// Status Task ATK
			public function stats_atk_kepunit() {
				$query = $this->db->get_where('tb_order_atk',array('status'=>'Kepunit'));
				return $query->num_rows();	
			}

			public function stats_atk_sarpras() {
				$query = $this->db->get_where('tb_order_atk',array('status'=>'Kepsek','divisi'=>'PEMBELIAN'));
				return $query->num_rows();	
			}

			public function stats_atk_direktur() {
				$query = $this->db->get_where('tb_order_atk',array('status'=>'Direktur'));
				return $query->num_rows();	
			}

			public function stats_atk_pembelian() {
				$query = $this->db->get_where('tb_order_atk',array('status'=>'Pembelian'));
				return $query->num_rows();	
			}

			public function stats_atk_toko() {
				$query = $this->db->get_where('tb_order_atk_item',array('status_barang'=>'Toko'));
				return $query->num_rows();	
			}
			

			
			public function totalBarang() {
				$query = $this->db->get_where('tb_barang_item');
				return $query->num_rows();	
			}		

	}
/* End of file Stats_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Stats_model.php */