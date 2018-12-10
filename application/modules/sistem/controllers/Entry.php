<?php
/*
    @Copyright Arya45
    @Class Name : Entry Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Entry extends MX_Controller {

		// Load Model
		public function __construct(){
			parent::__construct();
			$this->load->model('Entry_model', 'barang');
			$this->load->model('Entry_model', 'atk');
			$this->load->model('Entry_model', 'mBarang');
			$this->load->model('Proses_model', 'mProses');
			$this->load->model('barang/Satuan_model', 'mSatuan');
		}

		// Main Page Entry Barang & ATK
		public function index() {
			$site  		= $this->mConfig->list_config();
			
			$data = array(	'title'		=> 'Entry',
							'menu'		=> 'entry',
							'site'		=> $site,
							'isi'		=> 'sistem/entry/main-page');
			$this->load->view('template/layout/wrapper',$data);		
		}

		// Entry Barang
		public function barang() {
			$site  		= $this->mConfig->list_config();
			$satuan  	= $this->mSatuan->list_satuan();
			$data = array(	'title'		=> 'Entry',
							'menu'		=> 'entry-barang',
							'site'		=> $site,
							'satuan'	=> $satuan,
							'isi'		=> 'sistem/entry/barang');
			date_default_timezone_set('Asia/Jakarta');
			$this->form_validation->set_rules('subjek', '<strong>subjek</strong>', 'required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('template/layout/wrapper',$data);


			} else {
					// insert data 
		            $namafile = url_title(strtolower($this->input->post('userfile')));
		            $config['upload_path']          = './dist/uploads/';
		            $config['allowed_types']        = 'png|jpg|pdf|doc|jpeg|docx';
		            $config['overwrite']        	= true;
		            $config['file_name']            = $namafile;
		            $this->upload->initialize($config);
		            
					if($this->session->userdata('role')=='Kepunit' || $this->session->userdata('role')=='Kepsek' ||$this->session->userdata('role')=='Sarpras' || $this->session->userdata('role')=='Direktur' ||$this->session->userdata('role')=='Pembelian' ||$this->session->userdata('role')=='Toko' ||$this->session->userdata('role')=='User' || $this->session->userdata('role')=='Super Admin' ){
							$status_unit='Proses';
							$status_kepsek='On Progress';
							$status='Kepsek';
					}else{
							$status_unit=$this->input->post('status_unit');
							$status_kepsek=$this->input->post('status_kepsek');
							$status=$this->input->post('status');
					}
					$this->upload->do_upload('userfile');
					$data = array('upload_data' => $this->upload->data());
					
					$dataOrderBarang = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'id_user'=> $this->security->xss_clean($this->input->post('id_user')),
						'no_permintaan'=> $this->security->xss_clean($this->input->post('no_permintaan')),
						'file' => $this->upload->data('file_name'),
						'status_unit' => $status_unit,
						'status_kepsek' => $status_kepsek,
						'status' => $status,
						'nik'=> $this->security->xss_clean($this->input->post('nik')),
						'nama'=> $this->security->xss_clean($this->input->post('nama')),
						'divisi'=> $this->security->xss_clean($this->input->post('divisi')),
						'tahunajar'=> $this->security->xss_clean($this->input->post('tahunajar')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->barang->setBarang($dataOrderBarang);

					$id_order_barang = $this->db->insert_id();
					$dataOrderItem = array();
					foreach($_POST['nama_barang'] AS $key => $val){

						$dataOrderItem[] = array(
						"id_order_barang" => $id_order_barang,
						"nama_barang" => $_POST['nama_barang'][$key],
						"satuan" => $_POST['id_satuan'][$key],
						"jumlah" => $_POST['jumlah'][$key],
						"keterangan" => $_POST['keterangan'][$key]
						);
					}
		            $this->barang->setBarang2($dataOrderItem);

	            $this->session->set_flashdata('msg', 'process-success');
	            redirect('dashboard');
			}
		}

		// Entry ATK
		public function atk() {
			$site  		= $this->mConfig->list_config();
			$satuan  	= $this->mSatuan->list_satuan();
			$data = array(	'title'		=> 'Entry',
							'menu'		=> 'entry-atk',
							'site'		=> $site,
							'satuan'		=> $satuan,
							'isi'		=> 'sistem/entry/atk');
			date_default_timezone_set('Asia/Jakarta');
			$this->form_validation->set_rules('subjek', '<strong>subjek</strong>', 'required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('template/layout/wrapper',$data);

			} else {

				// insert data 
	            $namafile = url_title(strtolower($this->input->post('userfile')));
	            $config['upload_path']          = './dist/uploads/';
	            $config['allowed_types']        = 'png|jpg|pdf|doc|jpeg|docx';
	            $config['overwrite']        	= true;
	            $config['file_name']            = $namafile;
	            $this->upload->initialize($config);

				if($this->session->userdata('role')=='Kepunit' || $this->session->userdata('role')=='Kepsek' ||$this->session->userdata('role')=='Sarpras' || $this->session->userdata('role')=='Direktur' ||$this->session->userdata('role')=='Pembelian' ||$this->session->userdata('role')=='Toko' ||$this->session->userdata('role')=='User' || $this->session->userdata('role')=='Super Admin'){
						$status_unit='Proses';
						$status_kepsek='On Progress';
						$status='Kepsek';
				}else{
						$status_unit=$this->input->post('status_unit');
						$status_kepsek=$this->input->post('status_kepsek');
						$status=$this->input->post('status');
				}
				$this->upload->do_upload('userfile');
				$data = array('upload_data' => $this->upload->data());
				$dataOrderAtk = array(
					'subjek' => $this->security->xss_clean($this->input->post('subjek')),
					'id_user'=> $this->security->xss_clean($this->input->post('id_user')),
					'no_order_atk'=> $this->security->xss_clean($this->input->post('no_order_atk')),
					'file' => $this->upload->data('file_name'),
					'status' => $status,
					'status_unit' => $status_unit,
					'status_kepsek' => $status_kepsek,
					'nik'=> $this->security->xss_clean($this->input->post('nik')),
					'nama'=> $this->security->xss_clean($this->input->post('nama')),
					'divisi'=> $this->security->xss_clean($this->input->post('divisi')),
					'tahunajar'=> $this->security->xss_clean($this->input->post('tahunajar')),
					'created_date' => date('Y-m-d H:i:s')
				);
				$this->atk->simpanAtk($dataOrderAtk);

				$id_order_atk = $this->db->insert_id();
				$dataOrderItem = array();
				foreach($_POST['nama_barang'] AS $key => $val){

					$dataOrderItem[] = array(
					"id_order_atk" => $id_order_atk,
					"nama_barang" => $_POST['nama_barang'][$key],
					"satuan" => $_POST['id_satuan'][$key],
					"jumlah" => $_POST['jumlah'][$key],
					"keterangan" => $_POST['keterangan'][$key]
					);
				}
	            $this->atk->simpanAtkDetail($dataOrderItem);

            $this->session->set_flashdata('msg', 'process-success');
            redirect('dashboard');
			} 
		}

		// Service
		public function service() {
			
			$data = array(	'title'			=> 'Entry',
							'menu'			=> 'service',
							'site'			=> $this->mConfig->list_config(),
							'satuan'  		=> $this->mSatuan->list_satuan(),
							'barang'  		=> $this->mBarang->getDataBarang(),
							'isi'			=> 'sistem/entry/service');
			$this->load->view('template/layout/wrapper',$data);		
		}


		public function pembelian_barang() {
				$site  			= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangPembelian();
				$nopo  			= $this->mProses->no_po();
				$supplier 		= $this->mSupplier->getSupplier();
				
				$data = array(	'title'			=> 'Proses',
								'menu'			=> 'proses-pembelian-list',
								'site'			=> $site,
								'barang'		=> $barang,
								'nopo'			=> $nopo,
								'supplier'		=> $supplier,
								'isi'			=> 'sistem/entry/pembelian');

				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('perihal', '<strong>perihal</strong>', 'required');
				$this->form_validation->set_rules('nama_supplier', '<strong>Pilih Supplier</strong>', 'required');

				if ($this->form_validation->run() == FALSE) {

					$this->load->view('template/layout/wrapper',$data);

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


		



	}
