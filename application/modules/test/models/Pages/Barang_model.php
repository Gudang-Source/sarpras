<?php
	/*
    @Copyright Arya45
    @Class Name : Barang Model
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Barang_model extends CI_Model {

		var $table = 'tb_barang';
		var $column_order = array(null, 'nama_barang','type','merk','satuan','jumlah','tahunajar','id_barang','id_barang_group'); //set column field database for datatable orderable
		var $column_search = array('nama_barang','type','merk','satuan','jumlah','tahunajar'); //set column field database for datatable searchable 
		var $order = array('nama_barang' => 'asc'); // default order 


		private function _get_datatables_query()
		{
			
			//add custom filter here
			if($this->input->post('nama_barang'))
			{
				$this->db->like('nama_barang', $this->input->post('nama_barang'));
			}
			if($this->input->post('nama_group'))
			{
				$this->db->like('nama_group', $this->input->post('nama_group'));
			}
			if($this->input->post('nama_subgroup'))
			{
				$this->db->like('nama_subgroup', $this->input->post('nama_subgroup'));
			}

			$this->db->from('tb_barang');
			
			$i = 0;
		
			foreach ($this->column_search as $item) // loop column 
			{
				if($_POST['search']['value']) // if datatable send POST for search
				{
					
					if($i===0) // first loop
					{
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i) //last loop
						$this->db->group_end(); //close bracket
				}
				$i++;
			}
			
			if(isset($_POST['order'])) // here order processing
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}

		public function get_datatables()
		{	
			$this->_get_datatables_query();
			$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
			$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
			$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan');
			
			
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		public function get_tables()
		{	
			$this->_get_datatables_item();
			$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang');
			$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang_item.id_barang_group');
			$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang_item.id_barang_subgroup');
			$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan');
			
			
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}

		public function count_filtered()
		{
			$this->_get_datatables_query();
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function count_all()
		{
			$this->db->from($this->table);
			return $this->db->count_all_results();
		}

		public function no_barang(){
			$this->db->select('Right(tb_barang.no_barang,4) as kode ',false);

			$this->db->order_by('no_barang', 'desc');
			$this->db->limit(1);
			$query = $this->db->get_where('tb_barang', array(
				'id_barang_group' 		=> 3 , 
				'id_barang_subgroup'  	=> 0));
			if($query->num_rows()<>0){
				$data = $query->row();
				$kode = intval($data->kode)+1;
			}else{
				$kode = 1;
			}
			$kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
			$kodejadi  = $kodemax;
			return $kodejadi;
		}

		/*public function nobarang(){
	    	$this->db->select('*');
	    	$this->db->COUNT('no_barang')+1;
	    	$this->db->get_where('tb_barang')
	    }*/


		/*public function nobarang($idgroup,$idsub){
			$nobarang = $this->db->query('SELECT COUNT(no_barang)+1 FROM `tb_barang` WHERE id_barang_group='$idgroup' AND id_barang_subgroup='$idsub' ');
		}*/

		//Simpan Data Barang

			public function simpanBarang($dataBarang){
				$this->db->insert('tb_barang', $dataBarang);
			}

			public function simpanItem($dataBarangItem){
				$this->db->insert_batch('tb_barang_item',$dataBarangItem);
			}

			public function addItem($dataBarangItem){
				$this->db->insert_batch('tb_barang_item',$dataBarangItem);
			}


			public function stokBarang($id) {
				$query = $this->db->get_where('tb_barang_item',array('id_barang' => $id, 'gudang' => ''));
				return $query->num_rows();	
			}

		// Get Barang
			public function getDataBarang($id = FALSE){
				if ($id === FALSE) {
					
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan');
					$this->db->order_by('id_barang', 'DESC');
					$query = $this->db->get('tb_barang');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}


			public function getDetailBarang($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan');
					$query = $this->db->get('tb_barang');
					return $query->row();
				}else{
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group','LEFT');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup','LEFT');
					$this->db->join('tb_barang_satuan', 'tb_barang_satuan.id_barang_satuan = tb_barang.satuan','LEFT');
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}

			public function getDetailBarangItem($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang');
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan','LEFT');
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				}else{
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang','LEFT');
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group','LEFT');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup','LEFT');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan','LEFT');
					$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
				}
			}

			public function getDetailBarangItemTu(){
				
					if ($this->session->userdata('role')=='User' || $this->session->userdata('role')=='Pic') {
						$this->db->where('gudang', $this->session->userdata('divisi'));
					}
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang','LEFT');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan','LEFT');
					$this->db->order_by('id_barang_item', 'DESC');
					$query = $this->db->get('tb_barang_item');
					return $query->result();
			}

			public function getDetailBarangItemPic($id = FALSE){
				if ($id === FALSE) {
					if ($this->session->userdata('role')=='User' || $this->session->userdata('role')=='Pic') {
						$this->db->where('id_karyawan', $this->session->userdata('nik'));
					}
					$this->db->order_by('id_barang_item', 'DESC');
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
				}
			}

			public function getDetailBarangItemIt($id = FALSE){
				if ($id === FALSE) {
					if ($this->session->userdata('role')=='Kepsek') {
						$this->db->where('gudang', $this->session->userdata('divisi'));
					}
					$this->db->order_by('id_barang_item', 'DESC');
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
				}
			}

			public function getPicBarangItem($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang');
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan');
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				}else{
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang');
					$this->db->join('tb_barang_group', 'tb_barang_group.id_barang_group = tb_barang.id_barang_group');
					$this->db->join('tb_barang_subgroup', 'tb_barang_subgroup.id_barang_subgroup = tb_barang.id_barang_subgroup');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan');
					$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
				}
			}

			public function getBarangGudang($id = FALSE){
				if ($id === FALSE) {
					$this->db->join('tb_order_barang', 'tb_order_barang.id_order_barang = tb_order_item.id_order_barang');
					$this->db->join('tb_po_item', 'tb_po_item.id_order_item = tb_order_item.id_order_item');
					$this->db->join('tb_po', 'tb_po.id_po = tb_po_item.id_po');
					$query = $this->db->get('tb_order_item');
					return $query->result();
				}else{
					$this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_item.id_barang');
					$this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan = tb_barang_item.id_ruangan');
					$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
					return $query->row();
				}
			}

			public function getDetailPic($id ){
				$this->db->join('pahtsung_sdm.karyawan', 'karyawan.nik = tb_barang_item.id_karyawan','LEFT');
				$query = $this->db->get_where('db_pembelian.tb_barang_item', array('id_barang_item' => $id));
				return $query->row();
			}
		

			public function getDetailItem($id = FALSE){
				if ($id===FALSE) {
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				} else {
					$query = $this->db->get_where('tb_barang_item', array('id_barang' => $id ));
					return $query->result();
				}
				
			}

			public function getDetailItemTu($id = FALSE){
				if ($id===FALSE) {
					$query = $this->db->get('tb_barang_item');
					return $query->result();
				} else {
					$query = $this->db->get_where('tb_barang_item', array('id_barang' => $id ));
					return $query->result();
				}
				
			}

			public function getDetailPrint($id){
				$query = $this->db->get_where('tb_barang_item', array('id_barang_item' => $id));
				return $query->row();
			}

	// Data Gudang
			public function getGudangTu($id = FALSE){
				if ($id === FALSE) {
					if ($this->session->userdata('role')=='User') {
						$this->db->where('gudang', $this->session->userdata('divisi'));
					}
					$this->db->order_by('id_barang', 'DESC');
					$query = $this->db->get('tb_barang');
					return $query->result();
				}else{
					$query = $this->db->get_where('tb_barang', array('id_barang' => $id));
					return $query->row();
				}
			}

		// Listing Barang
	    public function listBarang() {
	        $this->db->select('*');
	        $this->db->from('tb_barang');
	        $this->db->order_by('id_barang','ASC');
	        $query = $this->db->get();
	        return $query->result_array();
	    }

	    

		// Add Barang
	    public function addBarang($data) {
	        $this->db->insert('tb_barang',$data);
	    }

		// Detail 
		public function detailBarang($id) {
	        $this->db->select('*');
	        $this->db->from('tb_barang');
	        $this->db->where('id_barang',$id_barang);
	        $this->db->order_by('id_barang','DESC');
	        $query = $this->db->get();
	        return $query->row_array();
	    } 

		// Edit
		public function editBarang($id, $data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}

		// Delete
		public function deleteBarang($id){
			$this->db->delete('tb_barang_item', array('id_barang_item' => $id));
			return $this->db->delete('tb_barang', array('id_barang' => $id));
		}

		public function updateBarang($id,$dataBarang){
				$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $dataBarang);
		}

		//Update Barang
		public function updateBarangItem($id,$data){
			$this->db->where('id_barang_item', $id);
			return $this->db->update('tb_barang_item', $data);
		}

		public function updateGudang($id,$data){
			$this->db->where('id_barang_item', $id);
			return $this->db->update('tb_barang_item', $data);
		}

		// Aktif
		public function aktifBarang($id,$data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}

		// Block
		public function blockBarang($id,$data){
			$this->db->where('id_barang', $id);
			return $this->db->update('tb_barang', $data);
		}


			


	}

/* End of file Barang_model.php */
/* Location: ./application/modules/NAME_PROJECT/models/Pages/Barang_model.php */