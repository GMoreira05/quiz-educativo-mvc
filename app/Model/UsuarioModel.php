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

    public function save()
    {
        $dao = new UsuarioDAO();

        $this->id = $dao->insert($this->email, $this->senha, $this->nome);
    }

    public function getByEmail()
    {
        $dao = new UsuarioDAO();

        $dados_usuario = $dao->selectByEmail($this->email);

        if (is_object($dados_usuario))
            return $dados_usuario;
        else
            null;
    }

    public function getAllRows()
    {
        $dao = new UsuarioDAO();

        $this->rows = $dao->select();
    }
}