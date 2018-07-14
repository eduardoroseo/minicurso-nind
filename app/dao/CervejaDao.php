<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 13/07/2018
 * Time: 22:58
 */

class CervejaDao
{
    private $con;

    public function __construct()
    {
        try {
            $this->con = Conexao::abrir();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function listar()
    {
        try {
            $stmt = $this->con->prepare("SELECT * FROM cervejas");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS, CervejaModel::class);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage() . "no arquivo: ". $e->getFile();
        }
    }

    public function inserir(CervejaModel $cerveja)
    {
        try {
            $stmt = $this->con->prepare("INSERT INTO cervejas (nome, temperaturaIdeal, teorAlcoolico) VALUES (:nome, :temperaturaIdeal, :teorAlcoolico)");

            $stmt->bindValue(":nome", $cerveja->getNome());
            $stmt->bindValue(":temperaturaIdeal", $cerveja->getTemperaturaIdeal());
            $stmt->bindValue(":teorAlcoolico", $cerveja->getTeorAlcoolico());

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage() . "no arquivo: ". $e->getFile();
        }
    }
}