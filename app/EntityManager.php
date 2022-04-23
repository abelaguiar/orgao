<?php

namespace App;

class EntityManager
{
    protected $entityManager;

    public function __construct()
    {
        $this->entityManager = entityManager();
    }

    public function getObject()
    {
        return $this->entityManager;
    }
}
