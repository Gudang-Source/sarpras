<?php
/*
    @Copyright Arya45
    @Class Name : Login
*/
    defined('BASEPATH') OR exit('No direct script access allowed');
    // if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

    class Login extends MX_Controller {
        // Load Model
        public function __construct(){
            parent::__construct();
            $this->load->model('login_model', 'login');
            $this->load->model('template/Config_model', 'mConfig');
        }

        // Main Page Login

        public function index(){
            if(!$this->session->userdata('id_admin')){
                $data = array(  'title'     => 'Login',
                                'site'      => $this->mConfig->list_config(),
                                'menu'      => 'login');
                $this->load->view('login/index',$data);
            } else {
                redirect('dashboard');
            }
        }

        //Check Login
        public function check_login(){

            /*$response = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LfZHy4UAAAAAKDpfEv9wmwkKDdp1j8nF-_F7w_q&response='.$this->input->post('g-recaptcha-response')));
            if ($response->success == true) {*/
                $data = array(
                    'email' => $this->security->xss_clean($this->input->post('email')),
                    'password' => $this->security->xss_clean(md5(sha1($this->input->post('password'))))
                );

                $check = $this->login->act_login($data);
                if($check != NULL){
                        if($check->block=='n'){
                            $usersession = array(
                                'id_admin' => $check->id_admin,
                                'nik'   => $check->nik,
                                'fullname' => $check->fullname,
                                'username' => $check->username,
                                'divisi' => $check->divisi,
                                'email' => $check->email,
                                'block' => $check->block,
                                'role' => $check->role
                            );
                            $this->session->set_userdata($usersession);
                            redirect('dashboard');
                            } else {
                                $this->session->set_flashdata('msg', 'failed-1');
                                redirect('login');
                            }
                    } else {
                        $this->session->set_flashdata('msg', 'failed-2');
                        redirect('login');
                    }
                /*}
                else{
                    $this->session->set_flashdata('msg', 'failed-3');
                    redirect('backend');
                }*/
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url(''));
        }

    }