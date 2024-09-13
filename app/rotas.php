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

    case '/adm/login':
        AdminController::loginForm();
        break;

    default:
        echo "Erro 404";
        break;
}