<?php

namespace App\DAO;

use App\Model\PartidaQuestaoModel;
use \PDO;

class PartidaQuestaoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectQuestaoByIdPartida($id_partida)
    {
        $sql = "SELECT * FROM partidas_questoes WHERE id = (SELECT MAX(id) FROM partidas_questoes where id_partida = ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_partida);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\PartidaQuestaoModel");
    }

    public function updateById(PartidaQuestaoModel $model)
    {
        $sql = "UPDATE partidas_questoes SET id_partida = ?, id_questao = ?, resposta_escolhida = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id_partida);
        $stmt->bindValue(2, $model->id_questao);
        $stmt->bindValue(3, $model->resposta_escolhida);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function gerarNova($id_partida)
    {
        $sql = "INSERT INTO partidas_questoes (id_partida, id_questao)
                SELECT ?, q.id
                FROM questoes q
                LEFT JOIN partidas_questoes pq ON q.id = pq.id_questao AND pq.id_partida = ?
                WHERE pq.id_questao IS NULL
                ORDER BY RAND()
                LIMIT 1;";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_partida);
        $stmt->bindValue(2, $id_partida);
        $stmt->execute();

        return $this->conexao->lastInsertId('partidas_questoes');
    }

    public function obterDisponiveis($id_partida)
    {
        $sql = "SELECT id FROM questoes WHERE id NOT IN (SELECT id_questao FROM partidas_questoes WHERE id_partida = ?) ORDER BY RAND()";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_partida);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}