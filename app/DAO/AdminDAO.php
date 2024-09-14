<?php

namespace App\DAO;

use App\Model\AdminModel;
use \PDO;

class AdminDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectByUsuarioAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM administradores WHERE usuario = ? AND senha = md5(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\AdminModel"); // Retornando um objeto específico PessoaModel
    }



}