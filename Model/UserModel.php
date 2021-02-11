<?php
class UserModel
{
    public function getAll()
    {
        require '../Core/Conection.php';

        $sql = "SELECT * FROM users";
        $sql = $pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql;
        }
    }

    public function insertUser($nome, $idade, $parentesco)
    {
        require '../Core/Conection.php';

        $sql = "INSERT INTO `users`(`id`, `nome`, `idade`, `parentesco`) VALUES (null, $nome ,$idade ,$parentesco)";
        $sql = $pdo->query($sql);

        return $pdo->lastInsertId();
    }
}
