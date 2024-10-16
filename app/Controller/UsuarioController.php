<?php

namespace App\Controller;
use App\Model\UsuarioModel;
use App\Model\QuestaoModel;


class UsuarioController extends Controller
{
    public static function homeUsuario()
    {
        if (!isset($_SESSION['usuario'])) {
            parent::render('Usuario/FormLogin');
        } else {
            if (isset($_SESSION['admin'])) {
                $model = new QuestaoModel();
                $model->getAllRows();

                parent::render('Admin/Home', $model);
            }
        }
    }

    public static function login()
    {
        $model = new UsuarioModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario = $model->autenticar();

        if ($usuario !== null) {
            $_SESSION['usuario'] = $usuario->id;

            if ($usuario->admin == 1)
                $_SESSION['admin'] = true;
            else
                $_SESSION['admin'] = false;

            header("Location: /");

        } else
            header("Location: /usuario?erro=true");
    }
}