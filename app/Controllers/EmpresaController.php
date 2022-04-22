<?php

namespace App\Controllers;

use App\Entities\Empresa;
use PlugRoute\Http\Request;

class EmpresaController
{
    public function listagem()
    {
        $empresas = entityManager()->getRepository(Empresa::class)->findAll();

        return view('empresas/listagem', compact('empresas'));
    }

    public function mostrarItem($empresaId)
    {
        $repository = entityManager()->getRepository(Empresa::class);
        $empresa = $repository->find($empresaId);

        if ($empresa === null) {
            echo "Empresa com ID $empresaId não existe.\n";
            exit(1);
        }

        return view('empresas/mostrar-item', compact('empresa'));
    }

    public function cadastrar()
    {
        return view('empresas/cadastrar');
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('nome'))) {
            $empresa = new Empresa();
            $empresa->setNome($request->get('nome'));

            $em = entityManager();
            $em->persist($empresa);
            $em->flush();
        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($empresaId)
    {
        $repository = entityManager()->getRepository(Empresa::class);
        $empresa = $repository->find($empresaId);

        if ($empresa === null) {
            echo "Empresa com ID $empresaId não existe.\n";
            exit(1);
        }

        return view('empresas/editar', compact('empresa'));
    }

    public function atualizar($empresaId, Request $request)
    {
        $em = entityManager();

        $repository = $em->getRepository(Empresa::class);
        $empresa = $repository->find($empresaId);

        if ($empresa === null) {
            echo "Empresa com ID $empresaId não existe.\n";
            exit(1);
        }

        $empresa->setNome($request->get('nome'));

        $em->flush();

        return back();
    }

    public function excluir($empresaId)
    {
        $em = entityManager();

        $repository = $em->getRepository(Empresa::class);
        $empresa = $repository->find($empresaId);

        if ($empresa === null) {
            echo "Empresa com ID $empresaId não existe.\n";
            exit(1);
        }

        $em->remove($empresa);
        $em->flush();

        return back();
    }
}
