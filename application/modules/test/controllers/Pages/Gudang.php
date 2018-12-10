<?php
/*
    @Copyright Arya45
    @Class Name : Gudang Inventaris
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Gudang extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			// $this->load->model('barang_model', 'mGudang');
			
		}

		public function barcode($kode){

			$height = isset($_GET['height']) ? mysql_real_escape_string($_GET['height']) : '20';	
			$width = isset($_GET['width']) ? mysql_real_escape_string($_GET['width']) : '1'; //1,2,3,dst
			$this->load->library('zend');
	        $this->zend->load('Zend/Barcode');
	 		$barcodeOPT = array(
			    'text' 		=> $kode, 
			    'barHeight'	=> $height, 
			    'factor'	=>$width,
			);
					
			$renderOPT = array();
			$render = Zend_Barcode::factory( 'code128', 'image', $barcodeOPT, $renderOPT)->render();
		}


		public function ambil_data(){

			$modul=$this->input->post('modul');
			$id=$this->input->post('id');

			if($modul=="subgroup"){
			echo $this->mGroupsub->subgroup($id);

			} else if ($modul=="nobarang"){
			echo $this->mGroupsub->subgroup($id);
			}
		}

/* ================================================  */
		public function index() {
			$site  		= $this->mConfig->list_config();
			$barang  	= $this->mBarang->getDataBarang();
			$group  	= $this->mGroupsub->getGroup();

			
			$data = array(	'title'		=> 'Barang',
							'menu'		=> 'data-barang',
							'barang'	=> $barang,
							'group'		=> $group,
							'isi'		=> 'pages/gudang/index');
			$this->load->view('public/layout/wrapper',$data);		
		}
		
		public function detail($id){

			$site       			= $this->mConfig->list_config();
			$barang  					= $this->mBarang->getDataBarang($id);
			$detail_barang		= $this->mBarang->getDetailBarang($id);
			$detail_item			= $this->mBarang->getDetailItem($id);
			// $group  	= $this->mBarang->getDataGroup($id);
			
			$data = array(  'title'     				=> 'Data Gudang Detail ',
	        						'menu'							=> 'data-barang-detail',
	                    'site'      				=> $site,
	                    'barang'    				=> $barang,
	                    'detail_barang'   	=> $detail_barang,
	                    'detail_item'    		=> $detail_item,
	                    // 'group'    	=> $group,
	                    'isi'       => 'pages/gudang/detail');

			$this->form_validation->set_rules('password', '<strong>password</strong>', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->load->view('public/layout/wrapper',$data);

			} else {
				
				$this->mUser->editUser($id, $data);

				$this->session->set_flashdata('msg', 'process-success');
				if ($this->session->userdata('role')=='Super Admin') {
					redirect('data-barang');
				}else{
					redirect('dashboard');
				}
				
			}
		}


	}

/* End of file Gudang.php */
/* Location: ./application/modules/backend/pengajuan/controllers/Gudang.php */