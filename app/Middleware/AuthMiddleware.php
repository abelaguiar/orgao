<?php

namespace App\Middleware;

use PlugRoute\Http\Request;
use PlugRoute\Middleware\PlugRouteMiddleware;

class AuthMiddleware implements PlugRouteMiddleware
{
    public function handler(Request $request)
    {
        if (!isset($_SESSION['logged']) || $_SESSION['logged'] === false) {
            
            header('Location: //'.$_SERVER['HTTP_HOST'].'/login');
        }
    }
}
