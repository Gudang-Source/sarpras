<?php
/*
    @Copyright Arya45
    @Class Name : Dashboard
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MX_Controller {
	    // Load Model
	    public function __construct(){
	         parent::__construct();
	         $this->load->model('login_model', 'login');
	    }

	    // Page Dashboard
	    public function index() {

	    	// Autoload Model 
	        $site       			= $this->mConfig->list_config();
	        // Proses Model
	        $get_barang      		= $this->mProses->getBarang();
	        $get_atk      			= $this->mProses->get_atk();
	        $get_atk_kepunit     	= $this->mProses->getAtkKepunit();
	        $get_atk_sarpras     	= $this->mProses->getAtkSarpras();
	        $get_barang_pembelian	= $this->mProses->getBarangPembelian();
	        $get_atk_pembelian		= $this->mProses->getBarangPembelianAtk();
	        // Status Model
	        $kepunit_barang 		= $this->mStats->stats_barang_kepunit();
	        $kepunit_atk 			= $this->mStats->stats_atk_kepunit();
	        $sarpras_barang 		= $this->mStats->stats_barang_sarpras();
	        $sarpras_atk 			= $this->mStats->stats_atk_sarpras();
	        $direktur_barang		= $this->mStats->stats_barang_direktur();
	        $direktur_atk  			= $this->mStats->stats_atk_direktur();
	        $pembelian_barang		= $this->mStats->stats_barang_pembelian();
	        $pembelian_atk  		= $this->mStats->stats_atk_pembelian();
	        $toko_barang			= $this->mStats->stats_barang_toko();
	        $toko_atk		  		= $this->mStats->stats_atk_toko();

	        $data = array(  'title'     			=> 'Dashboard - ',
	        								'menu'					=> 'dashboard',
	                        'site'      			=> $site,
	                        'get_barang'      		=> $get_barang,
	                        'get_barang_pembelian'  => $get_barang_pembelian,
	                        'get_atk_pembelian'  	=> $get_atk_pembelian,
	                        'get_atk'    	  		=> $get_atk,
	                        'get_atk_kepunit'    	=> $get_atk_kepunit,
	                        'get_atk_sarpras'    	=> $get_atk_sarpras,
	                        // Status
	                        'kepunit_barang'      	=> $kepunit_barang,
	                        'kepunit_atk'	      	=> $kepunit_atk,
	                        'sarpras_barang'      	=> $sarpras_barang,
	                        'sarpras_atk'	      	=> $sarpras_atk,
	                        'direktur_barang'      	=> $direktur_barang,
	                        'direktur_atk'	      	=> $direktur_atk,
	                        'pembelian_barang'      => $pembelian_barang,
	                        'pembelian_atk'	      	=> $pembelian_atk,
	                        'toko_barang' 		    => $toko_barang,
	                        'toko_atk'	      		=> $toko_atk,

	                        'total_barang'	  		=> $this->mStats->totalBarang(),

	                        'isi'       			=> 'public/home/dashboard');
	        
	        $this->load->view('public/layout/wrapper',$data);
	    }
	  
	}