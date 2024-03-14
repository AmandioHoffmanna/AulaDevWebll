<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Formulário</title>
    <style>
        /* Estilos CSS */
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<?php
// Exibir método HTTP utilizado
echo "<h2>Método HTTP Utilizado:</h2>";
echo "<p>GET</p>";

// Exibir cabeçalhos da requisição HTTP
echo "<h2>Cabeçalhos da Requisição:</h2>";
foreach (getallheaders() as $nome => $valor) {
    echo "<p>$nome: $valor</p>";
}

// Exibir dados enviados pelo formulário
echo "<h2>Dados do Formulário:</h2>";
echo "<p><strong>Nome:</strong> " . $_GET['nome'] . "</p>";
echo "<p><strong>Telefone:</strong> " . $_GET['telefone'] . "</p>";
echo "<p><strong>E-mail:</strong> " . $_GET['email'] . "</p>";
echo "<p><strong>Mensagem:</strong> " . $_GET['mensagem'] . "</p>";
?>

</body>
</html>
