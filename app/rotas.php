<?php

use App\Controller\PartidaController;
use App\Controller\UsuarioController;
use App\Controller\QuestaoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        PartidaController::index();
        break;

    case '/partida/criar':
        PartidaController::criar();
        break;

    case '/usuario':
        UsuarioController::homeUsuario();
        break;

    case '/usuario/login':
        UsuarioController::login();
        break;

    case '/adm/formquestao':
        QuestaoController::form();
        break;

    case '/questao/save':
        QuestaoController::save();
        break;

    default:
        echo "Erro 404";
        break;
}