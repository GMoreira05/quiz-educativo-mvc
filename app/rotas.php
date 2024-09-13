<?php

use App\Controller\PartidaController;
use App\Controller\AdminController;

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

    case '/adm/formquestao':
        AdminController::form();
        break;

    default:
        echo "Erro 404";
        break;
}