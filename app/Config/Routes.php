<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/berita', function () {
    return view('about_message');}
);  

$routes->get('/berita/details', 'Berita::details');

$routes->get('/Home', 'Home::index');

// Routes for Students Data
$routes->get('/create', 'DataController::create');
$routes->post('/store', 'DataController::store');
$routes->get('/home', 'DataController::home');

$routes->get('/mahasiswa', 'Mahasiswa::index');

$routes->get('/listberita', 'BeritaCard::index');

// Medicine Marketplace Routes
$routes->get('/medicines', 'MedicineController::index');
$routes->get('/medicines/(:num)', 'MedicineController::show/$1');
$routes->get('/medicines/search', 'MedicineController::search');
$routes->post('/medicines/filter', 'MedicineController::filter');
