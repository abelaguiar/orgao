<?php

namespace App\Controllers;

use App\Entities\Estoque;
use App\Entities\Fornecedor;
use App\Entities\Produto;
use PlugRoute\Http\Request;

class EstoqueController extends AbstractController
{
    public function listagem()
    {
        $estoques = $this->entityManager()->getRepository(Estoque::class)->findAll();

        return view('estoques/listagem', compact('estoques'));
    }

    public function mostrarItem($estoqueId)
    {
        $repository = $this->entityManager()->getRepository(Estoque::class);
        $estoque = $repository->find($estoqueId);

        if ($estoque === null) {
            echo "Estoque com ID $estoqueId não existe.\n";
            exit(1);
        }

        return view('estoques/mostrar-item', compact('estoque'));
    }

    public function cadastrar()
    {
        $fornecedores = $this->entityManager()->getRepository(Fornecedor::class)->findAll();

        return view('estoques/cadastrar', compact('fornecedores'));

        $produtos = $this->entityManager()->getRepository(Produto::class)->findAll();

        return view('estoques/cadastrar', compact('produtos'));
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('produto_id')) && !is_null($request->get('quantidade'))
            && !is_null($request->get('fornecedor_id')))
         {
            $em = $this->entityManager();

            $estoque = new Estoque();
            $estoque->setQuantidade($request->get('quantidade'));

            $fornecedor = $em->getRepository(Fornecedor::class)->find(
                $request->get('fornecedor_id'));
            
            $produto = $em->getRepository(Produto::class)->find(
                $request->get('produto_id')
            );

            $estoque->setFornecedor($fornecedor);
            $estoque->setProduto($produto);

            $em->persist($estoque);
            $em->flush();
        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($estoqueId)
    {
        $em = $this->entityManager();
        $estoque = $em->getRepository(Estoque::class)->find($estoqueId);
        $fornecedores = $em->getRepository(Fornecedor::class)->findAll();
        $produtos = $em->getRepository(Produto::class)->findAll();

        if ($estoque === null) {
            echo "Estoque com ID $estoqueId não existe.\n";
            exit(1);
        }

        return view('estoques/editar', compact('estoque', 'fornecedores','produtos'));
    }

    public function atualizar($estoqueId, Request $request)
    {
        $em = $this->entityManager();

        $estoque = $em->getRepository(Estoque::class)->find($estoqueId);

        if ($estoque === null) {
            echo "Estoque com ID $estoqueId não existe.\n";
            exit(1);
        }

        $fornecedor = $em->getRepository(Fornecedor::class)->find(
            $request->get('fornecedor_id'));
           
        $produto = $em->getRepository(Produto::class)->find(
                $request->get('produto_id')
        );

        $estoque->setProduto($produto);
        $estoque->setQuantidade($request->get('quantidade'));
        $estoque->setFornecedor($fornecedor);

        $em->flush();

        return back();
    }

    public function excluir($estoqueId)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Estoque::class);
        $estoque = $repository->find($estoqueId);

        if ($estoque === null) {
            echo "Estoque com ID $estoqueId não existe.\n";
            exit(1);
        }

        $em->remove($estoque);
        $em->flush();

        return back();
    }
}
