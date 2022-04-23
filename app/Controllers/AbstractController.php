<?php

namespace App\Controllers;

use App\EntityManager;

abstract class AbstractController
{
    public function entityManager()
    {
        $entityManager = new EntityManager;
        return $entityManager->getObject();
    }
}
