<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 13/07/2018
 * Time: 22:58
 */

class CervejaModel
{
    private $nome;
    private $teorAlcoolico;
    private $temperaturaIdeal;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTeorAlcoolico()
    {
        return $this->teorAlcoolico;
    }

    /**
     * @param mixed $teorAlcoolico
     */
    public function setTeorAlcoolico($teorAlcoolico)
    {
        $this->teorAlcoolico = $teorAlcoolico;
    }

    /**
     * @return mixed
     */
    public function getTemperaturaIdeal()
    {
        return $this->temperaturaIdeal;
    }

    /**
     * @param mixed $temperaturaIdeal
     */
    public function setTemperaturaIdeal($temperaturaIdeal)
    {
        $this->temperaturaIdeal = $temperaturaIdeal;
    }
}