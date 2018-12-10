<?php
/*
    @Copyright Arya45
    @Class Name : Barang Inventaris
*/
defined('BASEPATH') OR exit('No direct script access allowed');

	class Barang extends CI_Controller{

			public function __construct(){
			parent::__construct();
			$this->load->model('pages/barangitem_model', 'mBarangItem');
			
		}

		public function barcode($kode){

			$height = isset($_GET['height']) ? mysql_real_escape_string($_GET['height']) : '20';	
			$width = isset($_GET['width']) ? mysql_real_escape_string($_GET['width']) : '1'; //1,2,3,dst
			$this->load->library('zend');
	        $this->zend->load('Zend/Barcode');
	 		$barcodeOPT = array(
			    'text' 		=> $kode, 
			    'barHeight'	=> $height, 
			    'factor'	=>$width,
			);
					
			$renderOPT = array();
			$render = Zend_Barcode::factory( 'code128', 'image', $barcodeOPT, $renderOPT)->render();
		}


		public function ambil_data(){

			$modul=$this->input->post('modul');
			$id=$this->input->post('id');

			if($modul=="subgroup"){
				echo $this->mGroupsub->subgroup($id);

			} else if ($modul=="nobarang"){
				echo $this->mGroupsub->subgroup($id);
			}
		}

		public function ajax_list(){
			$this->load->helper('url');

			$barang = $this->mBarang->get_datatables();
			$data = array();
			$no = $_POST['start'];
			
			foreach ($barang as $dataBarang) {
				$no++;
				$nama_barang = "<td>	$dataBarang->nama_barang <br> 
												<span class='label label-sm label-warning'>No Inventaris : 
												$dataBarang->no_group.$dataBarang->no_subgroup.$dataBarang->no_barang.$dataBarang->no_bulan.$dataBarang->no_tahun</span>
									</td>"; 
				$options = "<td align='center'>
												<div class='dropdown user-menu'>
			                    <button class='btn btn-sm btn-inline dropdown-toggle' id='dropdownMenu1' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			                      Option
			                    </button>
			                    <ul class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenu1'>
			                      
			                        <a class='dropdown-item' href='data-barang-detail/$dataBarang->id_barang'>
			                          <i class='fa fa-file-text-o'></i> Detail
			                        </a>
			                   
			                      
			                        <a class='dropdown-item' href='data-barang-edit/$dataBarang->id_barang'>
			                          <i class='fa fa-edit'></i> Edit
			                        </a>
			                   
			                      
			                        <a class='dropdown-item' href='data-barang-print-all/$dataBarang->id_barang'>
			                          <i class='fa fa-print'></i> Print Barcode/Label
			                        </a>
			                   
			                     <div class='dropdown-divider'></div>

			                        <a href='data-barang-delete/$dataBarang->id_barang' class='btn btn-danger-outline'><i class='fa fa-trash'></i> Delete</a>
			                      
			                   
			                    </ul>
			                  </div>
									</td>
									";

				$nama_group 		= "<td><b> $dataBarang->no_group </b> |	$dataBarang->nama_group </td>";
				$nama_subgroup 	= "<td><b> $dataBarang->no_subgroup </b> |	$dataBarang->nama_subgroup </td>";

				$row = array();
				$row[] = $no;
				$row[] = $nama_barang;
				$row[] = $nama_group;
				$row[] = $nama_subgroup;
				$row[] = $dataBarang->no_barang;
				$row[] = $dataBarang->merk;
				$row[] = $dataBarang->jumlah;
				$row[] = $dataBarang->tahunajar;
				$row[] = $options;
				$data[] = $row;
			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->mBarang->count_all(),
							"recordsFiltered" => $this->mBarang->count_filtered(),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}

		public function gudang_list(){
			$this->load->helper('url');

			$detail_item			= $this->mBarangItem->get_datatables();
			$data = array();
			$no = $_POST['start'];
			
			foreach ($detail_item as $detail) {

				$no++;
				$check =  	
					" <td class=''>
                <div class='checkbox checkbox-only'>
                  <input type='checkbox' name='id_barang_item[]' id='$detail->id_barang_item' value='$detail->id_barang_item'>
                  <label for='$detail->id_barang_item'></label>
                </div>
          </td>"; 
        $status =  	
					" <td class=''> <span class=''> Gudang</span> </td>";


				$row = array();
				$row[] = $check;
				$row[] = $detail->no_item;
				$row[] = $detail->nama_barang;
				$row[] = $detail->gudang;
				$data[] = $row;

			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->mBarangItem->count_all(),
							"recordsFiltered" => $this->mBarangItem->count_filtered(),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}

		public function gudang_it_list(){
			$this->load->helper('url');

			$detail_item			= $this->mBarangItem->get_datatables();
			$data = array();
			$no = $_POST['start'];
			
			foreach ($detail_item as $detail) {
				
				$no++;
				$check =  	
					" <td class=''>
                <div class='checkbox checkbox-only'>
                  <input type='checkbox' name='id_barang_item[]' id='$detail->id_barang_item' value='$detail->id_barang_item'>
                  <label for='$detail->id_barang_item'></label>
                </div>
          </td>"; 
        $status =   "<span class='btn btn-rounded btn-inline btn-success btn-sm'> $detail->gudang   </span>";
        if ($detail->gudang==-"IT"){
				$row = array();
				$row[] = $check;
				$row[] = $detail->no_item;
				$row[] = $detail->nama_barang;
				$row[] = $detail->gudang;
				$data[] = $row;
				}

			}

			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->mBarangItem->count_all(),
							"recordsFiltered" => $this->mBarangItem->count_filtered(),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}

/* ===================BARANG DETAIL=============================  */
		public function index() {
			$site  		= $this->mConfig->list_config();
			$barang  	= $this->mBarang->getDataBarang();

			$data = array(	'title'		=> 'Barang',
							'menu'		=> 'data-barang',
							'barang'	=> $barang,
							'isi'		=> 'pages/barang/index');
			$this->load->view('public/layout/wrapper',$data);
		}


		public function item_detail($id){

			$site       			= $this->mConfig->list_config();
			$detail_barang		= $this->mBarang->getDetailBarangItem($id);
			$detail_pic				= $this->mBarang->getDetailPic($id);

			$data = array(  'title'     		=> 'Data Barang Detail ',
	        						'menu'					=> 'data-barang-detail',
	                    'site'      		=> $site,
	                    'detail_barang' => $detail_barang,
	                    'detail_pic'		=> $detail_pic,
	                    'isi'       => 'pages/barang/item_detail');
			$this->load->view('public/layout/wrapper',$data);

		}

		public function print_barcode($id){
			$site       			= $this->mConfig->list_config();
			$detail_print			= $this->mBarang->getDetailBarangItem($id);

			$data = array(  'title'     		=> 'Data Barang Detail ',
	        								'menu'				=> 'data-barang-detail',
	                        'site'      		=> $site,
	                        'detail_barang'    	=> $detail_print
	                    );
			$this->load->view('pages/barang/print_barcode',$data);
		}

		public function print_barcode_all($id){
			$site       			= $this->mConfig->list_config();
			$barang  				= $this->mBarang->getDataBarang($id);
			$detail_barang			= $this->mBarang->getDetailBarang($id);
			$detail_item			= $this->mBarang->getDetailItem($id);
			$detail_print			= $this->mBarang->getDetailPrint($id);
			// $group  	= $this->mBarang->getDataGroup($id);

			$data = array(  'title'     		=> 'Data Barang Detail ',
	        				'menu'				=> 'data-barang-detail',
	                        'site'      		=> $site,
	                        'barang'    		=> $barang,
	                        'detail_barang'   	=> $detail_barang,
	                        'detail_item'    	=> $detail_item,
	                        'detail_print'    	=> $detail_print,
	                       	// 'group'    	=> $group,
	                        // 'isi'       => 'pages/barang/detail'
	                    );
			$this->load->view('pages/barang/print_barcode_all',$data);
		}

		public function add(){
			$site  			= $this->mConfig->list_config();
			$group		  	= $this->mGroupsub->group();
			$no_barang  	= $this->mBarang->no_barang();
			$satuan		  	= $this->mSatuan->list_satuan();

			$data = array(	'title'					=> 'Barang',
											'menu'					=> 'barang',
											'no_barang'			=> 	$no_barang,
											'group'					=> 	$group,
											'satuan'				=> 	$satuan,
											'isi'						=> 'pages/barang/add');

			$this->form_validation->set_rules('nama_barang', '<strong>Nama Barang</strong>', 'required|is_unique[tb_barang.nama_barang]');
			date_default_timezone_set('Asia/Jakarta');
			if ($this->form_validation->run() == FALSE) {

				$this->load->view('public/layout/wrapper',$data);

			} else {
				// insert data
		            $namafile = url_title(strtolower($this->input->post('userfile')));
		            $config['upload_path']          = './dist/uploads/barang_inventaris';
		            $config['allowed_types']        = 'png|jpg|pdf|doc|jpeg|docx';
		            $config['overwrite']        	= true;
		            $config['file_name']            = $namafile;
		            $this->upload->initialize($config);

		            /*if (condition) {
		            }*/

		            $this->upload->do_upload('userfile');
					$data = array('upload_data' => $this->upload->data());

					/*$id_barang_group = $this->input->post('group');
					$no_barang	= 'SELECT COUNT(no_barang)+1 as hasil FROM `tb_barang` WHERE id_barang_group=$idgroup AND id_barang_subgroup=$idsub';*/


					$dataBarang = array(
						'no_barang'	=> $this->security->xss_clean($this->input->post('no_barang')),
						'no_bulan'	=> $this->security->xss_clean($this->input->post('no_bulan')),
						'no_tahun'	=> $this->security->xss_clean($this->input->post('no_tahun')),
						'nama_barang'	=> $this->security->xss_clean($this->input->post('nama_barang')),
						'id_barang_group'	=> $this->security->xss_clean($this->input->post('group')),
						'id_barang_subgroup'=> $this->security->xss_clean($this->input->post('subgroup')),
						'merk'				=> $this->security->xss_clean($this->input->post('merk')),
						'type'				=> $this->security->xss_clean($this->input->post('type')),
						'satuan'			=> $this->security->xss_clean($this->input->post('satuan')),
						'jumlah'			=> $this->security->xss_clean($this->input->post('jumlah')),
						'gambar' 			=> $this->upload->data('file_name'),
						'tahunajar'			=> $this->security->xss_clean($this->input->post('tahunajar')),
						'tanggal_beli'		=> $this->security->xss_clean($this->input->post('tanggal_beli')),
						'keterangan'=> $this->security->xss_clean($this->input->post('keterangan')),
						'created_date' 		=> date('Y-m-d H:i:s')
					);
					$this->mBarang->simpanBarang($dataBarang);

					$id_barang 		= $this->db->insert_id();
					$nama_barang	= $this->input->post('nama_barang');
					$jumlah			= $this->input->post('jumlah');
					$dataBarangItem = array();
						 $no=0;
						for ($i=0; $i < $jumlah; $i++) { $no++;

							$dataBarangItem[] = array(
							"id_barang" 	=> $id_barang,
							'no_item'			=> str_pad($no,4,"0",STR_PAD_LEFT),
							'nama_barang'	=> $nama_barang
							);
						}
					$this->mBarang->simpanItem($dataBarangItem);
				$this->session->set_flashdata('msg', 'process-success');
	            redirect('data-barang');
			}
		}

		//Edit Barang
		public function edit($id){
			$this->form_validation->set_rules('nama_barang', '<strong>nama_barang</strong>', 'required');
			$this->form_validation->set_message('matches', '<i class="fa fa-exclamation-triangle"></i> %s field does not match with %s field');

			$data 	= array ( 	'title'     			=> 'Edit Barang ',
		        							'menu'						=> 'data-barang-edit',
		                      'site'      			=> $this->mConfig->list_config(),
		                      'detail_barang' 	=> $this->mBarang->getDetailBarang($id),
		                      // 'last_item'			 	=> $this->mBarang->getLastItem($id),
		                      'detail_item' 		=> $this->mBarang->getDetailItem($id),
		                      'dataGroup'				=> $this->mGroupsub->group(),
		                      'dataSatuan'			=> $this->mSatuan->list_satuan(),
		                      'isi'       			=> 'pages/barang/edit');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('public/layout/wrapper',$data);

			} else {
				$data = array(
					'nama_barang' => $this->security->xss_clean($this->input->post('nama_barang')),
					'username' => $this->security->xss_clean($this->input->post('username')),
					'divisi' => $this->security->xss_clean($this->input->post('divisi')),
					'email' => $this->security->xss_clean($this->input->post('email')),
					'password' => $this->security->xss_clean(md5(sha1($this->input->post('password')))),
					'block' => $this->security->xss_clean($this->input->post('block')),
					'role' => $this->security->xss_clean($this->input->post('role'))
				);
				$this->mBarang->editBarang($id, $data);

				$this->session->set_flashdata('msg', 'process-success');
				if ($this->session->userdata('role')=='Super Admin') {
					redirect('data-user');
				}else{
					redirect('dashboard');
				}
			}
		}

		public function aktif($id){
			$data = array(
							'block' => 'n'
						);
	    	$this->mBarang->aktifBarang($id,$data);
	      $this->session->set_flashdata('msg', 'process-success');

	        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function delete($id){
			// $thumb = $this->barang->getRequest($id);
			//       unlink('./dist/frontend/images/barang/'.$thumb->thumbnail);
		    	$this->mBarang->deleteBarang($id);

		        $this->session->set_flashdata('msg', 'process-success');
		        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function add_item(){
					$id		= $this->input->post('id_barang');
					$jum					= $this->input->post('jumlah');
					$jml_barang		= $this->input->post('jml_barang');
					$tot_barang		= $jum+$jml_barang;
					$data = array(
							'jumlah' 			=> $tot_barang
					 );
					$this->mBarang->editBarang($id, $data);
					
					$jumlah				= $this->input->post('jumlah');
					$nama_barang	= $this->input->post('nama_barang');
					$dataBarangItem = array();
						$no_item			= $this->security->xss_clean($this->input->post('jml_barang'));	
						for  ($i=0; $i < $jumlah; $i++) { $no_item++;

							$dataBarangItem[] = array(
							'id_barang' 			=> $id,
							'no_item'					=> str_pad($no_item,4,"0",STR_PAD_LEFT),
							'nama_barang'			=> $nama_barang
							);
						

						}
					$this->mBarang->addItem($dataBarangItem);
	      $this->session->set_flashdata('msg', 'process-success');
				redirect(''. $_SERVER['HTTP_REFERER']);
		}

			public function edit_item(){

					$id_barang = $this->db->insert_id();
					$dataPoItem = array();
						foreach($_POST['id_barang_item'] AS $key => $val){
							$dataPoItem[] = array(
							'id_barang' 			=> $id_barang,
							'id_barang_item' 	=> $_POST['id_barang_item'][$key],
							);
						}

					$id_barang_item = $this->input->post('id_barang_item');
					$no_tahun = $this->input->post('no_tahun');
					$no_bulan = $this->input->post('no_bulan');
		       $result = array();
						foreach($id_barang_item AS $key => $val){
						 $result[] = array(
						  "id_barang_item" => $id_barang_item[$key],
						  "no_tahun"  => $this->input->post('no_tahun'),
						  "no_bulan"  => $this->input->post('no_bulan')
						 );
						}
			$this->db->update_batch('tb_barang_item', $result, 'id_barang_item');
			$this->session->set_flashdata('msg', 'process-success');
		    redirect(''. $_SERVER['HTTP_REFERER']);
		}


/* =============================== GUDANG ======================================== */
		public function index_gudang() {
			$site  						= $this->mConfig->list_config();
			$detail_barang 		= $this->mBarang->getDetailBarang();
			$detail_item			= $this->mBarang->getDetailItem();
			$ruangan       = $this->mRuangan->getRuangan();


			$data = array(	'title'							=> 'Gudang',
											'menu'							=> 'data-gudang',
											'detail_barang'			=> $detail_barang,
											'detail_item'				=> $detail_item,
											'ruangan'	=> $ruangan,
											'isi'								=> 'pages/barang/index_gudang');
			$this->load->view('public/layout/wrapper',$data);
		}


		public function gudang_tu() {

			$site  						= $this->mConfig->list_config();
			$detail_barang 		= $this->mBarang->getDetailBarang();
			$detail_item			= $this->mBarang->getDetailItemTu();
			$ruangan       = $this->mRuangan->getRuangan();

			$data = array(	'title'		=> 'Gudang',
											'menu'		=> 'data-gudang',
											'detail_barang'	=> $detail_barang,
											'detail_item'	=> $detail_item,
											'ruangan'	=> $ruangan,
											'isi'			=> 'pages/barang/gudang_tu');
			$this->load->view('public/layout/wrapper',$data);
		}

		public function gudang_pic() {
			$site  						= $this->mConfig->list_config();
			$detail_barang 		= $this->mBarang->getDetailBarang();
			$detail_item			= $this->mBarang->getDetailBarangItemPic();
			$ruangan       = $this->mRuangan->getRuangan();


			$data = array(	'title'		=> 'Gudang',
											'menu'		=> 'data-gudang',
											'detail_barang'	=> $detail_barang,
											'detail_item'	=> $detail_item,
											'isi'			=> 'pages/barang/gudang_pic');
			$this->load->view('public/layout/wrapper',$data);
		}

		public function gudang_it() {
			$site  						= $this->mConfig->list_config();
			$detail_barang		= $this->mBarang->getDetailBarangItem();
			$ruangan       = $this->mRuangan->getRuangan();
			$data_sdm      	= $this->mUser->getUserSdm();

			$data = array(	'title'							=> 'Gudang',
											'menu'							=> 'data-gudang',
											'detail_barang'			=> $detail_barang,
											'ruangan'						=> $ruangan,
											'data_sdm'					=> $data_sdm,
											'isi'								=> 'pages/barang/gudang_it');
			$this->load->view('public/layout/wrapper',$data);
		}

		public function gudang_update_tu(){

			$id_barang_item = $this->input->post('id_barang_item');
			$gudang = $this->input->post('gudang');
			$id_ruangan = $this->input->post('id_ruangan');
       $result = array();
				foreach($id_barang_item AS $key => $val){
				 $result[] = array(
				  "id_barang_item" => $id_barang_item[$key],
				  "gudang"  => $this->input->post('gudang'),
				  "id_ruangan"  => $this->input->post('id_ruangan')
				 );
				}
			$this->db->update_batch('tb_barang_item', $result, 'id_barang_item');
			$this->session->set_flashdata('msg', 'process-success');
		    redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function gudang_update_it(){

			$id_barang_item = $this->input->post('id_barang_item');
			$gudang = $this->input->post('gudang');
			$id_ruangan = $this->input->post('id_ruangan');
       $result = array();
				foreach($id_barang_item AS $key => $val){
				 $result[] = array(
				  "id_barang_item" 	=> $id_barang_item[$key],
				  "gudang"  				=> $this->input->post('gudang'),
				  "id_karyawan"  		=> $this->input->post('id_karyawan'),
				  "status"  				=> 'Belum Diterima'
				 );
				}
			$this->db->update_batch('tb_barang_item', $result, 'id_barang_item');
			$this->session->set_flashdata('msg', 'process-success');
		    redirect(''. $_SERVER['HTTP_REFERER']);
		}


		public function update_item($id){
			$data = array(
							'id_ruangan' =>  $this->security->xss_clean($this->input->post('id_ruangan'))
						);
	    	$this->mBarang->updateGudang($id,$data);
	    	/*$id_barang_item = $this->input->post('id_barang_item');
		            $result = array();
						foreach($id_barang_item AS $key => $val){
						 $result[] = array(
						  'id_barang_item' => $id_barang_item[$key],
						  'gudang' =>  $_POST['gudang'][$key]
						 );
						}
				$this->db->update_batch('tb_barang_item', $result, 'id_barang_item');*/
	      $this->session->set_flashdata('msg', 'process-success');
	      redirect(''. $_SERVER['HTTP_REFERER']);
		}


		public function update_tu($id){
			$data = array(
							'gudang'			=>  $this->security->xss_clean($this->input->post('no_ruangan')),
							'id_ruangan' 	=>  $this->security->xss_clean($this->input->post('id_ruangan'))
						);
	    	$this->mBarang->updateGudang($id,$data);
	      $this->session->set_flashdata('msg', 'process-success');

	        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function update_pic($id){
			$data = array(
							'id_karyawan'		=>  $this->security->xss_clean($this->input->post('id_karyawan')),
							'status'		=>  'aktif'

						);
	    	$this->mBarang->updateGudang($id,$data);
	      $this->session->set_flashdata('msg', 'process-success');

	        redirect(''. $_SERVER['HTTP_REFERER']);
		}

		public function detail($id) {
			$site       			= $this->mConfig->list_config();
			$barang  					= $this->mBarang->getDataBarang($id);
			$detail_barang		= $this->mBarang->getDetailBarang($id);
			$detail_item			= $this->mBarang->getDetailItem($id);
			$stok_barang 			= $this->mBarang->stokBarang($id);

			$data = array(  'title'     		=> 'Data Barang Detail ',
	        						'menu'					=> 'data-barang-detail',
	                    'site'      		=> $site,
	                    'barang'    		=> $barang,
	                    'detail_barang' => $detail_barang,
	                    'detail_item'   => $detail_item,
	                    'stok_barang'   => $stok_barang,
	                    'isi'       => 'pages/barang/detail');

				$this->form_validation->set_rules('nama_barang', '<strong>Nama Barang</strong>', 'required');
				if ($this->form_validation->run() == FALSE) {

					$this->load->view('public/layout/wrapper',$data);

				} else {
						$dataBarang = array(
							'nama_barang' => $this->security->xss_clean($this->input->post('nama_barang'))
						);
						$this->mBarang->updateBarang($id,$dataBarang);

			        $id_barang_item = $this->input->post('id_barang_item');
			        $result = array();
							foreach($id_barang_item AS $key => $val){
							 $result[] = array(
							  "id_barang_item" => $id_barang_item[$key],
							  "gudang"  => $this->security->xss_clean($this->input->post('gudang'))[$key]
							 );
							}
						$this->db->update_batch('tb_barang_item', $result, 'id_barang_item');


		            $this->session->set_flashdata('msg', 'process-success');
		            redirect(''. $_SERVER['HTTP_REFERER']);
		    }
		}

	}

/* End of file Barang.php */
/* Location: ./application/modules/backend/pengajuan/controllers/Barang.php */
