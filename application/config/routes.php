<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/*=== Site Public */
$route['translate_uri_dashes'] 		= FALSE;
$route['default_controller'] 		= 'login';
$route['404_override'] 				= 'template/error';

/*=== Dashboard ====*/
$route['dashboard'] 				= 'template/dashboard';

 

/*=== Login Logout ===*/
$route['login'] 			= 'login/login';
$route['check_login'] 		= 'login/login/check_login';
$route['logout'] 			= 'login/login/logout';



/*====== HEADER MENU ======*/
	//User
		$route['data-user'] 				= 'test/pages/user';
		$route['data-user-add'] 			= 'test/pages/user/add';
		$route['data-user-edit/(:num)'] 	= 'test/pages/user/edit/$1';
		$route['data-user-detail(:num)/'] 	= 'test/pages/user/detail/$1';
		$route['data-user-aktif/(:num)'] 	= 'test/pages/user/aktif/$1';
		$route['data-user-block/(:num)'] 	= 'test/pages/user/block/$1';
		$route['data-user-delete/(:num)']	= 'test/pages/user/delete/$1';
	
	//Barang
		

		$route['data-barang'] 											= 'test/pages/barang';
		
		$route['data-barang-add'] 									= 'test/pages/barang/add';
		$route['data-barang-edit/(:num)'] 					= 'test/pages/barang/edit/$1';
		$route['data-barang-detail/(:num)'] 				= 'test/pages/barang/detail/$1';
		$route['data-barang-print-all/(:num)']			= 'test/pages/barang/print_barcode_all/$1';
		$route['data-barang-print-barcode/(:num)']	= 'test/pages/barang/print_barcode/$1';

		$route['data-barang-aktif/(:num)'] 					= 'test/pages/barang/aktif/$1';
		$route['data-barang-block/(:num)'] 					= 'test/pages/barang/block/$1';
		$route['data-barang-delete/(:num)'] 				= 'test/pages/barang/delete/$1';

	// Barang Item
		$route['item-barang-detail/(:num)'] 		= 'test/pages/barang/item_detail/$1';

	// Gudang Barang
		$route['data-gudang'] 							= 'test/pages/barang/index_gudang';
		$route['data-gudang-tu'] 						= 'test/pages/barang/gudang_tu';
		$route['data-gudang-pic'] 					= 'test/pages/barang/gudang_pic';
		$route['data-gudang-it'] 						= 'test/pages/barang/gudang_it';

		$route['gudang-update'] 						= 'test/pages/barang/gudang_update';
		$route['gudang-update-tu'] 						= 'test/pages/barang/gudang_update_tu';
		$route['gudang-update-it'] 						= 'test/pages/barang/gudang_update_it';

		$route['data-gudang-update/(:num)'] 		= 'test/pages/barang/update_item/$1';
		
		$route['data-gudang-tu-update/(:num)'] 	= 'test/pages/barang/update_tu/$1';
		$route['data-gudang-pic-update/(:num)'] = 'test/pages/barang/update_pic/$1';


	// Group & Sub
		$route['data-groupsub'] 				= 'test/pages/groupsub';

		$route['data-group-add'] 				= 'test/pages/groupsub/add_group';
		$route['data-group-edit/(:num)'] 		= 'test/pages/groupsub/edit_group/$1';
		$route['data-group-delete/(:num)']		= 'test/pages/groupsub/delete_group/$1';

		$route['data-subgroup-add'] 			= 'test/pages/groupsub/add_subgroup';
		$route['data-subgroup-cek'] 			= 'test/pages/groupsub/ambil_data';
		$route['data-subgroup-edit/(:num)'] 	= 'test/pages/groupsub/edit_subgroup/$1';
		$route['data-subgroup-delete/(:num)'] 	= 'test/pages/groupsub/delete_subgroup/$1';

	//Ruangan & PIC
		//Ruangan
		$route['data-ruangan'] 								= 'test/pages/ruangan';
		$route['ruangan-add'] 								= 'test/pages/ruangan/add';
		$route['ruangan-edit/(:num)'] 				= 'test/pages/ruangan/edit/$1';
		$route['ruangan-detail/(:num)']	 			= 'test/pages/ruangan/detail/$1';
		$route['ruangan-detail-pic/(:num)']	 	= 'test/pages/ruangan/detail_pic/$1';
		$route['ruangan-print/(:num)']	 			= 'test/pages/ruangan/print_ruangan/$1';
		$route['ruangan-aktif/(:num)'] 				= 'test/pages/ruangan/aktif/$1';
		$route['ruangan-block/(:num)'] 				= 'test/pages/ruangan/block/$1';

		//Pic
		$route['data-pic'] 									= 'test/pages/pic';
		$route['data-pic-list'] 						= 'test/pages/pic/list_pic';

		$route['data-pic-barang'] 						= 'test/pages/pic/list_barang';
		$route['data-pic-edit-barang/(:num)'] = 'test/pages/pic/list_barang/$1';
		$route['data-pic-ruangan'] 						= 'test/pages/pic/list_ruangan';


		$route['data-pic-add/(:num)'] 		= 'test/pages/pic/add/$1';
		$route['data-pic-edit/(:num)'] 		= 'test/pages/pic/edit/$1';
		$route['data-pic-detail(:num)/'] 	= 'test/pages/pic/detail/$1';
		$route['data-pic-print(:num)/'] 	= 'test/pages/pic/print_pic/$1';
		$route['data-pic-aktif/(:num)'] 	= 'test/pages/pic/aktif/$1';
		$route['data-pic-block/(:num)'] 	= 'test/pages/pic/block/$1';
		$route['data-pic-delete/(:num)'] 	= 'test/pages/pic/delete/$1';

	//Satuan
		$route['data-satuan'] 							= 'test/pages/satuan';
		$route['data-satuan-add'] 					= 'test/pages/satuan/add';
		$route['data-satuan-edit/(:num)'] 	= 'test/pages/satuan/edit/$1';
		$route['data-satuan-detail/(:num)'] = 'test/pages/satuan/detail/$1';
		$route['data-satuan-aktif/(:num)'] 	= 'test/pages/satuan/aktif/$1';
		$route['data-satuan-block/(:num)'] 	= 'test/pages/satuan/block/$1';
		$route['data-satuan-delete/(:num)'] = 'test/pages/satuan/delete/$1';

	//Supplier
		$route['data-supplier'] 				= 'test/pages/supplier';
		$route['data-supplier-add'] 			= 'test/pages/supplier/add';
		$route['data-supplier-edit/(:num)'] 	= 'test/pages/supplier/edit/$1';
		$route['data-supplier-detail/(:num)']	= 'test/pages/supplier/detail/$1';
		$route['data-supplier-aktif/(:num)']	= 'test/pages/supplier/aktif/$1';
		$route['data-supplier-block/(:num)']	= 'test/pages/supplier/block/$1';
		$route['data-supplier-delete/(:num)']	= 'test/pages/supplier/delete/$1';




/*====== SIDE MENU ======*/
	//ENTRY
		$route['entry'] 											= 'test/sistem/entry';
		//Barang
		$route['entry/barang/(:num)'] 				= 'test/sistem/entry/entry_barang/$1';
		$route['entry/proses-barang'] 				= 'test/sistem/entry/entry_barang';
		$route['entry/pembelian-barang'] 			= 'test/sistem/entry/pembelian_barang';
		//ATK
		$route['entry/atk/(:num)']	 					= 'test/sistem/entry/entry_atk/$1';
		$route['entry/proses-atk'] 						= 'test/sistem/entry/entry_atk';
		$route['entry/pembelian-atk'] 				= 'test/sistem/entry/pembelian_atk';
		// Service
		$route['service'] 										= 'test/sistem/entry/service';


	//PROSES
		// Default Sistem Proses Print,View Barang & ATK
			$route['proses/print-barang/(:num)'] = 'test/sistem/proses/print_barang/$1';
			$route['proses/print-atk/(:num)'] = 'test/sistem/proses/print_atk/$1';

			$route['proses/view-barang/(:num)'] = 'test/sistem/proses/view_barang/$1';
			$route['proses/view-atk/(:num)'] = 'test/sistem/proses/view_atk/$1';

		//Unit 
			//Barang
			$route['proses/unit-list-barang'] = 'test/proses/unit/list_barang';
			$route['proses/unit-view-barang/(:num)'] = 'test/proses/unit/view_barang/$1';
			$route['proses/unit-edit-barang/(:num)'] = 'test/proses/unit/edit_barang/$1';
			$route['proses/unit-batal-barang/(:num)'] = 'test/proses/unit/batal_barang/$1';
			$route['proses/unit-print-barang/(:num)'] = 'test/proses/unit/print_barang/$1';

			//ATK
			$route['proses/unit-list-atk'] = 'test/proses/unit/list_atk';
			$route['proses/unit-view-atk/(:num)'] = 'test/proses/unit/view_atk/$1';
			$route['proses/unit-edit-atk/(:num)'] = 'test/proses/unit/edit_atk/$1';
			$route['proses/unit-batal-atk/(:num)'] = 'test/proses/unit/batal_atk/$1';
			$route['proses/unit-print-atk/(:num)'] = 'test/proses/unit/print_atk/$1';


		//Kepunit 
			//Barang
			$route['proses/kepunit-list-barang'] = 'test/proses/kepunit/list_barang';
			$route['proses/kepunit-view-barang/(:num)'] = 'test/proses/kepunit/view_barang/$1';
			$route['proses/kepunit-edit-barang/(:num)'] = 'test/proses/kepunit/edit_barang/$1';
			$route['proses/kepunit-batal-barang/(:num)'] = 'test/proses/kepunit/batal_barang/$1';
			$route['proses/kepunit-print-barang/(:num)'] = 'test/proses/kepunit/print_barang/$1';

			//ATK
			$route['proses/kepunit-list-atk'] = 'test/proses/kepunit/list_atk';
			//Sarpras
			$route['proses/kepunitsarpras-list-atk'] = 'test/proses/kepunit/list_atk_kepunitsarpras';
			$route['proses/kepunit-view-atk/(:num)'] = 'test/proses/kepunit/view_atk/$1';
			$route['proses/kepunit-edit-atk/(:num)'] = 'test/proses/kepunit/edit_atk/$1';
			$route['proses/kepunit-batal-atk/(:num)'] = 'test/proses/kepunit/batal_atk/$1';
			$route['proses/kepunit-print-atk/(:num)'] = 'test/proses/kepunit/print_atk/$1';


		//Sarpras 

			$route['proses/list-terima-sarpras'] = 'test/proses/sarpras/list_terima_barang';
			$route['proses/terima-barang-sarpras/(:num)'] = 'test/proses/sarpras/terima_barang/$1';

			//Barang
			$route['proses/sarpras-list-barang'] = 'test/proses/sarpras/list_barang';
			$route['proses/sarpras-view-barang/(:num)'] = 'test/proses/sarpras/view_barang/$1';
			$route['proses/sarpras-edit-barang/(:num)'] = 'test/proses/sarpras/edit_barang/$1';;
			$route['proses/sarpras-batal-barang/(:num)'] = 'test/proses/sarpras/batal_barang/$1';
			$route['proses/sarpras-print-barang/(:num)'] = 'test/proses/sarpras/print_barang/$1';

			//ATK
			$route['proses/sarpras-list-atk'] = 'test/proses/sarpras/list_atk';
			$route['proses/sarpras-view-atk/(:num)'] = 'test/proses/sarpras/view_atk/$1';
			$route['proses/sarpras-edit-atk/(:num)'] = 'test/proses/sarpras/edit_atk/$1';
			$route['proses/sarpras-batal-atk/(:num)'] = 'test/proses/sarpras/batal_atk/$1';
			$route['proses/sarpras-print-atk/(:num)'] = 'test/proses/sarpras/print_atk/$1';


		//Direktur 
			//Barang
			$route['proses/direktur-list-barang'] = 'test/proses/direktur/list_barang';
			$route['proses/direktur-view-barang/(:num)'] = 'test/proses/direktur/view_barang/$1';
			$route['proses/direktur-edit-barang/(:num)'] = 'test/proses/direktur/edit_barang/$1';
			$route['proses/direktur-batal-barang/(:num)'] = 'test/proses/direktur/batal_barang/$1';
			$route['proses/direktur-ditolak-barang/(:num)'] = 'test/proses/direktur/ditolak_barang/$1';
			$route['proses/direktur-print-barang/(:num)'] = 'test/proses/direktur/print_barang/$1';

			//ATK
			$route['proses/direktur-list-atk'] = 'test/proses/direktur/list_atk';
			$route['proses/direktur-view-atk/(:num)'] = 'test/proses/direktur/view_atk/$1';
			$route['proses/direktur-edit-atk/(:num)'] = 'test/proses/direktur/edit_atk/$1';
			$route['proses/direktur-batal-atk/(:num)'] = 'test/proses/direktur/batal_atk/$1';
			$route['proses/direktur-ditolak-atk/(:num)'] = 'test/proses/direktur/ditolak_atk/$1';
			$route['proses/direktur-print-atk/(:num)'] = 'test/proses/direktur/print_atk/$1';


		//Pembelian
			//PO Barang
			$route['proses/pembelian-barang'] = 'test/proses/pembelian/list_pembelian_barang';
			$route['proses/print-po-barang/(:num)'] = 'test/proses/pembelian/print_po_barang/$1';

			$route['proses/list-po-barang'] = 'test/proses/pembelian/list_po_barang';
			$route['proses/view-po-barang/(:num)'] = 'test/proses/pembelian/view_po_barang/$1';

			$route['proses/list-terima-barang'] = 'test/proses/pembelian/list_terima_barang';
			$route['proses/terima-barang/(:num)'] = 'test/proses/pembelian/terima_barang/$1';


			$route['laporan/pembelian-laporan-barang'] = 'test/proses/pembelian/laporan_pembelian_barang';
			$route['proses/pembelian-batal-po/(:num)'] = 'test/proses/pembelian/batal_po/$1';

			
			//Barang
				$route['proses/pembelian-list-barang'] = 'test/proses/pembelian/list_barang';
				$route['proses/pembelian-view-barang/(:num)'] = 'test/proses/pembelian/view_barang/$1';
				$route['proses/pembelian-edit-barang/(:num)'] = 'test/proses/pembelian/edit_barang/$1';
				$route['proses/pembelian-batal-barang/(:num)'] = 'test/proses/pembelian/batal_barang/$1';
				$route['proses/pembelian-print-barang/(:num)'] = 'test/proses/pembelian/print_barang/$1';

			//ATK
				$route['proses/pembelian-list-atk'] = 'test/proses/pembelian/list_atk';
				$route['proses/pembelian-view-atk/(:num)'] = 'test/proses/pembelian/view_atk/$1';
				$route['proses/pembelian-edit-atk/(:num)'] = 'test/proses/pembelian/edit_atk/$1';
				$route['proses/pembelian-batal-atk/(:num)'] = 'test/proses/pembelian/batal_atk/$1';
				$route['proses/pembelian-print-atk/(:num)'] = 'test/proses/pembelian/print_atk/$1';


		//Toko 
			//PO

			$route['proses/pembelian-atk'] = 'test/proses/toko/list_pembelian_atk';
			$route['proses/print-po-atk/(:num)'] = 'test/proses/toko/print_po_atk/$1';

			$route['proses/list-po-atk'] = 'test/proses/toko/list_po_atk';
			$route['proses/view-po-atk/(:num)'] = 'test/proses/toko/view_po_atk/$1';

			$route['proses/list-terima-atk'] = 'test/proses/toko/list_terima_atk';
			$route['proses/terima-atk/(:num)'] = 'test/proses/toko/terima_atk/$1';


			$route['laporan/pembelian-laporan-atk'] = 'test/proses/toko/laporan_pembelian_atk';
			$route['proses/pembelian-batal-po/(:num)'] = 'test/proses/toko/batal_po/$1';



	//LAPORAN
		$route['laporan/list-laporan-barang'] = 'test/sistem/laporan/list_barang';


		// UNIT
		$route['laporan/unit-list-laporan-barang'] = 'test/sistem/laporan/laporan_barang';
		$route['laporan/unit-detail-laporan-barang/(:num)'] = 'test/sistem/laporan/laporan_barang/$1';

		// PEMBELIAN


