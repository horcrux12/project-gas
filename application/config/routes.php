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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Dashboard
$route['dashboard'] = 'dashboard/dashboard/index';
$route['dashboard/data-grafik'] = 'dashboard/dashboard/get_data_diagram';
$route['dashboard/time-limit'] = 'dashboard/dashboard/limit';
$route['detail-kegiatan'] = 'dashboard/dashboard/detail';

$route['menu-user'] = 'menu_user/user/table';
$route['menu-user/tambah'] = 'menu_user/user/tambah';
$route['menu-user/ambil'] = 'menu_user/user/interval';
$route['menu-user/simpan'] = 'menu_user/user/simpan';

// User
$route['login'] = 'user/login/index';
$route['logout'] = 'user/login/logout';
$route['login/auth'] = 'user/login/authentication';
$route['register'] = 'user/register/index';
$route['register/create'] = 'user/register/register_user';
$route['data-pelanggan'] = 'data_pelanggan/data_pelanggan/index';
$route['data-pelanggan/aktifasi-user'] = 'data_pelanggan/data_pelanggan/activate_user/$1';

// Barang
$route['data-barang'] = 'barang/data_barang/index';
$route['data-barang/kurangi-stok/(:num)'] = 'barang/data_barang/kurangi_stock/$1';
$route['data-barang/hapus-barang/(:num)'] = 'barang/data_barang/hapus_stock/$1';
$route['data-barang/tambah-barang'] = 'barang/data_barang/tambah_barang';
$route['data-barang/tambah-transaksi-barang'] = 'barang/data_barang/tambah_pembelian_barang';
$route['data-barang/input-transaksi-barang'] = 'barang/data_barang/store_transaksi_stok';
$route['data-transaksi'] = 'barang/data_barang/table_transaksi_stok';
$route['data-transaksi/detail-transaksi/(:num)'] = 'barang/data_barang/detail_transaksi/$1';

// Data Pembelian
$route['data-pembelian'] = 'data_pembelian/data_pembelian/index';
$route['data-pembelian/tambah-pembelian'] = 'data_pembelian/data_pembelian/tambah_pembelian';
$route['data-pembelian/input-pembelian'] = 'data_pembelian/data_pembelian/store_pembelian';
$route['data-pembelian/hapus-pembelian/(:num)'] = 'data_pembelian/data_pembelian/hapus_pembelian/$1';
$route['data-pembelian/detail-pembelian/(:num)'] = 'data_pembelian/data_pembelian/detail_pembelian/$1';
$route['data-pembelian/proses-pembelian/(:num)'] = 'data_pembelian/data_pembelian/proses_pembelian/$1';
$route['data-pembelian/upload-pembayaran/(:num)'] = 'data_pembelian/data_pembelian/store_bukti_pembayaran/$1';
$route['data-pembelian/input-proses-pembelian'] = 'data_pembelian/data_pembelian/store_proses_pembelian';
$route['data-pembelian/konfirmasi-pembelian/(:num)'] = 'data_pembelian/data_pembelian/acc_pembelian/$1';

// Report
$route['report'] = 'report/report/index';
$route['report/print'] = 'report/report/get_report_pdf';

// User
$route['user'] = 'user/user/index';
$route['user/tambah-user'] = 'user/user/tambah_user';
$route['user/store-user'] = 'user/user/register_user';
$route['user/delete-user/(:num)'] = 'user/user/delete_user/$1';
$route['user/ubah-user/(:num)'] = 'user/user/ubah_user/$1';
$route['user/edit-user/(:num)'] = 'user/user/edit_user/$1';

// Barang
$route['barang-rusak'] = 'barang_rusak/data_barang_rusak/index';
$route['barang-rusak/store-barang-rusak'] = 'barang_rusak/data_barang_rusak/store_barang_rusak';
$route['barang-rusak/tambah-barang-rusak'] = 'barang_rusak/data_barang_rusak/tambah_barang_rusak';
$route['barang-rusak/hapus-barang-rusak/(:num)'] = 'barang_rusak/data_barang_rusak/hapus_barang_rusak/$1';


$route['read-notifikasi'] = 'templates/notifikasi/readNotifikasi';
$route['ambil-data/debug'] = 'dashboard/dashboard/debug';
