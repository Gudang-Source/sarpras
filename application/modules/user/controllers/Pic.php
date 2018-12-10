<?php
/*
    @Copyright Arya45
    @Class Name : Data Pic
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pic extends MX_Controller {
	    // Load Model
	    public function __construct(){
	        parent::__construct();
	        $this->load->model('template/Config_model', 'mConfig');
	        $this->load->model('user/User_model', 'mUser');
	    }



	    // List Pic
	    public function index() {

	        // Autoload Model 
	        $site       = $this->mConfig->list_config();
	        $pic       	= $this->mUser->getUserSdm();
	        
	        $data = array(  'title'     => 'Data Pic',
	        				'menu'		=> 'data-pic',
	                        'site'      => $site,
	                        'pic'     	=> $pic,
	                        'isi'       => 'pic/index');
	        $this->load->view('template/layout/wrapper',$data);
	    }


	    public function list_pic() {

	        // Autoload Model 
	        $site       = $this->mConfig->list_config();
	        $pic       	= $this->mUser->getUser();
	        
	        $data = array(  'title'     => 'Data Pic',
	        				'menu'		=> 'data-pic',
	                        'site'      => $site,
	                        'pic'     	=> $pic,
	                        'isi'       => 'pic/list_pic');
	        $this->load->view('template/layout/wrapper',$data);
	    }

	    public function list_barang() {

	        // Autoload Model 
	        $site       			= $this->mConfig->list_config();
	        $detail_barang			= $this->mBarang->getDetailBarang();
	        $detail_item			= $this->mBarang->getDetailBarangItemPic();
	        
	        $data = array(  'title'     		=> 'Data Pic',
	        				'menu'				=> 'data-pic-barang',
	                        'site'      		=> $site,
	                        'detail_barang'   	=> $detail_barang,
	                        'detail_item'   	=> $detail_item,
	                        'isi'       		=> 'pic/list_barang');
	        $this->load->view('template/layout/wrapper',$data);
	    }

	    public function aktif($id){
				$data = array(
								'status' => 'aktif'
							);
		    	$this->mUser->aktifUser($id,$data);
		        $this->session->set_flashdata('msg', 'process-success');
		        
		        redirect(''. $_SERVER['HTTP_REFERER']);
			}

	    public function list_ruangan() {

	        // Autoload Model 
	        $site       = $this->mConfig->list_config();
	        $ruangan       = $this->mRuangan->getRuanganPic();
	        
	        $data = array(  'title'     => 'Data Barang',
	        				'menu'		=> 'data-pic-ruangan',
	                        'site'      => $site,
	                        'ruangan'   => $ruangan,
	                        'isi'       => 'pic/list_ruangan');
	        $this->load->view('template/layout/wrapper',$data);
	    }

	    


	    // Add Pic
	    public function add($id){

	    
				$site       = $this->mConfig->list_config();
				$data_pic   = $this->mUser->getUserSdm($id);

				$data = array( 		 'title'     	=> 'Data Pic',
		        								'menu'			=> 'data-pic-add',
		                        'site'      => $site,
		                        'data_pic' 	=> $data_pic,
		                        'isi'       => 'pic/add');
				date_default_timezone_set('Asia/Jakarta');
				$this->form_validation->set_rules('password', '<strong>password</strong>', 'required|min_length[5]');
				$this->form_validation->set_rules('repassword', '<strong>Re-type password</strong>', 'required|matches[password]');
				$this->form_validation->set_rules('email', '<strong>Email</strong>', 'required|is_unique[tb_admin.email]');
				$this->form_validation->set_rules('nik', '<strong>NIK</strong>', 'required|is_unique[tb_admin.nik]');
				$this->form_validation->set_message('is_unique', '<i class="font-icon font-icon-warning"></i> %s is already taken by another pic');
				$this->form_validation->set_message('matches', '<i class="font-icon font-icon-warning"></i> %s field does not match with %s field');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('template/layout/wrapper',$data);
				} else {
					$data = array(
						'nik'				 		=> $this->security->xss_clean($this->input->post('nik')),
						'divisi' 		 		=> $this->security->xss_clean($this->input->post('role')),
						'fullname' 			=> $this->security->xss_clean($this->input->post('fullname')),
						'username' 			=> $this->security->xss_clean($this->input->post('fullname')),
						'email' 				=> $this->security->xss_clean($this->input->post('email')),
						'password' 			=> $this->security->xss_clean(md5(sha1($this->input->post('password')))),
						'block' 				=> $this->security->xss_clean($this->input->post('block')),
						'role'					=> $this->security->xss_clean($this->input->post('role')),
						'date_created' 	=> date('Y-m-d H:i:s')
					);
					$this->mUser->addUser($data);

					$this->session->set_flashdata('msg', 'process-success');
					redirect('data-pic-list');
				}

	    }

	    // Edit Pic
	  public function edit($id){
			$this->form_validation->set_rules('password', '<strong>password</strong>', 'required');
			$this->form_validation->set_rules('repassword', '<strong>Re-type password</strong>', 'required|matches[password]');
			$this->form_validation->set_message('matches', '<i class="fa fa-exclamation-triangle"></i> %s field does not match with %s field');

			$site       = $this->mConfig->list_config();
			$pic      	= $this->mUser->getUser($id);
			$data = array(  		'title'     => 'Data Pic ',
	        								'menu'			=> 'data-pic-edit',
	                        'site'      => $site,
	                        'pic'      	=> $pic,
	                        'isi'       => 'pic/edit');
			
			if ($this->form_validation->run() == FALSE) {

				$this->load->view('template/layout/wrapper',$data);

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
				$this->mUser->editUser($id, $data);

				$this->session->set_flashdata('msg', 'process-success');
				if ($this->session->picdata('role')=='Super Admin') {
					redirect('data-pic');
				}else{
					redirect('dashboard');
				}
				
			}
		}


		//Block Pic
		public function block($id){
			$data = array(
							'block' => 'y'
						);
	    	$this->mUser->blockUser($id,$data);
	        $this->session->set_flashdata('msg', 'process-success');
	        
	        redirect(''. $_SERVER['HTTP_REFERER']);
		}
	  
	}