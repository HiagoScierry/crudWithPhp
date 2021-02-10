<?php require('./components/head.php') ?>

<head>
    <link rel="stylesheet" href="./assets/main.css">
</head>

<body>
    <?php require('./components/header.php') ?>
    <div class="alignButton">
        <a href="../index.php">
            <button type="button" class="btn btn-primary">
                Voltar para o inicio
            </button>
        </a>
        <a href="./add.php"> <button type="button" class="btn btn-success">Adicionar novo item</button></a>

    </div>
    <div class="alignList">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Parentesco</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('../Controller/usersController.php');
                $ctx = new userController();
                $users = $ctx->getAllUsers();
                foreach ($users as $user) {
                    echo (' 
                    <tr>
                        <th scope="row">' . $user['id'] . '</th>
                        <td>' . $user['nome'] . '</td>
                        <td>' . $user['idade'] . '</td>
                        <td>' . $user['parentesco'] . '</td>
                    </tr>');
                };
                ?>
            </tbody>
        </table>
    </div>
</body>