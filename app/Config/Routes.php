<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// $routes->get('/product/(:num)', 'Home::getProduct/$1');
$routes->get('/product', 'Home::getProduct');
$routes->get('/product/(:num)', 'Admin\ProductsController::get/$1');
$routes->get('/product/(:num)/checkout', 'Admin\ProductsController::checkout/$1');

$routes->post('product/order', 'Admin\OrdersController::store');

$routes->get('/login', 'Home::login');
$routes->post('/login', 'Admin\Admin::login');

$routes->get('/signup', 'Home::signup');
$routes->post('/signup', 'Admin\Admin::store');



$routes->group('/admin', function ($routes) {

	$routes->get('/', 'Admin\Admin::index');


	$routes->get('sales', 'Admin\SalesController::index');
	$routes->post('sales', 'Admin\SalesController::store');
	$routes->get('sales/(:num)/delete', 'Admin\SalesController::destroy/$1');

	
	$routes->get('purchases', 'Admin\PurchasesController::index');
	$routes->post('purchases', 'Admin\PurchasesController::store');
	$routes->get('purchases/(:num)/delete', 'Admin\PurchasesController::destroy/$1');

	
	$routes->get('orders', 'Admin\OrdersController::index');
	$routes->post('orders', 'Admin\OrdersController::store');
	$routes->get('orders/(:num)/confirm', 'Admin\OrdersController::confirm/$1');
	$routes->get('orders/(:num)/delete', 'Admin\OrdersController::destroy/$1');

	
	$routes->get('customers', 'Admin\CustomersController::index');
	$routes->post('customers', 'Admin\CustomersController::store');
	$routes->get('customers/(:num)/delete', 'Admin\CustomersController::destroy/$1');

	
	$routes->get('products', 'Admin\ProductsController::index');
	$routes->post('products', 'Admin\ProductsController::store');
	$routes->get('products/(:num)/delete', 'Admin\ProductsController::destroy/$1');

	$routes->get('suppliers', 'Admin\SuppliersController::index');
	$routes->post('suppliers', 'Admin\SuppliersController::store');
	$routes->get('suppliers/(:num)/delete', 'Admin\SuppliersController::destroy/$1');

	$routes->get('logout', 'Admin\Admin::destroy');

});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
