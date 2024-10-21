<?php

namespace App\DAO;

use App\Model\QuestaoModel;
use \PDO;

class QuestaoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM questoes WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\QuestaoModel");
    }

    public function select()
    {
        $sql = "SELECT * FROM questoes";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public function insert(QuestaoModel $model)
    {
        $sql = "INSERT INTO questoes (enunciado, alternativa_a, alternativa_b, alternativa_c, alternativa_d, alternativa_correta) VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->enunciado);
        $stmt->bindValue(2, $model->alternativa_a);
        $stmt->bindValue(3, $model->alternativa_b);
        $stmt->bindValue(4, $model->alternativa_c);
        $stmt->bindValue(5, $model->alternativa_d);
        $stmt->bindValue(6, $model->alternativa_correta);

        $stmt->execute();
    }

    public function update(QuestaoModel $model)
    {
        $sql = "UPDATE questoes SET enunciado = ?, alternativa_a = ?, alternativa_b = ?, alternativa_c = ?, alternativa_d = ?, alternativa_correta = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->enunciado);
        $stmt->bindValue(2, $model->alternativa_a);
        $stmt->bindValue(3, $model->alternativa_b);
        $stmt->bindValue(4, $model->alternativa_c);
        $stmt->bindValue(5, $model->alternativa_d);
        $stmt->bindValue(6, $model->alternativa_correta);
        $stmt->bindValue(7, $model->id);

        $stmt->execute();
    }

    public function excluir(QuestaoModel $model)
    {
        $sql = "DELETE FROM questoes WHERE id = ?";


        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id);

        $stmt->execute();
    }
}