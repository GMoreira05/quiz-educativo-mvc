<?php

namespace App\Model;

use App\DAO\PartidaDAO;
class PartidaModel extends Model
{
    public $id, $data_criacao;

    public function nova()
    {
        echo 'Criar rota...';
    }
}