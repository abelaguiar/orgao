<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Entities\Usuario;
use PlugRoute\Http\Request;

class LoginController extends AbstractController
{
    public function index()
    {
        return view('login/index');
    }

    public function login(Request $request)
    {
        if ($request->get('email') && $request->get('senha')) {
            $email = $request->get('email');
            $senha = $request->get('senha');
            
            $repository = $this->entityManager()->getRepository(Usuario::class);
            $usuario = $repository->findOneBy([
                'email' => $email
            ]);

            if (password_verify($senha, $usuario->getSenha())) {
                $_SESSION['nome'] = $usuario->getNome();
                $_SESSION['email'] = $usuario->getEmail();
                $_SESSION['logged'] = true;
            } else {
                $_SESSION['logged'] = false;
            }
        }

        return redirect('/');
    }

    public function logout()
    {
        session_destroy();

        return redirect('/');
    }
}
