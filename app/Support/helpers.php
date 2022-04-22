<?php

function view($page, $data = [])
{
    require_once dirname(__DIR__)."/Views/".$page.'.php';
}

function entityManager()
{
   require_once dirname(__DIR__)."/../config/bootstrap.php";

   return $entityManager;
}

function back()
{
    header('Location:'.$_SERVER['HTTP_REFERER']);
}