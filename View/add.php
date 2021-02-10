<?php require('./components/head.php') ?>

<head>
    <link rel="stylesheet" href="./assets/main.css" />
</head>

<body>
    <?php require('./components/header.php') ?>

    <div class="alignAdd">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome :</label>
                <input type="text" name="nome" class="form-control" placeholder="João">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Parentesco :</label>
                <input type="text" name="parentesco" class="form-control" placeholder="João">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Idade</label>
                <input type="number" name="idade" class="form-control" placeholder="1,2,10,20 ...">
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
            <a href="../index.php">
                <button type="button" class="btn btn-danger">
                    Cancelar
                </button>
            </a>
            <a href="./list.php">
                <button type="button" class="btn btn-primary">
                    Ver lista
                </button>
            </a>
        </form>
    </div>
</body>