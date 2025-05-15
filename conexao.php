<?php
require_once 'conexao.php';

$host = "localhost";
$db = "VKadega";
$user = "root";
$pass = "";



try {
    $conexao = new PDO(
        "mysql:host=localhost;dbname=VKadega;charset=utf8mb4",
        "root",
        ""
    );
} catch (PDOException $erro) {
    echo "A conexão falhou: " . $erro->getMessage();
}
