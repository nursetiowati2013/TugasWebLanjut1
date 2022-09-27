<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->get('/index', 'Pages::index'); 
$routes->get('/index', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
