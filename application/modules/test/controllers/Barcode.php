<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barcode extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('zend'); 
        $this->load->helper('url','form');   
    }
 
    public function index() {
        $data=array('list_barcode'  => $this->M_modul->getId(),
                    'content'       => 'barcode');  
        $this->load->view('layout', $data); 
    }

    public function insert() {  
        $this->zend->load('Zend/Barcode'); 
        $barcode        = $this->input->post('id_barcode'); //nomor id barcode
        $imageResource  = Zend_Barcode::factory('code128', 'image', array('text'=>$barcode), array())->draw();
        $imageName      = $barcode.'.jpg';
        $imagePath      = 'assets/barcode/'; // penyimpanan file barcode
        imagejpeg($imageResource, $imagePath.$imageName); 
        $pathBarcode    = $imagePath.$imageName; //Menyimpan path image bardcode kedatabase
      
        $data=array('kode_barcode'  => $this->input->post('id_barcode'),
                    'image'         => $pathBarcode);
                    
        $this->M_modul->insert_barcode($data); 
        redirect('barcode');  
    }
 
}