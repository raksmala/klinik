<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/reservasi', 'Login::reservasi');
$routes->get('/home/user/profile', 'Home::profile');
$routes->post('/home/user/profile/simpan/(:num)', 'UserController::updateProfile/$1');
$routes->get('/home/klinik', 'Home::klinik');
$routes->get('/home/Treatment/(:any)', 'Home::Treatment/$1');
$routes->get('/home/Detail/(:any)', 'Home::Detail/$1');
$routes->get('/home/Reservasi/(:any)', 'Home::Reservasi/$1');
$routes->get('/home/BeforeAfter', 'Home::BeforeAfter');
$routes->get('/home/Riwayat', 'Home::Riwayat');
$routes->get('/layout/login', 'Home::login');
$routes->get('/Admin/Login', 'Home::login');
$routes->post('/cekLogin', 'Login::login');
$routes->get('layout/register', 'Home::register');
$routes->post('/simpanRegister', 'Register::save');
$routes->post('/Register/process', 'Register::process');
$routes->get('/Admin/Home', 'Home::Home');
$routes->get('/Admin/Sidebar', 'Home::Sidebar');
$routes->get('/Admin/Dasboard', 'Home::Dasboard');
$routes->post('/Reservasi/cek-sesi', 'Home::cekSesi');
$routes->post('/Reservasi/simpan', 'Home::simpan');
// $routes->get('/Admin/DataUser', 'DataUser::index');
$routes->get('Admin/DAdmin', 'Home::DAdmin');
$routes->get('/Admin/Home', 'Home::Home');
$routes->get('/Admin/Laporan', 'Home::Laporan');
$routes->add('daterangepicker/(:any)', 'Home::library/$1');

// CRUD USER
$routes->get('/user/edit', 'Home::Home');
$routes->match(['get', 'post'], 'user/edit/(:num)', 'UserController::edit/$1');
$routes->get('user/create', 'UserController::create');
$routes->post('user/store', 'UserController::store');
$routes->match(['get', 'post'], 'user/delete/(:num)', 'UserController::delete/$1');
$routes->get('Admin/User', 'UserController::index');
$routes->post('user/update/(:num)', 'UserController::update/$1');

// CRUD TREATMENT
$routes->get('Admin/Treatment', 'Treatment::index');
$routes->get('adminTreatment/create', 'Treatment::create');
$routes->post('adminTreatment/simpan', 'Treatment::simpan');
$routes->get('treatment/delete/(:num)', 'Treatment::hapus/$1');
$routes->get('treatment/edit/(:num)', 'Treatment::edit/$1');
$routes->post('treatment/update/(:num)', 'Treatment::update/$1');

// CRUD RESERVASI
$routes->get('Admin/Reservasi', 'Reservasi::index');
$routes->get('Admin/Reservasi/edit/(:num)', 'Reservasi::edit/$1');
$routes->get('Admin/Reservasi/batal/(:num)', 'Reservasi::batal/$1');
$routes->post('Admin/Reservasi/update/(:num)', 'Reservasi::update/$1');

// Notifikasi
$routes->get('Admin/Notifikasi/(:num)', 'Home::notifikasi/$1');

// Export File Pdf
$routes->get('Admin/User/laporan-pdf', 'UserController::export');
$routes->get('Admin/Treatment/laporan-pdf', 'Treatment::export');
$routes->post('Admin/Laporan/export', 'Home::export');

// Panggil Ajax Tanggal
$routes->get('/Reservasi/RFacialGold', 'Tanggal::index');
$routes->get('/', 'Tanggal::index');
$routes->post('Tanggal/getDataByDate', 'Tanggal::getDataByDate');


// $routes->get('/', 'User::index');
// $routes->get('create', 'User::create');
// $routes->post('store', 'User::store');
// $routes->get('edit/(:num)', 'User::edit/$1');
// $routes->post('update', 'User::update');
// $routes->get('delete/(:num)', 'User::delete/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
