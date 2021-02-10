<?php
class userController
{
    public $users;

    function __construct()
    {
        $this->users = [
            ["id" => 1, "nome" => "Hiago", "idade" => 21, "parentesco" => "é você !"],
            ["id" => 2, "nome" => "Alyne", "idade" => 22, "parentesco" => "Prima"],
            ["id" => 3, "nome" => "Isabella", "idade" => 16, "parentesco" => "Irmã"],
            ["id" => 4, "nome" => "Alicia", "idade" => 1, "parentesco" => "Prima"],
        ];
    }

    public function getAllUsers()
    {
        return $this->users;
    }

    public function createUser($nome, $idade, $parentesco)
    {
        array_push(
            $this->users,
            [
                "id" => 4,
                "nome" => $nome,
                "idade" => $idade,
                "parentesco" => $parentesco,
            ]
        );

        var_dump($this->users);
    }
};
