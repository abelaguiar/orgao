<?php

namespace App\Controllers;

use App\Entities\Fornecedor;
use PlugRoute\Http\Request;

class FornecedorController extends AbstractController
{
    public function listagem()
    {
        $fornecedores = $this->entityManager()->getRepository(Fornecedor::class)->findAll();

        return view('fornecedores/listagem', compact('fornecedores'));
    }

    public function mostrarItem($fornecedorId)
    {
        $repository = $this->entityManager()->getRepository(Fornecedor::class);
        $fornecedor = $repository->find($fornecedorId);

        if ($fornecedor === null) {
            echo "Fornecedor com ID $fornecedorId não existe.\n";
            exit(1);
        }

        return view('fornecedores/mostrar-item', compact('fornecedor'));
    }

    public function cadastrar()
    {
        return view('fornecedores/cadastrar');
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('nome'))) {
            $fornecedor = new Fornecedor();
            $fornecedor->setNome($request->get('nome'));

            $em = $this->entityManager();
            $em->persist($fornecedor);
            $em->flush();
        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($fornecedorId)
    {
        $repository = $this->entityManager()->getRepository(Fornecedor::class);
        $fornecedor = $repository->find($fornecedorId);

        if ($fornecedor === null) {
            echo "Fornecedor com ID $fornecedorId não existe.\n";
            exit(1);
        }

        return view('fornecedores/editar', compact('fornecedor'));
    }

    public function atualizar($fornecedorId, Request $request)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Fornecedor::class);
        $fornecedor = $repository->find($fornecedorId);

        if ($fornecedor === null) {
            echo "Fornecedor com ID $fornecedorId não existe.\n";
            exit(1);
        }

        $fornecedor->setNome($request->get('nome'));

        $em->flush();

        return back();
    }

    public function excluir($fornecedorId)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Fornecedor::class);
        $fornecedor = $repository->find($fornecedorId);

        if ($fornecedor === null) {
            echo "Fornecedor com ID $fornecedorId não existe.\n";
            exit(1);
        }

        $em->remove($fornecedor);
        $em->flush();

        return back();
    }
}
