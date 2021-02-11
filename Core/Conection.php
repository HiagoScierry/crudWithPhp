<?php

$dsn = "mysql:host=localhost;dbname=family";
$user = "root";
$passwd = "";

try {
    $pdo = new PDO($dsn, $user, $passwd);
} catch (\Throwable $th) {
    echo 'Erro de conexão' . $th;
}
