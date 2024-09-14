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
            $model = $model->getById((int) $_GET['id']);
        }

        parent::render('Admin/FormQuestao', $model);
    }

    public static function save()
    {
        parent::isAdmin();
        $model = new QuestaoModel();

        $model->id = $_POST['id'];
        $model->enunciado = $_POST['enunciado'];
        $model->alternativa_a = $_POST['alternativa_a'];
        $model->alternativa_b = $_POST['alternativa_b'];
        $model->alternativa_c = $_POST['alternativa_c'];
        $model->alternativa_d = $_POST['alternativa_d'];
        $model->alternativa_correta = $_POST['alternativa_correta'];
    }
}