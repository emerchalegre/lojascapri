<?php

namespace App\Model\Gazin;

use JMS\Serializer\Annotation as JMS;

class Produto
{
    /**
     *@JMS\Type("integer")
     */
    private $idproduto;

    /**
     *@JMS\Type("integer")
     */
    private $idgradex;

    /**
     *@JMS\Type("integer")
     */
    private $idgradey;

    /**
     * @JMS\Type("ArrayCollection<App\Model\Gazin\Saldo>")
     */
    private $descricao;

    /**
     * @return mixed
     */
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    /**
     * @param mixed $idproduto
     *
     * @return Produto
     */
    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdgradex()
    {
        return $this->idgradex;
    }

    /**
     * @param mixed $idgradex
     *
     * @return Produto
     */
    public function setIdgradex($idgradex)
    {
        $this->idgradex = $idgradex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdgradey()
    {
        return $this->idgradey;
    }

    /**
     * @param mixed $idgradey
     *
     * @return Produto
     */
    public function setIdgradey($idgradey)
    {
        $this->idgradey = $idgradey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return Produto
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

}