<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

class UsuarioModel extends Model
{
    public $id, $nome, $email, $senha, $admin;

    public function autenticar()
    {
        $dao = new UsuarioDAO();

        $dados_usuario_logado = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if (is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;
    }
}