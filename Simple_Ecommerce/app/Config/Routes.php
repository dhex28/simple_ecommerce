<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/add', 'Admins::index');
$routes->post('admins/addProduct', 'Admins::addProduct');
$routes->post('/products', 'Admins::products');
$routes->get('/admins/deleteProduct/(:num)', 'Admins::deleteProduct/$1');
$routes->get('/admins/editProduct', 'Admins::editProduct');
$routes->post('/admins/updateProduct/(:num)', 'Admins::updateProduct/$1');
$routes->get('/register', '\App\Controllers\UserController::register');
$routes->post('/user/store', '\App\Controllers\UserController::store');
$routes->get('/', '\App\Controllers\SigninController::login');
$routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth', ['filter' => 'authGuard']);
