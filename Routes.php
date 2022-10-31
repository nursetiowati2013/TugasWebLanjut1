<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Login::index');
$routes->get('/home', 'Home');
$routes->post('/admin', 'Login::admin');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->get('/keluar', 'Logout::logout');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->get('/index', 'Pages::index');
$routes->get('/ask', 'Pages::ask');

// Admin
$routes->get('/tambahProduk', 'Admin::index');
$routes->post('/simpanProduk', 'Admin::simpan');

$routes->get('/tambahPertanyaan', 'Admin::ask');
$routes->post('/simpanPertanyaan', 'Admin::save');
// General
$routes->get('(:any)', 'Pages::view/$1');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
