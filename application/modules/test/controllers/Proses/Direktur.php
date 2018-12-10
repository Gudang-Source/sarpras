<?php
/*
    @Copyright Arya45
    @Class Name : Direktur Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Direktur extends MX_Controller {

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
								'menu'		=> 'proses-direktur-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/direktur/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View Barang
			public function view_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-direktur-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/direktur/view-barang');
				$this->load->view('public/layout/wrapper',$data);

			}

			//Proses Edit Barang
			public function edit_barang($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-direktur-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/direktur/edit-barang');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
					if($this->session->userdata('role')=='Direktur'){
							$status_direktur='Approval';
							$status_pembelian='Proses';
							$status_barang='Pembelian';
							$status='Pembelian';			
					}else{
							$status_direktur=$this->input->post('status_direktur');
							$status_pembelian=$this->input->post('status_pembelian');
							$status_barang=$this->input->post('status_barang');
							$status=$this->input->post('status');
					}
					$dataOrderBarang = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'status_direktur' => $status_direktur,
						'status_pembelian' => $status_pembelian,
						'status' => $status,					
						'note_direktur' => $this->security->xss_clean($this->input->post('note_direktur')),
						'direktur_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->edit_barang($id,$dataOrderBarang);

		            $id_order_item = $this->input->post('id_order_item');
		            $result = array();
						foreach($id_order_item AS $key => $val){
						 $result[] = array(
						  "id_order_item" => $id_order_item[$key],
						  "status_barang"  => $status_barang,
						  "status"  => $status
						 );
						}
						$this->db->update_batch('tb_order_item', $result, 'id_order_item');
		             
		            $this->session->set_flashdata('msg', 'process-success');
		            redirect('proses/direktur-list-barang');
				}

			}

			//Proses Barang Item Ditolak
			public function ditolak_barang($iditem){
				$data = array(
					'status_barang' => 'Ditolak'
				);
		    	$this->mProses->barangItemDitolak($iditem,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        
		        redirect(''. $_SERVER['HTTP_REFERER']);
			}

			//Proses Batal Barang
			public function batal_barang($id){
				$data = array(
								'status' => 'Dibatalkan'
							);
		    	$this->barang->unit_batal($id,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        redirect('proses/direktur-list-barang');
		        // redirect(''. $_SERVER['HTTP_REFERER']);
			}

		/* ATK */
			//Pages List ATK
			public function list_atk() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-direktur-list',
								'site'		=> $site,
								'barang'	=> $barang,
								'isi'		=> 'sistem/proses/direktur/list-atk');
				$this->load->view('public/layout/wrapper',$data);		
			}

			//Proses View Barang
			public function view_atk($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-direktur-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/direktur/view-atk');
				$this->load->view('public/layout/wrapper',$data);

			}

			//Proses Edit Barang
			public function edit_atk($id){
			    $site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-direktur-edit',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/direktur/edit-atk');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('subjek', '<strong>Subjek</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
					if($this->session->userdata('role')=='Direktur'){
							$status_toko='Proses';
							$status_direktur='Approval';
							$status='Toko';
										
					}else{
							$status_toko=$this->input->post('status_toko');
							$status_direktur=$this->input->post('status_direktur');
							$status=$this->input->post('status');
					}
					$dataOrderAtk = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'status_toko' => $status_toko,
						'status_direktur' => $status_direktur,
						'status' => $status,					
						'note_direktur' => $this->security->xss_clean($this->input->post('note_direktur')),
						'direktur_date' => date('Y-m-d H:i:s')
					);
					$this->mProses->edit_atk($id,$dataOrderAtk);

		            $id_order_atk_item = $this->input->post('id_order_atk_item');
		            $result = array();
						foreach($id_order_atk_item AS $key => $val){
						 $result[] = array(
						  "id_order_atk_item" => $id_order_atk_item[$key],
						  "status_barang" =>$_POST['status_barang'][$key]
						 );
						}
					$this->db->update_batch('tb_order_atk_item', $result, 'id_order_atk_item');
		          
		        $this->session->set_flashdata('msg', 'process-success');
		       	redirect('proses/direktur-list-barang');
				}

			}

			//Proses Barang Item Ditolak
			public function ditolak_atk($iditem){
				
				$data = array(
					'status_barang' => 'Ditolak'
				);
		    	$this->mProses->atkItemDitolak($iditem,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        
		        redirect(''. $_SERVER['HTTP_REFERER']);
			}

			//Proses Batal ATK
			public function batal_atk($id){
				$data = array(
								'status' => 'Dibatalkan'
							);
		    	$this->barang->unit_batal($id,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        redirect('proses/direktur-list-atk');
		        // redirect(''. $_SERVER['HTTP_REFERER']);
			}

	}


	