<?php
/*
    @Copyright Arya45
    @Class Name : Kepunit Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Kepunit extends MX_Controller{

		// Load Model
		public function __construct(){
			parent::__construct();
			$this->load->model('proses_model', 'barang');
		}

		// Pages List Barang
			public function list_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangKepunit();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/kepunit/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View Barang
			public function view_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/kepunit/view-barang');
				$this->load->view('public/layout/wrapper',$data);
			}

			//Proses Edit Barang
			public function edit_barang($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/kepunit/edit-barang');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
						if($this->session->userdata('role')=='Kepsek'){
								$status_unit='Approval';
								$status_kepsek='Approval';
								$status_sarpras='Proses';
								$status='Sarpras';			
						}else{
								$status_unit=$this->input->post('status_unit');
								$status_kepsek=$this->input->post('status_kepsek');
								$status_sarpras=$this->input->post('status_sarpras');
								$status=$this->input->post('status');
						}
						$dataOrderBarang = array(
							'subjek' => $this->security->xss_clean($this->input->post('subjek')),
							'status_unit' => $status_unit,
							'status_kepsek' => $status_kepsek,
							'status_sarpras' => $status_sarpras,
							'status' => $status,					
							'note_kepsek' => $this->security->xss_clean($this->input->post('note_kepsek')),
							'kepsek_date' => date('Y-m-d H:i:s')
						);
						$this->mProses->edit_barang($id,$dataOrderBarang);
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/kepunit-list-barang');
				}
			}


		// Pages List ATK
			public function list_atk() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getAtkKepunit();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/kepunit/list-atk');
				$this->load->view('public/layout/wrapper',$data);		
			}

			public function list_atk_kepunitsarpras() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getAtkKepunitSarpras();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/kepunit/list-atk-kepunitsarpras');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View ATK
			public function view_atk($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$atkitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-view',
								'site'		=> $site,
								'atk'	=> $atk,
								'atkitem'	=> $atkitem,
								'isi'		=> 'sistem/proses/kepunit/view-atk');
				$this->load->view('public/layout/wrapper',$data);
			}

			//Proses Edit ATK
			public function edit_atk($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-kepunit-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/kepunit/edit-atk');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
					if($this->session->userdata('role')=='Kepsek' || $this->session->userdata('role')=='Sarpras'){
							$status_unit='Approval';
							$status_kepsek='Approval';
							$status_direktur='Proses';
							$status='Direktur';			
					}else{
							$status_unit=$this->input->post('status_unit');
							$status_kepsek=$this->input->post('status_kepsek');
							$status_direktur=$this->input->post('status_direktur');
							$status=$this->input->post('status');
					}
					$dataOrderAtk = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'status_unit' => $status_unit,
						'status_kepsek' => $status_kepsek,
						'status_direktur' => $status_direktur,
						'status' => $status,					
						'note_kepsek' => $this->security->xss_clean($this->input->post('note_kepsek')),
						'kepsek_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->edit_atk($id,$dataOrderAtk);

		            $id_order_atk_item = $this->input->post('id_order_atk_item');
		            $result = array();
						foreach($id_order_atk_item AS $key => $val){
						 $result[] = array(
						  "id_order_atk_item" => $id_order_atk_item[$key],
						  "nama_barang" => $_POST['nama_barang'][$key]

						 );
						}
						$this->db->update_batch('tb_order_atk_item', $result, 'id_order_atk_item');
		            
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/kepunit-list-atk');
				}
			}



	}