<?php

namespace App\Model;

use App\DAO\PartidaQuestaoDAO;
class PartidaQuestaoModel extends Model
{
    public $id, $id_partida, $id_questao, $resposta_escolhida;

    public function selectQuestaoAtual()
    {
        $dao = new PartidaQuestaoDAO();

        $questao_atual = $dao->selectQuestaoByIdPartida($this->id_partida);

        if (is_object($questao_atual))
            return $questao_atual;
        else
            null;
    }

    public function update()
    {
        $dao = new PartidaQuestaoDAO();
        $dao->updateById($this);
    }

    public function gerarNova()
    {
        $dao = new PartidaQuestaoDAO();
        $this->id = $dao->gerarNova($this->id_partida);
    }

    public function obterDisponiveis()
    {
        $dao = new PartidaQuestaoDAO();
        return $dao->obterDisponiveis($this->id_partida);
    }
}