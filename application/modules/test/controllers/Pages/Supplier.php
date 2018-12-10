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
	        $user       = $this->mSatuan->getSatuan();
	        $data = array(  'title'     => 'Data Satuan',
	        				'menu'		=> 'data-user',
	                        'site'      => $site,
	                        'user'      => $user,
	                        'isi'       => 'pages/user/index');
	        $this->load->view('public/layout/wrapper',$data);
	    }

	    // Add Satuan
	    public function add(){

	    	$this->form_validation->set_rules('password', '<strong>password</strong>', 'required|min_length[5]');
			$this->form_validation->set_rules('repassword', '<strong>Re-type password</strong>', 'required|matches[password]');
			$this->form_validation->set_rules('email', '<strong>Email</strong>', 'required|is_unique[tb_admin.email]');
			$this->form_validation->set_rules('nik', '<strong>NIK</strong>', 'required|is_unique[tb_admin.nik]');
			$this->form_validation->set_message('is_unique', '<i class="fa fa-exclamation-triangle"></i> %s is already taken by another user');
			$this->form_validation->set_message('matches', '<i class="fa fa-exclamation-triangle"></i> %s field does not match with %s field');
			$site       = $this->mConfig->list_config();
			$data = array(  'title'     => 'Data Satuan',
	        				'menu'		=> 'data-user-add',
	                        'site'      => $site,
	                        'isi'       => 'pages/user/add');
			date_default_timezone_set('Asia/Jakarta');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('public/layout/wrapper',$data);
			} else {
				$data = array(
					'nik' => $this->security->xss_clean($this->input->post('nik')),
					'divisi' => $this->security->xss_clean($this->input->post('divisi')),
					'fullname' => $this->security->xss_clean($this->input->post('fullname')),
					'username' => $this->security->xss_clean($this->input->post('fullname')),
					'email' => $this->security->xss_clean($this->input->post('email')),
					'password' => $this->security->xss_clean(md5(sha1($this->input->post('password')))),
					'block' => $this->security->xss_clean($this->input->post('block')),
					'role' => $this->security->xss_clean($this->input->post('role')),
					'date_created' => date('Y-m-d H:i:s')
				);
				$this->mSatuan->addSatuan($data);

				$this->session->set_flashdata('msg', 'process-success');
				redirect('data-user');
			}

	    }

	    // Edit Satuan
	    public function edit($id){
			$this->form_validation->set_rules('password', '<strong>password</strong>', 'required');
			$this->form_validation->set_rules('repassword', '<strong>Re-type password</strong>', 'required|matches[password]');
			$this->form_validation->set_message('matches', '<i class="fa fa-exclamation-triangle"></i> %s field does not match with %s field');

			$site       = $this->mConfig->list_config();
			$user      	= $this->mSatuan->getSatuan($id);
			$data = array(  'title'     => 'Data Satuan ',
	        				'menu'		=> 'data-user-edit',
	                        'site'      => $site,
	                        'user'      => $user,
	                        'isi'       => 'pages/user/edit');
			
			if ($this->form_validation->run() == FALSE) {

				$this->load->view('public/layout/wrapper',$data);

			} else {
				if (!$this->input->post('password')) {
					$data = array(
						'nik' => $this->security->xss_clean($this->input->post('nik')),
						'username' => $this->security->xss_clean($this->input->post('username')),
						'divisi' => $this->security->xss_clean($this->input->post('divisi')),
						'email' => $this->security->xss_clean($this->input->post('email'))
					);	
				}else{
					$data = array(
						'nik' => $this->security->xss_clean($this->input->post('nik')),
						'username' => $this->security->xss_clean($this->input->post('username')),
						'divisi' => $this->security->xss_clean($this->input->post('divisi')),
						'email' => $this->security->xss_clean($this->input->post('email')),
						'password' => $this->security->xss_clean(md5(sha1($this->input->post('password')))),
						'block' => $this->security->xss_clean($this->input->post('block')),
						'role' => $this->security->xss_clean($this->input->post('role'))
					);
				}
				$this->mSatuan->editSatuan($id, $data);

				$this->session->set_flashdata('msg', 'process-success');
				if ($this->session->userdata('role')=='Super Admin') {
					redirect('data-user');
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
	  
	}