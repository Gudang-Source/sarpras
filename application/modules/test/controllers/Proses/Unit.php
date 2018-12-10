<?php
/*
    @Copyright Arya45
    @Class Name : Unit Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Unit extends MX_Controller {

		// Load Model
		public function __construct(){
			parent::__construct();
			$this->load->model('proses_model', 'barang');
		}
		/* Barang */
			// Pages List Barang
			public function list_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarang();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/unit/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View Barang
			public function view_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/unit/view-barang');
				$this->load->view('public/layout/wrapper',$data);

			}

			//Proses Edit Barang
			public function edit_barang($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/unit/edit-barang');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				} else {
						$dataOrderBarang = array(
							'subjek' => $this->security->xss_clean($this->input->post('subjek')),
							'edit_date' => date('Y-m-d H:i:s')
						);
						$this->mProses->edit_barang($id,$dataOrderBarang);

			            $id_order_item = $this->input->post('id_order_item');
			            $result = array();
							foreach($id_order_item AS $key => $val){
							 $result[] = array(
							  "id_order_item" => $id_order_item[$key],
							  "nama_barang"  => $_POST['nama_barang'][$key],
							  "jumlah"  => $_POST['jumlah'][$key],
							  "satuan"  => $_POST['satuan'][$key],
							  "keterangan"  => $_POST['keterangan'][$key]
							 );
							}
						$this->db->update_batch('tb_order_item', $result, 'id_order_item');
			            
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/unit-list-barang');
				}

			}

			//Proses Print Barang
			public function print_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-print',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem);
				$this->load->view('public/layout/header-print',$data);
				$this->load->view('sistem/proses/unit/print-barang',$data);

			}

			//Proses Batal Barang
			public function batal_barang($id){
				$data = array(
								'status' => 'Dibatalkan'
							);
		    	$this->barang->unit_batal($id,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        redirect('proses/unit-list-barang');
		        // redirect(''. $_SERVER['HTTP_REFERER']);
			}

		/* ATK */
			// Pages List ATK
			public function list_atk() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/unit/list-atk');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View ATK
			public function view_atk($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$atkitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-view',
								'site'		=> $site,
								'atk'	=> $atk,
								'atkitem'	=> $atkitem,
								'isi'		=> 'sistem/proses/unit/view-atk');
				$this->load->view('public/layout/wrapper',$data);
			}

			//Proses Edit Barang
			public function edit_atk($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/unit/edit-atk');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
					
					$dataOrderAtk = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'edit_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->edit_atk($id,$dataOrderAtk);

		            $id_order_atk_item = $this->input->post('id_order_atk_item');
		            $result = array();
						foreach($id_order_atk_item AS $key => $val){
						 $result[] = array(
						  "id_order_atk_item" => $id_order_atk_item[$key],
						  "nama_barang"  => $_POST['nama_barang'][$key],
						  "jumlah"  => $_POST['jumlah'][$key],
						  "satuan"  => $_POST['satuan'][$key],
						  "keterangan"  => $_POST['keterangan'][$key]
						 );
						}
					$this->db->update_batch('tb_order_atk_item', $result, 'id_order_atk_item');
		               
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/unit-list-atk');
				}

			}


		/* Barang */
			// Pages List Barang
			public function list_service() {
				$site  		= $this->mConfig->list_config();
				$service  		= $this->mProses->getBarang();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-unit-list',
								'site'		=> $site,
								'service'	=> $service,
								'isi'		=> 'sistem/proses/unit/list-service');
				$this->load->view('public/layout/wrapper',$data);		
			}


	}