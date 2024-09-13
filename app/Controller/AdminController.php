<?php

namespace App\Controller;


class AdminController extends Controller
{
    public static function loginForm()
    {
        parent::render('Admin/FormLogin');
    }
}