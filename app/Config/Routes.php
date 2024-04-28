<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// home
$routes->get('/', 'C_Home::index');
$routes->get('/product', 'C_Home::product');
$routes->get('/keranjang', 'C_Home::keranjang');
$routes->get('/pembayaran', 'C_Home::order');

// admin
$routes->get('/dashboard', 'C_Dashboard::index');
$routes->get('/user', 'C_Dashboard::user');
$routes->get('/detail', 'C_Dashboard::detail');
$routes->get('/list', 'C_Dashboard::list');
$routes->get('/new', 'C_Dashboard::product');

// input
$routes->post('/product', 'C_Product::index');
$routes->post('/order', 'C_Order::index');
$routes->post('/user', 'C_User::index');
$routes->post('/addres', 'C_Addres::index');

// update
$routes->get('/updateproduct/(:any)', 'C_Product::update/$1');
$routes->get('/updateuser/(:any)', 'C_User::update/$1');
$routes->get('/updateaddres/(:any)', 'C_Addres::update/$1');

// delete
$routes->get('/deleteproduct/(:any)', 'C_Product::delete/$1');
$routes->get('/deleteorder/(:any)', 'C_Order::delete/$1');
$routes->get('/deleteuser/(:any)', 'C_User::delete/$1');
$routes->get('/deleteaddres/(:any)', 'C_Addres::delete/$1');

// login register logout
$routes->get('/login', 'C_Login::login');
$routes->get('/login', 'C_Login::action');
$routes->get('/register', 'C_Login::register');
$routes->get('/register', 'C_Login::aksi');
$routes->get('/logout', 'C_Login::logout');
