<?php

namespace App\Model;

use App\DAO\PartidaDAO;
class PartidaModel extends Model
{
    public $id, $id_usuario, $pontuacao, $finalizada, $data_criacao;

    public function nova()
    {
        $dao = new PartidaDAO();

        $this->id = $dao->insert($this->id_usuario);
    }

    public function selectById()
    {
        $dao = new PartidaDAO();

        $dados_partida = $dao->selectById($this->id);

        if (is_object($dados_partida))
            return $dados_partida;
        else
            null;
    }

    public function update()
    {
        $dao = new PartidaDAO();
        $dao->updateById($this);
    }

    public function selectRanking()
    {
        $dao = new PartidaDAO();

        $this->rows = $dao->selectRanking();
    }
}