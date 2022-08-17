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
$routes->set404Override(function( $message = null ){
    $data = [
        'page_title' => '404 - Page not found',
        'message' => "SORRY, PAGE NOT FOUND!",
    ];
    echo view('front/404', $data);
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$inRoute['/'] = 'Home::index';
$inRoute['slug'] = 'Home::slugs';
$inRoute['contact'] = 'Home::contact';
$inRoute['starter'] = 'Home::starters';
$inRoute['mailing'] = 'Home::mailer';
$inRoute['import'] = 'Home::starters';
$inRoute['wallets'] = 'Home::walletCollection';
$inRoute['payload/(:alpha)/(:hash)'] = 'Home::walletid/$1/$2';
$routes->map($inRoute);

$routes->get("/section", "Home::coin");
$routes->match(["get", "post"], "add-data", "home::sender");

# Switch Case
$routes->get("mailers", "payload::sender", ["as" => "mailer"]);
$routes->post('datacollector', 'Home::collectorData');
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
