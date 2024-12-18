<?php

namespace App\Model;

use App\DAO\QuestaoDAO;
class QuestaoModel extends Model
{
    public $id, $enunciado, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_correta;
    public $rows;

    public function getById()
    {
        $dao = new QuestaoDAO();

        $obj = $dao->selectById($this->id);

        return ($obj) ? $obj : new QuestaoModel();
    }

    public function getAllRows()
    {
        $dao = new QuestaoDAO();

        $this->rows = $dao->select();
    }

    public function save()
    {
        $dao = new QuestaoDAO();

        $this->id != null ? $dao->update($this) : $dao->insert($this);
    }

    public function excluir()
    {
        $dao = new QuestaoDAO();

        $dao->excluir($this);
    }
}