<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::page');
$routes->match(['get','post'],'cadastrarU', 'Home::cadastrarU');
$routes->match(['get','post'],'excluirU/(:num)', 'Home::excluirU/$1');
$routes->match(['get','post'],'editarU/(:num)', 'Home::editarU/$1');
$routes->match(['get','post'],'inscreverU', 'Home::inscreverU');
$routes->match(['get','post'],'editarU/inscreverU', 'Home::inscreverU');
$routes->get('usuario', 'Home::usuario');
$routes->match(['get','post'],'cadastrarC', 'Home::cadastrarC');
$routes->match(['get','post'],'excluirC/(:num)', 'Home::excluirC/$1');
$routes->match(['get','post'],'editarC/(:num)', 'Home::editarC/$1');
$routes->match(['get','post'],'inscreverC', 'Home::inscreverC');
$routes->match(['get','post'],'editar/inscreverC', 'Home::inscreverC');
$routes->get('carros', 'Home::carros');
$routes->get('(:any)', 'Home::page/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
