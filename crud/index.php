<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sistema</title>
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

    ?>
</body>

</html>