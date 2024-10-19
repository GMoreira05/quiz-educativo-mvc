<?php

namespace App\DAO;

use App\Model\PartidaModel;
use \PDO;

class PartidaDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($id_usuario)
    {
        $sql = "INSERT INTO partidas (id_usuario) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_usuario);
        $stmt->execute();

        return $this->conexao->lastInsertId('partidas');
    }

    public function selectById($id_partida)
    {
        $sql = "SELECT * FROM partidas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_partida);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\PartidaModel");
    }

    public function updateById(PartidaModel $model)
    {
        $sql = "UPDATE partidas SET id_usuario = ?, pontuacao = ?, finalizada = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id_usuario);
        $stmt->bindValue(2, $model->pontuacao);
        $stmt->bindValue(3, $model->finalizada);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }
}