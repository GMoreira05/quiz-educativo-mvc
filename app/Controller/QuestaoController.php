<?php

namespace App\Controller;
use App\Model\QuestaoModel;


class QuestaoController extends Controller
{

    public static function form()
    {
        parent::isAdmin();
        $model = new QuestaoModel();
        if (isset($_GET['id'])) {
            $model->id = (int) $_GET['id'];
            $model = $model->getById();
        }

        parent::render('Admin/FormQuestao', $model);
    }

    public static function save()
    {
        parent::isAdmin();
        $model = new QuestaoModel();

        $model->id = $_POST['id'];
        $model->enunciado = $_POST['enunciado'];
        $model->alternativa_a = $_POST['alternativa-a'];
        $model->alternativa_b = $_POST['alternativa-b'];
        $model->alternativa_c = $_POST['alternativa-c'];
        $model->alternativa_d = $_POST['alternativa-d'];
        $model->alternativa_correta = $_POST['alternativa-correta'];

        $model->save();

        header('location: /admin/questoes');
    }

    public static function excluir()
    {
        parent::isAdmin();
        $model = new QuestaoModel();
        $model->id = (int) $_GET['id'];
        $model->excluir();

        header('location: /admin/questoes');
    }

    public static function lista()
    {
        parent::isAdmin();

        $model = new QuestaoModel();
        $model->getAllRows();

        parent::render('Admin/ListaQuestoes', $model);
    }
}