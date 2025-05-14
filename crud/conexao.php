<?php

$host = "localhost";
$db = "crud";
$user = "root";
$pass = "";



try {
    $conexao = new PDO(
        "mysql:host=localhost;dbname=crudsimples;charset=utf8mb4",
        "root",
        "123456"
    );
} catch (PDOException $erro) {
    echo "A conexão falhou: " . $erro->getMessage();
}
