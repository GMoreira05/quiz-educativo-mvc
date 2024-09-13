<?php

namespace App\Model;

use App\DAO\QuestaoDAO;
class QuestaoModel extends Model
{
    public $id, $enunciado, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_correta;

}