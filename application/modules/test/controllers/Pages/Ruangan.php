<?php
/*
    @Copyright Arya45
    @Class Name : Data Ruangan
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Ruangan extends CI_Controller {
	    // Load Model
	    public function __construct(){
	         parent::__construct();
	         $this->load->model('login_model', 'login');
	    }

	    // List Ruangan
	    public function index() {

	        // Autoload Model 
	        $site       = $this->mConfig->list_config();
	        $ruangan       = $this->mRuangan->getRuangan();

	        $data = array(  'title'     => 'Data Ruangan',
	        				'menu'		=> 'data-ruangan',
	                        'site'      => $site,
	                        'ruangan'   => $ruangan,
	                        'isi'       => 'pages/ruangan/index');
	        $this->load->view('public/layout/wrapper',$data);
	    }

	    // Add Ruangan
	    public function add(){

				$site       = $this->mConfig->list_config();
				$data_sdm      	= $this->mUser->getUserSdm();

				$data = array(  'title'     => 'Data Ruangan',
		        				'menu'		=> 'data-ruangan-add',
		                        'site'      => $site,
		                        'data_sdm' 	=> $data_sdm,
		                        'isi'       => 'pages/ruangan/add');
				date_default_timezone_set('Asia/Jakarta');

				$this->form_validation->set_rules('no_ruangan', '<strong>No Ruangan</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('public/layout/wrapper',$data);

				} else {
					$data = array(
						'no_ruangan' => $this->security->xss_clean($this->input->post('no_ruangan')),
						'nama_ruangan' => $this->security->xss_clean($this->input->post('nama_ruangan')),
						'id_karyawan' => $this->security->xss_clean($this->input->post('id_karyawan')),
						'lantai' => $this->security->xss_clean($this->input->post('lantai')),
						'gedung' => $this->security->xss_clean($this->input->post('gedung')),
						'keterangan' => $this->security->xss_clean($this->input->post('keterangan')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->mRuangan->addRuangan($data);
					$this->session->set_flashdata('msg', 'process-success');
					redirect('data-ruangan');
				}

	    }

	  // Edit Ruangan
	  public function edit($id){
			
				$site       		= $this->mConfig->list_config();
				$data_ruangan      	= $this->mRuangan->getRuangan($id);
				$data = array(  		'title'     	=> 'Data User ',
						        				'menu'			=> 'rungan-edit',
		                        'site'      	=> $site,
		                        'data_ruangan'	=> $data_ruangan,
		                        'isi'      		=> 'pages/ruangan/edit');

				$this->form_validation->set_rules('no_ruangan', '<strong>No. Ruangan</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				}else{
					$data = array(
						'no_ruangan' => $this->security->xss_clean($this->input->post('no_ruangan')),
						'nama_ruangan' => $this->security->xss_clean($this->input->post('nama_ruangan')),
						'id_karyawan' => $this->security->xss_clean($this->input->post('id_karyawan')),
						'lantai' => $this->security->xss_clean($this->input->post('lantai')),
						'gedung' => $this->security->xss_clean($this->input->post('gedung')),
						'keterangan' => $this->security->xss_clean($this->input->post('keterangan')),
					);
					$this->mRuangan->editRuangan($id,$data);

					$this->session->set_flashdata('msg', 'process-success');
					if ($this->session->userdata('role')=='Super Admin' ||$this->session->userdata('role')=='Sarpras'){
						redirect('data-ruangan');
					}else{
						redirect('dashboard');
					}
					
				}
		}

		// List Ruangan
    public function detail($id) {
        // Autoload Model 
        $site       								= $this->mConfig->list_config();
        $data_ruangan      					= $this->mRuangan->getRuangan($id);
        $data_ruangan_detail      	= $this->mRuangan->getRuanganDetail($id);
        $data_ruangan_item      		= $this->mRuangan->getRuanganDetailItem($id);
        $data_sdm      							= $this->mUser->getUserSdm();
        $data = array(  'title'     					=> 'Data Ruangan Detail',
				        				'menu'								=> 'data-ruangan-detail',
                        'site'      					=> $site,
                        'data_ruangan'  			=> $data_ruangan,
                        'data_ruangan_detail' => $data_ruangan_detail,
                        'data_ruangan_item' 	=> $data_ruangan_item,
                        'data_sdm' 	=> $data_sdm,
                        'isi'       					=> 'pages/ruangan/detail');
        $this->load->view('public/layout/wrapper',$data);
    }

     public function detail_pic($id) {
        // Autoload Model 
        $site       								= $this->mConfig->list_config();
        $data_ruangan      					= $this->mRuangan->getRuangan($id);
        $data_ruangan_detail      	= $this->mRuangan->getRuanganDetail($id);
        $data_ruangan_item      		= $this->mRuangan->getRuanganDetailItem($id);
        $data_sdm      							= $this->mUser->getUserSdm();
        $data = array(  'title'     					=> 'Data Ruangan Detail',
				        				'menu'								=> 'data-ruangan-detail',
                        'site'      					=> $site,
                        'data_ruangan'  			=> $data_ruangan,
                        'data_ruangan_detail' => $data_ruangan_detail,
                        'data_ruangan_item' 	=> $data_ruangan_item,
                        'data_sdm' 	=> $data_sdm,
                        'isi'       					=> 'pages/ruangan/detail_pic');
        $this->load->view('public/layout/wrapper',$data);
    }

	  public function print_ruangan($id) {
			$site       								= $this->mConfig->list_config();
	    $data_ruangan_print      		= $this->mRuangan->getRuanganPrint($id);
	    $data_ruangan_print_item 		= $this->mRuangan->getRuanganPrintItem($id);
			
			$data = array(  		'title'     								=> 'Data Ruangan Detail ',
	        								'menu'											=> 'print-ruangan-detail',
	                        'site'      								=> $site,
	                        'data_ruangan_print' 				=> $data_ruangan_print,
	                        'data_ruangan_print_item' 	=> $data_ruangan_print_item,
	                        
	                     
	                        // 'isi'       => 'pages/barang/detail'
	                        );
			$this->load->view('public/layout/header-print',$data);
			$this->load->view('pages/ruangan/print',$data);
		}

	}