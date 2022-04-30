<?php

namespace App\Controllers;

use App\Entities\Colaborador;
use App\Entities\Empresa;
use PlugRoute\Http\Request;

class ColaboradorController extends AbstractController
{
    public function listagem()
    {
        $colaboradores = $this->entityManager()->getRepository(Colaborador::class)->findAll();

        return view('colaboradores/listagem', compact('colaboradores'));
    }

    public function mostrarItem($colaboradorId)
    {
        $repository = $this->entityManager()->getRepository(Colaborador::class);
        $colaborador = $repository->find($colaboradorId);

        if ($colaborador === null) {
            echo "Colaborador com ID $colaboradorId não existe.\n";
            exit(1);
        }

        return view('colaboradores/mostrar-item', compact('colaborador'));
    }

    public function cadastrar()
    {
        $empresas = $this->entityManager()->getRepository(Empresa::class)->findAll();

        return view('colaboradores/cadastrar', compact('empresas'));
    }

    public function salvar(Request $request)
    {
        if (!is_null($request->get('nome')) 
            && !is_null($request->get('empresa_id'))
        ) {
            $em = $this->entityManager();

            $colaborador = new Colaborador();
            $colaborador->setNome($request->get('nome'));

            $empresa = $em->getRepository(Empresa::class)->find(
                $request->get('empresa_id')
            );

            $colaborador->setEmpresa($empresa);

            $em->persist($colaborador);
            $em->flush();
        } else {
            echo "Nome em branco.\n";
            exit(1);
        }

        return back();
    }

    public function editar($colaboradorId)
    {
        $em = $this->entityManager();
        $colaborador = $em->getRepository(Colaborador::class)->find($colaboradorId);
        $empresas = $em->getRepository(Empresa::class)->findAll();

        if ($colaborador === null) {
            echo "Colaborador com ID $colaboradorId não existe.\n";
            exit(1);
        }

        return view('colaboradores/editar', compact('colaborador', 'empresas'));
    }

    public function atualizar($colaboradorId, Request $request)
    {
        $em = $this->entityManager();

        $colaborador = $em->getRepository(Colaborador::class)->find($colaboradorId);

        if ($colaborador === null) {
            echo "Colaborador com ID $colaboradorId não existe.\n";
            exit(1);
        }

        $empresa = $em->getRepository(Empresa::class)->find(
            $request->get('empresa_id')
        );

        $colaborador->setNome($request->get('nome'));
        $colaborador->setEmpresa($empresa);

        $em->flush();

        return back();
    }

    public function excluir($colaboradorId)
    {
        $em = $this->entityManager();

        $repository = $em->getRepository(Colaborador::class);
        $colaborador = $repository->find($colaboradorId);

        if ($colaborador === null) {
            echo "Colaborador com ID $colaboradorId não existe.\n";
            exit(1);
        }

        $em->remove($colaborador);
        $em->flush();

        return back();
    }
}
