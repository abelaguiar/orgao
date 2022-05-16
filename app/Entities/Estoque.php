<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="EstoqueRepository")
 * @ORM\Table(name="estoques")
 */
class Estoque  
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;

    /** @ORM\Column(name= "nome_produto", type="string") */
    private $nomeProduto;

     /** @ORM\Column(type="string") */
     private $quantidade;

    /** 
     * @ManyToOne(targetEntity="Fornecedor")
     * @JoinColumn(name="fornecedor_id", referencedColumnName="id") 
     */
    private $fornecedor;

    public function getId()
    {
        return $this->id;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }
    
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setFornecedor(Fornecedor $fornecedor): void
    {
        $this->fornecedor = $fornecedor;
    }

    public function getFornecedor(): Fornecedor
    {
        return $this->fornecedor;
    }
}
