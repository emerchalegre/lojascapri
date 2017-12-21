<?php

namespace App\Model\Gazin;

use JMS\Serializer\Annotation as JMS;

class Saldo
{
    /**
     * @JMS\Type("integer")
     */
    private $idfilial;

    /**
     * @JMS\Type("integer")
     */
    private $filial;

    /**
     * @JMS\Type("integer")
     */
    private $idfilialsaldo;

    /**
     * @JMS\Type("integer")
     */
    private $filialsaldo;

    /**
     * @JMS\Type("integer")
     */
    private $idproduto;

    /**
     * @JMS\Type("integer")
     */
    private $idgradex;

    /**
     * @JMS\Type("string")
     */
    private $gradex;

    /**
     * @JMS\Type("integer")
     */
    private $idgradey;

    /**
     * @JMS\Type("string")
     */
    private $gradey;

    /**
     * @JMS\Type("float")
     */
    private $precosistema;

    /**
     * @JMS\Type("float")
     */
    private $saldo_liquido;

    /**
     * @JMS\Type("integer")
     */
    private $iddepartamento;

    /**
     * @return mixed
     */
    public function getIdfilial()
    {
        return $this->idfilial;
    }

    /**
     * @param mixed $idfilial
     *
     * @return Saldo
     */
    public function setIdfilial($idfilial)
    {
        $this->idfilial = $idfilial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilial()
    {
        return $this->filial;
    }

    /**
     * @param mixed $filial
     *
     * @return Saldo
     */
    public function setFilial($filial)
    {
        $this->filial = $filial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdfilialsaldo()
    {
        return $this->idfilialsaldo;
    }

    /**
     * @param mixed $idfilialsaldo
     *
     * @return Saldo
     */
    public function setIdfilialsaldo($idfilialsaldo)
    {
        $this->idfilialsaldo = $idfilialsaldo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilialsaldo()
    {
        return $this->filialsaldo;
    }

    /**
     * @param mixed $filialsaldo
     *
     * @return Saldo
     */
    public function setFilialsaldo($filialsaldo)
    {
        $this->filialsaldo = $filialsaldo;
        return $this;
    }

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
     * @return Saldo
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
     * @return Saldo
     */
    public function setIdgradex($idgradex)
    {
        $this->idgradex = $idgradex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGradex()
    {
        return $this->gradex;
    }

    /**
     * @param mixed $gradex
     *
     * @return Saldo
     */
    public function setGradex($gradex)
    {
        $this->gradex = $gradex;
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
     * @return Saldo
     */
    public function setIdgradey($idgradey)
    {
        $this->idgradey = $idgradey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGradey()
    {
        return $this->gradey;
    }

    /**
     * @param mixed $gradey
     *
     * @return Saldo
     */
    public function setGradey($gradey)
    {
        $this->gradey = $gradey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecosistema()
    {
        return $this->precosistema;
    }

    /**
     * @param mixed $precosistema
     *
     * @return Saldo
     */
    public function setPrecosistema($precosistema)
    {
        $this->precosistema = $precosistema;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaldoLiquido()
    {
        return $this->saldo_liquido;
    }

    /**
     * @param mixed $saldo_liquido
     *
     * @return Saldo
     */
    public function setSaldoLiquido($saldo_liquido)
    {
        $this->saldo_liquido = $saldo_liquido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    /**
     * @param mixed $iddepartamento
     *
     * @return Saldo
     */
    public function setIddepartamento($iddepartamento)
    {
        $this->iddepartamento = $iddepartamento;
        return $this;
    }

}