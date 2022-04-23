<?php

function entityManager()
{
   require_once dirname(__DIR__)."/../config/bootstrap.php";

   return $entityManager;
}

function view($page, $data = [])
{
    require_once dirname(__DIR__)."/Views/".$page.'.php';
}

function back()
{
    header('Location:'.$_SERVER['HTTP_REFERER']);
}

function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}