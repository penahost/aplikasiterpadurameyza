<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');


$routes->get('/perlengkapan/dashboard', 'perlengkapan\Dashboard::index');
$routes->get('/keuangan/dashboard', 'keuangan\Dashboard::index');
$routes->get('/pendaftaran_haji_khusus/dashboard', 'pendaftaran_haji_khusus\Dashboard::index');
$routes->get('/pendaftaran_umrah/dashboard', 'pendaftaran_umrah\Dashboard::index');



$routes->get('/perlengkapan/perlengkapan_jamaah', 'perlengkapan\Perlengkapan_jamaah::index');
$routes->get('/perlengkapan/perlengkapan_jamaah/index/(:any)', 'perlengkapan\Perlengkapan_jamaah::index/$1');
$routes->get('/perlengkapan/perlengkapan_jamaah/preview_data_perlengkapan/(:any)', 'perlengkapan\Perlengkapan_jamaah::preview_data_perlengkapan/$1');
$routes->post('/perlengkapan/perlengkapan_jamaah/updatedata_ambil_aksi', 'perlengkapan\Perlengkapan_jamaah::updatedata_ambil_aksi');
$routes->post('/perlengkapan/perlengkapan_jamaah/updatedata_kembali_aksi', 'perlengkapan\Perlengkapan_jamaah::updatedata_kembali_aksi');
$routes->get('/perlengkapan/perlengkapan_jamaah/cancel_ambil_aksi/(:any)/(:any)/(:any)', 'perlengkapan\Perlengkapan_jamaah::cancel_ambil_aksi/$1/$2/$3');



$routes->get('/perlengkapan/perlengkapan', 'perlengkapan\Perlengkapan::index');
$routes->get('/perlengkapan/perlengkapan/tambahdata', 'perlengkapan\Perlengkapan::tambahdata');
$routes->post('/perlengkapan/perlengkapan/tambahdata_aksi', 'perlengkapan\Perlengkapan::tambahdata_aksi');
$routes->get('/perlengkapan/perlengkapan/edit/(:any)', 'perlengkapan\Perlengkapan::edit/$1');
$routes->post('/perlengkapan/perlengkapan/updatedata_aksi', 'perlengkapan\Perlengkapan::updatedata_aksi');
$routes->post('/perlengkapan/perlengkapan/hapus/(:any)', 'perlengkapan\Perlengkapan::hapus/$1');








$routes->get('/keuangan/jurnal', 'keuangan\Jurnal::index');
$routes->get('/keuangan/laporan_kas', 'keuangan\Laporan_kas::index');
$routes->post('/keuangan/laporan_kas/minggu', 'keuangan\Laporan_kas::minggu');
$routes->post('/keuangan/laporan_kas/bulan', 'keuangan\Laporan_kas::bulan');
$routes->post('/keuangan/laporan_kas/tahun', 'keuangan\Laporan_kas::tahun');

$routes->get('/keuangan/pembayaran', 'keuangan\Pembayaran::index');
$routes->get('/keuangan/pembayaran/index/(:any)', 'keuangan\Pembayaran::index/$1');
$routes->get('/keuangan/pembayaran/tambahdata/(:any)', 'keuangan\Pembayaran::tambahdata/$1');
$routes->get('/keuangan/pembayaran/RandUnik/(:any)', 'keuangan\Pembayaran::RandUnik/$1');
$routes->post('/keuangan/pembayaran/tambahdata_aksi', 'keuangan\Pembayaran::tambahdata_aksi');
$routes->get('/keuangan/pembayaran/edit/(:any)', 'keuangan\Pembayaran::edit/$1');
$routes->post('/keuangan/pembayaran/updatedata_aksi', 'keuangan\Pembayaran::updatedata_aksi');
$routes->get('/keuangan/pembayaran/hapus/(:any)', 'keuangan\Pembayaran::hapus/$1');

$routes->get('/keuangan/pengeluaran', 'keuangan\Pengeluaran::index');
$routes->get('/keuangan/pengeluaran/tambahdata', 'keuangan\Pengeluaran::tambahdata');
$routes->get('/keuangan/pengeluaran/RandUnik/(:any)', 'keuangan\Pengeluaran::RandUnik/$1');
$routes->post('/keuangan/pengeluaran/tambahdata_aksi', 'keuangan\Pengeluaran::tambahdata_aksi');
$routes->get('/keuangan/pengeluaran/edit/(:any)', 'keuangan\Pengeluaran::edit/$1');
$routes->post('/keuangan/pengeluaran/updatedata_aksi', 'keuangan\Pengeluaran::updatedata_aksi');
$routes->get('/keuangan/pengeluaran/hapus/(:any)', 'keuangan\Pengeluaran::hapus/$1');







$routes->get('/pendaftaran_haji_khusus/jamaah', 'pendaftaran_haji_khusus\Jamaah::index');
$routes->get('/pendaftaran_haji_khusus/jamaah/index/(:any)', 'pendaftaran_haji_khusus\Jamaah::index/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_data_jamaah/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_data_jamaah/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_data_perlengkapan/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_data_perlengkapan/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/tambahdata/(:any)', 'pendaftaran_haji_khusus\Jamaah::tambahdata/$1');
$routes->post('/pendaftaran_haji_khusus/jamaah/tambahdata_aksii', 'pendaftaran_haji_khusus\Jamaah::tambahdata_aksii');
$routes->get('/pendaftaran_haji_khusus/jamaah/edit/(:any)', 'pendaftaran_haji_khusus\Jamaah::edit/$1');
$routes->post('/pendaftaran_haji_khusus/jamaah/updatedata_aksi', 'pendaftaran_haji_khusus\Jamaah::updatedata_aksi');
$routes->get('/pendaftaran_haji_khusus/jamaah/hapus/(:any)/(:any)', 'pendaftaran_haji_khusus\Jamaah::hapus/$1/$2');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_surat_pernyataan/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_surat_pernyataan/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_surat_pernyataan/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_surat_pernyataan/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/tgl_indo/(:any)', 'pendaftaran_haji_khusus\Jamaah::tgl_indo/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/tgl_berangkat/(:any)', 'pendaftaran_haji_khusus\Jamaah::tgl_berangkat/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_surat_pernyataan2/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_surat_pernyataan2/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_surat_pernyataan2/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_surat_pernyataan2/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_surat_jaminan/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_surat_jaminan/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_surat_jaminan/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_surat_jaminan/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_surat_rekom_kemenag/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_surat_rekom_kemenag/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_surat_rekom_kemenag/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_surat_rekom_kemenag/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/preview_surat_rekom_rameyza/(:any)', 'pendaftaran_haji_khusus\Jamaah::preview_surat_rekom_rameyza/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_surat_rekom_rameyza/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_surat_rekom_rameyza/$1');
$routes->get('/pendaftaran_haji_khusus/jamaah/download_report_manifest/(:any)', 'pendaftaran_haji_khusus\Jamaah::download_report_manifest/$1');

$routes->get('/pendaftaran_haji_khusus/laporan/jamaah', 'pendaftaran_haji_khusus\Laporan::jamaah');
$routes->get('/pendaftaran_haji_khusus/laporan/download_report_manifest', 'pendaftaran_haji_khusus\Laporan::download_report_manifest');
$routes->get('/pendaftaran_haji_khusus/laporan/tgl_indo/(:any)', 'pendaftaran_haji_khusus\Laporan::tgl_indo/$1');
$routes->get('/pendaftaran_haji_khusus/laporan/tgl_berangkat/(:any)', 'pendaftaran_haji_khusus\Laporan::tgl_berangkat/$1');
$routes->get('/pendaftaran_haji_khusus/laporan/hapus/(:any)', 'pendaftaran_haji_khusus\Laporan::hapus/$1');

$routes->get('/pendaftaran_haji_khusus/paket', 'pendaftaran_haji_khusus\Paket::index');
$routes->get('/pendaftaran_haji_khusus/paket/tambahdata', 'pendaftaran_haji_khusus\Paket::tambahdata');
$routes->post('/pendaftaran_haji_khusus/paket/tambahdata_aksi', 'pendaftaran_haji_khusus\Paket::tambahdata_aksi');
$routes->get('/pendaftaran_haji_khusus/paket/edit/(:any)', 'pendaftaran_haji_khusus\Paket::edit/$1');
$routes->post('/pendaftaran_haji_khusus/paket/updatedata_aksi', 'pendaftaran_haji_khusus\Paket::updatedata_aksi');
$routes->get('/pendaftaran_haji_khusus/paket/hapus/(:any)', 'pendaftaran_haji_khusus\Paket::hapus/$1');




$routes->get('/pendaftaran_umrah/jamaah', 'pendaftaran_umrah\Jamaah::index');
$routes->get('/pendaftaran_umrah/jamaah/index/(:any)', 'pendaftaran_umrah\Jamaah::index/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_data_jamaah/(:any)', 'pendaftaran_umrah\Jamaah::preview_data_jamaah/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_data_perlengkapan/(:any)', 'pendaftaran_umrah\Jamaah::preview_data_perlengkapan/$1');
$routes->get('/pendaftaran_umrah/jamaah/tambahdata/(:any)', 'pendaftaran_umrah\Jamaah::tambahdata/$1');
$routes->post('/pendaftaran_umrah/jamaah/tambahdata_aksii', 'pendaftaran_umrah\Jamaah::tambahdata_aksii');
$routes->get('/pendaftaran_umrah/jamaah/edit/(:any)', 'pendaftaran_umrah\Jamaah::edit/$1');
$routes->post('/pendaftaran_umrah/jamaah/updatedata_aksi', 'pendaftaran_umrah\Jamaah::updatedata_aksi');
$routes->get('/pendaftaran_umrah/jamaah/hapus/(:any)/(:any)', 'pendaftaran_umrah\Jamaah::hapus/$1/$2');
$routes->get('/pendaftaran_umrah/jamaah/preview_surat_pernyataan/(:any)', 'pendaftaran_umrah\Jamaah::preview_surat_pernyataan/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_surat_pernyataan/(:any)', 'pendaftaran_umrah\Jamaah::download_surat_pernyataan/$1');
$routes->get('/pendaftaran_umrah/jamaah/tgl_indo/(:any)', 'pendaftaran_umrah\Jamaah::tgl_indo/$1');
$routes->get('/pendaftaran_umrah/jamaah/tgl_berangkat/(:any)', 'pendaftaran_umrah\Jamaah::tgl_berangkat/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_surat_pernyataan2/(:any)', 'pendaftaran_umrah\Jamaah::preview_surat_pernyataan2/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_surat_pernyataan2/(:any)', 'pendaftaran_umrah\Jamaah::download_surat_pernyataan2/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_surat_jaminan/(:any)', 'pendaftaran_umrah\Jamaah::preview_surat_jaminan/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_surat_jaminan/(:any)', 'pendaftaran_umrah\Jamaah::download_surat_jaminan/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_surat_rekom_kemenag/(:any)', 'pendaftaran_umrah\Jamaah::preview_surat_rekom_kemenag/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_surat_rekom_kemenag/(:any)', 'pendaftaran_umrah\Jamaah::download_surat_rekom_kemenag/$1');
$routes->get('/pendaftaran_umrah/jamaah/preview_surat_rekom_rameyza/(:any)', 'pendaftaran_umrah\Jamaah::preview_surat_rekom_rameyza/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_surat_rekom_rameyza/(:any)', 'pendaftaran_umrah\Jamaah::download_surat_rekom_rameyza/$1');
$routes->get('/pendaftaran_umrah/jamaah/download_report_manifest/(:any)', 'pendaftaran_umrah\Jamaah::download_report_manifest/$1');

$routes->get('/pendaftaran_umrah/laporan/jamaah', 'pendaftaran_umrah\Laporan::jamaah');
$routes->get('/pendaftaran_umrah/laporan/download_report_manifest', 'pendaftaran_umrah\Laporan::download_report_manifest');
$routes->get('/pendaftaran_umrah/laporan/tgl_indo/(:any)', 'pendaftaran_umrah\Laporan::tgl_indo/$1');
$routes->get('/pendaftaran_umrah/laporan/tgl_berangkat/(:any)', 'pendaftaran_umrah\Laporan::tgl_berangkat/$1');
$routes->get('/pendaftaran_umrah/laporan/hapus/(:any)', 'pendaftaran_umrah\Laporan::hapus/$1');

$routes->get('/pendaftaran_umrah/paket', 'pendaftaran_umrah\Paket::index');
$routes->get('/pendaftaran_umrah/paket/tambahdata', 'pendaftaran_umrah\Paket::tambahdata');
$routes->post('/pendaftaran_umrah/paket/tambahdata_aksi', 'pendaftaran_umrah\Paket::tambahdata_aksi');
$routes->get('/pendaftaran_umrah/paket/edit/(:any)', 'pendaftaran_umrah\Paket::edit/$1');
$routes->post('/pendaftaran_umrah/paket/updatedata_aksi', 'pendaftaran_umrah\Paket::updatedata_aksi');
$routes->get('/pendaftaran_umrah/paket/hapus/(:any)', 'pendaftaran_umrah\Paket::hapus/$1');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
