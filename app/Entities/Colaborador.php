<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="ColaboradorRepository")
 * @ORM\Table(name="colaboradores")
 */
class Colaborador  
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;

    /** @ORM\Column(type="string") */
    private $nome;

    /** 
     * @ManyToOne(targetEntity="Empresa")
     * @JoinColumn(name="empresa_id", referencedColumnName="id") 
     */
    private $empresa;

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEmpresa(Empresa $empresa): void
    {
        $this->empresa = $empresa;
    }

    public function getEmpresa(): Empresa
    {
        return $this->empresa;
    }
}
