<?php
/*
    @Copyright Arya45
    @Class Name : Data Satuan
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Satuan extends MX_Controller {
	    // Load Model
	    public function __construct(){
	         parent::__construct();
	         $this->load->model('login_model', 'login');
	    }

	    // List Satuan
	    public function index() {

	        // Autoload Model 
	        $site       = $this->mConfig->list_config();
	        $satuan     = $this->mSatuan->getSatuan();
	        $data = array(  'title'     => 'Data Satuan',
	        				'menu'		=> 'data-satuan',
	                        'site'      => $site,
	                        'satuan'    => $satuan,
	                        'isi'       => 'pages/satuan/index');
	        $this->load->view('public/layout/wrapper',$data);
	    }

	    // Add Satuan
	    public function add(){

				$site       = $this->mConfig->list_config();
				$data_sdm   = $this->mUser->getUserSdm();

				$data = array(  'title'     => 'Data Satuan',
		        						'menu'			=> 'data-satuan-add',
		                    'site'      => $site,
		                    'isi'       => 'pages/satuan/add');
				date_default_timezone_set('Asia/Jakarta');

				$this->form_validation->set_rules('nama_satuan', '<strong>Nama Satuan</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('public/layout/wrapper',$data);

				} else {
					$data = array(
						'nama_satuan' => $this->security->xss_clean($this->input->post('nama_satuan')),
						'created_date' => date('Y-m-d H:i:s')
					);
					$this->mSatuan->setSatuan($data);
					$this->session->set_flashdata('msg', 'process-success');
					redirect('data-satuan');
				}

	    }

	    // Edit Satuan
	  public function edit($id){
			$this->form_validation->set_rules('password', '<strong>password</strong>', 'required');
			$this->form_validation->set_rules('repassword', '<strong>Re-type password</strong>', 'required|matches[password]');
			$this->form_validation->set_message('matches', '<i class="fa fa-exclamation-triangle"></i> %s field does not match with %s field');

			$site       = $this->mConfig->list_config();
			$satuan      	= $this->mSatuan->getSatuan($id);
			$data = array(  'title'     => 'Data Satuan ',
	        				'menu'		=> 'data-satuan-edit',
	                        'site'      => $site,
	                        'satuan'      => $satuan,
	                        'isi'       => 'pages/satuan/edit');
			
			if ($this->form_validation->run() == FALSE) {

				$this->load->view('public/layout/wrapper',$data);

			} else {
				if (!$this->input->post('password')) {
					$data = array(
						'nik' => $this->security->xss_clean($this->input->post('nik')),
						'satuanname' => $this->security->xss_clean($this->input->post('satuanname')),
						'divisi' => $this->security->xss_clean($this->input->post('divisi')),
						'email' => $this->security->xss_clean($this->input->post('email'))
					);	
				}else{
					$data = array(
						'nik' => $this->security->xss_clean($this->input->post('nik')),
						'satuanname' => $this->security->xss_clean($this->input->post('satuanname')),
						'divisi' => $this->security->xss_clean($this->input->post('divisi')),
						'email' => $this->security->xss_clean($this->input->post('email')),
						'password' => $this->security->xss_clean(md5(sha1($this->input->post('password')))),
						'block' => $this->security->xss_clean($this->input->post('block')),
						'role' => $this->security->xss_clean($this->input->post('role'))
					);
				}
				$this->mSatuan->editSatuan($id, $data);

				$this->session->set_flashdata('msg', 'process-success');
				if ($this->session->satuandata('role')=='Super Admin') {
					redirect('data-satuan');
				}else{
					redirect('dashboard');
				}
				
			}
		}

		//Aktif Satuan
		public function aktif($id){
			$data = array(
							'block' => 'n'
						);
	    	$this->mSatuan->aktifSatuan($id,$data);
	        $this->session->set_flashdata('msg', 'process-success');
	        
	        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		//Block Satuan
		public function block($id){
			$data = array(
							'block' => 'y'
						);
	    	$this->mSatuan->blockSatuan($id,$data);
	        $this->session->set_flashdata('msg', 'process-success');
	        
	        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function delete($id){
	    	$this->mSatuan->deleteSatuan($id);

	        $this->session->set_flashdata('msg', 'process-success');
	        redirect('data-satuan');
		}
	  
	}