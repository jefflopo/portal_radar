<?php

/**
 * Step 1: Require the Slim Framework using Composer's autoloader
 *
 * If you are not using Composer, you need to load Slim Framework with your own
 * PSR-4 autoloader.
 */
require 'inc/Slim-3.x/Slim-3.x/vendor/autoload.php';

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new Slim\App();

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */
$app->get('/', function ($request, $response, $args) {
    require_once ("view/index_menu2.php");
});

$app->get('/agricultura', function ($request, $response, $args) {
    require_once ("view/agricultura.php");
});

$app->get('/ciencia_tecnologia', function ($request, $response, $args) {
    require_once ("view/ciencia_tecnologia.php");
});

$app->get('/radar', function ($request, $response, $args) {
    require_once ("view/radarPDF.php");
});

$app->get('/temas', function ($request, $response, $args) {
    require_once ("view/temasRadar.php");
});

$app->get('/hello[/{name}]', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
})->setArgument('name', 'World!');

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();