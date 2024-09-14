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
}