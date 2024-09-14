<?php

namespace App\Controller;
use App\Model\AdminModel;
use App\Model\QuestaoModel;


class AdminController extends Controller
{
    public static function home()
    {
        if (!isset($_SESSION['admin'])) {
            parent::render('Admin/FormLogin');
        } else {
            $model = new QuestaoModel();
            $model->getAllRows();

            parent::render('Admin/Home', $model);
        }
    }

    public static function login()
    {
        $model = new AdminModel();

        $model->usuario = $_POST['usuario'];
        $model->senha = $_POST['senha'];

        $admin = $model->autenticar();

        if ($admin !== null) {
            $_SESSION['admin'] = $admin;

            header("Location: /adm");

        } else
            header("Location: /adm?erro=true");
    }
}