<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__DIR__)."/vendor/autoload.php";

use PlugRoute\RouteFactory;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__.'/../');
$dotenv->load();

/**** CORS ****/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH");
header("Access-Control-Allow-Headers: Content-Type");
/**** CORS ****/

$route = RouteFactory::create();

require_once dirname(__DIR__)."/config/routes.php";

$route->on();