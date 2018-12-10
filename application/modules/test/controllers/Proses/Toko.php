<?php
/*
    @Copyright Arya45
    @Class Name : Toko Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Toko extends MX_Controller {

		// Load Model
		public function __construct(){
			parent::__construct();
		}

		// Pages List Pembelian Barang
			public function list_pembelian_atk() {
				$site  			= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangPembelianAtk();
				$no_atk  			= $this->mProses->no_atk();
				$supplier 		= $this->mSupplier->getSupplier();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-pembelian-atkt',
								'site'		=> $site,
								'barang'	=> $barang,
								'no_atk'	=> $no_atk,
								'supplier'	=> $supplier,
								'isi'		=> 'sistem/proses/toko/list-pembelian-atk');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('perihal', '<strong>perihal</strong>', 'required');
				$this->form_validation->set_rules('nama_supplier', '<strong>Pilih Supplier</strong>', 'required');

				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{

        		
					$dataPembelianAtk = array(
						'no_atk' => $this->security->xss_clean($this->input->post('no_atk')),
						'perihal'=> $this->security->xss_clean($this->input->post('perihal')),
						'nama_supplier'=> $this->security->xss_clean($this->input->post('nama_supplier')),
						'alamat_supplier'=> $this->security->xss_clean($this->input->post('alamat_supplier')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->simpanPoAtk($dataPembelianAtk);

					$id_po_atk = $this->db->insert_id();
					$dataPoItem = array();
					foreach($_POST['id_order_atk_item'] AS $key => $val){

						$dataPoItem[] = array(
						'id_po_atk' => $id_po_atk,
						'id_order_atk_item' => $_POST['id_order_atk_item'][$key],
						'id_order_atk' => $_POST['id_order_atk'][$key],
						'nama_barang' => $_POST['nama_barang'][$key],
						'divisi' => $_POST['divisi'][$key],
						'satuan' => $_POST['satuan'][$key],
						'keterangan' => $_POST['keterangan'][$key],
						'jumlah' => $_POST['jumlah'][$key]
						);
					}
					$this->mProses->simpanPoAtkItem($dataPoItem);

					$id_order_atk_item = $this->input->post('id_order_atk_item');
		            $result = array();
						foreach($id_order_atk_item AS $key => $val){
						 $result[] = array(
						  "id_order_atk_item" => $id_order_atk_item[$key],
						  "status_barang"  => $_POST['status_barang'][$key],
						  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
						 );
						}
					$this->db->update_batch('tb_order_atk_item', $result, 'id_order_atk_item');

					$id_order_atk = $this->input->post('id_order_atk');
		            $result = array();
						foreach($id_order_atk AS $key => $val){
						 $result[] = array(
						  "id_order_atk" => $id_order_atk[$key],
						  "status"  => $this->security->xss_clean($this->input->post('status'))[$key]
						 );
						}
					$this->db->update_batch('tb_order_atk', $result, 'id_order_atk');

					$this->session->set_flashdata('msg', 'process-success');
					redirect('laporan/pembelian-laporan-atk');
				}

			}

		// Laporan Pembelian / PO
			public function laporan_pembelian_atk() {
				$site  		= $this->mConfig->list_config();
				$po  	= $this->mProses->getBarangPoAtk();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'laporan-pembelian-atk' ,
								'site'		=> $site,
								'po'	=> $po,
								'isi'		=> 'sistem/proses/toko/laporan-pembelian-atk');
				$this->load->view('public/layout/wrapper',$data);		
			}

		//Print PO
			public function print_po_atk($id){


		     	$site  		= $this->mConfig->list_config();
				$podetail  		= $this->mProses->getPoAtkDetail($id);
				$poitem 		= $this->mProses->getPoAtkItem($id);
				// $supplier 		= $this->mProses->getSupplier($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-print-po',
								'site'		=> $site,
								'podetail'	=> $podetail,
								'poitem'	=> $poitem);
				$this->load->view('public/layout/header-print',$data);
				$this->load->view('sistem/proses/toko/print-po-atk',$data);

			}
		

	}