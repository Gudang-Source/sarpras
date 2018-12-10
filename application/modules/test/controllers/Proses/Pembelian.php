<?php
/*
    @Copyright Arya45
    @Class Name : Pembelian Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pembelian extends MX_Controller {

		// Load Model
		public function __construct(){
			parent::__construct();
			$this->load->model('proses_model', 'barang');
		}

		// Pages List Pembelian Barang
			public function list_pembelian_barang() {
				$site  			= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangPembelian();
				$nopo  			= $this->mProses->no_po();
				$supplier 		= $this->mSupplier->getSupplier();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'nopo'		=> $nopo,
								'supplier'	=> $supplier,
								'isi'		=> 'sistem/proses/pembelian/list-pembelian-barang');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('perihal', '<strong>perihal</strong>', 'required');
				$this->form_validation->set_rules('nama_supplier', '<strong>Pilih Supplier</strong>', 'required');

				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{

        		
					$dataPembelianBarang = array(
						'no_po' => $this->security->xss_clean($this->input->post('no_po')),
						'perihal'=> $this->security->xss_clean($this->input->post('perihal')),
						'nama_supplier'=> $this->security->xss_clean($this->input->post('nama_supplier')),
						'alamat_supplier'=> $this->security->xss_clean($this->input->post('alamat_supplier')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->simpanPo($dataPembelianBarang);

					$id_po = $this->db->insert_id();
					$dataPoItem = array();
					foreach($_POST['id_order_item'] AS $key => $val){

						$dataPoItem[] = array(
						'id_po' => $id_po,
						'id_order_item' => $_POST['id_order_item'][$key],
						'id_order_barang' => $_POST['id_order_barang'][$key],
						'nama_barang' => $_POST['nama_barang'][$key],
						'divisi' => $_POST['divisi'][$key],
						'satuan' => $_POST['satuan'][$key],
						'keterangan' => $_POST['keterangan'][$key],
						'jumlah' => $_POST['jumlah'][$key]
						);
					}
					$this->mProses->simpanPoItem($dataPoItem);

					$id_order_item = $this->input->post('id_order_item');
		            $result = array();
						foreach($id_order_item AS $key => $val){
						 $result[] = array(
						  "id_order_item" => $id_order_item[$key],
						  "status_barang"  => $_POST['status_barang'][$key],
						  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
						 );
						}
					$this->db->update_batch('tb_order_item', $result, 'id_order_item');

					$id_order_barang = $this->input->post('id_order_barang');
		            $result = array();
						foreach($id_order_barang AS $key => $val){
						 $result[] = array(
						  "id_order_barang" => $id_order_barang[$key],
						  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
						 );
						}
					$this->db->update_batch('tb_order_barang', $result, 'id_order_barang');

					$this->session->set_flashdata('msg', 'process-success');
					redirect('laporan/pembelian-laporan-barang');
				}

			}

			// Laporan Pembelian / PO
			public function laporan_pembelian_barang() {
				$site  		= $this->mConfig->list_config();
				$po  		= $this->mProses->getBarangPo();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'laporan-pembelian-barang' ,
								'site'		=> $site,
								'po'		=> $po,
								'isi'		=> 'sistem/proses/pembelian/laporan-pembelian-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

			// Laporan Pembelian / PO Detail
			public function view_pembelian_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  	= $this->mProses->getBarangPo();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/pembelian/view-pembelian-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}


			//Terima Barang
			public function list_terima_barang() {
				$site  		= $this->mConfig->list_config();
				$po  			= $this->mProses->getBarangPo();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'laporan-pembelian-barang' ,
								'site'		=> $site,
								'po'	=> $po,
								'isi'		=> 'sistem/proses/pembelian/list-terima-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

			public function terima_barang($id) {
				$site  		= $this->mConfig->list_config();
				$podetail  		= $this->mProses->getPoDetail($id);
				$poitem 		= $this->mProses->getPoItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-terima',
								'podetail'	=> $podetail,
								'poitem'	=> $poitem,
								'isi'		=> 'sistem/proses/pembelian/terima-barang');
				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('perihal', '<strong>Perihal</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				} else {
						$dataPo = array(
							'perihal' => $this->security->xss_clean($this->input->post('perihal')),
							'note_pembelian' => $this->security->xss_clean($this->input->post('note_pembelian')),
							'status_po' => $this->security->xss_clean($this->input->post('status_po')),
							'terima_date' => date('Y-m-d H:i:s')
						);
						$this->mProses->terima_barang($id,$dataPo);

			            $id_po_item = $this->input->post('id_po_item');
			            $result = array();
							foreach($id_po_item AS $key => $val){
							 $result[] = array(
							  "id_po_item" => $id_po_item[$key],
							  "jumlah_terima"  => $_POST['jumlah_terima'][$key]
							 );
							}
						$this->db->update_batch('tb_po_item', $result, 'id_po_item');

						$id_order_item = $this->input->post('id_order_item');
			            $result = array();
							foreach($id_order_item AS $key => $val){
							 $result[] = array(
							  "id_order_item" => $id_order_item[$key],
							  "status_barang"  => $this->security->xss_clean($this->input->post('status_barang'))[$key],
							  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
							 );
							}
						$this->db->update_batch('tb_order_item', $result, 'id_order_item');

						$id_order_barang = $this->input->post('id_order_barang');
			            $result = array();
							foreach($id_order_barang AS $key => $val){
							 $result[] = array(
							  "id_order_barang" => $id_order_barang[$key],
							  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
							 );
							}
						$this->db->update_batch('tb_order_barang', $result, 'id_order_barang');
			            
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/list-terima-barang');
		        }
			}

			//Print PO
			public function print_po_barang($id){


		    $site  		= $this->mConfig->list_config();
				$podetail  		= $this->mProses->getPoDetail($id);
				$poitem 		= $this->mProses->getPoItem($id);
				// $supplier 		= $this->mProses->getSupplier($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-print-po',
								'site'		=> $site,
								'podetail'	=> $podetail,
								'poitem'	=> $poitem);
				$this->load->view('public/layout/header-print',$data);
				$this->load->view('sistem/proses/pembelian/print-po-barang',$data);

			}

			//Batal PO
			public function batal_po($id){
				$site  		= $this->mConfig->list_config();
				$podetail  		= $this->mProses->getPoDetail($id);
				$poitem 		= $this->mProses->getPoItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-batal',
								'podetail'	=> $podetail,
								'poitem'	=> $poitem,
								'isi'		=> 'sistem/proses/pembelian/batal-po');
				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('perihal', '<strong>Perihal</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				} else {
						$dataPo = array(
							'perihal' => $this->security->xss_clean($this->input->post('perihal')),
							'status_po' => $this->security->xss_clean($this->input->post('status_po')),
							'note_batal' => $this->security->xss_clean($this->input->post('note_batal')),
							'batal_date' => date('Y-m-d H:i:s')
						);
						$this->mProses->po_batal($id,$dataPo);

						$id_order_item = $this->input->post('id_order_item');
			            $result = array();
							foreach($id_order_item AS $key => $val){
							 $result[] = array(
							  "id_order_item" => $id_order_item[$key],
							  "status_barang"  => $this->security->xss_clean($this->input->post('status_barang'))[$key],
							  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
							 );
							}
						$this->db->update_batch('tb_order_item', $result, 'id_order_item');

						$id_order_barang = $this->input->post('id_order_barang');
			            $result = array();
							foreach($id_order_barang AS $key => $val){
							 $result[] = array(
							  "id_order_barang" => $id_order_barang[$key],
							  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
							 );
							}
						$this->db->update_batch('tb_order_barang', $result, 'id_order_barang');

			            
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('laporan/pembelian-laporan-barang');
		        }
			}

		//Pages List Barang
			public function list_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarang();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/pembelian/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

		//pages List ATK
			public function list_atk() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/pembelian/list-atk');
				$this->load->view('public/layout/wrapper',$data);		
			}




	}