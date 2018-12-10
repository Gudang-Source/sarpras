<?php
/*
    @Copyright Arya45
    @Class Name : Template
*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Template extends MX_Controller {
        // Load Model
        public function __construct(){
            parent::__construct();
            $this->load->model('template/Config_model', 'mConfig');
            $this->load->model('template/Stats_model', 'mStats');
        }

        // Main Page Error
        public function error() {
            
            $data = array(  'title'     => 'Page Not Found - Error 404',
                            'site'      => $this->mConfig->list_config(),
                            'menu'      => 'error404',
                            'isi'       => 'error404');
            $this->load->view('layout/wrapper',$data);
        }

        // Page Dashboard
        public function dashboard() {

            $data = array(  'title'                => 'Dashboard',
                            'menu'                 => 'dashboard',
                            'site'                 => $this->mConfig->list_config(),
                            'total_barang'         => $this->mStats->totalBarang(),
                            'isi'                  => 'dashboard');
            $this->load->view('layout/wrapper',$data);
        }

        // Page General
        public function general() {
            
            $this->form_validation->set_rules('nameweb','Nama Website','required');
                $this->form_validation->set_rules('email','Email','valid_email');

            if ($this->form_validation->run() === FALSE) {
                $data = array(  
                                'menu'  => 'Config',
                                'site'  => $this->mConfig->list_config(),
                                'isi'   => 'general');
                
                $this->load->view('template/layout/wrapper',$data);

            } else {

                    $i = $this->input;
                    $data = array(
                        'id_config'         => $i->post('id_config'),
                        'nameweb'           => $this->security->xss_clean($i->post('nameweb')),
                        'email'                 => $this->security->xss_clean($i->post('email')),
                        'no_telp'           => $this->security->xss_clean($i->post('no_telp')),
                        'no_telp2'          => $this->security->xss_clean($i->post('no_telp2')),
                        'fax'                   => $this->security->xss_clean($i->post('fax')),
                        'address'           => $this->security->xss_clean($i->post('address')),
                        'city'                  => $this->security->xss_clean($i->post('city')),
                        'zip_code'          => $this->security->xss_clean($i->post('zip_code')),
                        'tahunajar'         => $this->security->xss_clean($i->post('tahunajar')),
                        // Social Media & Meta Text Keywords
                        'facebook'          => $this->security->xss_clean($i->post('facebook')),
                        'twitter'           => $this->security->xss_clean($i->post('twitter')),
                        'keywords'          => $this->security->xss_clean($i->post('keywords')),
                        'metatext'          => $this->security->xss_clean($i->post('metatext')),
                        'maps'                  => $this->security->xss_clean($i->post('maps')),
                        'footer_text'   => $this->security->xss_clean($i->post('footer_text'))

                    );              
                    $this->mConfig->editConfig($data);

                $this->session->set_flashdata('msg', 'process-success');
                redirect(base_url('dashboard'));
            }
        }


        // Config Logo
        public function logo() {

            $site       = $this->mConfig->list_config();
            $v          = $this->form_validation;
            $v->set_rules('id_config','ID Config','required');

            if($v->run()) {
                $config['upload_path']          = './dist/uploads/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = '3000'; // KB           
                // $this->load->library('upload', $config); "Not Work"
                $this->upload->initialize($config);

                if(! $this->upload->do_upload('logo')) {
                    $data = array(  
                                    'menu'    => 'Config Logo',
                                    'site'    => $site,
                                    'error'   => $this->upload->display_errors(),
                                    'isi'     => 'logo');

                    $this->load->view('template/layout/wrapper',$data);
                } else {
                        $upload_data                                    = array('uploads' =>$this->upload->data());
                        // Image Editor
                        $config['image_library']            = 'gd2';
                        $config['source_image']             = './dist/uploads/image/'.$upload_data['uploads']['file_name']; 
                        $config['new_image']                    = './dist/uploads/image/thumbs/';
                        $config['create_thumb']             = TRUE;
                        $config['maintain_ratio']       = TRUE;
                        $config['width']                            = 250; // Pixel
                        $config['height']                       = 250; // Pixel
                        $config['thumb_marker']             = '';
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        // Hapus gambar lama
                        unlink('./dist/uploads/image/'.$site['logo']);
                        unlink('./dist/uploads/image/thumbs/'.$site['logo']);
                        // End hapus gambar lama
                        
                        // Masuk ke database
                        $i = $this->input;
                        $data = array(  
                                        'id_config'     => $i->post('id_config'),
                                        'logo'          => $upload_data['uploads']['file_name']
                                    );

                        $this->mConfig->editConfig($data);

                    $this->session->set_flashdata('msg', 'process-success');
                    redirect(base_url('template/logo'));

                }
            }

            $data = array(  
                            'menu'      => 'Config Logo',
                            'site'      => $this->mConfig->list_config(),
                            'isi'       => 'logo');

            $this->load->view('template/layout/wrapper',$data);

        }

        // Config Icon
        public function icon() {
            $site   = $this->mConfig->list_config();
            $v          = $this->form_validation;
            $v->set_rules('id_config','ID Config','required');

            if($v->run()) {
        
                $config['upload_path']          = './dist/uploads/image/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             =   '3000'; // KB           
                // $this->load->library('upload', $config); "Not Work"
                $this->upload->initialize($config);

                if(! $this->upload->do_upload('icon')) {
                        
                    $data = array(  
                                    'menu'     => 'Config Icon',
                                    'site'     => $site,
                                    'error'    => $this->upload->display_errors(),
                                    'isi'      => 'icon');

                    $this->load->view('template/layout/wrapper',$data);

                } else {

                        $upload_data                    = array('uploads' =>$this->upload->data());
                        // Image Editor
                        
                        $config['image_library']        = 'gd2';
                        $config['source_image']         = './dist/uploads/image/'.$upload_data['uploads']['file_name']; 
                        $config['new_image']            = './dist/uploads/image/thumbs/';
                        $config['create_thumb']         = TRUE;
                        $config['maintain_ratio']       = TRUE;
                        $config['width']                = 250; // Pixel
                        $config['height']               = 250; // Pixel
                        $config['thumb_marker']         = '';
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();

                        // Hapus gambar lama
                        unlink('./dist/uploads/image/'.$site['icon']);
                        unlink('./dist/uploads/image/thumbs/'.$site['icon']);
                        // End hapus gambar lama
                        
                        // Masuk ke database
                        $i = $this->input;
                        $data = array(  
                                        'id_config'     => $i->post('id_config'),
                                        'icon'          => $upload_data['uploads']['file_name']);
                        $this->mConfig->editConfig($data);

                    $this->session->set_flashdata('msg', 'process-success');
                    redirect(base_url('template/icon'));
                }
            }
            $data = array(  
                    'menu'   => 'Config Icon',
                    'site'   => $this->mConfig->list_config(),
                    'isi'    => 'icon');
            $this->load->view('template/layout/wrapper',$data);
        }

       


    }