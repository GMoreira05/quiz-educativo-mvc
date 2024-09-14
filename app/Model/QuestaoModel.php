<?php

namespace App\Model;

use App\DAO\QuestaoDAO;
class QuestaoModel extends Model
{
    public $id, $enunciado, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_correta;
    public $rows;

    public function getById(int $id)
    {
        $dao = new QuestaoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new QuestaoModel();
    }

    public function getAllRows()
    {
        $dao = new QuestaoDAO();

        $this->rows = $dao->select();
    }
}