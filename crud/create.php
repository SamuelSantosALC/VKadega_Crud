<?php

$tipo = "Vinho";
$nome = "São francisco";
$fornecedor = "?";
$stmt->execute();

$sql = "INSERT INTO usuarios (Tipo, Nome, Fornecedor) VALUES (:Tipo, :Nome, :Fornecedor)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Tipo', $tipo);
$stmt->bindValue(':Nome', $nome);
$stmt->bindValue(':Fornecedor', $fornecedor);
