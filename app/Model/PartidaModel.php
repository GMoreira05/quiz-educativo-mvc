<?php

namespace App\Model;

use App\DAO\PartidaDAO;
class PartidaModel extends Model
{
    public $id, $data_criacao;

    public function nova()
    {
        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
}