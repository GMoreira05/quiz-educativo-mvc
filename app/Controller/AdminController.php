<?php

namespace App\Controller;


class AdminController extends Controller
{
    public static function home()
    {
        if (isset($_SESSION['admin'])) {
            parent::render('Admin/FormLogin');
        } else {
            parent::render('Admin/Home');
        }
    }

    public static function form()
    {
        parent::render('Admin/FormQuestao');
    }
}