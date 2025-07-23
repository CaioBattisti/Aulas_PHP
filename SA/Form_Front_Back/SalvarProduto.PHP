<?php
session_start();

// Verifica se existe a sessão para armazenar produtos
if (!isset($_SESSION["produtos"])) {
    $_SESSION["produtos"] = array();
}

// Se for um POST válido, adiciona os dados do novo produto à sessão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = array(
        "Nome_Produto"     => htmlspecialchars($_POST['Nome_Produto']),
        "Qntd_Enviada"     => htmlspecialchars($_POST['Qntd_Enviada']),
        "Qntd_Estoque"     => htmlspecialchars($_POST['Qntd_Estoque']),
        "Nome_Fornecedor"  => htmlspecialchars($_POST['Nome_Fornecedor']),
        "Lote"             => htmlspecialchars($_POST['Lote']),
        "Validade"         => htmlspecialchars($_POST['Validade']),
        "Data_Fabricacao"  => htmlspecialchars($_POST['Data_Fabricacao']),
        "Tipo_Remedio"     => htmlspecialchars($_POST['Tipo_Remedio'])
    );

    // Adiciona o novo produto na lista
    $_SESSION["produtos"][] = $produto;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos Cadastrados</title>
</head>
<body>
    <h1>Lista de Produtos Cadastrados:</h1>

    <?php
    if (!empty($_SESSION["produtos"])) {
        foreach ($_SESSION["produtos"] as $index => $produto) {
            echo "<hr>";
            echo "<h3>Produto " . ($index + 1) . "</h3>";
            echo "<p><strong>Nome do Remédio:</strong> {$produto['Nome_Produto']}</p>";
            echo "<p><strong>Quantidade Enviada (Caixas):</strong> {$produto['Qntd_Enviada']}</p>";
            echo "<p><strong>Quantidade em Estoque (Caixas):</strong> {$produto['Qntd_Estoque']}</p>";
            echo "<p><strong>Nome do Fornecedor:</strong> {$produto['Nome_Fornecedor']}</p>";
            echo "<p><strong>Lote do Remédio:</strong> {$produto['Lote']}</p>";
            echo "<p><strong>Validade do Remédio:</strong> {$produto['Validade']}</p>";
            echo "<p><strong>Data da Fabricação:</strong> {$produto['Data_Fabricacao']}</p>";
            echo "<p><strong>Tipo do Remédio:</strong> {$produto['Tipo_Remedio']}</p>";
        }
    } else {
        echo "<p>Nenhum produto cadastrado ainda.</p>";
    }
    ?>

    <br><br>
    <a href="../SAProduto.HTML"><button type="button">Voltar ao Cadastro de Produto</button></a>
    <a href="../SA_TelaPrincipal.HTML"><button type="button">Voltar à Tela Principal</button></a>
</body>
</html>
