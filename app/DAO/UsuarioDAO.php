<?php

namespace App\DAO;

use App\Model\UsuarioModel;
use \PDO;

class UsuarioDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = md5(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\UsuarioModel"); // Retornando um objeto específico PessoaModel
    }

    public function selectByEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\UsuarioModel");
    }

    public function insert($email, $senha, $nome)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, md5(?))";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);
        $stmt->execute();

        return $this->conexao->lastInsertId('usuarios');
    }

    public function select()
    {
        $sql = "SELECT id, nome, email, admin FROM usuarios ORDER BY id DESC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}