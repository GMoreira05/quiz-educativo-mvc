<?php

namespace App\Model;

use App\DAO\AdminDAO;

class AdminModel extends Model
{
    public $id, $usuario, $senha;

    public function autenticar()
    {
        $dao = new AdminDAO();

        $dados_usuario_logado = $dao->selectByUsuarioAndSenha($this->usuario, $this->senha);

        if (is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;
    }
}