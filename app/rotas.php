<?php

use App\Controller\PartidaController;
use App\Controller\UsuarioController;
use App\Controller\QuestaoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        PartidaController::index();
        break;

    case '/usuario/login':
        UsuarioController::login();
        break;

    case '/usuario/logout':
        UsuarioController::logout();
        break;

    case '/usuario/cadastro':
        UsuarioController::cadastrar();
        break;

    case '/adm/formquestao':
        QuestaoController::form();
        break;

    case '/questao/save':
        QuestaoController::save();
        break;

    case '/partida/nova':
        PartidaController::nova();
        break;

    case '/partida/finalizar':
        PartidaController::finalizar();
        break;

    default:
        echo "Erro 404";
        break;
}