<?php
/*
    @Copyright Arya45
    @Class Name : Groupsub
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Groupsub extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('pages/barang_model', 'barang');
			// $this->load->model('user_model', 'user');
			
		}

		public function index() {
			$site  		= $this->mConfig->list_config();
			$no_group	= $this->mGroupsub->noGroup();
			$datagroup  = $this->mGroupsub->getGroup();
			$datasub  	= $this->mGroupsub->getSub();
			
			$data = array(	'title'		=> 'Groupsub',
							'menu'		=> 'data-groupsub',
							'no_group'	=>  $no_group,
							'datagroup'	=>  $datagroup,
							'datasub'	=>  $datasub,
							'isi'		=> 'pages/groupsub/index');
			$this->load->view('public/layout/wrapper',$data);		
		}


		public function add_group(){

			$this->form_validation->set_rules('nama_group', '<strong>Nama Barang</strong>', 'required|is_unique[tb_barang_group.nama_group]');

			date_default_timezone_set('Asia/Jakarta');
			if ($this->form_validation->run() == FALSE) {
			
				$data = array(	'nama_group' => $this->security->xss_clean($this->input->post('nama_group')),
								'no_group' => $this->security->xss_clean($this->input->post('no_group')),
								'created_date' => date('d-m-Y / H:i:s') );
				$this->mGroupsub->setGroup($data);

				$this->session->set_flashdata('msg', 'process-success');
				redirect('data-groupsub');
			}
		}


		public function edit($id){
			$data['menu'] = 'barang';
			$data['nama_satuan'] = $this->barang->getDropDown();
			$data['satuan'] = $this->barang->getSatuanDetail($id);
			$data['barang'] = $this->barang->getBarangDetail($id);
			$data['barangitem'] = $this->barang->getBarangItem($id);
			date_default_timezone_set('Asia/Jakarta');
			$this->form_validation->set_rules('subjek', '<strong>subjek</strong>', 'required');
			if ($this->form_validation->run() == FALSE) {
		        $this->load->view('header');
		        $this->load->view('menu',$data);
		        $this->load->view('pages/barang/edit', $data);
		        $this->load->view('footer');
			}else{
					if($this->session->userdata('role')=='User'){
							$status='Proses';
					}else{
							$status=$this->input->post('status_sarpras');
					}

					$dataOrderBarang = array(
						'subjek' => $this->security->xss_clean($this->input->post('subjek')),
						'id_user'=> $this->security->xss_clean($this->input->post('id_user')),
						'no_permintaan'=> $this->security->xss_clean($this->input->post('no_permintaan')),
						'status_sarpras' => $status,
						'nama'=> $this->security->xss_clean($this->input->post('nama')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->barang->setBarang($dataOrderBarang);

					$id_order_barang = $this->db->insert_id();
					$dataOrderItem = array();
					foreach($_POST['nama_barang'] AS $key => $val){
						$dataOrderItem[] = array(
						"id_order_barang" => $id_order_barang,
						"nama_barang" => $_POST['nama_barang'][$key],
						"id_barang_satuan" => $_POST['id_barang_satuan'][$key],
						"jumlah" => $_POST['jumlah'][$key],
						"keterangan" => $_POST['keterangan'][$key]
						);
					}
	            $this->barang->setBarang2($dataOrderItem);
	            $this->session->set_flashdata('msg', 'process-success');
	            redirect('pages/barang');
			}
		}


		public function delete_group($id){
	    	$this->mGroupsub->deleteGroup($id);

	        $this->session->set_flashdata('msg', 'process-success');
	        redirect('data-groupsub');
		}

		/*-- Subgroup --*/
		public function add_subgroup(){

			$this->form_validation->set_rules('nama_subgroup', '<strong>Nama Barang</strong>', 'required|is_unique[tb_barang_subgroup.nama_subgroup]');

			date_default_timezone_set('Asia/Jakarta');
			if ($this->form_validation->run() == FALSE) {

			} else {
				$data = array(	
					'nama_subgroup' => $this->security->xss_clean($this->input->post('nama_subgroup')),
					'id_barang_group' => $this->security->xss_clean($this->input->post('group')),
					// 'no_subgroup' => $this->security->xss_clean($this->input->post('no_subgroup')),
					// 'created_date' => date('d-m-Y / H:i:s') 
				);
				$this->mGroupsub->setSub($data);

				$this->session->set_flashdata('msg', 'process-success');
				redirect('data-groupsub');
			}
		}

	}

/* End of file Barang.php */
/* Location: ./application/modules/backend/pengajuan/controllers/Barang.php */