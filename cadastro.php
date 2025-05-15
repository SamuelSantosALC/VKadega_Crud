<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?act=save" method="POST" name="form1">
        <h1>Cadastro de Bebidas</h1>
        <hr>
        <input type="hidden" name="id">
        Tipo:
        <input type="text" name="Tipo" />
        Nome:
        <input type="text" name="Nome" />
        Fornecedor:
        <input type="text" name="Fornecedor" />

        <input type="submit" value="salvar" />
        <hr>
    </form>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=VKadega', 'root', '');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tipo = $_POST['Tipo'] ?? '';
        $nome = $_POST['Nome'] ?? '';
        $fornecedor = $_POST['Fornecedor'] ?? '';

        try {
            $sql = "INSERT INTO usuarios (Tipo, Nome, Fornecedor) VALUES (:Tipo, :Nome, :Fornecedor)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':Tipo', $tipo);
            $stmt->bindValue(':Nome', $nome);
            $stmt->bindValue(':Fornecedor', $fornecedor);
            $stmt->execute();
            echo "Cadastro realizado com sucesso!";
        } catch (Exception $e) {
            echo "Erro ao inserir: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>
