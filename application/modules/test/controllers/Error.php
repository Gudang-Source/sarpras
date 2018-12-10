<?php
/*
	@Copyright Arya45
	@Class Name : Error
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Error extends MX_Controller {

		// Main Page Error
		public function index() {
			// Autoload Model 
			$site  		= $this->mConfig->list_config();
			
			$data = array(	'title'		=> 'Error 404',
							'site'		=> $site,
							'menu'		=> 'error404',
							'isi'		=> 'public/home/error404');
			$this->load->view('public/layout/wrapper',$data);
		}
	}
