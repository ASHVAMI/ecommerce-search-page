<?php

// Make sure to turn on error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Determine the base path of the application
$basePath = __DIR__;

// Define the application path
$appPath = $basePath . '/public';

// Handle requests
$scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

if (strpos($requestUri, '/index.php') === false) {
    // Remove the front controller if it's not in the request URI
    $requestUri = rtrim($requestUri, '/');
    $requestUri = $requestUri ?: '/';
}

// Set the correct script name and request URI
$_SERVER['SCRIPT_NAME'] = $scriptName;
$_SERVER['REQUEST_URI'] = $requestUri;

// Include the Laravel framework bootstrap file
require $basePath . '/vendor/autoload.php';
require $basePath . '/bootstrap/autoload.php';

// Create the application instance
$app = require_once $basePath . '/bootstrap/app.php';

// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Send the response back to the browser
$response->send();
$kernel->terminate($request, $response);
