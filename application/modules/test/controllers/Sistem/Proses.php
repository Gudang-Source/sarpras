<?php
/*
    @Copyright Arya45
    @Class Name : Proses Barang & ATK
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Proses extends MX_Controller {

		/* Load Model */
		public function __construct(){
			parent::__construct();
			$this->load->model('proses_model', 'barang');
		}

		/* Pages List Barang */
			public function list_barang() {
				$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarang();
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-barang',
								'site'		=> $site,
								'barang'		=> $barang,
								'isi'		=> 'sistem/proses/list-barang');
				$this->load->view('public/layout/wrapper',$data);		
			}

		/* Proses View */
			//Barang
			public function view_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-view',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/view-barang');
				$this->load->view('public/layout/wrapper',$data);
			}

			//ATK
			public function view_atk($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-view',
								'site'		=> $site,
								'barang'		=> $barang,
								'barangitem'	=> $barangitem,
								'isi'		=> 'sistem/proses/view-atk');
				$this->load->view('public/layout/wrapper',$data);
			}

		/* Proses Print */ 
			//Barang
			public function print_barang($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->getBarangDetail($id);
				$barangitem 		= $this->mProses->getBarangItem($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-print-barang',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem);
				$this->load->view('public/layout/header-print',$data);
				$this->load->view('sistem/proses/print-barang',$data);

			}

			//ATK
			public function print_atk($id){
		     	$site  		= $this->mConfig->list_config();
				$barang  		= $this->mProses->get_atk_detail($id);
				$barangitem 		= $this->mProses->get_atk_item($id);
				
				$data = array(	'title'		=> 'Proses',
								'menu'		=> 'proses-print-atk',
								'site'		=> $site,
								'barang'	=> $barang,
								'barangitem'	=> $barangitem);
				$this->load->view('public/layout/header-print',$data);
				$this->load->view('sistem/proses/print-atk',$data);

			}

	}