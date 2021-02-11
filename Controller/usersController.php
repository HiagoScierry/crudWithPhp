<?php

require('../Model/UserModel.php');
class UserController
{


    public function getAllUsers()
    {
        $userModel = new UserModel();
        return $userModel->getAll();
    }

    public function createUser($nome, $idade, $parentesco)
    {
        $userModel = new UserModel();
        $lastID = $userModel->insertUser($nome, $idade, $parentesco);
        return $lastID;
    }
};
