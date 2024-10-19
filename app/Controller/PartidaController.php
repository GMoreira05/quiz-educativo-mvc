<?php

namespace App\Controller;

use App\Model\PartidaModel;

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

        $_SESSION['id_partida'] = $model->id;
        header('location: /');
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
}