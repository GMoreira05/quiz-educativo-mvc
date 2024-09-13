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

    public static function criar()
    {
        $_SESSION['id_partida'] = 1;
        header('location: /');
    }
}