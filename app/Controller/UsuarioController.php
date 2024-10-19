<?php

namespace App\Controller;
use App\Model\UsuarioModel;
use App\Model\QuestaoModel;


class UsuarioController extends Controller
{

    public static function homeAdmin()
    {
        if (!isset($_SESSION['admin']))
            header('location: /');

        $model = new QuestaoModel();
        $model->getAllRows();

        parent::render('Admin/Home', $model);
    }

    public static function login()
    {
        if (isset($_POST['email'], $_POST['senha'])) {
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
                header("Location: /usuario/login?erro=true");
        } else if (!isset($_SESSION['usuario'])) {
            parent::render('Usuario/FormLogin');
        } else {
            header('location: /');
        }
    }

    public static function cadastrar()
    {
        if (isset($_POST['email'], $_POST['senha'], $_POST['nome'])) {
            $model = new UsuarioModel();

            $model->email = $_POST['email'];
            $model->senha = $_POST['senha'];
            $model->nome = $_POST['nome'];

            $model->save();

            $_SESSION['usuario'] = $model->id;
            header('location: /');
        } else {
            parent::render('Usuario/FormCadastro');
        }
    }

    public static function logout()
    {
        session_unset();
        header('location: /');
    }
}