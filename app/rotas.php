<?php

use App\Controller\PartidaController;
use App\Controller\AdminController;
use App\Controller\QuestaoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        PartidaController::index();
        break;

    case '/partida/criar':
        PartidaController::criar();
        break;

    case '/adm':
        AdminController::home();
        break;

    case '/adm/login':
        AdminController::login();
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