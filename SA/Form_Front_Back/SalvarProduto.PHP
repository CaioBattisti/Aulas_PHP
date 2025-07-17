<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Produto Cadastrado</title>
</head>
<body>
    <h1>Dados do Produto Cadastrado:</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Nome do Remédio:</strong> " . htmlspecialchars($_POST['Nome_Produto']) . "</p>";
        echo "<p><strong>Quantidade Enviada (Caixas):</strong> " . htmlspecialchars($_POST['Qntd_Enviada']) . "</p>";
        echo "<p><strong>Quantidade em Estoque (Caixas):</strong> " . htmlspecialchars($_POST['Qntd_Estoque']) . "</p>";
        echo "<p><strong>Nome do Fornecedor:</strong> " . htmlspecialchars($_POST['Nome_Fornecedor']) . "</p>";
        echo "<p><strong>Lote do Remédio:</strong> " . htmlspecialchars($_POST['Lote']) . "</p>";
        echo "<p><strong>Validade do Remédio:</strong> " . htmlspecialchars($_POST['Validade']) . "</p>";
        echo "<p><strong>Data da Fabricação:</strong> " . htmlspecialchars($_POST['Data_Fabricacao']) . "</p>";
        echo "<p><strong>Tipo do Remédio:</strong> " . htmlspecialchars($_POST['Tipo_Remedio']) . "</p>";
    } else {
        echo "<p>Nenhum dado de produto foi enviado.</p>";
    }
    ?>
    <br>
    <a href="../SAProduto.HTML"><button type="button">Voltar ao Cadastro de Produto</button></a>
    <a href="../SA_TelaPrincipal.HTML"><button type="button">Voltar à Tela Principal</button></a>
</body>
</html>