<?php

namespace App\Controllers;

use App\Entities\Usuario;
use PlugRoute\Http\Request;

class UsuarioController extends AbstractController
{
    public function listagem()
    {
        $usuarios =  $this->entityManager()->getRepository(Usuario::class)->findAll();

        return view('usuarios/listagem', compact('usuarios'));
    }

    public function mostrarItem($usuarioId)
    {
        $repository = $this->entityManager()->getRepository(Usuario::class);
        $usuario = $repository->find($usuarioId);

        if ($usuario === null) {
            echo "Usuario com ID $usuarioId não existe.\n";
            exit(1);
        }

        return view('usuarios/mostrar-item', compact('usuario'));
    }

    public function cadastrar()
    {
        return view('usuarios/cadastrar');
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('nome')) && !is_null($request->get('email'))) {

            $password = password_hash($request->get('senha'), PASSWORD_DEFAULT);

            $usuario = new Usuario();
            $usuario->setNome($request->get('nome'));
            $usuario->setEmail($request->get('email'));
            $usuario->setSenha($password);

            $em = $this->entityManager();
            $em->persist($usuario);
            $em->flush();

        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($usuarioId)
    {
        $repository = $this->entityManager()->getRepository(Usuario::class);
        $usuario = $repository->find($usuarioId);

        if ($usuario === null) {
            echo "Usuario com ID $usuarioId não existe.\n";
            exit(1);
        }

        return view('usuarios/editar', compact('usuario'));
    }

    public function atualizar($usuarioId, Request $request)
    {
        if (!is_null($request->get('nome')) && !is_null($request->get('email'))) {
            $em = $this->entityManager();

            $repository = $em->getRepository(Usuario::class);
            $usuario = $repository->find($usuarioId);

            if ($usuario === null) {
                echo "Usuario com ID $usuarioId não existe.\n";
                exit(1);
            }

            if (!empty($request->get('senha'))) {
                $password = password_hash($request->get('senha'), PASSWORD_DEFAULT);
                $usuario->setSenha($password);
            }

            $usuario->setNome($request->get('nome'));
            $usuario->setEmail($request->get('email'));

            $em->flush();
        } else {
            echo "Dados em branco.\n";
            exit(1);
        }

        return back();
    }

    public function excluir($usuarioId)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Usuario::class);
        $usuario = $repository->find($usuarioId);

        if ($usuario === null) {
            echo "Usuario com ID $usuarioId não existe.\n";
            exit(1);
        }

        $em->remove($usuario);
        $em->flush();

        return back();
    }
}
