<?php
/*
    @Copyright Arya45
    @Class Name : Laporan Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Laporan extends MX_Controller {

		/* Load Model */
		public function __construct(){
			parent::__construct();
			
		}

		/* Pages List Barang */
			public function list_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarang();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'laporan-barang',
								'site'		=> $site,
								'barang'		=> $barang,
								'isi'		=> 'sistem/laporan/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}


	}