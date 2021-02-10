<?php require('./View/components/head.php') ?>

<head>
    <link rel="stylesheet" href="./View/assets/main.css" />
</head>

<body>
    <div class="alignInCenter">
        <?php require('./View/components/header.php') ?>
        <div class="alignButton">
            <a href="./View/add.php">
                <button type="button" class="btn btn-success">Adicionar novo item </button>
            </a>
            <a href="./View/list.php">
                <button type="button" class="btn btn-primary">Ver lista de itens</button>
            </a>
        </div>
    </div>
</body>