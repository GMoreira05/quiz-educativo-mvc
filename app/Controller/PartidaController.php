<?php

namespace App\Controller;

use App\Model\PartidaModel;
use App\Model\PartidaQuestaoModel;
use App\Model\QuestaoModel;

class PartidaController extends Controller
{
    public static function index()
    {
        if (isset($_SESSION['id_partida'])) {
            parent::render('Partida/MostrarQuestao');
        } else {
            parent::render('Partida/NovaPartida');
        }
    }

    public static function nova()
    {
        if (!isset($_SESSION['usuario']))
            header('location: /usuario/login');

        $model = new PartidaModel();

        $model->id_usuario = $_SESSION['usuario'];
        $model->nova();

        $partida_questao_model = new PartidaQuestaoModel();
        $partida_questao_model->id_partida = $model->id;
        $partida_questao_model->gerarNova();

        $_SESSION['id_partida'] = $model->id;
        header('location: /');
    }

    public static function responder()
    {
        if (!isset($_SESSION['usuario']))
            header('location: /usuario/login');

        if (!isset($_SESSION['id_partida'], $_GET['resposta']))
            header('location: /');

        if ($_GET['resposta'] != 'a' && $_GET['resposta'] != 'b' && $_GET['resposta'] != 'c' && $_GET['resposta'] != 'd')
            header('location: /');

        $partida_questao_model = new PartidaQuestaoModel();
        $partida_questao_model->id_partida = $_SESSION['id_partida'];
        $partida_questao_model = $partida_questao_model->selectQuestaoAtual();

        $questao_model = new QuestaoModel();
        $questao_model->id = $partida_questao_model->id_questao;
        $questao_model = $questao_model->getById();

        $partida_model = new PartidaModel();
        $partida_model->id = $_SESSION['id_partida'];
        $partida_model = $partida_model->selectById();

        $partida_questao_model->resposta_escolhida = $_GET['resposta'];
        if ($partida_questao_model->resposta_escolhida != $questao_model->alternativa_correta) {
            $partida_model->finalizada = 1;
            header('location: /partida/errou');
        } else {
            $partida_model->pontuacao++;
            $partida_questao_model->update();

            // Verificar se tem questoes disponíveis antes de gerar uma nova questão p/ essa partida
            $arr = $partida_questao_model->obterDisponiveis();
            var_dump($arr);
            if (count($arr) == 0)
                header('location: /partida/zerou');
            else
                header('location: /');

            $partida_questao_model->gerarNova();
        }

        $partida_model->update();
    }

    public static function finalizar()
    {
        if (isset($_SESSION['usuario'], $_SESSION['id_partida'])) {
            $model = new PartidaModel();
            $model->id = $_SESSION['id_partida'];

            $model = $model->selectById();
            $model->finalizada = 1;
            $model->update();

            unset($_SESSION['id_partida']);

            header('location: /');
        }
    }

    public static function zerou()
    {

        if (isset($_SESSION['usuario'], $_SESSION['id_partida'])) {
            $model = new PartidaModel();
            $model->id = $_SESSION['id_partida'];

            $model = $model->selectById();
            unset($_SESSION['id_partida']);

            parent::render('Partida/Zerou');
        } else
            header('location: /');
    }

}