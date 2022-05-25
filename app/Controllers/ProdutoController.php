<?php

namespace App\Controllers;

use App\Entities\Produto;
use PlugRoute\Http\Request;

class ProdutoController extends AbstractController
{
    public function listagem()
    {
        $produtos = $this->entityManager()->getRepository(Produto::class)->findAll();

        return view('produtos/listagem', compact('produtos'));
    }

    public function mostrarItem($produtoId)
    {
        $repository = $this->entityManager()->getRepository(Produto::class);
        $produto = $repository->find($produtoId);

        if ($produto === null) {
            echo "Produto com ID $produtoId não existe.\n";
            exit(1);
        }

        return view('produtos/mostrar-item', compact('produto'));
    }

    public function cadastrar()
    {
        return view('produtos/cadastrar');
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('nome'))            
        && !is_null($request->get('valor'))
        ) {
            $produto = new Produto();
            $produto->setNome($request->get('nome'));
            $produto->setValor($request->get('valor'));

            $em = $this->entityManager();
            $em->persist($produto);
            $em->flush();
        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($produtoId)
    {
        $repository = $this->entityManager()->getRepository(Produto::class);
        $produto = $repository->find($produtoId);

        if ($produto === null) {
            echo "Produto com ID $produtoId não existe.\n";
            exit(1);
        }

        return view('produtos/editar', compact('produto'));
    }

    public function atualizar($produtoId, Request $request)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Produto::class);
        $produto = $repository->find($produtoId);

        if ($produto === null) {
            echo "Produto com ID $produtoId não existe.\n";
            exit(1);
        }

        $produto->setNome($request->get('nome'));
        $produto->setValor($request->get('valor'));


        $em->flush();

        return back();
    }

    public function excluir($produtoId)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Produto::class);
        $produto = $repository->find($produtoId);

        if ($produto === null) {
            echo "Produto com ID $produtoId não existe.\n";
            exit(1);
        }

        $em->remove($produto);
        $em->flush();

        return back();
    }
}
