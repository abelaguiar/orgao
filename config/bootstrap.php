<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once dirname(__DIR__)."/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
            array(dirname(__DIR__)."/app/Entities"), $isDevMode, null, null, false
        );

$conn = array(
    'dbname' => getenv('DB_DATABASE'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'host' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'driver' => getenv('DB_DRIVER'),
);

$entityManager = EntityManager::create($conn, $config);