<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    [dirname(__DIR__)."/app/Entities"], 
    $isDevMode, 
    null, 
    null, 
    false
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